<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="givingsub.css">
   
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

    <title>GIVE</title>
</head>
<body>
    
        <img class="image" src="School.jpg" alt="">
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
        <h1>GIVE TODAY </h1>
       <h2>Give children the chance to learn</h2>
    <p>At MSS schooling, we believe that we are global citizens connecting to a purpose bigger than ourselves. Safe and
    secure schools positively impacts multiple generations of children and allows them to learn in order to achieve their dreams. A school can be built for only $4,000 - changing children' world for the better.<br><br>
    
    
    
  We know that the impact of a school goes beyond 4 walls. A school changes everything.</p>
        </div>
        
            <form action="/mssschools/connect.php" method="post">
            <div class="form-group">
                
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" >
            </div>
        
            <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" >
            </div>
        
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" >
            </div>
        
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="tel" id="number" name="number">
            </div>
        
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment"></textarea>
            </div>
        
            
        <div class="form-group">
        
            <label for="project">Project</label>
            <br>
                <label for="Kenya" class="radio-inline"><input type="radio" name="project" value="LIBREVILLE PROJECT" id="kenya" />LIBREVILLE PROJECT</label>
                <label for="Malawi" class="radio-inline"><input type="radio" name="project" value="DAKAR PROJECT"
                        id="Malawi" />DAKAR PROJECT</label>
                <label for="Ghenya" class="radio-inline"><input type="radio" name="project" value="KAMPALA PROJECT"
                        id="Ghenya" />KAMPALA PROJECT</label>
            
        </div>
        
            <div class="form-group">
                <label for="paymentMethod">Donate with your preferred payment method:</label>
                <br>
                <label for="CC" class="radio-inline"><input type="radio" name="paymentMethod" value="Credit Card" id="CC" />Credit Card</label>
                <label for="bt" class="radio-inline"><input type="radio" name="paymentMethod" value="Bank Transfer" id="bt" />Bank Transfer</label>
                    
                
                
            </div>
             <div class="form-group">
                
                <label for="amount">Please type in the amount:</label>
                <textarea id="amount" name="amount"></textarea>
                    
                
                
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
            
            
        </div>
        </form>
            
        


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