<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/tohnochan/index.html */
class __TwigTemplate_124012a130cac1aac0d44f38445eaa559c63dc2d4d907ba294098c0f10b3240e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
\t<title>";
        // line 4
        echo $this->getAttribute(($context["settings"] ?? null), "title", []);
        echo "</title>
\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 5
        echo $this->getAttribute(($context["config"] ?? null), "root", []);
        echo $this->getAttribute(($context["settings"] ?? null), "css", []);
        echo "\"/>
\t";
        // line 6
        if ($this->getAttribute(($context["config"] ?? null), "url_favicon", [])) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_favicon", []);
            echo "\" />";
        }
        // line 7
        echo "\t";
        $this->loadTemplate("header.html", "themes/tohnochan/index.html", 7)->display($context);
        // line 8
        echo "  \t<script src=\"slogan.js\" defer></script>
</head>
<body>
\t<header>
<center>
<div style=\"float:center;\">
<img alt=\"logo\" src=\"/images/main/logospin.gif\" /><img alt=\"background\" src=\"/images/main/sitefrontnew.png\" />
</div>


\t\t<div class=\"slogan\"><p id=\"slogan\"></p></div>
\t</header>
<!--------------------------------------news tab test zone------------------------------------------------------>
\t\t

<script type=\"text/javascript\">

\tvar TAB_COUNT = 6;

