<?php include_once("lib/connection.php")?>
<?php 

 class CalificacionDAO{
 
    var $idCalificacion;
    var $idGrupoEstudiante;
    var $idActividad;
    var $nota;

/* -----    Getters and Setters ----------*/

    function _set_id( $idCalificacion ){
 		$this->idCalificacion = $idCalificacion;
    }

    function _get_id(){
 		return $this->idCalificacion;
    }

    function get_idCalificacion(){
 		return $this->idCalificacion;
    }
    
    function set_idCalificacion($idCalificacion){
	   $this->idCalificacion = $idCalificacion;    
    }    
    
    function get_idGrupoEstudiante(){
 		return $this->idGrupoEstudiante;
    }
    
    function set_idGrupoEstudiante($idGrupoEstudiante){
	   $this->idGrupoEstudiante = $idGrupoEstudiante;    
    }    
    
    function get_idActividad(){
 		return $this->idActividad;
    }
    
    function set_idActividad($idActividad){
	   $this->idActividad = $idActividad;    
    }    
    
    function get_nota(){
 		return $this->nota;
    }
    
    function set_nota($nota){
	   $this->nota = $nota;    
    }    
    

    function update(){
    	$sql = "UPDATE Calificacion SET idCalificacion = '$this->idCalificacion', idGrupoEstudiante = '$this->idGrupoEstudiante', idActividad = '$this->idActividad', nota = '$this->nota' WHERE idCalificacion = '$this->idCalificacion' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Calificacion WHERE idCalificacion = ".$this->idCalificacion;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Calificacion(idCalificacion, idGrupoEstudiante, idActividad, nota) VALUES('$this->idCalificacion', '$this->idGrupoEstudiante', '$this->idActividad', '$this->nota')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idCalificacion = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Calificacion_find_all(){
    $sql = "SELECT idCalificacion, idGrupoEstudiante, idActividad, nota FROM Calificacion";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new CalificacionDAO(); 
    	
    	$pos = 0;
    	$obj->idCalificacion = $row[$pos++];
    	$obj->idGrupoEstudiante = $row[$pos++];
    	$obj->idActividad = $row[$pos++];
    	$obj->nota = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Calificacion_find_by_id($id){
    $sql = "SELECT idCalificacion, idGrupoEstudiante, idActividad, nota FROM Calificacion WHERE idCalificacion = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new CalificacionDAO();

       $pos = 0;
       $obj->idCalificacion = $row[$pos++];
       $obj->idGrupoEstudiante = $row[$pos++];
       $obj->idActividad = $row[$pos++];
       $obj->nota = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
