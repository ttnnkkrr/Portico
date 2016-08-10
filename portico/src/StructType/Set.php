<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set StructType
 * @subpackage Structs
 */
class Set extends AbstractStructBase
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
     * The Attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValuePairType[]
     */
    public $Attribute;
    /**
     * Constructor method for Set
     * @uses Set::setNameValuePair()
     * @uses Set::setAttribute()
     * @param \StructType\NameValuePairType[] $nameValuePair
     * @param \StructType\NameValuePairType[] $attribute
     */
    public function __construct(array $nameValuePair = array(), array $attribute = array())
    {
        $this
            ->setNameValuePair($nameValuePair)
            ->setAttribute($attribute);
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
     * @return \StructType\Set
     */
    public function setNameValuePair(array $nameValuePair = array())
    {
        foreach ($nameValuePair as $setNameValuePairItem) {
            // validation for constraint: itemType
            if (!$setNameValuePairItem instanceof \StructType\NameValuePairType) {
                throw new \InvalidArgumentException(sprintf('The NameValuePair property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($setNameValuePairItem) ? get_class($setNameValuePairItem) : gettype($setNameValuePairItem)), __LINE__);
            }
        }
        $this->NameValuePair = $nameValuePair;
        return $this;
    }
    /**
     * Add item to NameValuePair value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType $item
     * @return \StructType\Set
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
     * Get Attribute value
     * @return \StructType\NameValuePairType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType[] $attribute
     * @return \StructType\Set
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $setAttributeItem) {
            // validation for constraint: itemType
            if (!$setAttributeItem instanceof \StructType\NameValuePairType) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($setAttributeItem) ? get_class($setAttributeItem) : gettype($setAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType $item
     * @return \StructType\Set
     */
    public function addToAttribute(\StructType\NameValuePairType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValuePairType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Set
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
