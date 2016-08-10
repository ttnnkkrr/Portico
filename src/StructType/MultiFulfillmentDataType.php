<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiFulfillmentDataType StructType
 * @subpackage Structs
 */
class MultiFulfillmentDataType extends AbstractStructBase
{
    /**
     * The CaptureAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $CaptureAmtInfo;
    /**
     * The FullyCapturedInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullyCapturedInd;
    /**
     * Constructor method for MultiFulfillmentDataType
     * @uses MultiFulfillmentDataType::setCaptureAmtInfo()
     * @uses MultiFulfillmentDataType::setFullyCapturedInd()
     * @param float $captureAmtInfo
     * @param string $fullyCapturedInd
     */
    public function __construct($captureAmtInfo = null, $fullyCapturedInd = null)
    {
        $this
            ->setCaptureAmtInfo($captureAmtInfo)
            ->setFullyCapturedInd($fullyCapturedInd);
    }
    /**
     * Get CaptureAmtInfo value
     * @return float|null
     */
    public function getCaptureAmtInfo()
    {
        return $this->CaptureAmtInfo;
    }
    /**
     * Set CaptureAmtInfo value
     * @param float $captureAmtInfo
     * @return \StructType\MultiFulfillmentDataType
     */
    public function setCaptureAmtInfo($captureAmtInfo = null)
    {
        $this->CaptureAmtInfo = $captureAmtInfo;
        return $this;
    }
    /**
     * Get FullyCapturedInd value
     * @return string|null
     */
    public function getFullyCapturedInd()
    {
        return $this->FullyCapturedInd;
    }
    /**
     * Set FullyCapturedInd value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fullyCapturedInd
     * @return \StructType\MultiFulfillmentDataType
     */
    public function setFullyCapturedInd($fullyCapturedInd = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($fullyCapturedInd)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fullyCapturedInd, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->FullyCapturedInd = $fullyCapturedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MultiFulfillmentDataType
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
