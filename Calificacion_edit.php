<?php include_once("dao/CalificacionDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Calificacion = Calificacion_find_by_id($id); 
?>

<form method="post" action="Calificacion_do_edit.php">

 <div>
  <div>
   <div>idCalificacion</div>
   <div><input name="idCalificacion" value="<?php echo $Calificacion->get_idCalificacion(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idGrupoEstudiante</div>
   <div><input name="idGrupoEstudiante" value="<?php echo $Calificacion->get_idGrupoEstudiante(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idActividad</div>
   <div><input name="idActividad" value="<?php echo $Calificacion->get_idActividad(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nota</div>
   <div><input name="nota" value="<?php echo $Calificacion->get_nota(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


