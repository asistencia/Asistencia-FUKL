<?php include_once("dao/userDAO.php")?>
<?php
  $id = $_GET["id"];  
  $user = user_find_by_id($id); 
?>

<form method="post" action="user_do_edit.php">

 <div>
  <div>
   <div>user_id</div>
   <div><input name="user_id" value="<?php echo $user->get_user_id(); ?>"/></div>   
  </div> 
  
  <div>
   <div>name</div>
   <div><input name="name" value="<?php echo $user->get_name(); ?>"/></div>   
  </div> 
  
  <div>
   <div>login</div>
   <div><input name="login" value="<?php echo $user->get_login(); ?>"/></div>   
  </div> 
  
  <div>
   <div>email</div>
   <div><input name="email" value="<?php echo $user->get_email(); ?>"/></div>   
  </div> 
  
  <div>
   <div>passwrd</div>
   <div><input name="passwrd" value="<?php echo $user->get_passwrd(); ?>"/></div>   
  </div> 
  
  <div>
   <div>role</div>
   <div><input name="role" value="<?php echo $user->get_role(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


