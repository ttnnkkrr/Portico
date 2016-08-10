<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftDataType StructType
 * @subpackage Structs
 */
class GiftDataType extends AbstractStructBase
{
    /**
     * The GiftCurrency
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftCurrency;
    /**
     * The GiftMaskedAlias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftMaskedAlias;
    /**
     * The TaxAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmtInfo;
    /**
     * Constructor method for GiftDataType
     * @uses GiftDataType::setGiftCurrency()
     * @uses GiftDataType::setGiftMaskedAlias()
     * @uses GiftDataType::setTaxAmtInfo()
     * @param string $giftCurrency
     * @param string $giftMaskedAlias
     * @param float $taxAmtInfo
     */
    public function __construct($giftCurrency = null, $giftMaskedAlias = null, $taxAmtInfo = null)
    {
        $this
            ->setGiftCurrency($giftCurrency)
            ->setGiftMaskedAlias($giftMaskedAlias)
            ->setTaxAmtInfo($taxAmtInfo);
    }
    /**
     * Get GiftCurrency value
     * @return string|null
     */
    public function getGiftCurrency()
    {
        return $this->GiftCurrency;
    }
    /**
     * Set GiftCurrency value
     * @uses \EnumType\CurrencyType::valueIsValid()
     * @uses \EnumType\CurrencyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giftCurrency
     * @return \StructType\GiftDataType
     */
    public function setGiftCurrency($giftCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyType::valueIsValid($giftCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $giftCurrency, implode(', ', \EnumType\CurrencyType::getValidValues())), __LINE__);
        }
        $this->GiftCurrency = $giftCurrency;
        return $this;
    }
    /**
     * Get GiftMaskedAlias value
     * @return string|null
     */
    public function getGiftMaskedAlias()
    {
        return $this->GiftMaskedAlias;
    }
    /**
     * Set GiftMaskedAlias value
     * @param string $giftMaskedAlias
     * @return \StructType\GiftDataType
     */
    public function setGiftMaskedAlias($giftMaskedAlias = null)
    {
        // validation for constraint: string
        if (!is_null($giftMaskedAlias) && !is_string($giftMaskedAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftMaskedAlias)), __LINE__);
        }
        $this->GiftMaskedAlias = $giftMaskedAlias;
        return $this;
    }
    /**
     * Get TaxAmtInfo value
     * @return float|null
     */
    public function getTaxAmtInfo()
    {
        return $this->TaxAmtInfo;
    }
    /**
     * Set TaxAmtInfo value
     * @param float $taxAmtInfo
     * @return \StructType\GiftDataType
     */
    public function setTaxAmtInfo($taxAmtInfo = null)
    {
        $this->TaxAmtInfo = $taxAmtInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftDataType
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
