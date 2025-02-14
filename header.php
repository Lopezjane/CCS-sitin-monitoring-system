<?php 

//Inlude diri ang server.php para maka gamit tas function 
include './server.php';
?>
<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Dashboard'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffffff; }
        .sidebar { background-color: #E6E6FA; }
        .nav-link:hover {
            background-color: #d1c4e9;
            color: #000000 !important;
            border-radius: 5px;
        }
        #profileImage {
            cursor: pointer;
            background-color: #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 3rem;
        }
    </style>
</head>
<body>
<h1 class="text-center p-3 mb-0" style="background-color: #FFE5B4; color: #333;">CCS Sit-In Monitoring System</h1>

<div class="d-flex vh-100">
    <!-- Sidebar -->
    <div class="d-flex flex-column sidebar text-white p-3" style="width: 250px;">
        <div class="mb-4 text-center">
            <div class="rounded-circle border border-primary" id="profileImage" style="width:100px; height:100px; object-fit:cover;">
                <i class="fas fa-user"></i>
            </div>
            <input type="file" class="d-none" id="imageUpload" accept="image/*">
        </div>

        <nav class="nav flex-column">
            <li class="nav-item"> <a href="dashboard.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-home me-2"></i> Home </a> </li>
            <li class="nav-item"> <a href="profile.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-user me-2"></i> Profile  </a> </li>
            <li class="nav-item"> <a href="announcement.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-bell me-2"></i> View Announcement </a> </li>
            <li class="nav-item"> <a href="rules.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-book me-2"></i> Sit-in Rules </a> </li>
            <li class="nav-item"> <a href="reservation.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-briefcase me-2"></i> Lab Rules & Reservation </a> </li>
            <li class="nav-item"> <a href="history.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-history me-2"></i> Sit-in History</a> </li>
            <li class="nav-item"> <a href="session.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-eye me-2"></i> View Remaining Session </a> </li>
            <li class="nav-item"> <a href="login.php" class="nav-link text-dark d-flex align-items-center"> <i class="fas fa-sign-out-alt me-2"></i> Log Out </a> </li>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