\tfunction ChangeTab(index)
\t{
\t\tfor (var i = 0; i < TAB_COUNT; i++)
\t\t{
\t\t\tdocument.getElementById(\"Tab\" + i).style.display = (i == index ? \"block\" : \"none\");
\t\t\tdocument.getElementById(\"TabMenu\" + i).className = (i == index ? \"NewsMenuCurrent\" : \"NewsMenu\");
\t\t}
\t}

</script>

<br/><br/>
<center><b>
 
<p style=\"color:#ff0000\";>Goodbye, Kusaba!<br/>As of today, we're boldly going where every other imageboard has gone before by kicking Kusaba to the curb and moving forward with all-new software for Tohno-chan. <br/><br/>Not only that! You'll notice that we'll also be switching over to Tohno-chan.org, and https. <br/> </p>
</b></center>
<div class=\"NewsDiv\">

\t<table cellspacing=\"0px\" cellpadding=\"0px\">
\t\t<tr>
\t\t\t<td class=\"NewsMenu\" onclick=\"ChangeTab(0);\" id=\"TabMenu0\" >
\t\t\t\tMain
\t\t\t</td>
\t\t\t<td class=\"NewsMenu\" onclick=\"ChangeTab(1);\" id=\"TabMenu1\" >
\t\t\t\tNews
\t\t\t</td>
\t\t\t<td class=\"NewsMenu\" onclick=\"ChangeTab(2);\" id=\"TabMenu2\" >
\t\t\t\tFAQ
\t\t\t</td>
\t\t\t<td class=\"NewsMenu\" onclick=\"ChangeTab(3);\" id=\"TabMenu3\" >
\t\t\t\tRules
\t\t\t</td>
\t\t\t<td class=\"NewsMenu\" onclick=\"ChangeTab(4);\" id=\"TabMenu4\" >
\t\t\t\tBoards
\t\t\t</td>
            <td class=\"NewsMenu\" onclick=\"ChangeTab(5);\" id=\"TabMenu5\" >
\t\t\t\tsupporters
\t\t\t</td>
\t\t</tr>
\t</table>




\t<div id=\"Tab0\">
                       <div class=\"NewsTitleStrip\">Main</div>
\t\t<div class=\"NewsContent\">




<center>
<table width=\"90%\" table  height=\"250\"  cellpadding=\"5\" cellspacing=\"0\" >
  <tr>
<td><td  valign=\"top\"><div class=\"recent_posts\"><table width=\"100%\"  cellpadding=\"0\" cellspacing=\"1\"></div>

<tr>
<tr>
<th class=\"tabletop\" colspan=\"3\">Board map</th>
</tr>

<tr>
<th class=\"tabletop\" colspan=\"3\">Media/Entertainment</th>
</tr>

<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/an/\" TARGET=\"_top\">/an/ - Anime</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/ma/\" TARGET=\"_top\">/ma/ - Manga</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/vg/\" TARGET=\"_top\">/vg/ - Video Games</a></center></div></td>


</tr>
<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/foe/\" TARGET=\"_top\">/foe/ - Touhou</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/mp3/\" TARGET=\"_top\">/mp3/ - Music</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/vn/\" TARGET=\"_top\">/vn/ - Visual Novels</a></center></div></td>
</tr>

<tr>
<th class=\"tabletop\" colspan=\"3\">Hobbies/Interests</th>
</tr>

<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/fig/\" TARGET=\"_top\">/fig/ - Collectibles</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/navi/\" TARGET=\"_top\">/navi/ - Science & technology</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/cr/\" TARGET=\"_top\">/cr/ - Creativity</a></center></div></td>

</tr>

<tr>
<th class=\"tabletop\" colspan=\"3\">General discussion</th>
</tr>

<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/so/\" TARGET=\"_top\">/so/ - Ronery</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/mai/\" TARGET=\"_top\">/mai/ - Waifu</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/ot/\" TARGET=\"_top\">/ot/ - Otaku Tangents</a></center></div></td>
</tr>

<tr>
<th class=\"tabletop\" colspan=\"3\">Other</th>
</tr>
<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/irc/\" TARGET=\"_top\">/irc/ - IRC</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/ddl/\" TARGET=\"_top\">/ddl/ - Data</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/arc/\" TARGET=\"_top\">/arc/ - Archive</a></center></div></td>
</tr>
<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/ns/\" TARGET=\"_top\">/ns/ - Hentai</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/kf\" TARGET=\"_top\"> /kf/ - Kemono Friends</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/pic/\" TARGET=\"_top\">/pic/ - Dump</a></center></div></td>
</tr>
<tr>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/lol/\" TARGET=\"_top\">/lol/ - Funposting</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/tat/\" TARGET=\"_top\">/tat/ - Debates</a></center></div></td>
<td width=\"33%\" class=\"tablesub\"><div class=\"boards\"><center><a href=\"/fb/ \" TARGET=\"_top\">/fb/ - feedback</a></center></div></td>
</tr>
<td><br/> </td>



<?php




//Recent posts and Recent Images

//Get board info
\$boards = array();
\$results = \$tc_db->

<table width=\"100%\"  cellpadding=\"0\" cellspacing=\"0\" border=\"0px\" bordercolor=\"#000000\">
<tr BACKGROUND=\"\"><TH colspan=\"5\"  div style=\" border: 0px solid #000000; \"><div class=\"tabletop2\">Recent posts

</div>
</tr>

";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recent_posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 166
            echo "<tr> <td div style=\" border: 0px solid #000000;  padding-top : 1px;border-top: 0px solid #000000;\"> <div class=\"tablesub\"><div class=\"replysub\"\ttitle=\"";
            echo strip_tags($this->getAttribute($context["post"], "body", []));
            echo "\">
\t";
            // line 167
            echo $this->getAttribute($context["post"], "board_name", []);
            echo ": 
\t<a href=\"";
            // line 168
            echo $this->getAttribute($context["post"], "link", []);
            echo "\">
\t";
            // line 169
            echo $this->getAttribute($context["post"], "snippet", []);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "</a></div></td></tr>

</table></td>

<td><td style=\"vertical-align:top\"><div class=\"recent_posts\"><table width=\"100%\"  cellpadding=\"0\" cellspacing=\"0\" border=\"0px\" bordercolor=\"#0000ff\">
<table div style=\"border-top: 0px solid #000000;\">
<th div style=\" border: 0px solid #000000; padding: 0px;\"><div class=\"tabletop\">Recent Images</div></th>


\t";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recent_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 180
            echo "\t<tr>
    <td div style=\" border: 0px solid #000000; padding: 0px; border-top: 0px solid #000000;\"> <div class=\"picslot\"> <div class=\"picitself\"> <center> <a href=\"";
            // line 181
            echo $this->getAttribute($context["post"], "link", []);
            echo "\"> </div>
\t<img src=\"";
            // line 182
            echo $this->getAttribute($context["post"], "src", []);
            echo "\"  border=\"0\" /  div class=\"picitself\">
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo " </a></td></div>

</tr></table>

</tr>
</table>
</center>















\t\t</div>
\t</div>

<!--news tab-->
<div id=\"Tab1\" style=\"display: none;\">

\t\t";
        // line 211
        if ((twig_length_filter($this->env, ($context["news"] ?? null)) == 0)) {
            // line 212
            echo "\t\t\t<p style=\"text-align:center\" class=\"unimportant\">(No news to show.)</p>
\t\t";
        } else {
            // line 214
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 215
                echo "\t\t\t\t<div class=\"NewsTitleStrip\"><h2 id=\"";
                echo $this->getAttribute($context["entry"], "id", []);
                echo "\">
\t\t\t\t\t";
                // line 216
                if ($this->getAttribute($context["entry"], "subject", [])) {
                    // line 217
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["entry"], "subject", []);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 219
                    echo "\t\t\t\t\t\t<em>no subject</em>
\t\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t\t<span class=\"unimportant\"> &mdash; by ";
                echo $this->getAttribute($context["entry"], "name", []);
                echo " at ";
                echo twig_date_filter($this->getAttribute($context["entry"], "time", []), $this->getAttribute(($context["config"] ?? null), "post_date", []), $this->getAttribute(($context["config"] ?? null), "timezone", []));
                echo "</span>
\t\t\t\t</h2></div>
\t\t\t\t<div class=\"NewsContent\"><p>";
                // line 223
                echo $this->getAttribute($context["entry"], "body", []);
                echo "</p></div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "\t\t";
        }
        // line 226
        echo "
<div class=\"NewsTitleStrip\"> news subject </div>
<div class=\"NewsContent\"> news content </div>

</div>









<!--faq tab-->
<div id=\"Tab2\" style=\"display: none;\">
<?php
//Faq
\$results = \$tc_db-><div class=\"NewsTitleStrip\">Introduction</div>
<div class=\"NewsContent\">T.o.h.n.o - Chan<br/>
True<br/>
Otaku<br/>
Hikikomori<br/>
Neet<br/>
Organization<br/>
Channel<br/><br/>
<div class=\"NewsTitleStrip\">Tips</div>

<div class=\"NewsContent\">Spoiler tags are done in the same way as back on 4chan:<br/>
<br/>
Spoiler: [spoiler]text[/spoiler]<br/>
<i>Italic:</i> [i]text[/i]<br/>
<b>Bold:</b> [b]text[/b]<br/>
<s>Strike-through:</s> [s]text[/s]<br/>
<u>Underline:</u> [u]text[/u]<br/>
ASCII art: [aa]text[/aa]<br/>
<br/>
A few possibly useful tips:<br/>
To post an embedded video, paste only the code at the end of the url into the Media ID field.<br/>
Example: http://www.youtube.com/watch?v=<b>GgF99qTtHpE</b>&feature;=related<br/>
<br/>
Embedded video posts can not be combined with pics or .mp3s. If you try to post those with an embedded video, only the video will show up.<br/>
<br/>
Youtube deletes videos all the time, primarily that of anime previews (copyrights bs) so it's not really recommended that you make threads using these ( only a recomendacion, not a rule or anything like that. ) and no, images and embedded videos can not be edited after posting, at this time.<br/>
<br/>
Most site errors can be easily fixed by hitting the back button, refreshing the page. </div>
<div class=\"NewsTitleStrip\">Links</div>
<div class=\"NewsContent\">Our IRC channel:<br/>
#tohno-chan on irc.rizon.net.<br/>
If you do not have an IRC client, you can still join by heading over to our /irc/ board.<br/>
<a href=\"https://web.archive.org/web/20250126093552/http://tohno-chan.com/irc/\">http://tohno-chan.com/irc/</a><br/>
<br/>
Our MAL club:<br/>
<a href=\"https://web.archive.org/web/20250126093552/http://myanimelist.net/clubs.php?cid=22369\">http://myanimelist.net/clubs.php?cid=22369</a><br/>
<br/>
Our Steam group:<br/>
<a href=\"https://web.archive.org/web/20250126093552/http://steamcommunity.com/groups/tohno-chan\">http://steamcommunity.com/groups/tohno-chan</a><br/>
<br/>
Our figure collection club:<br/>
<a href=\"https://web.archive.org/web/20250126093552/http://myfigurecollection.net/club/524\">http://myfigurecollection.net/club/524</a><br/>
<br/>
There is no official tohno-chan facebook, discord, twitter, or reddit page and there never will be. If you come across one be aware it is not supported or affiliated with us in any way shape or form.</div>
<div class=\"NewsTitleStrip\">Credits</div>
<div class=\"NewsContent\">I'd like to extend a special thanks to a few guys that really helped out around here.<br/>
To Popo for giving me the push I needed to break away from the original version of our site, and who helped in finding our current host, and with setting things up.<br/>
To Hamish who's helping a lot in the development of our kusaba site that we used for many years<br/>
To Imoto, fbw, plasticman, and himidere for going above and beyond to not only fix issues with our current version of TC, but to create new features for it as well.<br/>
To asie for helping in his own way. <br/>
To DSG for beign gay<br/>
To Ayu-Ayu for proffreeding thi's mess.<br/>
To our mods who do an awesome job of keeping this place nice and clean.<br/>
And to everyone else who has stuck with us for whatever reason all this time. You are what keeps the site going, because after all, without all the users, this site would be nothing.</div>
<div class=\"NewsTitleStrip\">Frequently asked questions.</div>
<div class=\"NewsContent\">
Q: Will you ever force Anonymous?<br/>
A: No, shut up.<br/>
<br/>
Q: How does I became a mod????<br/>
A: If you would like to be a moderator for the site, message \"Tohno_\" or \"Tohno\" via IRC on Rizon.<br/>
<br/>
Q: What's the significance of the site logo thing? <br/>
A: It's an envelope, commonly used in japan for giving gifts of money. Tohno Minagi, would hand out rice tickets in these envelopes.<br/>
<br/>
Q: What's the deal with \"Ford Driver\"?<br/>
A: It's what we call normalfags.<br/>
<br/>
Q: \"are you gonna send us to dubai tohno?\"<br/>
A: Yes.<br/>
<br/>
Q: Can you add X theme/style to the site?<br/>
A: Yeah sure, why not?<br/>
<br/>
Q: How about this banner I made, can you add it to the site?<br/>
A: sure, post it in /fb/ and I'll add it in when I get a chance.<br/>
<br/>
Q: How can I contact the site staff or admin?<br/>
A: Quickest way to do this is on the IRC channel, there's usually two or three mods there at any given time. You can also message \"Tohno_\" or \"Tohno\" on rizon.net. This loser has no life, so if he doesn't respond right away he's either asleep or... probably just asleep.<br/>
<br/>
Q: Are you guys serious about the waifu thing?<br/>
A: Yes, stop asking that.<br/>
<br/>
Q: How does post edit work?<br/>
A: That's currently being worked on. For the time being it doesn't work.<br/>
<br/>
Q: Why is tohno-chan so slow?<br/>
A: Because shut up.<br/>
<br/>
Q: Do you sell user data? <br/>
A: No.<br/>
<br/>
Q: I don't see any ads, How does this site make money?<br/>
A: It doesn't.<br/>
<br/>
Q: Do you collect user data?<br/>
A: We don't need or want your data. We just use Cookies for passwords and theme/style selection.<br/>
<br/>
Q: Who or what is this \"Haruhi\"?<br/>
A: The almighty lord and savior of this world.<br/>
<br/>
Q: Why did my post get deleted?<br/>
A: Because it sucked.<br/>
<br/>
Q: How do I donate money to help with the site's server costs?<br/>
A: You know damn well you'd never ask that.<br/>
<br/>
Q: What is love?<br/>
A: Baby don't hurt me.<br/>
<br/>
Q: Where do I go to make a request for a feature?<br/>
A: Head on over to /fb/ to drop us some feedback.<br/>
<br/>
Q: Is this where the party's at?<br/>
A: No, it's the next website over.<br/>
<br/>
Q: I don't agree with someone's opinion, what do I do?<br/>
A: Tell them they don't belong on this site in the most condescending way possible. That's what all the cool kids do, you want to be cool right?<br/>
<br/>
Q: Do tripcodes here work the same as on 4chan?<br/>
A: Unsecured trips should work the same, secure trips would use a different algorithm (kinda impossible to use the same one they got) so the trip would come out different.
<br/>
</div>
<div class=\"NewsTitleStrip\">other stuff</div>



</div>
<br/>
<br/>
<br/>
</div>


<!--rules tab-->
<div id=\"Tab3\" style=\"display: none;\">
<br/><br/>Tohno-chan is an anime-themed image board for NEETs, hikikomori, (true) otaku, and other social outcasts. Please take this into consideration when posting.
<br/><br/>_____

<br/><br/>The following rules apply to all parts of this website and our affiliate IRC channel:

<br/><br/>01) Uploading, posting, discussing, requesting, or linking to anything that violates local or United States law.
<br/>- Just covering our ass with this one, really.

<br/><br/>02) Advertising and/or spamming.
<br/>- By Advertising we refer to unsolicited links and/or referrals to any and all unwelcome content, unless it is directly related to the subject of the board it is posted on.
<br/>- Spamming refers to repeatedly and continuously posting large amounts of the same content.

