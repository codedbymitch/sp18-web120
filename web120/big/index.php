
<!DOCTYPE html>
<html>
<head>
<title>BIG Project - Mitchell Saulsberry</title>
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
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Mitchell's' BIG Page</a></h1>
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
 <h2 class="pageID">Sample Client Form</h2>
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
			<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
<!-- add multiple.php contact form -->

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Additional Resources</h3>

 <p><a href="http://www.php.net/">About PHP</a></p>
    <p><a href="https://stackoverflow.com/questions/6761662/php-includes-and-folders/">Includes Folders</a> </p>
    <p><a href="https://www.w3schools.com/howto/howto_css_contact_form.asp/">About Contact Forms</a></p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2000 - by <a href="#" target="_blank">Mitchell Saulsberry</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 


</div>
<!-- END WRAPPER -->

</body>
</html>

