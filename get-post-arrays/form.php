<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
    <form action="" method="post">
    <button type="submit">Add</button>

    <?php foreach( $items as $i => $text ):  ?>
      <input type="text" value="<?= htmlspecialchars($text);?> " name="items[<?= htmlspecialchars($i); ?>]">
      <?php endforeach; ?>
      
      <input type="text" value="" name="items[<?= count($items); ?>]">
      <?php echo "Number of items: " . count($items); ?>
    </form>
</body>
</html>



    

    

  