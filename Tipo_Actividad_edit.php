<?php include_once("dao/Tipo_ActividadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Tipo_Actividad = Tipo_Actividad_find_by_id($id); 
?>

<form method="post" action="Tipo_Actividad_do_edit.php">

 <div>
  <div>
   <div>idTipo</div>
   <div><input name="idTipo" value="<?php echo $Tipo_Actividad->get_idTipo(); ?>"/></div>   
  </div> 
  
  <div>
   <div>descripcion</div>
   <div><input name="descripcion" value="<?php echo $Tipo_Actividad->get_descripcion(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


