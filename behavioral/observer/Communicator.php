<?php

namespace behavioral\observer;

use SplObjectStorage, SplObserver, SplSubject;

class Communicator implements SplSubject {

    private $employees;
    public $message;

    public function __construct () {
        $this->employees = new SplObjectStorage();
    }

    public function attach (SplObserver $employee): void {
        $this->employees->attach($employee);
    }

    public function detach (SplObserver $employee): void {
        $this->employees->detach($employee);
    }

    public function inform (string $message): void {
        $this->message = $message;
        $this->notify();
    }

    public function notify (): void {
        foreach ($this->employees as $employee) {
            $employee->update($this);
        }
    }
}
