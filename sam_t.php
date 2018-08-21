<?php $db = mysqli_connect('localhost', 'root', '', 'ucproject');
$company_name = "mistral";
		$pass = 789456123;
			$password = md5($pass);
			echo "<script type='text/javascript'>alert('You aree loggned in as user');</script>";
			$query = "SELECT * FROM register_table WHERE company_name='$company_name' AND password='$password'";
			$results = mysqli_query($db, $query);
			$row=mysqli_num_rows($results);
			if ($row > 0 ) {
				echo "<script type='text/javascript'>alert('You aree loggned ');</script>";
				echo "<h1>";
				echo $row;
				echo "</h1>";
				if($row===1)
				{
					echo "<script type='text/javascript'>alert('You aree loggned in as user');</script>";
					include 'login.php';
				}
			}
					
					?>