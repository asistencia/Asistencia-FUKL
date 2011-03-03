<?php include_once("dao/roleDAO.php")?>
<?php
  $id = $_POST["id"];
  $role = new roleDAO();
  
  if(isset($_POST["id"])) $role->_set_id( $_POST["id"] );
  if(isset($_POST["name"])) $role->set_name( $_POST["name"] );
  if(isset($_POST["id"])) $role->set_id( $_POST["id"] );

  $result = $role->update();

  if($result){
     echo "The update was executed succesfully.";
     echo "Id ".$role->_get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

