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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>
<body>
 
    



            
                        <img class="image" src="3.jpg" alt="">
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
    <h1>JOIN THE COMMUNITY </h1>
    <h2>SPONSOR A SCHOOL</h2>
    <p>By becoming a partner and donating to build schools for people in need, you can help break the cycle of poverty and provide a brighter future for generations to come. Your contribution can make a significant impact on the lives of these individuals and communities, and help them realize their full potential. Let's work together to make education a reality for all!. As a business partner with us, you will create a lasting impact that reaches far beyond the construction of building a school for people in need.<br><br> As a part of our commitment to proving every project, we provide information and photos of the children you’ve helped.</p>
    </div>
    <div class="partie3">
    <h3>$ 4 , 0 0 0 = </h3>
    <img src="baef.png">
    </div>
    <div class="partie4"> <button onclick="redirectToLogin()">DONATE HERE</button>
    
    <script>
        function redirectToLogin() {
            window.location.href = "/mssschools/LOGIN/login.php";
        }

       
    </script>

   
    

    
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