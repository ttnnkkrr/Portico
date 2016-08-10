<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Return StructType
 * @subpackage Structs
 */
class _Return extends AbstractStructBase
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
     * Constructor method for Return
     * @uses _Return::setNameValuePair()
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
     * @return \StructType\_Return
     */
    public function setNameValuePair(array $nameValuePair = array())
    {
        foreach ($nameValuePair as $returnNameValuePairItem) {
            // validation for constraint: itemType
            if (!$returnNameValuePairItem instanceof \StructType\NameValuePairType) {
                throw new \InvalidArgumentException(sprintf('The NameValuePair property can only contain items of \StructType\NameValuePairType, "%s" given', is_object($returnNameValuePairItem) ? get_class($returnNameValuePairItem) : gettype($returnNameValuePairItem)), __LINE__);
            }
        }
        $this->NameValuePair = $nameValuePair;
        return $this;
    }
    /**
     * Add item to NameValuePair value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairType $item
     * @return \StructType\_Return
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
     * @return \StructType\_Return
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
