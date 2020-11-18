<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Bootstrap CSS is first, most recent style link overrides-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/resume_styles.css">

    <title>Contact Page</title>

    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>
<body>

<div class="container" id="main">

    <h1>Thank you for filling out the contact form!</h1>
    <br><br>
    <h2>Contact Summary</h2>
    <br>
    <?php

    //Get data from POST array
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $fromName = $name;
    $fromEmail = $email;

    //Print order summary
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    if($phone)
        echo "<p>Phone: $phone</p>";
    if($message)
        echo "<p>Message: $message</p>";

    //Send email
    $to = "dclemmer2@mail.greenriver.edu";
    $subject = "Contact Submission";
    $email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message";
    $email_body .= "\n\nFrom: $fromName <$fromEmail>";
    if($phone)
        $email_body .= " $phone";
    $headers = "Name: $fromName <$fromEmail>";

    $success = mail($to, $subject, $email_body, $headers);

    //Check success
    if($success) {
        echo "<p>Your contact information has been sent.</p>";
    } else {
        echo "<p>Sorry... there was a problem.</p>";
    }

    ?>

</div>
</body>
</html>