<?php

# Incluir a classe department
include 'department_class.php';

# Incluir a classe message
include 'message_class.php';

class User {

	Static $IdUser = 0;
	
	static $nUsers = 0;

	private $id;

	private $idDepartment;

	private $name;

	private $middle_name;

	private $surname;

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
		$this->middle_name = $middle_name;
		$this->surname = $surname;
		$this->username = $username;
		$this->password = $password;
		$this->cargo = $cargo;
		$this->contactList = array();
		$this->inbox = array();
		$this->outbox = array();
		++User::$nUsers;
	}

	# Getters
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

	public function getPassword() {

		return $password = $this->password;

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

	# Setters

	public function setName($name) {

		return $this->name = $name;

	}

	public function setMiddle_name($middle_name) {

		return $this->middle_name = $middle_name;

	}

	public function setSurname($surname) {

		return $this->surname = $surname;

	}

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