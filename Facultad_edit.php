<?php include_once("dao/FacultadDAO.php")?>
<?php
  $id = $_GET["id"];  
  $Facultad = Facultad_find_by_id($id); 
?>

<form method="post" action="Facultad_do_edit.php">

 <div>
  <div>
   <div>idFacultad</div>
   <div><input name="idFacultad" value="<?php echo $Facultad->get_idFacultad(); ?>"/></div>   
  </div> 
  
  <div>
   <div>nombreFac</div>
   <div><input name="nombreFac" value="<?php echo $Facultad->get_nombreFac(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


