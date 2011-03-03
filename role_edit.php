<?php include_once("dao/roleDAO.php")?>
<?php
  $id = $_GET["id"];  
  $role = role_find_by_id($id); 
?>

<form method="post" action="role_do_edit.php">

 <div>
  <div>
   <div>name</div>
   <div><input name="name" value="<?php echo $role->get_name(); ?>"/></div>   
  </div> 
  
  <div>
   <div>id</div>
   <div><input name="id" value="<?php echo $role->get_id(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


