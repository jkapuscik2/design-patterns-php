<?php

namespace behavioral\chain_of_responsibility;

final class App {

    private $request;
    private $middleware;

    public function __construct () {
        $this->request = new Request($_GET, $_SERVER);
        $this->setMiddleware();
    }

    private function setMiddleware () {
        $this->middleware = new GetMiddleware();
        $this->middleware->setNext(new ApiMiddleware());
    }

    public function run () {
        if ($this->middleware->process($this->request)) {
            return (new Response($this->request))->handle();
        }
    }
}