<?php 
include_once __DIR__ . './dist/partials/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/app.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <title>Spotify PHP Ajax</title>
</head>
<body>

    <header>

        <div class="container">
            <img src="./dist/img/spotify-logo.png" class="logo" alt="">
        </div>

    </header>


    <main>

        <div class="search container">
            <input id="search-input" type="text" placeholder="Cerca il tuo artista">
        </div>
        
        <div class="container">
            <?php
                foreach ($album as $cd) { ?>
            <div class="card">
    
                <div class="img-card">
                    <img src="<?php echo $cd['poster']; ?>" alt="<?php echo $cd['title']; ?>">
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
    
</body>
</html>