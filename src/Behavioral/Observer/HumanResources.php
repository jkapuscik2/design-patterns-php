<?php

namespace App\Behavioral\Observer;

final class HumanResources
{
    private Communicator $communicator;

    public function __construct(Employee ...$employees)
    {
        $this->communicator = new Communicator();

        foreach ($employees as $employee) {
            $this->communicator->attach($employee);
        }
    }

    public function inform(string $message): void
    {
        $this->communicator->inform($message);
    }

    public function layOf(Employee $employee): void
    {
        $this->communicator->detach($employee);
    }

    public function employ(Employee $employee): void
    {
        $this->communicator->attach($employee);
    }
}
