<?php include_once("dao/GrupoDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Grupo = Grupo_find_by_id($id);  
  $result = $Grupo->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Grupo->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

