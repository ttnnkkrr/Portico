<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardTipReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardTipReqBlock1Type extends AbstractStructBase
{
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for GiftCardTipReqBlock1Type
     * @uses GiftCardTipReqBlock1Type::setGatewayTxnId()
     * @uses GiftCardTipReqBlock1Type::setGratuityAmtInfo()
     * @uses GiftCardTipReqBlock1Type::setCurrency()
     * @param int $gatewayTxnId
     * @param float $gratuityAmtInfo
     * @param string $currency
     */
    public function __construct($gatewayTxnId = null, $gratuityAmtInfo = null, $currency = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setCurrency($currency);
    }
    /**
     * Get GatewayTxnId value
     * @return int
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\GiftCardTipReqBlock1Type
     */
    public function setGatewayTxnId($gatewayTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayTxnId) && !is_numeric($gatewayTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayTxnId)), __LINE__);
        }
        $this->GatewayTxnId = $gatewayTxnId;
        return $this;
    }
    /**
     * Get GratuityAmtInfo value
     * @return float
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\GiftCardTipReqBlock1Type
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
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
     * @return \StructType\GiftCardTipReqBlock1Type
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
     * @return \StructType\GiftCardTipReqBlock1Type
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
