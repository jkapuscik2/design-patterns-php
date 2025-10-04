<?php
declare(strict_types=1);

namespace App\Creational\Builder;

final class InteractiveMirror implements Device
{
    private array $hardware = [];
    private string $software;
    private string $SLA;

    public function attachHardware(string $hardware): void
    {
        $this->hardware[] = $hardware;
    }

    public function setSoftware(string $software): void
    {
        $this->software = $software;
    }

    public function setSLA(string $SLA): void
    {
        $this->SLA = $SLA;
    }
}
