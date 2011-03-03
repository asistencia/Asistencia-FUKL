<?php include_once("dao/EstudianteDAO.php")?>
<?php
  $Estudiante = new EstudianteDAO();
  
  if(isset($_POST["idEstudiante"])) $Estudiante->set_idEstudiante( $_POST["idEstudiante"] );
  if(isset($_POST["nombre"])) $Estudiante->set_nombre( $_POST["nombre"] );
  if(isset($_POST["idFacultad"])) $Estudiante->set_idFacultad( $_POST["idFacultad"] );

  $result = $Estudiante->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Estudiante->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

