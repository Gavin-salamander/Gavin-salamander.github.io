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
			<h4>Step 2</h4>
			<p> Click on Activate UAN</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/uan activation/step2 uan activation .jpg" width="100%">
		</div>
			
	</div>

	<div class = "row">
		<div class = "col-sm-4">
		<h4>Step 3</h4>
			<p> <b>Enter</b> <p>
			<p> UAN NUMBER/Aadhaar/ PAN </p>
			<p> NAME </p>
			<p> DATE OF BIRTH</p>
			<p> MOBILE NUMBER</p>
			<p> captcha code</p>
			<p> <b>Press/Click on</b> <p>
			<p>'Get Authorization Pin’</p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step3 uan activation.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 4</h4>
			<p> OTP Pin will be sent to your <a href="#.php">mobile</a>.</p>
			<p> Enter OTP Pin </p>
		</div>
		<div class = "col-sm-8">
			<img src="downloads/uan activation/step4 uan activation.png" width="100%">
		</div>	
		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 5</h4>
			<p> <b>Press/Click on</b> <p>
			<p>'Validate OTP and Activate UAN'</p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step4 uan activation.png" width="100%">
		</div>		
	</div>
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 6</h4>
			<p> Password sent on your <a href="#.php">MOBILE NUMBER</a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step6 uan activation.png" width="100%">
		</div>		
	</div>
	<?php 
		include 'plscontact.php';
	?>
	
</div>

</SECTION>


<?php 
include 'contact.php';
?>

<?php
    include("footer.php");
?>
<?php } ?>