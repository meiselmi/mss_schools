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
    <link rel="stylesheet" href="imageslide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    
    <div class="scrolling-text">
        <span>YOU CAN SEE OUR PROJECTS HERE PLEASE DONATE TO GIVE THE CHILDREN THEIR RIGHT IN EDUCATION .</span>
      </div>
      <DIV class="partie1">
        <img class="image"
    
    src="happy-friends-hugging-medium-shot.jpg"
    alt=""
  > 
              
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
  <div class="building" id="typing-effect" class="effect" style="color: hsl(40, 82%, 42%);" >OUR CURRENT</div>
  <p class="building" style="color: antiquewhite;"> Projects</p>
  
  </DIV>
  <div class="KTIB">
  <h1 style="color:#a9a960; font-size: 30px;" > SOME OF OUR CURRENT PROJECTS</h1>
    <div class="container">
    <div class="flex-container">
        <div class="class1" style="margin-left: 7%"><h1 style="margin-top:60%;">LIBREVILLE PROJECT</h1>
        <h4> GABON </h4>
        <div class="btn from-left" onclick="redirectToPage()">SEE MORE</div>
        
        <script>
          function redirectToPage() {
            window.location.href = "/mssschools/project.php";
          }
        </script>
        </div>
        
        <div  class="class2" style="margin-left: 4%"><h1 style="margin-top:10%;">DAKAR PROJECT</h1>
            <h4>SENEGAL </h4>
            <div class="btn from-left" onclick="redirectToPagee()">SEE MORE</div>
            
            <script>
              function redirectToPagee() {
                window.location.href = "/mssschools/project1.php";
              }
            </script>
            </div>
        <div class="class3"style="margin-left: 4%;margin-right: 15px"><h1 style="margin-top: 60%;"> KAMPALA SCHOOL</h1>
                <h4>UGANDA</h4>
                
                <div class="btn from-left" onclick="redirectToPage1()">SEE MORE</div>
                
                <script>
                  function redirectToPage1() {
                    window.location.href = "/mssschools/project2.php";
                  }
                </script>

                </div>
            </div>
        </div>
      </div>
        <DIv class="DD">
        <h1 style="color:#a9a960; font-size: 30px;" class="sahar" > SOME OF OUR PREVIOUS PROJECTS</h1>
        
          
        <div class="SAHROUR">
          <div class="mySlides fade">
            
            <img src="school2.jpg" style="width:50%;margin-left: 310px;">
           
           
          </div>
          <div class="mySlides fade">
          
            <img src="school1.jpg" style="width:50%; margin-left: 310px;">
         
           
          </div>
          <div class="mySlides fade">
             
              <img src="school3.jpg" style="width:50%;margin-left: 310px;">
             
              
            </div>
            <div class="mySlides fade">
             
              <img src="school4.jpg" style="width:50%;margin-left: 310px;">
             
              
            </div>
            <div class="mySlides fade">
              <img src="school5.jpg" style="width:50%;margin-left: 310px">
             
              
            </div>
            
        </div>
      </DIv>
        <br>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
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
<script>
  
          var slideIndex = 1;
          showSlides(slideIndex);
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if(n > slides.length) {
              slideIndex = 1
            }
            if(n < 1) {
              slideIndex = slides.length
            }
            for(i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for(i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
          }
        
    const container = document.getElementById("typing-effect");
    
      function changeToLegacies() {
        container.textContent = "OUR CURRENT";
        setTimeout(changeToFutures, 1000);
      }
      
      function changeToFutures() {
        container.textContent = "OUR PREVIOUS";
        setTimeout(changeToLegacies, 1000);
      }
      
      
      window.addEventListener("load", function() {
        setTimeout(changeToFutures, 1000);
      });
      </script>
</html>