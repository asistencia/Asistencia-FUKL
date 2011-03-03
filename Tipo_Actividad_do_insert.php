<?php include_once("dao/Tipo_ActividadDAO.php")?>
<?php
  $Tipo_Actividad = new Tipo_ActividadDAO();
  
  if(isset($_POST["idTipo"])) $Tipo_Actividad->set_idTipo( $_POST["idTipo"] );
  if(isset($_POST["descripcion"])) $Tipo_Actividad->set_descripcion( $_POST["descripcion"] );

  $result = $Tipo_Actividad->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Tipo_Actividad->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

