
<?php 

require_once 'DBBlackbox.php';
require_once 'Artist.php';

$id = $_GET['id'];

$artist = find($id, 'Artist');

$artist->id = $_POST['id'] ?? $artist->id;
$artist->first_name = $_POST['fName'] ?? $artist->first_name;
$artist->last_name = $_POST['lName'] ?? $artist-> last_name;
$artist->year_of_birth = $_POST['birth'] ?? $artist-> genre;

update($id,$artist);