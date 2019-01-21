<?php
  
require_once('database.php');

class User{
    private $id;
    private $first_name;
    private $last_name;
    private $user_name;
	private $password_name;
	private $email;
	private $age;
	private $state;
	private $address;
	private $answerCount;
	
    public function construct($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address){
        $this->id=$id;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->user_name=$user_name;
		$this->password_name=$password_name;
		$this->email=$email;
		$this->age=$age;
		$this->state=$state;
		$this->address=$address;
    }

    public static function fetch_users(){
        
        global $database;
        $result_set=$database->query("select * from users");
        $users;
        $i=0;
        if ($result_set->num_rows>0){ 
            while($row=$result_set->fetch_assoc()){ 
                $user=new User();
                $users[$i]=$user;
                $i+=1;
            }
        }
        return $users;
		
    }
    private function  instantation($user_array){
        $this->id=$user_array['id'];
        $this->first_name=$user_array['First_Name'];
        $this->last_name=$user_array['Last_Name'];
        $this->user_name=$user_array['Username'];
		$this->password_name=$user_array['Password'];
		$this->email=$user_array['Email'];
		$this->age=$user_array['Age'];
		$this->state=$user_array['State'];
		$this->address=$user_array['Address'];
		$this->answerCount=$user_array['answerCount'];
    }
    
    
    public function find_user_by_id($id){
        global $database;
		$userBoolean = 0;
        $result_set=$database->query("select * from users where id='".$id."'");
        $found_user=$result_set->fetch_assoc();
        if($found_user){
			$userBoolean = 1;
		}
		else
			$userBoolean = 0;
		
        return $userBoolean;
    }
	
	public function create_exsit_user($id){
        global $database;
        $result_set=$database->query("select * from users where id='".$id."'");
        $found_user=$result_set->fetch_assoc();
        $this->instantation($found_user);
		return $this;
    }
	
	public function find_user_by_Password($password){
        global $database;
		$userBoolean = 0;
        $result_set=$database->query("select * from users where Password like '%".$password."%'");
        $found_user=$result_set->fetch_assoc();
        if($found_user){
			$userBoolean = 1;
		}
		else
			$userBoolean = 0;
		
        return $userBoolean;
    }
	
    public static function add_answer($answerCount, $id){
        global $database;
        $sql="update users	set answerCount = ".$answerCount." where id = ".$id."";
        $result=$database->query($sql);
        
    }
	
	public static function add_user($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address){
        global $database;
		
        $sql="INSERT INTO users				(id
												,First_Name
												,Last_Name
												,Username
												,Password
												,Email
												,Age
												,State
												,Address) 
							VALUES 
												('".$id."','
												".$first_name."','
												".$last_name."','
												".$user_name."','
												".$password_name."','
												".$email."','
												".$age."','
												".$state."','
												".$address."');";
        $result=$database->query($sql);
        
    }
	public function crypePass($password){
        $password = md5($password);
		return $password;
    }
		
    public function get_id(){
        return $this->id;
    }
    public function get_first_name(){
        return $this->first_name;
    }
	public function get_last_name(){
        return $this->last_name;
    }
	public function get_user_name(){
        return $this->user_name;
    }
	public function get_password_name(){
        return $this->password_name;
    }
	public function get_email(){
        return $this->email;
    }
    public function get_age(){
        return $this->age;
    }
    public function get_state(){
        return $this->state;
    }
	public function get_address(){
        return $this->address;
    }
	public function get_answer(){
        return $this->answer;
    }
}

?>

