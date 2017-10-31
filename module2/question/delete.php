<?php
//suppression de la quest dont l`id est passe en parametre d`url
//echo 'delete';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query=$db->prepare('DELETE FROM Question WHERE id =:id');
  $result=$query->execute(array(':id'=>intval($id)));
  if($result){
    //encas de succes redirection vers  la liste des questions
    header('location:?route=question/list');

  }else{
    echo '<p>Suppression impossible </p>';
  }
}

?>
