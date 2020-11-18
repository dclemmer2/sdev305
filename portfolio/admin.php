<?php
/*
 * Dana Clemmer
 * admin.php
 * Display table with guestbook summary
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include files
require($_SERVER['HOME'] . '/db.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/admin_styles.css">
    <link rel="stylesheet" href="styles/resume_styles.css">

    <title>Admin Page</title>
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
    <h1 class="display-4 font-weight-bold text-center">Admin Page</h1>
    <br>
</div>

<div class="container" id="main">

    <div class="table">
        <h1 class="font-weight-bold">Contact Summary</h1>
        <br>
        <table id="guestbook-table" class="display" data-order='[[0, "DESC"]]'>
            <thead>
            <tr>
                <td>ContactID</td>
                <td>Name</td>
                <td>Job Title</td>
                <td>Company</td>
                <td>LinkedIn</td>
                <td>Email</td>
                <td>How We Met</td>
                <td>Other</td>
                <td>Message</td>
                <td>Email Format</td>
                <td>Timestamp</td>
            </tr>
            </thead>
            <tbody>


            <?php
            $sql = "SELECT * FROM guestbook";
            $result = mysqli_query($cnxn, $sql);

            foreach ($result as $row) {
                $contact_id = $row['contact_id'];
                $fullname = $row['fname'] . " " . $row['lname'];
                $job_title = $row['job_title'];
                $company = $row['company'];
                $linkedin = $row['linkedin'];
                $email = $row['email'];
                $how_met = $row['how_met'];
                $other = $row['other'];
                $message = $row['message'];
                $email_format = $row['email_format'];
                $contact_date = date("M d, Y g:i a", strtotime($row['contact_date']."-3 hours"));

                echo "<tr>";
                echo "<td>$contact_id</td>";
                echo "<td>$fullname</td>";
                echo "<td>$job_title</td>";
                echo "<td>$company</td>";
                echo "<td>$linkedin</td>";
                echo "<td>$email</td>";
                echo "<td>$how_met</td>";
                echo "<td>$other</td>";
                echo "<td>$message</td>";
                echo "<td>$email_format</td>";
                echo "<td>$contact_date</td>";
                echo "</tr>";
            }

            ?>
            </tbody>
        </table>
    </div>
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
<script src="scripts/guestbook.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $('#guestbook-table').DataTable({
        'scrollX': true
    });
</script>

</body>
</html>
