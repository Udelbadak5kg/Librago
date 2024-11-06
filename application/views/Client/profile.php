<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librago Profile</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="search-icon"><i class="fas fa-search"></i></div>
        <h1 class="logo">LIBRAGO</h1>
        <div class="profile-container">
            <i class="fas fa-user-circle profile-icon" ></i>
            <a href="<?= base_url() ?>"></a>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav class="nav">
        <button class="nav-btn">Latest</button>
        <button class="nav-btn">Data</button>
        <button class="nav-btn">News</button>
        <button class="nav-btn">Books</button>
        <button class="nav-btn">About Us</button>
    </nav>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-card">
            <img src="https://via.placeholder.com/100" alt="User Avatar" class="avatar">
            <h2>Username Example</h2>
            <button class="edit-btn">Edit Profile</button>
            <button class="logout-btn">Log Out</button>
            <p class="personal-info"><strong>Personal Information</strong></p>
            <p>Email Address:<br>2324(examplenumber)@alfacentauri.sch.id</p>
            <p>Password:<br>********</p>
        </div>

        <!-- Book History Section -->
        <div class="book-history">
            <h2>Book History</h2>
            <div class="book">
                <img src="https://via.placeholder.com/150" alt="Uzumaki">
            </div>
            <div class="book">
                <img src="https://via.placeholder.com/150" alt="The Book of Bill">
            </div>
            <button class="more-btn">More</button>
        </div>
    </section>

    <script src="<?= base_url() ?>profile.js"></script>
</body>
</html>
