<?php
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../includes/DatabaseTable.php';
try {
if (isset($_POST['joke'])) {
#updateJoke($pdo, $_POST['jokeid'], $_POST['joketext'], 1);
$joke = $_POST['joke'];
$joke['jokedate'] = new DateTime();
$joke['authorId'] = 1;
$jokesTable->save($joke);
header('location: jokes.php');
} else {

$joke = $jokesTable->findById($_GET['id']);
$title = 'Edit joke';
ob_start();
include __DIR__ . '/../templates/editjoke.html.php';

$output = ob_get_clean();
}
} catch (PDOException $e) {
$title = 'An error has occurred';
$output = 'Database error: ' . $e->getMessage() . '
in ' . $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../templates/layout.html.php';