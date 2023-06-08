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

        <title>About</title>
        <ul class"menu"
        <li><a href="index.php"> HOME</a></li>
        <li><a href="AboutMe.php"> ABOUT</a></li>
        <li><a href="projects.php"> PROJECTS </a></li>
        <li><a href="skill.php"> SKILL</a></li>
        <li><a href="contact.php"> CONTACTS</a></li>
         </ul>
        <h1>ABOUT ME!</h1>
        <img src="pic.jpg" width="400" height="300" class ="center";>
        <P>I am a level 2 student studying bachelor of science in ICT at Mzuzu University. As a goal driven and goal oriented student, I am very passionate to learn all I can in the ICT field. As much as I have only been an ICT student for short while, I have been able to get knowledge about a lot of stuff in the ICT field. So far, I have been able to learn how to program in the C language, JAVA and other programming languages. I have also learnt how to troubleshoot and fix computers as well as maintain them</P>
        
        <style>
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
          	padding: 60px;
          }
          ul a{
	       text-decoration: none;
         color: #104c91;
          }
          img {border-radius: 80%;
          } 
          
          .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%

          }
          </style>
        </body>
        </html>