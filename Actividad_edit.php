<?php include_once("dao/ActividadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Actividad = Actividad_find_by_id($id); 
?>

<form method="post" action="Actividad_do_edit.php">

 <div>
  <div>
   <div>idActividad</div>
   <div><input name="idActividad" value="<?php echo $Actividad->get_idActividad(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idTipo</div>
   <div><input name="idTipo" value="<?php echo $Actividad->get_idTipo(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nombre</div>
   <div><input name="nombre" value="<?php echo $Actividad->get_nombre(); ?>"/></div>   
  </div> 
  
  <div>
   <div>porcentaje</div>
   <div><input name="porcentaje" value="<?php echo $Actividad->get_porcentaje(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


