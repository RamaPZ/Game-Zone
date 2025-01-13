<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Game</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->
</head>
<body>
    <h1>Add New Game</h1>
    <form id="createForm" method="post" enctype="multipart/form-data">
        <label for="nama_game">Nama Game:</label><br>
        <input type="text" id="nama_game" name="nama_game"><br>
        <label for="gambar">Gambar:</label><br>
        <input type="file" id="gambar" name="gambar"><br>
        <label for="game_url">URL Game:</label><br> <!-- Tambahkan input untuk URL Game -->
        <input type="text" id="game_url" name="game_url"><br><br> <!-- Input untuk URL Game -->
        <div class="form-group">
            <label for="category">Kategori Game</label>
            <select class="form-control" id="category" name="category" required>
                <option value="Sports">Sports</option>
                <option value="Fps">Fps</option>
                <option value="Strategy">Strategy</option>
                <option value="Racing">Racing</option>
            </select>
        </div>
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $('#createForm').submit(function(e) {
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
                            // Optionally, you can redirect or refresh the page
                            // location.reload();
                        } else {
                            alert(response.message);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
