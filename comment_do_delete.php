<?php include_once("dao/commentDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $comment = comment_find_by_id($id);  
  $result = $comment->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$comment->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

