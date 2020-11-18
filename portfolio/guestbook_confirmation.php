<?php
/* guestbook_confirmation.php
 * Gets data from portfolio/guestbook.php
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Redirect if form has not been submitted
if (empty($_POST)) {
    header("location: guestbook.php");
}

//Set the time zone
date_default_timezone_set('America/Los_Angeles');

//include files
require($_SERVER['HOME'] . '/db.php');
require('includes/guestbookFunctions.php');
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Bootstrap CSS is first, most recent style link overrides-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/resume_styles.css">
    <link rel="stylesheet" href="styles/admin_styles.css">
    <link rel="stylesheet" href="styles/guestbook_confirmation_styles.css">

    <title>Thank You Page</title>

    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>
<body>

<!--##################    NAVBAR    ##################-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar-site">
    <a class="navbar-name" href="#">Dana Clemmer</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto">
            <a class="nav-link" href="guestbook.php">Guestbook</a>
        </li>
    </ul>
</nav>

<!--Jumbotron header -->
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold text-center">Order Summary</h1>
    <br>
    <h3 class="lead font-weight-bold text-center">Thank You for Signing my Guestbook!</h3>
</div>

<div class="container" id="main">

    <?php

    //Data validation

    //Get data from POST array
    $isValid = true;

    //Check first name
    $fname = "";
    if (validName($_POST['fname'])) {
        $fname = $_POST['fname'];
    } else {
        echo "<p>Invalid first name</p>";
        $isValid = false;
    }

    //Check last name
    $lname = "";
    if (validName($_POST['lname'])) {
        $lname = $_POST['lname'];
    } else {
        echo "<p>Invalid last name</p>";
        $isValid = false;
    }

    $job_title = "";
    if ($_POST['jobTitle'] != "") {
        $job_title = $_POST['jobTitle'];
    } else {
        $job_title = 'Not Listed';
    }

    $company = "";
    if ($_POST['company'] != "") {
        $company = $_POST['company'];
    } else {
        $company = 'Not Listed';
    }

    //Check linkedIn
    $linkedin = "";
    if ($_POST['linkedIn'] != "") {
        if (validLinkedIn($_POST['linkedIn'])) {
            $linkedin = $_POST['linkedIn'];
        } else {
            echo "<p>Invalid LinkedIn address</p>";
            $isValid = false;
        }
    } else {
        $linkedin = 'Not Listed';
    }

    //Check email
    $email = "";
    if ($_POST['email'] != "") {
        if (validEmail($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            echo "<p>Invalid email</p>";
            $isValid = false;
        }
    } else {
        $email = 'Not Listed';
    }

    //Check "how we met"
    $how_met = "";
    if (validHowMet($_POST['met'])) {
        $how_met = $_POST['met'];
    } else {
        echo "<p>Must select how we met</p>";
        $isValid = false;
    }

    $other = "";
    if ($_POST['other'] != "") {
        $other = $_POST['other'];
    } else {
        $other = 'Not Listed';
    }

    $message = "";
    if ($_POST['message'] != "") {
        $message = $_POST['message'];
    } else {
        $message = 'Not Listed';
    }

    //check for email if mailing list is checked
    $mailing_list = "";
    if (isset($_POST['mailingList'])) {
        $mailing_list = 'Yes';

        if (validMailingList($_POST['email'])) {
            $email = $_POST['email'];
        } else {
            echo "<p>Must provide an email address to be added to my mailing list</p>";
            $isValid = false;
        }

    } else {
        $mailing_list = 'No';
    }

    $email_format = "";
    if (isset($_POST['format'])) {
        $email_format = $_POST['format'];
    } else {
        $email_format = 'Not Listed';
    }

    if (!$isValid) {
        return;
    }


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

<!--##################    FOOTER    ##################-->
<footer class="footer">
    <!--  Bottom Row  -->
    <div class="text-center copyright-text" id="guestbook">
        <p>© Copyright 2020: Dana Clemmer</p>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</body>
</html>
