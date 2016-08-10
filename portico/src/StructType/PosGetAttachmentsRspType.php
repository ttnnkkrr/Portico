<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGetAttachmentsRspType StructType
 * @subpackage Structs
 */
class PosGetAttachmentsRspType extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttachmentRspDataType[]
     */
    public $Details;
    /**
     * Constructor method for PosGetAttachmentsRspType
     * @uses PosGetAttachmentsRspType::setDetails()
     * @param \StructType\AttachmentRspDataType[] $details
     */
    public function __construct(array $details = array())
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get Details value
     * @return \StructType\AttachmentRspDataType[]|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentRspDataType[] $details
     * @return \StructType\PosGetAttachmentsRspType
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $posGetAttachmentsRspTypeDetailsItem) {
            // validation for constraint: itemType
            if (!$posGetAttachmentsRspTypeDetailsItem instanceof \StructType\AttachmentRspDataType) {
                throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \StructType\AttachmentRspDataType, "%s" given', is_object($posGetAttachmentsRspTypeDetailsItem) ? get_class($posGetAttachmentsRspTypeDetailsItem) : gettype($posGetAttachmentsRspTypeDetailsItem)), __LINE__);
            }
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Add item to Details value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentRspDataType $item
     * @return \StructType\PosGetAttachmentsRspType
     */
    public function addToDetails(\StructType\AttachmentRspDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttachmentRspDataType) {
            throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \StructType\AttachmentRspDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Details[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGetAttachmentsRspType
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
