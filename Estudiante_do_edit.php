<?php include_once("dao/EstudianteDAO.php")?>
<?php
  $id = $_POST["id"];
  $Estudiante = new EstudianteDAO();
  
  if(isset($_POST["id"])) $Estudiante->_set_id( $_POST["id"] );
  if(isset($_POST["idEstudiante"])) $Estudiante->set_idEstudiante( $_POST["idEstudiante"] );
  if(isset($_POST["nombre"])) $Estudiante->set_nombre( $_POST["nombre"] );
  if(isset($_POST["idFacultad"])) $Estudiante->set_idFacultad( $_POST["idFacultad"] );

  $result = $Estudiante->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Estudiante->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

