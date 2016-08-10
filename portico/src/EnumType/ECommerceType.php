<?php

namespace EnumType;

/**
 * This class stands for eCommerceType EnumType
 * @subpackage Enumerations
 */
class ECommerceType
{
    /**
     * Constant for value 'ECOM'
     * @return string 'ECOM'
     */
    const VALUE_ECOM = 'ECOM';
    /**
     * Constant for value 'MOTO'
     * @return string 'MOTO'
     */
    const VALUE_MOTO = 'MOTO';
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
     * @uses self::VALUE_ECOM
     * @uses self::VALUE_MOTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ECOM,
            self::VALUE_MOTO,
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
