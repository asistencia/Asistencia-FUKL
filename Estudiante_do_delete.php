<?php include_once("dao/EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Estudiante = Estudiante_find_by_id($id);  
  $result = $Estudiante->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Estudiante->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

