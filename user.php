<?php
include('connect.php');
session_start();
if($_SESSION['uname']=="")
{
  header("location:index.php");
  exit(0);
}
$adi= $_SESSION['uname'];
$sql = "select * from reg where username = '$adi' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/w3.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
<script>
        
         $(document).ready(function(){
     $("#overlay").hide();
       
    });
$(document).ready(function(){
     $("#overlay").hide();
    $("#team").click(function(){
        $("#overlay").show();
        
         
    });
});
          $(document).ready(function(){
        $("#div1").show();
        $("#div2").hide();
        $("#div3").hide();
        $("#div4").hide();
        $("#div5").hide();  
        $("#div6").hide();
        $("#div7").hide();
        $("#div8").hide(); 
        $("#div9").hide();
        $("#div10").hide();
        $("#div11").hide();
         });
        
    jQuery(function(){
         jQuery('#showall').click(function(){
               jQuery('.targetDiv').show();
        });
        jQuery('.showSingle').click(function(){
              jQuery('.targetDiv').hide();
              jQuery('#div'+$(this).attr('target')).show();
        });
});
    
    </script>    
    
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
        
 <div class="container" style="margin-top: 3%;">
           
           <div class="row">
                <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:20px; padding-bottom:20px; color:white;">NewsFeed</h3><hr/><br>
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
               <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="amarUjala.jpg" height="50" width="50" alt="Avatar" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">AmarUjala pvt. ltd is going to conduct a charity football tournament in Uttar Pradesh</h5><br>
        <hr class="w3-clear">
        <p align="justify">AmarUjala pvt. ltd is going to organise a charity football tournament on 20th June 2018 named as Charity trophy. All the information given by the chairman of Charity trophy Mr. Shishir Dwivedi said that total 36 teams are going to participate in this trophy and that tournament is going to start from 20th June 2018 and the final match is played on 22th Oct 2018. </p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
             <!-- <img src="/w3images/lights.jpg" style="width:100%; height:40%;" alt="Northern Lights" class="w3-margin-bottom">-->
            </div>
            <div class="w3-half">
              <!--<img src="/w3images/nature.jpg" style="width:100%; height:40%;" alt="Nature" class="w3-margin-bottom">-->
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" class="w3-button w3-right w3-margin-bottom" data-toggle="modal" data-target="#myModal"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
    </div>
   </div>
 </div>
                <br/>
                <br/>
                <div class="row">
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4 container">
               <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="cric.jpg" alt="Avatar" height="50" width="50" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">Everything is ready for the final match of east zone unversity tournament</h5><br>
        <hr class="w3-clear">
        <p align="justify">As per the news, its all set for the final match between KIIT university V/S Patna university. Both the teams are full of energy and full of experience player like as their captains and all-rounder.

 </p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
              <img src="kiit.png" style="width:30%; height:30%;" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="patna.jpg" style="width:30%; height:30%;" alt="Nature" class="w3-margin-bottom">
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" data-toggle="modal" data-target="#myModal" class="w3-button w3-margin-bottom" style="float:right;"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
    </div>
	</div>
            </div>
                    <br/>
                    <br/>
            <div class="row">
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4 container">
                    <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="upcomming.png" alt="Avatar" height="50" width="50" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">National Cricket clubs trails dates are released for upcoming tournaments</h5><br>
        <hr class="w3-clear">
        <p align="justify">As per the news, Trails for the upcoming national clubs cricket tournament are released for all groups likes as U-16, U-19 and seniour teams. Venue for the National trails are scheduled at institute of national club, Bangalore, Karnataka.</p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
              <!--<img src="/w3images/lights.jpg" style="width:100%; height:40%;" alt="Northern Lights" class="w3-margin-bottom">-->
            </div>
            <div class="w3-half">
             <!--<img src="/w3images/nature.jpg" style="width:100%; height:40%;" alt="Nature" class="w3-margin-bottom">-->
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" data-toggle="modal" data-target="#myModal" class="w3-button w3-margin-bottom " style="float:right; border:none;"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
           <br>
       <br>
       <br>
        <div class="modal fade container-fluid" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="w3-left modal-title">Message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="controller.php" method="post" id="contactForm" validate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" autocomplete="off" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" required autocomplete="off" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" name="newsmsg">Send Message</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	</div>
               </div>
										<footer>
										   <p>&copy 2018 ERP SYSTEM . All Rights Reserved | Design by <a href="index.php" target="_blank">ERP SYSTEM</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT, cursive;">ERP SYSTEM</span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="height: 230px;">	
									  <a href="admin.php"><img src="<?php echo $rows['image']; ?>" height="100" width="100"></a>
									  <a href="profile.php"><span class=" name-caret"><?php echo $rows['name']; ?></span></a>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="adminupdate.php"><span>Update</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.php?Expire"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                                <li><a href="user.php" class="active"><i class="fa fa-tachometer"></i><span>News Feed</span></a></li>
								<li><a href="attedence.php"><i class="fa fa-table"></i><span> View Attendence</span></a></li>
								<li><a href="result.php"><i class="fa fa-file-text-o"></i> <span>Result</span> </a></li>
								<li><a href="assign.php"><i class="lnr lnr-pencil"></i> <span>View Assignment</span></a></li>
								<li><a href="document.php"><i class="lnr lnr-book"></i> <span>View Document</span> </a></li>
                                <li><a href="queries.php"><i class="lnr lnr-envelope"></i> <span>Send Queries</span></a></li>
								<li><a  href="status.php"><i class="lnr lnr-envelope"></i> <span>Query Status</span></a></li>
                                <li><a  href="profile.php"><i class="lnr lnr-envelope"></i> <span>View Profile</span></a></li>
								  </ul>
                        </div>
                    </div>
							  <div class="clearfix"></div>	
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>