<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avicard - track your collection of Birds</title>
</head>
<body>

<h1>Avicard - track your collection of Bird cards</h1>

<ul>
    <?php foreach ($birds as $bird) : ?>
    <!-- MD array https://stackoverflow.com/questions/6413589/php-foreach-with-multidimensional-array/6413677 -->
        <li><?= $bird['comName'] ?></li>

    <?php endforeach; ?>
</ul>

<!-- create a form -->

<form action="" method='post'>

<label for="comName">Common name:</label>
  <input type="text" id="comName" 
    name="comName"><br><br>

    <label for="sciName">Scientific name:</label>
  <input type="text" id="sciName" 
    name="sciName"><br><br>

    <label for="idbird">Bird id:</label>
  <input type="text" id="idbird" 
    name="idbird"><br><br>

    <label for="idlocation">Location id:</label>
  <input type="text" id="idlocation" 
    name="idlocation"><br><br>

    <label for="locationName">Location name:</label>
  <input type="text" id="locationName" 
    name="locationName"><br><br>

    <label for="locationLat">Location Latitude:</label>
  <input type="text" id="locationLat" 
    name="locationLat"><br><br>

    <label for="locationLon">Location Longitude:</label>
  <input type="text" id="locationLon" 
    name="locationLon"><br><br>

  <input 
    type="submit" value="Submit Bird">
</form>

<br><br>
<input type="text" placeholder="Find..">

<!-- TODO: dave info as a new entry in the db -->


</body>
</html>