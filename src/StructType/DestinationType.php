<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationType StructType
 * @subpackage Structs
 */
class DestinationType extends AbstractStructBase
{
    /**
     * The DataType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DataType;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Data;
    /**
     * Constructor method for DestinationType
     * @uses DestinationType::setDataType()
     * @uses DestinationType::setData()
     * @param string $dataType
     * @param string $data
     */
    public function __construct($dataType = null, $data = null)
    {
        $this
            ->setDataType($dataType)
            ->setData($data);
    }
    /**
     * Get DataType value
     * @return string
     */
    public function getDataType()
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \EnumType\DataType::valueIsValid()
     * @uses \EnumType\DataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dataType
     * @return \StructType\DestinationType
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DataType::valueIsValid($dataType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataType, implode(', ', \EnumType\DataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \StructType\DestinationType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DestinationType
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
