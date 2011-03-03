<?php include_once("dao/userDAO.php")?>
<?php
  $user = new userDAO();
  
  if(isset($_POST["user_id"])) $user->set_user_id( $_POST["user_id"] );
  if(isset($_POST["name"])) $user->set_name( $_POST["name"] );
  if(isset($_POST["login"])) $user->set_login( $_POST["login"] );
  if(isset($_POST["email"])) $user->set_email( $_POST["email"] );
  if(isset($_POST["passwrd"])) $user->set_passwrd( $_POST["passwrd"] );
  if(isset($_POST["role"])) $user->set_role( $_POST["role"] );

  $result = $user->save();

  if($result){
     echo "The insertion was executed succesfully. <a href='/'>Back</a>";
     echo "Id ".$user->get_id()."<br>";
  }
  else{
  	header('Location: 500.php');
  }

?>

