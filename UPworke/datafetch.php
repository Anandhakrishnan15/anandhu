<?php

//conneting to the database

$user= $_SESSION['username']; //this is the session made from log-in quary
// this session will help us to find he row od the user with the help of the quary givem below

//quarry to find the user row withthe help of the username which will be uniqe
$sql = mysqli_query($db,"SELECT * FROM
 users WHERE username='$user'");

$row = mysqli_fetch_array($sql);//to fetch the data from the user from the quary

$user_id = $row["ID"]; 
$user_email = $row["email"];
$user_apply = $row["applyedfor"];
$user_mobile = $row["mobile"];

$_SESSION['userid'] = $user_id;

?>

