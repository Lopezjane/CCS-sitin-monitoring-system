<?php 

//Ato e inherit ang database connection so that di ta mag copy paste sige every page
//Mu register sa student sa database
//Ang isset kay function sa php when it is true or false, naka emdedded dira ang button name nga submit
//See the button nga submit naay name nga :submitForm:
//if e click siya then mu trigger ni nga if statement

session_start();
include("connection.php");


//registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idno = $_POST['idno'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $course = $_POST['course'];
    $yearlevel = $_POST['yearlevel'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing

    // Check if username or email already exists
    $check_query = "SELECT * FROM student WHERE username=? OR email=?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username or Email already exists!";
    } else {
        // Use prepared statement to insert data
        $sql = "INSERT INTO student (idno, firstname, lastname, middlename, course, yearlevel, email, username, password) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $idno, $firstname, $lastname, $middlename, $course, $yearlevel, $email, $username, $password);
        
        if ($stmt->execute()) {
            $_SESSION['success'] = "Registration successful! Please log in.";
            header("Location: login.php");
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
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
            
            header("Location: index.php"); // Redirect to dashboard
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}

?>

