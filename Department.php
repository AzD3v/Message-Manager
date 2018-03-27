<?php
/**
 * TODO Auto-generated comment.
 */
class Department {
	/**
	 * TODO Auto-generated comment.
	 */
	Static $IdDepartment = 0;
	static $nDepartments = 0;
	/**
	 * TODO Auto-generated comment.
	 */
	private $name;

	/**
	 * TODO Auto-generated comment.
	 */
	public function __construct($name) {
		
		$this->id = Department::$IdDepartment++;
		$this->name = $name;
		++Department::$nDepartments;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function getDepartment() {
		
		return $this->name;
	}

	/**
	 * TODO Auto-generated comment.
	 */
	public function setDepartment($name) {
		
		return $this->name = $name;
	}
}
