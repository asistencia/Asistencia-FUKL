<?php include_once("lib/connection.php")?>
<?php 

 class userDAO{
 
    var $user_id;
    var $name;
    var $login;
    var $email;
    var $passwrd;
    var $role;

/* -----    Getters and Setters ----------*/

    function _set_id( $user_id ){
 		$this->user_id = $user_id;
    }

    function _get_id(){
 		return $this->user_id;
    }

    function get_user_id(){
 		return $this->user_id;
    }
    
    function set_user_id($user_id){
	   $this->user_id = $user_id;    
    }    
    
    function get_name(){
 		return $this->name;
    }
    
    function set_name($name){
	   $this->name = $name;    
    }    
    
    function get_login(){
 		return $this->login;
    }
    
    function set_login($login){
	   $this->login = $login;    
    }    
    
    function get_email(){
 		return $this->email;
    }
    
    function set_email($email){
	   $this->email = $email;    
    }    
    
    function get_passwrd(){
 		return $this->passwrd;
    }
    
    function set_passwrd($passwrd){
	   $this->passwrd = $passwrd;    
    }    
    
    function get_role(){
 		return $this->role;
    }
    
    function set_role($role){
	   $this->role = $role;    
    }    
    

    function update(){
    	$sql = "UPDATE user SET user_id = '$this->user_id', name = '$this->name', login = '$this->login', email = '$this->email', passwrd = '$this->passwrd', role = '$this->role' WHERE user_id = '$this->user_id' ";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not update: ".mysql_error());
        }
        mysql_close($link);
        
        return true;
    }
 
    function delete(){
    	$sql = "DELETE FROM user WHERE user_id = ".$this->user_id;
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );

    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        mysql_close($link);
        
        return true;    	
    }
         
    function save(){
    	$sql = "INSERT INTO user(user_id, name, login, email, passwrd, role) VALUES('$this->user_id', '$this->name', '$this->login', '$this->email', '$this->passwrd', '$this->role')";
    	
    	$link = getConnection();
    	$result = mysql_query( $sql );
    	
    	if(!$result){
           die ("Could not insert: ".mysql_error());
        }
        $this->user_id = mysql_insert_id();
        mysql_close($link);
        
        return true;
    }
  
 }
 
 function user_find_all(){
    $sql = "SELECT user_id, name, login, email, passwrd, role FROM user";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    if(!$result){
       die ("Could not query: ".mysql_error());
    }
    
    $size = 0;    
    while($row = mysql_fetch_array($result)){
    	$obj = new userDAO(); 
    	
    	$pos = 0;
    	$obj->user_id = $row[$pos++];
    	$obj->name = $row[$pos++];
    	$obj->login = $row[$pos++];
    	$obj->email = $row[$pos++];
    	$obj->passwrd = $row[$pos++];
    	$obj->role = $row[$pos++];
    	$resp[$size] = $obj;
    	$size++; 
    } 
    mysql_close($link);
    return $resp;   
 }

 function user_find_by_id($id){
    $sql = "SELECT user_id, name, login, email, passwrd, role FROM user WHERE user_id = $id";
    
    $link = getConnection();
    $result = mysql_query( $sql );
    	

    if($row = mysql_fetch_array($result)){
       $obj = new userDAO();

       $pos = 0;
       $obj->user_id = $row[$pos++];
       $obj->name = $row[$pos++];
       $obj->login = $row[$pos++];
       $obj->email = $row[$pos++];
       $obj->passwrd = $row[$pos++];
       $obj->role = $row[$pos++];
    }   
    mysql_close($link); 	
    return $obj;
 }

?>
