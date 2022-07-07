<?php

require_once ('process/dbcon.php');

$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token From employee, employee_leave Where employee.id = employee_leave.id order by employee_leave.token";

$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/empleave.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Projects</title>
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
    <table class='main-table'>
        <tr class="main-tab-th">
            <th class="table-head">Emp. ID</th>
            <th class="table-head">Token</th>
            <th class="table-head">Name</th>
            <th class="table-head">Start Date</th>
            <th class="table-head">End Date</th>
            <th class="table-head">Total Days</th>
            <th class="table-head">Reason</th>
            <th class="table-head">Status</th>
            <th class="table-head">Options</th>
            
        </tr>

        <?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);

					echo "<tr class='main-tab-th'>";
					echo "<td class='table-head'>".$employee['id']."</td>";
					echo "<td class='table-head'>".$employee['token']."</td>";
					echo "<td class='table-head'>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td class='table-head'>".$employee['start']."</td>";
					echo "<td class='table-head'>".$employee['end']."</td>";
					echo "<td class='table-head'>".$interval->days."</td>";
					echo "<td class='table-head'>".$employee['reason']."</td>";
					echo "<td class='table-head'>".$employee['status']."</td>";
					echo "<td class='table-head'><a href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('Are you sure you want to Canel the request?')\">Cancel</a></td>";

				}


			?>

    </table>

</body>

</html>