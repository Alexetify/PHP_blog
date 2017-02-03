<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Мой Первый Блог</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Мой Первый Блог</h1>
      <a href="admin">Панель Администратора</a>
        <div>
          <?php foreach($articles as $a): ?>
          <div class="article">
            <h3>
              <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>
            </h3>
            <em>О п у б л и к о в а н о: <?=$a['date']?></em>
            <p><?=articles_intro($a['content'])?></p>
          </div>
        <?php endforeach ?>
        </div>
        <footer>
          <p>
            Мой Первый Блог <br>Copyright &copy; 2017
          </p>
        </footer>
     </div>
  </body>
</html>