<?php include_once("dao/ProfesorDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Profesor = Profesor_find_by_id($id);  
  $result = $Profesor->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Profesor->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

