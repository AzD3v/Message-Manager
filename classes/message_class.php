<?php

class Message {

	static $IdMessage = 0;

	static $nMessages = 0;

	private $id;

	private $to;

	private $from;

	private $subject;

	private $text;

	private $date_hour;

	private $attachment;

	# Método construtor
	public function __construct($to, $from, $subject, $text, $date_hour) {

		$this->id = Message::$IdMessage++;
		$this->to = $to;
		$this->from = $from;
		$this->subject = $subject;
		$this->text = $text;
		$this->date_hour = $date_hour;
		++Message::$nMessages;
	}

	# Getters (Métodos seletores)

	public function getId() {

		return $this->id;

	}

	public function getTo() {

		return $this->to;
	}

	public function getFrom() {

		return $this->from;
	}

	public function getSubject() {

		return $this->subject;
	}

	public function getText() {

		return $this->text;
	}

	public function getDate_hour() {

		return $this->date_hour;
	}

	public function getAttachment() {

		return $this->attachment;
	}
}

?>