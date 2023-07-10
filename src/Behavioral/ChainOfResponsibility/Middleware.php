<?php

namespace App\Behavioral\ChainOfResponsibility;

abstract class Middleware
{
    protected Middleware $next;

    final public function setNext(Middleware $middleware): Middleware
    {
        $this->next = $middleware;

        return $middleware;
    }

    public function process(Request $request): bool
    {
        if (isset($this->next)) {
            return $this->next->process($request);
        }
        return true;
    }
}
