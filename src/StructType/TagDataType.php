<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TagDataType StructType
 * @subpackage Structs
 */
class TagDataType extends AbstractStructBase
{
    /**
     * The TagValues
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagValues
     */
    public $TagValues;
    /**
     * Constructor method for TagDataType
     * @uses TagDataType::setTagValues()
     * @param \StructType\TagValues $tagValues
     */
    public function __construct(\StructType\TagValues $tagValues = null)
    {
        $this
            ->setTagValues($tagValues);
    }
    /**
     * Get TagValues value
     * @return \StructType\TagValues|null
     */
    public function getTagValues()
    {
        return $this->TagValues;
    }
    /**
     * Set TagValues value
     * @param \StructType\TagValues $tagValues
     * @return \StructType\TagDataType
     */
    public function setTagValues(\StructType\TagValues $tagValues = null)
    {
        $this->TagValues = $tagValues;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TagDataType
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
