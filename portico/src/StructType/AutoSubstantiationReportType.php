<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoSubstantiationReportType StructType
 * @subpackage Structs
 */
class AutoSubstantiationReportType extends AbstractStructBase
{
    /**
     * The RealTimeSubstantiation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RealTimeSubstantiation;
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
     * Constructor method for AutoSubstantiationReportType
     * @uses AutoSubstantiationReportType::setRealTimeSubstantiation()
     * @uses AutoSubstantiationReportType::setFirstAdditionalAmtInfo()
     * @uses AutoSubstantiationReportType::setSecondAdditionalAmtInfo()
     * @uses AutoSubstantiationReportType::setThirdAdditionalAmtInfo()
     * @uses AutoSubstantiationReportType::setFourthAdditionalAmtInfo()
     * @param string $realTimeSubstantiation
     * @param \StructType\AdditionalAmtType $firstAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $secondAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $thirdAdditionalAmtInfo
     * @param \StructType\AdditionalAmtType $fourthAdditionalAmtInfo
     */
    public function __construct($realTimeSubstantiation = null, \StructType\AdditionalAmtType $firstAdditionalAmtInfo = null, \StructType\AdditionalAmtType $secondAdditionalAmtInfo = null, \StructType\AdditionalAmtType $thirdAdditionalAmtInfo = null, \StructType\AdditionalAmtType $fourthAdditionalAmtInfo = null)
    {
        $this
            ->setRealTimeSubstantiation($realTimeSubstantiation)
            ->setFirstAdditionalAmtInfo($firstAdditionalAmtInfo)
            ->setSecondAdditionalAmtInfo($secondAdditionalAmtInfo)
            ->setThirdAdditionalAmtInfo($thirdAdditionalAmtInfo)
            ->setFourthAdditionalAmtInfo($fourthAdditionalAmtInfo);
    }
    /**
     * Get RealTimeSubstantiation value
     * @return string
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
     * @return \StructType\AutoSubstantiationReportType
     */
    public function setRealTimeSubstantiation($realTimeSubstantiation = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($realTimeSubstantiation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $realTimeSubstantiation, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->RealTimeSubstantiation = $realTimeSubstantiation;
        return $this;
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
     * @return \StructType\AutoSubstantiationReportType
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
     * @return \StructType\AutoSubstantiationReportType
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
     * @return \StructType\AutoSubstantiationReportType
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
     * @return \StructType\AutoSubstantiationReportType
     */
    public function setFourthAdditionalAmtInfo(\StructType\AdditionalAmtType $fourthAdditionalAmtInfo = null)
    {
        $this->FourthAdditionalAmtInfo = $fourthAdditionalAmtInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AutoSubstantiationReportType
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
