<?php
session_start();
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'audit');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}





$username = mysqli_real_escape_string($mysqli, $_POST['username']);

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($username) < 2) {
    echo 'username';
    // exit('username');
}  elseif (strlen($email) <= 4) {
    echo 'eshort';
    // exit('eshort');
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
    // exit('eformat');
} elseif (strlen($password) <= 4) {
    echo 'pshort';
    // exit('pshort');
	
//VALIDATION
	
} else {

	
                
	
	//PASSWORD ENCRYPT
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO members (username, email, password) VALUES ('$username', '$email', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['username'] = $username;
				

				echo 'true';
				// exit('true');

			}

		} else {

			echo 'false';
			// exit('false');

		}
		
}

?>