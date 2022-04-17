<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/star.css">
    <title>CV</title>
</head>

<body>
    <div class="container">
        @include('layouts.header')
        <main id="main" class="main-night">
            <div id="stars"></div>
            <p onclick="cycle()" id="mainP" class="mainP-night">
                CV
            </p>
            <div id="info" class="info-night info">
                <h3>This is my CV!</h3>
            </div>
            <div class="cv">
                <a href="../img/publicCV.pdf" target="_blank">
                    <img src="../img/publicCV-1.png">
                </a>
            </div>  
            <div class="fixer"></div>   
        </main>
        <footer id="footer" class="footer-night">
            <p>HugoDeHeus &copy; 2022</p>
        </footer>
    </div>
</body>
<script src="../js/cycle.js"></script>
<script src="../js/star.js"></script>

</html>