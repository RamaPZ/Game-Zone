<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - GameZone</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    /* Custom CSS for navigation alignment */
    .navbar-nav.ml-auto {
        margin-left: auto;
    }
    body {
        background-color: #0c0c0c; /* Dark background */
        color: #ffffff; /* Light text color */
        font-family: 'Roboto', sans-serif; /* Google Font for text */
    }
    .navbar {
        background-color: #1e1e1e; /* Dark navbar background */
        border-bottom: 2px solid #3f3f3f; /* Border under navbar */
    }
    .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
    }
    .navbar-brand:hover {
        color: #42f5e9; /* Color on hover */
    }
    .jumbotron {
        background-color: #1e1e1e; /* Dark jumbotron background */
        color: #ffffff; /* Light text color on jumbotron */
        padding: 4rem 2rem; /* Padding inside jumbotron */
        border-radius: 0; /* Remove border-radius */
        text-align: center;
    }
    .jumbotron h1 {
        font-size: 3.5rem;
        font-weight: bold;
        color: #42f5e9; /* Accent color for heading */
    }
    footer {
        background-color: #1e1e1e; /* Dark footer background */
        color: #ffffff; /* Light text color in footer */
        padding: 2rem 0; /* Padding inside footer */
        text-align: center;
    }
    footer p {
        margin-bottom: 0; /* Remove default margin-bottom for <p> inside footer */
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">GameZone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about')?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('games')?>">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact')?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faqs')?>">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('community') ?>">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://discord.com" target="_blank">
                        <i class="fab fa-discord"></i> Discord
                    </a>
            </ul>
        </div>
    </div>
</nav>

<header class="jumbotron">
    <div class="container">
        <h1 class="display-4">Welcome to GameZone</h1>
        <p class="lead">Your ultimate destination for gaming news and updates.</p>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">About Us</h2>
            <p>GameZone is a futuristic platform gaming community dedicated to providing the latest information and reviews about video games. We believe in the power of gaming to connect people across the globe.</p>
            
            <p>At GameZone, we strive to create a platform that inspires and entertains gamers of all levels. Whether you're looking for game reviews, industry news, or gaming tips, we've got you covered.</p>
            
            <p>Join us in exploring the limitless possibilities of the gaming world. Let's embark on this futuristic journey together!</p>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>&copy; <?= date('Y') ?> GameZone. All Rights Reserved.</p>
    </div>
</footer>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
