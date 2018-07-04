<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jason R. Carrete">
    <title>Jsonet - Games</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/favicon.png">
  </head>
  <body>
    <header>
      <h1>Jsonet <span class="page-qualifier">Games</span></h1>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/navbar.html'; ?>
    </header>
    <main>
      <h2>Games</h2>
      <?php
        $gamesdir = new DirectoryIterator(".");
        foreach ($gamesdir as $gamedir) {
          if (!$gamedir->isDot() && $gamedir->isDir()) {
            echo "<iframe width=\"100%\" height=\"705px\" frameborder=\"0\" scrolling=\"no\" style=\"display:block;\" src=\"$gamedir/\"></iframe>";
          }
        }
      ?>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/footer.html'; ?>
  </body>
</html>
