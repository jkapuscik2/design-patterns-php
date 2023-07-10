<?php

namespace App\Behavioral\Observer;

use SplObserver;
use SplSubject;

final readonly class Employee implements SplObserver
{
    public function __construct(private string $name, private string $email)
    {
    }

    public function update(SplSubject $communicator, string $message = ""): void
    {
        $this->sendEmail($message);
    }

    protected function sendEmail(string $message): void
    {
        echo "Sending email to: " . $this->email . " -  Hello " . $this->name . ", " . $message . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
