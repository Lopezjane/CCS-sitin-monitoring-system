<?php
session_start();
include("connection.php");

// Registration
if (isset($_POST['SubmitForm'])) {
    $idno = $_POST['idno'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $course = $_POST['course'];
    $yearlevel = $_POST['yearlevel'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing

    // Insert data into the database
    $sql = "INSERT INTO student (idno, firstname, lastname, middlename, course, yearlevel, email, username, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $idno, $firstname, $lastname, $middlename, $course, $yearlevel, $email, $username, $password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registration successful! Please log in.";
        echo "<script>alert('Registration successful! Please log in.'); window.location.href='login.php';</script>";
        exit();
    } else {
        $error = "Error: " . $conn->error;
        echo "<script>alert('Registration failed: $error'); window.location.href='register.php';</script>";
        exit();
    }
}

//login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM student WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) { // Ensure password hashing
            $_SESSION['id'] = $user['idno'];  // Store user ID
            $_SESSION['username'] = $user['username']; // Store username

            echo "<script>alert('Login successful! Redirecting to dashboard...'); window.location.href='dashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid username or password. Please try again.'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password. Please try again.'); window.location.href='login.php';</script>";
    }
}


?>

