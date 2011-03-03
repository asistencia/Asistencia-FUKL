<?php include_once("dao/sectionDAO.php")?>
<?php
  $id = $_GET["id"];
  
  $section = section_find_by_id($id);  
  $result = $section->delete();

  if($result){
     echo "The insertion was executed succesfully.";
     echo "Id ".$section->getId()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

