<?php include_once("dao/Grupo_EstudianteDAO.php")?>
<?php
  $Grupo_Estudiante = new Grupo_EstudianteDAO();
  
  if(isset($_POST["idGrupoEstudiante"])) $Grupo_Estudiante->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );
  if(isset($_POST["idGrupo"])) $Grupo_Estudiante->set_idGrupo( $_POST["idGrupo"] );
  if(isset($_POST["idEstudiante"])) $Grupo_Estudiante->set_idEstudiante( $_POST["idEstudiante"] );

  $result = $Grupo_Estudiante->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Grupo_Estudiante->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

