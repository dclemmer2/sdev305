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
require($_SERVER['HOME'] . '/db.php');
require('includes/guestbookFunctions.php');

$page_title = 'Confirmation';

//Add Header
include("includes/header.html");
//Navbar
include("includes/navbar.php");
?>

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
        echo "<p class='text-danger'>*Invalid first name</p>";
        $isValid = false;
    }

    //Check last name
    $lname = "";
    if (validName($_POST['lname'])) {
        $lname = $_POST['lname'];
    } else {
        echo "<p class='text-danger'>*Invalid last name</p>";
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
            echo "<p class='text-danger'>*Invalid LinkedIn address</p>";
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
            echo "<p class='text-danger'>*Invalid email</p>";
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
        echo "<p class='text-danger'>*Must select how we met</p>";
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
            echo "<p class='text-danger'>*Must provide an email address to be added to my mailing list</p>";
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
        echo "<br><br><h5 class='text-danger font-weight-bold'>**Form is Invalid, Please Correct the Errors Shown Above</h5>";
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

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.html');?>
