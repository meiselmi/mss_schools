<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partie2.CSS">
    <link rel="stylesheet" href="nav.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <DIV class="partie1">
    <img class="image"

src="d.jpg"
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




<P class="titre"  > SCHOOL DESIGN</P>
<P class="disc"> Sustainble + Authentic</P>

 
</DIV>

  </DIV>
  <div class="partie55">
    <h1 class="our">THE SCHOOLS</h1>
        <P class="history">WE BUILD</P> 
        <p class="build" > At SSM SChools, it’s important to us that the style of a school meets the cultural expectations <br> of a community.
          That’s why we use locally-sourced materials for our schools.  We collaborate with <br> local leadership to receive design approval, and each school is inspected at completion to meet <br> our quality standards.  </p>
          
  </div>
  <div class="partie56">
    <h1 class="our">
       
        EVERY HOME OFFERS</h1>
          <P class="history">KEY FEATURES</P> 
   
      
      <DIv class="partie6">
        <span class="row">
          
          <div class="column">
            <img src="1.png" alt="Snow" >
            <h1>concrete floor</h1>
            <p >Every school starts with a concrete floor, laying the foundation for a healthy and clean environment.</p>
          </div>
          <div class="column">
            <img src="2.png" alt="Forest" >
            <h1>Solid Roof Surface</h1>
      
      <p> solid roof protects students from weather elements and eliminates roof leaks.</p>
           
          </div>
          <div class="column">
            <img src="3.png" alt="Mountains" >
            <H1>Strong Walls</H1>
      
             <P> Brick, concrete, or stucco walls built to stand the test of time and provide a legacy of shelter.</P>
          </div>
        </span>
        <span class="row">
          <div class="column">
            <img src="4.png" alt="Snow"  >
            <h1 class="r">Door & Window Locks
      
              </h1>
            <p class="o">Locking doors and windows allow students to  work in peace without fear..</p>
          </div>
          <div class="column">
            <img src="5.png" alt="Forest">
            <h1>Rain Water Systems</h1>
      
      <p> Rain-catch water systems are installed at the schoolsite if disability hinders travel to local well</p>
           
          </div>
          <div class="column">
            <img src="6.png" alt="Mountains" >
            <H1>Entrance Ramps</H1>
      
             <P> Entrance ramps are installed for elderly and students  with disabilities to provide accessibility.</P>
      
      
          </div>
        </span>
        </div>
      </DIv>
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