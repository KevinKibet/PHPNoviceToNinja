

<?php
try {
include __DIR__ . '/../includes/DatabaseConnection.php';
include_once __DIR__ .'/../includes/DatabaseFunctions.php';
#$sql ='SELECT `joke`.`id`, `joketext` , `name`, `email` FROM `joke` INNER JOIN `author` ON `authorid' = `author`.`id` '';
$sql = 'SELECT `joke`.`id`, `joketext`, `name`, `mail`
FROM `joke` INNER JOIN `author`
ON `authorid` = `author`.`id`';
$jokes = $pdo->query($sql);
$totaljokes = totaljokes($pdo);
#while($row= $result->fetch()){

	#$jokes[] = ['id'=>$row['id'], 'joketext'=>$row['joketext']];
#}
$title = 'joke list' ;

ob_start();

include __DIR__ . '/../templates/joke.html.php';


$output = ob_get_clean();



} catch (PDOException $e) {
$output = 'Database error: ' . $e->getmessage().'in'.$e->getfile().':'.$e->getline();
}
include __DIR__ . '/../templates/layout.html.php';
#include __DIR__ . '/../templates/output.html.php';
#include __DIR__ . '/../templates/joke.html.php';