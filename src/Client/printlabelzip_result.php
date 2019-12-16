<?php

namespace Webidentity\GLSPrintingService\Client;

class printlabelzip_result
{

    /**
     * @var String[] $pclids
     * @access public
     */
    public $pclids = null;

    /**
     * @var string $pdfdata
     * @access public
     */
    public $pdfdata = null;

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
     * @param String[] $pclids
     * @param string $pdfdata
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     * @access public
     */
    public function __construct($pclids, $pdfdata, $successfull, $errcode, $errdesc)
    {
      $this->pclids = $pclids;
      $this->pdfdata = $pdfdata;
      $this->successfull = $successfull;
      $this->errcode = $errcode;
      $this->errdesc = $errdesc;
    }

}
