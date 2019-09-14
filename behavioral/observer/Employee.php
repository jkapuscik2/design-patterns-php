<?php

namespace behavioral\observer;

use SplObserver, SplSubject;

class Employee implements SplObserver {

	public $name;
	private $email;

	public function __construct (string $name, string $email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function update (SplSubject $communicator): void {
		$this->sendEmail($communicator->message);
	}

	protected function sendEmail (string $message) {
		echo "Sending email to: " . $this->email . " -  Hello " . $this->name . ", " . $message . PHP_EOL;
	}
}
