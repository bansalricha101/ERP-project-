<?php
include('connect.php');
session_start();
if($_SESSION['uname']=="")
{
  header("location:index.php");
  exit(0);
}
$adi= $_SESSION['uname'];
$sql = "select * from tec_reg where username = '$adi' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sport's Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<link href="css/w3.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
    
      <style>
        input[type=submit], button {
  background:linear-gradient(to right, #42a5f5, #86c9ff);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit], button:hover {
  background:linear-gradient(to right, #42a5f5, #86c9ff);
}
        table.zebra{font-size:14px;line-height:20px;background:#f7f2e2;border:1px solid #c0b791;border-style:solid solid none none}.zebra tr td,.zebra tr th{padding:5px;border:1px solid #c0b791;border-style:none none solid solid}.zebra tr.even td,.zebra tr.even th,.zebra td.even,.zebra2 tr:nth-child(even) td,.zebra3 tr:nth-child(odd) td{background-color:#faf8ee}.zebra p{margin-bottom:0} 
</style>
    
</head> 
<body bgcolor="grey">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<div class="top_menu">
						
							<div class="clearfix"></div>	
								
				</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
        
<div class="container" style="margin-top: 1%;">
 <div class="row ">
<div class="col-lg-16 mt-lg-0 mt-sm-5 mt-4">
     <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:15px; padding-bottom:15px; color:white;">Qurey Status</h3><hr/><br>
<table width="90%" align="center" cellpadding="4" cellspacing="0" class="zebra zebra2">
 <tr>

<th>Subject</th>
<th>Message</th>
<th>Student Name</th>
<th>Status</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php 
error_reporting(0); 
$sql = "select * from query";
      $result = $conn->query($sql);
       if ($result->num_rows > 0) { // if one or more rows are returned do following
            while($ro = $result->fetch_assoc()){    
                // puts data from database into array, while it's valid it does the loop
                echo "<tr><td>".$ro["sub"]."</td><td>".$ro["msg"]."</td><td>".$ro["uname"]."</td><td style='color:green;'><b>".$ro["status"]."</b></td>";
                echo '<td><button><a href=\'controller.php?deleteground='.$ro["id"].' \'onclick=\'return confirm()\'>Delete</a></button></td>' ;
                echo '<td><a href=\'update.php?updateground='.$ro["id"].'\' onclick=\'return confirm() style=\'color:white; text-decoration:none;\'><button>Update</button></td>';
      
                echo "</tr>";
            }
        }
    ?>
</table>
    <br>
    <br>
    <br>
    <br>
</div>
			</div>
               </div>	
    <footer>
										  								<footer>
										   <p>&copy 2019 ERP SYSTEM . All Rights Reserved | Design by <a href="index.php" target="_blank">ERP SYSTEM</a></p>
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
                                <li><a href="staff.html" class="active"><i class="fa fa-tachometer"></i><span>Attendance</span></a></li>
								<li><a href="addmark.php"><i class="fa fa-table"></i><span>Add Marks</span></a></li>
								<li><a href="upassig.php"><i class="fa fa-file-text-o"></i> <span>Upload Assignment</span> </a></li>
								<li><a href="upnotes.php"><i class="lnr lnr-pencil"></i> <span>Share Document/Notes</span></a></li>
								<li><a href="addnews.php"><i class="lnr lnr-book"></i> <span>Add News</span> </a></li>
                                <li><a href="viewq.php"><i class="lnr lnr-envelope"></i> <span>View Queries</span></a></li>
                                <li><a  href="sprofile.php"><i class="lnr lnr-envelope"></i> <span>View Profile</span></a></li>
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