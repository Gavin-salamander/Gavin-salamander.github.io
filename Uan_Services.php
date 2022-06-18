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
		<p>Universal Account Number (UAN)</p>
		<p> 12 digit number allotted by the EPFO </p>
	</div>
	<div class = "row" id ="tutorial">
		<p>UAN stands for Universal Account Number.</p>
		<p>EPF members in respect of whom at-least one contribution is received in or after Jan-2014 -UAN is allotted by EPFO.</p>
		<p>Collect their UAN from the current employer.</p>
		<p>Provide KYC to employer.</p>
		<p>Members can themselves download UAN Card.</p>
		<p>UAN facilitates linking of multiple EPF accounts of a member.</p>
		<p>Aadhaar, Bank Account and PAN are the key KYC documents identified.</p>
		<p>Aadhaar enabled UAN will eventually enable members to access EPF services directly.</p>
		<p>In case of Aadhaar enabled UAN,members can submit their claims directly with EPFO.</p>
		<p>Online applications for all EPFO services.</p>
		<p>Claims settlement without employers’ intermediation</p>
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Activate UAN *</h4>
		<p> <a href="http://localhost/pf/activation_of_uan.php" target="_blank">Follow this link to Activate UAN </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Know Your UAN Staus *</h4>
		<p> <a href="http://localhost/pf/know_uan_status.php" target="_blank">Follow this link to know your UAN Status </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Download/Print UAN</h4>
		<p> <a href="http://localhost/pf/download_uan.php" target="_blank">Follow this link to Download / Print UAN </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>After Login Dash Board</h4>
		<p> Visit  <a href="https://unifiedportal-mem.epfindia.gov.in/memberinterface/" target="_blank">https://unifiedportal-mem.epfindia.gov.in/memberinterface/ </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/UAN.png" width="100%">
		</div>		
	</div>	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Step 1</h4>
		<p> Visit  <a href="https://unifiedportal-mem.epfindia.gov.in/memberinterface/" target="_blank">https://unifiedportal-mem.epfindia.gov.in/memberinterface/ </a> </p>
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
    include("footer.php");
?>
<?php } ?>