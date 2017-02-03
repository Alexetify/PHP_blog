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
        <div>
          <div class="article">
            <h3>
              <?=$article['title']?>
            </h3>
            <em>О п у б л и к о в а н о : <?=$article['date']?></em>
            <p><?=$article['content']?></p>
          </div>
        </div>
        <footer>
          <p>
            Мой Первый Блог <br>Copyright &copy; 2017
          </p>
        </footer>
     </div>
  </body>
</html>