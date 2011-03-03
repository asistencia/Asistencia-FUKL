<?php include_once("dao/sectionDAO.php")?>
<?php
  $id = $_POST["id"];
  $section = new sectionDAO();
  
  if(isset($_POST["id"])) $section->_set_id( $_POST["id"] );
  if(isset($_POST["section_id"])) $section->set_section_id( $_POST["section_id"] );
  if(isset($_POST["name"])) $section->set_name( $_POST["name"] );

  $result = $section->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$section->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

