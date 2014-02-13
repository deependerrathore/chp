<?php
	session_start();
	include_once("../includes/connection.php");
	
	
	@$branchs  = $_POST['branchs'];

	
	$branch = explode(",", $branchs);
	
	$_SESSION['branch'] = $branch;

	if(!empty($branchs)){
	@$query = mysql_query("select * from stupersonal where branch='$branch[0]' or branch= '$branch[1]' or branch='$branch[2]' or branch= '$branch[3]' ORDER BY rollnumber asc LIMIT 0,15");
	}else
	{
	$query = mysql_query("select * from stupersonal  ORDER BY rollnumber asc  LIMIT 0,15");
	}
	
	
	
	
	
	$count = 1 ;
?>
<?php include("../includes/checkbox.php");?>
<table class="table table-bordered table-striped table-condense">
	<thead class="thead">
    <tr>
            <th>#</th>
            <th>Name</th>
            <th>Roll No.</th>
            <th>Branch</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Edit & Delete</th>
        </tr>
      </thead>
<?php while($row= mysql_fetch_assoc($query)){
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
<?php } ?>
	
</table>
		