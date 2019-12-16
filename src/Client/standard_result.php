<?php

namespace Webidentity\GLSPrintingService\Client;

class standard_result
{

    /**
     * @var boolean $successfull
     * @access public
     */
    public $successfull = null;

    /**
     * @var int $errcode
     * @access public
     */
    public $errcode = null;

    /**
     * @var string $errdesc
     * @access public
     */
    public $errdesc = null;

    /**
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     * @access public
     */
    public function __construct($successfull, $errcode, $errdesc)
    {
      $this->successfull = $successfull;
      $this->errcode = $errcode;
      $this->errdesc = $errdesc;
    }

}
