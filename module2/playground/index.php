<?php
$db = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'root','paris');
$sql ='SELECT *FROM stagiaire';
foreach($db->query($sql, PDO::FETCH_OBJ) as $s){
  echo '<p>OBJ'  . $s -> id. '</p>';
  echo '<p>OBJ'  . $s -> nom . "  ". $s -> prenom . '</p>';
}
?>
<!-- <?php
$db = new PDO('mysql:host=localhost;dbname=quizz;', 'root','paris');
// $db est un objet de type pdo
//il contient des methodes qui permettent d`interagir avec les b.d.
//var_dump($db);


// => query();
$sql ='SELECT *FROM stagiaire';
//$db->query($sql);
//fetch
//lignes sql transfores en tableaux PHP (a la fois assoc. et nume.)
foreach($db->query($sql, PDO::FETCH_OBJ) as $s)
//{var_dump($s);}
{
   //echo '<p>'.$s[1]. '</p>';
  //echo '<p>ASSOC'  .$s['nom']. '</p>';
  echo '<p>OBJ'  . $s -> id. '</p>';
  echo '<p>OBJ'  . $s -> nom . "  ". $s -> prenom . '</p>';

}

?> -->
