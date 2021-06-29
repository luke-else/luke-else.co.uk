<!DOCTYPE html>
<html lang="en" loading="lazy">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Luke Else - Junior Software Developer from Kent" />
        <meta name="author" content="" />
        <title>Luke Else - Junior Software Developer</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/type.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Luke Else</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="Luke Else" /></span>
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
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div  class="container-fluid p-0">
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
                        
                        <h2 class="mb-0">
                            <p id="type"></p>
                        </h2>

                    <br />

                    <div class="subheading mb-5">
                        
                        <?php
                            //An example date of birth.
                            $dob = '2004-01-12';

                            //Create a DateTime object using the user's date of birth.
                            $dob = new DateTime($dob);

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
                        <a href="mailto:luke@luke-else.co.uk">luke@luke-else.co.uk</a>
                    </div>
                    <p class="lead mb-5">I am a Junior but well-practised Software Developer. I have a great passion for learning, especially in topics oriented around Software Development, Networks and Backend Engineering. I am constantly striving to learn more whilst pushing myself to explore new technologies!</p>
                    <div class="social-icons">
                        <a target="_blank" class="social-icon" href="https://www.linkedin.com/in/luke-else-a7183a205/"><i class="fab fa-linkedin-in"></i></a>
                        <a target="_blank" class="social-icon" href="https://github.com/lukejelse04"><i class="fab fa-github"></i></a>
                        <a target="_blank" class="social-icon" href="https://www.instagram.com/lukejelse04/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" class="social-icon" href="assets/Luke Else - CV.pdf"><i class="fas fa-file-download"></i></a>
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
                            <p>This job involved ensuring customer satisfaction was very high! Every car had to be cleaned meticulously to ensure the highest standard was achieved. We often spent a lot of our time in commercial workspace environments and so remaining professional was key to the service we provided. I enjoyed working here a lot because of both the independent and teamworking aspects. On many occasions we would find ourselves working on a car in a group so communication was key to ensure that no part was missed nor any unnecessary work was undertaken!</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2020 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Site Maintenance</h3>
                            <div class="subheading mb-3">Ashford Self Storage</div>
                            <p>Working at Ashford Self Storage was my first taste of working in the real world. I spent a lot of time interacting with the customers throughout the day whilst also maintaining the cleanliness and presentability of the site. I was in charge of making sure the loading bay was clear and safe to use in addition to landscaping out the front and sides of the warehouse building!</p>
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
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://spotify.luke-else.com">spotify.luke-else.com</a></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Flight Simulator EFB</h3>
                            <div class="subheading mb-3">A-Level Project</div>
                            <p>This project is probably one of the largest so far! It is designed for flight sim users to be able to brief and track their flights as well as giving them the ability to fetch relevant routes and charts with just the click of a button. The project is a part of my A-Level course and so is heavily documented at all stages throughout the analysis, design and production cycle. It has taught me a lot about the agile development ideology, something that will be really useful to apply to some of my next projects!</p>
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
                            <p>Grades (Predicted): A, A, <b>A*</b></p>
                        </div>
                        
                        <div class="flex-shrink-0"><span class="text-primary">September 2020 - Present</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">The Norton Knatchbull School</h3>
                            <div class="subheading mb-3">GCSE's</div>
                            <div>FSMQ (C), Maths (8), Geography (<b>9</b>), Biology (<b>9</b>), Chemistry (<b>9</b>), Physics (<b>9</b>), Spanish (7), English (Literature & Language) (7, 7), Computer Science (<b>9</b>)</div>
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
                        <li class="list-inline-item"><span class="test-secondary">C#</span></li>
                        <li class="list-inline-item"><span class="test-secondary">.Net</span></li>
                        <!--
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        -->
                        <li class="list-inline-item"><i class="fas fa-network-wired"></i></li>
                        <li class="list-inline-item"><i class="fas fa-server"></i></li>
                        <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                        <li class="list-inline-item"><i class="fab fa-linux"></i></li>
                        <li class="list-inline-item"><i class="fab fa-git-alt"></i></li>
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
                    <p>In my spare time, I will often find myself working on some of my smaller projects such as websites for my friends which I host on my own rented cloud servers. As well as this, I am quite interested in reading about system exploits as it is something that I can apply to my own work in order to keep it safe and secure.</p>
                    <p>I am also an avid member of the VATSIM flight simulation community and spend my evenings interacting with the many members that it holds. I operate as a virtual air traffic controller and will also find myself flying on the network in some of the many events they host each week.</p>
                    <p class="mb-0">From 2015 to 2020 I was also in the 'Royal Air Force Air Cadets' which taught me a lot of leadership, communication and problem solving skills. Whilst there, I partook in the Bronze Duke Of Edinburgh award and joined the squadron band which were both tough but rewarding experiences. Throughout the year we would attend many parades in which drill and discipline standard had to be impeccable.</p>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/type.js"></script>
    </body>
</html>