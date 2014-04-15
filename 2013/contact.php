<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>João Fernandes</title>
    <meta name="description" content="My personal page, so you can know why you want me to work for you">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    
    <!-- Favicon.ico placeholder -->
    <link rel="icon" type="image/png" href="./img/JSF-icon.png" />
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/ink.css">
    
    <!--[if IE 7 ]>
    <link rel="stylesheet" href="../css/ink-ie7.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <![endif]-->
    
    <!-- Javascripts -->
    <script type="text/javascript" src="./js/holder.js"></script>
    <script type="text/javascript" src="./js/ink.min.js"></script>
    <script type="text/javascript" src="./js/ink-ui.min.js"></script>
    <script type="text/javascript" src="/js/ink.toggle.js"></script>
    <script type="text/javascript" src="./js/autoload.js"></script>
    <script type="text/javascript" src="./js/html5shiv.js"></script>
    <script type="text/javascript" src="./js/jquerycaptcha.js"></script>
    
  </head>
  <body>
    
    <!-- Add your site or application content here -->
    
    <div class="ink-grid">
      
      <header class="vspace">
        <h1 class="">João Fernandes</h1>
        <p>A Software Engineering student looking for a thesis subject and a challenge</p>
      </header>
      
      <nav class="ink-navigation">
        <ul class="horizontal menu black rounded shadowed">
          <li>
            <a href="index.html">About me</a>
          </li>
          <li>
            <a href="curriculum.html">Curriculum</a>
          </li>
          <li>
            <a href="projects.html">Projects</a>
          </li>
          <li class="active">
            <a href="contact.php">Contact me</a>
          </li>
        </ul>
      </nav>
      
      <div class="vspace" id="contactthingy">
        <h4>Contact me</h4>
        <p>Feel free to contact me for anything you might want to know, as long as you're not a robot.</p><br>
        
        <div class = "large-5 medium-5 small-10 horizontal-gutters">
          <img src="./img/Skype-Logo.png" height="20" width="20"/>
        </div>
        <div class = "large-95 medium-95 small-90 horizontal-gutters">
          <a href="skype:jsfernandes91?call"><p>jsfernandes91</p></a>
        </div>
        
        <div class = "large-5 medium-5 small-10 horizontal-gutters">
          <img src="./img/phone_icon.png" height="20" width="20"/>
        </div>
        <div class = "large-95 medium-95 small-90 horizontal-gutters">
          <p>+39 327 385 1470</p>
        </div>
        
        <div class = "large-5 medium-5 small-10 horizontal-gutters">
          <img src="./img/Logos-Github-icon.png" height="20" width="20"/>
        </div>
        <div class = "large-95 medium-95 small-90 horizontal-gutters">
          <a href="https://github.com/JSFernandes"><p>JSFernandes</p></a>
        </div>
        
        <div class = "large-5 medium-5 small-10 horizontal-gutters">
          <img src="./img/twitter.png" height="25" width="25"/>
        </div>
        <div class = "large-95 medium-95 small-90 horizontal-gutters">
          <a href="https://twitter.com/JSF_Legacy"><p>@JSF_Legacy</p></a>
        </div>
        
        <button class="ink-button toggle" data-target="#mail-form">Mail me</button>
        
        <form action="./php/mailer.php" method="POST" class="ink-form hide-all" id="mail-form">
          <fieldset>
            <div class = "control-group column-group horizontal-gutters">
              <label class="large-10 medium-15 small-100 content-right" for="name">Name:</label>
              <div class="control large-30 medium-50 small-100">
                <input name="name" type="text" placeholder="Who are you?">
              </div>
            </div>
            <div class = "control-group column-group horizontal-gutters">
              <label class="large-10 medium-15 small-100 content-right" for="mail">E-Mail:</label>
              <div class="control large-30 medium-50 small-100">
                <input name="email" type="email" placeholder="How can I answer you?">
              </div>
            </div>
            <div class = "control-group column-group horizontal-gutters">
              <label class="large-10 medium-15 small-100 content-right" for="subject">Subject:</label>
              <div class="control large-30 medium-50 small-100">
                <input name="subject" type="text" placeholder="What's this about?">
              </div>
            </div>
            <div class = "control-group column-group horizontal-gutters">
              <label class = "large-10 medium-15 small-100 content-right" for="comment">Message:</label>
              <div class="control large-30 medium-50 small-100">
                <textarea cols="30" name="comment" rows="9" style="resize:both;"></textarea>
              </div>
            </div>
            <div class = "control-group column-group horizontal-gutters">
              <label class="large-10 medium-15 small-100 content-right">Captcha:</label>
              <div class="control large-30 medium-50 small-100">
                <?php
                  require_once('./php/recaptchalib.php');
                  $publickey = "6LdRzucSAAAAALRO426-9NcA46ujQvQe_Pn_hZMv";
                  echo recaptcha_get_html($publickey);
                  ?>
              </div>
            </div>
          </fieldset>
          <div class = "control-group column-group horizontal-gutters">
            <div class="large-40 medium-15 small-100 content-center">
              <input name="submit" type="submit" value="Submit" class="ink-button"><br>
            </div>
          </div>
        </form>
      </div>
      
      <footer>
        <div class="ink-grid">
          <p class="small vspace">
            Developed by João Fernandes using <a href="http://ink.sapo.pt">Ink</a>
          </p>
        </div>
      </footer>
      
    </body>
    </html>
