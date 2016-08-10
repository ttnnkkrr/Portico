<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecureECommerceType StructType
 * @subpackage Structs
 */
class SecureECommerceType extends AbstractStructBase
{
    /**
     * The PaymentDataSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PaymentDataSource;
    /**
     * The TypeOfPaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeOfPaymentData;
    /**
     * The PaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PaymentData
     */
    public $PaymentData;
    /**
     * The ECommerceIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ECommerceIndicator;
    /**
     * Constructor method for SecureECommerceType
     * @uses SecureECommerceType::setPaymentDataSource()
     * @uses SecureECommerceType::setTypeOfPaymentData()
     * @uses SecureECommerceType::setPaymentData()
     * @uses SecureECommerceType::setECommerceIndicator()
     * @param string $paymentDataSource
     * @param string $typeOfPaymentData
     * @param \StructType\PaymentData $paymentData
     * @param string $eCommerceIndicator
     */
    public function __construct($paymentDataSource = null, $typeOfPaymentData = null, \StructType\PaymentData $paymentData = null, $eCommerceIndicator = null)
    {
        $this
            ->setPaymentDataSource($paymentDataSource)
            ->setTypeOfPaymentData($typeOfPaymentData)
            ->setPaymentData($paymentData)
            ->setECommerceIndicator($eCommerceIndicator);
    }
    /**
     * Get PaymentDataSource value
     * @return string
     */
    public function getPaymentDataSource()
    {
        return $this->PaymentDataSource;
    }
    /**
     * Set PaymentDataSource value
     * @uses \EnumType\PaymentDataSourceType::valueIsValid()
     * @uses \EnumType\PaymentDataSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentDataSource
     * @return \StructType\SecureECommerceType
     */
    public function setPaymentDataSource($paymentDataSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentDataSourceType::valueIsValid($paymentDataSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentDataSource, implode(', ', \EnumType\PaymentDataSourceType::getValidValues())), __LINE__);
        }
        $this->PaymentDataSource = $paymentDataSource;
        return $this;
    }
    /**
     * Get TypeOfPaymentData value
     * @return string
     */
    public function getTypeOfPaymentData()
    {
        return $this->TypeOfPaymentData;
    }
    /**
     * Set TypeOfPaymentData value
     * @uses \EnumType\TypeOfPaymentDataType::valueIsValid()
     * @uses \EnumType\TypeOfPaymentDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $typeOfPaymentData
     * @return \StructType\SecureECommerceType
     */
    public function setTypeOfPaymentData($typeOfPaymentData = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeOfPaymentDataType::valueIsValid($typeOfPaymentData)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $typeOfPaymentData, implode(', ', \EnumType\TypeOfPaymentDataType::getValidValues())), __LINE__);
        }
        $this->TypeOfPaymentData = $typeOfPaymentData;
        return $this;
    }
    /**
     * Get PaymentData value
     * @return \StructType\PaymentData|null
     */
    public function getPaymentData()
    {
        return $this->PaymentData;
    }
    /**
     * Set PaymentData value
     * @param \StructType\PaymentData $paymentData
     * @return \StructType\SecureECommerceType
     */
    public function setPaymentData(\StructType\PaymentData $paymentData = null)
    {
        $this->PaymentData = $paymentData;
        return $this;
    }
    /**
     * Get ECommerceIndicator value
     * @return string|null
     */
    public function getECommerceIndicator()
    {
        return $this->ECommerceIndicator;
    }
    /**
     * Set ECommerceIndicator value
     * @param string $eCommerceIndicator
     * @return \StructType\SecureECommerceType
     */
    public function setECommerceIndicator($eCommerceIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($eCommerceIndicator) && !is_string($eCommerceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eCommerceIndicator)), __LINE__);
        }
        $this->ECommerceIndicator = $eCommerceIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SecureECommerceType
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
