<?php


if($_POST)
{
$host="localhost";
$user="root";
$pass="";
$db="insertdb";
$Username=$_POST["username"];
$Password=$_POST["password"];
$conn=mysqli_connect($host,$user,$pass,$db);
$query="SELECT * FROM userpwd  where NAME='$Username' and PASSWORD='$Password' ";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
session_start();
$_SESSION['insertdb']='true';
header('location:proceed.html');

}
else{
session_start();
$_SESSION['insertdb']='true';
header('location:login2.html');
}
}?>