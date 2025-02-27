<?php 
require("connection.php")?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display Details</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<body>

<div class="container margin-auto">
	<a href="form.php">Enter New Enrollee</a>
	<table class="table table-responsive  ">
		<tr>
			<th>Id</th>
			<th>SurName</th>
			<th>Other Names</th>
			<th>Policy No.</th>
			<th>Phone</th>
			<th>Photo</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	<tr>	
			<?php 
$sql = "select * from `login` ";
$result = mysqli_query($con, $sql);
while ($row=mysqli_fetch_assoc($result)) {
	?>
<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['sname'];?></td>
			<td><?php echo $row['oname'];?></td>
			<td><?php echo $row['policy_no'];?></td>
			<td><?php echo $row['phone_no'];?></td>
			<td><img src="uploads/"><?php echo $row['photo'];?></td>
			<td><?php echo $row['reg_status'];?></td>
			
		</tr>
	<?php


}

		?>
	
</div>
</body>
</html>