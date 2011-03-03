<?php include_once("dao/sectionDAO.php")?>
<?php
  $id = $_GET["id"];  
  $section = section_find_by_id($id); 
?>

<form method="post" action="section_do_edit.php">

 <div>
  <div>
   <div>section_id</div>
   <div><input name="section_id" value="<?php echo $section->get_section_id(); ?>"/></div>   
  </div> 
  
  <div>
   <div>name</div>
   <div><input name="name" value="<?php echo $section->get_name(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


