<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Delete StructType
 * @subpackage Structs
 */
class Delete extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Attribute;
    /**
     * Constructor method for Delete
     * @uses Delete::setAttribute()
     * @param mixed[] $attribute
     */
    public function __construct(array $attribute = array())
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get Attribute value
     * @return mixed[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param mixed[] $attribute
     * @return \StructType\Delete
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $deleteAttributeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of anyType, "%s" given', is_object($deleteAttributeItem) ? get_class($deleteAttributeItem) : gettype($deleteAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \StructType\Delete
     */
    public function addToAttribute($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\Delete
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
