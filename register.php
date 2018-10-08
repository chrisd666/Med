<?php

session_start();
header('location:login.html');

$conn = mysqli_connect('localhost', 'root', '');
if($conn) {
    echo "Connection Successful";
} else {
    echo "Connection Unsuccessful";
}

mysqli_select_db($conn, 'med_reg');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password1 = $_POST['pwd_1'];
$password2 = $_POST['pwd_2'];

$query1 = "SELECT * FROM users WHERE user_email = '$email'";

$result = mysqli_query($conn, $query1);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo "Email already exists";
} else {
    $query2 = "INSERT INTO users(user_fname, user_lname, user_email, user_pwd) VALUES ('$fname', '$lname', '$email', '$password1')";
    mysqli_query($conn, $query2);
}

?>