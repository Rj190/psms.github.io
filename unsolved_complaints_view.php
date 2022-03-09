<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->




<!DOCTYPE html>
<html>

<head>



	<title>PSMS</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
<div class="top_header" id="home">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="nav_top_fx_w3ls_agileinfo">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<div class="logo-w3layouts-agileits">
					<h1> <a class="navbar-brand" href="#"><i class="fa fa-clone" aria-hidden="true"></i> PSMS <span class="desc">Public Service Monitoring System</span></a></h1>
				</div>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="nav_right_top">
               
				
					

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

				<ul class="nav navbar-nav">
					<li > <a href="authority_home.php">Home </a> </li>
							<li><a  href="areawise_view.php">AreaWise Complaints</a></li>
            
            <li ><a  href="wardwise_view.php">Wardwise Complaints</a>
            
			</li>
			<li><a  href="solved_complaints_view.php">Solved Complaints</a>
				
				</li>				
				<li class="active"><a  href="unsolved_complaints_view.php">Unsolved Complaints</a>
				
				</li>
                
                <li><a  href="feedback_view_a.php">FeedBack</a>
				
				</li>
                
                
                <!-- <li><a  href="pChart2.1.4/examples/example.draw3DPie.transparent.php">Report</a> -->
				
				</li>
                
              <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a  href="changepass.php">Changepass</a></li>
								<li><a href="logout.php">Logout</a></li>


							</ul>
						</li>
							
						</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	</div>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
			<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Solved Complaints<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
		   <?php 
		   $server="localhost";
		   $user="root";
		   $password="";
		  $dbname="smart_solutions";
		  $con=mysqli_connect($server,$user,$password,$dbname);
		    require_once('dbcon.php');
	 $ss="select a.cmptype,a.cmpname,a.ward,a.area,a.adate,b.complaint_status from complaintdetails a,feedback b where a.cmpid=b.complaint_id and b.complaint_status='unsolved' ";
		    $res=mysqli_query($con,$ss);
		   ?>
		     <table width="985" border="1">
               <tr bgcolor="#0000FF">
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Complaint Type</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Complaint Name</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Ward</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Area</strong></div></td>
                 <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>complaint Date</strong></div></td>
                           <td  bgcolor="#0000FF"><div style="color:#FFFFFF"><strong>Status</strong></div></td>
               </tr>
               <?php
                   while($row=mysqli_fetch_array($res))
				   {
			   ?>
               <tr>
                 <td><?php echo $row['cmptype'];?></td>
                 <td><?php echo $row['cmpname'];?></td>
                 <td><?php echo $row['ward'];?></td>
                 <td><?php echo $row['area'];?></td>
                 <td><?php echo $row['adate'];?></td>
                   <td><?php echo $row['complaint_status'];?></td>
               </tr>
               <?php
			    }
			   ?>
             </table>
		  </div>
					<div class="login-social-grids">
						
					</div>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
</div>

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
		  <div class="clearfix"></div>

			<p class="copy-right">@PSMS 2022. All rights reserved </p>
		</div>
</div>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>

</html>