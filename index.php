<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
             background-image: url(image/comp.jpg);
            background-size: 100% 100%;
            background-color: #cccccc; /* Used if the image is unavailable */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }
        .container {
            display: flex;
            width: 900px;
            background: white;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .left {
            flex: 1;
            padding: 40px;
        }
        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: gray;
            color: white;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f7f7f7;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background:green;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .bottom-links {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-top: 10px;
        }
        .bottom-links a {
            color: #ff416c;
            text-decoration: none;
        }
        .right h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .signup-btn {
            padding: 8px 20px;
            border: 2px solid white;
            background: transparent;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .signup-btn:hover {
            background: white;
            color: #ff416c;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Left Section (Login Form) -->
    <div class="left">
        <form class="login-box" action="login.php" method="POST">
            <h2>Sign In</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Sign In</button>
            <div class="bottom-links">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <!-- Right Section (Gradient Background) -->
    <div class="right">
        <div>
            <img src="../sitin/ccslogo.png">
            <h2>Welcome to login</h2>
            <p>Don't have an account?</p>
            <button class="signup-btn"><a href="register.php" >Sign Up</button>
        </div>
    </div>
</div>

</body>
</html>
