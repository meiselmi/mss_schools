<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mssschools/about.css">
    <link rel="stylesheet" href="Work.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="StyleFoot.css">
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Document</title>
</head>
<body>
    <section>
            <img class="image" src="Reading2.jpg" alt="">
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
            <p class="building">WHY SCHOOLS</p>
            <div id="typing-effect" class="effect">“Education is the door to freedom, democracy and development”</div>
            
            
            </DIV>
            
            
            
            
            
            
          <div style="margin-bottom: 600px;">
            <div class="backgrounds">
                <div class="transbox">
                  
                </div>
              </div>
            </div>  
                <div class="part1">
                    <h1> THE GLOBAL NEED</h1>
                   <p>
                    Access to quality education is a key factor in empowering children to become active participants in the transformation of their societies. <br>
    <br>
    It has been identified as one of the U.N’s 17 Global Goals to end poverty, protect the planet and ensure prosperity for all. We believe that a quality education is a right for all children not just a privilege for some.
    <br><br>
    There are still 57 million children in the world who are not enrolled in education and more than half of these live in sub-Saharan Africa.
                   </p>
                <br>
                
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