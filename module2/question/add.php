<?php
include('categories.php');
//var_dump($db);
 if(isset($_POST['submit'])){
//var_dump($_POST);
// 1 validation des donnees
$cond1=$_POST['title'] != "";
$cond2=$_POST['category'] != "0";
$cond3=$_POST['level'] !="0";//comparaison faible
// var_dump($cond3);ou
if($cond1 && $cond2 && $cond3){
  //ttes les cond sont verifiees
// 2 enregistrement des donnees en db
//1. preparation de la requete
$query = $db->prepare(
  'INSERT INTO Question(title,category, level) VALUES (:title,:category,:level)'
);
// 2. excecution
// intval converti la valeur en entier
$result=$query->execute(array(
  ':title'        =>$_POST['title'],
  ':category'     =>$_POST['category'],
  ':level'        =>intval($_POST['level']),

));
if($result){
  //echo '<p> Enregistrement reussi</p>';
  // redirection vers la liste des questions
  header('location:?route=question/list');
} else{
  echo '<p> Enregistrement echoue</p>';
}
}else{
  echo 'Une des conditions de validation n\'est pas remplie';
}

}
 ?>
<h2>Ajout d`une question</h2>
<form  method="POST">
  <div class="form-group">
    <label>Intitule de la question</label>
    <input type="text" class="form-group" name="title" required>
  </div>
  <div class="form-group">
    <select name="categorie">
    <option value="0" >Choisir une categorie</option>
    <?php foreach($categories as $categorie): ?>
    <option> <?= $categorie ?> </option>
    <?php endforeach ?>
    </select>
  </div>
    <div class="form-group">
      <select name="level">
      <option value="0" >Choisir un niveau de difficulte</option>
      <option value="1">Facile</option>
      <option value="2">Moyen</option>
      <option value="3">Difficile</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Enregistrer" name="submit">
</form>
