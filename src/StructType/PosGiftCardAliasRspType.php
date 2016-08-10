<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGiftCardAliasRspType StructType
 * @subpackage Structs
 */
class PosGiftCardAliasRspType extends AbstractStructBase
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
     * The RspText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspText;
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataRspType
     */
    public $CardData;
    /**
     * Constructor method for PosGiftCardAliasRspType
     * @uses PosGiftCardAliasRspType::setRspCode()
     * @uses PosGiftCardAliasRspType::setRspText()
     * @uses PosGiftCardAliasRspType::setCardData()
     * @param int $rspCode
     * @param string $rspText
     * @param \StructType\GiftCardDataRspType $cardData
     */
    public function __construct($rspCode = null, $rspText = null, \StructType\GiftCardDataRspType $cardData = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setCardData($cardData);
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
     * @return \StructType\PosGiftCardAliasRspType
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
     * Get RspText value
     * @return string|null
     */
    public function getRspText()
    {
        return $this->RspText;
    }
    /**
     * Set RspText value
     * @param string $rspText
     * @return \StructType\PosGiftCardAliasRspType
     */
    public function setRspText($rspText = null)
    {
        // validation for constraint: string
        if (!is_null($rspText) && !is_string($rspText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspText)), __LINE__);
        }
        $this->RspText = $rspText;
        return $this;
    }
    /**
     * Get CardData value
     * @return \StructType\GiftCardDataRspType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\GiftCardDataRspType $cardData
     * @return \StructType\PosGiftCardAliasRspType
     */
    public function setCardData(\StructType\GiftCardDataRspType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGiftCardAliasRspType
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
