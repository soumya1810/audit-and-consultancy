<?php
session_start();

//retriving the email and password set by the user
$email = $_POST['email'];
$password = $_POST['password'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'audit');


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM members WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($password, $row['password'])) {
//password verify is used to unhash the encryted password in the database
        $_SESSION['login'] = $row['id'];
        $_SESSION['username'] = $row['username'];
    
        echo 'true';
    }
    else {
        echo 'false';
    }

} else {
    echo 'false';
}

?>