<?php

namespace App\Behavioral\ChainOfResponsibility;

class ApiMiddleware extends Middleware
{
    private const API_KEYS = [
        "12345",
        "qwerty"
    ];
    private const API_KEY_NAME = "apiKey";

    public function process(Request $request): bool
    {
        if ($request->hasParam(self::API_KEY_NAME)
            && in_array($request->getParam(self::API_KEY_NAME), self::API_KEYS)) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Api key validation error");
        }
    }
}
