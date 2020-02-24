
<?php
try {
include __DIR__ . '/../includes/DatabaseConnection.php';
include_once __DIR__ .'/../includes/DatabaseFunctions.php';
deleteJoke($pdo, $_POST['id']);
header('location: joke.php');
}
catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Unable to connect to the database server: ' .
$e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
?>

