<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckSaleReqBlock1Type StructType
 * @subpackage Structs
 */
class CheckSaleReqBlock1Type extends AbstractStructBase
{
    /**
     * The CheckAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CheckAction;
    /**
     * The AccountInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AccountInfoType
     */
    public $AccountInfo;
    /**
     * The DataEntryMode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DataEntryMode;
    /**
     * The CheckType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckType;
    /**
     * The VerifyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\VerifyInfoType
     */
    public $VerifyInfo;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amt;
    /**
     * The SECCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SECCode;
    /**
     * The ConsumerInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ConsumerInfoType
     */
    public $ConsumerInfo;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The PaymentMethodKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodKey;
    /**
     * The RecurringData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RecurringDataType
     */
    public $RecurringData;
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * Constructor method for CheckSaleReqBlock1Type
     * @uses CheckSaleReqBlock1Type::setCheckAction()
     * @uses CheckSaleReqBlock1Type::setAccountInfo()
     * @uses CheckSaleReqBlock1Type::setDataEntryMode()
     * @uses CheckSaleReqBlock1Type::setCheckType()
     * @uses CheckSaleReqBlock1Type::setVerifyInfo()
     * @uses CheckSaleReqBlock1Type::setAmt()
     * @uses CheckSaleReqBlock1Type::setSECCode()
     * @uses CheckSaleReqBlock1Type::setConsumerInfo()
     * @uses CheckSaleReqBlock1Type::setAdditionalTxnFields()
     * @uses CheckSaleReqBlock1Type::setPaymentMethodKey()
     * @uses CheckSaleReqBlock1Type::setRecurringData()
     * @uses CheckSaleReqBlock1Type::setTokenValue()
     * @param string $checkAction
     * @param \StructType\AccountInfoType $accountInfo
     * @param string $dataEntryMode
     * @param string $checkType
     * @param \StructType\VerifyInfoType $verifyInfo
     * @param float $amt
     * @param string $sECCode
     * @param \StructType\ConsumerInfoType $consumerInfo
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param string $paymentMethodKey
     * @param \StructType\RecurringDataType $recurringData
     * @param string $tokenValue
     */
    public function __construct($checkAction = null, \StructType\AccountInfoType $accountInfo = null, $dataEntryMode = null, $checkType = null, \StructType\VerifyInfoType $verifyInfo = null, $amt = null, $sECCode = null, \StructType\ConsumerInfoType $consumerInfo = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, $paymentMethodKey = null, \StructType\RecurringDataType $recurringData = null, $tokenValue = null)
    {
        $this
            ->setCheckAction($checkAction)
            ->setAccountInfo($accountInfo)
            ->setDataEntryMode($dataEntryMode)
            ->setCheckType($checkType)
            ->setVerifyInfo($verifyInfo)
            ->setAmt($amt)
            ->setSECCode($sECCode)
            ->setConsumerInfo($consumerInfo)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setRecurringData($recurringData)
            ->setTokenValue($tokenValue);
    }
    /**
     * Get CheckAction value
     * @return string
     */
    public function getCheckAction()
    {
        return $this->CheckAction;
    }
    /**
     * Set CheckAction value
     * @uses \EnumType\CheckActionType::valueIsValid()
     * @uses \EnumType\CheckActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkAction
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setCheckAction($checkAction = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CheckActionType::valueIsValid($checkAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkAction, implode(', ', \EnumType\CheckActionType::getValidValues())), __LINE__);
        }
        $this->CheckAction = $checkAction;
        return $this;
    }
    /**
     * Get AccountInfo value
     * @return \StructType\AccountInfoType|null
     */
    public function getAccountInfo()
    {
        return $this->AccountInfo;
    }
    /**
     * Set AccountInfo value
     * @param \StructType\AccountInfoType $accountInfo
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setAccountInfo(\StructType\AccountInfoType $accountInfo = null)
    {
        $this->AccountInfo = $accountInfo;
        return $this;
    }
    /**
     * Get DataEntryMode value
     * @return string|null
     */
    public function getDataEntryMode()
    {
        return $this->DataEntryMode;
    }
    /**
     * Set DataEntryMode value
     * @uses \EnumType\DataEntryModeType::valueIsValid()
     * @uses \EnumType\DataEntryModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataEntryMode
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setDataEntryMode($dataEntryMode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DataEntryModeType::valueIsValid($dataEntryMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataEntryMode, implode(', ', \EnumType\DataEntryModeType::getValidValues())), __LINE__);
        }
        $this->DataEntryMode = $dataEntryMode;
        return $this;
    }
    /**
     * Get CheckType value
     * @return string|null
     */
    public function getCheckType()
    {
        return $this->CheckType;
    }
    /**
     * Set CheckType value
     * @uses \EnumType\CheckTypeType::valueIsValid()
     * @uses \EnumType\CheckTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkType
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setCheckType($checkType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CheckTypeType::valueIsValid($checkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkType, implode(', ', \EnumType\CheckTypeType::getValidValues())), __LINE__);
        }
        $this->CheckType = $checkType;
        return $this;
    }
    /**
     * Get VerifyInfo value
     * @return \StructType\VerifyInfoType|null
     */
    public function getVerifyInfo()
    {
        return $this->VerifyInfo;
    }
    /**
     * Set VerifyInfo value
     * @param \StructType\VerifyInfoType $verifyInfo
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setVerifyInfo(\StructType\VerifyInfoType $verifyInfo = null)
    {
        $this->VerifyInfo = $verifyInfo;
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
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get SECCode value
     * @return string|null
     */
    public function getSECCode()
    {
        return $this->SECCode;
    }
    /**
     * Set SECCode value
     * @param string $sECCode
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setSECCode($sECCode = null)
    {
        // validation for constraint: string
        if (!is_null($sECCode) && !is_string($sECCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sECCode)), __LINE__);
        }
        $this->SECCode = $sECCode;
        return $this;
    }
    /**
     * Get ConsumerInfo value
     * @return \StructType\ConsumerInfoType|null
     */
    public function getConsumerInfo()
    {
        return $this->ConsumerInfo;
    }
    /**
     * Set ConsumerInfo value
     * @param \StructType\ConsumerInfoType $consumerInfo
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setConsumerInfo(\StructType\ConsumerInfoType $consumerInfo = null)
    {
        $this->ConsumerInfo = $consumerInfo;
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
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
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
     * @return \StructType\CheckSaleReqBlock1Type
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
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setRecurringData(\StructType\RecurringDataType $recurringData = null)
    {
        $this->RecurringData = $recurringData;
        return $this;
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\CheckSaleReqBlock1Type
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CheckSaleReqBlock1Type
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
