
<!DOCTYPE html>
<html>
<head>
<title></title>
 <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/fp.css" />
        <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/lightbox.css" />
     <link rel="background-image" href="images/interior.jpg" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   	    <script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   	    <script src="js/script.js"></script>
         <script src="js/form.js"></script>
    
    </head>
             	<!-- START HTML FORM -->
	
    <body>
<!-- START WRAPPER -->
<div class="wrapper"> 
<header>
  <h1><a href="index.php"><img src="images/transparent.png" alt: height="80px" width="auto"> </a></h1>
   <nav id="cssmenu">
          <ul>
            
              
                  <li><a href="index.php"><span><i class="fa fa-fw fa-cube"></i> Welcome</span></a></li> 
             <li><a href="services.php"><span><i class="fa fa-fw fa-home"></i> Book Services</span></a></li>
               <li><a href="contact.php"><span><i class="fa fa-envelope"></i> Contact</span></a></li>
              
              </ul>
            
      </nav>
</header>
    
<center><section>
      <h2 class="pageID">Contact Us</h2>
    
	<form action="contact.php" method="post">
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
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> Full Property Mgmt <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Individual CLeanings <br />

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
	
   	<form action="contact.php" method="post">
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
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	
	
        <div class="g-recaptcha" data-sitekey="6LePhl4UAAAAAIWKEtpiLQPNjwCuRB_lzk8IFwg7"></div>
    </form>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
   </section></center>
   <!-- END Left Column -->
  
      
   <!-- START Right Column -->
      
    <section>
        <aside>
        <div>
     <p>   <a href="images/transparent.png"></a>
            
            
            </p>  </div>
        
         </aside>
        </section>
   
   
   <!-- END Right Column -->
    <footer>
  <p><small>&copy; 2000 - by <a href="#" target="_blank">Mitchell Saulsberry</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 


</div>
<!-- END WRAPPER -->

</body>
</html>
