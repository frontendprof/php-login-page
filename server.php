<?php

//  Starting session
session_start();

//  Initializing variables
$username="";
$email="";

$errors=array();

//  Connecting to db
$db=mysqli_connect('localhost','root','','practice') or die("Could not connect to database");

// Register users
$username=mysqli_real_escape_string($db,$_POST["username"]);
$email=mysqli_real_escape_string($db,$_POST["email"]);
$pass2=mysqli_real_escape_string($db,$_POST["pass2"]);
$pass2=mysqli_real_escape_string($db,$_POST["pass2"]);


// Form validation
if(empty($username)){array_push($errors,"Username is required");}
if(empty($email)){array_push($errors,"Email is required");}
if(empty($password)){array_push($errors,"Password is required");}
if($pass1!==$pass2){array_push($errors,"Passwords do not match");}


// Check db for existing username and email
$user_check_query= "SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";
$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);

if($user){
    if($user["username"]===$username){array_push($errors,"Username already exists");}
    if($user["email"]===$email){array_push($errors,"Email already exists");}
}


// Registering user if no error
if(count($errors)===0){
    //Encryting password first
    $password=md5($pass1);

    $query="INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
}