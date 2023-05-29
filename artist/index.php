<?php 

require_once 'DBBlackbox.php';
require_once 'Artist.php';

// get all records from the database
$artists = select(0, 0, 'Artist'); 



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index of Artists</title>
</head>
<body>

  <?php include 'nav.php';  ?>
  <ul>
    <?php foreach ($artists as $artist) : ?>
        <li>
            <?= $artist->first_name ?>
 
            <a href="edit.php?id=<?= $artist->id ?>">edit</a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>