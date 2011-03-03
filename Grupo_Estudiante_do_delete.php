<?php include_once("dao/Grupo_EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Grupo_Estudiante = Grupo_Estudiante_find_by_id($id);  
  $result = $Grupo_Estudiante->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Grupo_Estudiante->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

