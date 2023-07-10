<?php

namespace App\Behavioral\ChainOfResponsibility;

final readonly class Response
{
    public const CODE_OK = 200;
    public const CONTENT_TYPE_JSON = "Content-Type: application/json";

    public function __construct(private Request $request)
    {
    }

    public function handle(): string
    {
        http_response_code(self::CODE_OK);
        header(self::CONTENT_TYPE_JSON);

        return json_encode([
            "statusCode" => self::CODE_OK,
            "message" => "Request proceeded correctly",
            "params" => $this->request->getParams()
        ]);
    }
}
