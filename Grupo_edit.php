<?php include_once("dao/GrupoDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Grupo = Grupo_find_by_id($id); 
?>

<form method="post" action="Grupo_do_edit.php">

 <div>
  <div>
   <div>idGrupo</div>
   <div><input name="idGrupo" value="<?php echo $Grupo->get_idGrupo(); ?>"/></div>   
  </div> 
  
  <div>
   <div>horario</div>
   <div><input name="horario" value="<?php echo $Grupo->get_horario(); ?>"/></div>   
  </div> 
  
  <div>
   <div>salon</div>
   <div><input name="salon" value="<?php echo $Grupo->get_salon(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idAsignatura</div>
   <div><input name="idAsignatura" value="<?php echo $Grupo->get_idAsignatura(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idProfesor</div>
   <div><input name="idProfesor" value="<?php echo $Grupo->get_idProfesor(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idFacultad</div>
   <div><input name="idFacultad" value="<?php echo $Grupo->get_idFacultad(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


