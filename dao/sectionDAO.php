<?php include_once("lib/connection.php")?>
<?php 

 class sectionDAO{
 
    var $section_id;
    var $name;

/* -----    Getters and Setters ----------*/

    function _set_id( $section_id ){
 		$this->section_id = $section_id;
    }

    function _get_id(){
 		return $this->section_id;
    }

    function get_section_id(){
 		return $this->section_id;
    }
    
    function set_section_id($section_id){
	   $this->section_id = $section_id;    
    }    
    
    function get_name(){
 		return $this->name;
    }
    
    function set_name($name){
	   $this->name = $name;    
    }    
    

    function update(){
    	$sql = "UPDATE section SET section_id = '$this->section_id', name = '$this->name' WHERE section_id = '$this->section_id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM section WHERE section_id = ".$this->section_id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO section(section_id, name) VALUES('$this->section_id', '$this->name')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->section_id = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function section_find_all(){
    $sql = "SELECT section_id, name FROM section";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new sectionDAO(); 
    	
    	$pos = 0;
    	$obj->section_id = $row[$pos++];
    	$obj->name = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function section_find_by_id($id){
    $sql = "SELECT section_id, name FROM section WHERE section_id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new sectionDAO();

       $pos = 0;
       $obj->section_id = $row[$pos++];
       $obj->name = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
