<?php
/*
 * Dana Clemmer
 * resume.php
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/resume_styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Resume</title>
    <!--Favicon-->
    <link rel="icon" href="images/profilepic.jpg">
</head>
<body data-spy="scroll" data-target="#navbar-site" data-offset="80">

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
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#education">Education</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#experience">Experience</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" href="#achievements">Achievements</a>
            </li>
        </ul>
    </div>
</nav>

<!--##################    HEADER    ##################-->
<header>
    <div class="header rounded">
        <div class="idCard rounded">
            <img class="rounded-circle" src="images/profilepic.jpg"
                 alt="Profile picture">
            <h5 class="name font-weight-bold pb-3">Dana Clemmer</h5>
            <div class="header-body">
                <ul class="header-contact">
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:Dclemmer2@mail.greenriver.edu?subject=EmailSubjectline">Dclemmer2@mail.greenriver.edu</a>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:206-480-8610">206-480-8610</a>
                    </li>
                    <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i><a
                            href="https://www.linkedin.com/in/dana-clemmer/">www.linkedin.com/in/dana-clemmer</a>
                    </li>
                    <li>
                        <i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/dclemmer2">github.com/dclemmer2</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<br>

<!--##################    BODY    ##################-->
<div class="container">
    <h1 id="about">About</h1><br>
    <p>My name is Dana and I am currently a Junior studying Software Development at Green River College. My strengths include back-end development with Java and front-end web development with HTML/CSS and JavaScript combined with PHP. I have worked on various projects, including creating a website with a team for a local nonprofit using HTML/CSS, JavaScript, PHP, and MySQL. In another program that I created, I used Java to manage the inventory of a toy store by utilizing a LinkedList, ArrayList, and varying methods, such as one to find the most frequently purchased toy. My experience with multiple coding languages and with group projects will help me collaborate with others in the work force. I am seeking an internship that I’ll be able to put my skills to use. </p>
    <br>
    <hr>
    <br>
    <h1 id="education">Education</h1><br>
    <p><span class="font-weight-bold">Green River College</span> - Auburn, WA <span class="float-right">September 2020 – Present</span>
    </p>
    <div class="education-content">
        <p>Bachelor of Applied Science, expected June 2022</p>
        <p>Major: Software Development (Applied Computer Science), Current GPA: 3.9</p>
        <p>Relevant Coursework to be Completed by June 2021:</p>
        <ul>
            <li>Data Structures</li>
            <li>Web Dev Frameworks</li>
            <li>Systems Programming</li>
            <li>Full Stack Web Development</li>
            <li>Algorithms</li>
            <li>Agile Development Methods</li>
        </ul>
        <p>Other Completed Relevant Coursework:</p>
        <ul>
            <li>Object-Oriented Design/Programming</li>
            <li>Front-End Web Development</li>
            <li>Web Program with JavaScript</li>
            <li>Database Fundamentals</li>
        </ul>
    </div>
    <br><br>
    <p><span class="font-weight-bold">Green River College</span> - Auburn, WA <span class="float-right">January 2017 – August 2019</span>
    </p>
    <div class="education-content">
        <p>Associate in Business, August 2019, GPA: 3.9</p>
        <ul>
            <li>Completed AB degree with High Honors</li>
            <li>Was majoring in business at Seattle Pacific University and transferred to Green River College and
                completed
                associate degree.
            </li>
        </ul>
    </div>
    <br>
    <hr>
    <br>
    <h1 id="skills">Skills and Certifications</h1><br>
    <ul>
        <li>Languages: Java, JavaScript, SQL</li>
        <li>Web: HTML/CSS</li>
        <li>Applications: Intellij IDEA, PhpStorm, JGrasp, Komodo IDE, Eclipse, Notepad++</li>
        <li>Bootstrap 4 Essential Training through LinkedIn Learning</li>
        <li>MOS Excel Certified</li>
    </ul>
    <br>
    <hr>
    <br>
    <h1 id="experience">Experience</h1><br>
    <!-- <div class="card">
         <img src="images/kentOutreach.png" class="card-img-top" alt="...">
         <div class="card-body">
             <h3 class="card-title"><p><span class="font-weight-bold">Outreach Services Management System Project</span> - Auburn, WA<span
                     class="float-right">Fall 2020</span></p></h3>
             <h5>Green River College</h5>
             <ul>
                 <li>As a team (4 people), we created a website for a nonprofit organization through St. James Episcopal Church
                     that is working to fill the needs of the community by providing various services. They can only help a
                     limited number of people on a first-come, first-serve basis, and there are a set of qualifications that
                     customers must meet to be helped. There is a limited amount of staff on hand, so my team created a form that
                     customers can find through the website where they can fill out what services they need if they meet the
                     given qualifications.
                 </li>
                 <li>Utilized HTML5, CSS3, JavaScript, PHP, and MySQL</li>
                 <li><a id="project-link" href="https://dar2.greenriverdev.com/">Check it out!</a></li>
             </ul>
         </div>
     </div>-->
    <div class="project-body">
        <p><span class="font-weight-bold">Outreach Services Management System Project</span> - Auburn, WA<span
                class="float-right">Fall 2020</span></p>
        <p>Green River College</p>
        <ul>
            <li>As a team (4 people), we created a website for a nonprofit organization that provides various services. Services are limited, thus customers must meet set qualifications to be helped. There is a limited amount of staff on hand, so my team created a form that customers can find through the website where they can fill out what services they need if they meet the given qualifications.
            </li>
            <li>Utilized HTML5, CSS3, JavaScript, PHP, and MySQL in PHPStorm</li>
            <li><a id="project-link" href="https://dar2.greenriverdev.com/">Check it out!</a></li>
        </ul>
    </div>
    <img src="images/kentOutreach.png" class="proj-img center" alt="proj-img">
    <img src="images/kentOutreach2.png" class="proj-img center" alt="proj-img">
    <br>
    <p id="secondProj"><span class="font-weight-bold">Systems Programming Project</span> - Auburn, WA<span class="float-right">2020</span>
    </p>
    <p>Green River College</p>
    <ul>
        <li>Built a program that lets the user play a simplified version of a Blackjack card game
        </li>
        <li>Utilized Java in IntelliJ</li>
    </ul>
<br>
    <p id="thirdProj"><span class="font-weight-bold">Object-Oriented Design/Programming Project</span> - Auburn,
        WA<span
                class="float-right">2019</span>
    </p>
    <p>Green River College</p>
    <ul>
        <li>Created a program that utilizes a LinkedList, ArrayList, and varying methods that manages the inventory of
            toy store
        </li>
        <li>Utilized Java in jGRASP</li>
    </ul>
    <br>
    <p><span class="font-weight-bold">Front-End Web Development Website Project </span> - Auburn, WA<span
            class="float-right">2019</span>
    </p>
    <p>Green River College</p>
    <ul>
        <li>Built a website composed of multiple websites that I created throughout the quarter</li>
        <li>Utilized HTML/CSS in Notepad++ editor</li>
    </ul>
    <br>
    <h2 id="employment">Employment</h2><br>
    <p><span class="font-weight-bold">YMCA of Greater Seattle (Kids Zone Counselor) </span> - Kent, WA<span
            class="float-right"> 2019-2020</span>
    </p>
    <p><span class="font-weight-bold">
Sodexo at Seattle Pacific University (Caterer) </span> - Seattle, WA<span
            class="float-right"> September 2017 – June 2018</span>
    </p>
    <br>
    <hr>
    <br>
    <h1 id="achievements">Achievements and Activities</h1><br>
    <ul>
        <li>SPU President’s Scholar Award (4-year award), 2017</li>
        <li>Green River College High Honors Award, 2019</li>
        <li>American Heart Association, Volunteer, 2019</li>
        <li>Community Meal for homeless at Calvary Chapel South, Volunteer, 2013-2018</li>
        <li>We Day at KeyArena, Volunteer, 2017</li>
        <li>VBS at Calvary Chapel South, Volunteer, 2016</li>
    </ul>
</div>

<!--##################    FOOTER    ##################-->
<!-- Collapsible Footer -->
<footer class="footer">
    <div class="footer-container row row-cols-1 row-cols-md-2 justify-content-center mx-auto  pt-3">
        <div class="col">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Contact
            </a>
            <div id="collapseOne" class="panel-collapse collapse in pt-2" role="tabpanel">
                <ul class="contact">
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:Dclemmer2@mail.greenriver.edu?subject=EmailSubjectline">Email Me</a>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:206-480-8610">206-480-8610</a>
                    </li>
                    <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i><a
                            href="https://www.linkedin.com/in/dana-clemmer/">www.linkedin.com/in/dana-clemmer</a>
                    </li>
                    <li>
                        <i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/dclemmer2">github.com/dclemmer2</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                Connect
            </a>
            <div id="collapsetwo" class="panel-collapse collapse in pt-2" role="tabpanel">
                <div class="container text-white" id="main">

                    <p class="connect"><a id="guestbook-link" href="https://dclemmer.greenriverdev.com/305/portfolio/guestbook.html">Sign my Guestbook</a> OR fill out this form:</p>

                    <!-- Create Contact Form -->
                    <form id="contact_form" method="post" action="resume_confirmation.php">
                        <fieldset class="form-group">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter your name">
                                <span class="d-none error" id="err-name">*Field is required</span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="you@example.com">
                                <span class="d-none error" id="err-email">*Field is required</span>
                                <span class="d-none error" id="invalid-email">*Invalid email format</span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number(optional):</label>
                                <input class="form-control" type="tel" id="phone" name="phone"
                                       maxlength="10"
                                       pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"
                                       placeholder="123-456-7890">
                                <span class="d-none error" id="err-phone">*Field is required</span>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" placeholder="Message" id="message" name="message"
                                          rows="3"></textarea>
                            </div>
                        </fieldset>
                        <!-- Submit -->
                        <input class="submit text-white" type="submit" value="Send" id="resume-submit">
                    </form>

                </div>
            </div>
        </div>

        <!--  Bottom Row  -->
        <div class="text-center copyright-text pt-2">
            <p>© Copyright 2020: Dana Clemmer</p>
        </div>
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
<script src="scripts/resume.js"></script>
</body>
</html>