<br/><br/>03) Ban evasion.
- When we place a ban it's probably for a damn good reason, avoiding it will not be tolerated.

<br/><br/>04) Posting or linking to 3D (real) pornography, Guro, or pictures of 3D (real) people.
<br/>- By 3D (real) pornography, we refer to pornographic videos and/or images depicting any and all real world humans regardless of age. This may also include life-like computer renderings of humans as well. Crazy as it might sound, we here do not much care for the sight of other human beings, especially in pornographic depictions. It makes many here uncomfortable to say the least.
<br/>- Posting landscapes, scenery, animals, and inanimate objects are fine though.
<br/>- By Guro we refer to material depicting extreme violence, torture, and/or mutilation.

<br/><br/>05) My Little Pony (MLP) or anything related to the related to 'furry' fandom, pornographic or not. (No Horo is not furry, stfu)
<br/>- We are not bronies, or furries, please take that stuff somewhere else.
<br/>- Exemptions may be made on /mai/ for some of what may be considered furry waifus on case by case situations. However, please refrain from posting images of Western media.

<br/><br/>06) Excessive blogging, especially about your or anyone else's sex life.
<br/>- By blogging we refer to the act of talking about one's self or your normal daily life. This is typical behavior to a degree, but by excessive we mean repeatedly making long winded posts (150+ words), or large amounts of these style of posts in a short time span. If it's a personal story or situation that other people may find interesting then that is acceptable.
<br/>- An exemption to this rule applies to /so/, as the board deals heavily in personal issues.

