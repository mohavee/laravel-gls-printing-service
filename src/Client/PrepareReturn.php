<?php

namespace Webidentity\GLSPrintingService\Client;

class PrepareReturn
{

    /**
     * @var string $clientref
     * @access public
     */
    public $clientref = null;

    /**
     * @var string $pclid
     * @access public
     */
    public $pclid = null;

    /**
     * @var string $error
     * @access public
     */
    public $error = null;

    /**
     * @param string $clientref
     * @param string $pclid
     * @param string $error
     * @access public
     */
    public function __construct($clientref, $pclid, $error)
    {
      $this->clientref = $clientref;
      $this->pclid = $pclid;
      $this->error = $error;
    }

}
