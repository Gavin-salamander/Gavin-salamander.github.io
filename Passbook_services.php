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
		<h4>PassBook For EPF Account</h4>
		<p> Empolyee Share(12%) </p>
		<p> Empolyer Share(3.67%) </p>
		<p> Pension Contribution (8.33%) <br>(Empolyee Pension Scheme Paid by Empolyer)  </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/intro.png" width="100%">
		</div>		
	</div>
	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Login For PassBook *</h4>
		<p> <a href="http://localhost/pf/Passbook_login.php" target="_blank">Follow this link to learn About How Login To PassBook </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>

	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Acessing The PassBook *</h4>
		<p> <a href="http://localhost/pf/Passbook_access.php" target="_blank">Follow this link to know How to Acess Your PassBook After Login </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/uan activation/step1 uan activation.png" width="100%">
		</div>		
	</div>
	
	<div class = "row" id ="tutorial">
		<div class = "col-sm-4 steps">
		<h4>Download/Print PassBook</h4>
		<p> <a href="http://localhost/pf/download_uan.php" target="_blank">Follow this link to Download / Print PassBook </a> </p>
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
</SECTION>
<?php
    include("footer.php");
?>
<?php } ?>