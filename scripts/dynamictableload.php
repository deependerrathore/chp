<?php

	session_start();
	include("../includes/connection.php");

	
	
	$start = $_POST['start'];

	@$branch = $_SESSION["branch"];

	
	if(!empty($branch) && isset($branch) && $branch[0] !== "" ){

		@$query = mysql_query("select * from stupersonal where branch='$branch[0]' or branch= '$branch[1]' or branch='$branch[2]' or branch= '$branch[3]' ORDER BY rollnumber asc LIMIT $start,5") or die(mysql_error());
		
		
	}else{
		$query = mysql_query("select * from stupersonal ORDER BY rollnumber  asc LIMIT $start,5") or die(mysql_error());
	}
		

	
	
	$count = $start+1;
	while($row = mysql_fetch_array($query)){

?>
	<tr>
    	<td><?php echo $count++; ?></td>
        <td><a href="#<?php echo $row['rollnumber'];?>" onClick="showfulldetail(<?php echo '\''.$row['rollnumber'].'\'' ; ?>)" ><?php echo $row['name']; ?></a></td>
        <td><?php echo $row['rollnumber']; ?></td>
        <td><?php echo $row['branch']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><a href="#" onclick="edit('<?php echo $row['rollnumber'] ;?>');">Edit</a> | <a href="#" onclick="deletestudent('<?php echo $row['rollnumber'] ;?>');">Delete</a></td>
    </tr>

<?php
	//@session_unset($_SESSION["branch"]);

	}

?>