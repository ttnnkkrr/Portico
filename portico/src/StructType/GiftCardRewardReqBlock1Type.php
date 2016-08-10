<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardRewardReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardRewardReqBlock1Type extends AbstractStructBase
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
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The TaxAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmtInfo;
    /**
     * Constructor method for GiftCardRewardReqBlock1Type
     * @uses GiftCardRewardReqBlock1Type::setAmt()
     * @uses GiftCardRewardReqBlock1Type::setCardData()
     * @uses GiftCardRewardReqBlock1Type::setCurrency()
     * @uses GiftCardRewardReqBlock1Type::setGratuityAmtInfo()
     * @uses GiftCardRewardReqBlock1Type::setTaxAmtInfo()
     * @param float $amt
     * @param \StructType\GiftCardDataType $cardData
     * @param string $currency
     * @param float $gratuityAmtInfo
     * @param float $taxAmtInfo
     */
    public function __construct($amt = null, \StructType\GiftCardDataType $cardData = null, $currency = null, $gratuityAmtInfo = null, $taxAmtInfo = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setCurrency($currency)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setTaxAmtInfo($taxAmtInfo);
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
     * @return \StructType\GiftCardRewardReqBlock1Type
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
     * @return \StructType\GiftCardRewardReqBlock1Type
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
     * @return \StructType\GiftCardRewardReqBlock1Type
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
     * Get GratuityAmtInfo value
     * @return float|null
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\GiftCardRewardReqBlock1Type
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
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
     * @return \StructType\GiftCardRewardReqBlock1Type
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
     * @return \StructType\GiftCardRewardReqBlock1Type
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
