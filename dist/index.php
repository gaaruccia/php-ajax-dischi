<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <link rel="stylesheet" href="app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="app.js" charset="utf-8"></script>
    <?php /*require_once "server.php"; */?>
    <title>dischi</title>
  </head>
  <body>
    <header class="flex">
      <div>
        <img src="img/logo.png" alt="logo" />
      </div>
      <div class="filto-author">
        <select id="authors">
          <option value=""></option>
          <option value="Bon Jovi">Bon Jovi</option>
          <option value="Queen">Queen</option>
          <option value="Sting">Sting</option>
          <option value="Steve Gadd Band">Steve Gadd Band</option>
          <option value="Iron Maiden">Iron Maiden</option>
          <option value="Eric Clapton">Eric Clapton</option>
          <option value="Deep Purple">Deep Purple</option>
          <option value="Metallica">Metallica</option>
          <option value="Dave Weckl">Dave Weckl</option>
          <option value="Michael Jacjson">Michael Jacjson</option>
        </select>
      </div>
    </header>
    <main>
      <div class="contenitore-dischi contenitore">
      <!--<div class="contenitore-dischi contenitore">
        <?php /*foreach ($database as $album) { ?>
          <div class="cd">
            <img src="<?php echo $album['poster']; ?>" alt="">
            <h2><?php echo $album['title']; ?></h2>
            <span class="author"><?php echo $album['author']; ?></span>
            <span class="year"><?php echo $album['year']; ?></span>
          </div>
        <?php } */?>
      </div>-->
      </div>
    </main>
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img src="{{poster}}" alt="">
        <h2>{{title}}</h2>
        <span class="author">{{author}}</span>
        <span class="year">{{year}}</span>
      </div>
    </script>
  </body>
</html>
