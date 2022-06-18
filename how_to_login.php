<?php
 if(!empty($_SESSION['sname'])){
   header('location:login.php');
 }
 else {
    ?>
<?php
include('header_top.php');
include('index_seo.php');
include('header.php');
include('navbar.php');
 ?>
<SECTION id = "tutorial">
<div class = "container" id ="tutorial">	
	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Step 1</h4>
		<p> Visit  <a href="https://unifiedportal-mem.epfindia.gov.in/memberinterface/" target="_blank">https://unifiedportal-mem.epfindia.gov.in/memberinterface/ </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 2 *</h4>
			<p> <b>Enter</b> <p>
			<p> UAN </p>
			<p> Password </p>	
			<p> captcha code</p>			
			<p> <b>Press/Click on</b> <p>
			<p>'Sign in’</p>
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/uan activation/step2 uan activation .jpg" width="100%">
		</div>
			
	</div>

<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Note 1 photo of arrow to know uan status</h4>
			<p> If you Know your UAN</p>
			<p> <a href="http://localhost/pf/know_uan_status.php" target="_blank"> Check if it is active Here </a> </p>
			<p> if active go to Step 2 </p>
		</div>
		<div class = "col-sm-8">
			<img src="downloads/UAN.png" width="100%">
		</div>	
		
	</div>
	
	<div class = "row">
		<div class = "col-sm-4">
		<h4>Note 2  photo of arrow to activate uan </h4>
			<p>If you Dont Know UAN</p>
			<p>1. Please contact your HR/Employer.</p>
			<p>2. Collect the UAN number</p>
			<p>3. <a href="http://localhost/pf/activation_of_uan.php" target="_blank"> Activate UAN </a> </p>
			<p>4. go Back to Note 1 </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step3 uan activation.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Note 3 *.</h4>
			<p> If you dont know Password</p>
			<p> Press on Forgot Password </p>
			<p> Password will be sent to <a href="#.php" target="_blank">registered number</a> </p>
		</div>
		<div class = "col-sm-8">
			<img src="downloads/UAN.png" width="100%">
		</div>	
		
	</div>

	
</div>
</SECTION>

<?php 
include 'contact.php';
?>

<?php
    include("footer.php");
?>
<?php } ?>