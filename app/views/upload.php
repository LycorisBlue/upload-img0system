<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une photo</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter une photo</h1>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="photo">Photo :</label>
                <input type="file" name="photo" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>
