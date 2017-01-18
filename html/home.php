<h2>Games</h2>
<?php
$games = array_filter(glob('games/*'), 'is_dir');
foreach($games as $game) {
    echo "<iframe width=\"100%\" height=\"705px\" frameborder=\"0\" scrolling=\"no\"
        style=\"display:block;\"  src=\"$game/index.html\"></iframe>";
}
?>