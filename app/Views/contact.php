<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - GameZone</title>
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
        .jumbotron h1 {
            margin-bottom: 20px;
        }
        .jumbotron p {
            font-size: 1.2rem;
        }
        .form-container {
            background-color: #1e1e1e;
            color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }
        .form-label {
            color: #ffffff;
        }
        .form-control {
            background-color: #343a40;
            color: #ffffff;
            border: 1px solid #ffffff;
        }
        .form-control:focus {
            background-color: #343a40;
            color: #ffffff;
            border: 1px solid #42f5e9;
        }
        .btn-primary {
            background-color: #42f5e9;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2cb1c2;
        }
        footer {
            background-color: #1e1e1e;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
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
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Contact Us</h1>
                    <p>Give us the best advice and critics to develop this website and dont forget to recommend us to your friends!</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto form-container">
            <form action="<?= base_url('contact/saveMessage') ?>" method="POST">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> GameZone. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
