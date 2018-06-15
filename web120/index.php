
<!DOCTYPE html>
<html>
<head>
<title>WEB120 Portal - Mitchell Saulsberry</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> (Mitchell Saulsberry SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Mitchell</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>You've entered a portal into my experience as a web design student at Seattle Central Community College.</p>
 <p>Here I post projects for the school's web120 class and provide an access point to follow and catalogue my development during spring quarter. </p>
 <p>I have a background in the arts, but coding is new to me and I'm excited to develop this new skill!</p>
 <p>This will be my second web design class after completing web110 last quarter.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Lorem Ipsum</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>"...for by names and images are all powers awakened and re-awakened..." -Regardie</p>
 <p>lorem ipsum</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2016 - (insert php date code here) by <a href="#" target="_blank">Mitchell Saulsberry</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>

