<?php
require_once('../mysqli_connect.php');

$query = "SELECT first_name, last_name, email, street, city, state, zip,
phone, birth_date, sex, lunch_cost, date_entered FROM students";


$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align = "left"
	cellspacing = "5" cellpadding = "8">
	
	<tr><td align = "left"><b>First Name</b></td>
	<td align = "left"><b>Last Name</b></td>
	<td align = "left"><b>Email</b></td>
	<td align = "left"><b>Street</b></td>
	<td align = "left"><b>City</b></td>
	<td align = "left"><b>State</b></td>
	<td align = "left"><b>Zip</b></td>
	<td align = "left"><b>Phone</b></td>
	<td align = "left"><b>Birth Day</b></td>
	<td align = "left"><b>Sex</b></td>
	<td align = "left"><b>Lunch Money</b></td>
	<td align = "left"><b>Date Entered</b></td>';
	
	
	
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align = left">' .
		$row['first_name'] . '</td><td align = "left">' .
		$row['last_name'] . '</td><td align = "left">' .
		$row['email'] . '</td><td align = "left">' .
		$row['street'] . '</td><td align = "left">' .
		$row['city'] . '</td><td align = "left">' .
		$row['state'] . '</td><td align = "left">' .
		$row['zip'] . '</td><td align = "left">' .
		$row['phone'] . '</td><td align = "left">' .
		$row['birth_date'] . '</td><td align = "left">' .
		$row['sex'] . '</td><td align = "left">' .
		$row['lunch_cost'] . '</td><td align = "left">' .
		$row['date_entered'] . '</td><td align = "left">';
		
		echo '</tr>';
	}
	
	echo '</table>';
}else {
	echo "Couldn't issue the database query";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);
?>