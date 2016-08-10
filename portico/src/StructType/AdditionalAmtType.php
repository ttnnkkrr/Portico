<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAmtType StructType
 * @subpackage Structs
 */
class AdditionalAmtType extends AbstractStructBase
{
    /**
     * The AmtType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AmtType;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * Constructor method for AdditionalAmtType
     * @uses AdditionalAmtType::setAmtType()
     * @uses AdditionalAmtType::setAmt()
     * @param string $amtType
     * @param float $amt
     */
    public function __construct($amtType = null, $amt = null)
    {
        $this
            ->setAmtType($amtType)
            ->setAmt($amt);
    }
    /**
     * Get AmtType value
     * @return string
     */
    public function getAmtType()
    {
        return $this->AmtType;
    }
    /**
     * Set AmtType value
     * @uses \EnumType\AmtTypeType::valueIsValid()
     * @uses \EnumType\AmtTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $amtType
     * @return \StructType\AdditionalAmtType
     */
    public function setAmtType($amtType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AmtTypeType::valueIsValid($amtType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $amtType, implode(', ', \EnumType\AmtTypeType::getValidValues())), __LINE__);
        }
        $this->AmtType = $amtType;
        return $this;
    }
    /**
     * Get Amt value
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\AdditionalAmtType
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalAmtType
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
