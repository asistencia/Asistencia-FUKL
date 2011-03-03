<?php include_once("dao/CalificacionDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Calificacion = Calificacion_find_by_id($id); 
?>

 <div>
  <div>
   <div>idCalificacion:</div>
   <div><?php echo $Calificacion->get_idCalificacion(); ?></div>   
  </div> 
  
  <div>
   <div>idGrupoEstudiante:</div>
   <div><?php echo $Calificacion->get_idGrupoEstudiante(); ?></div>   
  </div> 
  
  <div>
   <div>idActividad:</div>
   <div><?php echo $Calificacion->get_idActividad(); ?></div>   
  </div> 
  
  <div>
   <div>nota:</div>
   <div><?php echo $Calificacion->get_nota(); ?></div>   
  </div> 
  
 </div> 


