<?php include_once("dao/ProfesorDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Profesor = Profesor_find_by_id($id); 
?>

<form method="post" action="Profesor_do_edit.php">

 <div>
  <div>
   <div>idProfesor</div>
   <div><input name="idProfesor" value="<?php echo $Profesor->get_idProfesor(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nombre</div>
   <div><input name="nombre" value="<?php echo $Profesor->get_nombre(); ?>"/></div>   
  </div> 
  
  <div>
   <div>idFacultad</div>
   <div><input name="idFacultad" value="<?php echo $Profesor->get_idFacultad(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


