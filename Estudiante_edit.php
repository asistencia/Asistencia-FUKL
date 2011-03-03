<?php include_once("dao/EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Estudiante = Estudiante_find_by_id($id); 
?>

<form method="post" action="Estudiante_do_edit.php">

 <div>
  <div>
   <div>idEstudiante</div>
   <div><input name="idEstudiante" value="<?php echo $Estudiante->get_idEstudiante(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nombre</div>
   <div><input name="nombre" value="<?php echo $Estudiante->get_nombre(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idFacultad</div>
   <div><input name="idFacultad" value="<?php echo $Estudiante->get_idFacultad(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


