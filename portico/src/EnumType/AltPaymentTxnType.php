<?php

namespace EnumType;

/**
 * This class stands for AltPaymentTxnType EnumType
 * @subpackage Enumerations
 */
class AltPaymentTxnType
{
    /**
     * Constant for value 'PAYPAL'
     * @return string 'PAYPAL'
     */
    const VALUE_PAYPAL = 'PAYPAL';
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
     * @uses self::VALUE_PAYPAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYPAL,
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
