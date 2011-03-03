<?php include_once("dao/Grupo_EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Grupo_Estudiante = Grupo_Estudiante_find_by_id($id); 
?>

<form method="post" action="Grupo_Estudiante_do_edit.php">

 <div>
  <div>
   <div>idGrupoEstudiante</div>
   <div><input name="idGrupoEstudiante" value="<?php echo $Grupo_Estudiante->get_idGrupoEstudiante(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idGrupo</div>
   <div><input name="idGrupo" value="<?php echo $Grupo_Estudiante->get_idGrupo(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idEstudiante</div>
   <div><input name="idEstudiante" value="<?php echo $Grupo_Estudiante->get_idEstudiante(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


