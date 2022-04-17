<!DOCTYPE html>
<html lang="en">
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
        <main id="main" class="main-night">
            <div id="stars"></div>
            <p onclick="cycle()" id="mainP" class="mainP-night">
                Contact
            </p>
            <div id="info" class="info-night info">
                <h3>Have ideas? Message me!</h3>
                <h4>Or mail me at hugodehe@hugodeheus.nl</h4>
            </div>
            <form id="form" class="info form-night">
                <div class="left-form">
                    <p>
                        Name:
                    </p>
                    <p>
                        Email:
                    </p>
                    <p>
                        Reason:
                    </p>
                    <p>
                        Message:
                    </p>
                </div>
                <div class="right-form">
                    <div>
                        <input type="text" name="name" required>
                    </div>
                    <div>
                        <input type="email" name="from" required>
                    </div>
                    <div>
                        <input type="text" name="reason" required>
                    </div>
                    <div>
                        <textarea name="message" required></textarea>
                    </div>
                </div>
                <div class="submit">
                    <button class="navA-night" type="submit">SEND</button>
                </div>
                
            </form>
        </main>
        <footer id="footer" class="footer-night">
            <p>HugoDeHeus &copy; 2022</p>
        </footer>
    </div>
</body>
<script src="../js/cycle.js"></script>
<script src="../js/star.js"></script>

</html>