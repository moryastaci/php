<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bio.css">
    <title>Stray Kids</title>
  </head>

  <header class="showcase">
    <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="./kurs.html">ГЛАВНАЯ</a></li>
            <li><a href="./bio.html">БИОГРАФИЯ</a></li>
            <li><a href="#">ДИСКОГРАФИЯ</a></li>
            <li><a href="#">КЛИПЫ</a></li>
            <li><a href="#">ГАЛЕРЕЯ</a></li>
            <li><a href="#">СОЦСЕТИ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container showcase-inner">
    <h2>КОНЦЕРТЫ</h2>
    <p class="bio">Stray Kids (кор. 스트레이 키즈; яп. ストレイキッズ; стилизуется как SKZ) — южнокорейский 
      бой-бэнд, сформированный в 2017 году компанией JYP Entertainment через одноимённое 
      реалити-шоу. Группа состоит из восьми участников: Бан Чана, Ли Ноу, Чанбина, 
      Хёнджина, Хана, Феликса, Сынмина и I.N. Первоначально в Stray Kids было девять 
      участников, но Уджин покинул группу 28 октября 2019. 8 января 2018 года они 
      выпустили пре-дебютный мини-альбом Mixtape. Официальный дебют состоялся 25 марта 
      2018 года с мини-альбомом I Am Not.</p>
</div>
</header>
  <body> 
  <?php
    include "DbConnect.php";
    $db = new DbConnect();
    $conn = $db->connect();

    $stmt = $conn -> prepare("SELECT * FROM docker_database.concerts");
    $stmt -> execute();
    $tests = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($tests);
    echo "</pre>";
    ?>
    <!--<h1>
      <?php
      echo phpversion();
      ?> -->
  </body>
</html>