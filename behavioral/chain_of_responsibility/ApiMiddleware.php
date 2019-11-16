<?php

namespace behavioral\chain_of_responsibility;

class ApiMiddleware extends Middleware {

    private $apiKeys = [
        "12345",
        "qwerty"
    ];
    private $apiKeyName = "apiKey";

    public function process (Request $request) {
        if ($request->hasParam($this->apiKeyName)
            && in_array($request->getParam($this->apiKeyName), $this->apiKeys)) {

            return parent::process($request);
        } else {
            throw new MiddlewareError("Api key validation error");
        }
    }
}