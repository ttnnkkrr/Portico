<?php

namespace EnumType;

/**
 * This class stands for PaymentDataSourceType EnumType
 * @subpackage Enumerations
 */
class PaymentDataSourceType
{
    /**
     * Constant for value 'ApplePay'
     * @return string 'ApplePay'
     */
    const VALUE_APPLE_PAY = 'ApplePay';
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
     * @uses self::VALUE_APPLE_PAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPLE_PAY,
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
