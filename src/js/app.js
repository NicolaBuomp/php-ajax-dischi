$(document).ready(function () {

    // references Handlebars
    var source = $("#card-template").html();
    var template = Handlebars.compile(source);

    var container = $('.results');

    $.ajax({
        url: "http://localhost:8888/php-ajax-dischi/dist/partials/json-encode.php",
        method: 'GET',
        success: function (res) {
            console.log(res);


            for (var i = 0; i < res.length; i++) {

                var context = {
                    imgCard : res[i].poster,
                    titleSong : res[i].title,
                    authorSong : res[i].author,
                    yearSong : res[i].year
                };

                var output = template(context);

                container.append(output);

            }

        },
        error: function () {
            console.log('Errore chiamata');

        }
    });


});