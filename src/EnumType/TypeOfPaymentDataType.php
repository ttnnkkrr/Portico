<?php

namespace EnumType;

/**
 * This class stands for TypeOfPaymentDataType EnumType
 * @subpackage Enumerations
 */
class TypeOfPaymentDataType
{
    /**
     * Constant for value '3DSecure'
     * @return string '3DSecure'
     */
    const VALUE_3_DSECURE = '3DSecure';
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
     * @uses self::VALUE_3_DSECURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_3_DSECURE,
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
