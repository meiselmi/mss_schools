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
    <link rel="stylesheet" href="get.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

</head>

<body>

    
        <img class="image" src="Jouerr.jpg" alt="">
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
        <h1>A LITTLE BIT </h1>
        <h2>GOES A LONG WAY</h2>
        <div class="container">
            <div class="item1">
                <div class="container2"><img src='cf.png'>
                    <h5>Concrete Floor <br> $45/mo</h5>
                    <p>A concrete floor for 1<br> home costs $500, or<br> $45/mo for a year.</p>
                </div>
            </div>
            <div class="item2">
                <div class="container2"><img src='key.png'>
                    <h5>Doors & Windows <br> $35/mo</h5>
                    <p>Locking doors and windows<br>for 1 home cost $400,or<br> $35/mo for a year.</p>
                </div>
            </div>
            <div class="item3">
                <div class="container2"><img src="bricks.png">
                    <h5>Concrete Floor <br> $45/mo</h5>
                    <p>A concrete floor for 1<br> home costs $500, or<br> $45/mo for a year.</p>
                </div>
            </div>
            <div class="item4">
                <div class="container2"><img src="cm.png">
                    <h5>construction Manager<br>$175/mo</h5>
                    <p>Hiring a construction<br> supervisor for multiple<br> homes costs $175/mo.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="item5">
                <div class="container2"><img src="cw.png">
                    <h5>Construction Manager<br>$175/mo</h5>
                    <p>Hiring a construction <br> supervisor for multiple<br> homes costs $175/mo</p>
                </div>
            </div>
            <div class="item6">
                <div class="container2"><img src="md.png">
                    <h5>Material Delivery <br> $75/mo</h5>
                    <p>Material delivery for 1<br> entire community costs<br> $75/mo.</p>
                </div>
            </div>
            <div class="item7">
                <div class="container2"><img src="home.png">
                    <h5>Fund a Whole Home <br>$333/mo<p>Fund an entire school<br> ($4,000) over the course<br> of a year,
                            $333/mo.</p>
                    </h5>
                </div>
            </div>
            <div class="item9">
                <div class="container2"><img src="mr.png">
                    <h5>Metal Roof <br>$30/mo</h5>
                    <p>A strong roof for 1 home<br> costs $360, or $30/mo <br>for a year.</p>
                </div>
            </div>
        </div>
    
    </div>
<div class="partie4"> <button type="button"><a href="/mssschools/projet/imageslide.php">CHECK OUR PROJECTS →</a></button></div>
    
    
    
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