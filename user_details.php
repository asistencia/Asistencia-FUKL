<?php include_once("dao/userDAO.php")?>
<?php
  $id = $_GET["id"];  
  $user = user_find_by_id($id); 
?>

 <div>
  <div>
   <div>user_id:</div>
   <div><?php echo $user->get_user_id(); ?></div>   
  </div> 
  
  <div>
   <div>name:</div>
   <div><?php echo $user->get_name(); ?></div>   
  </div> 
  
  <div>
   <div>login:</div>
   <div><?php echo $user->get_login(); ?></div>   
  </div> 
  
  <div>
   <div>email:</div>
   <div><?php echo $user->get_email(); ?></div>   
  </div> 
  
  <div>
   <div>passwrd:</div>
   <div><?php echo $user->get_passwrd(); ?></div>   
  </div> 
  
  <div>
   <div>role:</div>
   <div><?php echo $user->get_role(); ?></div>   
  </div> 
  
 </div> 


