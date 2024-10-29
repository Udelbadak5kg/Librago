<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Navbar Contoh</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #003366; /* Warna biru tua */
        }
        .dropdown-item {
            color: #000; /* Warna item dropdown */
        }
        .dropdown-item:hover {
            background-color: #0056b3; /* Warna saat hover */
        }

        .icon-white {
            color: white; /* Warna ikon menjadi putih */
            font-size: 1 rem; /* Ukuran ikon */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
    <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
        </form>
        
        <div class="mx-auto">
            <img src="logo.png" alt="Logo" style="height: 40px;"> <!-- Ganti dengan path logo Anda -->
        </div>
        
        <div class="dropdown">
        
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user icon-white"></i>
        Nama orang

        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Item 1</a>
            <a class="dropdown-item" href="#">Item 2</a>
            <a class="dropdown-item" href="#">Item 3</a>
        </div>
        </div>
        
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>