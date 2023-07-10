<?php

namespace App\Behavioral\ChainOfResponsibility;

class GetMiddleware extends Middleware
{
    private string $allowedMethod = "GET";
    private string $methodKey = "REQUEST_METHOD";

    public function process(Request $request): bool
    {
        if ($request->hasServerParam($this->methodKey)
            && $request->getServerParam($this->methodKey) === $this->allowedMethod) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Only GET requests allowed");
        }
    }
}
