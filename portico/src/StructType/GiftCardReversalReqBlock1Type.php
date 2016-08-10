<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardReversalReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardReversalReqBlock1Type extends AbstractStructBase
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
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The ClientTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ClientTxnId;
    /**
     * Constructor method for GiftCardReversalReqBlock1Type
     * @uses GiftCardReversalReqBlock1Type::setAmt()
     * @uses GiftCardReversalReqBlock1Type::setCardData()
     * @uses GiftCardReversalReqBlock1Type::setGatewayTxnId()
     * @uses GiftCardReversalReqBlock1Type::setClientTxnId()
     * @param float $amt
     * @param \StructType\GiftCardDataType $cardData
     * @param int $gatewayTxnId
     * @param int $clientTxnId
     */
    public function __construct($amt = null, \StructType\GiftCardDataType $cardData = null, $gatewayTxnId = null, $clientTxnId = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setGatewayTxnId($gatewayTxnId)
            ->setClientTxnId($clientTxnId);
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
     * @return \StructType\GiftCardReversalReqBlock1Type
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
     * @return \StructType\GiftCardReversalReqBlock1Type
     */
    public function setCardData(\StructType\GiftCardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get GatewayTxnId value
     * @return int|null
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\GiftCardReversalReqBlock1Type
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
     * Get ClientTxnId value
     * @return int|null
     */
    public function getClientTxnId()
    {
        return $this->ClientTxnId;
    }
    /**
     * Set ClientTxnId value
     * @param int $clientTxnId
     * @return \StructType\GiftCardReversalReqBlock1Type
     */
    public function setClientTxnId($clientTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($clientTxnId) && !is_numeric($clientTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clientTxnId)), __LINE__);
        }
        $this->ClientTxnId = $clientTxnId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardReversalReqBlock1Type
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
