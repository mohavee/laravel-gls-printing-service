<?php

namespace Webidentity\GLSPrintingService\Client;


class ApplicationServices extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'svcData' => 'Webidentity\GLSPrintingService\Client\svcData',
      'PrepareReturn' => 'Webidentity\GLSPrintingService\Client\PrepareReturn',
      'printlabel_result' => 'Webidentity\GLSPrintingService\Client\printlabel_result',
      'deletelabel_result' => 'Webidentity\GLSPrintingService\Client\deletelabel_result',
      'printlabelzip_result' => 'Webidentity\GLSPrintingService\Client\printlabelzip_result',
      'standard_result' => 'Webidentity\GLSPrintingService\Client\standard_result');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://online.gls-slovakia.sk/webservices/soap_server.php?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $sender_name
     * @param string $sender_address
     * @param string $sender_city
     * @param string $sender_zipcode
     * @param string $sender_country
     * @param string $sender_contact
     * @param string $sender_phone
     * @param string $sender_email
     * @param string $consig_name
     * @param string $consig_address
     * @param string $consig_city
     * @param string $consig_zipcode
     * @param string $consig_country
     * @param string $consig_contact
     * @param string $consig_phone
     * @param string $consig_email
     * @param int $pcount
     * @param string $pickupdate
     * @param string $content
     * @param string $clientref
     * @param decimal $codamount
     * @param string $codref
     * @param svcDataArray $services
     * @param string $printertemplate
     * @param boolean $printit
     * @param string $timestamp
     * @param string $hash
     * @param boolean $customlabel
     * @param boolean $is_autoprint_pdfs
     * @param string $gapid
     * @param string $sender_street
     * @param string $sender_housenumber
     * @param string $sender_housenumberinfo
     * @param string $consig_street
     * @param string $consig_housenumber
     * @param string $consig_housenumberinfo
     * @access public
     * @return printlabel_result
     */
    public function printlabel($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, $services, $printertemplate, $printit, $timestamp, $hash, $customlabel, $is_autoprint_pdfs, $gapid, $sender_street, $sender_housenumber, $sender_housenumberinfo, $consig_street, $consig_housenumber, $consig_housenumberinfo)
    {
      return $this->__soapCall('printlabel', array($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, $services, $printertemplate, $printit, $timestamp, $hash, $customlabel, $is_autoprint_pdfs, $gapid, $sender_street, $sender_housenumber, $sender_housenumberinfo, $consig_street, $consig_housenumber, $consig_housenumberinfo));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param ArrayOfString $pclids
     * @param string $gapid
     * @access public
     * @return printlabel_result
     */
    public function deletelabels($username, $password, $senderid, $pclids, $gapid)
    {
      return $this->__soapCall('deletelabels', array($username, $password, $senderid, $pclids, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $sender_name
     * @param string $sender_address
     * @param string $sender_city
     * @param string $sender_zipcode
     * @param string $sender_country
     * @param string $sender_contact
     * @param string $sender_phone
     * @param string $sender_email
     * @param string $consig_name
     * @param string $consig_address
     * @param string $consig_city
     * @param string $consig_zipcode
     * @param string $consig_country
     * @param string $consig_contact
     * @param string $consig_phone
     * @param string $consig_email
     * @param int $pcount
     * @param string $pickupdate
     * @param string $content
     * @param string $clientref
     * @param decimal $codamount
     * @param string $codref
     * @param string $gapid
     * @param string $sender_street
     * @param string $sender_housenumber
     * @param string $sender_housenumberinfo
     * @param string $consig_street
     * @param string $consig_housenumber
     * @param string $consig_housenumberinfo
     * @access public
     * @return string
     */
    public function getglshash($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, $gapid, $sender_street, $sender_housenumber, $sender_housenumberinfo, $consig_street, $consig_housenumber, $consig_housenumberinfo)
    {
      return $this->__soapCall('getglshash', array($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, $gapid, $sender_street, $sender_housenumber, $sender_housenumberinfo, $consig_street, $consig_housenumber, $consig_housenumberinfo));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $gapid
     * @access public
     * @return ArrayOfPrepareReturn
     */
    public function preparelabels($username, $password, $senderid, $data, $gapid)
    {
      return $this->__soapCall('preparelabels', array($username, $password, $senderid, $data, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $gapid
     * @access public
     * @return string
     */
    public function preparelabels_xml($username, $password, $senderid, $data, $gapid)
    {
      return $this->__soapCall('preparelabels_xml', array($username, $password, $senderid, $data, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $gapid
     * @access public
     * @return string
     */
    public function deletelabels_xml($username, $password, $senderid, $data, $gapid)
    {
      return $this->__soapCall('deletelabels_xml', array($username, $password, $senderid, $data, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param base64Binary $data
     * @param string $gapid
     * @access public
     * @return base64Binary
     */
    public function deletelabels_gzipped_xml($username, $password, $senderid, $data, $gapid)
    {
      return $this->__soapCall('deletelabels_gzipped_xml', array($username, $password, $senderid, $data, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param base64Binary $data
     * @param string $gapid
     * @access public
     * @return base64Binary
     */
    public function preparelabels_gzipped_xml($username, $password, $senderid, $data, $gapid)
    {
      return $this->__soapCall('preparelabels_gzipped_xml', array($username, $password, $senderid, $data, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @param string $gapid
     * @access public
     * @return string
     */
    public function getprintedlabels_xml($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid)
    {
      return $this->__soapCall('getprintedlabels_xml', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param base64Binary $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @param string $gapid
     * @access public
     * @return base64Binary
     */
    public function getprintedlabels_gzipped_xml($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid)
    {
      return $this->__soapCall('getprintedlabels_gzipped_xml', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param base64Binary $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @param string $gapid
     * @access public
     * @return base64Binary
     */
    public function getprintedlabels_zipped_pdfs($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid)
    {
      return $this->__soapCall('getprintedlabels_zipped_pdfs', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs, $gapid));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $pclid
     * @param decimal $codamount
     * @param string $email
     * @param string $gapid
     * @access public
     * @return standard_result
     */
    public function modifycod($username, $password, $senderid, $pclid, $codamount, $email, $gapid)
    {
      return $this->__soapCall('modifycod', array($username, $password, $senderid, $pclid, $codamount, $email, $gapid));
    }

}
