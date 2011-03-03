<?php include_once("dao/GrupoDAO.php")?>
<?php
  $id = $_POST["id"];
  $Grupo = new GrupoDAO();
  
  if(isset($_POST["id"])) $Grupo->_set_id( $_POST["id"] );
  if(isset($_POST["idGrupo"])) $Grupo->set_idGrupo( $_POST["idGrupo"] );
  if(isset($_POST["horario"])) $Grupo->set_horario( $_POST["horario"] );
  if(isset($_POST["salon"])) $Grupo->set_salon( $_POST["salon"] );
  if(isset($_POST["idAsignatura"])) $Grupo->set_idAsignatura( $_POST["idAsignatura"] );
  if(isset($_POST["idProfesor"])) $Grupo->set_idProfesor( $_POST["idProfesor"] );
  if(isset($_POST["idFacultad"])) $Grupo->set_idFacultad( $_POST["idFacultad"] );

  $result = $Grupo->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Grupo->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

