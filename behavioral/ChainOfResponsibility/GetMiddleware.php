<?php

namespace Behavioral\ChainOfResponsibility;

class GetMiddleware extends Middleware {

    private $allowedMethod = "GET";
    private $methodKey = "REQUEST_METHOD";

    public function process (Request $request) {
        if ($request->hasServerParam($this->methodKey)
            && $request->getServerParam($this->methodKey) === $this->allowedMethod) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Only GET requests allowed");
        }
    }
}