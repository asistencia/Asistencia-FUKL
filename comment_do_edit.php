<?php include_once("dao/commentDAO.php")?>
<?php
  $id = $_POST["id"];
  $comment = new commentDAO();
  
  if(isset($_POST["id"])) $comment->_set_id( $_POST["id"] );
  if(isset($_POST["id_comment"])) $comment->set_id_comment( $_POST["id_comment"] );
  if(isset($_POST["post"])) $comment->set_post( $_POST["post"] );
  if(isset($_POST["user"])) $comment->set_user( $_POST["user"] );
  if(isset($_POST["content"])) $comment->set_content( $_POST["content"] );
  if(isset($_POST["date"])) $comment->set_date( $_POST["date"] );

  $result = $comment->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$comment->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

