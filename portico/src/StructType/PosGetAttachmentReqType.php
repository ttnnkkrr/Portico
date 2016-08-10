<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGetAttachmentReqType StructType
 * @subpackage Structs
 */
class PosGetAttachmentReqType extends AbstractStructBase
{
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The AttachmentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AttachmentType;
    /**
     * The ReturnAttachmentTypesOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnAttachmentTypesOnly;
    /**
     * The AttachmentDataId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $AttachmentDataId;
    /**
     * Constructor method for PosGetAttachmentReqType
     * @uses PosGetAttachmentReqType::setGatewayTxnId()
     * @uses PosGetAttachmentReqType::setAttachmentType()
     * @uses PosGetAttachmentReqType::setReturnAttachmentTypesOnly()
     * @uses PosGetAttachmentReqType::setAttachmentDataId()
     * @param int $gatewayTxnId
     * @param string[] $attachmentType
     * @param bool $returnAttachmentTypesOnly
     * @param int $attachmentDataId
     */
    public function __construct($gatewayTxnId = null, array $attachmentType = array(), $returnAttachmentTypesOnly = null, $attachmentDataId = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setAttachmentType($attachmentType)
            ->setReturnAttachmentTypesOnly($returnAttachmentTypesOnly)
            ->setAttachmentDataId($attachmentDataId);
    }
    /**
     * Get GatewayTxnId value
     * @return int
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\PosGetAttachmentReqType
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
     * @return string[]|null
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
     * @param string[] $attachmentType
     * @return \StructType\PosGetAttachmentReqType
     */
    public function setAttachmentType(array $attachmentType = array())
    {
        $invalidValues = array();
        foreach ($attachmentType as $posGetAttachmentReqTypeAttachmentTypeItem) {
            if (!\EnumType\AttachmentTypeType::valueIsValid($posGetAttachmentReqTypeAttachmentTypeItem)) {
                $invalidValues[] = var_export($posGetAttachmentReqTypeAttachmentTypeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\AttachmentTypeType::getValidValues())), __LINE__);
        }
        $this->AttachmentType = $attachmentType;
        return $this;
    }
    /**
     * Add item to AttachmentType value
     * @uses \EnumType\AttachmentTypeType::valueIsValid()
     * @uses \EnumType\AttachmentTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PosGetAttachmentReqType
     */
    public function addToAttachmentType($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AttachmentTypeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\AttachmentTypeType::getValidValues())), __LINE__);
        }
        $this->AttachmentType[] = $item;
        return $this;
    }
    /**
     * Get ReturnAttachmentTypesOnly value
     * @return bool|null
     */
    public function getReturnAttachmentTypesOnly()
    {
        return $this->ReturnAttachmentTypesOnly;
    }
    /**
     * Set ReturnAttachmentTypesOnly value
     * @param bool $returnAttachmentTypesOnly
     * @return \StructType\PosGetAttachmentReqType
     */
    public function setReturnAttachmentTypesOnly($returnAttachmentTypesOnly = null)
    {
        $this->ReturnAttachmentTypesOnly = $returnAttachmentTypesOnly;
        return $this;
    }
    /**
     * Get AttachmentDataId value
     * @return int|null
     */
    public function getAttachmentDataId()
    {
        return $this->AttachmentDataId;
    }
    /**
     * Set AttachmentDataId value
     * @param int $attachmentDataId
     * @return \StructType\PosGetAttachmentReqType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGetAttachmentReqType
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
