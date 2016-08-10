<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAltPayCreateSessRspType StructType
 * @subpackage Structs
 */
class PosAltPayCreateSessRspType extends AbstractStructBase
{
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RspCode;
    /**
     * The RspMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspMessage;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Session
     */
    public $Session;
    /**
     * The Processor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Processor
     */
    public $Processor;
    /**
     * Constructor method for PosAltPayCreateSessRspType
     * @uses PosAltPayCreateSessRspType::setRspCode()
     * @uses PosAltPayCreateSessRspType::setRspMessage()
     * @uses PosAltPayCreateSessRspType::setSession()
     * @uses PosAltPayCreateSessRspType::setProcessor()
     * @param int $rspCode
     * @param string $rspMessage
     * @param \StructType\Session $session
     * @param \StructType\Processor $processor
     */
    public function __construct($rspCode = null, $rspMessage = null, \StructType\Session $session = null, \StructType\Processor $processor = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspMessage($rspMessage)
            ->setSession($session)
            ->setProcessor($processor);
    }
    /**
     * Get RspCode value
     * @return int
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param int $rspCode
     * @return \StructType\PosAltPayCreateSessRspType
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: int
        if (!is_null($rspCode) && !is_numeric($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rspCode)), __LINE__);
        }
        $this->RspCode = $rspCode;
        return $this;
    }
    /**
     * Get RspMessage value
     * @return string|null
     */
    public function getRspMessage()
    {
        return $this->RspMessage;
    }
    /**
     * Set RspMessage value
     * @param string $rspMessage
     * @return \StructType\PosAltPayCreateSessRspType
     */
    public function setRspMessage($rspMessage = null)
    {
        // validation for constraint: string
        if (!is_null($rspMessage) && !is_string($rspMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspMessage)), __LINE__);
        }
        $this->RspMessage = $rspMessage;
        return $this;
    }
    /**
     * Get Session value
     * @return \StructType\Session|null
     */
    public function getSession()
    {
        return $this->Session;
    }
    /**
     * Set Session value
     * @param \StructType\Session $session
     * @return \StructType\PosAltPayCreateSessRspType
     */
    public function setSession(\StructType\Session $session = null)
    {
        $this->Session = $session;
        return $this;
    }
    /**
     * Get Processor value
     * @return \StructType\Processor|null
     */
    public function getProcessor()
    {
        return $this->Processor;
    }
    /**
     * Set Processor value
     * @param \StructType\Processor $processor
     * @return \StructType\PosAltPayCreateSessRspType
     */
    public function setProcessor(\StructType\Processor $processor = null)
    {
        $this->Processor = $processor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAltPayCreateSessRspType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
