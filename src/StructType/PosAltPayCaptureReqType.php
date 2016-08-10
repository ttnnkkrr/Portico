<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAltPayCaptureReqType StructType
 * @subpackage Structs
 */
class PosAltPayCaptureReqType extends AbstractStructBase
{
    /**
     * The TransactionType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TransactionType;
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Payment
     */
    public $Payment;
    /**
     * Constructor method for PosAltPayCaptureReqType
     * @uses PosAltPayCaptureReqType::setTransactionType()
     * @uses PosAltPayCaptureReqType::setGatewayTxnId()
     * @uses PosAltPayCaptureReqType::setAmt()
     * @uses PosAltPayCaptureReqType::setPayment()
     * @param string $transactionType
     * @param int $gatewayTxnId
     * @param float $amt
     * @param \StructType\Payment $payment
     */
    public function __construct($transactionType = null, $gatewayTxnId = null, $amt = null, \StructType\Payment $payment = null)
    {
        $this
            ->setTransactionType($transactionType)
            ->setGatewayTxnId($gatewayTxnId)
            ->setAmt($amt)
            ->setPayment($payment);
    }
    /**
     * Get TransactionType value
     * @return string
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @uses \EnumType\AltPaymentTxnType::valueIsValid()
     * @uses \EnumType\AltPaymentTxnType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionType
     * @return \StructType\PosAltPayCaptureReqType
     */
    public function setTransactionType($transactionType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AltPaymentTxnType::valueIsValid($transactionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transactionType, implode(', ', \EnumType\AltPaymentTxnType::getValidValues())), __LINE__);
        }
        $this->TransactionType = $transactionType;
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
     * @return \StructType\PosAltPayCaptureReqType
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
     * @return \StructType\PosAltPayCaptureReqType
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get Payment value
     * @return \StructType\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \StructType\Payment $payment
     * @return \StructType\PosAltPayCaptureReqType
     */
    public function setPayment(\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAltPayCaptureReqType
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
