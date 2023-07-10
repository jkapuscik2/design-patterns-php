<?php

namespace App\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

final class Communicator implements SplSubject
{
    private SplObjectStorage $employees;

    public function __construct()
    {
        $this->employees = new SplObjectStorage();
    }

    public function attach(SplObserver $employee): void
    {
        $this->employees->attach($employee);
    }

    public function detach(SplObserver $employee): void
    {
        $this->employees->detach($employee);
    }

    public function inform(string $message): void
    {
        $this->notify($message);
    }

    public function notify(string $message = ""): void
    {
        foreach ($this->employees as $employee) {
            /**
             * @var $employee Employee
             */
            $employee->update($this, $message);
        }
    }
}
