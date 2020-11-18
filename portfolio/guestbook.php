<?php
/*
 * Dana Clemmer
 * guestbook.php
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/resume_styles.css">
    <link rel="stylesheet" href="styles/guestbook_styles.css">

    <title>Guestbook</title>
    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>
<body data-spy="scroll" data-target="#navbar-site" data-offset="80">

<!--##################    NAVBAR    ##################-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar-site">
    <a class="navbar-name" href="#">Dana Clemmer</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item ml-auto">
            <a class="nav-link" href="resume.php">Resume</a>
        </li>
    </ul>
</nav>

<!--Jumbotron header -->
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold text-center">Sign My Guestbook!</h1>
    <br>
    <h3 class="lead font-weight-bold text-center">Stay in touch</h3>
</div>


<div class="container" id="main">
    <form id="form" action="guestbook_confirmation.php" method="post">
        <fieldset class="form-group">

            <!--Contact info -->
            <h2 class="text-center font-weight-bold pt-3 pb-3">Contact Info</h2>
            <div class="form-row">
                <div class="form-group col-lg-5">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                    <span class="text-danger d-none error" id="err-fname">*Please enter a first name</span>
                </div>
                <div class="form-group col-lg-7">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                    <span class="text-danger d-none error" id="err-lname">*Please enter a last name</span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="jobTitle">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                </div>
                <div class="form-group col-lg-6">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="linkedIn">LinkedIn URL</label>
                    <input type="text" class="form-control" id="linkedIn" name="linkedIn">
                    <span class="text-danger d-none error" id="err-linkedIn">*LinkedIn address must start with "http" and end with ".com"</span>
                </div>
                <div class="form-group col-lg-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                           pattern='(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}
                               \.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))'
                           placeholder="you@example.com">
                    <span class="text-danger d-none error" id="invalid-email">*Invalid email format</span>
                    <br>
                    <span class="text-danger d-none error" id="err-mailingList">*Please fill out email to be a part of my mailing list</span>
                </div>
            </div>

            <!--How we met -->
            <h2 class="text-center font-weight-bold pt-5 pb-3">How We Met</h2>
            <div class="form-group">
                <label for="met">How did we meet?</label>
                <select class="custom-select" id="met" name="met">
                    <option value="none">Choose...</option>
                    <option value="meetup">Meetup</option>
                    <option value="jobFair">Job Fair</option>
                    <option value="class">Class</option>
                    <option value="other">Other</option>
                    <option value="haveNotMet">We haven't met yet</option>
                </select>
                <span class="text-danger d-none error" id="err-met">*Please select an option</span>
            </div>
            <div class="form-group d-none" id="otherComment">
                <label for="other">Other (please specify)</label>
                <textarea class="form-control" placeholder="Other..." id="other" name="other"
                          rows="1"></textarea>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" placeholder="Message" id="message" name="message"
                          rows="3"></textarea>
            </div>

            <!--Mailing list -->
            <div class="form-group mail-list">
                <h2 class="text-center font-weight-bold pt-5 pb-3">Mailing List</h2>
                <div class="checkbox">
                    <label for="mailingList"><input type="checkbox" id="mailingList" name="mailingList"> Please add me
                        to your mailing
                        list!</label>
                </div>
                <div class="form-group d-none" id="emailFormat">
                    <p>Please choose an email format:</p>
                    <input type="radio" id="html" name="format" value="html">
                    <label for="html">HTML</label>
                    <input type="radio" id="text" name="format" value="text">
                    <label for="text">Text</label><br>
                </div>
            </div>

            <br>
        </fieldset>
        <!-- Submit button -->
        <input class="submit text-white d-flex justify-content-center" type="submit" value="Submit"
               id="guestbook-submit">
    </form>
</div>

<!--##################    FOOTER    ##################-->
<footer class="footer">
    <br>
    <a href="admin.php" class="rounded font-weight-bold" id="admin-link">Admin</a>

    <!--  Bottom Row  -->
    <div class="text-center copyright-text" id="guestbook">
        <p>© Copyright 2020: Dana Clemmer</p>
    </div>
</footer>

<!-- JavaScript -->
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
<script src="scripts/guestbook.js"></script>
</body>
</html>