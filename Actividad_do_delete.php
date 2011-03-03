<?php include_once("dao/ActividadDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Actividad = Actividad_find_by_id($id);  
  $result = $Actividad->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Actividad->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

