
<?php
try {
include __DIR__ . '/../includes/DatabaseConnection.php';
$sql = 'DELETE FROM `joke` WHERE `id` = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('location: joke.php');
}
catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Unable to connect to the database server: ' .
$e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
?>

