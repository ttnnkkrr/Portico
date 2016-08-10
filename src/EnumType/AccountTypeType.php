<?php

namespace EnumType;

/**
 * This class stands for accountTypeType EnumType
 * @subpackage Enumerations
 */
class AccountTypeType
{
    /**
     * Constant for value 'CHECKING'
     * @return string 'CHECKING'
     */
    const VALUE_CHECKING = 'CHECKING';
    /**
     * Constant for value 'SAVINGS'
     * @return string 'SAVINGS'
     */
    const VALUE_SAVINGS = 'SAVINGS';
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
     * @uses self::VALUE_CHECKING
     * @uses self::VALUE_SAVINGS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKING,
            self::VALUE_SAVINGS,
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
