<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringBillReqBlock1Type StructType
 * @subpackage Structs
 */
class RecurringBillReqBlock1Type extends AbstractStructBase
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
     * @var \StructType\CardDataType
     */
    public $CardData;
    /**
     * The PaymentMethodKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodKey;
    /**
     * The PaymentMethodKeyData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PaymentMethodKeyData
     */
    public $PaymentMethodKeyData;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * The AllowDup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowDup;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The RecurringData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RecurringDataType
     */
    public $RecurringData;
    /**
     * The DebtRepaymentIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebtRepaymentIndicator;
    /**
     * The CPCReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCReq;
    /**
     * The CPCData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CPCDataType
     */
    public $CPCData;
    /**
     * Constructor method for RecurringBillReqBlock1Type
     * @uses RecurringBillReqBlock1Type::setAmt()
     * @uses RecurringBillReqBlock1Type::setCardData()
     * @uses RecurringBillReqBlock1Type::setPaymentMethodKey()
     * @uses RecurringBillReqBlock1Type::setPaymentMethodKeyData()
     * @uses RecurringBillReqBlock1Type::setCardHolderData()
     * @uses RecurringBillReqBlock1Type::setAllowDup()
     * @uses RecurringBillReqBlock1Type::setAdditionalTxnFields()
     * @uses RecurringBillReqBlock1Type::setRecurringData()
     * @uses RecurringBillReqBlock1Type::setDebtRepaymentIndicator()
     * @uses RecurringBillReqBlock1Type::setCPCReq()
     * @uses RecurringBillReqBlock1Type::setCPCData()
     * @param float $amt
     * @param \StructType\CardDataType $cardData
     * @param string $paymentMethodKey
     * @param \StructType\PaymentMethodKeyData $paymentMethodKeyData
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $allowDup
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param \StructType\RecurringDataType $recurringData
     * @param string $debtRepaymentIndicator
     * @param string $cPCReq
     * @param \StructType\CPCDataType $cPCData
     */
    public function __construct($amt = null, \StructType\CardDataType $cardData = null, $paymentMethodKey = null, \StructType\PaymentMethodKeyData $paymentMethodKeyData = null, \StructType\CardHolderDataType $cardHolderData = null, $allowDup = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, \StructType\RecurringDataType $recurringData = null, $debtRepaymentIndicator = null, $cPCReq = null, \StructType\CPCDataType $cPCData = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setPaymentMethodKeyData($paymentMethodKeyData)
            ->setCardHolderData($cardHolderData)
            ->setAllowDup($allowDup)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setRecurringData($recurringData)
            ->setDebtRepaymentIndicator($debtRepaymentIndicator)
            ->setCPCReq($cPCReq)
            ->setCPCData($cPCData);
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
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get CardData value
     * @return \StructType\CardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\CardDataType $cardData
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get PaymentMethodKey value
     * @return string|null
     */
    public function getPaymentMethodKey()
    {
        return $this->PaymentMethodKey;
    }
    /**
     * Set PaymentMethodKey value
     * @param string $paymentMethodKey
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setPaymentMethodKey($paymentMethodKey = null)
    {
        // validation for constraint: string
        if (!is_null($paymentMethodKey) && !is_string($paymentMethodKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentMethodKey)), __LINE__);
        }
        $this->PaymentMethodKey = $paymentMethodKey;
        return $this;
    }
    /**
     * Get PaymentMethodKeyData value
     * @return \StructType\PaymentMethodKeyData|null
     */
    public function getPaymentMethodKeyData()
    {
        return $this->PaymentMethodKeyData;
    }
    /**
     * Set PaymentMethodKeyData value
     * @param \StructType\PaymentMethodKeyData $paymentMethodKeyData
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setPaymentMethodKeyData(\StructType\PaymentMethodKeyData $paymentMethodKeyData = null)
    {
        $this->PaymentMethodKeyData = $paymentMethodKeyData;
        return $this;
    }
    /**
     * Get CardHolderData value
     * @return \StructType\CardHolderDataType|null
     */
    public function getCardHolderData()
    {
        return $this->CardHolderData;
    }
    /**
     * Set CardHolderData value
     * @param \StructType\CardHolderDataType $cardHolderData
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
        return $this;
    }
    /**
     * Get AllowDup value
     * @return string|null
     */
    public function getAllowDup()
    {
        return $this->AllowDup;
    }
    /**
     * Set AllowDup value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowDup
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setAllowDup($allowDup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($allowDup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowDup, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->AllowDup = $allowDup;
        return $this;
    }
    /**
     * Get AdditionalTxnFields value
     * @return \StructType\AdditionalTxnFieldsType|null
     */
    public function getAdditionalTxnFields()
    {
        return $this->AdditionalTxnFields;
    }
    /**
     * Set AdditionalTxnFields value
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get RecurringData value
     * @return \StructType\RecurringDataType|null
     */
    public function getRecurringData()
    {
        return $this->RecurringData;
    }
    /**
     * Set RecurringData value
     * @param \StructType\RecurringDataType $recurringData
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setRecurringData(\StructType\RecurringDataType $recurringData = null)
    {
        $this->RecurringData = $recurringData;
        return $this;
    }
    /**
     * Get DebtRepaymentIndicator value
     * @return string|null
     */
    public function getDebtRepaymentIndicator()
    {
        return $this->DebtRepaymentIndicator;
    }
    /**
     * Set DebtRepaymentIndicator value
     * @uses \EnumType\DebtRepaymentType::valueIsValid()
     * @uses \EnumType\DebtRepaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $debtRepaymentIndicator
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setDebtRepaymentIndicator($debtRepaymentIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DebtRepaymentType::valueIsValid($debtRepaymentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $debtRepaymentIndicator, implode(', ', \EnumType\DebtRepaymentType::getValidValues())), __LINE__);
        }
        $this->DebtRepaymentIndicator = $debtRepaymentIndicator;
        return $this;
    }
    /**
     * Get CPCReq value
     * @return string|null
     */
    public function getCPCReq()
    {
        return $this->CPCReq;
    }
    /**
     * Set CPCReq value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cPCReq
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setCPCReq($cPCReq = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($cPCReq)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cPCReq, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->CPCReq = $cPCReq;
        return $this;
    }
    /**
     * Get CPCData value
     * @return \StructType\CPCDataType|null
     */
    public function getCPCData()
    {
        return $this->CPCData;
    }
    /**
     * Set CPCData value
     * @param \StructType\CPCDataType $cPCData
     * @return \StructType\RecurringBillReqBlock1Type
     */
    public function setCPCData(\StructType\CPCDataType $cPCData = null)
    {
        $this->CPCData = $cPCData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RecurringBillReqBlock1Type
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
