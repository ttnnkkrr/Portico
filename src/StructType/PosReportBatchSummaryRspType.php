<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportBatchSummaryRspType StructType
 * @subpackage Structs
 */
class PosReportBatchSummaryRspType extends AbstractStructBase
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
     * Constructor method for PosReportBatchSummaryRspType
     * @uses PosReportBatchSummaryRspType::setHeader()
     * @uses PosReportBatchSummaryRspType::setDetails()
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
     * @return \StructType\PosReportBatchSummaryRspType
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
     * @return \StructType\PosReportBatchSummaryRspType
     */
    public function setDetails(array $details = array())
    {
        foreach ($details as $posReportBatchSummaryRspTypeDetailsItem) {
            // validation for constraint: itemType
            if (!$posReportBatchSummaryRspTypeDetailsItem instanceof \StructType\Details) {
                throw new \InvalidArgumentException(sprintf('The Details property can only contain items of \StructType\Details, "%s" given', is_object($posReportBatchSummaryRspTypeDetailsItem) ? get_class($posReportBatchSummaryRspTypeDetailsItem) : gettype($posReportBatchSummaryRspTypeDetailsItem)), __LINE__);
            }
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Add item to Details value
     * @throws \InvalidArgumentException
     * @param \StructType\Details $item
     * @return \StructType\PosReportBatchSummaryRspType
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
     * @return \StructType\PosReportBatchSummaryRspType
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
