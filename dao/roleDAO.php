<?php include_once("lib/connection.php")?>
<?php 

 class roleDAO{
 
    var $name;
    var $id;

/* -----    Getters and Setters ----------*/

    function _set_id( $id ){
 		$this->id = $id;
    }

    function _get_id(){
 		return $this->id;
    }

    function get_name(){
 		return $this->name;
    }
    
    function set_name($name){
	   $this->name = $name;    
    }    
    
    function get_id(){
 		return $this->id;
    }
    
    function set_id($id){
	   $this->id = $id;    
    }    
    

    function update(){
    	$sql = "UPDATE role SET name = '$this->name', id = '$this->id' WHERE id = '$this->id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM role WHERE id = ".$this->id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO role(name, id) VALUES('$this->name', '$this->id')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->id = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function role_find_all(){
    $sql = "SELECT name, id FROM role";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new roleDAO(); 
    	
    	$pos = 0;
    	$obj->name = $row[$pos++];
    	$obj->id = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function role_find_by_id($id){
    $sql = "SELECT name, id FROM role WHERE id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new roleDAO();

       $pos = 0;
       $obj->name = $row[$pos++];
       $obj->id = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
