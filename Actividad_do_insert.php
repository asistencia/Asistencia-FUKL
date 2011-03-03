<?php include_once("dao/ActividadDAO.php")?>
<?php
  $Actividad = new ActividadDAO();
  
  if(isset($_POST["idActividad"])) $Actividad->set_idActividad( $_POST["idActividad"] );
  if(isset($_POST["idTipo"])) $Actividad->set_idTipo( $_POST["idTipo"] );
  if(isset($_POST["nombre"])) $Actividad->set_nombre( $_POST["nombre"] );
  if(isset($_POST["porcentaje"])) $Actividad->set_porcentaje( $_POST["porcentaje"] );

  $result = $Actividad->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Actividad->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

