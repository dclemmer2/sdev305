<!--Landing Page-->

<?php
/*
 * Dana Clemmer
 * index.php
 */

$page_title = 'Home';

/*//Login info
include('includes/loginPath.php');*/

//Add Header
include("includes/head.php");
?>

<!--##################    NAVBAR    ##################-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar-site">
    <a class="navbar-name" href="#">Dana Clemmer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#connect">Connect</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#about-index">About</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#projects">Projects</a>
            </li>
        </ul>
    </div>
</nav>

<!--##################    HEADER    ##################-->
<header id="index-header">
    <div class="header rounded" id="connect">
        <div class="idCard rounded" id="index">
            <img class="rounded-circle" src="images/profilepic.jpg"
                 alt="Profile picture">
            <h5 class="name font-weight-bold pb-3">Dana Clemmer</h5>
            <div class="header-body">
                <ul class="header-contact">
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a
                                href="mailto:Dclemmer2@mail.greenriver.edu?subject=EmailSubjectline">Dclemmer2@mail.greenriver.edu</a>
                    </li>
                    <!--  <li>
                          <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:206-480-8610">206-480-8610</a>
                      </li>-->
                    <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i><a
                                href="https://www.linkedin.com/in/dana-clemmer/" target="_blank">www.linkedin.com/in/dana-clemmer</a>
                    </li>
                    <li>
                        <i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/dclemmer2"
                                                                          target="_blank">github.com/dclemmer2</a>
                    </li>

                    <li>
                        <i class="fa fa-address-book" aria-hidden="true"></i><a href="guestbook.php" target="_blank">Stay
                            Connected & Sign my Guestbook!</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<br>


<!--##################    BODY    ##################-->
<div class="resume-container">
    <h1 class="text-center" id="about-index">About Me</h1><br>
    <div class="about">
        <p class="text-center pb-3" id="about-body">My name is Dana and I am currently a Junior studying Software Development at Green River
            College. My strengths
            include back-end development with Java and front-end web development with HTML/CSS, JavaScript, and
            PHP. I have worked on various projects, including creating a website with a team for a local nonprofit using
            HTML/CSS, JavaScript, PHP, and MySQL. In another program that I created, I used Java to manage the inventory
            of
            a toy store by utilizing a LinkedList, ArrayList, and varying methods, such as one to find the most
            frequently
            purchased toy. My experience with multiple coding languages and with group projects will help me collaborate
            with others in the work force. I am seeking an internship that I’ll be able to put my skills to use. </p>

        <a class="btn resume-btn font-weight-bold d-block" href="resume.php" target="_blank" role="button">Check Out My
            Resume!</a>
    </div>
    <br>
    <hr>
    <br>
    <br>
    <h1 class="text-center" id="projects">Projects</h1><br>
    <div class="project">
        <div class="row project-images">
            <div class="col-lg-6">
                <a class="project-link-image" href="https://dar2.greenriverdev.com/" target="_blank"><img
                            src="images/kentOutreach.png"
                            class="proj-img-index center"
                            alt="proj-img"></a>
            </div>
            <div class="col-lg-6">
                <a class="project-link-image" href="https://dar2.greenriverdev.com/" target="_blank"><img
                            src="images/kentOutreach2.png"
                            class="proj-img-index center"
                            alt="proj-img"></a>
            </div>
        </div>

        <div class="project-body">
            <p><span class="font-weight-bold">Outreach Services Management System Project</span> - Auburn, WA<span
                        class="float-right">Fall 2020</span></p>
            <p>Green River College</p>
            <ul>
                <li>As a team (4 people), we created a website for a nonprofit organization that provides various
                    services.
                    Services are limited, thus customers must meet set qualifications to be helped. There is a limited
                    amount of staff on hand, so my team created a form that customers can find through the website where
                    they can fill out what services they need if they meet the given qualifications.
                </li>
                <li>Utilized HTML5, CSS3, JavaScript, PHP, and MySQL in PHPStorm</li>
                <li><a id="project-link" href="https://dar2.greenriverdev.com/" target="_blank">Check it out!</a></li>
            </ul>
        </div>
    </div>
</div>

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php'); ?>