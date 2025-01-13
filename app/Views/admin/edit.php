<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game - Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
            margin-top: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .game-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Edit Game</h1>
        <form id="editForm" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $game['id'] ?>">
            <div class="form-group">
                <label for="nama_game">Nama Game</label>
                <input type="text" class="form-control" id="nama_game" name="nama_game" value="<?= $game['nama_game'] ?>" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <p class="mt-2">Gambar saat ini:</p>
                <img src="/uploads/<?= $game['gambar'] ?>" alt="Current Image" class="game-image">
            </div>
            <div class="form-group">
                <label for="game_link">Link Game</label>
                <input type="text" class="form-control" id="game_link" name="game_link" value="<?= $game['game_link'] ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Kategori Game</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Sports" <?= ($game['category'] == "Sports") ? "selected" : "" ?>>Sports</option>
                    <option value="Fps" <?= ($game['category'] == "Fps") ? "selected" : "" ?>>Fps</option>
                    <option value="Strategy" <?= ($game['category'] == "Strategy") ? "selected" : "" ?>>Strategy</option>
                    <option value="Racing" <?= ($game['category'] == "Racing") ? "selected" : "" ?>>Racing</option>
                </select>
            </div>
            <input type="hidden" name="gambar_lama" value="<?= $game['gambar'] ?>">
            <button type="submit" class="btn btn-submit">Simpan Perubahan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);

                $.ajax({
                    url: '/admin/update',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            alert(response.message);
                            window.location.href = '/admin/dashboard'; // Redirect to dashboard on success
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to update game');
                    }
                });
            });
        });
    </script>
</body>
</html>
