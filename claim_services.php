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
		<p>Claim forms:</p>		
		<p> On Resignation/Retirement</p>	
		<p>Form 19  </p>	
		<p>Withdrawal of ( Employee+Employer) EPF with interest. </p>	
		<p>Form 10C</p>	
		<p><b>Less than 5 years service </b>	:Withdrawal of Pension contribution. </p>	
		<p><b>More than  5 years service:</b></p>		
		<p>Only Certificate will be issued. Submit Certificate at the age of 55 Years or 58 Years for getting pension.</p>	
 </p>		
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