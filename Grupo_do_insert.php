<?php include_once("dao/GrupoDAO.php")?>
<?php
  $Grupo = new GrupoDAO();
  
  if(isset($_POST["idGrupo"])) $Grupo->set_idGrupo( $_POST["idGrupo"] );
  if(isset($_POST["horario"])) $Grupo->set_horario( $_POST["horario"] );
  if(isset($_POST["salon"])) $Grupo->set_salon( $_POST["salon"] );
  if(isset($_POST["idAsignatura"])) $Grupo->set_idAsignatura( $_POST["idAsignatura"] );
  if(isset($_POST["idProfesor"])) $Grupo->set_idProfesor( $_POST["idProfesor"] );
  if(isset($_POST["idFacultad"])) $Grupo->set_idFacultad( $_POST["idFacultad"] );

  $result = $Grupo->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Grupo->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

