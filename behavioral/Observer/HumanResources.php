<?php

namespace Behavioral\Observer;

class HumanResources {

    private $communicator;

    public function __construct (array $employees) {
        $this->communicator = new Communicator();

        foreach ($employees as $employee) {
            $this->communicator->attach($employee);
        }
    }

    public function inform (string $message): void {
        $this->communicator->inform($message);
    }

    public function layOf (Employee $employee) {
        $this->communicator->detach($employee);
    }

    public function employ (Employee $employee) {
        $this->communicator->attach($employee);
    }
}
