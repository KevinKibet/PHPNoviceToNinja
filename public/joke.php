

<?php
try {
include __DIR__ . '/../includes/DatabaseConnection.php';
include __DIR__ . '/../classes/DatabaseTable.php';
#$sql ='SELECT `joke`.`id`, `joketext` , `name`, `email` FROM `joke` INNER JOIN `author` ON `authorid' = `author`.`id` '';

 $jokesTable = new DatabaseTable($pdo, 'joke','id');
 $authorTable= new DatabaseTable($pdo, 'author','id');
 #$result = $pdo->query($sql);

 $results = $jokesTable->findAll();
 $joke = [];
 foreach ($results as $joke) {
 	$author = $authorTable->findById($joke['authorId']);

 	$jokes[] = [


'id' => $joke['id'],
'joketext' => $joke['joketext'],
'jokedate' => $joke['jokedate'],
'name' => $author['name'],
'email' => $author['email']



 	];
 }






$totalJokes = $jokesTable->total();
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