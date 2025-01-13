<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community - GameZone</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #0c0c0c;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #1e1e1e;
            border-bottom: 2px solid #3f3f3f;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
        }
        .navbar-brand:hover {
            color: #42f5e9;
        }
        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
            padding: 80px 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .h2 {
            color: #42f5e9;
            margin-top: 40px;
        }
        p {
            color: #ffffff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('about') ?>">GameZone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('games') ?>">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faqs') ?>">FAQs</a>
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
        <h1 class="h1">Community</h1>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h2">Welcome to the GameZone Community!</h2>
            <p>Join our vibrant community of gamers where you can connect, share experiences, and discover new games.</p>

            <h2 class="h2">Why Join the GameZone Community?</h2>
            <p>1. Connect with fellow gamers and discuss your favorite games.</p>
            <p>2. Stay updated with the latest news and updates in the gaming world.</p>
            <p>3. Participate in community events, tournaments, and challenges.</p>
            <p>4. Share your gameplay and achievements with others.</p>

            <h2 class="h2">How to Get Involved?</h2>
            <p>Joining the GameZone community is easy! Simply create an account and start engaging with other members.</p>

            <h2 class="h2">Get Started Now!</h2>
            <p>Don't miss out on the fun and excitement. Join our community today!</p>
        </div>
    </div>
</div>

<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
    <div class="container text-center">
        Copyright &copy; <?= date('Y') ?> GameZone. All Rights Reserved.
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
