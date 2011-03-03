<?php include_once("dao/ActividadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Actividad = Actividad_find_by_id($id); 
?>

 <div>
  <div>
   <div>idActividad:</div>
   <div><?php echo $Actividad->get_idActividad(); ?></div>   
  </div> 
  
  <div>
   <div>idTipo:</div>
   <div><?php echo $Actividad->get_idTipo(); ?></div>   
  </div> 
  
  <div>
   <div>nombre:</div>
   <div><?php echo $Actividad->get_nombre(); ?></div>   
  </div> 
  
  <div>
   <div>porcentaje:</div>
   <div><?php echo $Actividad->get_porcentaje(); ?></div>   
  </div> 
  
 </div> 


