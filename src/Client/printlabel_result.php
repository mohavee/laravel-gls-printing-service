<?php

namespace Webidentity\GLSPrintingService\Client;

class printlabel_result
{

    /**
     * @var String[] $pcls
     * @access public
     */
    public $pcls = null;

    /**
     * @var String[] $pcls_withcheckdigit
     * @access public
     */
    public $pcls_withcheckdigit = null;

    /**
     * @var string $pdfdata
     * @access public
     */
    public $pdfdata = null;

    /**
     * @var string $depo
     * @access public
     */
    public $depo = null;

    /**
     * @var string $driver
     * @access public
     */
    public $driver = null;

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
     * @param String[] $pcls
     * @param String[] $pcls_withcheckdigit
     * @param string $pdfdata
     * @param string $depo
     * @param string $driver
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     * @access public
     */
    public function __construct($pcls, $pcls_withcheckdigit, $pdfdata, $depo, $driver, $successfull, $errcode, $errdesc)
    {
      $this->pcls = $pcls;
      $this->pcls_withcheckdigit = $pcls_withcheckdigit;
      $this->pdfdata = $pdfdata;
      $this->depo = $depo;
      $this->driver = $driver;
      $this->successfull = $successfull;
      $this->errcode = $errcode;
      $this->errdesc = $errdesc;
    }

}