<br/><br/>07) /b/ Shit.
<br/>- This refers to the moronic meme spouting shitposting type of behavior you would find on the infamous /b/ boards of other imageboards.
<br/>- Examples of shitposting includes \"GET\" threads, which are threads/posts created solely to point out having multiple instances of the same number in your post (such as having post no.5555). greentexting, which is the style of posting which uses a > at the start of every sentence, rather than using them for quotes as they're intended, as well as making said sentences in malformed bullet point styles. Example: >MFW OP is a fag >thinks I'm not fappin to his waifu >saged, reported, and called the cops
<br/>- There is also reaction images, which can help set the mood/emotion the poster is trying to convey, but in excess can be obnoxious, especially when used without any accompanying text.
<br/>- Over all, Shitposting here will be defined as posts failing to be constructive, informative, or entertaining in any form. These posts are typically pointless and/or offensive. To elaborate, a joke might not be considered a shitpost, but a rude and/or out of context comment might be.
<br/>- Posts with only 1-2 words without media attachment may also be considered shit posts, unless necessary for the thread/post.

<br/><br/>08) Narutard shit.
<br/>- This primarily relates to the the /an/ board. \"Narutard shit\" refers to the entry levels of anime fandom that deal in conventions, anime clubs, obsessive fixations of select mainstream anime (such as naruto or dragonball), the belief that dubs are not complete garbage, and all things related to funimation.

