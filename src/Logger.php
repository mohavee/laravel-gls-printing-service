<?php


namespace Webidentity\GLSPrintingService;


interface Logger
{
    public function logHttpRequest($request, $response);
}