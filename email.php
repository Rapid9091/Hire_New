<?php 
include "config.php";
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die("failed to connect database");

$name = strip_tags($_POST['input_name']);
$email = strip_tags($_POST['input_email']);
$mobile = strip_tags($_POST['input_mobile']);
$query = strip_tags($_POST['input_query']);
$page = strip_tags($_POST['input_page']);


if(!empty($name) && !empty($email) && !empty($mobile) && !empty($query)){

    $to = "info@hirecoworker.com";
    $subject = "Form Submission";
    $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Mobile: " . $mobile . "\n" . "Page: " . $page. "\n\n" . "Query: " . $query;
    $headers = "From: " . $email;

    $sql = "INSERT INTO form_query (name, email, mobile, query, page) values ('$name', '$email', '$mobile', '$query', '$page')";
    $insert = mysqli_query($conn, $sql);

    if (mail($to, $subject, $message, $headers)  && $insert == true) {
       echo "THANK YOU";
    }
    else{
        echo "Something Went Wrong";
    }
    
}else{
    echo "HIRE EXPERT";
}


?>