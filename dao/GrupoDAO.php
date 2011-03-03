<?php include_once("lib/connection.php")?>
<?php 

 class GrupoDAO{
 
    var $idGrupo;
    var $horario;
    var $salon;
    var $idAsignatura;
    var $idProfesor;
    var $idFacultad;

/* -----    Getters and Setters ----------*/

    function _set_id( $idGrupo ){
 		$this->idGrupo = $idGrupo;
    }

    function _get_id(){
 		return $this->idGrupo;
    }

    function get_idGrupo(){
 		return $this->idGrupo;
    }
    
    function set_idGrupo($idGrupo){
	   $this->idGrupo = $idGrupo;    
    }    
    
    function get_horario(){
 		return $this->horario;
    }
    
    function set_horario($horario){
	   $this->horario = $horario;    
    }    
    
    function get_salon(){
 		return $this->salon;
    }
    
    function set_salon($salon){
	   $this->salon = $salon;    
    }    
    
    function get_idAsignatura(){
 		return $this->idAsignatura;
    }
    
    function set_idAsignatura($idAsignatura){
	   $this->idAsignatura = $idAsignatura;    
    }    
    
    function get_idProfesor(){
 		return $this->idProfesor;
    }
    
    function set_idProfesor($idProfesor){
	   $this->idProfesor = $idProfesor;    
    }    
    
    function get_idFacultad(){
 		return $this->idFacultad;
    }
    
    function set_idFacultad($idFacultad){
	   $this->idFacultad = $idFacultad;    
    }    
    

    function update(){
    	$sql = "UPDATE Grupo SET idGrupo = '$this->idGrupo', horario = '$this->horario', salon = '$this->salon', idAsignatura = '$this->idAsignatura', idProfesor = '$this->idProfesor', idFacultad = '$this->idFacultad' WHERE idGrupo = '$this->idGrupo' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM Grupo WHERE idGrupo = ".$this->idGrupo;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO Grupo(idGrupo, horario, salon, idAsignatura, idProfesor, idFacultad) VALUES('$this->idGrupo', '$this->horario', '$this->salon', '$this->idAsignatura', '$this->idProfesor', '$this->idFacultad')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->idGrupo = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function Grupo_find_all(){
    $sql = "SELECT idGrupo, horario, salon, idAsignatura, idProfesor, idFacultad FROM Grupo";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new GrupoDAO(); 
    	
    	$pos = 0;
    	$obj->idGrupo = $row[$pos++];
    	$obj->horario = $row[$pos++];
    	$obj->salon = $row[$pos++];
    	$obj->idAsignatura = $row[$pos++];
    	$obj->idProfesor = $row[$pos++];
    	$obj->idFacultad = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function Grupo_find_by_id($id){
    $sql = "SELECT idGrupo, horario, salon, idAsignatura, idProfesor, idFacultad FROM Grupo WHERE idGrupo = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new GrupoDAO();

       $pos = 0;
       $obj->idGrupo = $row[$pos++];
       $obj->horario = $row[$pos++];
       $obj->salon = $row[$pos++];
       $obj->idAsignatura = $row[$pos++];
       $obj->idProfesor = $row[$pos++];
       $obj->idFacultad = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
