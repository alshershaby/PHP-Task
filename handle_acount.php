<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];


// start validation for login form
function validateInput($input){
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

// profile validation 

$profile_data = true;
// check for username validation 


$username = validateInput($username);
if(!preg_match("/^[a-z]{11}$/", $username) ){
    echo "please enter username useing only 11 small chars"."<br>";
    $profile_data = false;
}

// check for phone validation 

$phone = validateInput($phone);
if(!preg_match("/^01[0125][0-9]{8}$/", $phone) ){
    echo "please enter phone useing only 11 int"."<br>";
    $profile_data = false;
}

// check for facebook validation 
$facebook = validateInput($facebook);
if(!filter_var($facebook,FILTER_VALIDATE_URL) ){
    echo "please enter valid facebook acount"."<br>";
    $profile_data = false;
}

// check for twitter validation 
$twitter = validateInput($twitter);
if(!filter_var($twitter,FILTER_VALIDATE_URL) ){
    echo "please enter valid twitter acount"."<br>";
    $profile_data = false;
}

// check for facebook validation 
$instagram = validateInput($instagram);
if(!filter_var($instagram,FILTER_VALIDATE_URL) ){
    echo "please enter valid instagram acount"."<br>";
    $profile_data = false;
}

if($profile_data == true){
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['username']=$username;
    $_SESSION['phone']=$phone;
    $_SESSION['facebook']=$facebook;
    $_SESSION['twitter']=$twitter;
    $_SESSION['instagram']=$instagram;
    header('location:all_products.php');
}

