<h2>Games</h2>
<?php
$games = array_filter(glob('games/*'), 'is_dir');
foreach($games as $game) {
    echo "<iframe src=\"$game/index.html\"></iframe>";
}
?>
