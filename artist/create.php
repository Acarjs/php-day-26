<?php 

require_once 'DBBlackbox.php';
require_once 'Artist.php';


$artist = new Artist;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a new artist</title>
</head>
<body>

  <?php include 'nav.php';  ?>
  
    <form action="insert.php" method="post">
 
    <!-- display the form prefilled with data from the artist object -->

    ID:<br>
    <input type="number" name="id" value="<?= htmlspecialchars((string)$artist->id) ?>"><br>
    <br>
 
    First Name:<br>
    <input type="text" name="fName" value="<?= htmlspecialchars((string)$artist->first_name) ?>"><br>
    <br>
 
    Last Name:<br>
    <input type="text" name="lName" value="<?= htmlspecialchars((string)$artist->last_name) ?>"><br>
    <br>
 
    Year of Birth:<br>
    <input type="number" name="birth" value="<?= htmlspecialchars((string)$artist->year_of_birth) ?>"><br>
    <br>

    Genre:<br>
    <input type="text" name="genre" value="<?= htmlspecialchars((string)$artist->genre) ?>"><br>
    <br>

    <button type="submit">Save</button>
 
</form>

</body>
</html>