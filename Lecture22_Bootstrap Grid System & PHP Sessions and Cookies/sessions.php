<?php

//Start a new session
session_start();

// Store this string intro session with name "password"
$_SESSION['email'] = "abc@gmail.com";
$_SESSION['password'] = "12345";

echo "Session variables are set";










?>