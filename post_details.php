<?php include_once("dao/postDAO.php")?>
<?php
  $id = $_GET["id"];  
  $post = post_find_by_id($id); 
?>

 <div>
  <div>
   <div>post:</div>
   <div><?php echo $post->get_post(); ?></div>   
  </div> 
  
  <div>
   <div>title:</div>
   <div><?php echo $post->get_title(); ?></div>   
  </div> 
  
  <div>
   <div>section:</div>
   <div><?php echo $post->get_section(); ?></div>   
  </div> 
  
  <div>
   <div>content:</div>
   <div><?php echo $post->get_content(); ?></div>   
  </div> 
  
  <div>
   <div>date:</div>
   <div><?php echo $post->get_date(); ?></div>   
  </div> 
  
  <div>
   <div>user:</div>
   <div><?php echo $post->get_user(); ?></div>   
  </div> 
  
  <div>
   <div>allowComments:</div>
   <div><?php echo $post->get_allowComments(); ?></div>   
  </div> 
  
 </div> 


