<?php include_once("lib/connection.php")?>
<?php 

 class ProfesorDAO{
 
    var $idProfesor;
    var $nombre;
    var $idFacultad;

/* -----    Getters and Setters ----------*/

    function _set_id( $idProfesor ){
 		$this->idProfesor = $idProfesor;
    }

    function _get_id(){
 		return $this->idProfesor;
    }

    function get_idProfesor(){
 		return $this->idProfesor;
    }
    
    function set_idProfesor($idProfesor){
	   $this->idProfesor = $idProfesor;    
    }    
    
    function get_nombre(){
 		return $this->nombre;
    }
    
    function set_nombre($nombre){
	   $this->nombre = $nombre;    
    }    
    
    function get_idFacultad(){
 		return $this->idFacultad;
    }
    
    function set_idFacultad($idFacultad){
	   $this->idFacultad = $idFacultad;    
    }    
    

    function update(){
    	$sql = "UPDATE Profesor SET idProfesor = '$this->idProfesor', nombre = '$this->nombre', idFacultad = '$this->idFacultad' WHERE idProfesor = '$this->idProfesor' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Profesor WHERE idProfesor = ".$this->idProfesor;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Profesor(idProfesor, nombre, idFacultad) VALUES('$this->idProfesor', '$this->nombre', '$this->idFacultad')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idProfesor = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Profesor_find_all(){
    $sql = "SELECT idProfesor, nombre, idFacultad FROM Profesor";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new ProfesorDAO(); 
    	
    	$pos = 0;
    	$obj->idProfesor = $row[$pos++];
    	$obj->nombre = $row[$pos++];
    	$obj->idFacultad = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Profesor_find_by_id($id){
    $sql = "SELECT idProfesor, nombre, idFacultad FROM Profesor WHERE idProfesor = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new ProfesorDAO();

       $pos = 0;
       $obj->idProfesor = $row[$pos++];
       $obj->nombre = $row[$pos++];
       $obj->idFacultad = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
