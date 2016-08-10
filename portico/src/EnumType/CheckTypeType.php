<?php

namespace EnumType;

/**
 * This class stands for checkTypeType EnumType
 * @subpackage Enumerations
 */
class CheckTypeType
{
    /**
     * Constant for value 'PERSONAL'
     * @return string 'PERSONAL'
     */
    const VALUE_PERSONAL = 'PERSONAL';
    /**
     * Constant for value 'BUSINESS'
     * @return string 'BUSINESS'
     */
    const VALUE_BUSINESS = 'BUSINESS';
    /**
     * Constant for value 'PAYROLL'
     * @return string 'PAYROLL'
     */
    const VALUE_PAYROLL = 'PAYROLL';
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
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_PAYROLL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERSONAL,
            self::VALUE_BUSINESS,
            self::VALUE_PAYROLL,
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
