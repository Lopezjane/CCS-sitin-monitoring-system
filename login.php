<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>login</title>
    <style>
        body{
            background-image: url(image/lab.jpg);
            background-size: 100% 100%;
            background-color: #cccccc; /* Used if the image is unavailable */
            height: 500px; /* You must set a specified height */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; 
            background-attachment: fixed;
	    }
        p{
            text-align: center;
        }
        button {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <main class="login">
        <form method="POST">
            <h1>Sign in</h1>
            
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter your Username"required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter you Password"required>
            </div>
            <div class="wrap">
                <button type="submit">Submit</button>
                <p>Not registered? <a href="register.php" style="text-decoration: none;"> Create an account</a></p>

            </div>
        </form>
    </main>   
</body>
</html>