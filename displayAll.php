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
			<th>Name</th>
			<th>Policy No.</th>
			<th>Phone</th>
			<th>Photo</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		
			<?php 
$sql = "select * from `login` ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";

			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['sname'].'</td>';
			echo '<td>'.$row['policy_no'].'</td>';
			echo '<td>'.$row['phone_no'].'</td>';
			echo '<td>'.$row['photo'].  '</td>';
			echo '<td>'.$row['reg_status'].'</td>';
			echo '<td>
			<button class="btn btn-primary btn-sm">View</button>
			<button class="btn btn-success btn-sm">Edit</button>
			<button class="btn btn-danger btn-sm">Delete</button>
		</td>';
		echo "</tr>";
		;
	}
	;
}
		?>
	</table>
</div>
</body>
</html>