import sys

import numpy as np
import onnxruntime as ort
import torch
from PIL import Image
from torchvision import transforms

class_names = ['illustration', 'photo']

options = ort.SessionOptions()
options.intra_op_num_threads = 1
options.inter_op_num_threads = 1
options.execution_mode = ort.ExecutionMode.ORT_SEQUENTIAL

session = ort.InferenceSession("tachikoma/tachikoma.onnx", providers=['CPUExecutionProvider'], sess_options=options)
input_name = session.get_inputs()[0].name

data_transforms = {
    'val': transforms.Compose([
        transforms.Resize(224),
        transforms.ToTensor(),
        transforms.Normalize([0.485, 0.456, 0.406], [0.229, 0.224, 0.225])
    ]),
}

def categorize(session, img_paths, data_transforms):
    all_tensors = []

    for path in img_paths:
        img = Image.open(path).convert('RGB')

        # Apply transforms (returns a tensor of shape [3, 224, 224])
        img_tensor = data_transforms['val'](img)
        all_tensors.append(img_tensor)

    batch_tensor = torch.stack(all_tensors)
    batch_np = batch_tensor.numpy().astype(np.float32)

    # 3. Run inference ONCE for the whole batch
    outputs = session.run(None, {input_name: batch_np})[0]

    # 4. Process all results at once
    exp_out = np.exp(outputs)
    probs = exp_out / np.sum(exp_out, axis=1, keepdims=True)

    conf_lvs = np.max(probs, axis=1)
    preds = np.argmax(probs, axis=1)

    return conf_lvs, preds

img_paths = sys.argv[1:]
conf_lvs, preds = categorize(
    session,
    img_paths=img_paths,
    data_transforms=data_transforms
)

for conf, pred in zip(conf_lvs, preds):
    print(f"{pred} {conf:.2f}")
