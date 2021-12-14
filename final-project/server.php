<?php

session_start();

include('config.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])) {

$firstname = mysqli_real_escape_string($iConn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($iConn, $_POST['lastname']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

if(empty($firstname)) {
    array_push($errors, 'First name is required!');
}

if(empty($lastname)) {
    array_push($errors, 'Last name is required!');
}

if(empty($email)) {
    array_push($errors, 'Email is required!');
}

if(empty($username)) {
    array_push($errors, 'Username is required!');
}

if(empty($password_1)) {
    array_push($errors, 'Password is required!');
}

if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match!');
}


$user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

if($rows) {

if($rows['username'] == $username) {
    array_push($errors, 'Username already exists!');
}
if($rows['email'] == $email) {
    array_push($errors, 'Email already exists!');
}

} // closed rows

if(count($errors) < 1) {
$password = md5($password_1);
$query = "INSERT INTO user (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

mysqli_query($iConn, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');

} // end if count

} // end big if isset


if(isset($_POST['login_user'])) {

$username = mysqli_real_escape_string($iConn, $_POST['username']);

$password = mysqli_real_escape_string($iConn, $_POST['password']);

if(empty($username)) {
    array_push($errors, 'Username is required!');
}

if(empty($password)) {
    array_push($errors, 'Password is required!');
}

if(count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$results = mysqli_query($iConn, $query);

if(mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:index.php');
} else {
    array_push($errors, 'Wrong username/password combination!');
}

} // end if count

} // end if isset