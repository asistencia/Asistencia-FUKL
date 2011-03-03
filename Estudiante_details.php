<?php include_once("dao/EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Estudiante = Estudiante_find_by_id($id); 
?>

 <div>
  <div>
   <div>idEstudiante:</div>
   <div><?php echo $Estudiante->get_idEstudiante(); ?></div>   
  </div> 
  
  <div>
   <div>nombre:</div>
   <div><?php echo $Estudiante->get_nombre(); ?></div>   
  </div> 
  
  <div>
   <div>idFacultad:</div>
   <div><?php echo $Estudiante->get_idFacultad(); ?></div>   
  </div> 
  
 </div> 


