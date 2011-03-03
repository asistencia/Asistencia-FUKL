<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $id = $_POST["id"];
  $Asistencia = new AsistenciaDAO();
  
  if(isset($_POST["id"])) $Asistencia->_set_id( $_POST["id"] );
  if(isset($_POST["idAsistencia"])) $Asistencia->set_idAsistencia( $_POST["idAsistencia"] );
  if(isset($_POST["fecha"])) $Asistencia->set_fecha( $_POST["fecha"] );
  if(isset($_POST["idGrupoEstudiante"])) $Asistencia->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );

  $result = $Asistencia->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Asistencia->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

