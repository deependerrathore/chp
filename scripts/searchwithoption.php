<?php
	include("../includes/connection.php");
	$string = $_POST['string'];
	
	$query = mysql_query("SELECT * from stupersonal where name like '$string%' or rollnumber like '%$string%' order by rollnumber") or die(mysql_error());
	$count =1;
	
    if(mysql_num_rows($query)>0){
?>
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
                   <td><a href="#<?php echo $row['rollnumber'] ; ?>" onClick="showfulldetail(<?php echo '\''.$row['rollnumber'].'\'' ; ?>)" ><?php echo $row['name']; ?></a></td>
                    <td><?php echo $row['rollnumber']; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><a href="#" onclick="edit('<?php echo $row['rollnumber'] ; ?>');">Edit</a> | <a href="#" onclick="deletestudent('<?php echo $row['rollnumber'] ; ?>');">Delete</a> </td>
                </tr>
        <?php } ?>
            
    </table>

<?php
    }else{
?>
        <h4>Record not found</h4>
<?php
    }
?>
	
		

	
