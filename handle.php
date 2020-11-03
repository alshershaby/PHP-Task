<?php
// save into session 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


// start validation for login form
function validateInput($input){
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}



$data_accepted = true;

// check for email validation 
$email = validateInput($email);
if(!filter_var($email,FILTER_VALIDATE_EMAIL) ){
    echo "please enter valid email"."<br>";
    $data_accepted = false;
}


// check for password validation 
$password = validateInput($password);
if(!preg_match("/[a-z]{8}/", $password) ){
    echo "please enter password useing only 8 small chars"."<br>";
    $data_accepted = false;
}

if($data_accepted == true){
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location:all_products.php');
}

