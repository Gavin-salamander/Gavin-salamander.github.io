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
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 1 *</h4>
			<p> <a href="login_kyc.php" target="_blank"> First Login TO Access KYC Page </a></p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/KYC/KYC.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>NOTE</h4>
			<p> Out of the eight Documents listed <br><b>Bank</b>,<b>PAN</b> and <b>AADHAAR</b><br> are <a href="downloads/KYC/proof for kyc by employer.pdf" target="_blank">compulsory</a>.</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/KYC.png" width="100%">
		</div>
			
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps"  id="bank_kyc">
			<h4>Enter Bank Details</h4>
			<p> You need Accunt number,Name and IFSC Code as per your Cheque or Passbook </p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/specimen_Cheque.jpg" width="100%">
		</div>
			
	</div>
	
	<div class = "row" id="#pan_kyc">
		<div class = "col-sm-4 steps">
			<h4>Enter Bank Details</h4>
			<p> Click on "Box" before PAN</p>
			<p> Enter details as shown</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/KYC_bank.png" width="100%">
		</div>
			
	</div>

	<div class = "row" id="Pan_kyc">
		<div class = "col-sm-4 steps">
			<h4>Enter PAN Details</h4>
			<p> You need PAN number and Name as per your PAN CARD</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/specimen_pan.jpg" width="100%">
		</div>
			
	</div>
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Enter PAN Details *</h4>
			<p> Click on "Box" before PAN</p>
			<p> Enter details as shown</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/KYC.png" width="100%">
		</div>
			
	</div>
	
	<div class = "row" id="Aadhar_kyc">
		<div class = "col-sm-4 steps">
			<h4>Enter AADHAAR Details</h4>
			<p> You need AADHAAR number and Name as per your AADHAAR Card</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/specimen_aadhar.png" width="100%">
		</div>
			
	</div>
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Enter AADHAAR Details *</h4>
			<p> Click on "Box" before AADHAAR</p>
			<p> Enter details as shown</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/KYC.png" width="100%">
		</div>
			
	</div>
	
	<div class = "row" id="passport_kyc">
		<div class = "col-sm-4 steps">
			<h4>Enter Passport Details</h4>
			<p> You need Passport number,Name and Expiry Date as per your Passport</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/KYC/specimen_passport.jpg" width="100%" >
		</div>
			
	</div>
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Enter Passport Details *</h4>
			<p> Click on "Box" before Passport</p>
			<p> Enter details as shown</p>			
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