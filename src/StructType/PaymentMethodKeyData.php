<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMethodKeyData StructType
 * @subpackage Structs
 */
class PaymentMethodKeyData extends AbstractStructBase
{
    /**
     * The ExpMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpYear;
    /**
     * The CVV2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2;
    /**
     * The CVV2Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2Status;
    /**
     * Constructor method for PaymentMethodKeyData
     * @uses PaymentMethodKeyData::setExpMonth()
     * @uses PaymentMethodKeyData::setExpYear()
     * @uses PaymentMethodKeyData::setCVV2()
     * @uses PaymentMethodKeyData::setCVV2Status()
     * @param int $expMonth
     * @param int $expYear
     * @param string $cVV2
     * @param string $cVV2Status
     */
    public function __construct($expMonth = null, $expYear = null, $cVV2 = null, $cVV2Status = null)
    {
        $this
            ->setExpMonth($expMonth)
            ->setExpYear($expYear)
            ->setCVV2($cVV2)
            ->setCVV2Status($cVV2Status);
    }
    /**
     * Get ExpMonth value
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }
    /**
     * Set ExpMonth value
     * @param int $expMonth
     * @return \StructType\PaymentMethodKeyData
     */
    public function setExpMonth($expMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expMonth) && !is_numeric($expMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expMonth)), __LINE__);
        }
        $this->ExpMonth = $expMonth;
        return $this;
    }
    /**
     * Get ExpYear value
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }
    /**
     * Set ExpYear value
     * @param int $expYear
     * @return \StructType\PaymentMethodKeyData
     */
    public function setExpYear($expYear = null)
    {
        // validation for constraint: int
        if (!is_null($expYear) && !is_numeric($expYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expYear)), __LINE__);
        }
        $this->ExpYear = $expYear;
        return $this;
    }
    /**
     * Get CVV2 value
     * @return string|null
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }
    /**
     * Set CVV2 value
     * @param string $cVV2
     * @return \StructType\PaymentMethodKeyData
     */
    public function setCVV2($cVV2 = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2) && !is_string($cVV2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVV2)), __LINE__);
        }
        $this->CVV2 = $cVV2;
        return $this;
    }
    /**
     * Get CVV2Status value
     * @return string|null
     */
    public function getCVV2Status()
    {
        return $this->CVV2Status;
    }
    /**
     * Set CVV2Status value
     * @uses \EnumType\Cvv2Status::valueIsValid()
     * @uses \EnumType\Cvv2Status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cVV2Status
     * @return \StructType\PaymentMethodKeyData
     */
    public function setCVV2Status($cVV2Status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Cvv2Status::valueIsValid($cVV2Status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cVV2Status, implode(', ', \EnumType\Cvv2Status::getValidValues())), __LINE__);
        }
        $this->CVV2Status = $cVV2Status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentMethodKeyData
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
