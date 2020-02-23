<?php



function totalJokes($database) {
$query = $database->prepare('SELECT COUNT(*)
FROM `joke`');
$query->execute();
$row = $query->fetch();

return $row[0];
}





function query($pdo, $sql, $parameters = []) {
$query = $pdo->prepare($sql);
$query->execute($parameters);
return $query;
}


function insertJoke($pdo, $joketext, $authorId) {
$query = 'INSERT INTO `joke` (`joketext`, `jokedate`,
`authorId`) VALUES (:joketext, CURDATE(), :authorId)';
$parameters = [':joketext' => $joketext, ':authorId'
=> $authorId];
query($pdo, $query, $parameters);
}

?>
