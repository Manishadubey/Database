<?php
    // PHP Data Objects(PDO) Sample Code:
    try {
    $pdo = new PDO("sqlsrv:server = tcp:sbakke-ist331.database.windows.net,1433; Database = IST331", "sqladmin", "#csuohio1");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo "failed to connect" . print_r($e);
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }
    
	$stmt = $pdo->query('SELECT EmployeeName, EmployeeAddress, EmployeeCity, EmployeeState, EmployeeZipCode, EmployeeDateHired FROM Employee_T');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Employee List</title>
	</head>
	<body>
	<h1>Employee List</h1>
	<table border=1>
	<tr><th>Name</th><th>Address</th><th>City</th><th>State</th><th>Zip&nbsp;Code</th><th>Date&nbsp;Hired</th></tr>

<?php 
	while ($row = $stmt->fetch())
	{ 
?>
	<tr>
	<td><?php echo $row['EmployeeName']?></td>
	<td><?php echo $row['EmployeeAddres']?></td>
	<td><?php echo $row['EmployeeCity']?></td>
	<td><?php echo $row['EmployeeState']?></td>
	<td><?php echo $row['EmployeeZipCode']?></td>
	<td><?php echo $row['EmployeeDateHired']?></td>
	</tr>
<?php 
	} 
?>
</table>
</body>
</html>	


