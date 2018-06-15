
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

<body>
<!-- START WRAPPER -->
<div class="wrapper"> 
<header>
  <h1><a href="index.php"><img src="images/transparent.png" alt: height="80px" width="auto"> </a></h1>
   <nav id="cssmenu">
          <ul>
            
              
                  <li><a href="index.php"><span><i class="fa fa-fw fa-cube"></i> Welcome</span></a></li> 
             <li><a href="services.php"><span><i class="fa fa-fw fa-home"></i> Book Service</span></a></li>
               <li><a href="testimonials.php"><span><i class="fa fa-fw fa-camera-retro"></i> Testimonials</span></a></li>
               <li><a href="contact.php"><span><i class="fa fa-envelope"></i> Contact</span></a></li>
              
              </ul>
            
      </nav>
</header>
   <form action="">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
      <input type="text" id="name" class="floatLabel" name="name">
      <label for="name">Name</label>
    </div>
    <div class="controls">
      <input type="text" id="email" class="floatLabel" name="email">
      <label for="email">Email</label>
    </div>       
    <div class="controls">
      <input type="tel" id="phone" class="floatLabel" name="phone">
      <label for="phone">Phone</label>
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
           <input type="text" id="street" class="floatLabel" name="street">
           <label for="street">Street</label>
          </div>          
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="number" id="street-number" class="floatLabel" name="street-number">
            <label for="street-number">Number</label>
          </div>          
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
            <input type="text" id="city" class="floatLabel" name="city">
            <label for="city">City</label>
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
            <input type="text" id="post-code" class="floatLabel" name="post-code">
            <label for="post-code">Post Code</label>
          </div>         
        </div>
      </div>
      <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">Country</label>
      </div>
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
        <i class="fa fa-sort"></i>
        <select class="floatLabel">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
        </select>
        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="deluxe" selected>With Bathroom</option>
        <option value="Zuri-zimmer">Without Bathroom</option>
      </select>
      <label for="fruit">Room</label>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
      <select class="floatLabel">
        <option value="blank"></option>
        <option value="single-bed">Zweibett</option>
        <option value="double-bed" selected>Doppelbett</option>
      </select>
      <label for="fruit">Bedding</label>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comments" class="floatLabel" id="comments"></textarea>
          <label for="comments">Comments</label>
          </div>
            <button type="submit" value="Submit" class="col-1-4">Submit</button>
      </div>  
  </div> <!-- /.form-group -->
</form>


<!-- START Footer -->
<footer>
  <p><small>&copy; 2000 - by <a href="#" target="_blank">Mitchell Saulsberry</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 


</div>
<!-- END WRAPPER -->

</body>
</html>

