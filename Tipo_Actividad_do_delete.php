<?php include_once("dao/Tipo_ActividadDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Tipo_Actividad = Tipo_Actividad_find_by_id($id);  
  $result = $Tipo_Actividad->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Tipo_Actividad->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

