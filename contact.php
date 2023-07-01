<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>

    <ul class="menu">
        <li><a href="index.php"> HOME</a></li>
        <li><a href="projects.php"> PROJECTS </a></li>
        <li><a href="skill.php"> SKILL</a></li>
        <li><a href="contact.php"> CONTACTS</a></li>
        </ul>
        
    <style>
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
       
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #104c91;
            font-family: Brush Script MT;
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #1f8ac0;
            font-size: 18px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #104c91;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_portifolio";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];

    $sql = "INSERT INTO contacts (Name, Number, email) VALUES ('$name', '$number', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "<p class='message success'>Data saved successfully!</p>";
    } else {
        echo "<p class='message error'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
}
?>


    <h1>Interested? Reach Me!!!</h1>

    <div class="container">
        <form method="POST">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name.." required>

            <label for="number">Phone Number</label>
            <input type="text" id="number" name="number" placeholder="Your number..." required>

            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="Your email address..." required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            var inputs = this.querySelectorAll("input[type='text']");
            var isValid = true;

            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value.trim() === "") {
                    isValid = false;
                    break;
                }
            }
               
            if (!isValid) {
                event.preventDefault();
                alert("Please fill in all fields.");
            }
        });
    </script>
</body>
</html>


