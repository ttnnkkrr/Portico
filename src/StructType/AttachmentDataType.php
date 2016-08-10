<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentDataType StructType
 * @subpackage Structs
 */
class AttachmentDataType extends AbstractStructBase
{
    /**
     * The AttachmentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AttachmentType;
    /**
     * The AttachmentFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AttachmentFormat;
    /**
     * The AttachmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentData;
    /**
     * The AttachmentName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentName;
    /**
     * Constructor method for AttachmentDataType
     * @uses AttachmentDataType::setAttachmentType()
     * @uses AttachmentDataType::setAttachmentFormat()
     * @uses AttachmentDataType::setAttachmentData()
     * @uses AttachmentDataType::setAttachmentName()
     * @param string $attachmentType
     * @param string $attachmentFormat
     * @param string $attachmentData
     * @param string $attachmentName
     */
    public function __construct($attachmentType = null, $attachmentFormat = null, $attachmentData = null, $attachmentName = null)
    {
        $this
            ->setAttachmentType($attachmentType)
            ->setAttachmentFormat($attachmentFormat)
            ->setAttachmentData($attachmentData)
            ->setAttachmentName($attachmentName);
    }
    /**
     * Get AttachmentType value
     * @return string
     */
    public function getAttachmentType()
    {
        return $this->AttachmentType;
    }
    /**
     * Set AttachmentType value
     * @uses \EnumType\AttachmentTypeType::valueIsValid()
     * @uses \EnumType\AttachmentTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attachmentType
     * @return \StructType\AttachmentDataType
     */
    public function setAttachmentType($attachmentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AttachmentTypeType::valueIsValid($attachmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attachmentType, implode(', ', \EnumType\AttachmentTypeType::getValidValues())), __LINE__);
        }
        $this->AttachmentType = $attachmentType;
        return $this;
    }
    /**
     * Get AttachmentFormat value
     * @return string
     */
    public function getAttachmentFormat()
    {
        return $this->AttachmentFormat;
    }
    /**
     * Set AttachmentFormat value
     * @uses \EnumType\AttachmentFormatType::valueIsValid()
     * @uses \EnumType\AttachmentFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attachmentFormat
     * @return \StructType\AttachmentDataType
     */
    public function setAttachmentFormat($attachmentFormat = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AttachmentFormatType::valueIsValid($attachmentFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attachmentFormat, implode(', ', \EnumType\AttachmentFormatType::getValidValues())), __LINE__);
        }
        $this->AttachmentFormat = $attachmentFormat;
        return $this;
    }
    /**
     * Get AttachmentData value
     * @return string|null
     */
    public function getAttachmentData()
    {
        return $this->AttachmentData;
    }
    /**
     * Set AttachmentData value
     * @param string $attachmentData
     * @return \StructType\AttachmentDataType
     */
    public function setAttachmentData($attachmentData = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentData) && !is_string($attachmentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attachmentData)), __LINE__);
        }
        $this->AttachmentData = $attachmentData;
        return $this;
    }
    /**
     * Get AttachmentName value
     * @return string|null
     */
    public function getAttachmentName()
    {
        return $this->AttachmentName;
    }
    /**
     * Set AttachmentName value
     * @param string $attachmentName
     * @return \StructType\AttachmentDataType
     */
    public function setAttachmentName($attachmentName = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentName) && !is_string($attachmentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attachmentName)), __LINE__);
        }
        $this->AttachmentName = $attachmentName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AttachmentDataType
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
