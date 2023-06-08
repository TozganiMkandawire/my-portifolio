<!DOCTYPE html>
<html>
<body>
<h1>mySkills</h1>
<ul class="menu">
<li><a href="index.php"> HOME</a></li>
<li><a href="AboutMe.php"> ABOUT</a></li>
<li><a href="projects.php"> PROJECTS </a></li>
<li><a href="skill.php"> SKILL</a></li>
<li><a href="contact.php"> CONTACTS</a></li>
 </ul>

  <div id="progress-bar"></div>
        <button onclick="updateProgressBar()">check progress</button>
        </div>
  
<style>
  .skills{
    color: #104c91;
    font-family: Brush Script MT;
    font-size: 400%;
  }
   #progress-bar{
              width:20%;
              height: 5px;
              background-color: black;
          }
          .row > .column {
  padding: 0 8px;
}
h1 {
                color: #104c91;
                font-family: Brush Script MT;
                font-size: 400%;
                text-align: center;
              }
p  {
            color: #1f8ac0;
            font-family: Arial Rounded MT Bold;
            font-size: 160%;
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
  </style>
  <?php
    require_once 'connect.php';
$query="SELECT id ,skillName, descrition FROM skills";
$result=mysqli_query($connect,$query);

if(!$result){
  die("Error:".mysqli_error($connect));
}
  ?>
<div class ="skill-container">
<?php while($row = mysqli_fetch_assoc($result)) {?>
<div class="skill-card" data-category="all">
<h2><?php echo $row['skillName'];?></h2>
<p><?php echo $row['descrition'];?></p>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($connect);
?>

  </body>
  </html>