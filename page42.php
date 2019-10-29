<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Only Navigation Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="page42.css">
</head>
<body>
    <label for="show-menu" class="show-menu">Show Menu</label>
    <input type="checkbox" id="show-menu" role="button">
        <ul id="menu">
        <li><a href="#">Home</a></li>
        <li>
            <a href="#">About ￬</a>
            <ul class="hidden">
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">What We Do</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio ￬</a>
            <ul class="hidden">
                <li><a href="#">Photography</a></li>
                <li><a href="#">Web & User Interface Design</a></li>
                <li><a href="#">Illustration</a></li>
            </ul>
        </li>
        <li><a href="#">News</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</body>
</html>