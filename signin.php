<?php

session_start();


$conn = mysqli_connect('localhost', 'root', '');
if($conn) {
    echo "Connection Successful";
} else {
    echo "Connection Unsuccessful";
}

$fname = '';
$email = '';
$password1 = '';
$error = '';

if(isset($_POST['fname'], $_POST['email'], $_POST['pwd_1'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password1 = $_POST['pwd_1'];

}


mysqli_select_db($conn, 'med_reg');

$query1 = "SELECT * FROM users WHERE user_email = '$email' && user_pwd = '$password1'";

$result = mysqli_query($conn, $query1);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['username'] = $fname;
    header('location:index.html');
} else {
    header('location:login.php');
}

?>