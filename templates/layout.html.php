<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="jokes.css">
<title><?=$title?></title>
</head>
<body>
<header>
<h1>Internet Joke Database</h1>
</header>
<nav>
152 PHP & MySQL: Novice to Ninja, 6th Edition
<ul>
<li><a
href="index.php">Home</a></li>
<li><a href="joke.php">Jokes List</a></li>
<li><a href="addjoke.php">Add a new Joke</a></li>
</ul>
</nav>
<main>
<?=$output?>
</main>
<footer class="footer">
&copy; IJDB 2020
</footer>
</body>
</html>
