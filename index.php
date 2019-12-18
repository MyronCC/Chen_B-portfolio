<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="stylesheet" href="styles/css/main.css">
    <title>CHEN</title>
</head>
<body>

    <header class="header">
        <h1>C</h1>
        <div class="menu-wrap">
                <input type="checkbox" class="toggler">
                <div class="hamburger"><div></div></div>
                <div class="menu">
                  <div>
                    <div>
                      <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#project">Project</a></li>
                        <li><a href="#contact">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        <nav class="mainNav">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#project">PROJECT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <div class="home" id="home">
            <div class="video">
                    <button id="close" onclick="closeDialog()">close</button>
                    <video controls>
                        <source src="video/final_combination.mp4" type="video/mp4">
                    </video>
                </div>
            <a href="#about"><button class="sroll-button"></button></a>
        <div class="home-left">
            <div class="logo">
                <img src="images/logo_new.png" alt="logo">
            </div>
            <div class="home-name">
                <h2>BOLING CHEN</h2>
                <p>Developer & Designer</p>
                <button class="video-button" onclick="openDialog()"></button>
                
            </div>
        </div>
        <div class="home-right">
            <div class="self">
                <p>H<br>O<br>M<br>E</p>
            </div>
            <img src="images/self_photo.png" alt="Me!">
        </div>
    </div>

    <div class="about" id="about">
            <a href="#project"><button class="sroll-button1"></button></a>
        <div class="about-left">
            <div class="about-background">
                <p>A<br>B<br>O<br>U<br>T</p>
            </div>
            <div id="mobile-version">
                    <div class="about-title">
                            <h2>about me</h2>
                            <h3>Web Developer & Designer</h3>
                        </div>
                        <div id="skills">
                            
                            
                                <ul class="skills" id="dev-skill">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>Javascript</li>
                                    <li>Node.js</li>
                                    <li>PhP</li>
                                    <li>MySQL</li>
                                    <li>Python</li>
                                </ul>
                            
                                <ul class="skills" id="des-skill">
                                    <li>Photoshop</li>
                                    <li>Illustrator</li>
                                    <li>Premiere</li>
                                    <li>After Effect</li>
                                    <li>Cinema 4D</li>
                                </ul>
                           
                            
                        </div>
            </div>
            <div class="selfIntroduction">
                <p>I am an Interactive media design student in Fanshawe College. I am mainly working on front-end development and graphic design. I am a patient and concentrated people. Hoping to working with you in soon future.</p>
            </div>
        </div>
        <div class="about-right">
            <div class="about-title">
                <h2>about me</h2>
                <h3>Web Developer & Designer</h3>
            </div>
            <div id="skills">
                
                
                    <ul class="skills" id="dev-skill">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Javascript</li>
                        <li>Node.js</li>
                        <li>PhP</li>
                        <li>MySQL</li>
                        <li>Python</li>
                    </ul>
                
                    <ul class="skills" id="des-skill">
                        <li>Photoshop</li>
                        <li>Illustrator</li>
                        <li>Premiere</li>
                        <li>After Effect</li>
                        <li>Cinema 4D</li>
                    </ul>
               
                
            </div>
        </div>
    </div>
    <div class="portfolio-container" id="project">
        <h2>PROJECT</h2>
        <a href="#contact"><button class="sroll-button2"></button></a>
        <div class="portfolio-background"><p>PROJECT</p></div>
        <div class="portfolio">
            <div class="project-background"></div>
            <div class=portfolio-left>
                <div class="project top-project see-more" data-target="1">
                    
                    <img src="images/boot_camp.png" alt="boot_camp">
                </div>
                <div class="project see-more" data-target="2">
                       
                    <img src="images/hackthon.png" alt="kackathon">
                </div>
            </div>
            <div class="portfolio-right">
                <div class="project top-project wrapper see-more"data-target="3">
                        
                    <img src="images/organ_donate.jpg" alt="organ donate">
                </div>
                <div class="project see-more" data-target="4">
                    
                    <img src="images/tesla_champagne.jpg" alt="tesla champagne">
                </div>
            </div>
        </div>
        <div class="popover">
                <h4 class="name"></h4>
                <p class="type"></p>
                <p class="description"></p>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="contactBackground"></div>
        <div class="contact-left">
                <div class="contact-background">
                        <p>C<br>O<br>N<br>T<br>A<br>C<br>T</p>
                    </div>
                <form class="contact-form" action="database/contact.php" method="post">
                    <h1>Get in Touch</h1>
            
                    <label for="name" class="hidden">Name</label>
                    <input class="form-box" type="text" id="name" name="name" placeholder="Name" required>
                    <!-- labe for="name" = input id="name ) can help when browser click 
                    the label name and related input area will be selected   !!!super important-->
            
                    <label for="email" class="hidden">Email</label>
                    <input class="form-box" type="email" id="email" name="email" placeholder="Email" required>
            
                    <label for="subject" class="hidden">Subject</label>
                    <input class="form-box" type="text" id="subject" name="subject" placeholder="Subject" required>
            
                    <label for="message" class="hidden">Message</label>
                    <textarea id="message" placeholder="Please type your message" name="message" required></textarea>
            
                    <button  class="form-button" type="submit">Submit</button>
            
                
                </form>
        </div>
        <div class="contact-right">
            <h2>My Contact Information</h2>
            <div class="e-mail">
                <h3>E-mail</h3>
                <a href="Mailto:mchen3593@gmail.com">mchen3593@gmail.com</a>
            </div>
            <h3>Social Links</h3>
            <div class="socialLink">
                <a href="https://www.instagram.com/cyui_chen/?hl=en"><object data="images/instagram.svg" type=""></object></a>
                <a href="https://www.facebook.com/profile.php?id=100004816862516"><object data="images/facebook.svg" type=""></object></a>
                <a href="https://www.linkedin.com/in/boling-chen-840301181/"><object data="images/linkedin.svg" type=""></object></a>
                <a href="https://twitter.com/Myron_Chen"><object data="images/twitter.svg" type=""></object></a>

                
            </div>
        </div>
    </div>

    <footer class="footer">
        <a href="#home"><button class="footer-button"></button></a>
        <p>&copy; 2019 Boling Chen.</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>