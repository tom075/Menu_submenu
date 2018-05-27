<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Responsive menu met submenu en animatie en CSS Grid</title>
</head>
<body>
<nav id="nav">
    <input type="checkbox" id="menu">
    <label for="menu" class="Toggle">
        <i class="fas fa-sliders-h"></i>
        <i class="fas fa-eye-slash"></i>
    </label>
    <ul>
        <li><a href="#">Home</a></li>
        <li class="submenu"><a href="#">Het bedrijf</a>
            <ul>
                <li><a href="#">Wat doen wij</a></li>
                <li><a href="#">Openings tijden</a></li>
                <li><a href="#">Locatie</a></li>
            </ul>
        </li>
        <li><a href="#">Op locatie</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>


