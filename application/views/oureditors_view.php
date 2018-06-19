<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue May 29 2018 03:59:00 GMT+0000 (UTC)  -->
<html data-wf-page="5af004d3f167d62cd669c8b1" data-wf-site="5af004d3f167d61c5a69c8a7">
<head>
  <meta charset="utf-8">
  <title>Our Editors</title>
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
      <nav role="navigation" class="nav-menu w-nav-menu"><a href="aboutus" class="nav-link w-nav-link">aBOUT<br>US</a><a href="howitworks" class="nav-link w-nav-link">how<br>it works</a><a href="hottracks" class="nav-link w-nav-link"><span class="text-span-5">Hot</span><br>tracks</a><a href="oureditors" class="nav-link w-nav-link w--current">our<br>editors</a><a href="gearshop" target="_blank" class="nav-link gs w-nav-link">gear<br>shop</a><a href="contact" class="nav-link ctu w-nav-link">contact<br>us</a><a href="<?php echo config_item('front_url'); ?>" class="nav-link lisu w-nav-link">Login / Signup</a></nav>
      <div class="menu-button w-nav-button"><img src="images/raydee.png"></div>
    </div>
  </div>
  <div class="content-wrapper w-container">
    <div class="div-block-6">
      <div>OWNER AD SYSTEM GOES HERE</div>
    </div>
    <h1 class="page-title">EDITORS</h1>
    <div class="text-block-7">(current top 10&#x27;s updated hourly)</div>
    <div class="editorhold">
      <div class="dbee"><img src="images/avnicehead.png" srcset="images/avnicehead-p-500.png 500w, images/avnicehead.png 1024w" sizes="(max-width: 767px) 98vw, (max-width: 991px) 718px, 930px">
        <div class="text-block-6">CURRENT TOP 10 THIS MONTH</div>
        <?php
          if (isset($editors) && count($editors) >= 3) {
            for ($i=0; $i<count($editors[0]); $i++) {
              $editor = $editors[0][$i];
        ?>
          <div class="editor">
            <div class="nb">#<?php echo $i+1; ?></div>
            <div class="html-embed w-embed"><img class="editor-logo" src="<?php echo $editor->logoSquare->url; ?>"></div>
            <div class="editorname"><?php echo $editor->stageName; ?></div>
          </div>
        <?php 
            }
          }
        ?>
      </div>
      <div class="dbee"><img src="images/vvheaddtry.png" srcset="images/vvheaddtry-p-500.png 500w, images/vvheaddtry.png 1024w" sizes="(max-width: 767px) 98vw, (max-width: 991px) 718px, 930px">
        <div class="text-block-6 v">CURRENT TOP 10 THIS MONTH</div>
          <?php
            if (isset($editors) && count($editors) >= 3) {
              for ($i=0; $i<count($editors[1]); $i++) {
                $editor = $editors[1][$i];
          ?>
            <div class="editor v">
              <div class="nb vvv">#<?php echo $i+1; ?></div>
              <div class="html-embed w-embed"><img class="editor-logo" src="<?php echo $editor->logoSquare->url; ?>"></div>
              <div class="editorname vvv"><?php echo $editor->stageName; ?></div>
            </div>
          <?php 
              }
            }
          ?>
      </div>
      <div class="dbee"><img src="images/i12pooltry.png" srcset="images/i12pooltry-p-800.png 800w, images/i12pooltry.png 1024w" sizes="(max-width: 767px) 98vw, (max-width: 991px) 718px, 930px">
        <div class="text-block-6 io">CURRENT TOP 10 THIS MONTH</div>
          <?php
            if (isset($editors) && count($editors) >= 3) {
              for ($i=0; $i<count($editors[1]); $i++) {
                  $editor = $editors[1][$i];
          ?>
              <div class="editor i">
                <div class="nb i">#<?php echo $i+1; ?></div>
                <div class="html-embed w-embed"><img class="editor-logo" src="<?php echo $editor->logoSquare->url; ?>"></div>
                <div class="editorname i"><?php echo $editor->stageName; ?></div>
              </div>
            <?php 
                }
              }
            ?>
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