<!DOCTYPE html>
<html>
<body>

  <ul class="menu">
        <li><a href="index.php"> HOME</a></li>
        <li><a href="projects.php"> PROJECTS </a></li>
        <li><a href="skill.php"> SKILL</a></li>
        <li><a href="contact.php"> CONTACTS</a></li>
        </ul>
        </nav>

<h1 style="text-align:center">MY CREATIVE SECTION</h1>
<?php
    require_once 'connect.php';
$query="SELECT id ,projectName, description FROM projects";
$result=mysqli_query($connect,$query);

if(!$result){
  die("Error:".mysqli_error($connect));
}
  ?>
<?php while($row = mysqli_fetch_assoc($result)) {?>
<h2><?php echo $row['projectName'];?></h2>
<p><?php echo $row['description'];?></p>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($connect);
?>
   

<div class="row">
  <div class="column">
    <img src="WOF.jpg" style="width:80%" onclick="openModal();currentSlide(1)">
  </div>
  <div class="column">
    <img src="pic14.jpg" style="width:80%" onclick="openModal();currentSlide(2)">
  </div>
  <div class="column">
    <img src="pic9.png" style="width:80%" onclick="openModal();currentSlide(3)">
  </div>
 

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="WOF.jpg" style="width:40%">
    </div>

    <div class="mySlides">
      <img src="pic14.jpg" style="width:40%">
    </div>

    <div class="mySlides">
      <img src="pic9.png" style="width:40%">
    </div>
    

    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo cursor" src="WOF.jpg" style="width:50%" onclick="currentSlide(1)" alt="I do graphics designing, posters, fliers etc">
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
         

* {
  box-sizing: border-box;
}
p  {
            color: #1f8ac0;
            font-family: Arial Rounded MT Bold;
            font-size: 160%;
          }
.column {
  float: left;
  width: 25%;
}

.modal {
  display: none;
  position: fixed;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

.close {
  position: absolute;
  top: 10px;
  right: 25px;
}

.cursor {
  cursor: pointer;
  font-size: large;
  color: black;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.caption-container {
  text-align: center;
  padding: 2px 16px;
  color: black;
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
                      
           

</body>
</html>


