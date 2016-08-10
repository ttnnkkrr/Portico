<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAltPaySessionInfoRspType StructType
 * @subpackage Structs
 */
class PosAltPaySessionInfoRspType extends AbstractStructBase
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
     * The RspMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspMessage;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMessage;
    /**
     * The Buyer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Buyer
     */
    public $Buyer;
    /**
     * The Shipping
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Shipping
     */
    public $Shipping;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Payment
     */
    public $Payment;
    /**
     * The LineItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LineItem
     */
    public $LineItem;
    /**
     * The Processor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Processor
     */
    public $Processor;
    /**
     * Constructor method for PosAltPaySessionInfoRspType
     * @uses PosAltPaySessionInfoRspType::setRspCode()
     * @uses PosAltPaySessionInfoRspType::setRspMessage()
     * @uses PosAltPaySessionInfoRspType::setStatus()
     * @uses PosAltPaySessionInfoRspType::setStatusMessage()
     * @uses PosAltPaySessionInfoRspType::setBuyer()
     * @uses PosAltPaySessionInfoRspType::setShipping()
     * @uses PosAltPaySessionInfoRspType::setPayment()
     * @uses PosAltPaySessionInfoRspType::setLineItem()
     * @uses PosAltPaySessionInfoRspType::setProcessor()
     * @param int $rspCode
     * @param string $rspMessage
     * @param string $status
     * @param string $statusMessage
     * @param \StructType\Buyer $buyer
     * @param \StructType\Shipping $shipping
     * @param \StructType\Payment $payment
     * @param \StructType\LineItem $lineItem
     * @param \StructType\Processor $processor
     */
    public function __construct($rspCode = null, $rspMessage = null, $status = null, $statusMessage = null, \StructType\Buyer $buyer = null, \StructType\Shipping $shipping = null, \StructType\Payment $payment = null, \StructType\LineItem $lineItem = null, \StructType\Processor $processor = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspMessage($rspMessage)
            ->setStatus($status)
            ->setStatusMessage($statusMessage)
            ->setBuyer($buyer)
            ->setShipping($shipping)
            ->setPayment($payment)
            ->setLineItem($lineItem)
            ->setProcessor($processor);
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
     * @return \StructType\PosAltPaySessionInfoRspType
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
     * Get RspMessage value
     * @return string|null
     */
    public function getRspMessage()
    {
        return $this->RspMessage;
    }
    /**
     * Set RspMessage value
     * @param string $rspMessage
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setRspMessage($rspMessage = null)
    {
        // validation for constraint: string
        if (!is_null($rspMessage) && !is_string($rspMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspMessage)), __LINE__);
        }
        $this->RspMessage = $rspMessage;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setStatusMessage($statusMessage = null)
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusMessage)), __LINE__);
        }
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Get Buyer value
     * @return \StructType\Buyer|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \StructType\Buyer $buyer
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setBuyer(\StructType\Buyer $buyer = null)
    {
        $this->Buyer = $buyer;
        return $this;
    }
    /**
     * Get Shipping value
     * @return \StructType\Shipping|null
     */
    public function getShipping()
    {
        return $this->Shipping;
    }
    /**
     * Set Shipping value
     * @param \StructType\Shipping $shipping
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setShipping(\StructType\Shipping $shipping = null)
    {
        $this->Shipping = $shipping;
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
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setPayment(\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get LineItem value
     * @return \StructType\LineItem|null
     */
    public function getLineItem()
    {
        return $this->LineItem;
    }
    /**
     * Set LineItem value
     * @param \StructType\LineItem $lineItem
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setLineItem(\StructType\LineItem $lineItem = null)
    {
        $this->LineItem = $lineItem;
        return $this;
    }
    /**
     * Get Processor value
     * @return \StructType\Processor|null
     */
    public function getProcessor()
    {
        return $this->Processor;
    }
    /**
     * Set Processor value
     * @param \StructType\Processor $processor
     * @return \StructType\PosAltPaySessionInfoRspType
     */
    public function setProcessor(\StructType\Processor $processor = null)
    {
        $this->Processor = $processor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAltPaySessionInfoRspType
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
