<?php include_once("lib/connection.php")?>
<?php 

 class AsignaturaDAO{
 
    var $idAsignatura;
    var $nombre;

/* -----    Getters and Setters ----------*/

    function _set_id( $idAsignatura ){
 		$this->idAsignatura = $idAsignatura;
    }

    function _get_id(){
 		return $this->idAsignatura;
    }

    function get_idAsignatura(){
 		return $this->idAsignatura;
    }
    
    function set_idAsignatura($idAsignatura){
	   $this->idAsignatura = $idAsignatura;    
    }    
    
    function get_nombre(){
 		return $this->nombre;
    }
    
    function set_nombre($nombre){
	   $this->nombre = $nombre;    
    }    
    

    function update(){
    	$sql = "UPDATE Asignatura SET idAsignatura = '$this->idAsignatura', nombre = '$this->nombre' WHERE idAsignatura = '$this->idAsignatura' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Asignatura WHERE idAsignatura = ".$this->idAsignatura;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Asignatura(idAsignatura, nombre) VALUES('$this->idAsignatura', '$this->nombre')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idAsignatura = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Asignatura_find_all(){
    $sql = "SELECT idAsignatura, nombre FROM Asignatura";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new AsignaturaDAO(); 
    	
    	$pos = 0;
    	$obj->idAsignatura = $row[$pos++];
    	$obj->nombre = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Asignatura_find_by_id($id){
    $sql = "SELECT idAsignatura, nombre FROM Asignatura WHERE idAsignatura = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new AsignaturaDAO();

       $pos = 0;
       $obj->idAsignatura = $row[$pos++];
       $obj->nombre = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
