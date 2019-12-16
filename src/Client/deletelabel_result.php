<?php

namespace Webidentity\GLSPrintingService\Client;

class deletelabel_result
{

    /**
     * @var String[] $deletedpcls
     * @access public
     */
    public $deletedpcls = null;

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
     * @param String[] $deletedpcls
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     * @access public
     */
    public function __construct($deletedpcls, $successfull, $errcode, $errdesc)
    {
      $this->deletedpcls = $deletedpcls;
      $this->successfull = $successfull;
      $this->errcode = $errcode;
      $this->errdesc = $errdesc;
    }

}
