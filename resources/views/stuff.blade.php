<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/star.css">

        <title>Projects</title>
    </head>
    <body>
        <?php 
            $projects = DB::select('select * from projects WHERE active = 1');
            use Illuminate\Support\Facades\Storage;
        ?>
    <div class="container">
        @include('layouts.header')
        <main id="main" class="main-night">
            <div id="stars"></div>
            <p onclick="cycle()" id="mainP" class="mainP-night">
                Projects
            </p>
            <div id="info" class="info-night info">
                <h3>These are some of my projects!</h3>
            </div>
            <div id="projects" class="projects-night">
            <?php foreach ($projects as $project) { ?>
                <div class="card-parent">
                    <a target="_blank" href="<?php echo $project->link; ?>">
                        <div class="card" id='card'>
                            <img src="{{  asset('storage/images/'.$project->image) }}" alt="">
                            <br>
                            <p>
                                Name: <?php echo $project->name ?><br>
                                Info: <?php echo $project->description ?><br>
                                URL: <?php echo $project->link ?><br>
                                Created at: <?php echo $project->created_at ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php }?>
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
