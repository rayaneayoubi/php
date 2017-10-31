<?php
// 1.preparation de la requete 2.execustion  3.recuperation des donnees FETCH
$query = $db->prepare('SELECT * FROM Question ORDER BY level ASC');
$query->execute();
$questions = $query->fetchAll(PDO::FETCH_OBJ);//questions est un tableau object
//var_dump($questions);
 ?>
 <h2> Liste des questions</h2>
 <table class="table table-striped table-bordered"  >
   <tr>
     <th style="text-align:center">Intitule</th>
     <th>category</th>
     <th>level</th>
     <th>Actions</th>
   </tr>
 <?php foreach($questions as $question):?>
 <tr>
   <td><?=$question->title?></td>
   <td><?=$question->category?></td>
   <td><?=$question ->level?></td>
   <td>
     <a
     href="?route=question/delete&id=<?= $question->id ?>"
     class="btn btn-danger btn-xs"> Delete</a>
     <a
       href="?route=question/edit&id=<?= $question->id ?>"
       class="btn btn-xs"> Edit</a>
     </td>
</tr>


<?php endforeach ?>
</table>
