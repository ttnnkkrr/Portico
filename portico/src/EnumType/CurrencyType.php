<?php

namespace EnumType;

/**
 * This class stands for currencyType EnumType
 * @subpackage Enumerations
 */
class CurrencyType
{
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'POINTS'
     * @return string 'POINTS'
     */
    const VALUE_POINTS = 'POINTS';
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
     * @uses self::VALUE_USD
     * @uses self::VALUE_POINTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USD,
            self::VALUE_POINTS,
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
