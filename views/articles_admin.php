<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Мой Первый Блог</title>
      <link rel="stylesheet" href="../style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Мой Первый Блог</h1>
      
        <div>
         <a href="index.php?action=add">Д о б а в и т ь  с т а т ь ю</a>
         <meta charset="utf-8">
  <table class="admin-table">
   <tr>
       <th>Д а т а</th>
       <th>З а г о л о в о к</th>
       <th></th>
       <th></th>
   </tr>
   <?php foreach($articles as $a): ?>
   <tr>
       <td><?=$a['date']?></td>
       <td><?=$a['title']?></td>
       <td>
           <a href="index.php?action=edit&id=<?=$a['id']?>">Р е д а к т и р о в а т ь</a>
       </td>
       <td>
           <a href="index.php?action=delete&id=<?=$a['id']?>">У д а л и т ь</a>
       </td>
   </tr>
   <?php endforeach ?>
   </table>
    </div>
        <footer>
          <p>
            Мой Первый Блог <br>Copyright &copy; 2017
          </p>
        </footer>
     </div>
  </body>
</html>