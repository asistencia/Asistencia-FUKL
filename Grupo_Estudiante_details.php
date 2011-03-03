<?php include_once("dao/Grupo_EstudianteDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Grupo_Estudiante = Grupo_Estudiante_find_by_id($id); 
?>

 <div>
  <div>
   <div>idGrupoEstudiante:</div>
   <div><?php echo $Grupo_Estudiante->get_idGrupoEstudiante(); ?></div>   
  </div> 
  
  <div>
   <div>idGrupo:</div>
   <div><?php echo $Grupo_Estudiante->get_idGrupo(); ?></div>   
  </div> 
  
  <div>
   <div>idEstudiante:</div>
   <div><?php echo $Grupo_Estudiante->get_idEstudiante(); ?></div>   
  </div> 
  
 </div> 


