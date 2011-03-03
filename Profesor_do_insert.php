<?php include_once("dao/ProfesorDAO.php")?>
<?php
  $Profesor = new ProfesorDAO();
  
  if(isset($_POST["idProfesor"])) $Profesor->set_idProfesor( $_POST["idProfesor"] );
  if(isset($_POST["nombre"])) $Profesor->set_nombre( $_POST["nombre"] );
  if(isset($_POST["idFacultad"])) $Profesor->set_idFacultad( $_POST["idFacultad"] );

  $result = $Profesor->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Profesor->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

