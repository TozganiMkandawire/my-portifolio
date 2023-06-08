<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$db_name = "my_portifolio";
$conn->select_db($db_name);
$table_name= "projects";
?>

  <ul class="menu">
        <li><a href="index.php"> HOME</a></li>
        <li><a href="AboutMe.php"> ABOUT </a></li>
        <li><a href="projects.php"> PROJECTS </a></li>
        <li><a href="skill.php"> SKILL</a></li>
        <li><a href="contact.php"> CONTACTS</a></li>
        </ul>
        </nav>

<h1 style="text-align:center">MY CREATIVE SECTION</h1>

<div class="row">
  <div class="column">
    <img src="WOF.jpg" style="width:80%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="pic14.jpg" style="width:80%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="pic9.png" style="width:80%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
 

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="WOF.jpg" style="width:40%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="pic14.jpg" style="width:40%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="pic9.png" style="width:40%">
    </div>
    

    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="WOF.jpg" style="width:50%" onclick="currentSlide(1)" alt="I do graphics designing, posters, fliers and whatnote">
    </div>
    <div class="column">
      <img class="demo cursor" src="pic14.jpg" style="width:50%" onclick="currentSlide(2)" alt="I develop mobile apps, like the one displayed here">
    </div>
    <div class="column">
      <img class="demo cursor" src="pic9.png" style="width:50%" onclick="currentSlide(3)" alt="I develop database systems. i created this system fo a health operation">
    </div>
    
  </div>
</div>
<style>
  #progress-bar{
              width:20%;
              height: 20px;
              background-color: black;
          }
          .row > .column {
  padding: 0 8px;
}

  
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
  font-size: small;
  color: black;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
* {
            background-color:#efc9af;
            }
li  {
          	display: inline;
          	padding: 50px;
          }
          ul a{
	text-decoration: none;
  color: #104c91;
          }
          h1 {
                color:#104c91 ;
                font-family: Brush Script MT;
                font-size: 400%;
                text-align: center;
              }
          .footer{
            position: fixed;
            left: 10px;
            bottom: 5px;
            width: 95%;
            color: white;
            text-align: right;
          }
</style>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}

            function updateProgressBar(){
                var progressBar=document.getElementById("progress-bar");
                var progress=0;
                var intervalId=setInterval(frame, 10);

                function frame(){
                    if (progress >=45){
                        clearinterval(intervalid);
                        
                    }
                    else{
                        progress++;
                        progressBar.style.width=progress +"%";
                    }
                }

            }
           
       
</script>
   
           
            <div class="footer"> <meta name="viewport" content="width=device-width, initial-scale=1">
              <div id="progress-bar"></div>
                      <button onclick="updateProgressBar()">check progress</button></div> 
                      <?php
    require_once 'connect.php';
$query="SELECT id ,projectName, description FROM projects";
$result=mysqli_query($connect,$query);

if(!$result){
  die("Error:".mysqli_error($connect));
}
  ?>
<div class ="projects-container">
<?php while($row = mysqli_fetch_assoc($result)) {?>
<div class="projects-card" data-category="all">
<h2><?php echo $row['projectName'];?></h2>
<p><?php echo $row['description'];?></p>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($connect);
?>
   
           

</body>
</html>
