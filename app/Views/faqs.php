<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - GameZone</title>
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
        .h3 {
            color: #42f5e9;
            margin-top: 20px;
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
        <h1 class="h1">FAQs</h1>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h2">What is GameZone?</h2>
            <p>GameZone is a digital gaming platform that provides a variety of exciting games for users.</p>

            <h2 class="h2">How to play games on GameZone?</h2>
            <p>You can play games on GameZone by registering an account and selecting the games you want to play from our catalogue.</p>

            <h2 class="h2">How do I contact GameZone customer service?</h2>
            <p>To contact our customer service, please visit the Contact page and fill in the message form provided.</p>

            <h2 class="h2">Does GameZone provide free games?</h2>
            <p>Yes, GameZone provides several games that can be played for free, but there are also paid games with premium quality.</p>
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