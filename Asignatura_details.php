<?php include_once("dao/AsignaturaDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Asignatura = Asignatura_find_by_id($id); 
?>

 <div>
  <div>
   <div>idAsignatura:</div>
   <div><?php echo $Asignatura->get_idAsignatura(); ?></div>   
  </div> 
  
  <div>
   <div>nombre:</div>
   <div><?php echo $Asignatura->get_nombre(); ?></div>   
  </div> 
  
 </div> 


