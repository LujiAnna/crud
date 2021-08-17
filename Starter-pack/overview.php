<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avicard - track your collection of Bird cards</title>
</head>
<body>

<h1>Avicard - track your collection of Bird cards</h1>

<ul>
    <?php foreach ($birds as $bird) : ?>
    <!-- MD array https://stackoverflow.com/questions/6413589/php-foreach-with-multidimensional-array/6413677 -->
        <li><?= $bird['comName'] ?></li>

    <?php endforeach; ?>
</ul>

</body>
</html>