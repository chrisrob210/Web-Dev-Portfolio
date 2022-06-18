<!doctype html>
<html lang="en">

<head>
    <title>MagicArk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="container-fluid text-pink vh-100 bg-magicark scrollbar-colorized">
    <!-- navbar -->
    <?php include "navbar.php" ?>
    <!-- inbetween -->
    <!-- Logo -->
    <div class="text-center mt-5 mb-3 pt-5">
        <img id="magic-logo" src="img/magicark_logo_full_feathered.png" alt="Logo">
    </div>

    <section>
        <div class="row">
            <article id="intro-text" class="col m-3 text-center fw-bold">
                <p>This is where you would put whatever it is you want to say to introduce visitors to Magic Ark both the website and server(s).</p>
            </article>
        </div>
    </section>

    <!--BATTLEMETRIC SERVER LIST -->
    <section class="p-3">
        <div class="row d-flex justify-content-center m-1 mx-auto pt-4">
            <div class="col-auto text-center w-auto">
                <h3 class="pt-2 pb-2">Ragnarok</h3>
                <script type="application/javascript">
                    window.addEventListener('message', function(e) {
                        if (e.data.uid && e.data.type === 'sizeUpdate') {
                            var i = document.querySelector('iframe[name="' + e.data.uid + '"]');
                            i.style.width = e.data.payload.width;
                            i.style.height = e.data.payload.height;
                        }
                    });
                </script><iframe class="battlemetrics" src="https://cdn.battlemetrics.com/b/standardVertical/12325932.html?foreground=%23000000&linkColor=%231185ec&lines=%23333333&background=%23ffffff&chart=players%3A24H&chartColor=%23FF0700&maxPlayersHeight=300" frameborder=0 style="border:0" name="uuuem"></iframe>
            </div>
            <div class="col-auto text-center w-auto">
                <h3 class="pt-2 pb-2">Center</h3>
                <script type="application/javascript">
                    window.addEventListener('message', function(e) {
                        if (e.data.uid && e.data.type === 'sizeUpdate') {
                            var i = document.querySelector('iframe[name="' + e.data.uid + '"]');
                            i.style.width = e.data.payload.width;
                            i.style.height = e.data.payload.height;
                        }
                    });
                </script><iframe class="battlemetrics" src="https://cdn.battlemetrics.com/b/standardVertical/12330523.html?foreground=%23000000&linkColor=%231185ec&lines=%23333333&background=%23ffffff&chart=players%3A24H&chartColor=%23FF0700&maxPlayersHeight=300" frameborder=0 style="border:0" name="rceuj"></iframe>
            </div>
            <div class="col-auto text-center w-auto">
                <h3 class="pt-2 pb-2">Valguero</h3>
                <script type="application/javascript">
                    window.addEventListener('message', function(e) {
                        if (e.data.uid && e.data.type === 'sizeUpdate') {
                            var i = document.querySelector('iframe[name="' + e.data.uid + '"]');
                            i.style.width = e.data.payload.width;
                            i.style.height = e.data.payload.height;
                        }
                    });
                </script><iframe class="battlemetrics" src="https://cdn.battlemetrics.com/b/standardVertical/12981892.html?foreground=%23000000&linkColor=%231185ec&lines=%23333333&background=%23ffffff&chart=players%3A24H&chartColor=%23FF0700&maxPlayersHeight=300" frameborder=0 style="border:0" name="defgj"></iframe>
            </div>
            <div class="col-auto text-center w-auto">
                <h3 class="pt-2 pb-2">Lost Island</h3>
                <script type="application/javascript">
                    window.addEventListener('message', function(e) {
                        if (e.data.uid && e.data.type === 'sizeUpdate') {
                            var i = document.querySelector('iframe[name="' + e.data.uid + '"]');
                            i.style.width = e.data.payload.width;
                            i.style.height = e.data.payload.height;
                        }
                    });
                </script><iframe class="battlemetrics" src="https://cdn.battlemetrics.com/b/standardVertical/13602134.html?foreground=%23000000&linkColor=%231185ec&lines=%23333333&background=%23ffffff&chart=players%3A24H&chartColor=%23FF0700&maxPlayersHeight=300" frameborder=0 style="border:0" name="avnll"></iframe>
            </div>
            <div class="col-auto text-center w-auto">
                <h3 class="pt-2 pb-2">The Island</h3>
                <script type="application/javascript">
                    window.addEventListener('message', function(e) {
                        if (e.data.uid && e.data.type === 'sizeUpdate') {
                            var i = document.querySelector('iframe[name="' + e.data.uid + '"]');
                            i.style.width = e.data.payload.width;
                            i.style.height = e.data.payload.height;
                        }
                    });
                </script><iframe class="battlemetrics" src="https://cdn.battlemetrics.com/b/standardVertical/14056231.html?foreground=%23000000&linkColor=%231185ec&lines=%23333333&background=%23ffffff&chart=players%3A24H&chartColor=%23FF0700&maxPlayersHeight=300" frameborder=0 style="border:0" name="vjmlf"></iframe>
            </div>
        </div>
    </section>



    <!-- footer -->
    <?php include "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>