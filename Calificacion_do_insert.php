<?php include_once("dao/CalificacionDAO.php")?>
<?php
  $Calificacion = new CalificacionDAO();
  
  if(isset($_POST["idCalificacion"])) $Calificacion->set_idCalificacion( $_POST["idCalificacion"] );
  if(isset($_POST["idGrupoEstudiante"])) $Calificacion->set_idGrupoEstudiante( $_POST["idGrupoEstudiante"] );
  if(isset($_POST["idActividad"])) $Calificacion->set_idActividad( $_POST["idActividad"] );
  if(isset($_POST["nota"])) $Calificacion->set_nota( $_POST["nota"] );

  $result = $Calificacion->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Calificacion->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

