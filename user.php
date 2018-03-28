<?php
 
require 'Department.php';
require 'message.php';
 
class User {
	
	Static $IdUser = 0;

	Static $nUsers = 0;
	
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

	
	public function __construct($name, $surname,$middle_name, $username, $password, $cargo) {
		
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
		++User::$nUsers;
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
		
		$fullname = ''.$this->name.','.$this->middle_name.''.$this->surname'';
		
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
	
}
?>