<?php 
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}


mysqli_select_db($con, 'firstwebsite');

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];

$query="insert into userinfodata(user,email,pass,mobile,city) 
values('$user','$email','$pass','$mobile','$city')";

echo "$query";
mysqli_query($con, $query);
#header('location:userinfo.php');

?>