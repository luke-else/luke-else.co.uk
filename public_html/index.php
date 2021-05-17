<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Luke Else- Junior Software Developer</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Luke Else</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <!--
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                    -->
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-secondary">{</span>
                        Luke
                        <span class="text-primary">Else</span>

                        <span class="text-secondary">}</span>
                    </h1>

                    <br />

                    <div class="subheading mb-5">
                        
                        <?php
                            //An example date of birth.
                            $userDob = '2004-01-12';

                            //Create a DateTime object using the user's date of birth.
                            $dob = new DateTime($userDob);

                            //We need to compare the user's date of birth with today's date.
                            $now = new DateTime();

                            //Calculate the time difference between the two dates.
                            $difference = $now->diff($dob);

                            //Get the difference in years, as we are looking for the user's age.
                            $age = $difference->y;

                            //Print it out.
                            echo "Age: <span class='text-dark'>" . $age . "</span>";
                        ?>
                        <br />

                        Mobile: <span class='text-dark'> +44 7498 289321 </span>

                        <br />

                        E-Mail: 
                        <a href="mailto:name@email.com">luke@luke-else.co.uk</a>
                    </div>
                    <p class="lead mb-5">I am a Junior but well practised Software Developer. I have a great passion for learning, especially in topics oriented around Software Development, Networks and Backend Engineering. I am constantly striving to learn more and more whilst pushing myself to explore new technologies!</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/luke-else-a7183a205/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/lukejelse04"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/lukejelse04/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Car Valeter</h3>
                            <div class="subheading mb-3">CSM Valeting</div>
                            <p>This job involved ensuring customer satisfaction was very high! Every car had to be cleaned maticulously to ensure the highest standard was achieved. We often spent a lot of our time in commercial workspace environments and so remaining profesional was key to the service we provided. I enjoyed working here a lot becuase of both the independent and teamworking aspects. On many occasions we would find ourselves working on a car in a group so communication was key to ensure that no part was missed nor any unecessary work was undetaken!</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2020 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Site Maintenance</h3>
                            <div class="subheading mb-3">Ashford Self Storage</div>
                            <p>Working at Ashford Self Storage was my first taste of working in the real world. I spend a lot of time interacting with the customers throughout the day whilst also maintaining the cleanliness and presentability of the site. I was in charge of making sure the loading bay was clear and safe to use in addition to landscaping out the front and sides of the warehouse building!</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2018 - September 2020</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Projects-->
            <section class="resume-section" id="projects">
                <div class="resume-section-content">
                    <h2 class="mb-5">Projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">snexo.co.uk</h3>
                            <div class="subheading mb-3">Snexo</div>
                            <p>This project is a templated website designed for a client that needed a platform to advertise his clearance services. The website is made using Bootstrap and JQuery along with PHP for some of the backend features. I am hosting the site along with its E-Mail accounts on my own web and mail servers which guarantees a near 100% uptime!</p>
                            <!--<img class="img-fluid mx-auto mb-2" src="assets/img/snexo.jpg" alt="snexo.co.uk" /> -->
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://snexo.co.uk">snexo.co.uk</a></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Personalised Spotify Client</h3>
                            <div class="subheading mb-3">Spotify Client</div>
                            <p>This one is more of a personal project that allows me to learn more about and make use of a documented API. I will be staging the App as a website so that it can easily be accessed. I will also be trying to make a divide between the use of server and client side processing due to the limited resources I have available!</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://luke-else.com">luke-else.com</a></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Flight Simulator EFB</h3>
                            <div class="subheading mb-3">A-Level Project</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://github.com/lukejelse04/FlightSimulatorIntergration">GitHub</a></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">The Norton Knatchbull School</h3>
                            <div class="subheading mb-3">A-Levels</div>
                            <div>Maths, Physics and Computer Science</div>
                            <p>Grades: A, A, <b>A*</b></p>
                        </div>
                        
                        <div class="flex-shrink-0"><span class="text-primary">September 2020 - Present</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">The Norton Knatchbull School</h3>
                            <div class="subheading mb-3">GCSE's</div>
                            <div>FSMQ (C), Maths (8), Geography (<b>9</b>), Biology (<b>9</b>), Chemistry (<b>9</b>), Physics (<b>9</b>), Spanish (7), English (Literature & Language) (7, 7), Computer Science (<b>9</b>), Religious Studies (4)</div>
                        </div>
                        
                        <div class="flex-shrink-0"><span class="text-primary">September 2015 - August 2020</span></div>
                    </div>


                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><span class="test-secondary">C#</span></li>
                        <li class="list-inline-item"><span class="test-secondary">.Net</span></li>
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fas fa-ethernet"></i></li>
                        <li class="list-inline-item"><i class="fas fa-server"></i></li>
                        <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                        <li class="list-inline-item"><i class="fab fa-linux"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Basic Website front-end and UI Development
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Website Client Side and Server Side Development
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Basic Networking and Server Infrastructure
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Software Development
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from software development, I also enjoy ethical hacking and pentesting. I am still very new to the skill but it is something I enjoy learning about. I will often spend my evenings researching exploits and how they work. This knowledge can then be applied to my own setups and servers to ensure they are safe and secure!</p>
                    <p class="mb-0">On a nice day I will often find myself exploring outside, whether it be through a forest walk or a run with friends. Who doesn't love a bit of fresh air!</p>
                </div>
            </section>
            <hr class="m-0" />
            <!--
            <!-- Awards
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Google Analytics Certified Developer
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li>
                    </ul>
                </div>
            </section>
            -->
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
