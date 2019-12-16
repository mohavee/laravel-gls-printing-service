<?php

namespace Webidentity\GLSPrintingService;

use Illuminate\Support\Facades\Log;
use ReflectionMethod;
use ReflectionParameter;
use Webidentity\GLSPrintingService\Client\ApplicationServices;

class GLSPrintingService
{
    /**
     * @var ApplicationServices
     */
    private $client;
    /**
     * @var Logger|null
     */
    private $logger;
    /**
     * @var bool
     */
    private $shouldLog;

    /**
     * GLSPrintingService constructor.
     * @param ApplicationServices $client
     * @param Logger|null $logger
     * @param bool $shouldLog
     */
    public function __construct(ApplicationServices $client, Logger $logger, bool $shouldLog = false)
    {
        $this->client = $client;
        $this->logger = $logger;
        $this->shouldLog = $shouldLog;
    }

    public function __call(string $method, array $arguments)
    {
        $response = null;

        if (method_exists($this->client, $method)) {
            try {
                $response = $this->__named($method, ...$arguments);
            } catch(\Exception $e) {
                Log::error($e->getMessage());
            } finally {
                if ($this->shouldLog) {
                    $this->logger->logHttpRequest(
                        $this->client->__getLastRequest(),
                        $this->client->__getLastResponse()
                    );
                }
            }
        }

        return $response;
    }

    public function getTimestamp($time = 'now', $timezone = null)
    {
        return (new \DateTimeImmutable($time, $timezone))->format('YmdHis');
    }

    /**
     * Pass method arguments by name
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws \ReflectionException
     */
    public function __named($method, array $args = array())
    {
        $reflection = new ReflectionMethod($this->client, $method);

        $pass = array();
        foreach ($reflection->getParameters() as $param) {
            /* @var $param ReflectionParameter */
            if (isset($args[$param->getName()])) {
                $pass[] = $args[$param->getName()];
            } else {
                $pass[] = $param->getName() === 'services' ? [] : '';
            }
        }

        return $reflection->invokeArgs($this->client, $pass);
    }
}