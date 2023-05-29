<?php 

$page_title = 'Shopping list';
$page = 'home';
$items = [];

if(isset($_POST['items'])) {
  var_dump($items);
   $items = $_POST['items'];
}

if(isset($_GET['page'])) {
  $page = $_GET['page'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>

<nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
</nav>
    <h1>
      <?php echo $page_title; ?>
    </h1>

     <?php if($page === 'home'): ?>
      <?php include 'home.php'; ?>
      <?php endif; ?> 
      <!-- http://www.cbp-exercises.test/php-day-26/get-post-arrays/index.php?page=home -->

       <?php if($page === 'form'): ?>
      <?php include 'form.php'; ?>
      <?php endif; ?>
      <!-- http://www.cbp-exercises.test/php-day-26/get-post-arrays/index.php?page=form -->


</body>
</html>