<br/><br/>(9) Being a baka.
<br/>_ C Cirno if u want 2 no moar

<br/><br/>10) Disrespectful behavior on /mai/.
<br/>- /mai/ is a place for love and compassion. If you have a problem with someone's waifu, keep it to yourself or post about it on a different but still relevant board.
<br/>- This includes but is not limited to name calling, insulting, making fun of, or trash talking someone's waifu or the poster.

<br/><br/>11) Excessive flaming, trolling, or harassing other users.
<br/>- This refers to behavior that involves deliberately attacking or insulting other users. While TC is not an SJW hug box (outside of /mai/), going out of your way to upset/bother people is not cool and will not be tolerated.
<br/>- Note that if someone disagrees with you or finds your posts offensive without you purposefully trying to upset or offend them, that is entirely their problem and is not in violation of this rule.

<br/><br/>12) Announcing you or another poster is female or drawing attention to this matter.
<br/>- We DO NOT have a ban on women here, and this would be impossible to enforce even if we did. What we are not allowing here is openly stating or implying that you're female.
<br/>- People on sites like these tend to loose their shit and turn into mindless idiots when women show up. It also aggravates and upsets many of those in our user base.

<br/><br/>13) Drug discussion outside of /420/
<br/>- This deals with any and all discussion related to illegal narcotics or controlled substances as well as sharing links on where to buy/acquire them.
<br/>- Discussion related to these substances is strictly to be kept on http://tohno-chan.com/420
<br/>- However, even on /420/ any discussion related to the sale or purchasing of illegal drugs is still forbidden (see rule 1).
<br/><br/>_____

