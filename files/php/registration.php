<?php

session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'userregistration');

$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$mail = $_POST['id'];
$pwd = $_POST['password'];

$s = " select * from usertable where name = '$mail'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Gmail is Already Registered";

}else{
    $reg = "insert into usertable(First Name , Last Name , ID , password) values ('$f_name' , '$l_name' , '$mail' , '$pwd')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}



?>
