<?php
$_servername="localhost";
$username="root";
$password="";
$dbname="covid_sys";



//create connection
$conn=new mysqli($_servername,$username,$password,$dbname);

//check connection
if($conn->connect_error)
{
    die("connection failed:".$conn->connection_error);
}
else{
echo"<script>alert('connected')</script>";
}
?>