<?php


namespace Webidentity\GLSPrintingService;


use Illuminate\Support\Facades\Log;

class BaseLogger implements Logger
{
    public function logHttpRequest($request, $response)
    {
        Log::info("REQUEST - {$request}");
        Log::info("RESPONSE - {$response}");
    }
}