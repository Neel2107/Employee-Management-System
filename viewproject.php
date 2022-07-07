<?php

require_once ('process/dbcon.php');
$sql = "SELECT * from `project` order by subdate desc";


$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/main4.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Projects</title>
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
            <th>Project ID</th>
            <th>Emp. ID</th>
            <th>Project Name</th>
            <th>Due Date</th>
            <th>Submission Date</th>
            <th>Mark</th>
            <th>Status</th>
            <th>Options</th>
            
        </tr>

        <?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 

				}


			?>
    </table>
</body>
</html>