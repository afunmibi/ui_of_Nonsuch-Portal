<?php 
require('connection.php');
if (isset($_POST['submit_details'])) {
	$organization = htmlspecialchars($_POST['organization']);
	$sname = htmlspecialchars($_POST['sname']);
	$oname = htmlspecialchars($_POST['oname']);
	$policy_no = htmlspecialchars($_POST['policy_no']);
	$phone_no = htmlspecialchars($_POST['phone_no']);
	$email = htmlspecialchars($_POST['email']);
	$provider = htmlspecialchars($_POST['provider']);
	$gender = htmlspecialchars($_POST['gender']);
	$plan_type = htmlspecialchars($_POST['plan_type']);
	$location = htmlspecialchars($_POST['location']);
	$dob = htmlspecialchars($_POST['dob']);
	$no_of_dependant = htmlspecialchars($_POST['no_of_dependant']);
	$reg_status = htmlspecialchars($_POST['reg_status']);
	$alternate_no = htmlspecialchars($_POST['alternate_no']);
	$date_captured =  date("Y-m-d:h:i:s");

$file_name = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$file_size = $_FILES['photo']['size'];
$file_store= "uploads/".basename($file_name);

if (!move_uploaded_file($file_tmp, $file_store)) {
	echo 'Error uploading image';
}else{

$stmt = $con->prepare("insert into `login`(organization, sname, oname, policy_no, phone_no, email,provider, gender, plan_type, location,dob,no_of_dependant, reg_status, alternate_no,date_captured, photo
) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)") ;
$stmt->bind_param('ssssssssssssssss',$organization, $sname, $oname, $policy_no, $phone_no,$email,$provider,$gender, $plan_type, $location,$dob,$no_of_dependant, $reg_status, $alternate_no,$date_captured, $file_name);
if($stmt->execute()){
	echo "Data Saved";
}else{
	echo 'Data not saved';
};

}

}
;






?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		.container{
			width: 800px;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			background-color: #eee;
			box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.4);
			margin: auto;
			border-radius: 10px;

		}
		.wrapper{
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding: 7px;
			margin-bottom: 5px;

		}
		.inner-form{
			margin: 5px;
			padding: 5px;
			width:30%;
		}
		.submit_details_btn{
			background-color: deepskyblue;
			padding: 10px;
			margin: 10px;
			cursor: pointer;
			border-radius: 5px;
			color: white;
		}
		.submit_details_btn:hover{
			background-color: #f4f4f4;
			transform: translateY(4px);
			color: blue;

		}
		input{
			outline: none;
			border-radius: 4px;
			padding: 2px;
			margin: 2px;
		}
		input:hover{
			background-color: skyblue;
			border: 1px dashed #eee;
		}
	</style>
</head>
<body>
<div class="container">
	<div id="display"></div>
	<form action="" method="post" enctype="multipart/form-data">
		<h2 style="text-align: center; padding: 10px; margin-top:10px;">Nonsuch Enrolment Portal</h2>
		<div class="wrapper">

			<div class="inner-form">
				<label>Organization</label>
				<input type="text" id=" organization" name=" organization" placeholder="Organization" required>
			</div>
			<div class="inner-form">
				<label>Surname</label>
				<input type="text" id=" sname" name=" sname" placeholder="Surname" required>
			</div>
			<div class="inner-form">
				<label>Other Names</label>
				<input type="text" name=" oname" placeholder="Other Names" required>
			</div>			
		</div>
		<!-- row 2 -->
		<div class="wrapper">
			<div class="inner-form">
				<label>Policy No</label>
				<input type="text" name="policy_no" placeholder="Policy No">
			</div>
			<div class="inner-form">
				<label>Phone No</label>
				<input type="text" name=" phone_no" placeholder="Phone No" required>
			</div>
			<div class="inner-form">
				<label>Email Address</label>
				<input type="email" name=" email" placeholder="Email Address">
			</div>
		</div>
		<!-- row 3 -->
		<div class="wrapper">
			<div class="inner-form">
				<label>Provider</label>
				<input type="text" name="provider" placeholder="Provider" required>
			</div>
			<div class="inner-form">
				<label>Gender</label>
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Male">Male
			</div>
			<div class="inner-form">
				<label>Plan Type</label>
				<select name="plan_type">
					<option selected>--select plan--</option>
					<option value="Gold">Gold</option>
					<option value="Silver">Silver</option>
					<option value="Platinum">Platinum</option>
				</select>
			</div>
		</div>
		<!-- row 4 -->
		<div class="wrapper">
			<div class="inner-form">
				<label>Location</label>
				<input type="text" name="location" placeholder="Location" required>
			</div>
			<div class="inner-form">
				<label>Date of Birth</label>
				<input type="date" name=" dob" required>
			</div>
			<div class="inner-form">
				<label>Number of Dependant</label>
				<input type="number" name=" no_of_dependant" placeholder="Number of Dependant">
			</div>
		</div>
		<!-- row 5 -->
		<div class="wrapper">
			<div class="inner-form">
				<label>Registration Status</label>
				<select name="reg_status">
					<option value="active">Active</option>
					<option value="inactive">InActive</option>
				</select>
			</div>
			<div class="inner-form">
				<label>Alternate No</label>
				<input type="text" name=" alternate_no" placeholder="Alternate No">
			</div>
			<div class="inner-form">
				<label>Passport Photograph</label>
				<input type="file" name=" photo" required>
			</div>
		</div>
			<!-- wrapper for submit button -->
			<div class="wrapper">	
			<div>
				<input type="submit" name="submit_details" value="Submit Details" class="submit_details_btn">
			</div>	
			</div>	
		</div>

	</form>
	
</div>
<script src="assets/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script >
    	$(document).ready(function(){
    		$('form').submit(function(e){
    			e.preventDefault();
    			var formData =$(this).serialize(); 
    		
    		$.ajax({
    			url: "form.php",
    			method: "POST",
    			data: formData,
    			success: function(response){
    				if(response){
    				$('#display').text(response); 
    				}else{
    					$('#display').test('No response from the server');
    				}
    				
    			}
    		})
    	}),})
    </script>
</body>
</html>
