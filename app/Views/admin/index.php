<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Web Game</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            color: #007bff;
            margin-bottom: 30px;
        }
        .btn-primary,
        .btn-danger {
            transition: all 0.3s ease;
        }
        .btn-primary:hover,
        .btn-danger:hover {
            transform: scale(1.1);
        }
        .game-img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Game List</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Game</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="gameList">
                        <?php foreach ($games as $game): ?>
                            <tr id="game-<?= $game['id'] ?>">
                                <td><?= $game['id'] ?></td>
                                <td><?= $game['nama_game'] ?></td>
                                <td><img src="<?= base_url('uploads/'.$game['gambar']) ?>" alt="<?= $game['nama_game'] ?>" class="game-img"></td>
                                <td>
                                    <a href="<?= base_url('admin/edit/'.$game['id']) ?>" class="btn btn-primary edit-game" data-id="<?= $game['id'] ?>">Edit</a>
                                    <a href="#" class="btn btn-danger delete-game" data-id="<?= $game['id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <h2>Add New Game</h2>
                <form id="addGameForm" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_game">Nama Game</label>
                        <input type="text" class="form-control" id="nama_game" name="nama_game" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                    </div>
                    <div class="form-group">
                        <label for="game_link">URL Game</label>
                        <input type="text" class="form-control" id="game_link" name="game_link" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori Game</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="Sports">Sports</option>
                            <option value="Fps">Fps</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Racing">Racing</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('#addGameForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);

                $.ajax({
                    url: '/admin/store',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            alert(response.message);
                            // Append the new game to the table
                            $('#gameList').append(
                                '<tr id="game-' + response.data.id + '">' +
                                '<td>' + response.data.id + '</td>' +
                                '<td>' + response.data.nama_game + '</td>' +
                                '<td><img src="/uploads/' + response.data.gambar + '" alt="' + response.data.nama_game + '" class="game-img"></td>' +
                                '<td>' +
                                '<a href="/admin/edit/' + response.data.id + '" class="btn btn-primary edit-game" data-id="' + response.data.id + '">Edit</a> ' +
                                '<a href="#" class="btn btn-danger delete-game" data-id="' + response.data.id + '">Delete</a>' +
                                '</td>' +
                                '</tr>'
                            );
                            // Clear the form fields
                            $('#addGameForm')[0].reset();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to add game');
                    }
                });
            });

            // Delete game
            $('#gameList').on('click', '.delete-game', function(e) {
                e.preventDefault();

                var gameId = $(this).data('id');

                if (confirm('Are you sure you want to delete this game?')) {
                    $.ajax({
                        url: '/admin/delete/' + gameId,
                        method: 'DELETE',
                        success: function(response) {
                            if (response.status == 'success') {
                                alert(response.message);
                                $('#game-' + gameId).remove();
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            alert('Failed to delete game');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
