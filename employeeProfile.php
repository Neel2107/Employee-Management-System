<?php

require_once ('process/dbcon.php');
$sql = "SELECT * FROM `employee` WHERE 1";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `employee` WHERE id='$id'";
  $sql2 = "SELECT total from `salary` WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn , $sql2);
  $salary = mysqli_fetch_array($result2);
  $empS = ($salary['total']);
 
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
  $pic = $res['pic'];
}
}

?>

<html>
  <head>
    <link rel="stylesheet" href="./CSS/main1.css" />
    <title>My Profile | Employee Management System</title>
  </head>
  <body>
    <div id="container">
      <nav>
        <div id="logo">Employee Management System</div>
        <ul>
          <li></li>
          <li>
            <a href="./eloginwel.php">Home</a>
          </li>
          <li>
            <a href="./myprojects.php">My Project</a>
          </li>
          <li>
            <a href="./employeeProfile.php">My Profile</a>
          </li>
          <li>
            <a href="applyleave.php">Apply Leave</a>
          </li>
          <li>
            <a href="./emplogin.html">Log out</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="divider"></div>

    <label for="">My Info</label>
    <form method="POST" action="myprofileup.php?id=<?php echo $id?>">
      <p class="center">First Name</p>
      <input
        class="input--style-1"
        type="text"
        name="firstName"
        value="<?php echo $firstname;?>"
        readonly
      />

      <p class="center">Last Name</p>
      <input
        class="input--style-1"
        type="text"
        name="lastName"
        value="<?php echo $lastname;?>"
        readonly
      />

      <p class="center">Email</p>
      <input
        class="input--style-1"
        type="email"
        name="email"
        value="<?php echo $email;?>"
        readonly
      />

      <p class="center">Date of Birth</p>
      <input
        class="input--style-1"
        type="text"
        name="birthday"
        value="<?php echo $birthday;?>"
        readonly
      />

      <p class="center">Gender</p>
      <input
        class="input--style-1"
        type="text"
        name="gender"
        value="<?php echo $gender;?>"
        readonly
      />

      <p class="center">Contact Number</p>
      <input
        class="input--style-1"
        type="number"
        name="contact"
        value="<?php echo $contact;?>"
        readonly
      />

      <p class="center">NID</p>
      <input
        class="input--style-1"
        type="number"
        name="nid"
        value="<?php echo $nid;?>"
        readonly
      />

      <p class="center">Address</p>
      <input
        class="input--style-1"
        type="text"
        name="address"
        value="<?php echo $address;?>"
        readonly
      />

      <p class="center">Department</p>
      <input
        class="input--style-1"
        type="text"
        name="dept"
        value="<?php echo $dept;?>"
        readonly
      />

      <p class="center">Degree</p>
      <input
        class="input--style-1"
        type="text"
        name="degree"
        value="<?php echo $degree;?>"
        readonly
      />

      <p class="center">Total Salary</p>
      <input
        class="input--style-1"
        type="text"
        name="degree"
        value="<?php echo $empS;?>"
        readonly
      />

      <input
        type="hidden"
        name="id"
        id="textField"
        value="<?php echo $id;?>"
        required="required"
      /><br /><br />

      <button class="submit" name="send">Update Info</button>
    </form>
  </body>
</html>
