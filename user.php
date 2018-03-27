<?php
/**
 * TODO Auto-generated comment.
 */
 
require 'Department.php';
require 'message.php';
 
class User {
	/**
	 * TODO Auto-generated comment.
	 */
	Static $NumUserID = 0;
	/**
	 * TODO Auto-generated comment.
	 */
	private $UserID;
	/**
	 * TODO Auto-generated comment.
	 */
	private $idDepartment;
	/**
	 * TODO Auto-generated comment.
	 */
	private $name;
	/**
	 * TODO Auto-generated comment.
	 */
	private $surname;
	/**
	 * TODO Auto-generated comment.
	 */
	private $middle_name;
	/**
	 * TODO Auto-generated comment.
	 */
	private $username;
	/**
	 * TODO Auto-generated comment.
	 */
	private $password;
	/**
	 * TODO Auto-generated comment.
	 */
	private $cargo;
	/**
	 * TODO Auto-generated comment.
	 */
	private $contactList;
	/**
	 * TODO Auto-generated comment.
	 */
	private $inbox;
	/**
	 * TODO Auto-generated comment.
	 */
	private $outbox;

	/**
	 * TODO Auto-generated comment.
	 */
	public function __construct($name, $surname, $username, $password) {
		
		$this->id = User::$NumUserID++;
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

	/**
	 * TODO Auto-generated comment.
	 */
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

	/**
	 * TODO Auto-generated comment.
	 */
	public function getUsername() {
		
		return $this->username;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function getCargo() {
		
		return $this->cargo;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function getContactList() {
		
		return $this->contactList;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function getInbox() {
		
		return $this->inbox;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function getOutbox() {
		return $this->outbox;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function setPassword($password) {
		
		return $this->password = $password;
		
	}
}
