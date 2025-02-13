<?php 

//Inlude diri ang server.php para maka gamit tas function 
include './server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>

    <style>
        body {
            position: relative;
            margin: 0;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Background with Blur Effect */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("image/comp.jpg") no-repeat center center/cover;
            filter: blur(8px); /* Adjust blur level */
            z-index: -1;
        }

        .wrapper {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            width: 450px;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        img {
            width: 120px;
            height: 120px;
            margin-bottom: 10px;
        }


    </style>
</head>
<body>
    <div class="wrapper">

            <img src="image/ccs.png" alt="CCS LOGO">
            <h1>WELCOME TO CCS SIT-IN MONITORING SYSTEM</h1>
    
    </div>   
</body>
</html>
