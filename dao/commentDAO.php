<?php include_once("lib/connection.php")?>
<?php 

 class commentDAO{
 
    var $id_comment;
    var $post;
    var $user;
    var $content;
    var $date;

/* -----    Getters and Setters ----------*/

    function _set_id( $id_comment ){
 		$this->id_comment = $id_comment;
    }

    function _get_id(){
 		return $this->id_comment;
    }

    function get_id_comment(){
 		return $this->id_comment;
    }
    
    function set_id_comment($id_comment){
	   $this->id_comment = $id_comment;    
    }    
    
    function get_post(){
 		return $this->post;
    }
    
    function set_post($post){
	   $this->post = $post;    
    }    
    
    function get_user(){
 		return $this->user;
    }
    
    function set_user($user){
	   $this->user = $user;    
    }    
    
    function get_content(){
 		return $this->content;
    }
    
    function set_content($content){
	   $this->content = $content;    
    }    
    
    function get_date(){
 		return $this->date;
    }
    
    function set_date($date){
	   $this->date = $date;    
    }    
    

    function update(){
    	$sql = "UPDATE comment SET id_comment = '$this->id_comment', post = '$this->post', user = '$this->user', content = '$this->content', date = '$this->date' WHERE id_comment = '$this->id_comment' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM comment WHERE id_comment = ".$this->id_comment;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO comment(id_comment, post, user, content, date) VALUES('$this->id_comment', '$this->post', '$this->user', '$this->content', '$this->date')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->id_comment = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function comment_find_all(){
    $sql = "SELECT id_comment, post, user, content, date FROM comment";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new commentDAO(); 
    	
    	$pos = 0;
    	$obj->id_comment = $row[$pos++];
    	$obj->post = $row[$pos++];
    	$obj->user = $row[$pos++];
    	$obj->content = $row[$pos++];
    	$obj->date = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function comment_find_by_id($id){
    $sql = "SELECT id_comment, post, user, content, date FROM comment WHERE id_comment = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new commentDAO();

       $pos = 0;
       $obj->id_comment = $row[$pos++];
       $obj->post = $row[$pos++];
       $obj->user = $row[$pos++];
       $obj->content = $row[$pos++];
       $obj->date = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
