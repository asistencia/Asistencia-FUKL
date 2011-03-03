<?php include_once("dao/ProfesorDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Profesor = Profesor_find_by_id($id); 
?>

 <div>
  <div>
   <div>idProfesor:</div>
   <div><?php echo $Profesor->get_idProfesor(); ?></div>   
  </div> 
  
  <div>
   <div>nombre:</div>
   <div><?php echo $Profesor->get_nombre(); ?></div>   
  </div> 
  
  <div>
   <div>idFacultad:</div>
   <div><?php echo $Profesor->get_idFacultad(); ?></div>   
  </div> 
  
 </div> 


