<?php
require("connection.php");


if(isset($_POST['submit_details'])){

echo $organization = htmlspecialchars( $_POST['organization']);
$name = htmlspecialchars( $_POST['name']);
$policy_no = htmlspecialchars( $_POST['policy_no']);
$alternate_policy_no = htmlspecialchars( $_POST['alternate_policy_no']);
$phone_no = htmlspecialchars( $_POST['phone_no']);
$plan = htmlspecialchars( $_POST['plan_type']);
$email = htmlspecialchars( $_POST['email']);
$location = htmlspecialchars( $_POST['location']);
$no_of_dependant = htmlspecialchars( $_POST['no_of_dependant']);
$provider = htmlspecialchars( $_POST['provider']);
$gender = htmlspecialchars( $_POST['gender']);
$dob = htmlspecialchars( $_POST['dob']);
$reg_status = htmlspecialchars( $_POST['reg_status']);



  $filename = $_FILES['passport']['name'];
  $file_temp_name = $_FILES['passport']['tmp_name'];
  $file_store= "uploads/".basename($filename);

  ;

  if (!move_uploaded_file($file_temp_name, $file_store)) {
    echo "Error uploading file";
  }else{


}

  }
  











?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<body>
<div class="container mx-auto">
	<div class="card">
		<div class="card-header text-center">
			<h2>Nonsuch Portal</h2>
		</div>
		<div class="card-body">

      <form action="backend/code.php" method="post" enctype="multipart/form-data">
			<table class="table table-responsive ">
				<tr >
					<td>
  <div class="">
    <label for="" class="form-label">Organization</label>
     <input type="text" class="form-control" id="organization" name="organization"
                  placeholder="Enter your Organization" />
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your FullName"/> 
  </div>
  </td>
</tr>
<tr >
          <td>
  <div class="">
    <label for="" class="form-label">Policy No</label>
     <input type="text" class="form-control" id="policy_no"name="policy_no"     placeholder="Enter your Policy No"/>
    
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Alternate No</label>
    <input
                    type="text"
                    class="form-control"
                    id="alternate_policy_no"
                    name="alternate_policy_no"
                    placeholder="Enter Alternate_policy_no"
                  /> 
  </div>
  </td>
</tr>
<tr >
          <td>
  <div class="">
    <label for="" class="form-label">Phone No</label>
     <input
                        type="text"
                        class="form-control"
                        id="phone_no"
                        name="phone_no"
                        placeholder="Enter your Phone No."
                      />
    
  </div>
  </td>
  <td>
  <div class="">
    <input type="radio" name="plan_type" value="gold" >Gold
    <input type="radio" name="plan_type" value="silver">Silver
  </div>
  </td>
</tr>
<tr >
          <td>
  <div class="">
    <label for="" class="form-label">Email Address</label>
     <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter your Email Address"
                          />
    
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Your Location</label>
    <input type="text" class="form-control" id="location" name="location"placeholder="Enter your Location"/> 
  </div>
  </td>
</tr>

<tr >
          <td>
  <div class="">
    <label for="" class="form-label">No of Dependant</label>
     <input
                                type="number"
                                class="form-control"
                                id="no_of_dependant"
                                name="no_of_dependant"
                                placeholder="Enter No. of Dependant"
                              />
    
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Provider</label>
    <input type="text"class="form-control" id="provider"name="provider" placeholder="Enter your Provider" /> 
  </div>
  </td>
</tr>

<tr >
          <td>
  <div class="">
    <label for="" class="form-label">Gender</label>
     <select name="gender">
      <option selected>--select Gender--</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      </select>
    
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob"/>
  </div>
  </td>
</tr>
<tr >
          <td>
  <div class="">
    <label for="" class="form-label">Passport </label>
      <input type="file" id="photo" name="photo"/>
    
  </div>
  </td>
  <td>
  <div class="">
    <label for="" class="form-label">Reg Status</label>
      <select name="reg_status" id="reg_status">
     <option selected>--Select Gender--</option>
     <option value="active">Active</option>
     <option value="Inactive">Inactive</option>
     </select>
  </div>
  </td>
</tr>
			</table>
		</div>
<input type="submit" name="submit_details" value="Submit" class="btn btn-primary  mx-2">
		</form>
	</div>
  <div class="card-footer text-center mt-4 ">Nonsuch portal &copy; 2025</div>
	
</div>

<script src="assets/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script>
      $(document).ready(function(){
        $("form").submit(function(e){
          e.preventDefault();
          var organization = $("#organization").val();
          var name = $("#name").val();
          var policy_no = $("#policy_no").val();
          var alternate_policy_no = $("#alternate_policy_no").val();
          var phone_no = $("#phone_no").val();
          var plan_type = $("#plan_type").val();
          var email = $("#email").val();
          var location = $("#location").val();
          var no_of_dependant = $("#no_of_dependant").val();
          var provider = $("#provider").val();
          var gender = $("#gender").val();
          var dob = $("#dob").val();
          var photo = $("#photo").val();
          var reg_status = $("#reg_status").val();

$.ajax({
  url: "index.php",
  type: "POST",
  data: {
              organization: organization,
              name: name,
              policy_no: policy_no,
              alternate_policy_no: alternate_policy_no,
              phone_no: phone_no,
              plan_type: plan_type,
              email: email,
              location: location,
              no_of_dependant: no_of_dependant,
              provider: provider,
              gender: gender,
              dob: dob,
              photo: photo,
              reg_status: reg_status,
  },
  success: function(success){
console.log(success);
  }, 
  
})
        })
      })
    </script> 
</body>
</html>