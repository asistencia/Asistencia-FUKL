<?php include_once("dao/postDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $post = post_find_by_id($id);  
  $result = $post->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$post->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

