<?php include_once("dao/ActividadDAO.php")?>
<?php
  $id = $_POST["id"];
  $Actividad = new ActividadDAO();
  
  if(isset($_POST["id"])) $Actividad->_set_id( $_POST["id"] );
  if(isset($_POST["idActividad"])) $Actividad->set_idActividad( $_POST["idActividad"] );
  if(isset($_POST["idTipo"])) $Actividad->set_idTipo( $_POST["idTipo"] );
  if(isset($_POST["nombre"])) $Actividad->set_nombre( $_POST["nombre"] );
  if(isset($_POST["porcentaje"])) $Actividad->set_porcentaje( $_POST["porcentaje"] );

  $result = $Actividad->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Actividad->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

