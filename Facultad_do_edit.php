<?php include_once("dao/FacultadDAO.php")?>
<?php
  $id = $_POST["id"];
  $Facultad = new FacultadDAO();
  
  if(isset($_POST["id"])) $Facultad->_set_id( $_POST["id"] );
  if(isset($_POST["idFacultad"])) $Facultad->set_idFacultad( $_POST["idFacultad"] );
  if(isset($_POST["nombreFac"])) $Facultad->set_nombreFac( $_POST["nombreFac"] );

  $result = $Facultad->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$Facultad->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

