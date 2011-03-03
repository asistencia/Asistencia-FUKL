<?php include_once("dao/FacultadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Facultad = Facultad_find_by_id($id); 
?>

 <div>
  <div>
   <div>idFacultad:</div>
   <div><?php echo $Facultad->get_idFacultad(); ?></div>   
  </div> 
  
  <div>
   <div>nombreFac:</div>
   <div><?php echo $Facultad->get_nombreFac(); ?></div>   
  </div> 
  
 </div> 