<br/><br/>The following are rules, but are not as severe infractions. Many of these are just as much for your own good as for the site, something like friendly advice. These actions may likely result in your post or media being deleted, and repeated infractions may result in a warning or ban, length of which to be determined by a moderator. Many of these are only clarifying what the above rules would apply to.

<br/><br/>Ex.01) Emoticons. E.g. :-) and xD.
<br/>- They're obnoxious >.>

<br/><br/>Ex.02) Political, religious, or gender discussion outside of /tat/.
<br/>- Generally it just pisses people off, starts fights, and never leads to anything good. Best to avoid these topics. However they are free to be discussed on /tat/ so long as the rest of the site rules are abided by.

<br/><br/>Ex.03) Announcing that you're from 4chan.
<br/>- People here really don't much like 4chan or people from it, so best kept to yourself on that one.

<br/><br/>Ex.04) Creating threads that already exist.
<br/>- Because the flow of traffic on TC is so slow, we prefer not to have multiple threads dealing in the same subject. A thread for anime xyz isn't likely to get many posts anyway, so the last thing we need are tons of empty threads about it.
<br/>- Just look for a thread related to what you're looking to talk about and post in that instead.

<br/><br/>Ex.05) Encouraging others to commit suicide.
<br/>- This should be self explanatory. Telling people to kill themselves isn't cool. See rules 1 and 11.

<br/><br/>Ex.06) Misusing or abusing spoilers.
<br/>- This mainly involves trying to hide rule breaking content by using spoiler tags, or using spoiler tags needlessly (to hide text that isn't a spoiler).

<br/><br/>Ex.07) Meta-posts and complaining about the community's views/opinions outside of /fb/.
<br/>- If you've got a problem with TC or it's userbase, take it to /fb/. That's what /fb/ is for.

