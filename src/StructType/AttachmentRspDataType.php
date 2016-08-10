<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentRspDataType StructType
 * @subpackage Structs
 */
class AttachmentRspDataType extends AbstractStructBase
{
    /**
     * The AttachmentDataId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AttachmentDataId;
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The AttachmentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentType;
    /**
     * The AttachmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentData;
    /**
     * The AttachmentFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentFormat;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * The AttachmentName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentName;
    /**
     * Constructor method for AttachmentRspDataType
     * @uses AttachmentRspDataType::setAttachmentDataId()
     * @uses AttachmentRspDataType::setGatewayTxnId()
     * @uses AttachmentRspDataType::setAttachmentType()
     * @uses AttachmentRspDataType::setAttachmentData()
     * @uses AttachmentRspDataType::setAttachmentFormat()
     * @uses AttachmentRspDataType::setHeight()
     * @uses AttachmentRspDataType::setWidth()
     * @uses AttachmentRspDataType::setAttachmentName()
     * @param int $attachmentDataId
     * @param int $gatewayTxnId
     * @param string $attachmentType
     * @param string $attachmentData
     * @param string $attachmentFormat
     * @param int $height
     * @param int $width
     * @param string $attachmentName
     */
    public function __construct($attachmentDataId = null, $gatewayTxnId = null, $attachmentType = null, $attachmentData = null, $attachmentFormat = null, $height = null, $width = null, $attachmentName = null)
    {
        $this
            ->setAttachmentDataId($attachmentDataId)
            ->setGatewayTxnId($gatewayTxnId)
            ->setAttachmentType($attachmentType)
            ->setAttachmentData($attachmentData)
            ->setAttachmentFormat($attachmentFormat)
            ->setHeight($height)
            ->setWidth($width)
            ->setAttachmentName($attachmentName);
    }
    /**
     * Get AttachmentDataId value
     * @return int
     */
    public function getAttachmentDataId()
    {
        return $this->AttachmentDataId;
    }
    /**
     * Set AttachmentDataId value
     * @param int $attachmentDataId
     * @return \StructType\AttachmentRspDataType
     */
    public function setAttachmentDataId($attachmentDataId = null)
    {
        // validation for constraint: int
        if (!is_null($attachmentDataId) && !is_numeric($attachmentDataId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attachmentDataId)), __LINE__);
        }
        $this->AttachmentDataId = $attachmentDataId;
        return $this;
    }
    /**
     * Get GatewayTxnId value
     * @return int|null
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\AttachmentRspDataType
     */
    public function setGatewayTxnId($gatewayTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayTxnId) && !is_numeric($gatewayTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayTxnId)), __LINE__);
        }
        $this->GatewayTxnId = $gatewayTxnId;
        return $this;
    }
    /**
     * Get AttachmentType value
     * @return string|null
     */
    public function getAttachmentType()
    {
        return $this->AttachmentType;
    }
    /**
     * Set AttachmentType value
     * @param string $attachmentType
     * @return \StructType\AttachmentRspDataType
     */
    public function setAttachmentType($attachmentType = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentType) && !is_string($attachmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attachmentType)), __LINE__);
        }
        $this->AttachmentType = $attachmentType;
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
     * @return \StructType\AttachmentRspDataType
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
     * Get AttachmentFormat value
     * @return string|null
     */
    public function getAttachmentFormat()
    {
        return $this->AttachmentFormat;
    }
    /**
     * Set AttachmentFormat value
     * @param string $attachmentFormat
     * @return \StructType\AttachmentRspDataType
     */
    public function setAttachmentFormat($attachmentFormat = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentFormat) && !is_string($attachmentFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attachmentFormat)), __LINE__);
        }
        $this->AttachmentFormat = $attachmentFormat;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \StructType\AttachmentRspDataType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \StructType\AttachmentRspDataType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
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
     * @return \StructType\AttachmentRspDataType
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
     * @return \StructType\AttachmentRspDataType
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
