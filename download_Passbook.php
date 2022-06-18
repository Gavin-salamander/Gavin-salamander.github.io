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
		<div class = "col-sm-4 steps">
			<h4>Step 2 *</h4>
			<p> <a href="Passbook_login.php" target="_blank"> Login with Credentials </a></p>			
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

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 4 *</h4>
			<p> <b> Click on </b> <br> Downward arrow(See Picture)</p>
			<p> Select Member ID </p>
		</div>
		<div class = "col-sm-8">
			<img src="downloads/Passbook/memberid.png" width="100%">
		</div>	
		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 5 *</h4>
			<p> <b>Press/Click on</b> <p>
			<p>'Download PassBook' Icon</p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/memberid.png" width="100%">
		</div>		
	</div>

	<div class = "row">
		<div class = "col-sm-4 steps">
		<h4>Step 6 *</h4>			
			<p>If Successful you will see a similar page</p>
			<p> <b>Press/Click on</b> <p>
			<p>'Download File' Icon</p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/Dowload passbook 1.png" width="100%">
		</div>		
	</div>
	
	<div class = "row">
		<div class = "col-sm-4 steps">
			<h4>Step 5 *</h4>
			<p> If Successful you will get a similar file </p>
		</div>
		<div class = "col-sm-8">
				<img src="downloads/Passbook/Dowload passbook 2.png" width="100%">
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