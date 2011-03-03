<?php include_once("lib/connection.php")?>
<?php 

 class Tipo_ActividadDAO{
 
    var $idTipo;
    var $descripcion;

/* -----    Getters and Setters ----------*/

    function _set_id( $idTipo ){
 		$this->idTipo = $idTipo;
    }

    function _get_id(){
 		return $this->idTipo;
    }

    function get_idTipo(){
 		return $this->idTipo;
    }
    
    function set_idTipo($idTipo){
	   $this->idTipo = $idTipo;    
    }    
    
    function get_descripcion(){
 		return $this->descripcion;
    }
    
    function set_descripcion($descripcion){
	   $this->descripcion = $descripcion;    
    }    
    

    function update(){
    	$sql = "UPDATE Tipo_Actividad SET idTipo = '$this->idTipo', descripcion = '$this->descripcion' WHERE idTipo = '$this->idTipo' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Tipo_Actividad WHERE idTipo = ".$this->idTipo;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Tipo_Actividad(idTipo, descripcion) VALUES('$this->idTipo', '$this->descripcion')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idTipo = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Tipo_Actividad_find_all(){
    $sql = "SELECT idTipo, descripcion FROM Tipo_Actividad";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new Tipo_ActividadDAO(); 
    	
    	$pos = 0;
    	$obj->idTipo = $row[$pos++];
    	$obj->descripcion = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Tipo_Actividad_find_by_id($id){
    $sql = "SELECT idTipo, descripcion FROM Tipo_Actividad WHERE idTipo = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new Tipo_ActividadDAO();

       $pos = 0;
       $obj->idTipo = $row[$pos++];
       $obj->descripcion = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
