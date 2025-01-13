<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Catalog - GameZone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-nav.ml-auto {
            margin-left: auto;
        }
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
        .game-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 40px;
        }
        .game-item {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }
        .game-item:hover {
            transform: scale(1.05);
        }
        .game-item a {
            display: block;
            width: 100%;
            height: 100%;
        }
        .game-item .logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .game-details {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .game-title {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #1e1e1e;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            border-top: 2px solid #3f3f3f;
        }
        .filter-container {
            margin-top: 20px;
            text-align: center;
        }
        .game-img {
            max-width: 250px;
            max-height: 250px;
            object-fit: cover;
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="filter-container">
            <label for="category-filter">Filter by Category:</label>
            <select id="category-filter" class="form-control d-inline w-auto">
                <option value="all">All</option>
                <option value="Sports">Sports</option>
                <option value="Fps">Fps</option>
                <option value="Strategy">Strategy</option>
                <option value="Racing">Racing</option>
            </select>
        </div>

        <h2 class="text-center my-4">Game Catalog</h2>
        <div class="game-container">
            <?php
            $count = 0;
            foreach ($games as $game) :
                if ($count % 4 == 0 && $count != 0) {
                    echo '</div><div class="game-container">';
                }
            ?>
            <div class="game-item">
                <a href="<?= $game['game_link'] ?>" target="_blank">
                <img src="<?= base_url('uploads/'.$game['gambar']) ?>" alt="<?= $game['nama_game'] ?>" class="game-img">
                </a>
                <div class="game-details">
                    <div class="game-title"><?= $game['nama_game'] ?></div>
                    <div class="game-category" style="display: none;"><?= $game['category'] ?></div> 
                    <a href="<?= $game['game_link'] ?>" class="btn btn-primary mt-2" target="_blank">Download</a>
                </div>
            </div>
            <?php
                $count++;
            endforeach;
            ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> GameZone. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("category-filter").addEventListener("change", function() {
            var category = this.value;
            var gameItems = document.querySelectorAll(".game-item");
            gameItems.forEach(function(item) {
                var gameCategory = item.querySelector('.game-category').textContent;
                if (category === "all" || gameCategory === category) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });

            document.querySelectorAll('.game-container').forEach(function(container) {
                container.style.gridTemplateColumns = 'repeat(4, 1fr)';
            });

            var visibleGameItems = document.querySelectorAll('.game-item[style="display: block;"]');
            visibleGameItems.forEach(function(item) {
                var category = item.querySelector('.game-category').textContent;
                var gameItemsInCategory = document.querySelectorAll('.game-item[data-category="' + category + '"][style="display: block;"]');
                if (gameItemsInCategory.length > 4) {
                    item.parentNode.style.gridTemplateColumns = 'repeat(4, 1fr)';
                }
            });

            var gameImages = document.querySelectorAll('.game-item[style="display: block;"] .logo');
            gameImages.forEach(function(img) {
                img.style.width = '100%';
                img.style.height = '100%';
            });
        });
    </script>
</body>
</html>
