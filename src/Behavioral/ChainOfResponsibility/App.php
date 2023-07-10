<?php

namespace App\Behavioral\ChainOfResponsibility;

final class App
{
    private Request $request;
    private Middleware $middleware;

    public function __construct()
    {
        $this->request = new Request($_GET, $_SERVER);
        $this->setMiddleware();
    }

    private function setMiddleware(): void
    {
        $this->middleware = new GetMiddleware();
        $this->middleware->setNext(new ApiMiddleware());
    }

    public function run(): string
    {
        if ($this->middleware->process($this->request)) {
            return (new Response($this->request))->handle();
        }

        return "";
    }
}
