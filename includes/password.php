<?php
  
require_once('init.php');

class Password{
    private $id;
    private $user;
    private $password;

    
        
    private function has_attribute($attribute){
        
        $object_properties=get_object_vars($this);
        return array_key_exists($attribute,$object_properties);
    }
    
     private function  instantation($pass_array){
        foreach ($pass_array as $attribute=>$value){
            if ($result=$this->has_attribute($attribute))
                $this->$attribute=$value;
       }
     }
    public function find_user($user,$password){
        global $database;
        $sql="select * from users where Username like '%".$user."' and Password like '%".$password."'";
        $result_set=$database->query($sql);
        if ($result_set->num_rows==0){
            return null;
        }
        else{
            echo('user is found');
        }
        $found_user=$result_set->fetch_assoc();
        $this->instantation($found_user);
        return $found_user;
    }
	
	public function decrypePass($password){
        $password = md5($password);
		return $password;
    }
   
    public function get_id(){
        return $this->id;
    }
   
   
}

    
?>

