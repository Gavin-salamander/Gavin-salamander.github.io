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
			<p> <a href="how_to_login.php" target="_blank"> Login with Credentials </a></p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>
			
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
		<h4>Step 3 *</h4>
			<p> <b>Click on</b> <p>
			<p> "Manage" in NavBar </p>			
		</div>
		<div class = "col-sm-8">
				<img src="downloads/download uan/step3.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
		<h4>Step 4 *</h4>
			<p> <b>Click on</b> <p>
			<p> "KYC" </p>			
		</div>
		<div class = "col-sm-8">
				<img src="downloads/KYC/step4.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 5 *</h4>
			<p>You Have Arrived at KYC Page</p>
			<p> <a href="adding_kyc.php" target="_blank"> To further Fill KYC Follow this Link </a></p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/KYC/KYC.png" width="100%">
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