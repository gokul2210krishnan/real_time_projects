<html>
<body>
<form method="post" action="">
<input type="text" name="password">
<br>
<input type="submit" name="sub" value="submit">
</form>
</body>
</html>
<?php
// Connecting, selecting database
echo "Php called";
if (isset($_POST['sub'])) {
	$password=$_POST['password'];
$link = mysqli_connect('localhost', 'root', '')
    or die('Could not connect: ' . mysql_error());
echo 'Connected successfully';
mysqli_select_db($link,'ucproject') or die('Could not select database');
echo "<br><br>databas selected";
// Performing SQL query
$query = 'SELECT * FROM register_table';
$results = mysqli_query($link,$query) or die('Query failed: ' . mysql_error());
echo "<br><br>query executed";
// Printing results in HTML
//$results = mysqli_query($db, $query);
if ( mysqli_num_rows($results) > 0 ) {
		
		echo "<table>";
		while($row = mysqli_fetch_assoc($results)):
		{
			//echo "id..";
		echo "<tr><td>".$row['company_name']."</td>";
		echo "<td>".$row['password']."</td>";
		$pass=md5($password);
		echo "<td>".$pass."</td></tr>";
		}
		endwhile;
		echo "</able>";
}
// Free resultset
mysqli_free_result($results);

// Closing connection
mysqli_close($link);
}
?>