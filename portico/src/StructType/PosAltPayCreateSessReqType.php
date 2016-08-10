<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAltPayCreateSessReqType StructType
 * @subpackage Structs
 */
class PosAltPayCreateSessReqType extends AbstractStructBase
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
     * The Buyer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Buyer
     */
    public $Buyer;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amt;
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
     * Constructor method for PosAltPayCreateSessReqType
     * @uses PosAltPayCreateSessReqType::setTransactionType()
     * @uses PosAltPayCreateSessReqType::setBuyer()
     * @uses PosAltPayCreateSessReqType::setAmt()
     * @uses PosAltPayCreateSessReqType::setShipping()
     * @uses PosAltPayCreateSessReqType::setPayment()
     * @uses PosAltPayCreateSessReqType::setLineItem()
     * @param string $transactionType
     * @param \StructType\Buyer $buyer
     * @param float $amt
     * @param \StructType\Shipping $shipping
     * @param \StructType\Payment $payment
     * @param \StructType\LineItem $lineItem
     */
    public function __construct($transactionType = null, \StructType\Buyer $buyer = null, $amt = null, \StructType\Shipping $shipping = null, \StructType\Payment $payment = null, \StructType\LineItem $lineItem = null)
    {
        $this
            ->setTransactionType($transactionType)
            ->setBuyer($buyer)
            ->setAmt($amt)
            ->setShipping($shipping)
            ->setPayment($payment)
            ->setLineItem($lineItem);
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
     * @return \StructType\PosAltPayCreateSessReqType
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
     * @return \StructType\PosAltPayCreateSessReqType
     */
    public function setBuyer(\StructType\Buyer $buyer = null)
    {
        $this->Buyer = $buyer;
        return $this;
    }
    /**
     * Get Amt value
     * @return float|null
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\PosAltPayCreateSessReqType
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
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
     * @return \StructType\PosAltPayCreateSessReqType
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
     * @return \StructType\PosAltPayCreateSessReqType
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
     * @return \StructType\PosAltPayCreateSessReqType
     */
    public function setLineItem(\StructType\LineItem $lineItem = null)
    {
        $this->LineItem = $lineItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAltPayCreateSessReqType
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
