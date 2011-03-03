<?php include_once("dao/commentDAO.php")?>
<?php
  $id = $_GET["id"];  
  $comment = comment_find_by_id($id); 
?>

<form method="post" action="comment_do_edit.php">

 <div>
  <div>
   <div>id_comment</div>
   <div><input name="id_comment" value="<?php echo $comment->get_id_comment(); ?>"/></div>   
  </div> 
  
  <div>
   <div>post</div>
   <div><input name="post" value="<?php echo $comment->get_post(); ?>"/></div>   
  </div> 
  
  <div>
   <div>user</div>
   <div><input name="user" value="<?php echo $comment->get_user(); ?>"/></div>   
  </div> 
  
  <div>
   <div>content</div>
   <div><input name="content" value="<?php echo $comment->get_content(); ?>"/></div>   
  </div> 
  
  <div>
   <div>date</div>
   <div><input name="date" value="<?php echo $comment->get_date(); ?>"/></div>   
  </div> 
  
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  <div><input type="submit" /></div> 
 </div>

</form> 


