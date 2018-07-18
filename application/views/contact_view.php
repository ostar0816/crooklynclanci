<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue May 29 2018 03:59:00 GMT+0000 (UTC)  -->
<html data-wf-page="5af004d3f167d66f6569c8b2" data-wf-site="5af004d3f167d61c5a69c8a7">
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo base_url(); ?>css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>css/eqproj.webflow.css" rel="stylesheet" type="text/css">
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
      <nav role="navigation" class="nav-menu w-nav-menu"><a href="aboutus" class="nav-link w-nav-link">aBOUT<br>US</a><a href="howitworks" class="nav-link w-nav-link">how<br>it works</a><a href="hottracks" class="nav-link w-nav-link"><span class="text-span-5">Hot</span><br>tracks</a><a href="oureditors" class="nav-link w-nav-link">our<br>editors</a><a href="https://v2-docs.crooklynclan.net/newsetup/gearshop" target="_blank" class="nav-link gs w-nav-link">gear<br>shop</a><a href="contact" class="nav-link ctu w-nav-link w--current">contact<br>us</a><a href="<?php echo config_item('front_url'); ?>" class="nav-link lisu w-nav-link">Login / Signup</a></nav>
      <div class="menu-button w-nav-button"><img src="<?php echo base_url(); ?>images/raydee.png"></div>
    </div>
  </div>
  <div class="section">
    <div class="content-wrapper w-container">
      <!-- <div class="div-block-6">
        <div>OWNER AD SYSTEM GOES HERE</div>
      </div> -->
      <h1 class="page-title">Get in touch</h1>
    </div>
    <div class="content w-container">
      <div class="contact-row">
        <h2 class="contact-h3">Tell us who you are and what we can do for you.</h2>
        <div class="form w-form">
          <div id="email-form" name="email-form" data-name="Email Form">
            <label for="name" class="field"><span>*</span>Name:</label><input type="text" id="name" name="name" data-name="Name" placeholder="Enter your name" maxlength="256" class="input w-input">
            <label for="email" class="field"><span>*</span> Email Address:</label><input type="email" class="input w-input" maxlength="256" name="email" data-name="Email" placeholder="Enter your email address" id="email" required="">
            <label for="Subject" class="field"><span>*</span>Subject:</label><input type="text" class="input w-input" maxlength="256" name="subject" data-name="Subject" placeholder="Enter your subject" id="subject" required="">
            <label for="field" class="field"><span>*</span>Message:</label><textarea id="message" name="message" placeholder="Enter your message" maxlength="5000" class="input textarea w-input"></textarea>
            <input type="button" value="Send Message" data-wait="Please wait..." class="button contact w-button" onclick="onClickContact('<?php echo config_item('api_root_url'); ?>')">
          </div>
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
  <script src="<?php echo base_url(); ?>js/webflow.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>js/crooklyn_event.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>