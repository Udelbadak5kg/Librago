<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librago</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <!-- Search Icon -->
        <div class="search-icon">
            <i class="fas fa-search"></i>
        </div>

        <h1 class="logo">LIBRAGO</h1>
        
      
        
        <!-- Profile Icon -->
        <div class="profile-container">
            <a href="<?= base_url() ?>Home/profile">
            <i class="fas fa-user-circle profile-icon" ></i>
            </a>
            
          
    </div>
        
            
        </div>
    </div>
    
        </div>
    </header>
      
        <nav class="nav">
            <button class="nav-btn">Latest</button>
            <button class="nav-btn">Data</button>
            <button class="nav-btn">News</button>
            <button class="nav-btn">Books</button>
            <button class="nav-btn">About Us</button>
        </nav>
    
    <!-- Alert and Timer Section -->
    <section class="alert-timer">
    
       
        <h2 class="timer">07:12:56</h2>
        <p class="alert-message">Please return “Filosofi Teras” and “Necronomicon” before the timer hits zero or you will have to pay some fees for it due to your negligence.</p>
    </section>

    <!-- Latest Books Section -->
     
    <section class="latest-books">
        <h2>Latest Books <span class="arrow" onclick="nextSlide()">→</span></h2>
        <div class="books-container">
            <?php foreach($buku as $a):?>
            <div class="book"><img src="<?= base_url(); ?>assets/photo/<?=$a["gambar"]?>" alt="<?= $a["judul"] ?>"></div>
            <?php endforeach;?>

        </div>
        <button class="more-btn">More</button>
    </section>

   

    
<script src="<?= base_url(); ?>assets/js/script.js"></script>
</body>
</html>


