<?php
include_once "init.php";
include_once head;
?>

<?php
// NEW Validations

$userName = strip_tags($_POST['userName']);
$userMail = strip_tags($_POST['userMail']);
$userMobile = strip_tags($_POST['userMobile']);
$userMessage = strip_tags($_POST['userMessage']);
$submitBtn = $_POST['sendUserData'];
if (isset($_POST['homeFormData'])) {
    $homeHiddenField = $_POST['homeFormData'];
} else {
    $homeHiddenField = 'Contact Form';
}



function validateNumber($phone)
{
    if (preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    } else {
        return false;
    }
}



if (isset($submitBtn) && !empty($userMail) && !empty($userMobile) && !empty($userMessage)) {

    if (isset($userMail) && filter_var($userMail, FILTER_VALIDATE_EMAIL)) {

        if (validateNumber($userMobile)) {
            $name = $userName;
            $email = $userMail;
            $message = $userMessage;
            $contact = $userMobile;
            $to = "info@hirecoworker.com";
            $subject = "Form Submission";
            $message = "Name: " . $name . "\n" . " Contact: " . $contact . "\n" . " Email: " . $email . "\n" . "  Wrote the following: " . "\n\n" . $message;
            $headers = "From: " . $email;
            mail($to, $subject, $message, $headers);

            if (mail($to, $subject, $message, $headers)) {
                $successMessage = "Query Submitted. We'll get you back soon..";

                if ($homeHiddenField == 'homeFormData') {

                    header('location:' . home_path()  . '?successMessage=' . $successMessage);
                } else {
                    header('location:' . home_path()  . 'contact?successMessage=' . $successMessage);
                }
            }
        } else {
            $contactError = "Invalid contact number. ";
            if ($homeHiddenField == 'homeFormData') {
                header('location:' . home_path() . '?contactError=' . $contactError);
            } else {
                header('location:' . home_path() . 'contact?contactError=' . $contactError);
            }
        }
    } else {
        $emailError = "Invalid email address. ";
        if ($homeHiddenField == 'homeFormData') {
            header('location:' . home_path() . '?emailError=' . $emailError);
        } else {
            header('location:' . home_path() . 'contact?emailError=' . $emailError);
        }
    }
} else {
    $emptyError = "Please enter details before accessing the page. ";
    if ($homeHiddenField == 'homeFormData') {
        header('location:' . home_path() . '?emptyError=' . $emptyError);
    } else {
        header('location:' . home_path() . 'contact?emptyError=' . $emptyError);
    }
}
