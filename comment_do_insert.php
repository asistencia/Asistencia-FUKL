<?php include_once("dao/commentDAO.php")?>
<?php
  $comment = new commentDAO();
  
  if(isset($_POST["id_comment"])) $comment->set_id_comment( $_POST["id_comment"] );
  if(isset($_POST["post"])) $comment->set_post( $_POST["post"] );
  if(isset($_POST["user"])) $comment->set_user( $_POST["user"] );
  if(isset($_POST["content"])) $comment->set_content( $_POST["content"] );
  if(isset($_POST["date"])) $comment->set_date( $_POST["date"] );

  $result = $comment->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$comment->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

