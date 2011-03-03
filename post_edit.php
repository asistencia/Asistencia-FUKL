<?php include_once("dao/postDAO.php")?>
<?php
  $id = $_GET["id"];  
  $post = post_find_by_id($id); 
?>

<form method="post" action="post_do_edit.php">

 <div>
  <div>
   <div>post</div>
   <div><input name="post" value="<?php echo $post->get_post(); ?>"/></div>   
  </div> 
  
  <div>
   <div>title</div>
   <div><input name="title" value="<?php echo $post->get_title(); ?>"/></div>   
  </div> 
  
  <div>
   <div>section</div>
   <div><input name="section" value="<?php echo $post->get_section(); ?>"/></div>   
  </div> 
  
  <div>
   <div>content</div>
   <div><input name="content" value="<?php echo $post->get_content(); ?>"/></div>   
  </div> 
  
  <div>
   <div>date</div>
   <div><input name="date" value="<?php echo $post->get_date(); ?>"/></div>   
  </div> 
  
  <div>
   <div>user</div>
   <div><input name="user" value="<?php echo $post->get_user(); ?>"/></div>   
  </div> 
  
  <div>
   <div>allowComments</div>
   <div><input name="allowComments" value="<?php echo $post->get_allowComments(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


