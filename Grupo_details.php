<?php include_once("dao/GrupoDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Grupo = Grupo_find_by_id($id); 
?>

 <div>
  <div>
   <div>idGrupo:</div>
   <div><?php echo $Grupo->get_idGrupo(); ?></div>   
  </div> 
  
  <div>
   <div>horario:</div>
   <div><?php echo $Grupo->get_horario(); ?></div>   
  </div> 
  
  <div>
   <div>salon:</div>
   <div><?php echo $Grupo->get_salon(); ?></div>   
  </div> 
  
  <div>
   <div>idAsignatura:</div>
   <div><?php echo $Grupo->get_idAsignatura(); ?></div>   
  </div> 
  
  <div>
   <div>idProfesor:</div>
   <div><?php echo $Grupo->get_idProfesor(); ?></div>   
  </div> 
  
  <div>
   <div>idFacultad:</div>
   <div><?php echo $Grupo->get_idFacultad(); ?></div>   
  </div> 
  
 </div> 


