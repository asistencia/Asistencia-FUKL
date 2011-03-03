<?php include_once("dao/AsignaturaDAO.php")?>
<?php
  $Asignatura = new AsignaturaDAO();
  
  if(isset($_POST["idAsignatura"])) $Asignatura->set_idAsignatura( $_POST["idAsignatura"] );
  if(isset($_POST["nombre"])) $Asignatura->set_nombre( $_POST["nombre"] );

  $result = $Asignatura->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Asignatura->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

