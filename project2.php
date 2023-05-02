<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="project2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
     

</head>

<body>
    

    <img class="image" src="classss.jpg" alt="">
        <div class="scrolling-text">
            <span>Welcome to our website MSS SCHOOLS,Donate please to help children in Africa to have their right in
                education.</span>
        </div>
        <DIV class="partie1">
        
            <nav>
                                <div class="wrapper">
                                    <div class="logo"><a href="#">MSS SCHOOLS</a></div>
                                    <input type="radio" name="slider" id="menu-btn">
                                    <input type="radio" name="slider" id="close-btn">
                                    <ul class="nav-links">
                                        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                        
                                        <li>
                                            <a href="#" class="desktop-item">OUR STORY</a>
                        
                                            <label for="showDrop" class="mobile-item">OUR STORY</label>
                                            <ul class="drop-menu">
                                                <li><a href="/mssschools/partie1sahar/partie1.php">ABOUT US</a></li>
                                                <li><a href="/mssschools/partie2sahar/partie2.php">SCHOOL DESIGN</a></li>
                                                <li><a href="/mssschools/partie3sahar/partie3.php">GIVING MODEL</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="desktop-item">OUR WORK</a>
                        
                                            <label for="showWork" class="mobile-item">OUR WORK</label>
                                            <ul class="drop-menu">
                                                <li><a href="/mssschools/Siwar/WHY.php">WHY SCHOOLS</a></li>
                                                <li><a href="/mssschools/Siwar/Approach.php">OUR APPROACH</a></li>
                                                <li><a href="/mssschools/projet/imageslide.php">COMMUNITY TRANSFORMATION</a></li>
                        
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="desktop-item">GET INVOLVED</a>
                        
                                            <label for="showDrop" class="mobile-item">GET INVOLVED</label>
                                            <!-- IT MAKE THE GETINVOLVED BUTTON EPEAR IN MOBILE BAR -->
                                            <ul class="drop-menu">
                                                <li><a href="/mssschools/get_involved.php">SPONSOR A SCHOOL</a></li>
                                                <li><a href="/mssschools/business.php">BECOME PARTNER</a></li>
                                                <li><a href="/mssschools/business1.php">GIVE MONTHELY</a></li>
                        
                                            </ul>
                                        </li>
                                        <li>
                                        <?php if(isset($_SESSION['user'])): ?>
                                        <li><a href="/mssschools/LOGIN/logout.php">LOGOUT</a></li>
                                        <?php else: ?>
                                        <li><a href="/mssschools/LOGIN/login.php">LOGIN</a></li>
                                        <?php endif; ?>
                                        <li><a href="/mssschools/Siwar/Form.php">CONTACT US</a></li>
                                        <li><a href="/mssschools/givingsub.php"> DONATE NOW</a></li>
                                    </ul>
                                    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
                                </div>
                            </nav>
            <p class="building">SPONSOR A SCHOOL</p>
            <div id="typing-effect" class="effect">Join The Community</div>
        
        
        
        </DIV>
    

    <div class="partie2">
        <h1 >KAMPALA PROJECT</h1>
    </div>
    <div class="gradient">
    <div class="skill">
        <div class="outer">
            <div class="inner">
                
            </div>
        </div>
    </div>
    </div>
    <div id="number">
    
    </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"  height=" 320px"
    width=" 320px">
        <defs>
            <linearGradient id="GradientColor">
                <stop offset="0%" stop-color="#CEAD6D" />
                <stop offset="100%" stop-color="#BACBDB" />
            </linearGradient>
        </defs>
        <circle cx="80" cy="80" r="70" stroke-linecap="round" />
    </svg>

    <script>
       let number=document.getElementById("number");
       let counter=0;
       setInterval(()=>{
        if (counter == 90 ) {
               clearInterval();
           } else {
               counter += 1;
               number.innerHTML = counter + "%";
           }
       },30);
        
    </script>

    <div class="partie3">
        <p>90% of the necessary amount is collected, we have strong belief that you will be able with us to complete the circle and together will be able to help thousands of children to achieve their dreams,BE THE REASON.</p>
    </div>
       

       <div class="partie4">
        <button onclick="redirectToLogin()"   >DONATE HERE</button>
        <script>
            function redirectToLogin() {
                window.location.href = "/mssschools/LOGIN/login.php";
            }

            // This function will be called after the user logs in
            function redirectToLink() {
                window.location.href = "/mssschools/givingsub.php";
            }
        </script>
    </div><h1 style="text-align: center; margin-top: 30px;margin-bottom: -50PX;" class="rs" >Essential Facilities for a Modern School WE Try To Provide</h1>
    
    <div class="container">
        <h1 style="text-align: center; margin-top: 30px;margin-bottom: -50PX;" >Essential Facilities for a Modern School</h1>
        <div id="slide">
            <div class="item" style="background-image: url(girl-with-test-tube-watching-teacher-with-children.jpg);">
                <div class="content">
                    <div class="name">Laboratories</div>
                    <div class="des">Science and computer labs are essential for students to gain hands-on experience and practical knowledge.</div>
                   
                </div>
            </div>
            <div class="item" style="background-image: url(classss.jpg);">
                <div class="content">
                    <div class="name">Classrooms</div>
                    <div class="des">should be designed to provide a comfortable and conducive environment for learning.</div>
                    
                </div>
            </div>
            <div class="item" style="background-image: url(library.jpg);">
                <div class="content">
                    <div class="name">Libraries</div>
                    <div class="des"><strong> Libraries are essential resources for students and teachers alike, and they provide a wealth of knowledge and information.</strong></div>
                   
                </div>
            </div>
            
            <div class="item" style="background-image: url(view-basketball-court.jpg);">
                <div class="content">
                    <div class="name">Sports facilities</div>
                    <div class="des"><strong> Sports facilities such as gyms, tracks, and fields are essential for physical education and sports programs.</strong></div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(long-empty-footpath-modern-city-square-with-skyline.jpg);">
                <div class="content">
                    <div class="name">Outdoor spaces</div>
                    <div class="des"><strong>Outdoor spaces such as playgrounds, gardens, and courtyards provide students with opportunities to connect with nature and engage in physical activity</strong></div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(group-multiethnic-kids-wearing-vr-headsets-teacher-watching-them.jpg);">
                <div class="content">
                    <div class="name">Technology infrastructure</div>
                    <div class="des"><strong>Technology infrastructure such as computer labs, high-speed internet, and smartboards are essential for modern-day education</strong></div>
                    <button>See more</button>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
        
           

    <div class="partie5">
        <footer>
    
            <div>
                <div class="premier">
                    <h5> OUR STORY</h5>
                    <p> <a href="#"> About Us</a> </p>
                    <p><a href="#">School Design</a> </p>
                    <p> <a href="#">Giving Model and Proof</a> </p>
                </div>
                <div class="premier">
                    <h5> OUR WORK</h5>
                    <p> <a href="#"> Why Schools?</a> </p>
                    <p><a href="#">Our Approach</a> </p>
                    <p> <a href="#">Stories</a> </p>
                </div>
                <div class="premier">
                    <h5> GET INVOLVED</h5>
                    <p> <a href="#"> Sponsor a School</a> </p>
                    <p><a href="#">Give Monthly</a> </p>
                    <p> <a href="#">Start a Campaign</a> </p>
                </div>
            </div>
            <form>
                <div>
    
                    <h3>Good News delivred to Your Inbox</h3>
                    <input type="text" placeholder="Your name">
                    <input type="email" placeholder="Your email">
                    <input type="submit" value="Sign In">
                </div>
            </form>
            <br>
            <button onclick="document.location='work.html'">Contact Us</button>
            <div class="kk">
            <a href="#Facebook"><img src="fb.png" width="45px" height="45px"></a>
            <a href="#Insta"><img src="insta.png" width="45px" height="45px"></a>
            <a href="#Youtube"><img src="ytb.png" width="45px" height="45px"></a>
            </div>
    
        </footer>
    </div>
    
    
    
    
    </body>
    <script src="project.js"></script>
    </html>