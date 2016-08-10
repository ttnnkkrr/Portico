<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipping StructType
 * @subpackage Structs
 */
class Shipping extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValuePairCollectionType[]
     */
    public $Address;
    /**
     * Constructor method for Shipping
     * @uses Shipping::setAddress()
     * @param \StructType\NameValuePairCollectionType[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \StructType\NameValuePairCollectionType[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType[] $address
     * @return \StructType\Shipping
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $shippingAddressItem) {
            // validation for constraint: itemType
            if (!$shippingAddressItem instanceof \StructType\NameValuePairCollectionType) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($shippingAddressItem) ? get_class($shippingAddressItem) : gettype($shippingAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType $item
     * @return \StructType\Shipping
     */
    public function addToAddress(\StructType\NameValuePairCollectionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValuePairCollectionType) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Shipping
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
