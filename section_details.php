<?php include_once("dao/sectionDAO.php")?>
<?php
  $id = $_GET["id"];  
  $section = section_find_by_id($id); 
?>

 <div>
  <div>
   <div>section_id:</div>
   <div><?php echo $section->get_section_id(); ?></div>   
  </div> 
  
  <div>
   <div>name:</div>
   <div><?php echo $section->get_name(); ?></div>   
  </div> 
  
 </div> 


