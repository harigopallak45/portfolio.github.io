<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c3ab804737.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.jpg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>UI/UX Student</p>
                <h1>Hi, I'm <span>Hariharan</span> G<br>from Salem</h1>
            </div>
        </div>
    </div>
    <!-- -----------about---------- -->
    <div id="about">
        <div class="container">
            <div class="row">
            <h1 class="sub-title">About Me</h1>
                <div class="about-col-1">
                <img src="images/user.png.jpg" alt="User Image">
                </div>
                <div class="about-col-2">
                <p><strong>Always Learn from yesterday,Think and Do for tomorrow,But Don't Forgot to Enjoy now</strong></p>


                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('Projects')">Projects</p>
                        <p class="tab-links" onclick="opentab('Education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                            <li><span>Web Development</span><br>Web/App Development</li>
                            <li><span>App Development</span><br>Building Android/ios Apps</li>
                            <li><span>Data Analytics</span><br>Data Science</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Projects">
                        <ul>
                            <li><span>DBMS</span><br>Farmer Product</li>
                            <li><a href="https://harigopallak45.wixsite.com/farmerproduct" target="_blank">Project</a></li>
                            <li><span>Web Development</span><br>My personal Portfolio</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Education">
                        <ul>
                            <li><span>2020-2024</span><a href="https://www.tjohncollege.com/" target="_blank"><br>BE-CSE at T.john Institute of technology</li>
                            <li><span>2006-2020</span><a href="https://leadschool.in/find-a-school/schools/swamy-vivekanandha-vidhyalaya-matric-hr-sec-school-3267" target="_blank"><br>Primary and Higer Secondary at Swamy Vivekandha Vidyalaya Maric Hr Sec School</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------services------------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>We will provide you with a customized website design that's perfect for your business or personal site based on your requirement.</p>
                    <a href="html/lrnweb.html">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i>
                    <h2>App Design</h2>
                    <p>Wireframes, design, prototype, present, and share amazing experience with our mobile application design services. We bring a tailored approach when it comes to design a mobile app for your business. And that too without hampering your overall design budget…</p>
                    <a href="html/lrnapp.html">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- --------portfolio------------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images\farmer.png">
                    <div class="layer">
                        <h3>farmerproduct</h3>
                        <p>This website is used to connect the farmers and buyers directly</p>
                        <a href="https://harigopallak45.wixsite.com/farmerproduct" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>

                <div class="work">
                    <img src="images/work-2.jpg">
                    <div class="layer">
                        <h3>chattry box</h3>
                        <p>This website is used to connect the peoples</p>
                        <a href="https://harigopallak45.github.io/chattry.github.io/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <a href="https://github.com/harigopallak45" target="_blank" class="btn">See more</a>
        </div>
    </div>
    <!-- --------contact------------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <div class="container">
                        <h1 class="sub-title" onclick="document.getElementById('id02').style.display='block'">Contact Me</h1>
                    </div>

                    <div id="id02" class="modal">
                        <!-- Modal content and form -->
                        <form class="modal-content animate" action="submit.php" method="POST">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>

                            <div class="container">
                                <section>
                                    <h3>Contact</h3>
                                    <form method="post" action="submit.php">
                                        <center>
                                            <div class="row uniform">
                                                <div class="10u 12u$(xsmall)">
                                                    <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                                                </div>

                                            </div>
                                            <div class="row uniform">
                                                <div class="10u 12u$(xsmall)">
                                                    <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>

                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="10u 12u$(xsmall)">
                                                    <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <div class="10u 12u$(xsmall)">

                                                    <input type="text" name="message" id="message" value="" placeholder="message" style="width:80%" required/>
                                                </div>
                                            </div>
                                            <div class="row uniform">
                                                <center>
                                                    <div class="row uniform">
                                                        <div class="10u 12u$(small)">
                                                            <input type="submit" value="Submit" name="submit" class="special" /></li>
                                                        </div>
                                                        <div class="10u 12u$(small)">
                                                            <input type="reset" value="Reset" name="reset"/></li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </form>
                                </section>

                            </div>
                        </div>



            
                <p><i class="fa-solid fa-paper-plane"></i>harigopallak45@gmail.com</p>
                <p><i class="fa-solid fa-square-phone-flip"></i>+91 6364817511</p> 
                <div class="social-icons">
                    <a href="https://www.facebook.com/harigopallak45" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/hari_haran_g_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/harigopallak45/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://github.com/harigopallak45" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openmenu() {
            document.getElementById("sidemenu").style.display = "block";
            document.getElementById("header").style.marginLeft = "220px";
            document.getElementById("header").style.width = "calc(100% - 220px)";
            document.getElementById("header-text").style.marginLeft = "220px";
        }
        function closemenu() {
            document.getElementById("sidemenu").style.display = "none";
            document.getElementById("header").style.marginLeft = "0";
            document.getElementById("header").style.width = "100%";
            document.getElementById("header-text").style.marginLeft = "0";
        }
        function opentab(tab) {
            var i;
            var x = document.getElementsByClassName("tab-contents");
            var y = document.getElementsByClassName("tab-links");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                y[i].classList.remove("active-link");
            }
            document.getElementById(tab).style.display = "block";
            event.currentTarget.classList.add("active-link");
        }
    </script>
</body>
</html>
