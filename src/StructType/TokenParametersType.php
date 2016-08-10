<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenParametersType StructType
 * @subpackage Structs
 */
class TokenParametersType extends AbstractStructBase
{
    /**
     * The Mapping
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Mapping;
    /**
     * Constructor method for TokenParametersType
     * @uses TokenParametersType::setMapping()
     * @param string $mapping
     */
    public function __construct($mapping = null)
    {
        $this
            ->setMapping($mapping);
    }
    /**
     * Get Mapping value
     * @return string|null
     */
    public function getMapping()
    {
        return $this->Mapping;
    }
    /**
     * Set Mapping value
     * @uses \EnumType\TokenMappingType::valueIsValid()
     * @uses \EnumType\TokenMappingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mapping
     * @return \StructType\TokenParametersType
     */
    public function setMapping($mapping = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TokenMappingType::valueIsValid($mapping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mapping, implode(', ', \EnumType\TokenMappingType::getValidValues())), __LINE__);
        }
        $this->Mapping = $mapping;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TokenParametersType
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
