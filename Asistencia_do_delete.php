<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Asistencia = Asistencia_find_by_id($id);  
  $result = $Asistencia->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Asistencia->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

