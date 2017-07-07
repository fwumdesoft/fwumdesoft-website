<!DOCTYPE html>
<html>
  <head>
    <title>Jsonet - Games</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jason R. Carrete">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="icon" href="/favicon.png">
  </head>
  <body>
    <header>
    	<h1>Jsonet <span class="page-qualifier">Games</span></h1>
    	<nav>
    		<ul>
    			<li><a href="/index.html">Home</a></li>
    			<li><a href="/html/games.php">Web Games</a></li>
    			<li><a href="/public-files/">Public Files</a></li>
    		</ul>
    	</nav>
    </header>
    <main>
      <h2>Games</h2>
      <?php
        $games = array_filter(glob('/games/*'), 'is_dir');
        foreach($games as $game) {
          echo "<iframe width=\"100%\" height=\"705px\" frameborder=\"0\" scrolling=\"no\"
          style=\"display:block;\"  src=\"$game/index.html\"></iframe>";
        }
      ?>
    </main>
    <footer>
      <small>&copy; 2017 by Jason R. Carrete</small>
    </footer>
  </body>
</html>
