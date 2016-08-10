<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardActivateReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardActivateReqBlock1Type extends AbstractStructBase
{
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataType
     */
    public $CardData;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for GiftCardActivateReqBlock1Type
     * @uses GiftCardActivateReqBlock1Type::setAmt()
     * @uses GiftCardActivateReqBlock1Type::setCardData()
     * @uses GiftCardActivateReqBlock1Type::setCurrency()
     * @param float $amt
     * @param \StructType\GiftCardDataType $cardData
     * @param string $currency
     */
    public function __construct($amt = null, \StructType\GiftCardDataType $cardData = null, $currency = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setCurrency($currency);
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
     * @return \StructType\GiftCardActivateReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get CardData value
     * @return \StructType\GiftCardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\GiftCardDataType $cardData
     * @return \StructType\GiftCardActivateReqBlock1Type
     */
    public function setCardData(\StructType\GiftCardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \EnumType\CurrencyType::valueIsValid()
     * @uses \EnumType\CurrencyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \StructType\GiftCardActivateReqBlock1Type
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \EnumType\CurrencyType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardActivateReqBlock1Type
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
