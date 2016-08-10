<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckDataType StructType
 * @subpackage Structs
 */
class CheckDataType extends AbstractStructBase
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
     * The ConsumerInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ConsumerInfoType
     */
    public $ConsumerInfo;
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
     * The SECCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SECCode;
    /**
     * Constructor method for CheckDataType
     * @uses CheckDataType::setCheckAction()
     * @uses CheckDataType::setAccountInfo()
     * @uses CheckDataType::setConsumerInfo()
     * @uses CheckDataType::setDataEntryMode()
     * @uses CheckDataType::setCheckType()
     * @uses CheckDataType::setSECCode()
     * @param string $checkAction
     * @param \StructType\AccountInfoType $accountInfo
     * @param \StructType\ConsumerInfoType $consumerInfo
     * @param string $dataEntryMode
     * @param string $checkType
     * @param string $sECCode
     */
    public function __construct($checkAction = null, \StructType\AccountInfoType $accountInfo = null, \StructType\ConsumerInfoType $consumerInfo = null, $dataEntryMode = null, $checkType = null, $sECCode = null)
    {
        $this
            ->setCheckAction($checkAction)
            ->setAccountInfo($accountInfo)
            ->setConsumerInfo($consumerInfo)
            ->setDataEntryMode($dataEntryMode)
            ->setCheckType($checkType)
            ->setSECCode($sECCode);
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
     * @return \StructType\CheckDataType
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
     * @return \StructType\CheckDataType
     */
    public function setAccountInfo(\StructType\AccountInfoType $accountInfo = null)
    {
        $this->AccountInfo = $accountInfo;
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
     * @return \StructType\CheckDataType
     */
    public function setConsumerInfo(\StructType\ConsumerInfoType $consumerInfo = null)
    {
        $this->ConsumerInfo = $consumerInfo;
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
     * @return \StructType\CheckDataType
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
     * @return \StructType\CheckDataType
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
     * @return \StructType\CheckDataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CheckDataType
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
