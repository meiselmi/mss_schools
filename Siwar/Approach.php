<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approach</title>
    <link rel="stylesheet" href="/mssschools/about.css">
    <link rel="stylesheet" href="Work.css">
    <link rel="stylesheet" href="StyleFoot.css">
</head>
<body>
    <img class="image" src="School Africa.jpg" alt="">
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
        <p class="building">WHAT WE DO</p>
        <div id="typing-effect" class="effect">Every child in School. Every child learning</div>
    
    
    </DIV>
          <div style="margin-bottom: 600px;">
            <div class="background">
                <div class="transboxe">
                 
                </div>
              </div>
            </div>
            <div class="all">
                <div class="rightone">
                    <h2>
                        BUILD A SCHOOL
                    </h2>
                    <p> 
                        We're building safe and secure classrooms, so that children can focus on their learning, and their futures. 
                        We have built a classroom block with offices, staff rooms, a store and a library so children can learn in a safe and productive environment. The schoolalso boasts a kitchen, latrines, books and desks and a playground, so that children can stay happy and healthy while learning.  
                    </p>
                    </div>
                <div class="leftone">
                    <img id="image" src="bel-arbre-aux-ruines-archeologiques-pompei-herculanum.jpg" width="400" height="400">
                </div>
                

            </div>
            <div class="all">
                <div class="rightone">
                    <img id="image" src="Water.jpg" width="400" height="400">
                </div>
                <div class="leftone">
                    <h2>
                        WATER AND SANITATION
                    </h2>
                    <p> 
                        Every child should have access to clean water and well constructed toilets at school. Without access to clean water at school, children can be forced to walk miles to get a drink and wash. They often have to drink dirty water from swamps, which can make them ill with diseases. They end up missing lessons, and falling behind in class.
                    </p>
                </div>
             
                </div><div class="all">
                <div class="rightone">
                    <h2>
                        CLASSROOM RESOURCES
                    </h2>
                    <p> 
                        Without desks and books, children who are in school will not be able to learn. Children also struggle without access to textbooks. In many cases, classrooms don't have any books at all. This makes it hard to follow what the teacher is saying, and means that children are far less likely to leave school knowing how to read.
                    </p>
                                </div>
                <div class="leftone">
                    <img id="image" src="Resources2.jpg" width="400" height="400">
                </div>
            </section>
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
                </div><form>
                <div>
                
                    <h3>Good News delivred to Your Inbox</h3>
                    <input type="text" placeholder="Your name">
                    <input type="email" placeholder="Your email">
                    <input type="submit" value="Sign In">
                </div></form>
                <br>
               <button onclick="document.location='work.html'">Contact Us</button>
               <a href="#Facebook"><img src="face-removebg-preview.png" width="45px" height="45px"></a>
               <a href="#Insta"><img src="inta.png" width="45px" height="45px"></a>
               <a href="#Youtube"><img src="yout.png" width="45px" height="45px"></a>
                     
               
            </footer>
    
    
</body>
</html>