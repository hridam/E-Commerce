<?php
header('location: login page.html');
include('dbconn.php');

$a = $_POST['uname'];
$c = $_POST['pass'];

$s = "SELECT * from admin_login where UserName = '$a'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "User Name has already taken";
} 
else{
    $ref = "INSERT INTO admin_login (UserName, Password) VALUES('$a', '$c')";
    mysqli_query($con, $ref);
    echo "Register Succerful";
}
?>