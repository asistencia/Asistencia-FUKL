<?php include_once("lib/connection.php")?>
<?php 

 class Grupo_EstudianteDAO{
 
    var $idGrupoEstudiante;
    var $idGrupo;
    var $idEstudiante;

/* -----    Getters and Setters ----------*/

    function _set_id( $idGrupoEstudiante ){
 		$this->idGrupoEstudiante = $idGrupoEstudiante;
    }

    function _get_id(){
 		return $this->idGrupoEstudiante;
    }

    function get_idGrupoEstudiante(){
 		return $this->idGrupoEstudiante;
    }
    
    function set_idGrupoEstudiante($idGrupoEstudiante){
	   $this->idGrupoEstudiante = $idGrupoEstudiante;    
    }    
    
    function get_idGrupo(){
 		return $this->idGrupo;
    }
    
    function set_idGrupo($idGrupo){
	   $this->idGrupo = $idGrupo;    
    }    
    
    function get_idEstudiante(){
 		return $this->idEstudiante;
    }
    
    function set_idEstudiante($idEstudiante){
	   $this->idEstudiante = $idEstudiante;    
    }    
    

    function update(){
    	$sql = "UPDATE Grupo_Estudiante SET idGrupoEstudiante = '$this->idGrupoEstudiante', idGrupo = '$this->idGrupo', idEstudiante = '$this->idEstudiante' WHERE idGrupoEstudiante = '$this->idGrupoEstudiante' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Grupo_Estudiante WHERE idGrupoEstudiante = ".$this->idGrupoEstudiante;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Grupo_Estudiante(idGrupoEstudiante, idGrupo, idEstudiante) VALUES('$this->idGrupoEstudiante', '$this->idGrupo', '$this->idEstudiante')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idGrupoEstudiante = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Grupo_Estudiante_find_all(){
    $sql = "SELECT idGrupoEstudiante, idGrupo, idEstudiante FROM Grupo_Estudiante";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new Grupo_EstudianteDAO(); 
    	
    	$pos = 0;
    	$obj->idGrupoEstudiante = $row[$pos++];
    	$obj->idGrupo = $row[$pos++];
    	$obj->idEstudiante = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Grupo_Estudiante_find_by_id($id){
    $sql = "SELECT idGrupoEstudiante, idGrupo, idEstudiante FROM Grupo_Estudiante WHERE idGrupoEstudiante = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new Grupo_EstudianteDAO();

       $pos = 0;
       $obj->idGrupoEstudiante = $row[$pos++];
       $obj->idGrupo = $row[$pos++];
       $obj->idEstudiante = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
