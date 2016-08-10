<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItem StructType
 * @subpackage Structs
 */
class LineItem extends AbstractStructBase
{
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValuePairCollectionType[]
     */
    public $Detail;
    /**
     * Constructor method for LineItem
     * @uses LineItem::setDetail()
     * @param \StructType\NameValuePairCollectionType[] $detail
     */
    public function __construct(array $detail = array())
    {
        $this
            ->setDetail($detail);
    }
    /**
     * Get Detail value
     * @return \StructType\NameValuePairCollectionType[]|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType[] $detail
     * @return \StructType\LineItem
     */
    public function setDetail(array $detail = array())
    {
        foreach ($detail as $lineItemDetailItem) {
            // validation for constraint: itemType
            if (!$lineItemDetailItem instanceof \StructType\NameValuePairCollectionType) {
                throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($lineItemDetailItem) ? get_class($lineItemDetailItem) : gettype($lineItemDetailItem)), __LINE__);
            }
        }
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Add item to Detail value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType $item
     * @return \StructType\LineItem
     */
    public function addToDetail(\StructType\NameValuePairCollectionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValuePairCollectionType) {
            throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Detail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LineItem
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
