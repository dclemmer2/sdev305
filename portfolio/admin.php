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


session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: login.php");
}

$page_title = 'Admin';

//Add Header
include("includes/head.php");
?>

    <!--##################    NAVBAR    ##################-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar-site">
        <a class="navbar-name" href="#">Dana Clemmer</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-auto">
                <a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
        </ul>
    </nav>

    <!--Jumbotron header -->
    <div class="jumbotron">
        <h1 class="display-4 font-weight-bold text-center">Admin Page</h1>
        <br>
    </div>

    <div class="admin-container">

        <div class="table">
            <h1 class="font-weight-bold text-center">Contact Summary</h1>
            <br><br>
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
                    $contact_date = date("M d, Y g:i a", strtotime($row['contact_date'] . "-3 hours"));

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

    <!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php'); ?>
