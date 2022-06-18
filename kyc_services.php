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
		<p>KYC = Know Your Customer (i.e Employee)</p>
		<p> All online Services from EPFO can be accesed only when Complusory KYC is completed.</p>
		<h3><b>To test the KYC completion,<br> our advise is to Try to avail a loan. </b></h3>
		<p>Loan, Claim and Claim By Benificiary can by done online without help from Employer (Sometimes employer can refuse to Cooperate, which can be avaides ) through KYC </p>	
		
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Login For KYC *</h4>
		<p> <a href="http://localhost/pf/login_kyc.php" target="_blank">Follow this link to learn About How Login To KYC </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Adding Documents in KYC *</h4>
		<p><b>Complusory KYC Documents</b></p>
		<p>AADHAR:<a href="http://localhost/pf/adding_kyc.php#Aadhar_kyc" target = "blank" >Learn how to Add Aadhar Here</a></p>	
		<p>PAN:<a href="http://localhost/pf/adding_kyc.php#pan_kyc" target = "blank" >Learn how to Add Bank Account Here</a></p>	
		<p>Bank Account:<a href="http://localhost/pf/adding_kyc.php#bank_kyc" target = "blank" >Learn how to Add Bank Account Here</a></p>	
		<p><b>Optional KYC Documents</b></p>
		<p>Passport	</p>	
		<p>Driving License</p>	
		<p>Election Card</p>	
		<p>Ration Card</p>	
		<p>National Population Registry</p>	
		<p> <a href="http://localhost/pf/kyc_services.php" target="_blank">Follow this link to learn About How add documents to KYC </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>	
	<?php 
		include 'plscontact.php';
	?>
</div>

</SECTION>

<?php
    include("contact.php");
?>


<?php
    include("footer.php");
?>
<?php } ?>