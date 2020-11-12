<?php
/* guestbook_confirmation.php
 * Gets data from portfolio/guestbook.html
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Redirect if form has not been submitted
if (empty($_POST)) {
    header("location: guestbook.html");
}

//Set the time zone
date_default_timezone_set('America/Los_Angeles');

//include files
require('includes/db.php');
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Bootstrap CSS is first, most recent style link overrides-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/guestbook_styles.css">

    <title>Thank You Page</title>

    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>
<body>

<div class="container" id="main">
    <br>
    <h2>Thank you for signing my guestbook!</h2>
    <br>
    <h3>Order Summary</h3>

    <?php

    //Data validation will go here

    //Get data from POST array
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job_title = $_POST['jobTitle'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedIn'];
    $email = $_POST['email'];
    $how_met = $_POST['met'];
    $other = $_POST['other'];
    $message = $_POST['message'];
    if(isset($_POST['mailingList'])) {
        $mailing_list = 'yes';
    }
    else {
        $mailing_list = 'no';
    }
    $email_format = $_POST['format'];


    //Save contact info to database
    $sql = "INSERT INTO guestbook(fname, lname, job_title, company, linkedin, email, how_met, other, message, mailing_list, email_format) VALUES('$fname', '$lname', '$job_title', '$company', '$linkedin', '$email', '$how_met', '$other', '$message', '$mailing_list', '$email_format')";
    $success = mysqli_query($cnxn, $sql);
    if (!$success) {
        echo "<p>Sorry... something went wrong.</p>";
        return;
    }

    //Print order summary
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Job Title: $job_title</p>";
    echo "<p>Company: $company</p>";
    echo "<p>LinkedIn URL: $linkedin</p>";
    echo "<p>Email: $email</p>";
    echo "<p>How We Met: $how_met</p>";
    echo "<p>Other: $other</p>";
    echo "<p>Message: $message</p>";
    echo "<p>Mailing List: $mailing_list</p>";
    echo "<p>Email Format: $email_format</p>";

    ?>


</div>
</body>
</html>


