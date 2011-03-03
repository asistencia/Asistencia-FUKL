<?php include_once("dao/sectionDAO.php")?>
<?php
  $section = new sectionDAO();
  
  if(isset($_POST["section_id"])) $section->set_section_id( $_POST["section_id"] );
  if(isset($_POST["name"])) $section->set_name( $_POST["name"] );

  $result = $section->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$section->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

