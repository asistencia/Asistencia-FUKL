<?php include_once("dao/Tipo_ActividadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Tipo_Actividad = Tipo_Actividad_find_by_id($id); 
?>

 <div>
  <div>
   <div>idTipo:</div>
   <div><?php echo $Tipo_Actividad->get_idTipo(); ?></div>   
  </div> 
  
  <div>
   <div>descripcion:</div>
   <div><?php echo $Tipo_Actividad->get_descripcion(); ?></div>   
  </div> 
  
 </div> 


