<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for origTxnRefDataType StructType
 * @subpackage Structs
 */
class OrigTxnRefDataType extends AbstractStructBase
{
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthCode;
    /**
     * The CardNbrLastFour
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbrLastFour;
    /**
     * Constructor method for origTxnRefDataType
     * @uses OrigTxnRefDataType::setAuthCode()
     * @uses OrigTxnRefDataType::setCardNbrLastFour()
     * @param string $authCode
     * @param string $cardNbrLastFour
     */
    public function __construct($authCode = null, $cardNbrLastFour = null)
    {
        $this
            ->setAuthCode($authCode)
            ->setCardNbrLastFour($cardNbrLastFour);
    }
    /**
     * Get AuthCode value
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }
    /**
     * Set AuthCode value
     * @param string $authCode
     * @return \StructType\OrigTxnRefDataType
     */
    public function setAuthCode($authCode = null)
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authCode)), __LINE__);
        }
        $this->AuthCode = $authCode;
        return $this;
    }
    /**
     * Get CardNbrLastFour value
     * @return string|null
     */
    public function getCardNbrLastFour()
    {
        return $this->CardNbrLastFour;
    }
    /**
     * Set CardNbrLastFour value
     * @param string $cardNbrLastFour
     * @return \StructType\OrigTxnRefDataType
     */
    public function setCardNbrLastFour($cardNbrLastFour = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbrLastFour) && !is_string($cardNbrLastFour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbrLastFour)), __LINE__);
        }
        $this->CardNbrLastFour = $cardNbrLastFour;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OrigTxnRefDataType
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
