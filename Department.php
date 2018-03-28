<?php

class Department {
	
	Static $IdDepartment = 0;
	static $nDepartments = 0;
	
	private $name;

	
	public function __construct($name) {
		
		$this->id = Department::$IdDepartment++;
		$this->name = $name;
		++Department::$nDepartments;
	}

	
	public function getDepartment() {
		
		return $this->name;
	}

	
	public function setDepartment($name) {
		
		return $this->name = $name;
	}
}

?>