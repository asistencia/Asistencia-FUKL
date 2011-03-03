<?php include_once("dao/ProfesorDAO.php")?>
<?php
  $id = $_POST["id"];
  $Profesor = new ProfesorDAO();
  
  if(isset($_POST["id"])) $Profesor->_set_id( $_POST["id"] );
  if(isset($_POST["idProfesor"])) $Profesor->set_idProfesor( $_POST["idProfesor"] );
  if(isset($_POST["nombre"])) $Profesor->set_nombre( $_POST["nombre"] );
  if(isset($_POST["idFacultad"])) $Profesor->set_idFacultad( $_POST["idFacultad"] );

  $result = $Profesor->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Profesor->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

