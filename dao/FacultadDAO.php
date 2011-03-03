<?php include_once("lib/connection.php")?>
<?php 

 class FacultadDAO{
 
    var $idFacultad;
    var $nombreFac;

/* -----    Getters and Setters ----------*/

    function _set_id( $idFacultad ){
 		$this->idFacultad = $idFacultad;
    }

    function _get_id(){
 		return $this->idFacultad;
    }

    function get_idFacultad(){
 		return $this->idFacultad;
    }
    
    function set_idFacultad($idFacultad){
	   $this->idFacultad = $idFacultad;    
    }    
    
    function get_nombreFac(){
 		return $this->nombreFac;
    }
    
    function set_nombreFac($nombreFac){
	   $this->nombreFac = $nombreFac;    
    }    
    

    function update(){
    	$sql = "UPDATE Facultad SET idFacultad = '$this->idFacultad', nombreFac = '$this->nombreFac' WHERE idFacultad = '$this->idFacultad' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Facultad WHERE idFacultad = ".$this->idFacultad;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Facultad(idFacultad, nombreFac) VALUES('$this->idFacultad', '$this->nombreFac')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idFacultad = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Facultad_find_all(){
    $sql = "SELECT idFacultad, nombreFac FROM Facultad";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new FacultadDAO(); 
    	
    	$pos = 0;
    	$obj->idFacultad = $row[$pos++];
    	$obj->nombreFac = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Facultad_find_by_id($id){
    $sql = "SELECT idFacultad, nombreFac FROM Facultad WHERE idFacultad = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new FacultadDAO();

       $pos = 0;
       $obj->idFacultad = $row[$pos++];
       $obj->nombreFac = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
