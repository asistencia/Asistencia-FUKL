<?php include_once("dao/AsistenciaDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Asistencia = Asistencia_find_by_id($id); 
?>

<form method="post" action="Asistencia_do_edit.php">

 <div>
  <div>
   <div>idAsistencia</div>
   <div><input name="idAsistencia" value="<?php echo $Asistencia->get_idAsistencia(); ?>"/></div>   
  </div> 
  
  <div>
   <div>fecha</div>
   <div><input name="fecha" value="<?php echo $Asistencia->get_fecha(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idGrupoEstudiante</div>
   <div><input name="idGrupoEstudiante" value="<?php echo $Asistencia->get_idGrupoEstudiante(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