<br/><br/>Ex.08) Mentioning your family and or loved ones.
<br/>- Many if not most of us here are bitter losers who have no one. We don't want to hear about your wife/girlfriend/friends/kids. so don't post about it. Brothers, sisters, parents and other such unavoidable relatives are fine however (within reason; see rule 6).

<br/><br/>Ex.09) Moronic behavior in general.
<br/>- Typos and misspellings are one thing, but try to avoid memes, what you'd like to do with your genitals, and senseless vulgarity. See rules 7 through 11.

<br/><br/>Ex.10) Western media.
<br/>- This site is built primarily around japanese media, as such it's generally best to avoid bringing up too much western media. Exceptions can be made for western games on /vg/.
<br/><br/>_____

<br/><br/>Those that cannot follow the rules shown on this page will be dealt with by our moderators as they they see fit. Don't be surprised if your post gets deleted. Minor infractions may likely result in a warning. Major infractions or multiple warnings will result in a ban with the duration depending on the situation and the judgement of the moderator carrying out the ban.
</div>


<!--Donations-->
<div id=\"Tab5\" style=\"display: none;\">
<div class=\"NewsTitleStrip\">supporters</div><br/>
<br/>

Here you can find a list of our currently supported donation platforms/methods. Bellow that, are some generious people who help keep us going!<br/>
<br/><br/>patreon.com/tohno
<br/><br/>ko-fi.com/tohno
<br/><br/>
<br/><br/>Shinden9 - via patreon
<br/><br/>赤いアオカケス - via patreon
<br/><br/>Cedar - via patreon
<br/><br/>Vexed - via patreon
<br/><br/>Killo - via ko-fi

</div>



<!--boards tab-->
<div id=\"Tab4\" style=\"display: none;\">
<div class=\"NewsTitleStrip\">Boards</div>
<div class=\"NewsContent\">



  <center>Here you can find a brief description of each board. </center><br/>
 <center>Most are pretty self explanatory, but many people, especially those new here, might not be sure about what goes where.</center>
<br/>
<br/>

<b>/a/ - Anime</b> <br/>
This is the anime board.
All things anime related, both new and old are welcome here.<br/>

<br/>
<b>/m/ - Manga</b> <br/>
Although primarily meant and used for manga, this board can also be used for general literature.<br/>

<br/>
<b>/mai/ - Waifu</b> <br/>
If you wish to analyze the concept of falling in love with a two dimensional representation of a human female, or simply dump some pics of your waifu, this board is one to make what you will of it.<br/>
Just remember to please respect each others loved ones.<br/>

<br/>
<b>/foe/ - Touhou</b> <br/>
Any and all things touhou related go here. That means stuff more appropriate for others boards, though every now and then is alright.<br/>

<br/>
<b>/vg/ - Video Games</b> <br/>
Home to the more popular and interactive media known as games.<br/>
Console, PC, or hand-held, it's all good.<br/>

<br/>
<b>/mp3/ - Music</b> <br/>
This board is for the discussing and posting of music and other forms of audio.<br/>

<br/>
<b>/vn/ - Visual Novels</b> <br/>
This board is not only for Japan's interactive novels and dating sims, but also for Japanese games that don't quite fit in /vg/.<br/>

<br/>
<b>/navi/ - science & technology</b> <br/>
While the main forcus might be tech, this is a place were people can discuss Literature, science, math, astronomy, history, etc.<br/>
A kind of... all-purpose intellectual pursuits board.<br/>

<br/>
<b>/cr/ - Creativity</b> <br/>
Let your creative juices flow on this board. Write something, draw something, or maybe even build something; the key word here is creativity.<br/>

<br/>
<b>/so/ - Ronery</b> <br/>
Feeling sad? Feeling lonely? Feeling hopeless, lost, pathetic, unloved, unappreciated, uncared for, neglected, or confused?<br/>
Feeling ronery?<br/>

<br/>
<b>/ot/ - Off Topic</b> <br/>
Want to make a thread but don't think it fits on any of the other boards? Well this is the place.<br/>
If this board were a category it would be \"other\".<br/>

