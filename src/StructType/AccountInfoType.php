<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInfoType StructType
 * @subpackage Structs
 */
class AccountInfoType extends AbstractStructBase
{
    /**
     * The RoutingNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoutingNumber;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The CheckNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckNumber;
    /**
     * The MICRData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MICRData;
    /**
     * The AccountType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountType;
    /**
     * Constructor method for AccountInfoType
     * @uses AccountInfoType::setRoutingNumber()
     * @uses AccountInfoType::setAccountNumber()
     * @uses AccountInfoType::setCheckNumber()
     * @uses AccountInfoType::setMICRData()
     * @uses AccountInfoType::setAccountType()
     * @param string $routingNumber
     * @param string $accountNumber
     * @param string $checkNumber
     * @param string $mICRData
     * @param string $accountType
     */
    public function __construct($routingNumber = null, $accountNumber = null, $checkNumber = null, $mICRData = null, $accountType = null)
    {
        $this
            ->setRoutingNumber($routingNumber)
            ->setAccountNumber($accountNumber)
            ->setCheckNumber($checkNumber)
            ->setMICRData($mICRData)
            ->setAccountType($accountType);
    }
    /**
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $routingNumber
     * @return \StructType\AccountInfoType
     */
    public function setRoutingNumber($routingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingNumber)), __LINE__);
        }
        $this->RoutingNumber = $routingNumber;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \StructType\AccountInfoType
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get CheckNumber value
     * @return string|null
     */
    public function getCheckNumber()
    {
        return $this->CheckNumber;
    }
    /**
     * Set CheckNumber value
     * @param string $checkNumber
     * @return \StructType\AccountInfoType
     */
    public function setCheckNumber($checkNumber = null)
    {
        // validation for constraint: string
        if (!is_null($checkNumber) && !is_string($checkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkNumber)), __LINE__);
        }
        $this->CheckNumber = $checkNumber;
        return $this;
    }
    /**
     * Get MICRData value
     * @return string|null
     */
    public function getMICRData()
    {
        return $this->MICRData;
    }
    /**
     * Set MICRData value
     * @param string $mICRData
     * @return \StructType\AccountInfoType
     */
    public function setMICRData($mICRData = null)
    {
        // validation for constraint: string
        if (!is_null($mICRData) && !is_string($mICRData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mICRData)), __LINE__);
        }
        $this->MICRData = $mICRData;
        return $this;
    }
    /**
     * Get AccountType value
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }
    /**
     * Set AccountType value
     * @uses \EnumType\AccountTypeType::valueIsValid()
     * @uses \EnumType\AccountTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountType
     * @return \StructType\AccountInfoType
     */
    public function setAccountType($accountType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccountTypeType::valueIsValid($accountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountType, implode(', ', \EnumType\AccountTypeType::getValidValues())), __LINE__);
        }
        $this->AccountType = $accountType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AccountInfoType
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
