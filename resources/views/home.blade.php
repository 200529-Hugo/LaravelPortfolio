<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/star.css">
    
    <title>HOME</title>
</head>

<body>
    <div class="container">
        @include('layouts.header')
        <main id="main" class="main-night" style="text-align: center;">
            <div id="stars"></div>
            <p onclick="cycle()" id="mainP" class="mainP-night homeP">
                Welcome
            </p>
            <a target="_blank" style="position: relative; z-index:3;" href="https://www.linkedin.com/in/hugo-de-heus-8a5465228/">
                <img style="width: 70px; height: 70px; border-radius: 7px;" src="https://icons.iconarchive.com/icons/dakirby309/windows-8-metro/256/Web-Linked-in-alt-Metro-icon.png" alt="">
            </a>
            <div id="info" class="info-night info">
                My name is Hugo de Heus. I was born in 2004 and am currently in a web development school named Grafisch Lyceum Utrecht since 2020. I will hopefully get my diploma in 2023.
                <br><br>
                The programming languages I can program with are:
                <br>
                HTML, CSS, JavaScript, PHP & SQL. <br>
                The programming languages I enjoy are: PHP, SQL & JavaScript. <br>
                Personally I would like to learn more languages like Python.
                <br><br>
                Personally I really like being a back-end developer because I like making the site more functional than making it beautiful. 
                I can do front-end but I need a design because I am not that creative when it comes to colors.
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