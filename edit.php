<?php

require_once ('process/dbcon.php');
$sql = "SELECT * FROM `employee` WHERE 1";

$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$nid = mysqli_real_escape_string($conn, $_POST['nid']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$degree = mysqli_real_escape_string($conn, $_POST['degree']);





	// $result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`nid`='$nid',`salary`='$salary',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `employee` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`birthday`='$birthday',`gender`='$gender',`contact`='$contact',`nid`='$nid',`address`='$address',`dept`='$dept',`degree`='$degree' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemplyee.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `employee` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstName'];
	$lastname = $res['lastName'];
	$email = $res['email'];
	$contact = $res['contact'];
	$address = $res['address'];
	$gender = $res['gender'];
	$birthday = $res['birthday'];
	$nid = $res['nid'];
	$dept = $res['dept'];
	$degree = $res['degree'];
	
}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | Employee Management System</title>
	
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>
<body>
<div id="container">
	
		<nav>
        <div id="logo">Employee Management System</div>
		
			<ul >
				
				<li><a  href="addEmployee.php">Add Employee</a></li>
				<li><a href="viewemplyee.php">View Employee</a></li>
				<li><a  href="adminlogin.html">Log Out</a></li>
			</ul>
		</nav>
</div>

                   <label for="">Update Employee Info</label>
                    <form id = "registration" action="edit.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>">
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" name="nid" value="<?php echo $nid;?>">
                        </div>

                        
                         <div class="input-group">
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept;?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>">
                        </div>
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="button" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
