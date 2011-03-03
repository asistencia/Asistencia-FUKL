<?php include_once("dao/FacultadDAO.php")?>
<?php
  $Facultad = new FacultadDAO();
  
  if(isset($_POST["idFacultad"])) $Facultad->set_idFacultad( $_POST["idFacultad"] );
  if(isset($_POST["nombreFac"])) $Facultad->set_nombreFac( $_POST["nombreFac"] );

  $result = $Facultad->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$Facultad->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

