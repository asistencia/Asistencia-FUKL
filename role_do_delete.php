<?php include_once("dao/roleDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $role = role_find_by_id($id);  
  $result = $role->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$role->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

