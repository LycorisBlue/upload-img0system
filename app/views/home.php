<!DOCTYPE html>
<html>
<head>
    <title>Galerie</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Galerie</h1>
        <hr>
        <div class="row">
            <?php foreach ($photos as $photo): ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $photo['photo_path']; ?>" alt="<?php echo $photo['name']; ?>">
                    <div class="caption">
                        <h3><?php echo $photo['name']; ?></h3>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>
