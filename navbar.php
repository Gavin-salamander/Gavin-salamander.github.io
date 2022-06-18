<div class="container-fluid moon">
	<div class="row">
		<div class="col-sm-12 sena">
			<?php
				//session_start();
				if(empty($_SESSION['sname']))
				{			
					echo '  <div class="container">';
						echo  '<ul id="social-top">';
							echo  '<li class="contact-top">+91-9538677040</li>';
							echo  '<li class="contact-top"><b>Contact Us:</b></li>';
							echo  '<li class="contact-top">navin.epfinc@gmail.com</li>';
							echo  '<li class="contact-top"><b>Email:</b></li>';
							echo  '<li><a title=Twitter href=https://twitter.com/ rel=nofollow><i class="fab fa-twitter fa-1x tweet"></i></a></li>';
							echo  '<li><a title=Facebook href=https://www.facebook.com/ rel=nofollow><i class="fab fa-facebook fa-1x fb"></i></a></li>';
							echo  '<li><a title=LinkedIn href=https://www.linkedin.com/ rel=nofollow><i class="fab fa-linkedin fa-1x link"></i></a></li>';
							echo  '<li><a title=Youtube href=https://www.youtube.com/ rel=nofollow><i class="fab fa-youtube-square fa-1x youtube"></i></a></li>';					
						echo  '</ul>';	
					echo  '</div>';	
				}
				 elseif($_SESSION['sname'])
				{
					echo '  <div class="container">';
						echo  '<ul id="social-top">';
							echo  '<li class="contact-top">+91-9538677040</li>';
							echo  '<li class="contact-top"><b>Contact Us:</b></li>';
							echo  '<li class="contact-top">navin.epfinc@gmail.com</li>';
							echo  '<li class="contact-top"><b>Email:</b></li>';
							echo  '<li><a title=Twitter href=https://twitter.com/ rel=nofollow><i class="fab fa-twitter fa-1x tweet"></i></a></li>';
							echo  '<li><a title=Facebook href=https://www.facebook.com/ rel=nofollow><i class="fab fa-facebook fa-1x fb"></i></a></li>';
							echo  '<li><a title=LinkedIn href=https://www.linkedin.com/ rel=nofollow><i class="fab fa-linkedin fa-1x link"></i></a></li>';
							echo  '<li><a title=Youtube href=https://www.youtube.com/ rel=nofollow><i class="fab fa-youtube-square fa-1x youtube"></i></a></li>';						
						echo  '</ul>';	
					echo  '</div>';	
				}
			?>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar"> 
	<div class="container-fluid container" id="no_po">

		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">
				<!-- PF @ PN2AE.com -->
				<img src="images/PN2AE_logo.png" alt="error_logo" style="height:50px; width:auto;">
			</a>
			<div id="menu-bar">
				<i class="fas fa-bars" style="color:black;"></i>
			</div>
		</div>
		<?php
			if(empty($_SESSION['sname']))
			{
				echo '  <div class="container">';
					echo '  <ul class="nav navbar-nav"  id="menu-all">';
						echo '  <li><a href="index.php" id="dropbtn">Home</a></li>';					
						echo '  <li class="dropdown">';					
							echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Services by Us</a>';
							echo '  <div class="dropdown-content">';						
								echo '  <div class="dropdown2">';
									echo '  <a href="Uan_Services.php">UAN SERVICES</a>';
									echo '  <div class="dropdown-content2">';
										echo '  <a href="activation_of_uan.php">ACTIVATION OF UAN</a>';
										echo '  <a href="know_uan_status.php">KNOW YOUR UAN STATUS</a>';
										echo '  <a href="download_uan.php">DOWNLOAD/PRINT UAN</a>';
									echo '  </div>';
								echo '  </div>';							
								echo '  <div class="dropdown2">';
									echo '  <a href="Passbook_services.php">PASS BOOK SERVICES</a>';
										echo '  <div class="dropdown-content2">';
										echo '  <a href="Passbook_login.php">LOGIN FOR PASSBOOK</a>';
										echo '  <a href="Passbook_access.php">ACCESSING PASSBOOK</a>';
										echo '  <a href="download_Passbook.php">DOWNLOAD/PRINT PASSBOOK</a>';
										echo '  </div>';
								echo '  </div>';							
								echo '  <div class="dropdown2 dota">';
									echo '  <a href="kyc_services.php">KYC SERVICES</a>';
										echo '  <div class="dropdown-content2">';
											echo '  <a href="login_kyc.php">Login For KYC</a>';
											echo '  <a href="adding_kyc.php">Adding Documents for KYC</a>';
										echo '  </div>';
								echo '  </div>';							
								echo '  <div class="dropdown2">';	
									echo '  <a href="loan_services.php">LOAN SERVICES</a>';
									echo '  <div class="dropdown-content2">';
										echo '  <a href="http://localhost/pf/loan_services.php#EDUCATION">EDUCATION</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#MARRIAGE">MARRIAGE</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#MEDICAL">MEDICAL TREATMENT</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#PURCHASE_OF_LAND">PURCHASE OF HOME OR PLOT</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#Home_Loan_Repayment">HOME LOAN PAYMENT</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#RENOVATION_OF_HOUSE">ADDITION/ALTERATION OF HOUSE</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#CALAMITY">CALAMITY</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#LOCKOUT">LOCKOUT</a>';
										echo '  <a href="http://localhost/pf/loan_services.php#BEFORE_RETIREMENT">WITHDRAWAL BEFORE THE RETIREMENT</a>';
									echo '  </div>';
								echo '  </div>';							
								echo '  <a href="claim_services.php">CLAIM SERVICES</a>';							
								echo '  <a href="Claim_benefit.php">CLAIM BY BENEFICIARY SERVICES</a>';							
							echo '  </div>';						
						echo '  </li>';					
						echo '  <li class="dropdown">';
							echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Services by EPFO</a>';
							echo '  <div class="dropdown-contenta">';
								echo '<div class="row">';
									echo '<div class="column">';
										echo '  <h4 style="font-weight:bold !important"><a href="#.php">SERVICES</a></h4>';
										echo '  <a href="#.php">Member Passbook</a>';
										echo '  <a href="#.php">Member UAN/Online Service (OCS/OTCP)</a>';
										echo '  <a href="#.php">OCS / UMANG - FAQs / Eligibility</a>'; 
										echo '  <a href="#.php">Know Your Claim Status</a>';		  
										echo '  <a href="#.php">EPFiGMS (Register your Grievance) </a>';
										echo '  <a href="#.php">Fillable Application Form for COC</a>';
										echo '  <a href="#.php">Pensioner Portal</a>';
										echo '  <a href="#.php">One Employee - One EPF Account</a>'; 
									echo '  </div>';
									echo '<div class="column">';
										echo '  <h4 style="font-weight:bold !important"><a href="#.php">IMPORTANT LINKS</a></h4>';
										echo '  <a href="#.php">Missed Call Service (01122901406)</a>';
										echo '  <a href="#.php">Short Code SMS Service </a>';
										echo '  <a href="#.php">Know Which Claim Form to Submit</a>';
									echo '  </div>';
									echo '<div class="column">';
										echo '  <h4 style="font-weight:bold !important"><a href="#.php">DOWNLOADS</a></h4>';
										echo '  <a href="downloads/ContributionRate.pdf">Contribution Rate</a>';
										echo '  <a href="downloads/WageCeiling.pdf">Wage Ceiling</a>';
										echo '  <a href="downloads/InterestRate_OnPFAccumulationsSince1952.pdf">Rate of Interest</a>';
										echo '  <a href="downloads/ChangeName_Process.pdf">Process for Change in Name & Basic Details of Members</a>';
										echo '  <a href="downloads/EsttSearch_Help.pdf">Help - Establishment Search Use</a>';
										echo '  <a href="#.php">EPFO - Mobile Application (UMANG)</a>';
										echo '  <a href="downloads/UAN-BenefitsForMembers_May2016(1).pdf">UAN Presentation</a>';
										echo '  <a href="downloads/Resolution_Ethics_1.pdf">Resolution on Service Delivery Ethics</a>';
										echo '  <a href="downloads/EPS1995_PensionDisbursingAgenciesList.pdf">EPS 1995 - List of Pension Disbursing Banks</a>';
									echo '  </div>';	
								echo '  </div>';
							echo '  </div>';
						echo '  </li>';
						echo '  <li><a href="index.php#formdemo" id="dropbtn">Contact</a></li>';
						echo '  <li><a href="index.php" id="dropbtn">FAQ</a></li>';
						echo '  <li class="dropdown">';
							echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Login/Signup</a>';
						echo '  </li>';
					echo '  </ul>';
				echo '  </div>';
			}
			elseif($_SESSION['sname'])
			{//change when login change
				 // echo $_SESSION['sname'];

				  echo '  <ul class="nav navbar-nav text-center"  id="menu-all">';
				  echo '    <li><a href="index.php" id="dropbtn">Home</a></li>';
				  echo '  <li class="dropdown">';
				  echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Testing</a>';
				  echo '  <div class="dropdown-content">';
				  echo '  <a href="functional_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Functional Testing</a>';
					  echo '  <a href="regression_software_testing_company_india.php"><i class="fab fa-bitbucket"></i> Regression Testing</a>';
					  echo '  <a href="beta_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Beta Testing</a>';
					  echo '  <a href="website_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Website Testing</a>';
					  echo '  <a href="exploratory_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Exploratory Testing</a>';
					  echo '  <a href="test_case_execution_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Test Case Execution</a>';
					  echo '  </div>';
					  echo '  </li>';
					  echo '  <li class="dropdown">';
					  echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Services</a>';
					  echo '  <div class="dropdown-content">';
					  // echo '  <a href="testcase.php"><i class="fab fa-bitbucket"></i> Test Case</a>';
					  echo '  <a href="usability_software_testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Usability</a>';
					  echo '  <a href="teams_crowdsourced_software_Testing_company_india.php"><i class="fab fa-bitbucket"></i> Testing Teams</a>';
					  echo '  <a href="integrations_crowdsourced_software_Testing_company_bangalore_india.php"><i class="fab fa-bitbucket"></i> Bug Tracker Integrations</a>';
					  echo '  </div>';
					  echo '  </li>';
						echo '  <li class="dropdown">';
					echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Product</a>';
					echo '  <div class="dropdown-content">';
					echo '    <a href="increase-product-velocity_software_testing_services_bangalore_india.php"><i class="fab fa-bitbucket"></i> Increase Velocity</a>';
					  echo '  <a href="product_overview_softwaretesting_outsourcing_services_india.php"><i class="fab fa-bitbucket"></i> Product Overview</a>';

					echo '  </div>';
				   echo ' </li>';
					  echo '  <li><a href="pricing_software_testing_services_bangalore_india.php" id="dropbtn">Pricing</a></li>';
				   echo ' <li><a href="index.php#formdemo" id="dropbtn">Contact</a></li>';
				   //echo ' <!--<li><a href="signup.php" id="dropbtn">SignUp</a></li>-->';
				  
				  //  echo ' <li><a href="logout.php">Logout</a></li>';
				   //echo ' <!--<li><a href="newsignup2.php">signup</a></li>-->';
				   //echo ' <!-- <li><a href="#">Contact|</a></li> -->';
				//  echo '  <li><a href="#">Welcome,<br>' .$_SESSION['sname'].'</a></li>';
					  echo '  <li class="dropdown">';
					echo '  <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Product </a>';
					echo '  <div class="dropdown-content">';
					echo '    <a href="increase-product-velocity.php"><i class="fab fa-bitbucket"></i> Increase Velocity</a>';
					  echo '  <a href="product_overview.php"><i class="fab fa-bitbucket"></i> Product Overview</a>';

					echo '  </div>';
				   echo ' </li>';
					echo ' <li class="dropdown testbu">';
					echo ' <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Profile</a>';
					echo ' <div class="dropdown-content">';
					echo ' <a href="profile.php"><i class="fab fa-bitbucket"></i> My Profile</a>';
					echo ' <a href="updateprofile.php"><i class="fab fa-bitbucket"></i> Edit Profile</a>';
					echo ' </div>';
					echo ' </li>';
					echo ' <li class="dropdown testbus3">';
					echo ' <a href="javascript:void(0)" id="dropbtn" class="dropbtn">Hello,<br>'.$_SESSION['sname'].'&nbsp;'.$_SESSION['slast'].'</a>';
					echo ' <div class="dropdown-content">';
					echo ' <a href="logout.php">Logout</a>';
					echo ' </div>';
					echo ' </li>';
					echo ' </ul>';
			}
		?>
	</div>
</nav>
<?php
	if(isset($_SESSION['msg']))
	{
		echo"<p class='alert alert-success'>";
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		echo"</p>";
	}
?>
<?php
	if(isset($_SESSION['msg']))
	{
		echo"<p class='alert alert-success'>";
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		echo"</p>";
	}
?>          
<script>
$(document).ready(function()
  {
    $('#menu-bar').click(function(){
      $('#menu-all').toggle();
    });
  });

</script>
<!-- navbar ended -->