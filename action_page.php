<html>
<?php
	include_once 'dbcon.php';
?>


<?php

	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Dhanmondi");
	$count = $res->num_rows;
	$v=$_POST["Location"];
	?>
	<head>
	<title>Local Oncologist in<?php echo " ".$v; ?></title>
	</head>
	<body>
	<table style="width:100%">
	<?php
	if($v == "Dhanmondi")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Dhanmondi");
	?>
	<?php
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    /*  ?> */
	if($v == "Mirpur")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Mirpur");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
  /*  ?> */
	if($v == "GreenRoad")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_GreenRoad");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    /*  ?> */
	
	if($v == "Gulshan")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Gulshan");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    /*?>*/
	
	if($v == "Mohammmadpur")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Mohammadpur");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    /*?>*/
	
	if($v == "Panthapath")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Panthapath");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    /*?>*/ 
	
	if($v == "Uttara")
	{
	$res = $MySQLiconn->query("SELECT * FROM Local_Oncologist_Uttara");
	while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
            <td><?php echo $row['Designation']; ?></td>
			<td><?php echo $row['Contact_info']; ?></td>
			<td><?php echo $row['Chamber']; ?></td>
			<td><?php echo $row['Location']; ?></td>
			</tr>
			<?php
		}
	
	}
    ?>
</table>
</body>