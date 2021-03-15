<!--Resume Page-->

<?php
/*
 * Dana Clemmer
 * resume.php
 */

$page_title = 'Resume';

/*//Login info
include('includes/loginPath.php');*/

//Add Header
include("includes/head.php");
?>

<!--##################    NAVBAR    ##################-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar-site">
    <a class="navbar-name" href="index.php">Dana Clemmer</a>
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
<header id="resume-header">
    <div class="header rounded" id="connect">
        <div class="idCard rounded" id="resume">
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
<hr>
<br>


<!--##################    BODY    ##################-->
<div class="index-container">
    <h1 id="about">About</h1><br>
    <p>My name is Dana and I am currently a Junior studying Software Development at Green River College. My strengths
        include back-end development with Java and front-end web development with HTML/CSS, JavaScript, and
        PHP. I have worked on various projects, including creating a website with a team for a local nonprofit using
        HTML/CSS, JavaScript, PHP, and MySQL. In another program that I created, I used Java to manage the inventory of
        a toy store by utilizing a LinkedList, ArrayList, and varying methods, such as one to find the most frequently
        purchased toy. My experience with multiple coding languages and with group projects will help me collaborate
        with others in the work force. I am seeking an internship that I’ll be able to put my skills to use. </p>
    <br>
    <hr>
    <br>
    <h1 id="education">Education</h1><br>
    <p><span class="font-weight-bold">Green River College</span> - Auburn, WA <span class="float-right">September 2020 – Present</span>
    </p>
    <div class="education-content">
        <p>Major: Information Technology-Software Development (BAS), expected June 2022, Current GPA: 3.9</p>
        <!--   <p>Relevant Coursework to be Completed by June 2021:</p>
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
           </ul>-->
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
    <div>
        <h1 id="skills">Skills and Certifications</h1><br>
        <ul>
            <li>Languages: Java, JavaScript, SQL</li>
            <li>Web: HTML/CSS</li>
            <li>Applications: Intellij IDEA, PhpStorm, JGrasp, Komodo IDE, Eclipse, Notepad++</li>
            <li>Bootstrap 4 Essential Training through LinkedIn Learning</li>
            <li>MOS Excel Certified</li>
        </ul>
    </div>
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
    <div>
        <p><span class="font-weight-bold">Outreach Services Management System Project</span> - Auburn, WA<span
                    class="float-right">Fall 2020</span></p>
        <p>Green River College</p>
        <ul>
            <li>As a team (4 people), we created a website for a nonprofit organization that provides various services.
                Services are limited, thus customers must meet set qualifications to be helped. There is a limited
                amount of staff on hand, so my team created a form that customers can find through the website where
                they can fill out what services they need if they meet the given qualifications.
            </li>
            <li>Utilized HTML5, CSS3, JavaScript, PHP, and MySQL in PHPStorm</li>
            <li><a id="project-link" href="https://dar2.greenriverdev.com/" target="_blank">Check it out!</a></li>
        </ul>
    </div>
    <div class="row project-images">
        <div class="col-lg-6">
            <a class="project-link-image" href="https://dar2.greenriverdev.com/" target="_blank"><img
                        src="images/kentOutreach.png"
                        class="proj-img-resume center"
                        alt="proj-img"></a>
        </div>
        <div class="col-lg-6">
            <a class="project-link-image" href="https://dar2.greenriverdev.com/" target="_blank"><img
                        src="images/kentOutreach2.png"
                        class="proj-img-resume center"
                        alt="proj-img"></a>
        </div>
    </div>
    <br>
    <p id="secondProj"><span class="font-weight-bold">Systems Programming Project</span> - Auburn, WA<span
                class="float-right">2020</span>
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

<!--##################    FOOTER SECTION    ##################-->
<?php include('includes/footer.php'); ?>


