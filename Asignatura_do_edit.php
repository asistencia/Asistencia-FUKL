<?php include_once("dao/AsignaturaDAO.php")?>
<?php
  $id = $_POST["id"];
  $Asignatura = new AsignaturaDAO();
  
  if(isset($_POST["id"])) $Asignatura->_set_id( $_POST["id"] );
  if(isset($_POST["idAsignatura"])) $Asignatura->set_idAsignatura( $_POST["idAsignatura"] );
  if(isset($_POST["nombre"])) $Asignatura->set_nombre( $_POST["nombre"] );

  $result = $Asignatura->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Asignatura->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

