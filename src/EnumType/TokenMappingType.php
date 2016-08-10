<?php

namespace EnumType;

/**
 * This class stands for TokenMappingType EnumType
 * @subpackage Enumerations
 */
class TokenMappingType
{
    /**
     * Constant for value 'UNIQUE'
     * @return string 'UNIQUE'
     */
    const VALUE_UNIQUE = 'UNIQUE';
    /**
     * Constant for value 'CONSTANT'
     * @return string 'CONSTANT'
     */
    const VALUE_CONSTANT = 'CONSTANT';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNIQUE
     * @uses self::VALUE_CONSTANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNIQUE,
            self::VALUE_CONSTANT,
        );
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
