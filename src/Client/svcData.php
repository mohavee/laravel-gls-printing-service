<?php

namespace Webidentity\GLSPrintingService\Client;

class svcData
{

    /**
     * @var string $code
     * @access public
     */
    public $code = null;

    /**
     * @var string $info
     * @access public
     */
    public $info = null;

    /**
     * @param string $code
     * @param string $info
     * @access public
     */
    public function __construct($code, $info)
    {
      $this->code = $code;
      $this->info = $info;
    }

}
