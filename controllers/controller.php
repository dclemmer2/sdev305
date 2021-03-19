<?php

//  controllers/controller.php

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /** Display home page */
    function home()
    {
        //Display a view
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /** Display login page */
    function login()
    {
        global $validator;

        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get the data from the POST array
            $username = strtolower(trim($_POST['username']));
            $password = strtolower(trim($_POST['password']));

            //get login credentials
            require($_SERVER['HOME'] . '/logincredsportfolio.php');

            //check if username and password are valid
            if ($validator->validUsername($username, $adminUser)
                && $validator->validPassword($password, $adminPassword)) {
                //If they are correct
                $_SESSION['loggedin'] = true;
                $this->_f3->reroute('/admin');
            } else //Login is not valid -> Set an error in F3 hive
            {
                $this->_f3->set('errors["login"]', "*Incorrect login");
            }
        }

        //Make form sticky
        $this->_f3->set('username', isset($username) ? $username : "");

        //Display a view
        $view = new Template();
        echo $view->render('views/login.html');
    }

    /** Display admin page */
    function admin()
    {
        //if not logged in, take user to login page
        if (!isset($_SESSION['loggedin'])) {
            //Redirect to login
            $this->_f3->reroute('/login');
        }

        global $database;
        $this->_f3->set('results', $database->getPeople());

        //Display a view
        $view = new Template();
        echo $view->render('views/admin.html');
    }


    /** Display form page */
    function guestbook()
    {
        global $validator;
        global $dataLayer;
        global $person;

        //create session array of person
        $_SESSION['person'] = $person;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Get the data from the POST array
            $fName = trim($_POST['fname']);
            $lName = trim($_POST['lname']);
            $jobTitle = trim($_POST['jobTitle']);
            $company = trim($_POST['company']);
            $linkedIn = trim($_POST['linkedIn']);
            $email = trim($_POST['email']);
            $howMet = trim($_POST['met']);
            $otherComment = trim($_POST['commentOther']);
            $message = trim($_POST['message']);
            $mailingList = trim($_POST['mailingList']);
            $emailFormat = trim($_POST['format']);


            //If first name is valid --> Store in session
            if ($validator->validName($fName)) {
                $_SESSION['person']->setFname($fName);
            } //First name is not valid -> Set an error in F3 hive
            else {
                $this->_f3->set("errors[fName]", "*First name is required and can only contain characters");
            }

            //If last name is valid --> Store in session
            if ($validator->validName($lName)) {
                $_SESSION['person']->setLname($lName);

            } else //Last name is not valid -> Set an error in F3 hive
            {
                $this->_f3->set("errors[lName]", "*Last name is required and can only contain characters");
            }

            //If job title is input, store in session
            if ($jobTitle !== "") {
                $_SESSION['person']->setJobTitle($jobTitle);

            } else {
                $_SESSION['person']->setJobTitle("Not Listed");
            }

            //If company is input, store in session
            if ($company !== "") {
                $_SESSION['person']->setCompany($company);

            } else {
                $_SESSION['person']->setCompany("Not Listed");
            }

            if ($linkedIn !== "") {
                //If linkedin url is valid --> Store in session
                if ($validator->validLinkedIn($linkedIn)) {
                    $_SESSION['person']->setLinkedin($linkedIn);
                } else //Linkedin url is not valid -> Set an error in F3 hive
                {
                    $this->_f3->set("errors[linkedIn]", '*LinkedIn address must start with "https" and contain "linkedin.com"');
                }
            } else {
                $_SESSION['person']->setLinkedin("Not Listed");
            }

            if ($email !== "") {
                //If email is valid --> Store in session
                if ($validator->validEmail($email)) {
                    $_SESSION['person']->setEmail($email);
                } else //Email is not valid -> Set an error in F3 hive
                {
                    $this->_f3->set("errors[email]", "*Invalid email address");
                }
            } else {
                $_SESSION['person']->setEmail("Not Listed");
            }

            //If how met is valid --> Store in session
            if ($validator->validHowMet($howMet)) {
                $_SESSION['person']->setHowMet($howMet);
            } else if ($howMet == "other") {
                if($validator->validHowMetOther($otherComment)) {
                    $_SESSION['person']->setHowMet("");
                    $_SESSION['person']->setOther($otherComment);
                } else {
                    $this->_f3->set("errors[other]", "*Must input how we met");
                }
            } else //how met is not valid -> Set an error in F3 hive
            {
                $this->_f3->set("errors[howMet]", "*Must select how we met");
            }

            //If message is input, store in session
            if ($message !== "") {
                $_SESSION['person']->setMessage($message);
            } else {
                $_SESSION['person']->setMessage("Not Listed");
            }

            //check if email is input if mailing list is checked
            if (isset($mailingList)) {
                if ($validator->validEmail($email)) {
                    $_SESSION['person']->setMailingList("Yes");
                    //If email format is input, store in session
                    if ($validator->validFormat($emailFormat)) {
                        $_SESSION['person']->setEmailFormat($emailFormat);
                    } else {
                        $_SESSION['person']->setEmailFormat("Not Listed");
                    }
                } else {
                    $this->_f3->set("errors[mailingList]", "*Must provide an email address to be added to my mailing list");
                }

            } else {
                $_SESSION['person']->setMailingList("No");
            }

            if (empty($this->_f3->get('errors'))) {
                //Redirect to submission page
                $this->_f3->reroute('/submission');
            }
        }

        //get arrays
        $this->_f3->set('formats', $dataLayer->getMailingFormats());
        $this->_f3->set('howMetOptions', $dataLayer->getHowMet());

        //make form sticky
        $this->_f3->set('fName', isset($fName) ? $fName : "");
        $this->_f3->set('lName', isset($lName) ? $lName : "");
        $this->_f3->set('jobTitle', isset($jobTitle) ? $jobTitle : "");
        $this->_f3->set('company', isset($company) ? $company : "");
        $this->_f3->set('linkedIn', isset($linkedIn) ? $linkedIn : "");
        $this->_f3->set('email', isset($email) ? $email : "");
        $this->_f3->set('howMet', isset($howMet) ? $howMet : "");
        $this->_f3->set('commentOther', isset($otherComment) ? $otherComment : "");
        $this->_f3->set('message', isset($message) ? $message : "");
        $this->_f3->set('mailingList', isset($mailingList) ? $mailingList : "");
        $this->_f3->set('mailFormat', isset($emailFormat) ? $emailFormat : "");
        $this->_f3->set('other', "other");
        //Display a view
        $view = new Template();
        echo $view->render('views/guestbook.html');
    }

    /** Submission page */
    function submission()
    {
        global $database;
        $database->insertPerson($_SESSION['person']);

        //Display a view
        $view = new Template();
        echo $view->render('views/guestbook_submission.html');

        //Clear the SESSION array
        session_destroy();
    }

    /** Logout */
    function logout()
    {
        //Redirect to login
        $this->_f3->reroute('/login');

        //Clear the SESSION array
        session_destroy();
    }

}

