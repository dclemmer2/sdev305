<?php


//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variables
$username = "";
$password = "";
$err = false;

//var_dump($_POST);

//If the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "Form has been submitted";

    //Get the username and password
    $username = (trim($_POST['username']));
    $password = trim($_POST['password']);

    //If they are correct
    //Actual username and pass need to be stored in a seperate file
    //Should be moved to home directory ABOVE public.html
    require($_SERVER['HOME'] . '/logincredsportfolio.php');

    if ($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        header("location: admin.php");
    } else {
        //Set an error flag
        $err = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/guestbook_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        .err {
            color: darkred;
        }
    </style>
    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>

<?php
//Navbar
include("includes/navbar.php");
?>

<!--Jumbotron header -->
<div class="jumbotron">
    <h1 class="display-4 font-weight-bold text-center">Login</h1>
</div>
<br>

<div class="container">

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                <?php echo "value='$username' " ?>
            >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <?php
        if ($err) {
            echo '<span class="err">Incorrect login</span><br>';
        }
        ?>

        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php');?>