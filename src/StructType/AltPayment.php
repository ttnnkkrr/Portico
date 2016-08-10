<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AltPayment StructType
 * @subpackage Structs
 */
class AltPayment extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMessage;
    /**
     * The StatusDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusDT;
    /**
     * Constructor method for AltPayment
     * @uses AltPayment::setStatus()
     * @uses AltPayment::setStatusMessage()
     * @uses AltPayment::setStatusDT()
     * @param string $status
     * @param string $statusMessage
     * @param string $statusDT
     */
    public function __construct($status = null, $statusMessage = null, $statusDT = null)
    {
        $this
            ->setStatus($status)
            ->setStatusMessage($statusMessage)
            ->setStatusDT($statusDT);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\AltPayment
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \StructType\AltPayment
     */
    public function setStatusMessage($statusMessage = null)
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusMessage)), __LINE__);
        }
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Get StatusDT value
     * @return string|null
     */
    public function getStatusDT()
    {
        return $this->StatusDT;
    }
    /**
     * Set StatusDT value
     * @param string $statusDT
     * @return \StructType\AltPayment
     */
    public function setStatusDT($statusDT = null)
    {
        // validation for constraint: string
        if (!is_null($statusDT) && !is_string($statusDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDT)), __LINE__);
        }
        $this->StatusDT = $statusDT;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AltPayment
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
