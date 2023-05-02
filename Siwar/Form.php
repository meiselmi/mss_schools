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
    <link rel="stylesheet" href="/mssschools/nav.css">
    
    <link rel="stylesheet" href="StyleFoote.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       
</head>
<style>
    
    *{
        box-sizing: border-box;
    }
    .container{
        display: block;
        width: 90%;
        margin-left: 70px;
    }
    input[type=text], select, input[type=email], input[type=number], textarea{
        border: 2px solid #111;
        background-color: #ffffff;
        padding: 15px 14px;
        -webkit-appearance: none;
        -moz-box-sizing: border-box;
width: 100%;
border-radius: 4px;
    }
    label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
    input[type=text]:hover, input[type=email]:hover, input[type=number]:hover{
        background-color: rgb(226, 226, 226);
    }
    input[type=text]:focus, input[type=email]:focus, input[type=number]:focus{
        background-color: whitesmoke;
    }
    .select{
        float: left;
        width: 100%;
        margin-top: 6px;
        cursor: pointer;
    }
    input[type=submit]{
        background-color: #CEAD6D;
        padding: 12px 14px;
        float: center;
        width: 25%;
        border-radius: 4px;
        border: 2px solid #CEAD6D;
        margin: 8px 500px;
        cursor: pointer;
        font-size: 25px;
        color:#ffffff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    input[type=submit]:hover{
        background-color: #a18b5e;
        box-shadow: 2px white;
        
    }
    input:focus:invalid {
  outline: none;
}
.invalid {
    color: rgb(0, 229, 255);
    border: 2px solid rgb(255, 0, 0);
}
h1{
    font-size: 70px;
    color: #CEAD6D;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 800;  
    text-align: center;
    margin-top: 20px;

    margin-top: 50px;
    margin-bottom: 40px;
}
h4{
    font-size: 16px;
    margin-top: -45px;
     color: rgb(0, 0, 0);
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 100;   
    text-align: center;
}
.error{ color: red;}


    
</style>

<body>
          
<div class="scrolling-text">
        <span>Welcome to our website MSS SCHOOLS,Donate please to help children in Africa to have their right in education.</span>
      </div>
      <DIV class="partie1">
        <img class="image"
    
    src="R (1).jpg"
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

  <img src="smile.jpg" alt="" width=100% height=80%>

<?php 
$email = $fname = $lname = $phonenumber = $pro = $country= $gender = $job = $quest= '';
$emailErr = $fnameErr = $lnameErr = $phonenumberErr = $proErr=  $countryErr = $jobErr=$genderErr = $questErr='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["firstname"])){

    $fnameErr= "Name is required";

  } else {
    $fname = test_input($_POST["firstname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
    $fnameErr = "Only letters and white space allowed";
}
  }
  

  
 

   
  if (empty($_POST["lastname"])){
    $lnameErr= "Last Name is required";
    

  } else {
    $lname = test_input($_POST["lastname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
    $lnameErr = "Only letters and white space allowed";
}
  }
  if (empty($_POST["email"])){
    $emailErr= "Email is required";

  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
      

  }
  if (empty($_POST["Phonenb"])){
    $phonenumberErr= "Phone number is required";


  } else {
    $phonenumber = test_input($_POST["Phonenb"]);
    
  }
  if ($_POST["projet"] == "") {
    $proErr= "Please Select a project";
  } else {
    $pro = $_POST["projet"];
  }
  if (empty($_POST["yourjob"])){
    $jobErr= "Work is required";


  } else {
    $job = test_input($_POST["yourjob"]);
    
  }
  if (empty($_POST["country"])){
    $countryErr= "Country is required";

  } else {
    $country = test_input($_POST["country"]);
    
  }
  if ($_POST["gender"] == "") {
    $genderErr= "Please Select your gender";
  } else {
    $gender = $_POST["gender"];
  }
 
if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($countryErr) && empty($genderErr) && empty($phonenumberErr) && empty($proErr) && empty($questErr) && empty($jobErr)){
    $con = mysqli_connect('localhost', 'root', '','form_connect');
     $sql = "INSERT INTO `fm_data` (`First Name`, `Last Name`, `Email`, `Phone Number`, `Job`, `Country`, `Gender`, `Project`, `question`) 
                            VALUES ('$fname', '$lname', '$email', '$phonenumber', '$job', '$country','$gender', '$pro','$quest')";

  if (mysqli_query($con, $sql)) {
    echo " ";
} else {
    echo "Error:" ;
}
mysqli_close($con);
}}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>  <section>
    <div>
        <h1 > Contact Us </h1>
        <h4> Have any questions? We'd love to hear from you</h4>
    </div>
    <div class="container">
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate onsubmit="return validateForm()">
           <div class="row">
          <div>         
            <legend><label for="name">First Name</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
          
          <input type="text" id="fname" name="firstname" placeholder="Name"  required>
          <span class="error"><?php echo $fnameErr; ?></span>
          </div>
        
           <legend><label for="lname">Last Name</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
          
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required >
            <span class="error"><?php echo $lnameErr;?></span>
            <div>
               <legend><label for="email">Your Email</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div>
                <legend><label for="Number">Phone Number</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
                <input type="number" id="number" name="Phonenb" placeholder="Your Phone Number" required>
                <span class="error"><?php echo $phonenumberErr;?></span>
            </div>
            <div>
               <legend><label for="job">Your Work</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
                <input type="text" id="fjob" name="yourjob" placeholder="Your Work" required>
                <span class="error"><?php echo $jobErr;?></span>
            </div>
            <div class="select">
           <label for="country">Country</label>
          <br>
            <div>
            
            <select id="country" name="country">
              <option value="australia">Tunisia</option>
              <option value="France">France</option>
              <option value="Autre">Other</option>
              

            </select>
            <span class="error"><?php echo $countryErr;?></span></div>
            </div>
            <div>
                <label for="gender">Your Gender</label>
                <input type="radio" name="gender" value="female" required name="gender" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> checked>Female
                <input type="radio" name="gender" value="male" required name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
                <span class="error"><?php echo $genderErr;?></span>    
            </div>
            <div class="row">
            <legend><label> WHICH PROJECT IS YOUR QUESTION ABOUT ?</label><abbr title="Ce champ est obligatoire">*</abbr></legend>
            <br>
                <select  id="project" name="projet">
                    <option value="">--Select--</option>
                    <option value="GABON"> Libreville Project</option>
                    <option value="SENEGAL"> Dakar Project</option>
                    <option value="UGANDA"> Kampala School</option>
                    </select>
                    <span class="error"><?php echo $proErr;?></span>
          </div>
          <div>
            <legend><label for="quest"> Your Question </label><abbr title="Ce champ est obligatoire">*</abbr></legend>
            <textarea name="Question" id="Quest" cols="30" rows="10" placeholder="Type your question here..."></textarea>          </div>
            
        </div>
                </div>
        <div class="row">
          <input type="submit" value="SUBMIT">
        </div>
        
    </form>        
      </div>
</section>
<div style="position:absolute;bottom: -1500px; width:100%;">
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
</div>
</body>
</html>