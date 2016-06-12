<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#C62828">  
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Krexus</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#C62828">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://code.getmdl.io/1.1.3/material.red-pink.min.css" />      
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  </head>
  <body class="krexus mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary-dark">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <img id="logoimage" src="images/logo.svg" alt="Krexus" />
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#overview" class="mdl-layout__tab is-active">Overview</a>
          <a href="#features" class="mdl-layout__tab">Features</a>
          <a href="#developer" class="mdl-layout__tab">Developer</a>
          <a href="#changelog" class="mdl-layout__tab">Changelog</a>
          <a href="#faq" class="mdl-layout__tab">FAQ</a>
          <a href="https://basketbuild.com/devs/KreAch3R/Krexus" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp" id="download">
            <i class="material-icons" role="presentation">&#xE2C4;</i>
            <span class="visuallyhidden">Download</span>
          </a>
        </div>
      </header>
      <dialog id="review-dialog" class="mdl-dialog">
        <h3 class="mdl-dialog__title">KREXUS Video Review</h3>
        <div class="mdl-dialog__content">
          <p id="dialogBody"></p>
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button">Close</button>
        </div>
      </dialog>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-bg-yt mdl-color-text--white review-dialog-button">
              <i class="material-icons" style="color: #D32F2F;">play_circle_filled</i>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Features</h4>
                Krexus was born out of a simple necessity. The latest releases of stock Android (namely lollipop and marshmallow) were pretty close to my idea of a perfect android ROM, yet missing some elements, which are meant to be included in stock Android, at least for me. Starting from a clean AOSP environment, only specific features and fixes are included, which are personally tested, with one goal in mind. To create a stock like android ROM, "as it should be".
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col">Details</h4>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary-dark"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Stock, like Google</h5>
                  Focused on stability, following the Google guidelines and making sure this AOSP build isn't missing anything from the stock marshmallow nexus image, making it a perfect candidate <a href="#">for all you stock lovers</a>.
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary-dark"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Bundled with all the things you love</h5>
                  You wouldn't be looking for a custom ROM if stock fullfilled all your needs. Krexus comes bundled with every piece of custom ROM code you have come to love over the years, and consider it <a href="#">a no-brainer to be included in stock</a>.
                </div>
                <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                  <div class="section__circle-container__circle mdl-color--primary-dark"></div>
                </div>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>No place for relentless cherry-picking</h5>
                  Every commit merged in this source is tested personally and is proved to be useful in order to be merged <a href="#">so you can be completely sure what's in your ROM</a>.
                </div>
              </div>
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp"></section>
        </div>
        <div class="mdl-layout__tab-panel" id="features">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Krexus Features</h4>
              This is an attempt to include every important (to the end user or dev) feature and/or advancement merged into this ROM, compared to AOSP. A lot of them are work of others, whom I truly thank, many of them are modified by me to specifically fit these ROM's needs, and a few of them are my original work!.
              <ul class="toc">
                <h4>Contents</h4>
                <a href="#base">frameworks/base</a>
                <a href="#settings">packages/apps/Settings</a>
                <a href="#vendor">vendor/krexus</a>
                <a href="#build">build</a>
              </ul>

              <h5 id="base">frameworks/base</h5>
              <ul>
                <li>Google marshmallow's audio files</li>
                <li>Disabled a lot of debugs</li>
                <li>Lowered default animation settings</li>
                <li>Disabled fullscreen keyboard</li>
                <li>BootMessage simple dialog and show on first boot</li>
                <li>Confirm power off</li>
                <li>Fixes to power menu dialogs (regarding long presses)</li>
                <li>QS long click support</li>
                <li>all statusbar header items clickable</li>
                <li>long press recent back to last app</li>
                <li>disabled power menu on secure lockscreen</li>
                <li>remove screenshot notification before new one (ported to marshmallow)</li>
                <li>Advanced location tile (modified and ported to the new qs tuner)</li>
                <li>Screen Time out tile (same)</li>
                <li>Sync tile (same)</li>
                <li>screen off tile (same)</li>
                <li>DoNotDisturb: add long click</li>
                <li>disable voice assist left lockscreenshortcut and bring back phone</li>
                <li>Screen pinning improvements</li>
                <li>Battery customizations</li>
                <li>DocumentsUI standalone file manager</li>
                <li>Double tap lockscreen to sleep</li>
                <li>and A LOT MORE</li>
              </ul>

              <h5 id="settings">packages/apps/Settings</h5>
                The philosophy behind Krexus is a rather unique one, regarding Settings: "don't make everything an option, everything that should be enabled by default in a stock image, but isn't, make it so".
              <ul>
                <li>Processor, RAM, build date, device * board names</li>
                <li>SuperSU built-in</li>
                <li>Enabled Development Settings (which can be disabled and be hidden)</li>
                <li>Enabled multiwindow for user builds</li>
                <li>Advanced Reboot</li>
                <li>Charging light support for all devices</li>
                <li>Kill app long press</li>
                <li>Volume Rocker cursor control</li>
                <li>Volume rocker wake</li>
                <li>All around Rotation</li>
                <li>location 3dot menu</li>
                <li>Rotation: long click</li>
                <li>show application package name in app detail (ported to marshmallow)</li>
                <li>Navbar IME switcher toggle (modified CM's one)</li>
                <li>Clock and Date customization</li>
                <li>Lockscreen wallpaper</li>
                <li>Merged SystemUI tuner settings with everything else under custom "SystemUI" dashboard entry</li>
                <li>show battery percentage only when low</li>
                <li>navigation custom height</li>
                <li>change battery saver mode color</li>
                <li>switches in dashboard (ported to marshmallow)</li>
                <li>new icon tinting to work with marshmallow</li>
                <li>Layers 4.0 commits</li>
                <li>Bring back the 3dot "Help & Feedback" menu from stock roms</li>
                <li>Layer manager dashboard entry optional</li>
                <li>Swap volume buttons based on Rotation</li>
                <li>Volume buttons change media by default</li>
              </ul>
                
              <h5 id="vendor">vendor/krexus</h5>

              <h5 id="vendor">build</h5>
                Eiusmod nulla aliquip ipsum reprehenderit nostrud non excepteur mollit amet esse est est dolor. Dolore quis pariatur sit consectetur veniam esse ullamco duis Lorem qui enim ut veniam. Officia deserunt minim duis laborum dolor in velit pariatur commodo ullamco eu. Aute adipisicing ad duis labore laboris do mollit dolor cillum sunt aliqua ullamco. Esse tempor quis cillum consequat reprehenderit. Adipisicing proident anim eu sint elit aliqua anim dolore cupidatat fugiat aliquip qui.
            </div>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp"></section>
        </div>
        <div class="mdl-layout__tab-panel" id="changelog">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <pre><p id="changelogtext"></p></pre>
            </div>  
          </section>
        </div>
        <div class="mdl-layout__tab-panel" id="faq">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <p id="faqtext">
                <?php 
                  file_put_contents("krexusFAQdoc.zip", fopen("https://docs.google.com/document/d/1hMX-lQ2iUiNsrhszMIlp0Wwj1tSHWvsaEQ_yT4pD_eE/export?format=zip", 'r'));
                  $file = 'krexusFAQdoc.zip';
                  // get the absolute path to $file
                  $path = pathinfo(realpath($file), PATHINFO_DIRNAME);

                  $zip = new ZipArchive;
                  $res = $zip->open($file);
                  if ($res === TRUE) {
                    // extract it to the path we determined above
                    $zip->extractTo($path);
                    $zip->close();
                  } else {
                    echo "There seems to be an error at the moment. Please try again later.";
                  }
                  include("KrexusF.A.Q..html");
                ?>
              </p>
            </div>  
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp"></section>
        </div>
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Features</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Updates</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Details</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Spec</a></li>
                <li><a href="#">Tools</a></li>
                <li><a href="#">Resources</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Technology</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">How it works</a></li>
                <li><a href="#">Patterns</a></li>
                <li><a href="#">Usage</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contracts</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              More Information
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script type="text/javascript">
      $.ajax({
          url : "https://dl.dropboxusercontent.com/u/12469927/krexus_Changelog.txt",
          dataType: "text",
          success : function (result) {
             $("#changelogtext").html(result);
          }
      });
        (function() {
          'use strict';
          var dialogButton = document.querySelector('.review-dialog-button');
          var dialog = document.querySelector('#review-dialog');
          if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          dialogButton.addEventListener('click', function() {
             dialog.showModal();
             document.getElementById("dialogBody").innerHTML = "<iframe id='ytplayer' type='text/html' height='450' src='https://www.youtube.com/embed/xsab701mAnc' frameborder='0'/>";
          });
          dialog.querySelector('button:not([disabled])')
          .addEventListener('click', function() {
            document.getElementById("dialogBody").innerHTML = "";
            dialog.close();
          });
        }());    
    </script>
    <script>
      var num = $("header").height() - 64;
      $('.mdl-layout').bind('scroll', function () {
          if ($('.mdl-layout').scrollTop() > num) {
              $('.mdl-layout__tab-bar-container').addClass('fixed');
              $('.mdl-layout__tab-panel').css("margin-top","70px");
          } else {
              $('.mdl-layout__tab-bar-container').removeClass('fixed');
              $('.mdl-layout__tab-panel').css("margin-top","0px");
          }
      });
    </script>
    <script>
      $('section').addClass('animated fadeIn');
    </script>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  </body>
</html>
