<?php include_once("dao/FacultadDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Facultad = Facultad_find_by_id($id);  
  $result = $Facultad->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Facultad->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

