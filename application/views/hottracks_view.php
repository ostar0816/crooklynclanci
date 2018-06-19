<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue May 29 2018 03:59:00 GMT+0000 (UTC)  -->
<html data-wf-page="5af004d3f167d6402569c8b4" data-wf-site="5af004d3f167d61c5a69c8a7">
<head>
  <meta charset="utf-8">
  <title>Hot Tracks</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/eqproj.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Changa One:400,400italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Roboto:300,regular,500","Roboto Slab:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body class="subpage-background">
  <div data-collapse="medium" data-animation="default" data-duration="400" class="nav-bar w-nav" data-ix="new-interaction-2">
    <div class="container w-container">
      <a href="home" class="brand-link w-nav-brand">
        <h1 class="logo"></h1>
      </a>
      <nav role="navigation" class="nav-menu w-nav-menu"><a href="aboutus" class="nav-link w-nav-link">aBOUT<br>US</a><a href="howitworks" class="nav-link w-nav-link">how<br>it works</a><a href="hottracks" class="nav-link w-nav-link w--current"><span class="text-span-5">Hot</span><br>tracks</a><a href="oureditors" class="nav-link w-nav-link">our<br>editors</a><a href="gearshop" target="_blank" class="nav-link gs w-nav-link">gear<br>shop</a><a href="contact" class="nav-link ctu w-nav-link">contact<br>us</a><a href="<?php echo config_item('front_url'); ?>" class="nav-link lisu w-nav-link">Login / Signup</a></nav>
      <div class="menu-button w-nav-button"><img src="images/raydee.png"></div>
    </div>
  </div>
  <div class="content-wrapper w-container">
    <div class="div-block-6">
      <div>OWNER AD SYSTEM GOES HERE</div>
    </div>
    <div class="rows">
      <div class="cols">
        <h1 class="page-title">TRACKS</h1>
        <div class="text-block-11">(Updated Every Hour)</div><img src="images/avnicehead.png" width="100" srcset="images/avnicehead-p-500.png 500w, images/avnicehead.png 1024w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 98vw, (max-width: 991px) 718px, 930px" class="av">
        <div class="avcontent">
          <div class="text-block-6">CURRENT TOP 10 THIS MONTH</div>
            <?php
              if (isset($tracks) && count($tracks)>=3) {
                for ($i=0; $i<count($tracks[0]); $i++) {
                  $track = $tracks[0][$i]
            ?>
              <div class="topslottrack">
                <div class="text-block-9">#<?php echo $i+1; ?></div>
                <div class="div-block-5">
                  <div class="w-embed"><img class="editor-logo" src="<?php echo $track->editor->logoSquare->url; ?>"></div>
                </div>
                <div class="text-block-10-copy"><?php echo $track->artistPrimaryName; ?>
                  <br>
                  <?php if (isset($track->artistsFeaturedDisplayName) && strlen($track->artistsFeaturedDisplayName) > 0) { ?>
                  <span class="text-span-3">(<?php echo $track->artistsFeaturedDisplayName; ?>)</span>
                  <?php } ?>
                </div>
                <div class="text-block-10"><?php echo $track->name; ?><br><span class="text-span-3">(<?php echo $track->version; ?>)</span></div>
              </div>
            <?php 
                }
              }
            ?>
        </div>
      </div>
      <div class="cols"><img src="images/vvheaddtry.png" width="100" srcset="images/vvheaddtry-p-500.png 500w, images/vvheaddtry.png 1024w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 98vw, (max-width: 991px) 718px, 930px" class="vv">
        <div class="avcontent">
          <div class="text-block-6 v">CURRENT TOP 10 THIS MONTH</div>
            <?php
              if (isset($tracks) && count($tracks)>=3) {
                for ($i=0; $i<count($tracks[1]); $i++) {
                  $track = $tracks[1][$i]
            ?>
              <div class="topslottrack v">
                <div class="text-block-9 v">#<?php echo $i+1; ?></div>
                <div class="div-block-5">
                  <div class="w-embed"><img class="editor-logo" src="<?php echo $track->editor->logoSquare->url; ?>"></div>
                </div>
                <div class="text-block-10-copy"><?php echo $track->artistPrimaryName; ?>
                  <br>
                  <?php if (isset($track->artistsFeaturedDisplayName) && strlen($track->artistsFeaturedDisplayName) > 0) { ?>
                  <span class="text-span-3">(<?php echo $track->artistsFeaturedDisplayName; ?>)</span>
                  <?php } ?>
                </div>
                <div class="text-block-10"><?php echo $track->name; ?><br><span class="text-span-3">(<?php echo $track->version; ?>)</span></div>
              </div>
            <?php 
                }
              }
            ?>
        </div>
      </div>
      <div class="cols"><img src="images/i12pooltry.png" width="100" srcset="images/i12pooltry-p-800.png 800w, images/i12pooltry.png 1024w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 98vw, (max-width: 991px) 718px, 930px" class="_12">
        <div class="avcontent">
          <div class="text-block-6 io">CURRENT TOP 10 THIS MONTH</div>
          <?php
              if (isset($tracks) && count($tracks) >= 3) {
                for ($i=0; $i<count($tracks[2]); $i++) {
                  $track = $tracks[2][$i]
          ?>
            <div class="topslottrack i">
              <div class="text-block-9 i">#<?php echo $i+1; ?></div>
              <div class="div-block-5">
                <div class="w-embed"><img class="editor-logo" src="<?php echo $track->editor->logoSquare->url; ?>"></div>
              </div>
              <div class="text-block-10-copy"><?php echo $track->artistPrimaryName; ?>
                <br>
                <?php if (isset($track->artistsFeaturedDisplayName) && strlen($track->artistsFeaturedDisplayName) > 0) { ?>
                <span class="text-span-3">(<?php echo $track->artistsFeaturedDisplayName; ?>)</span>
                <?php } ?>
              </div>
              <div class="text-block-10"><?php echo $track->name; ?><br><span class="text-span-3">(<?php echo $track->version; ?>)</span></div>
            </div>
          <?php 
              }
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="w-container"><a href="https://www.facebook.com/CrooklynClan/" target="_blank" class="footer-link fb w-inline-block"></a><a href="https://www.instagram.com/crooklynclan/" target="_blank" class="footer-link ig w-inline-block"></a>
      <div class="footer-text">2018 CROOKLYN CLAN INC. ALL RIGHTS RESERVED</div>
      <div class="div-block-4">
        <a href="membershipagreement" target="_blank" class="lbnow w-inline-block">
          <div>Membership Agreement</div>
        </a>
        <a href="privacypolicy" target="_blank" class="lbnow w-inline-block">
          <div>Privacy Policy</div>
        </a>
        <a href="termsofuse" target="_blank" class="lbnow w-inline-block">
          <div>Terms Of Use</div>
        </a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>