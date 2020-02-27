
<?php
try {
include __DIR__ . '/../includes/DatabaseConnection.php';
include_once __DIR__ .'/../includes/DatabaseTable.php';



$jokesTable = new DatabaseTable($pdo, 'joke', 'id');
$jokesTable->delete($_POST['id']);

header('location: joke.php');
}
catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Unable to connect to the database server: ' .
$e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
?>

