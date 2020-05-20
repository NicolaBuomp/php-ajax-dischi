<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/app.css">
    <title>Spotify PHP Ajax</title>
</head>
<body>

    <header>

        <div class="container">
            <img src="./dist/img/spotify-logo.png" class="logo" alt="">
        </div>

    </header>


    <main>
        <?php include_once __DIR__ . './dist/partials/database.php' ?>
        <div class="container">
            <?php
                foreach ($album as $cd) { ?>
            <div class="card">
    
                <div class="img-card">
                    <img src="<?php echo $cd['poster']; ?>" alt="Dio">
                </div>
                <div class="text-card">
                    <h2 class="title"><?php echo $cd['title']; ?></h2>
                    <p class="sub-title"><?php echo $cd['author']; ?></p>
                    <p class="sub-title"><?php echo $cd['year']; ?></p>
                </div>
            </div>
            <?php }; ?>

        </div>
    </main>


    <footer>
    </footer>



    <script src="dist/js/app.js"></script>
    
</body>
</html>