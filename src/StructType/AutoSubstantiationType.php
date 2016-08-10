<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoSubstantiationType StructType
 * @subpackage Structs
 */
class AutoSubstantiationType extends AbstractStructBase
{
    /**
     * The FirstAdditionalAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalAmtType
     */
    public $FirstAdditionalAmtInfo;
    /**
     * The SecondAdditionalAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalAmtType
     */
    public $SecondAdditionalAmtInfo;
    /**
     * The ThirdAdditionalAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalAmtType
     */
    public $ThirdAdditionalAmtInfo;
    /**
     * The FourthAdditionalAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalAmtType
     */
    public $FourthAdditionalAmtInfo;
    /**
     * The MerchantVerificationValue
     * Meta informations extracted from the WSDL
     * - default: 0000000000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchantVerificationValue;
    /**
     * The RealTimeSubstantiation
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RealTimeSubstantiation;
    /**
     * Constructor method for AutoSubstantiationType
     * @uses AutoSubstantiationType::setFirstAdditionalAmtInfo()
     * @uses AutoSubstantiationType::setSecondAdditionalAmtInfo()
     * @uses AutoSubstantiationType::setThirdAdditionalAmtInfo()
     * @uses AutoSubstantiationType::setFourthAdditionalAmtInfo()
     * @uses AutoSubstantiationType::setMerchantVerificationValue()
     * @uses AutoSubstantiationType::setRealTimeSubstantiation()
     * @param \StructType\AdditionalAmtType $firstAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $secondAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $thirdAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $fourthAdditionalAmtInfo
     * @param string $merchantVerificationValue
     * @param string $realTimeSubstantiation
     */
    public function __construct(\StructType\AdditionalAmtType $firstAdditionalAmtInfo = null, \StructType\AdditionalAmtType $secondAdditionalAmtInfo = null, \StructType\AdditionalAmtType $thirdAdditionalAmtInfo = null, \StructType\AdditionalAmtType $fourthAdditionalAmtInfo = null, $merchantVerificationValue = '0000000000', $realTimeSubstantiation = 'N')
    {
        $this
            ->setFirstAdditionalAmtInfo($firstAdditionalAmtInfo)
            ->setSecondAdditionalAmtInfo($secondAdditionalAmtInfo)
            ->setThirdAdditionalAmtInfo($thirdAdditionalAmtInfo)
            ->setFourthAdditionalAmtInfo($fourthAdditionalAmtInfo)
            ->setMerchantVerificationValue($merchantVerificationValue)
            ->setRealTimeSubstantiation($realTimeSubstantiation);
    }
    /**
     * Get FirstAdditionalAmtInfo value
     * @return \StructType\AdditionalAmtType|null
     */
    public function getFirstAdditionalAmtInfo()
    {
        return $this->FirstAdditionalAmtInfo;
    }
    /**
     * Set FirstAdditionalAmtInfo value
     * @param \StructType\AdditionalAmtType $firstAdditionalAmtInfo
     * @return \StructType\AutoSubstantiationType
     */
    public function setFirstAdditionalAmtInfo(\StructType\AdditionalAmtType $firstAdditionalAmtInfo = null)
    {
        $this->FirstAdditionalAmtInfo = $firstAdditionalAmtInfo;
        return $this;
    }
    /**
     * Get SecondAdditionalAmtInfo value
     * @return \StructType\AdditionalAmtType|null
     */
    public function getSecondAdditionalAmtInfo()
    {
        return $this->SecondAdditionalAmtInfo;
    }
    /**
     * Set SecondAdditionalAmtInfo value
     * @param \StructType\AdditionalAmtType $secondAdditionalAmtInfo
     * @return \StructType\AutoSubstantiationType
     */
    public function setSecondAdditionalAmtInfo(\StructType\AdditionalAmtType $secondAdditionalAmtInfo = null)
    {
        $this->SecondAdditionalAmtInfo = $secondAdditionalAmtInfo;
        return $this;
    }
    /**
     * Get ThirdAdditionalAmtInfo value
     * @return \StructType\AdditionalAmtType|null
     */
    public function getThirdAdditionalAmtInfo()
    {
        return $this->ThirdAdditionalAmtInfo;
    }
    /**
     * Set ThirdAdditionalAmtInfo value
     * @param \StructType\AdditionalAmtType $thirdAdditionalAmtInfo
     * @return \StructType\AutoSubstantiationType
     */
    public function setThirdAdditionalAmtInfo(\StructType\AdditionalAmtType $thirdAdditionalAmtInfo = null)
    {
        $this->ThirdAdditionalAmtInfo = $thirdAdditionalAmtInfo;
        return $this;
    }
    /**
     * Get FourthAdditionalAmtInfo value
     * @return \StructType\AdditionalAmtType|null
     */
    public function getFourthAdditionalAmtInfo()
    {
        return $this->FourthAdditionalAmtInfo;
    }
    /**
     * Set FourthAdditionalAmtInfo value
     * @param \StructType\AdditionalAmtType $fourthAdditionalAmtInfo
     * @return \StructType\AutoSubstantiationType
     */
    public function setFourthAdditionalAmtInfo(\StructType\AdditionalAmtType $fourthAdditionalAmtInfo = null)
    {
        $this->FourthAdditionalAmtInfo = $fourthAdditionalAmtInfo;
        return $this;
    }
    /**
     * Get MerchantVerificationValue value
     * @return string|null
     */
    public function getMerchantVerificationValue()
    {
        return $this->MerchantVerificationValue;
    }
    /**
     * Set MerchantVerificationValue value
     * @param string $merchantVerificationValue
     * @return \StructType\AutoSubstantiationType
     */
    public function setMerchantVerificationValue($merchantVerificationValue = '0000000000')
    {
        // validation for constraint: string
        if (!is_null($merchantVerificationValue) && !is_string($merchantVerificationValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchantVerificationValue)), __LINE__);
        }
        $this->MerchantVerificationValue = $merchantVerificationValue;
        return $this;
    }
    /**
     * Get RealTimeSubstantiation value
     * @return string|null
     */
    public function getRealTimeSubstantiation()
    {
        return $this->RealTimeSubstantiation;
    }
    /**
     * Set RealTimeSubstantiation value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $realTimeSubstantiation
     * @return \StructType\AutoSubstantiationType
     */
    public function setRealTimeSubstantiation($realTimeSubstantiation = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($realTimeSubstantiation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $realTimeSubstantiation, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->RealTimeSubstantiation = $realTimeSubstantiation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AutoSubstantiationType
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
