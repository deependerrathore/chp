<!doctype html>
<?php
	include("includes/session.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
</head>
	
<body>
	<div id="wrapper">
    	<?php include("includes/headerandnav.php"); ?>
        
        <div id="content">
        	<div id="dashboard-nav">
            	<ul id="action" class="nav nav-tabs ">
                	
                    <li><a href="#" id="recentnews">Recent Post</a></li>
                    <li><a href="#" id="phonebook">Faculty Phonebook</a></li>
                    <li><a href="#" id="csv">Download CSV</a></li>
                    
                   
                </ul>
            </div>

            <div id="dashboard-content">

                <div style="display:none" id="message-success" class="alert alert-success"></div>

                <div style="display:none" id="message-error" class="alert alert-error"></div>
                <div id="internalform" style="display:none"></div>
            	<div id="table-area">
            		
                    
                	
                </div>
                <div id="right-menu-area">
	                <ul id="action" class="nav nav-tabs nav-stacked ">
	                	
	                    <li><a href="#" id="logindetail">Login Details</a></li>
	                    <li><a href="logout.php" id="logout">Log Out</a></li>
	                   
	                </ul>
                    
                </div>
            	
            </div>
        	
        
        </div>
        
       <?php include("includes/footer.php") ; ?>
    </div>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>