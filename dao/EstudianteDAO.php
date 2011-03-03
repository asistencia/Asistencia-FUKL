<?php include_once("lib/connection.php")?>
<?php 

 class EstudianteDAO{
 
    var $idEstudiante;
    var $nombre;
    var $idFacultad;

/* -----    Getters and Setters ----------*/

    function _set_id( $idEstudiante ){
 		$this->idEstudiante = $idEstudiante;
    }

    function _get_id(){
 		return $this->idEstudiante;
    }

    function get_idEstudiante(){
 		return $this->idEstudiante;
    }
    
    function set_idEstudiante($idEstudiante){
	   $this->idEstudiante = $idEstudiante;    
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
    	$sql = "UPDATE Estudiante SET idEstudiante = '$this->idEstudiante', nombre = '$this->nombre', idFacultad = '$this->idFacultad' WHERE idEstudiante = '$this->idEstudiante' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Estudiante WHERE idEstudiante = ".$this->idEstudiante;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Estudiante(idEstudiante, nombre, idFacultad) VALUES('$this->idEstudiante', '$this->nombre', '$this->idFacultad')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idEstudiante = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Estudiante_find_all(){
    $sql = "SELECT idEstudiante, nombre, idFacultad FROM Estudiante";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new EstudianteDAO(); 
    	
    	$pos = 0;
    	$obj->idEstudiante = $row[$pos++];
    	$obj->nombre = $row[$pos++];
    	$obj->idFacultad = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Estudiante_find_by_id($id){
    $sql = "SELECT idEstudiante, nombre, idFacultad FROM Estudiante WHERE idEstudiante = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new EstudianteDAO();

       $pos = 0;
       $obj->idEstudiante = $row[$pos++];
       $obj->nombre = $row[$pos++];
       $obj->idFacultad = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
