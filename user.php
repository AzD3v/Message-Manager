<?php
 
include 'Department.php';
include 'message.php';
 
class User {
	
	Static $IdUser = 0;
	
	private $id;
	
	private $idDepartment;
	
	private $name;
	
	private $surname;
	
	private $middle_name;
	
	private $username;
	
	private $password;
	
	private $cargo;
	
	private $contactList;
	
	private $inbox;
	
	private $outbox;

	
	public function __construct($name, $middle_name, $surname, $username, $password, $cargo) {
		
		$this->id = User::$IdUser++;
		$this->idDepartment = array();
		$this->name = $name;
		$this->surname = $surname;
		$this->middle_name = $middle_name;
		$this->username = $username;
		$this->password = $password;
		$this->cargo = $cargo;
		$this->contactList = array();
		$this->inbox = array();
		$this->outbox = array();
		
	}

	#Getters
	
	public function getName() {
		
		return $this->name;
	}
	
	public function getMiddle_name() {
		
		return $this->middle_name;	
	}
	
	public function getSurname() {
		
		return $this->surname ;
	}
	
	public function getFullName() {
		
		$fullname = ''.$this->name.','.$this->middle_name.''.$this->surname.'';
		
		return $fullname;
	}

	public function getUsername() {
		
		return $this->username;
	}

	public function getCargo() {
		
		return $this->cargo;
	}

	public function getContactList() {
		
		return $this->contactList;
	}

	public function getInbox() {
		
		return $this->inbox;
	}

	public function getOutbox() {
		
		return $this->outbox;
	}
	
	#setters
	
	public function setPassword($password) {
		
		return $this->password = $password;
		
	}
	
	public function addContactToList($user){
		
	$this->contactList[] = $user;
	
	}
	
	public function addDepartment($department){
		
		$this->idDepartment[] = new Department($name);
	}
	
}
?>