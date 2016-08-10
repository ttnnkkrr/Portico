<?php

namespace EnumType;

/**
 * This class stands for prestigiousPropertyType EnumType
 * @subpackage Enumerations
 */
class PrestigiousPropertyType
{
    /**
     * Constant for value 'NOT_PARTICIPATING'
     * @return string 'NOT_PARTICIPATING'
     */
    const VALUE_NOT_PARTICIPATING = 'NOT_PARTICIPATING';
    /**
     * Constant for value 'LIMIT_500'
     * @return string 'LIMIT_500'
     */
    const VALUE_LIMIT_500 = 'LIMIT_500';
    /**
     * Constant for value 'LIMIT_1000'
     * @return string 'LIMIT_1000'
     */
    const VALUE_LIMIT_1000 = 'LIMIT_1000';
    /**
     * Constant for value 'LIMIT_1500'
     * @return string 'LIMIT_1500'
     */
    const VALUE_LIMIT_1500 = 'LIMIT_1500';
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
     * @uses self::VALUE_NOT_PARTICIPATING
     * @uses self::VALUE_LIMIT_500
     * @uses self::VALUE_LIMIT_1000
     * @uses self::VALUE_LIMIT_1500
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_PARTICIPATING,
            self::VALUE_LIMIT_500,
            self::VALUE_LIMIT_1000,
            self::VALUE_LIMIT_1500,
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
