<?php
/**
 * TODO Auto-generated comment.
 */
class Department {
	/**
	 * TODO Auto-generated comment.
	 */
	Static $NumDepartment = 0;
	/**
	 * TODO Auto-generated comment.
	 */
	private $IdDepartment;
	/**
	 * TODO Auto-generated comment.
	 */
	private $name;

	/**
	 * TODO Auto-generated comment.
	 */
	public function __construct($name) {
		
		$this->id = Department::$NumDepartment++;
		$this->name = $name;
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
