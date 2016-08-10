<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CPCDataType StructType
 * @subpackage Structs
 */
class CPCDataType extends AbstractStructBase
{
    /**
     * The CardHolderPONbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderPONbr;
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TaxType;
    /**
     * The TaxAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmt;
    /**
     * Constructor method for CPCDataType
     * @uses CPCDataType::setCardHolderPONbr()
     * @uses CPCDataType::setTaxType()
     * @uses CPCDataType::setTaxAmt()
     * @param string $cardHolderPONbr
     * @param string $taxType
     * @param float $taxAmt
     */
    public function __construct($cardHolderPONbr = null, $taxType = null, $taxAmt = null)
    {
        $this
            ->setCardHolderPONbr($cardHolderPONbr)
            ->setTaxType($taxType)
            ->setTaxAmt($taxAmt);
    }
    /**
     * Get CardHolderPONbr value
     * @return string|null
     */
    public function getCardHolderPONbr()
    {
        return $this->CardHolderPONbr;
    }
    /**
     * Set CardHolderPONbr value
     * @param string $cardHolderPONbr
     * @return \StructType\CPCDataType
     */
    public function setCardHolderPONbr($cardHolderPONbr = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderPONbr) && !is_string($cardHolderPONbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderPONbr)), __LINE__);
        }
        $this->CardHolderPONbr = $cardHolderPONbr;
        return $this;
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @uses \EnumType\TaxTypeType::valueIsValid()
     * @uses \EnumType\TaxTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxType
     * @return \StructType\CPCDataType
     */
    public function setTaxType($taxType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TaxTypeType::valueIsValid($taxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxType, implode(', ', \EnumType\TaxTypeType::getValidValues())), __LINE__);
        }
        $this->TaxType = $taxType;
        return $this;
    }
    /**
     * Get TaxAmt value
     * @return float|null
     */
    public function getTaxAmt()
    {
        return $this->TaxAmt;
    }
    /**
     * Set TaxAmt value
     * @param float $taxAmt
     * @return \StructType\CPCDataType
     */
    public function setTaxAmt($taxAmt = null)
    {
        $this->TaxAmt = $taxAmt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CPCDataType
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
