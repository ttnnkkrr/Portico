<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Buyer StructType
 * @subpackage Structs
 */
class Buyer extends AbstractStructBase
{
    /**
     * The NameValuePair
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValuePairType[]
     */
    public $NameValuePair;
    /**
     * Constructor method for Buyer
     * @uses Buyer::setNameValuePair()
     * @param \StructType\NameValuePairType[] $nameValuePair
     */
    public function __construct(array $nameValuePair = array())
    {
        $this
            ->setNameValuePair($nameValuePair);
    }
    /**
     * Get NameValuePair value
     * @return \StructType\NameValuePairType[]|null
     */
    public function getNameValuePair()
    {
        return $this->NameValuePair;
    }
    /**
     * Set NameValuePair value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType[] $nameValuePair
     * @return \StructType\Buyer
     */
    public function setNameValuePair(array $nameValuePair = array())
    {
        foreach ($nameValuePair as $buyerNameValuePairItem) {
            // validation for constraint: itemType
            if (!$buyerNameValuePairItem instanceof \StructType\NameValuePairType) {
                throw new \InvalidArgumentException(sprintf('The NameValuePair property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($buyerNameValuePairItem) ? get_class($buyerNameValuePairItem) : gettype($buyerNameValuePairItem)), __LINE__);
            }
        }
        $this->NameValuePair = $nameValuePair;
        return $this;
    }
    /**
     * Add item to NameValuePair value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType $item
     * @return \StructType\Buyer
     */
    public function addToNameValuePair(\StructType\NameValuePairType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValuePairType) {
            throw new \InvalidArgumentException(sprintf('The NameValuePair property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValuePair[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Buyer
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
