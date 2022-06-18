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

<SECTION>
<div  class="container">
	<div class = "row" id ="tutorial">
		<p><b>Provident Fund Contribution:</b></p>
		<p><b>Employee:</b> Deducted from Salary : 12% of Basic + DA goes to Employee Provident Fund (EPF)</p>
		<p><b>Employer :</b> Pays to PF : 8.33% towards EPS + 3.67% towards EPF and 0.5% towards EDLI.</p>
		<p>WAGE LIMIT Rs. 15,000/- per month</p>
		<p>EPS - <b>Employees’ Pension Scheme-</b></p>
		<p>-Entitlement for pension after 10 years of service & on attaining the age of 50 years.</p>
		<p>-Minimum pension of Rs1,000/-</p>
		<p>-Pension admissible to dependents; widow, children, dependent parent, nominee.</p>
		<p>EDLIS - <b>Employees’ Deposit Linked Insurance Scheme</b></p>
		<p>-Maximum admissible amount  -  Rs 6 lakhs</p>
	</div>
</div>
</SECTION>


<SECTION>
<div  class="container">
	<div class="mapouter">
		<div class="gmap_canvas">
			<iframe width="100%" height="750" id="gmap_canvas" src="https://maps.google.com/maps?q=banaswadi%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			</iframe>
			<a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">wordpress themes</a>
		</div>
		<style>
			.mapouter{position:relative;text-align:right;height:750px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:750px;width:100%;}
		</style>
	</div>
</div>
</SECTION>

<?php 
include 'contact.php';
?>

<?php
    include("footer.php");
?>
<?php } ?>
