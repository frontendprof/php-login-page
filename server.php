<?php

//  Starting session
session_start();

//  Initializing variables
$username="";
$email="";

//  Connecting to db
$db=mysqli_connect('localhost','root','','practice') or die("Could not connect to database");