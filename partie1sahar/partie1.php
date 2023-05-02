<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="partie1.CSS">
    <link rel="stylesheet" href="nav.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <DIV class="partie1">
        <img class="image"
    
    src="studying-tips-1.webp"
    alt=""
  > 
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
  <p class="building">BUILDING</p>
  <div id="typing-effect" class="effect">SCHOOLS</div>



</DIV>

     <P class="titre"  > ABOUT US</P>
     <P class="disc"> Our story  </P>
     
  
  <div classe="partie2">
      <h1 class="our">OUR</h1>
      <P class="history">HISTORY</P> 
      <P class="INTRO">MSS for schools  was founded by  groupe of friends as  desire to help children to be educated .  
          <br>
        The model was simple: to engage their partners in the real estate community  to give
        <br>
        a portion of their income to build schools  for families in developing countries. </P>
  <br>
   <p class="discrip"> In a short amount of time, individuals and companies made generosity a part of their business model <br>
      by giving to MSS SCHOOLS.  Now, donors from all walks of life are giving to provide schools to children<br> 
      in need. We are currently working in 4 countries with ministry partners that know and serve the people <br>of their communities.  </P>
  
  </div>
  <div class="partie3">
      <h1 class="our">WE</h1>
      <P class="history">BELIEVE</P> 
      <P>
      <ul class="belive">
          <LI class="b">We believe that we are global citizens connecting to a purpose bigger than ourselves.</LI>
          
          <li>   Education is vital to a child living a full life and reaching their potential.</li>
          
          <li>We believe that every child has the right to a quality education, no matter their circumstances. <br> Every school can be a vibrant school community that puts children first. </li>
          
          <li>Every child deserves a chance to survive, a chance to learn, a chance to dream.</li>
  
      </uL>
      </P>
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