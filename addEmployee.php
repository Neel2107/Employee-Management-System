<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./CSS/main1.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Employee</title>
  </head>

  <body>
    <div id="container">
      <nav>
        <div id="logo">Employee Management System</div>
        <ul>
          <li>
            <a href="./aloginwel.php">Home</a>
          </li>
          <li>
            <a href="./addEmployee.php">Add Employee</a>
          </li>
          <li>
            <a href="./viewemplyee.php">View Employee</a>
          </li>
          <li>
            <a href="./assignproject.php">Assign Project</a>
          </li>
          <li>
            <a href="./viewproject.php">Project Status</a>
          </li>
          <li>
            <a href="./salarytab.php">Salary Table</a>
          </li>
          <li>
            <a href="./employeeleave.php">Employee Leave</a>
          </li>
          <li>
            <a href="./adminlogin.html">Log out</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="main">
      <form action="./process/addempprocess.php" method="POST">
        <label for="">Registration Info</label>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="email" name="eemail" placeholder="Email" />
        <!-- <label for="edate">Birthday</label> -->
        <input
          type="date"
          name="edate"
          class="birthday"
          placeholder="Birthday"
        />
        <select class="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
        <input type="text" name="contactNo" placeholder="Contact Number" />
        <input type="text" name="nid" placeholder="NID" />
        <input type="text" name="address" placeholder="Address" />
        <input type="text" name="department" placeholder="Department" />
        <input type="text" name="degree" placeholder="Degree" />
        <input type="text" name="salary" placeholder="Salary" />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
