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
echo "Connected successfully";
?>

        <title>Tozgani's portifolio</title>
        <header>
        </header>
        <ul class="menu">
        <li><a href="index.php"> HOME</a></li>
        <li><a href="AboutMe.php"> ABOUT </a></li>
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
        <div class="slideshow-container">
          <div class="mySlides fade">
            <img src="pic10.webp" style="width:50%">
            <div class="text">full stack developer</div>
          </div>
        
          <div class="mySlides fade">
            <img src="pic11.png" style="width:50%">
            <div class="text">database administrator</div>
          </div>
        
          <div class="mySlides fade">
            <img src="pic12.jpg" style="width:50%">
            <div class="text">server administrator</div>
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
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
          .footer{
            position: fixed;
            left: 10px;
            bottom: 5px;
            width: 95%;
            color: white;
            text-align: right;
          }
          * {
            background-color:#efc9af;
          
}
.footer{
            position: fixed;
            width: 90%;
            color: white;
            text-align: right;
            font-size: 160%;
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
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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


div {
  border-radius: 3px;
  font-size: 3rem;
  
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
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  const greeting = document.getElementById('greeting');
  const hour = new Date().getHours();
  const welcomeTypes = ['Good morning', 'Good afternoon', 'Good evening'];
  let welcomeText = '';
  if (hour < 12) welcomeText = welcomeTypes[0];
else if (hour < 18) welcomeText = welcomeTypes[1];
else welcomeText = welcomeTypes[2];
greeting.innerHTML = welcomeText;
  </script>
            
            <div class="footer">call: 0885238420<br>0995459792<br>or Email on mkandawiretozgani@gmail.com</div>

           
    </body>
    </html>
        