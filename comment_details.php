<?php include_once("dao/commentDAO.php")?>
<?php
  $id = $_GET["id"];  
  $comment = comment_find_by_id($id); 
?>

 <div>
  <div>
   <div>id_comment:</div>
   <div><?php echo $comment->get_id_comment(); ?></div>   
  </div> 
  
  <div>
   <div>post:</div>
   <div><?php echo $comment->get_post(); ?></div>   
  </div> 
  
  <div>
   <div>user:</div>
   <div><?php echo $comment->get_user(); ?></div>   
  </div> 
  
  <div>
   <div>content:</div>
   <div><?php echo $comment->get_content(); ?></div>   
  </div> 
  
  <div>
   <div>date:</div>
   <div><?php echo $comment->get_date(); ?></div>   
  </div> 
  
 </div> 


