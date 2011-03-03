<?php include_once("dao/AsignaturaDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $Asignatura = Asignatura_find_by_id($id);  
  $result = $Asignatura->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$Asignatura->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

