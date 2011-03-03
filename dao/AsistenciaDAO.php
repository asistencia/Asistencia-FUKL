<?php include_once("lib/connection.php")?>
<?php 

 class AsistenciaDAO{
 
    var $idAsistencia;
    var $fecha;
    var $idGrupoEstudiante;

/* -----    Getters and Setters ----------*/

    function _set_id( $idAsistencia ){
 		$this->idAsistencia = $idAsistencia;
    }

    function _get_id(){
 		return $this->idAsistencia;
    }

    function get_idAsistencia(){
 		return $this->idAsistencia;
    }
    
    function set_idAsistencia($idAsistencia){
	   $this->idAsistencia = $idAsistencia;    
    }    
    
    function get_fecha(){
 		return $this->fecha;
    }
    
    function set_fecha($fecha){
	   $this->fecha = $fecha;    
    }    
    
    function get_idGrupoEstudiante(){
 		return $this->idGrupoEstudiante;
    }
    
    function set_idGrupoEstudiante($idGrupoEstudiante){
	   $this->idGrupoEstudiante = $idGrupoEstudiante;    
    }    
    

    function update(){
    	$sql = "UPDATE Asistencia SET idAsistencia = '$this->idAsistencia', fecha = '$this->fecha', idGrupoEstudiante = '$this->idGrupoEstudiante' WHERE idAsistencia = '$this->idAsistencia' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Asistencia WHERE idAsistencia = ".$this->idAsistencia;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Asistencia(idAsistencia, fecha, idGrupoEstudiante) VALUES('$this->idAsistencia', '$this->fecha', '$this->idGrupoEstudiante')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idAsistencia = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Asistencia_find_all(){
    $sql = "SELECT idAsistencia, fecha, idGrupoEstudiante FROM Asistencia";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new AsistenciaDAO(); 
    	
    	$pos = 0;
    	$obj->idAsistencia = $row[$pos++];
    	$obj->fecha = $row[$pos++];
    	$obj->idGrupoEstudiante = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Asistencia_find_by_id($id){
    $sql = "SELECT idAsistencia, fecha, idGrupoEstudiante FROM Asistencia WHERE idAsistencia = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new AsistenciaDAO();

       $pos = 0;
       $obj->idAsistencia = $row[$pos++];
       $obj->fecha = $row[$pos++];
       $obj->idGrupoEstudiante = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
