<?php include_once("dao/CalificacionDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Calificacion = Calificacion_find_by_id($id);  
  $result = $Calificacion->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Calificacion->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

