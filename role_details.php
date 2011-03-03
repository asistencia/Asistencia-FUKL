<?php include_once("dao/roleDAO.php")?>
<?php
  $id = $_GET["id"];  
  $role = role_find_by_id($id); 
?>

 <div>
  <div>
   <div>name:</div>
   <div><?php echo $role->get_name(); ?></div>   
  </div> 
  
  <div>
   <div>id:</div>
   <div><?php echo $role->get_id(); ?></div>   
  </div> 
  
 </div> 


