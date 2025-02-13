<?php
include 'server.php'; // Include database connection file
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
            filter: blur(8px);
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

        .input-box {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .remember-forgot {
            text-align: left;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #553392;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #CBA1DC;
        }

        .register-link {
            margin-top: 10px;
            font-size: 14px;
        }

        .register-link a {
            color: red;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form method="POST">
            <img src="image/ccs.png" alt="CCS LOGO">
            <h1>Sign In</h1>

            <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>

            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Enter your Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Enter your Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>   
</body>
</html>