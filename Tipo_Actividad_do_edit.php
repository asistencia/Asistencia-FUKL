<?php include_once("dao/Tipo_ActividadDAO.php")?>
<?php
  $id = $_POST["id"];
  $Tipo_Actividad = new Tipo_ActividadDAO();
  
  if(isset($_POST["id"])) $Tipo_Actividad->_set_id( $_POST["id"] );
  if(isset($_POST["idTipo"])) $Tipo_Actividad->set_idTipo( $_POST["idTipo"] );
  if(isset($_POST["descripcion"])) $Tipo_Actividad->set_descripcion( $_POST["descripcion"] );

  $result = $Tipo_Actividad->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Tipo_Actividad->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

