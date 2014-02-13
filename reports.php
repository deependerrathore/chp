<!doctype html>
<?php
    include("includes/session.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js" ></script>


<script type="text/javascript" src="js/globalize.min.js"></script>
<script type="text/javascript" src="js/dx.chartjs.js"></script>




</head>
	
<body>
	<div id="wrapper">
    	<?php include("includes/headerandnav.php"); ?>
        
        <div id="content">
            <div id="dashboard-nav">
                <ul id="action" class="nav nav-tabs">
                    <li><a  href="#" id="numberofstudent">Number Of Student</a></li>
                    <li><a  href="#" id="studentperformance">Student Performance</a></li>
                    
                    

                </ul>
            </div>
            <div style="display:none;" id="dashboard-content" >
                <div id="divnumberofstudent">
                    <div id="number" ></div>

                    <div id="ratio" ></div>

                </div>
                <div id="divstudentperformance">
                    <div id="topper" ></div>
                    <div id="betweenRange"></div>
                    <div id="overallresult"></div>

                </div>
                
                
            </div>

        </div>
        
        <?php include("includes/footer.php"); ?>
    </div>
  
  
  <script type="text/javascript" src="js/reports.js"></script>

</body>
</html>