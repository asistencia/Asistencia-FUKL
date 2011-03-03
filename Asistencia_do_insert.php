<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $Asistencia = new AsistenciaDAO();
  
  if(isset($_POST["idAsistencia"])) $Asistencia->set_idAsistencia( $_POST["idAsistencia"] );
  if(isset($_POST["fecha"])) $Asistencia->set_fecha( $_POST["fecha"] );
  if(isset($_POST["idGrupoEstudiante"])) $Asistencia->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );

  $result = $Asistencia->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Asistencia->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

