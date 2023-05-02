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
    <link rel="stylesheet" href="partie3.css">
    <link rel="stylesheet" href="nav.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 </head>
 <body>
    <DIV class="partie1">
        <img class="image"
    
    src="banya.jpg"
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





    
    
    </DIV>
    
    </DIV>
    <P class="titre1"  >  YOUR DONATIONS,</P>
    <P class="disc1"> Go 100%, Directly to the Field</P>
    </DIV>
    <div class="partie8">
        <h1 class="our">WE PROVE  </h1>
         
            <P class="history">EVERY PROJECT</P> 
            <p class="build" > Thanks to our generous board and a few designated donors - all operating expenses of our <br> organization are underwritten and taken care of outside of donor funds. That means <br> that your generous donations go 100% toward building homes!  </p>
              
      </div>
      <img src="don.png" alt="DONA"class="center">
      <br>
      <br><br>
      <DIV class="partie8">
        <img class="ima"
          
        src="k.jpeg"
        alt="" height="800px"
      > 
      <P class="don"  > Learn How We <br>
        PROVE
        <br> EVERY PROJECT
        </P>
      
      
      </DIV>
      
      <div class="partie9">
       
        <div class="ty">
          <p style=" font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 70px;">
          YOU GIVE <br>
          GENEROUSLY</p>
          <p class="we" > We serve as a catalyst to connect generous individuals <br> and their
           finances to the pressing needs of students. The <br> cost of an entire school is $20,000, and with our 100% <br> Giving Model, every dollar goes towards school <br> construction. However, we believe when you give, you’re <br> investing in so much more than bricks and concrete.</p>
        </div>
        <div class="ism">
          <img src="KS.jpg" height="400PX" width="400PX" style=" border-radius: 30PX;">
        </div>
      </div>
      <div class="partie10">
        <div class="ism1">
          <img src="blob.jpg" height="400PX" width="400PX" style=" border-radius: 30PX;">
        </div>
        <div class="ty1">
          
          <p style=" font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 70px;">
          WE <br>
      BUILD IT</p>
          <p class="we1" >  Our local labor teams construct each school <br> with locally sourced materials. And once the school   <br> is complete, the students are presented with <br> their new school.  That is the highlight of our ministry.</p>
        </div>
        
      </div>
      <div class="partie11">
       
        <div class="ty">
          <p style=" font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 70px;">
          WE  <br>
          PROVE IT</p>
          <p class="we" > We prove our projects in 3 core ways:
            <ol>
              <li> to our Community Sponsors, who give a total school(s),<br> we match funds and send you details of the students you <br> helped provide a good life</li>
              <li>  to our general sponsors, we share photos through our <br> social media and email newsletters.</li>
            <li>  we are totally transparent with our financials.  You can <br> see where your money goes through Guidestar, and we  <br>are certified with their platinum level of transparency.</li>
            </ol>
          </p>
        </div>
        <div class="ism">
          <img src="HH.jpg" height="460PX" width="400PX" style=" border-radius: 30PX;">
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
 </body>
 </html>