
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Mitchell Saulsberry's Flexbox Research</title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/form.css" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   	    <script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   	    <script src="js/script.js"></script>
    </head>
<body>
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
      <h1><a href="index.php"><i class="logo fa fa-th-large"></i> Mitchell Saulsberry: Web Dev Examples</a></h1>
      <nav id="cssmenu">
          <ul>
             <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
             <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> (5) Web Dev Research Topics</span></a>
                 <ul>
                     <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
                     <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
                     <li><a href="parallax.php"><span><i class="fa fa-fw fa-fighter-jet"></i> Parallax</span></a></li>
                     <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
                     <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
                 </ul>
              </li>
             <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> (3) Google Apps</span></a>
                <ul>
                   <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                   <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                   <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                </ul>
             </li>
             <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> (2) Web Cams</span></a></li>
          </ul>
      </nav>
    </header>
        
    <!-- START LEFT COL -->
    <section>
     <h2 class="pageID">Flexbox Research</h2>
     <!-- END header.php include here! -->
        <p><b>BIG Research Doc #3: Flexbox</b></p>

        <p>Flexbox is a layout mode that was preceded by the block, inline, table, and positioned modes. The Flexible Box Layout Module is useful because it “makes it easier to design flexible responsive layout structure without using float or positioning.”[i]</p>
 
        <p>The flexbox helps us organize our pages by “…providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic…”[ii].  It helps our page’s responsivity, by changing the width of items; it expands to fill extra space and contracts to prevent overflow, accommodating different screen sizes.</p>
 
        <p>Whereas block is vertically based, and inline horizontally, flex is directionally adaptive, making it more suitable as a component of applications that will be used on smaller screens.</p>
 
        <p>Flexbox today has such wide browser support that most browsers no longer require a prefix. Firefox especially has excellent flexbox support.  According to one site, “Safari was the last of the major browsers to remove prefixes, with the release of Safari 9 in 2015.”[iii]</p>
 
        	<p>The flexbox polyfill code is to support browsers without grid support. This mostly occurs with older browsers.  According to Github, the general purpose of these is so, “…we, as developers, should be able to develop with the HTML5 APIs, and scripts can create the methods and objects that should exist. Developing in this future-proof way means as users upgrade, your code doesn't have to change but users will move to the better, native experience cleanly.”[iv]  In order to make our best use of the flexbox module we use polyfills so that even the most antiquted users are able to enjoy our site fully.</p>
 
 
 
 



 




    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Citations</h3>
     <p>[i] <a href="URLhttps://www.w3schools.com/css/css3_flexbox.asp">Website TitleW3Schools Online Web Tutorials
Article TitleCSS Flexbox
         Date AccessedMay 13, 2018 text</a>/p>
 
<p>[ii] <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox">Website TitleCSS-Tricks
Article TitleA Complete Guide to Flexbox
    Date AccessedMay 13, 2018</a>
</p>
 
<p>[iii] <a href="developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox">Website TitleMDN Web Docs
Article TitleBackwards Compatibility of Flexbox
    Date AccessedMay 13, 2018</a></p>
 
        <p>[iv] <a href="github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills">Cross-Browser-Polyfills Website TitleGitHub Article TitleModernizr/Modernizr Date AccessedMay 13, 2018</a></p>
    </aside>
    <!-- END RIGHT COL -->
    
 <!-- START Footer Include Here -->
    <!-- START Footer -->
    <footer>
      <p><small>&copy; 2000 - 2018 by <a href="contactme.php">Mitchell Saulsberry</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
    <!-- END Footer --> 
    
</div>
<!-- END WRAPPER -->

</body>
</html>