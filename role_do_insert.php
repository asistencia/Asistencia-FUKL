<?php include_once("dao/roleDAO.php")?>
<?php
  $role = new roleDAO();
  
  if(isset($_POST["name"])) $role->set_name( $_POST["name"] );
  if(isset($_POST["id"])) $role->set_id( $_POST["id"] );

  $result = $role->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$role->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

