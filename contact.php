<!DOCTYPE html>
<html lang="en-gh">
<head>
     <title>CONTACTS</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52c9c47757068cf1"></script>
     <script type="text/javascript" src="js/social.js"></script>
     <script src="js/forms.js"></script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
     <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<!--==============================header=================================-->
<header>
	<div class="container_12">
		<div class="grid_12">
           <h1><a href="index.html"><img src="images/logo.png" alt="FULPRUF"></a></h1>
		</div>
    </div>
    <nav>
        <div class="container_12">
            <div class="grid_12">
                <ul class="sf-menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a>
                    	<ul>
                            <li><a href="history.php">OUR HISTORY</a></li>
                            <li><a href="team.php">OUR TEAM</a></li>
                            <li><a href="faqs.php">FAQs</a></li>
                        </ul>
                    </li>
                    <li><a href="projects.php">PROJECTS</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li class="current"><a href="contact.php">CONTACTS</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
</header>

<!--=======content================================-->
<div id="content"><div class="ic">FulPruf</div>
	<div class="container_12 bot-1">
		<div class="grid_12">
        	<h2 class="indent-2">ConTact Us</h2>
		</div>
        <div class="grid_5">
        	
        	<?php
				if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
				 $name=$_POST['name'];
				 $email=$_POST['email'];
				 $message = $_POST['message'];
				 $phone = $_POST['phone'];
				 
				 if (!empty($name) && !empty($email) && !empty($phone) && !empty($phone)){
				 
				    $to='info@fulpruf.com';
					$subject='Contact form submitted.';
					$body=$name."\n".$message;
					$headers = 'From: '.$email;
					
					if(@mail($to,$subject,$body,$headers)){
				     echo '<div class="success">Contact form submitted!<br>
                <strong>We will be in touch soon.</strong> </div>';
				}else{
						echo '<span class="error error-empty">*Sorry, an error occured. Please try again in a few minutes.</span>';
					}
				}else{
					echo '<span class="error error-empty">*All fields required!</span><span class="empty error-empty">';
				 }
				}
		?>
        	
        	<form id="form" action="contact.php" method="POST">
                <div class="text-info">Send an e-mail. All fields with an * are required</div>
                <div class="success">Contact form submitted!<br>
                <strong>We will be in touch soon.</strong> </div>
                <fieldset>
                    <label class="name">
                        <span class="title">Name*</span>
                        <input type="text" value="" name="name">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span>
                    </label>
                    <label class="email">
                        <span class="title">E-mail*</span>
                        <input type="text" value="" name="email">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span>
                    </label>
                    <label class="phone">
                        <span class="title">Phone*</span>
                        <input type="tel" value="" name="phone">
                        <br class="clear">
                        <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span>
                    </label>
                    <label class="message">
                        <span class="title">Message*</span>
                        <textarea name="message"> </textarea>
                        <br class="clear">
                        <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                    </label>
                    <div class="clear"></div>
                    <a data-type="submit" class="btn">Send</a>
            	</fieldset>
            </form>
		</div>
        <div class="grid_6 push_1">
        	<div class="map"><iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.gh/maps/ms?msa=0&amp;msid=211874583266304903648.0004ee64a33f22d58f563&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=5.607358,-0.100079&amp;spn=0.041002,0.054932&amp;z=14&amp;iwloc=0004eef3559742685b362&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com.gh/maps/ms?msa=0&amp;msid=211874583266304903648.0004ee64a33f22d58f563&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=5.607358,-0.100079&amp;spn=0.041002,0.054932&amp;z=14&amp;iwloc=0004eef3559742685b362&amp;source=embed" style="color:#0000FF;text-align:left" target="_blank">FulPruf</a> in a larger map</small></div>
            <address>
              <dl>
                  <dt>#9 Police Post Street,<br>
Teshie-Nungua Estates.</dt>
                  <dd><span>Mobile:</span>+233 24 375 3852</dd>
                  <dd><span>Mobile:</span>+233 54 524 7030</dd>
                  <dd><span>Mobile:</span>+233 57 382 8695</dd>
                  <dd>E-mail: <a href="#">info@fulpruf.com</a></dd>
              </dl>
              <dl>
                  
            <!--      Second address and contact goes here    -->
           </address>
		</div>
	</div>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container_12">
        <div class="grid_8">
			<span>Copyright &copy; 2014 FulPruf. All rights reserved. </span>
		</div>
        <div class="grid_4">
            <ul class="soc-icon">
                <li><a href="#"><img src="images/icon-3.png" alt=""></a></li>
                <li><a href="#"><img src="images/icon-2.png" alt=""></a></li>
                <li><a href="#"><img src="images/icon-1.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</footer>
</html>