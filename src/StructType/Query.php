<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Query StructType
 * @subpackage Structs
 */
class Query extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Name;
    /**
     * Constructor method for Query
     * @uses Query::setName()
     * @param string[] $name
     */
    public function __construct(array $name = array())
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string[]|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @throws \InvalidArgumentException
     * @param string[] $name
     * @return \StructType\Query
     */
    public function setName(array $name = array())
    {
        foreach ($name as $queryNameItem) {
            // validation for constraint: itemType
            if (!is_string($queryNameItem)) {
                throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($queryNameItem) ? get_class($queryNameItem) : gettype($queryNameItem)), __LINE__);
            }
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Add item to Name value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Query
     */
    public function addToName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Query
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
