<?php
session_start();

// Generate a random 5-digit captcha code
$captcha_code = rand(10000, 99999);
$_SESSION['captcha'] = $captcha_code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Results</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6d365, #fda085);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container{
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius:9px;

        }
        
        form{
            padding: 20px;
            border: 1px solid #ccc;
            border-radius:9px;
            display:flex;
            flex-direction: column;

        }
        input{
            padding: 15px;
            margin-bottom:16px;
        }
        .btn{
            background-color:skyblue;
            border:none;
            border-radius:6px;
        }
    </style>


</head>
<body oncontextmenu="return false;";>
   <div class="container">
    <form action="results.php" method="post">
        <h2>Enter your roll number</h2>
        <input type="text" name="rollno" id="rollno" placeholder="Roll Number" required>

    <h2>Enter Captcha:</h2>
    <input type="text" name="captcha" placeholder="Enter Captcha" required>
    <!-- Show captcha text as an image -->
    <img src="captcha.php" alt="CAPTCHA Image">


        <input type="submit" value="Check Result" class="btn">
    </form>
   </div> 
</body>
</html>