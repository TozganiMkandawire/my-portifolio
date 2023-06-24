<!DOCTYPE html>
<html>
    <body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
$dbname = "my_portifolio";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "hey!";
?>

        <title>Tozgani's portifolio</title>
        <header>
        </header>
        <ul class="menu">
        <li><a href="index.php"> HOME</a></li>
        <li><a href="projects.php"> PROJECTS </a></li>
        <li><a href="skill.php"> SKILL</a></li>
        <li><a href="contact.php"> CONTACTS</a></li>
        </ul>
        </nav>
        <h1>TozzieJoy</h1>
        <div id="greeting"></div>
         
        </div>
        <p>My name is,</p>
        <h2>Tozgani Joy<br> Mkandawire</h2>
        <p>...and I am a female programmer.</p><br>
        <h1>ABOUT ME!</h1>
        <img src="pic.jpg" width="400" height="300" class ="center";>
        <P>I am a level 2 student studying bachelor of science in ICT at Mzuzu University. As a goal driven and goal oriented student, I am very passionate to learn all I can in the ICT field. As much as I have only been an ICT student for short while, I have been able to get knowledge about a lot of stuff in the ICT field. So far, I have been able to learn how to program in the C language, JAVA and other programming languages. I have also learnt how to troubleshoot and fix computers as well as maintain them<a href="skill.php"> view more</a></P>
        
        <div class="slideshow-container">
          <div class="mySlides ">
            <img src="WOF.jpg" style="width:50%">
          </div>
        
          <div class="mySlides ">
            <img src="pic9.png" style="width:50%">
          </div>
        
          <div class="mySlides ">
            <img src="pic14.jpg" style="width:50%">
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
          <span class="plate" onclick="currentSlide(1)"></span>
          <span class="plate" onclick="currentSlide(2)"></span>
          <span class="plate" onclick="currentSlide(3)"></span>
        </div>
        <style>
            h1 {
                color: #104c91;
                font-family: Brush Script MT;
                font-size: 400%;
                text-align: center;
              }
              h2 {
                color: #1f8ac0;
                font-family: Brush Script MT;
                font-size: 300%;
                
              }
          p  {
            color:#1f8ac0;
            font-family: Arial Rounded MT Bold;
            font-size: 160%;
          }
          li  {
            display: inline;
            padding: 60px;
          }
          ul a{
  text-decoration: none;
  color: #104c91;
          }
          
          .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%
          }
          .footer{
            position: fixed;
            left: 10px;
            bottom: 5px;
            width: 95%;
            color: white;
            text-align: right;
            font-size: 160%;
          }
          * {
            background-color:#efc9af;
          
}

* {box-sizing:border-box}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.text {
  color: white;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

            </style>

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
    var plates = document.getElementsByClassName("plate");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < plates.length; i++) {
        plates[i].className = plates[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    plates[slideIndex-1].className += " active";
  }
  const greeting = document.getElementById('greeting');
  const hour = new Date().getHours();
  const welcomeTypes = ['Hello and Good morning', 'Hello and Good afternoon', 'Hello and Good evening'];
  let welcomeText = '';
  if (hour < 12) welcomeText = welcomeTypes[0];
else if (hour < 18) welcomeText = welcomeTypes[1];
else welcomeText = welcomeTypes[2];
greeting.innerHTML = welcomeText;

  </script>
            
            <div class="footer">call: 0885238420<br>0995459792<br>or Email on mkandawiretozgani@gmail.com</div>

           
    </body>
    </html>
        

