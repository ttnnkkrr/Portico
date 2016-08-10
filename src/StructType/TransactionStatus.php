<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionStatus StructType
 * @subpackage Structs
 */
class TransactionStatus extends AbstractStructBase
{
    /**
     * The GatewayRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayRspCode;
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The GatewayRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayRspMsg;
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
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
     * The TxnStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnStatus;
    /**
     * The AltPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AltPayment
     */
    public $AltPayment;
    /**
     * Constructor method for TransactionStatus
     * @uses TransactionStatus::setGatewayRspCode()
     * @uses TransactionStatus::setGatewayTxnId()
     * @uses TransactionStatus::setGatewayRspMsg()
     * @uses TransactionStatus::setRspCode()
     * @uses TransactionStatus::setRspText()
     * @uses TransactionStatus::setTxnStatus()
     * @uses TransactionStatus::setAltPayment()
     * @param int $gatewayRspCode
     * @param int $gatewayTxnId
     * @param string $gatewayRspMsg
     * @param string $rspCode
     * @param string $rspText
     * @param string $txnStatus
     * @param \StructType\AltPayment $altPayment
     */
    public function __construct($gatewayRspCode = null, $gatewayTxnId = null, $gatewayRspMsg = null, $rspCode = null, $rspText = null, $txnStatus = null, \StructType\AltPayment $altPayment = null)
    {
        $this
            ->setGatewayRspCode($gatewayRspCode)
            ->setGatewayTxnId($gatewayTxnId)
            ->setGatewayRspMsg($gatewayRspMsg)
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setTxnStatus($txnStatus)
            ->setAltPayment($altPayment);
    }
    /**
     * Get GatewayRspCode value
     * @return int
     */
    public function getGatewayRspCode()
    {
        return $this->GatewayRspCode;
    }
    /**
     * Set GatewayRspCode value
     * @param int $gatewayRspCode
     * @return \StructType\TransactionStatus
     */
    public function setGatewayRspCode($gatewayRspCode = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayRspCode) && !is_numeric($gatewayRspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayRspCode)), __LINE__);
        }
        $this->GatewayRspCode = $gatewayRspCode;
        return $this;
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
     * @return \StructType\TransactionStatus
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
     * Get GatewayRspMsg value
     * @return string|null
     */
    public function getGatewayRspMsg()
    {
        return $this->GatewayRspMsg;
    }
    /**
     * Set GatewayRspMsg value
     * @param string $gatewayRspMsg
     * @return \StructType\TransactionStatus
     */
    public function setGatewayRspMsg($gatewayRspMsg = null)
    {
        // validation for constraint: string
        if (!is_null($gatewayRspMsg) && !is_string($gatewayRspMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gatewayRspMsg)), __LINE__);
        }
        $this->GatewayRspMsg = $gatewayRspMsg;
        return $this;
    }
    /**
     * Get RspCode value
     * @return string|null
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param string $rspCode
     * @return \StructType\TransactionStatus
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: string
        if (!is_null($rspCode) && !is_string($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspCode)), __LINE__);
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
     * @return \StructType\TransactionStatus
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
     * Get TxnStatus value
     * @return string|null
     */
    public function getTxnStatus()
    {
        return $this->TxnStatus;
    }
    /**
     * Set TxnStatus value
     * @param string $txnStatus
     * @return \StructType\TransactionStatus
     */
    public function setTxnStatus($txnStatus = null)
    {
        // validation for constraint: string
        if (!is_null($txnStatus) && !is_string($txnStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnStatus)), __LINE__);
        }
        $this->TxnStatus = $txnStatus;
        return $this;
    }
    /**
     * Get AltPayment value
     * @return \StructType\AltPayment|null
     */
    public function getAltPayment()
    {
        return $this->AltPayment;
    }
    /**
     * Set AltPayment value
     * @param \StructType\AltPayment $altPayment
     * @return \StructType\TransactionStatus
     */
    public function setAltPayment(\StructType\AltPayment $altPayment = null)
    {
        $this->AltPayment = $altPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransactionStatus
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
