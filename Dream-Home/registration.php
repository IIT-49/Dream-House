<?php
session_start();
header('location:index.php');
$conn=mysqli_connect('localhost','root','','userregistration');
mysqli_select_db($conn,'userregistration');
$username=$_POST['username'];
$email=$_POST['resmail'];
$password=$_POST['pass'];
$s ="select * from usertable where username ='$username'";
$result = mysqli_query($conn, $s);
//$num=mysqli_num_rows($result);
//$reg="insert into usertable(username,email,password) values ('$username','$email','$password')";
// mysqli_query($conn,$reg);
// echo "Registration Successfull";

if(mysqli_num_rows($result)== 1){
    echo "Username Already Taken";

}
else{
    $reg="INSERT INTO usertable values ('$username','$email','$password')";
    mysqli_query($conn , $reg);
    echo "Registration Successfull";

}
?>