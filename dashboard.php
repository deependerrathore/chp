<!doctype html>
<?php
	include("includes/session.php");
?>

<?php
  //script for image uploading
  if(isset($_POST['submitimage'])){//called from includes/edit.php
        include("includes/connection.php");

        $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
        $imageSize = mysql_real_escape_string($_FILES["image"]["size"]/1024);
        $error = array();
        $rollnumber = $_POST['rollnum'];
        if ($imageSize < 60) {
            if(substr($imageType,0,5) =="image"){
                mysql_query("update stupersonal set imagename = '$imageName', image = '$imageData' where rollnumber= '$rollnumber'") or die(mysql_error());
                $error[] = "image is successfully uploaded";

            }else{
                $error[]= "only images are allowed";
            }
            
        }else{
            $error[] = 'Please upload photo of size less then 20KB';
        }
    }
  
?>

<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="js/jquery.js" ></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>



</head>
	
<body>
	<div id="wrapper" >
    	<?php include("includes/headerandnav.php"); ?>
        
        <div id="content">
        
        	<div id="dashboard-nav">
            	<ul id="action" class="nav nav-tabs ">
                	<li><a href="#" onclick="addstudent(); return false;">Add student</a></li>
                    <li><a href="#" onclick="searchstudent(); return false;">Search student</a></li>
                    <li><a href="#" onclick="showstudent(); return false;">Show student</a></li>
                    <li><a href="#" onclick="addadmin(); return false;">Login Credential</a></li>
                   
                </ul>
            </div>
            <div id="dashboard-content">
                <div><?php if(isset($error)){
                            foreach ($error as $key) {
                            echo '<h5 class="errorhide">'.$key .'</h5>';
                            }

                            }  
                    ?>
                </div>
                <div style="display:none" id="message-success" class="alert alert-success"></div>
                <div style="display:none" id="message-error" class="alert alert-error"></div>
            	<div id="table-area">

                    
                	
                </div>

                <div id="right-menu-area">
                    
                </div>
            	
            </div>
        
        </div>
        
        <?php include("includes/footer.php"); ?>
    </div>
  
    <script type="text/javascript" src="js/dashboard.js" ></script>

    

</body>
</html>