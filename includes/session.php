<?php
  
require_once('init.php');

class Session{
    private $signed_in;
    private $user_id;
	private $answer;
    private $qnumber;
    

    public function __construct(){
        session_start();
        $this->check_login();
    }
    
     private function check_login(){
        if (isset($_SESSION['user_id'])){
            $this->user_id=$_SESSION['user_id'];
            $this->signed_in=true;
			$this->answer=$_SESSION['answer'];
			$this->qnumber=$_SESSION['qnumber'];
        }
        else{
            unset($this->user_id);
            $this->signed_in=false;
        }
    }
    
    public function login($user){
        if($user){
			global $database;
            $sql=$database->query("select * from users where Username like '%".$user['Username']."' and Password like '%".$user['Password']."'");
			$this->user_id=$sql->fetch_assoc();
            $_SESSION['user_id']=$this->user_id;
            $this->signed_in=true;
			$_SESSION['answer'] = 0;
			$_SESSION['qnumber'] = 1;
		
        }
    }
    
	public function FirstLogin($user){
        if($user){
            $_SESSION['user_id']=$this->user_id;
            $this->signed_in=true;
			$_SESSION['answer'] = 0;
			$_SESSION['qnumber'] = 1;
        }
    }
	
       
    public function logout(){
        echo 'logout';
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in=false;
        
    }
	
    public function add_to_answer($count){
		$_SESSION['answer']  = $this->answer + $count;
        $this->answer = $_SESSION['answer'];
		return $this->answer;
    }
	
	 public function add_to_q(){
        $_SESSION['qnumber'] = $this->qnumber + 1;
		$this->qnumber = $_SESSION['qnumber'];
    }
	
    public function get_signed_in(){
        return $this->signed_in;
    }
    public function get_user_id(){
        return $this->user_id;
    }
	
	public function get_qnumber(){
        return $this->qnumber;
    }
	
	public function get_answer(){
        return $this->answer;
    }
}
$session=new Session();


    
?>

