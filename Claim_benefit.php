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
		<p>Claim forms: On Death</p>
		<p><b>Form 20 </b>Withdrawal of ( Employee+Employer) EPF with interest. </p>	
		<p><b>Form 10D </b> EPS Pension (for spouse / unmarried dependent) </p>	
		<p><b>Form 51F </b> EDLSI Scheme - Life Insurance Claim</p>		
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