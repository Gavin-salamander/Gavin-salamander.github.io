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
		<p>While In Service:</p>
		<p>Form 31: </p>
		<p>Loans, Withdrawals and Advances from the applicantâ€s EPF account. </p>	
		
		<table>
			<tr>
				<th>SL NO</th>
				<th>WITHDRAWAL</th>
				<th>LIMIT FOR WITHDRAWAL</th>
				<th>SERVICE</th>
				<th>OTHER CONDITIONS</th>
				<th>LIMITS</th>
			</tr>
			<tr id= "Medical">
				<td>1</td>
				<td>Medical</td>
				<td>6 * (Basic+DA) p.m</td>
				<td>No Minimum Service</td>
				<td>
					(a)	self, spouse, children and parents.<br>
					(b)	 hospitalization for more than a month.<br>
					(c)	TB, leprosy, paralysis,<br> cancer, mental derangement<br> or heart ailment without the hospitalization
				</td>
				<td>No limit on the frequency</td>
			</tr>
			<tr id= "MARRIAGE">
				<td>2</td>
				<td>MARRIAGE</td>
				<td>50% of employee's EPF</td>
				<td>7 years</td>
				<td>self, son/daughter, brother/sister</td>
				<td>3 times in your life</td>
			</tr>
			<tr id= "EDUCATION">
				<td>3</td>
				<td>EDUCATION</td>
				<td>50% of employee's EPF</td>
				<td>7 years</td>
				<td>self,children after 10th standard</td>
				<td>3 times in your life</td>
			</tr>
			<tr id= "PURCHASE_OF_LAND">
				<td>4</td>
				<td>PURCHASE OF LAND</td>
				<td>24 * (Basic+DA) P.M</td>
				<td>5 years</td>
				<td>Land in Name of employee/spouse/joint</td>
				<td>Only once</td>
			</tr>
			<tr id= "PURCHASE_CONSTRUCTION_OF_A_HOUSE">
				<td>5</td>
				<td> PURCHASE / CONSTRUCTION <br> OF A HOUSE</td>
				<td>24 * (Basic+DA) P.M</td>
				<td>5 years</td>
				<td>House in Name of employee <br>/spouse/joint</td>
				<td>Only once</td>
			</tr>
			<tr id= "RENOVATION_OF_HOUSE">
				<td>6</td>
				<td>RENOVATION OF HOUSE </td>
				<td>12 * (Basic+DA) p.m</td>
				<td>5 years</td>
				<td>House in Name of employee <br>/spouse/joint</td>
				<td>Only once</td>
			</tr>
			<tr id= "Home_Loan_Repayment">
				<td>7</td>
				<td>HOME LOAN REPAYMENT</td>
				<td>90% (Employee+Employer) EPF</td>
				<td>10 years</td>
				<td>(a) House in Name of employee/spouse/joint<br>
					(b)	Loan in Name of employee/spouse/joint<br>
						 Minmum Balance in EPF Rs.20,000
				</td>
				<td>Only once</td>
			</tr>
			<tr id= "CALAMITY">
				<td>8</td>
				<td>CALAMITY </td>
				<td>50% of employee's EPF</td>
				<td>No minimum service</td>
				<td>certificates of damage</td>
				<td>No limit on the frequency</td>
			</tr>
			<tr id= "LOCKOUT">
				<td>9</td>
				<td>LOCKOUT</td>
				<td>equal to your unpaid wages</td>
				<td>No minimum service</td>
				<td>(a)	locked out or closed for at least 15 days<br>
					(b) not getting wage for last two months </td>
				<td>no limit on the frequency</td>
			</tr>
			<tr id= "BEFORE_RETIREMENT">
				<td>10</td>
				<td>BEFORE RETIREMENT</td>
				<td>90% (Employee+Employer)<br> EPF with interest</td>
				<td>At 57 years/<br>one year before retirement </td>
				<td>For himself - employer certificate</td>
				<td>only once.</td>			
			</tr>
		</table>
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