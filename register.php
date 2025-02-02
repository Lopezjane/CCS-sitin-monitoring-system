<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body, html {
            height: 100%;
            width: 100%;
            display: flex;
        }
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        /* Left Section */
        .left {
            flex: 1;
            background: url('image/lab.jpg') center/cover no-repeat;
            position: relative;
        }
        .left::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(216, 211, 218, 0.5); /* Purple overlay */
        }
        /* Right Section */
        .right {
            flex: 1;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            max-height: 100vh;
            overflow-y: auto;
            padding: 40px;
            scrollbar-width: thin;
            scrollbar-color: rgb(136, 132, 128) #f1f1f1;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
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
        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f7f7f7;
        }
        .error {
            color: red;
            font-size: 12px;
            display: none;
        }
        .terms {
            font-size: 14px;
            margin-top: 10px;
        }
        .terms input {
            margin-right: 5px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background: green;
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
            text-align: center;
            margin-top: 10px;
        }
        .bottom-links a {
            color: #ff416c;
            text-decoration: none;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left {
                height: 40vh;
                flex: none;
            }
            .right {
                height: 60vh;
            }
            .form-container {
                max-height: 60vh;
                overflow-y: auto;
            }
        }
    </style>
    <script>
        function validateID(event) {
            let idNo = document.getElementById("idno");
            let error = document.getElementById("idno-error");

            if (!/^\d{8}$/.test(idNo.value)) {
                error.style.display = "block";
                event.preventDefault(); // Stop form submission
            } else {
                error.style.display = "none";
            }
        }

        function enforceIDFormat(event) {
            let input = event.target;
            input.value = input.value.replace(/\D/g, '').slice(0, 8); // Remove non-digits and limit to 8 chars
        }
    </script>
</head>
<body>

<div class="container">
    <!-- Left Section (Background Image) -->
    <div class="left"></div>

    <!-- Right Section (Form) -->
    <div class="right">
        <div class="form-container">
            <h1>Sign Up</h1>
            <form action="register_process.php" method="POST" onsubmit="validateID(event)">
                <div class="input-group">
                    <label for="idno">ID Number:</label>
                    <input type="text" name="idno" id="idno" maxlength="8" oninput="enforceIDFormat(event)" required>
                    <div class="error" id="idno-error">ID Number must be exactly 8 digits.</div>
                </div>
                <div class="input-group">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>
                <div class="input-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>
                <div class="input-group">
                    <label for="middlename">Middlename:</label>
                    <input type="text" name="middlename" id="middlename">
                </div>
                <div class="input-group">
                    <label for="course">Course:</label>
                    <select name="course" id="course" required>
                        <option value="" disabled selected>Select Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="CCS">CCS</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="yearlevel">Year Level:</label>
                    <select name="yearlevel" id="yearlevel" required>
                        <option value="" disabled selected>Select Year Level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="terms">
                    <input type="checkbox" required> I agree to the <a href="#">Terms of User</a>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="bottom-links">
                    Already have an account? <a href="index.php">Sign in →</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
