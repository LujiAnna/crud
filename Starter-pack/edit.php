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

<!-- load the page for this specific item -->
<!--  receive the clicked item info from session / using GET method -->
<!-- get the specific clicked current/previous bird info -->
<!-- display the value of the id using $_GET method with 'bird_id' -->

<!-- Grab whole row from msql using the bird id passed-->
<?php echo $editBirdInfo ?>

<!-- Display the new name to edit -->
<form action="" method='post'>
<label for="birdRangeEdit">Edit Number of birds:</label>
  <input type="text" id="birdRangeEdit" 
    name="birdRangeEdit"><br><br>
    <button type='submit' name='edit'>Edit</button>
    </form><br><br>

    <!-- Display full bird name from find/search -->
<!-- this edit file is not require in the index, hence call the methods from CardRepo here -->
 <a href="overview.php"> Back to overview </a> 

     <!-- test from 16 Bohemian to 12 -->

<!-- $cardRepository->update($_POST['newName'], $_POST['newColor'], $_GET['selectedPokemon']);
 -->

</body>
</html>