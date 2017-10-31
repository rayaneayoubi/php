<?php
include('categories.php');//acces a la variable categories
if(isset($_GET['id'])){
  $id=$_GET['id'];
  echo $id;
  $query =$db->prepare('SELECT * FROM Question WHERE id=:id');
  $query ->execute(array(
    ':id'=> intval($id),
  ));
$question =$query -> fetch(PDO::FETCH_OBJ);//renvoie un objet
//var_dump($question);
}
?>
 <form  method="POST">
   <div class="form-group">
     <label>Intitule de la question</label>
     <input  value="<?= $question->title ?>"type="text" class="form-group" name="title" required>
   </div>
   <div class="form-group">
     <select name="category">
     <option value="0" >Choisir une categorie</option>
     <?php foreach($categories as $categorie): ?>
     <?php if($question->categorie  ==  $categorie): ?>
     <option selected> <?= $categorie ?> </option>
     <?php else: ?>
     <option><?= $categorie ?></option>
     <?php endif ?>
       <!-- <option > <?= $categorie ?> </option> -->
     <?php endforeach ?>
      <!-- <option <?php if($question->categorie==Sport) echo "selected"?>>Sport</option> -->
     </select>
     </div>
     <div class="form-group">
       <select name="level">
       <option value="0" >Choisir un niveau de difficulte</option>
         <option value="1">Facile</option>
           <option value="2">Moyen</option>
             <option value="3">Difficile</option>
      </select></div>
 <input type="submit" class="btn btn-primary" value="Modify" name="submit">
 </form>
