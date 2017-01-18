<h2>Games</h2>
<?php
$gamesDir = scandir("games/");
foreach($gamesDir as $game) {
	include("$game/index.html");
}
?>
