<?php

require_once ('process/dbcon.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/main2.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
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
    <table>
        <tr>
            <th>Emp. ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>conten></th>
            <th>NID</th>
            <th>Address</th>
            <th>Department</th>
            <th>Degree</th>
            <th>Point</th>
            <th>Options</th>
            
        </tr>
        <?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['nid']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					echo "<td>".$employee['points']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>
    </table>
</body>
</html>