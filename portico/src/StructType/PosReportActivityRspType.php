<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportActivityRspType StructType
 * @subpackage Structs
 */
class PosReportActivityRspType extends AbstractStructBase
{
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Header
     */
    public $Header;
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Details[]
     */
    public $Details;
    /**
     * Constructor method for PosReportActivityRspType
     * @uses PosReportActivityRspType::setHeader()
     * @uses PosReportActivityRspType::setDetails()
     * @param \StructType\Header $header
     * @param \StructType\Details[] $details
     */
    public function __construct(\StructType\Header $header = null, array $details = array())
    {
        $this
            ->setHeader($header)
            ->setDetails($details);
    }
    /**
     * Get Header value
     * @return \StructType\Header|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param \StructType\Header $header
     * @return \StructType\PosReportActivityRspType
     */
    public function setHeader(\StructType\Header $header = null)
    {
        $this->Header = $header;
        return $this;
    }
    /**
     * Get Details value
     * @return \StructType\Details[]|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @throws \InvalidArgumentException
     * @param \StructType\Details[] $details
     * @return \StructType\PosReportActivityRspType
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $posReportActivityRspTypeDetailsItem) {
            // validation for constraint: itemType
            if (!$posReportActivityRspTypeDetailsItem instanceof \StructType\Details) {
                throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \StructType\Details, "%s" given', is_object($posReportActivityRspTypeDetailsItem) ? get_class($posReportActivityRspTypeDetailsItem) : gettype($posReportActivityRspTypeDetailsItem)), __LINE__);
            }
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Add item to Details value
     * @throws \InvalidArgumentException
     * @param \StructType\Details $item
     * @return \StructType\PosReportActivityRspType
     */
    public function addToDetails(\StructType\Details $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Details) {
            throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \StructType\Details, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\PosReportActivityRspType
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
