<?php include_once("dao/Grupo_EstudianteDAO.php")?>
<?php
  $id = $_POST["id"];
  $Grupo_Estudiante = new Grupo_EstudianteDAO();
  
  if(isset($_POST["id"])) $Grupo_Estudiante->_set_id( $_POST["id"] );
  if(isset($_POST["idGrupoEstudiante"])) $Grupo_Estudiante->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );
  if(isset($_POST["idGrupo"])) $Grupo_Estudiante->set_idGrupo( $_POST["idGrupo"] );
  if(isset($_POST["idEstudiante"])) $Grupo_Estudiante->set_idEstudiante( $_POST["idEstudiante"] );

  $result = $Grupo_Estudiante->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Grupo_Estudiante->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

