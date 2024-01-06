<?php

class AccessDeniedException extends Exception
{
	public function __construct($message, $code = 0) {
		parent::__construct($message, $code);
	}

	public function toString() {
		return $this->message;
	}
}