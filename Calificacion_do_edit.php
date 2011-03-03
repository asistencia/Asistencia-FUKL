<?php include_once("dao/CalificacionDAO.php")?>
<?php
  $id = $_POST["id"];
  $Calificacion = new CalificacionDAO();
  
  if(isset($_POST["id"])) $Calificacion->_set_id( $_POST["id"] );
  if(isset($_POST["idCalificacion"])) $Calificacion->set_idCalificacion( $_POST["idCalificacion"] );
  if(isset($_POST["idGrupoEstudiante"])) $Calificacion->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );
  if(isset($_POST["idActividad"])) $Calificacion->set_idActividad( $_POST["idActividad"] );
  if(isset($_POST["nota"])) $Calificacion->set_nota( $_POST["nota"] );

  $result = $Calificacion->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Calificacion->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

