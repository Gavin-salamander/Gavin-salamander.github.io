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
		<p>  Visit <a href="https://passbook.epfindia.gov.in/MemberPassBook/Login.jsp" target="_blank">https://passbook.epfindia. gov.in/MemberPassBook/Login jsp </a> </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/step1.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4">
			<h4>Step 2 *</h4>
			<p> <b>Enter</b> <p>
			<p> UAN NUMBER </p>
			<p> UAN Password </p>
			<p> <b>Note: </b> Same password used for UAN Login </p>
			<p> captcha code</p>
			<p> <b>Press/Click on</b> <p>
			<p>'Login’</p>			
		</div>	
		<div class = "col-sm-8">
			<img src="downloads/Passbook/step1.png" width="100%">
		</div>
			
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
		<h4>Step 3</h4>			
			<p>On Successful login you will see a similar page</p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/After login.png" width="100%">
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