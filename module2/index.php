<?php
include('routes.php');
$db = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root','paris');
if (isset($_GET['route'])){// echo $_GET['roote'];
  $route= $_GET['route'];
}?><!-- creation d`une application quizz -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Module 2: QUIZZ APP</title>
  </head>
    <body style="text-align:center">
  <header>
    <nav>
      <ul class="nav nav-tabs">
      <li><a href="?route=question/list">Liste des questions</a></li>
        <li><a href="?route=question/add">Ajout d`une question</a></li>
      </ul>
    </nav>
  </header>

    <h1>Module 2: QUIZZ APP</h1>
    <?php
    if(isset($route)) include($routes[$route]);
   ?>
  </body>
</html>
