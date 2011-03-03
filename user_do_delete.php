<?php include_once("dao/userDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $user = user_find_by_id($id);  
  $result = $user->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$user->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

