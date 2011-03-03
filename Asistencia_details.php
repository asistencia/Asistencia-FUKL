<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Asistencia = Asistencia_find_by_id($id); 
?>

 <div>
  <div>
   <div>idAsistencia:</div>
   <div><?php echo $Asistencia->get_idAsistencia(); ?></div>   
  </div> 
  
  <div>
   <div>fecha:</div>
   <div><?php echo $Asistencia->get_fecha(); ?></div>   
  </div> 
  
  <div>
   <div>idGrupoEstudiante:</div>
   <div><?php echo $Asistencia->get_idGrupoEstudiante(); ?></div>   
  </div> 
  
 </div> 


