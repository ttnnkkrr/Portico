<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackData StructType
 * @subpackage Structs
 */
class TrackData extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The method
     * @var string
     */
    public $method;
    /**
     * Constructor method for TrackData
     * @uses TrackData::set_()
     * @uses TrackData::setMethod()
     * @param string $_
     * @param string $method
     */
    public function __construct($_ = null, $method = null)
    {
        $this
            ->set_($_)
            ->setMethod($method);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\TrackData
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \StructType\TrackData
     */
    public function setMethod($method = null)
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($method)), __LINE__);
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TrackData
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
