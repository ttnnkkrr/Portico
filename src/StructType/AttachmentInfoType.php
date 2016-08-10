<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentInfoType StructType
 * @subpackage Structs
 */
class AttachmentInfoType extends AbstractStructBase
{
    /**
     * The AIType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AIType;
    /**
     * The AIFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AIFormat;
    /**
     * Constructor method for AttachmentInfoType
     * @uses AttachmentInfoType::setAIType()
     * @uses AttachmentInfoType::setAIFormat()
     * @param string $aIType
     * @param string $aIFormat
     */
    public function __construct($aIType = null, $aIFormat = null)
    {
        $this
            ->setAIType($aIType)
            ->setAIFormat($aIFormat);
    }
    /**
     * Get AIType value
     * @return string|null
     */
    public function getAIType()
    {
        return $this->AIType;
    }
    /**
     * Set AIType value
     * @param string $aIType
     * @return \StructType\AttachmentInfoType
     */
    public function setAIType($aIType = null)
    {
        // validation for constraint: string
        if (!is_null($aIType) && !is_string($aIType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aIType)), __LINE__);
        }
        $this->AIType = $aIType;
        return $this;
    }
    /**
     * Get AIFormat value
     * @return string|null
     */
    public function getAIFormat()
    {
        return $this->AIFormat;
    }
    /**
     * Set AIFormat value
     * @param string $aIFormat
     * @return \StructType\AttachmentInfoType
     */
    public function setAIFormat($aIFormat = null)
    {
        // validation for constraint: string
        if (!is_null($aIFormat) && !is_string($aIFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aIFormat)), __LINE__);
        }
        $this->AIFormat = $aIFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AttachmentInfoType
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
