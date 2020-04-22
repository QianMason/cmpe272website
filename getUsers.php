<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
		$query = "SELECT *
		FROM users";
	$servername = 'localhost';
	$username = "root";
	$password = "root";
	$db = "stonxdb" ;
	$result = array() ;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
		// Check connection
	if ($conn->connect_error) {
		echo "Connection failed'";
	}
	if ($queryset = $conn->query($query)) {
		//echo "Returned rows are: " . $queryset->num_rows;
		while ($row = mysqli_fetch_row($queryset)) {
			$result[] = $row ;
		}
	}
?>

<html>
	<?php
	foreach ($result as $row) {
		foreach($row as $item) {
			$item = $item + "|" ;
			echo $item;
		}
	}
	?>
</html>
