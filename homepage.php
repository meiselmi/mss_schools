<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>help building school</title>
    <link rel="stylesheet" href="debut.css">
    <link rel="stylesheet" href="nav.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    
    <html>

<body>

<div class="scrolling-text">
    <span>Welcome to our website MSS SCHOOLS,Donate please to help children in Africa to have their right in
        education.</span>
</div>
<DIV class="partie1">
    <img class="image" src="R (1).jpg" alt="">
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
    <p class="building">BUILDING</p>
    <div id="typing-effect" class="effect">SCHOOLS</div>
    <P class="disc"> With your support, we are providing quality <br> schools to students around the world. </P>



</DIV>



</body>
<script>
    const container = document.getElementById("typing-effect");

    function changeToLegacies() {
        container.textContent = " LEGACIES";
        setTimeout(changeToFutures, 1000);
    }

    function changeToFutures() {
        container.textContent = " FUTURES";
        setTimeout(changeToschools, 1000);
    }
    function changeToschools() {
        container.textContent = " SCHOOLS";
        setTimeout(changeToLegacies, 1000);
    }

    window.addEventListener("load", function () {
        setTimeout(changeToschools, 1000);
    });
</script>
    <section>
        <div class="part1">
            <h2> SUPPORT OUR MISSION TO </h2>
            <h5> PROTECT & KEEP CHILDREN</h5>
            <p> Together, safe and healthy. Your support directly funds school construction through our trusted
                on-the-ground partners and local builders who use local resources.</p>
            <br>
            <div class="part2">
                <h1 id="count">0</h1>
                <script>
                    const h1Element = document.getElementById('count');
                    let count = 0;
                    const intervalId = setInterval(() => {
                        h1Element.textContent = count;
                        count++;
                        if (count > 500) {
                            clearInterval(intervalId);
                        }
                    }, 10);
                </script>
                <p>SCHOOLS BUILT</p>
                
            </div>
            <div class="part2">
                <h1 id="counter">0</h1>
                <script>
                    const h11Element = document.getElementById('counter');
                    let counter = 0;
                    const intervaalId = setInterval(() => {
                        h11Element.textContent = counter;
                        counter++;
                        if (counter > 1950) {
                            clearInterval(intervaalId);
                        }
                    }, 5);
                </script>
                <p>STUDENTS EDUCATED </p>
            </div>
            <div class="part2">
                <h1 id="ccount">0</h1>
                <script>
                    const hh1Element = document.getElementById('ccount');
                    let ccount = 0;
                    const iintervalId = setInterval(() => {
                        hh1Element.textContent = ccount;
                        ccount++;
                        if (ccount > 10) {
                            clearInterval(iintervalId);
                        }
                    }, 100);
                </script>
                <p style="margin-left: 14px;">COMMUNITIES</p>
            </div>
            <button onclick="document.location='/mssschools/partie1sahar/partie1.html'">About Us</button>
        </div>
        
        <br>
        <div style="margin-bottom: 0px;">
            <div class="background">
                <div class="transbox">
                    <h3> WE EXIST BECAUSE</h3>
                    <h2> WE BELIEVE</h2>
                    <p> THAT NO CHILD SHOULD BE FORCED TO STUDY OUTSIDE, OR IN A DANGEROUS ENVIRONMENT.</p>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div class="class1">
                <h1> LOCALLY SOURCED</h1>
                <h4>LEADERS, LABOR, DESIGN & Materials </h4>
                <button onclick="document.location='#Learn'">Learn More</button>
            </div>
            <div class="class2">
                <h1> 100% <br> MODEL</h1>
                <h4>100% OF DONATIONS, GO TO CONSTRUCTION </h4>
                <button onclick="document.location='#Learn'">Learn More</button>
            </div>
            <div class="class3">
                <h1> GET <br> INVOLVED</h1>
                <h4>LEARN MORE ABOUT SPONSORING A SCHOOL</h4>
                <button onclick="document.location='#Learn'">Learn More</button>
            </div>
    </section>
    </div>
    <div class="partiemay">
        <div class="how_it_works">
            <h1>How It Works:</h1>
            <h2>$ 4 , 0 0 0 = </h2>
            <img src="baef.png">
            <h3> We offer a scalable, efficient, established model for </h3>
            <h3>empowering local leaders & construction teams to build schools </h3>
            <h3> for at risk members of their own communities. </h3>
            <div class=partie4><button type="button"><a href=get_involved.html> Involved →</a></button></div>
        </div>
        <div class="image-container">
            <div class="image-box">
                <img src="mamma.jpg" alt="Image 1">
                <div class="image-text">
                    <h3>Kenya Primary School</h3>
                    <p>The school was built in 2016, giving the chance to 400 students to enroll in school and get proper
                        education in order to achieve their dreams.</p>
                </div>
            </div>
            <div class="image-box">
                <img src="thre.jpg" alt="Image 2">
                <div class="image-text">
                    <h3>South Africa Primary School</h3>
                    <p>The school was built in 2020, giving the chance to 300 students to enroll in school and get proper
                        education in order
                        to achieve their dreams.</p>
                </div>
            </div>
            <div class="image-box">
                <img src="girls_raise_their_hands_in_response_to_the_question.jpg" alt="Image 3">
                <div class="image-text">
                    <h3>Malawi Secondary school</h3>
                    <p>The school was built in 2019, giving the chance to 100 students to enroll in school and get proper
                        education in order
                        to achieve their dreams.</p>
                </div>
            </div>
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
            <a href="#Facebook"><img src="fb.png" width="45px" height="45px"></a>
            <a href="#Insta"><img src="insta.png" width="45px" height="45px"></a>
            <a href="#Youtube"><img src="ytb.png" width="45px" height="45px"></a>
    
    
        </footer>
    </div>
  
</body>



</html>