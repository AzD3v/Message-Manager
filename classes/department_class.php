<?php

class Department {

	static $IdDepartment = 0;
	static $nDepartments = 0;

	# ID do departamento
	private $id;

	# Nome do departamento
	private $name;

	# Função construtora
	public function __construct($name) {

		$this->id = Department::$IdDepartment++;
		$this->name = $name;
		++Department::$nDepartments;
	}

	# Getters (Métodos de seleção)
	public function getDepartment() {

		return $this->name;
	}

	# Setters (Métodos de modificação)
	public function setDepartment($name) {

		return $this->name = $name;
	}

}

?>