<?php include_once("dao/postDAO.php")?>
<?php
  $post = new postDAO();
  
  if(isset($_POST["post"])) $post->set_post( $_POST["post"] );
  if(isset($_POST["title"])) $post->set_title( $_POST["title"] );
  if(isset($_POST["section"])) $post->set_section( $_POST["section"] );
  if(isset($_POST["content"])) $post->set_content( $_POST["content"] );
  if(isset($_POST["date"])) $post->set_date( $_POST["date"] );
  if(isset($_POST["user"])) $post->set_user( $_POST["user"] );
  if(isset($_POST["allowComments"])) $post->set_allowComments( $_POST["allowComments"] );

  $result = $post->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$post->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

