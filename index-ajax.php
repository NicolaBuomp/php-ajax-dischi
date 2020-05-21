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

            <div class="results">
            </div>

        </div>
    </main>


    <!-- TEMPLATE HANDLEBARS -->
    <script id="card-template" type="text/x-handlebars-template">
        <div class="card">
            <div class="img-card">
                <img src="{{imgCard}}" alt="{{titleSong}}">
            </div>
            <div class="text-card">
                <h2 class="title">{{titleSong}}</h2>
                <p class="sub-title">{{authorSong}}</p>
                <p class="sub-title">{{yearSong}}</p>
            </div>
        </div>
    </script>


    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="dist/js/app.js"></script>
    
</body>
</html>