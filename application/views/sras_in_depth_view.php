<!DOCTYPE html>
<!--  Last Published: Thu Nov 09 2017 11:01:57 GMT+0000 (UTC)  -->
<html data-wf-page="59308463d3c8c02748aaee97" data-wf-site="58cad0536f26f255683f2ebf">
<head>
  <meta charset="utf-8">
  <title>SRAS In Depth</title>
  <meta content="SRAS In Depth" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/components.css" rel="stylesheet" type="text/css">
  <link href="css/crooklynmain.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Great Vibes:400","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Permanent Marker:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/logo-cc32.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/logo-cc256.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-3.2.0.js" integrity="sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
  <style>
  ::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
  ::-webkit-scrollbar-corner       { display: none; height: 0px; width: 0px; }
  .SCROLLABLE-Div-Class-Name {
    overflow-x: hidden;}
</style>
  <!--  Facebook Pixel Code  -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1220794488024725');
  fbq('track', 'PageView');
</script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1220794488024725&ev=PageView&noscript=1"></noscript>
  <!--  End Facebook Pixel Code  -->
  <script>
// On page ready
var Webflow = Webflow || [];
Webflow.push(function() {
  // For any tab-prev and tab-next clicks
  $('.tab-wrapper').on('click', '.tab-prev, .tab-next', function() {
    // Get direction
    var direction = $(this).hasClass('tab-prev') ? -1 : 1;
    // Get the tab links
    var tablinks = $(this).parent().find('.w-tab-menu');
    // Get index of current tab link, add direction
    var index = tablinks.find('.w--current').index() + direction;
    // If array out of bounds, click on the first
    index = index >= tablinks.children().length ? 0 : index;
    // Update tabs by triggering a "tap" event on the corresponding slide button
    tablinks.find('.w-tab-link').eq(index).trigger('click');
  }); // End click handler
}); // End ready function
</script>
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbarmain w-nav"><a href="#" class="headerlogoholder w-nav-brand"><img src="images/logo-cc2NEW.png" srcset="images/logo-cc2NEW-p-500x244.png 500w, images/logo-cc2NEW-p-800x390.png 800w, images/logo-cc2NEW-p-1080x527.png 1080w, images/logo-cc2NEW-p-1600x780.png 1600w, images/logo-cc2NEW-p-2000x975.png 2000w, images/logo-cc2NEW-p-2600x1267.png 2600w, images/logo-cc2NEW.png 3449w" sizes="(max-width: 479px) 270px, (max-width: 767px) 290px, 300px" class="headerlogo"></a>
    <div class="fb w-widget w-widget-facebook"><iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fcrooklynclan&amp;layout=button_count&amp;locale=en_US&amp;action=like&amp;show_faces=false&amp;share=false" scrolling="no" frameborder="0" allowtransparency="true" style="border: none; overflow: hidden; width: 225px; height: 35px;"></iframe></div>
    <nav role="navigation" class="w-nav-menu"><a href="indexmain" class="nav-link-2 w-nav-link">Home</a><a href="javascript:history.back();" class="nav-link-2 w-nav-link">Back</a></nav>
    <div class="menu-button-3 w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
  <div class="flexwrapper">
    <div data-duration-in="300" data-duration-out="100" class="srastabs w-tabs">
      <div class="tabs-menu-2 w-tab-menu">
        <a data-w-tab="tempotech" class="sras tab-link w--current w-inline-block w-tab-link">
          <div class="sras titler">THE TEMPO OF TECHNOLOGY</div>
        </a>
        <a data-w-tab="forwardThink" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">A FORWARD WAY OF THINKING</div>
        </a>
        <a data-w-tab="Hows this Legal" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">HOW&#x27;S THIS LEGAL?</div>
        </a>
        <a data-w-tab="clearingsamps" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">CLEARING SAMPLES</div>
        </a>
        <a data-w-tab="claimants" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">CLAIMING TRACKS</div>
        </a>
        <a data-w-tab="falseClaim" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">FALSE CLAIMS</div>
        </a>
        <a data-w-tab="theMoney" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">THE BREAKDOWN</div>
        </a>
        <a data-w-tab="boiledDown" class="sras tab-link w-inline-block w-tab-link">
          <div class="sras titler">WHY US?</div>
        </a>
        <a data-w-tab="DNR" class="sras tab-link w-inline-block w-tab-link">
          <div class="baddis titler">THE D.N.R. LIST (do not remix)</div>
        </a>
      </div>
      <div class="srastabscontent w-tab-content">
        <div data-w-tab="tempotech" class="tab-pane-2 w--tab-active w-tab-pane">
          <div class="bookanswer"><span class="reality"><strong xmlns="http://www.w3.org/1999/xhtml" class="important-text-3">UNDERSTANDING AND COMING TO TERMS WITH THE REALITY UPON US</strong></span><br><br>The digital era is here, it&#x27;s in full bloom, and things are changing around us in the DJ world and music industry by the day. Strides in technology are halving the timeline, and many ways of old have gone obsolete on a &quot;<em>whether you like it or not</em>&quot; basis..<br><br>Changes reflective of the technologies available to us today as a Music Industry are much-needed to maintain and stabilize a flourishing economy in our beloved business.<br>We don&#x27;t claim we have all the answers to a perfect new industry right now, but we are going to do our part and pave the road to the new industry one brick at a time.   <br><br>The foundation we&#x27;ve already laid over a decade ago with the first online &quot;DJ Only Boutique&quot;, the Crooklyn Clan Vault. This brick is bigger and better than the foundation and comes with a powerful solution to remixing, editing, and supplying the DJ in a TIMELY and <strong>LEGAL</strong> manner, the <strong>Simplified Remix Allocation System (S.R.A.S).</strong><br><br><strong>Before we get into the details.. </strong><br><br><span class="text-span-8">First, let it be known it is the #1 rule for our editing staff to claim each and every sample used in remixes and productions in the Audio Vault and Video Vault of this website.   <br xmlns="http://www.w3.org/1999/xhtml"><br xmlns="http://www.w3.org/1999/xhtml">Editors are in full understanding that they are legally bound by this rule when they agree to edit for the Crooklyn Clan Vault and failure to comply will lead to the suspension/revocation of editing privileges. Editor failure to list original works used will also result in the editor owing a &quot;UPA&quot; (Unpaid Allocation) that will date back to the release date of the track in question on our servers.<br><br>If you find a track that has a sample of your work in our system that means one way or the other you&#x27;ve got a check coming. Click on the info dropdown to the right to find that a proper credit for your track is included in the original works listed.</span></div>
        </div>
        <div data-w-tab="forwardThink" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer"><strong class="important-text-3">WHAT DO WE KNOW?</strong><br><br>No law or structure will take away the necessity of having the right version at the RIGHT time.  <br><br>Waiting to clear samples makes it impossible to provide these versions in the timely manner needed for them to hold maximum promotional value and overall effectiveness for BOTH the original artists and the DJ&#x27;s playing their tunes. <br><br>The smart and logical side of the industry know just what we are talking about.<br><br><strong class="important-text-3">GRABBING THE BULL BY THE HORNS.</strong><br>Remixes, mash-up&#x27;s, bootlegs - they will simply NEVER cease to exist, but thanks to the S.R.A.S., now original artists that find their work used in the Vault will be gaining exposure to our worldwide client base AND earning for each and every original track of theirs used in our featured remixes.<br><br>There’s no work to do for claimants, no calling the label, no waiting to see how you did for 3 months, no nonsense at all. Reports updated every 24 hours with ALWAYS ACCESS keep you on top of what&#x27;s going on while it&#x27;s happening.<br><br><strong>REMEMBER,</strong><br>We are not here for the general public - We don&#x27;t cut into streaming revenue, iTunes, Beatport, Amazon sales, or any other commercially available outlet to the public at ALL. We are here to service the THE DJ&#x27;S just as we always have... <br><br>We are concentrating on the DJ, that&#x27;s our skillset, that&#x27;s where we lay our hats and call home. <br><br>That is and HAS been the origin of our service - to provide utilities that make a DJ a BETTER DJ, and no matter where it goes tomorrow, a month from now, or 10 years from now, it will never lose its utility and appeal to the DJ community. The &quot;edit&quot;, &quot;mash-up&quot;, &quot;remix&quot;, or whatever else you want to call it, will always be necessary to the DJ community.  <br><br>Musical expression in the form of remixing is not easy or it would hold no value, and is without a doubt an art form and skillset all it&#x27;s own or there simply would be no demand for it. <br><br>Trust us, there&#x27;s a demand for it and we have capitalized on it for over a decade with data and real numbers to back us up.</div>
        </div>
        <div data-w-tab="Hows this Legal" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer"><strong class="important-text-3">WHAT MAKES IT OK FOR US TO DO THIS?</strong><br><br>Our online service is limited to working DJ&#x27;s, live performers, and music industry personnel ONLY. We do not service the general public, we do not stream music for casual listening purposes, and the music and video we do stream is at a very low quality and tiny resolution. Furthermore, no preview will play for a time longer than 3:30. Calling it anything more than &quot;utility&quot; is not sensible.<br><br>We are formally considered to be a &quot;DJ Service&quot;, &quot;Music Promotion Service&quot;, or &quot;Audio &amp; Video Customization Service&quot;. Although there are many gray areas of the law surrounding this category, our legal team with the use of generally common practices of music industry, and digital copyright laws (we abide by the DMCA) were able to come up with a legitimate &quot;opt-in / opt-out&quot; solution that leaves our company in a worst possible case scenario of a cease and desist on a per-track, per-entity, per-label basis.. <br><br>Over the course of the past 11 years we have been approached with Cease &amp; Desist situations numerous times and have resolved most without even having to remove the material from our servers. <br><br>The exclusion from a service such as ours in these times would do any label or artist more harm than good. Many have come to their senses in realizing this and have ceased their efforts after doing some homework on our platform.<br><br>Many record promoters, labels, artists, and other industry personnel will send us acapellas, instrumentals, and remix stems without us even asking for them in hopes that one of our Editors will decide to remix the track and it will get big on our platform. <br><br>We technically do not charge our clients for actual downloads of music. Clients pay for credit packages used to obtain tracks, and we use spending results to divide a commission pool to pay our Editors for the time spent creating derivative work(s) that make a track more &quot;DJ Friendly&quot; or easier to play in live performance use cases.</div>
        </div>
        <div data-w-tab="clearingsamps" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer">When our Editors claim original works used in their mixes, they go into a tremendous database we call the &quot;Original Works Database&quot;.  Our system and Editors work hand in hand to keep a clean record of each and every Original Work used for every remix uploaded to our service.</div>
          <div class="llz">A record in the Original Works bank is identified by the following 4 fields;</div>
          <div class="fieldholder">
            <div class="ogfield">TRACK NAME</div>
            <div class="ogfield">TRACK VERSION</div>
            <div class="ogfield">TRACK ARTIST</div>
            <div class="ogfield">TRACK FEATURED ARTIST</div>
          </div>
          <div class="b llz">In addition to the 4 fields above, each track is part of a Claimant sub-system that original work rights holders will have access to. The Claimant sub-system provides vital statistics on the usage of their portfolio of original works in the Vault.</div>
        </div>
        <div data-w-tab="claimants" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer">A &quot;Claimant&quot; is an entity that claims to <strong>LEGALLY</strong> own the rights (all or in part) to an &quot;Original Work&quot; used in a remix in the Crooklyn Clan Vault.<br><br>For an entity to claim their first Original Work in our system they must agree to our S.R.A.S. Policy by providing  the documentation requested in the Claimant Registration Form. <br><br>The Claimant Registration Form asks for information such as (but not limited to):<br><br>- Full Legal Name<br>- Street Address<br>- Valid Telephone Number<br>- Company Name<br>- Paypal Email Address (Paypal is our banking institution and therefore mandatory)<br>- Tax ID or SSN (United States Only) Yearly 1099&#x27;s are issued.<br>- Valid Photo ID<br><br>Once a claimant has &quot;Verified&quot; status they will have the ability to claim Original Works they have legal rights to, then add them to their portfolio inside of their Claimant Sub-System.<br><br><strong><em>So..</em></strong><br><br>When an entity <em>successfully</em> claims ownership rights to an Original Work they are granted &quot;Claimant&quot; status for that Original Work.<br><br>The entity will then have the ability to keep track of a tremendous amount of data about their track(s) usage in remixes created by our Editors in the Crooklyn Clan Vault. <br><br>If another entity makes a claim of ownership on the same original work, <strong><em>by default</em></strong> our system will produce an even split revenue stream for each of the entities (hence the term &quot;<em><strong>simplified</strong></em>&quot;). This works with as many claimants as there are for any original work in our system.</div>
        </div>
        <div data-w-tab="falseClaim" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer"><strong class="important-text-3">YOU THOUGHT YOU OWNED A SONG?</strong> <br><br>When an entity claims an Original work, the entity is entered into a <em><strong>legally-binding</strong></em> agreement that makes them <strong><em>fully responsible</em></strong> for their claim. <br><br>This means, if an entity should claim an original work they do not legitimately have the rights to and they become discovered, the Crooklyn Clan Vault will assist law enforcement, attorneys, and any other entities with any and all information we&#x27;ve obtained in the honest pursuit of justice.<br><br>In assist, we mean turn over all stored information on the claimants involved to law enforcement officials, government agencies, or law firms providing adequate proof of representation for any party involved. <br><br>The amount of information we collect from an entity before granting them &quot;Claimant&quot; status should prove to be a sufficient deterrent for false claims.</div>
        </div>
        <div data-w-tab="theMoney" class="tab-pane-3 w-tab-pane">
          <div class="bookanswer"><strong class="important-text-3">HOW DOES IT EARN?</strong><br><br>Off the top of each and every sale made in the Vault comes a percentage.<br>This percentage goes into what we call the &quot;<strong>SRAS Revenue Bank</strong>&quot;.<br><br>The total revenue into the SRAS Revenue Bank in a calendar month is calculated as 100% of the S.R.A.S. distribution allocation for that month.<br><br><strong class="impsras">That&#x27;s where the money comes from, now here&#x27;s what we do with it..</strong><br><br>Enhanced usage statistics are kept on each and every play, download, and access to any track in our entire system. <br><br>Enhanced Usage would be considered (but clearly not limited to);<br><br>Location of download (All Services)<br><span class="subit">Whether our clients are using the cloud based service or just using our service for downloads we always know where the track is going geographically for accurate royalty distribution across all territories. </span><br><br>Time of play (Cloud Crates)<br><span class="subit">While a Cloud Crates user is logged in we know exactly what time of day, and how long a track is loaded onto a deck. </span><br><br>Amount of plays (Cloud Crates)<br><span class="subit">While a Cloud Crates user is logged in we know how many times they use a track from our database. </span><br><br>Every remix has Original Works associated with it therefore providing us the ability to calculate the download/play usage of the Original Works themselves, and create a &quot;Usage Table&quot; structured just as any other chart would be.<br><br>This chart will tell us the Original works that have been used and give us the overall &quot;Percentage Of Usage&quot; on each and every Original Work in the database.<br><br>The Percentage Of Usage for each Original Work is then applied to the total revenue (100% SRAS Revenue Bank) determining a payout amount for each Original Work down to the penny. <br><br>The payout amount for each work is then broken down to the entities that hold Claimant status for that work. If &quot;Billie Jean&quot; has 5 Claimants, and Billie Jean accrued 12% of the total S.R.A.S. Revenue Bank, those 5 claimants would split that 12% evenly and be allocated payouts by our system. <br><br>Each month A Paypal payment will be issued to every claimant that has earned $5 USD or more off their total combined percentage of usage on all of their claims in that month.  <br>If a claimant has not earned $5, the balance will carry over until the claimant has earned $5 USD or more and a payout will be initiated.</div>
        </div>
        <div data-w-tab="boiledDown" class="tab-pane-2 w-tab-pane">
          <div class="certificates">
            <div class="certholder">
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Originality</div>
                <div class="certfact">We are the first online company of our kind with 10+ years of online data and knowledge of what DJ&#x27;s want and NEED around the world.</div>
              </div>
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Followers</div>
                <div class="certfact">We could fill Yankee Stadium MORE THAN A HALF DOZEN TIMES with the amount of DJ&#x27;s that have used our service over the past 10+ years.</div>
              </div>
            </div>
            <div class="certholder">
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Awesomeness</div>
                <div class="certfact">We are a household name in the DJ Community. <br>Platinum producers, worldwide touring DJ&#x27;s, and trendsetters for many working DJ&#x27;s providing the guidance and tools they need to enhance their live performances for over 2 decades and counting!</div>
              </div>
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Bossness</div>
                <div class="certfact">We are coined by some as &quot;Kings Of The Mash-Up &amp; Party Break&quot; and we have been editing and altering music to tailor fit DJ&#x27;s needs since 1993.</div>
              </div>
            </div>
            <div class="certholder">
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Acknowledgement</div>
                <div class="certfact">Just ask anyone you know that is a DJ &quot;Have you heard of Crooklyn Clan?&quot;. Then ask them if they have at least one track by/from us or our service.</div>
              </div>
              <div class="div-block-38">
                <div class="certtitle">Certificate Of Achievement</div>
                <div class="certfact">We knew The Benjamins and Love Like This were hits before everyone else did! :)</div>
              </div>
            </div>
          </div>
        </div>
        <div data-w-tab="DNR" class="tab-pane-2 w-tab-pane">
          <div class="bookanswer"><span class="reality"><strong xmlns="http://www.w3.org/1999/xhtml" class="important-text-3 rgg">DO NOT REMIX MY MUSIC!</strong></span><br><br>There will be those that simply refuse to adapt to, or appreciate what it is we have created here and where technology is going whether they like it or not. For them we have created the DNR. Here&#x27;s how that works..<br><br>To remain DMCA compliant, we offer all reasonable means to have your music removed from our service. A formal Cease &amp; Desist with legitimate documentation proving the material is in breach of your copyright laws can be provided. Once reviewed and perceived as &quot;authentic&quot;, we will approve the DNR request which will immediately suspend the visibility of all derivative works containing the disputed original work from our system. <br><br>We wish we could say it&#x27;s that simple, but unfortunately it&#x27;s not. What we mean by that is, you may come and jump the gun thinking &quot;get my music off this site now&quot; but because we are DJ&#x27;s, and because we are here a really LONG time we know that eventually you are going to come to the conclusion that you made a mistake. <br><br>You are going to realize that we&#x27;ve serviced over a half million DJ&#x27;s globally and we are doing YOU a favor and actually paying you for it. When that happens you are going to want your music put back and taken off the DNR, but you are going to have to wait :(<br><br>For any artist, label, or entity with a legitimate claim of copyright ownership that proceeds with a C&amp;D to remove any derivative work from our database, there is a penalty of 12 months from the <strong class="yeareal">time of request</strong> to have music re-added to our system. This is not negotiable.</div>
        </div>
      </div>
    </div>
    <div class="footerinlet"><a href="membershipagreement" class="bottomlinks">Membership Agreement</a><a href="termsofuse" class="bottomlinks">Terms Of Use</a><a href="privacypolicy" class="bottomlinks">Privacy Policy</a><a href="contactus" class="bottomlinks">Contact Us</a></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/crooklynmain.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>