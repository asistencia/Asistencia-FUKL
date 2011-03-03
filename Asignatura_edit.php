<?php include_once("dao/AsignaturaDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Asignatura = Asignatura_find_by_id($id); 
?>

<form method="post" action="Asignatura_do_edit.php">

 <div>
  <div>
   <div>idAsignatura</div>
   <div><input name="idAsignatura" value="<?php echo $Asignatura->get_idAsignatura(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nombre</div>
   <div><input name="nombre" value="<?php echo $Asignatura->get_nombre(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


