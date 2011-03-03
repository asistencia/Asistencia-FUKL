<?php include_once("lib/connection.php")?>
<?php 

 class ActividadDAO{
 
    var $idActividad;
    var $idTipo;
    var $nombre;
    var $porcentaje;

/* -----    Getters and Setters ----------*/

    function _set_id( $idActividad ){
 		$this->idActividad = $idActividad;
    }

    function _get_id(){
 		return $this->idActividad;
    }

    function get_idActividad(){
 		return $this->idActividad;
    }
    
    function set_idActividad($idActividad){
	   $this->idActividad = $idActividad;    
    }    
    
    function get_idTipo(){
 		return $this->idTipo;
    }
    
    function set_idTipo($idTipo){
	   $this->idTipo = $idTipo;    
    }    
    
    function get_nombre(){
 		return $this->nombre;
    }
    
    function set_nombre($nombre){
	   $this->nombre = $nombre;    
    }    
    
    function get_porcentaje(){
 		return $this->porcentaje;
    }
    
    function set_porcentaje($porcentaje){
	   $this->porcentaje = $porcentaje;    
    }    
    

    function update(){
    	$sql = "UPDATE Actividad SET idActividad = '$this->idActividad', idTipo = '$this->idTipo', nombre = '$this->nombre', porcentaje = '$this->porcentaje' WHERE idActividad = '$this->idActividad' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Actividad WHERE idActividad = ".$this->idActividad;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Actividad(idActividad, idTipo, nombre, porcentaje) VALUES('$this->idActividad', '$this->idTipo', '$this->nombre', '$this->porcentaje')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idActividad = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Actividad_find_all(){
    $sql = "SELECT idActividad, idTipo, nombre, porcentaje FROM Actividad";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new ActividadDAO(); 
    	
    	$pos = 0;
    	$obj->idActividad = $row[$pos++];
    	$obj->idTipo = $row[$pos++];
    	$obj->nombre = $row[$pos++];
    	$obj->porcentaje = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Actividad_find_by_id($id){
    $sql = "SELECT idActividad, idTipo, nombre, porcentaje FROM Actividad WHERE idActividad = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new ActividadDAO();

       $pos = 0;
       $obj->idActividad = $row[$pos++];
       $obj->idTipo = $row[$pos++];
       $obj->nombre = $row[$pos++];
       $obj->porcentaje = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
