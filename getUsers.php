<!DOCTYPE HTML>
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
        echo ($row[0]);
        echo ("|");
        echo ($row[1]);
        echo ("|");
        echo ($row[2]);
        echo ("|");
        echo ($row[3]);
        echo ("|");
        echo ($row[4]);
        echo ("|");
        echo ($row[5]);
        echo ("|");
	}
	?>
</html>