<br/>
<b>/txt/ - text</b> <br/>
It's a umm.. text board, for like, text, and stuff. ...yeah I dunno.<br/>

<br/>
<b>/kf/ - Kemono Friends</b> <br/>
A sugoi tanoshi board<br/>
This is where all the friends post!<br/>

<br/>
<b>/pic/ - dump</b> <br/>
This is a place for posting large abouts of images, be it wall papers or fan art.<br/>
As some might ask, This board differs from /ns/ in that, that board is primarily for pornographic images, where as this board is primarily meant to be work safe.<br/>

<br/>
<b>/fig/ - Collectibles</b> <br/>
This board as you might have guessed is mainly for figures and dolls and such, but it's also for other merchandise and items, <br/>
pretty much anything sold that is based animation, game, vn or manga, <br/>
but this is not to say original items and western toys aren't also welcomed.<br/>

<br/>
<b>/navi/ - science & technology</b> <br/>
For all thhings technology, From computers to programing it can be found here. <br/>


<br/>
<b>/ns/ - Hentai</b> <br/>
Dirty boy! Dirty dirty dirty! Fapping material goes here.<br/>

<br/>
<b>/ddl/ - Data</b> <br/>
Here you can upload files or post links to files hosted off-site for sharing with others.<br/>
<br/>

<b>/fb/ - Feedback</b> <br/>
Here you can leave suggestions or ask questions regarding the site itself and even just discuss things related to the site.<br/>
We're very interested in what you think of the site and what you think might make it better for you the users.<br/>





\t\t</div>
\t</div>
\t\t</div>
\t\t


</div>


<br/>
<br/>

<!--info-->
<center>


<br/><br/><br/>

</center>
</div>

<br />


<!--footer-->
<center><div class=\"sitemap\">
<table width=\"100%\" cellpadding=\"0\">
<td width=\"20%\">
</td>
<td width=\"60%\" align=\"center\">
<?PHP include_once(\"linkbar.html\"); ?>
</td>
<td width=\"20%\" align=\"right\">
<?PHP include_once(\"https://www.tohno-chan.org/styleselect.html\"); ?>
</td>
</table>
</div></center>





  <P ALIGN=\"right\">


<td style=\"text-align: right;\">





\t\t\t</td>


  <P ALIGN=\"right\">


<td style=\"text-align: right;\">

</div>



\t\t</tr>
\t</table>
</div>

</p>



<!--------------------------------------news tab test zone------------------------------------------------------>
\t
\t
\t<div class=\"box-wrap\">

\t    <br>

\t   
\t   
\t\t<div class=\"mainBox\">
\t\t\t<h2>Stats</h2>
\t\t\t<ul>
\t\t\t\t<li>Total posts: ";
        // line 682
        echo $this->getAttribute(($context["stats"] ?? null), "total_posts", []);
        echo "</li>
\t\t\t\t<li>Unique posters: ";
        // line 683
        echo $this->getAttribute(($context["stats"] ?? null), "unique_posters", []);
        echo "</li>
\t\t\t\t<li>Active content: ";
        // line 684
        echo format_bytes($this->getAttribute(($context["stats"] ?? null), "active_content", []));
        echo "</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t
\t<hr/>

\t";
        // line 691
        $this->loadTemplate("footer.html", "themes/tohnochan/index.html", 691)->display($context);
        // line 692
        echo "<script type=\"text/javascript\">
\tinit_stylechooser();
\treadyStyleSelector();
</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/tohnochan/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 692,  820 => 691,  810 => 684,  806 => 683,  802 => 682,  344 => 226,  341 => 225,  333 => 223,  325 => 221,  321 => 219,  315 => 217,  313 => 216,  308 => 215,  303 => 214,  299 => 212,  297 => 211,  267 => 183,  259 => 182,  255 => 181,  252 => 180,  248 => 179,  237 => 170,  229 => 169,  225 => 168,  221 => 167,  216 => 166,  212 => 165,  53 => 8,  50 => 7,  44 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tohnochan/index.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/themes/tohnochan/index.html");
    }
}
