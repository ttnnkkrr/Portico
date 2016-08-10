<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditAccountVerifyBlock1Type StructType
 * @subpackage Structs
 */
class CreditAccountVerifyBlock1Type extends AbstractStructBase
{
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardDataType
     */
    public $CardData;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
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
     * The EMVData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EMVDataType
     */
    public $EMVData;
    /**
     * The CPCReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCReq;
    /**
     * The TagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagDataType
     */
    public $TagData;
    /**
     * Constructor method for CreditAccountVerifyBlock1Type
     * @uses CreditAccountVerifyBlock1Type::setCardData()
     * @uses CreditAccountVerifyBlock1Type::setCardHolderData()
     * @uses CreditAccountVerifyBlock1Type::setPaymentMethodKey()
     * @uses CreditAccountVerifyBlock1Type::setPaymentMethodKeyData()
     * @uses CreditAccountVerifyBlock1Type::setEMVData()
     * @uses CreditAccountVerifyBlock1Type::setCPCReq()
     * @uses CreditAccountVerifyBlock1Type::setTagData()
     * @param \StructType\CardDataType $cardData
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $paymentMethodKey
     * @param \StructType\PaymentMethodKeyData $paymentMethodKeyData
     * @param \StructType\EMVDataType $eMVData
     * @param string $cPCReq
     * @param \StructType\TagDataType $tagData
     */
    public function __construct(\StructType\CardDataType $cardData = null, \StructType\CardHolderDataType $cardHolderData = null, $paymentMethodKey = null, \StructType\PaymentMethodKeyData $paymentMethodKeyData = null, \StructType\EMVDataType $eMVData = null, $cPCReq = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setCardData($cardData)
            ->setCardHolderData($cardHolderData)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setPaymentMethodKeyData($paymentMethodKeyData)
            ->setEMVData($eMVData)
            ->setCPCReq($cPCReq)
            ->setTagData($tagData);
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
     * @return \StructType\CreditAccountVerifyBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
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
     * @return \StructType\CreditAccountVerifyBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
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
     * @return \StructType\CreditAccountVerifyBlock1Type
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
     * @return \StructType\CreditAccountVerifyBlock1Type
     */
    public function setPaymentMethodKeyData(\StructType\PaymentMethodKeyData $paymentMethodKeyData = null)
    {
        $this->PaymentMethodKeyData = $paymentMethodKeyData;
        return $this;
    }
    /**
     * Get EMVData value
     * @return \StructType\EMVDataType|null
     */
    public function getEMVData()
    {
        return $this->EMVData;
    }
    /**
     * Set EMVData value
     * @param \StructType\EMVDataType $eMVData
     * @return \StructType\CreditAccountVerifyBlock1Type
     */
    public function setEMVData(\StructType\EMVDataType $eMVData = null)
    {
        $this->EMVData = $eMVData;
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
     * @return \StructType\CreditAccountVerifyBlock1Type
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
     * Get TagData value
     * @return \StructType\TagDataType|null
     */
    public function getTagData()
    {
        return $this->TagData;
    }
    /**
     * Set TagData value
     * @param \StructType\TagDataType $tagData
     * @return \StructType\CreditAccountVerifyBlock1Type
     */
    public function setTagData(\StructType\TagDataType $tagData = null)
    {
        $this->TagData = $tagData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreditAccountVerifyBlock1Type
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
