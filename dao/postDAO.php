<?php include_once("lib/connection.php")?>
<?php 

 class postDAO{
 
    var $post;
    var $title;
    var $section;
    var $content;
    var $date;
    var $user;
    var $allowComments;

/* -----    Getters and Setters ----------*/

    function _set_id( $post ){
 		$this->post = $post;
    }

    function _get_id(){
 		return $this->post;
    }

    function get_post(){
 		return $this->post;
    }
    
    function set_post($post){
	   $this->post = $post;    
    }    
    
    function get_title(){
 		return $this->title;
    }
    
    function set_title($title){
	   $this->title = $title;    
    }    
    
    function get_section(){
 		return $this->section;
    }
    
    function set_section($section){
	   $this->section = $section;    
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
    
    function get_user(){
 		return $this->user;
    }
    
    function set_user($user){
	   $this->user = $user;    
    }    
    
    function get_allowComments(){
 		return $this->allowComments;
    }
    
    function set_allowComments($allowComments){
	   $this->allowComments = $allowComments;    
    }    
    

    function update(){
    	$sql = "UPDATE post SET post = '$this->post', title = '$this->title', section = '$this->section', content = '$this->content', date = '$this->date', user = '$this->user', allowComments = '$this->allowComments' WHERE post = '$this->post' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM post WHERE post = ".$this->post;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO post(post, title, section, content, date, user, allowComments) VALUES('$this->post', '$this->title', '$this->section', '$this->content', '$this->date', '$this->user', '$this->allowComments')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->post = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function post_find_all(){
    $sql = "SELECT post, title, section, content, date, user, allowComments FROM post";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new postDAO(); 
    	
    	$pos = 0;
    	$obj->post = $row[$pos++];
    	$obj->title = $row[$pos++];
    	$obj->section = $row[$pos++];
    	$obj->content = $row[$pos++];
    	$obj->date = $row[$pos++];
    	$obj->user = $row[$pos++];
    	$obj->allowComments = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function post_find_by_id($id){
    $sql = "SELECT post, title, section, content, date, user, allowComments FROM post WHERE post = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new postDAO();

       $pos = 0;
       $obj->post = $row[$pos++];
       $obj->title = $row[$pos++];
       $obj->section = $row[$pos++];
       $obj->content = $row[$pos++];
       $obj->date = $row[$pos++];
       $obj->user = $row[$pos++];
       $obj->allowComments = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
