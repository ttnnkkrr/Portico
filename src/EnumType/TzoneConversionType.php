<?php

namespace EnumType;

/**
 * This class stands for tzoneConversionType EnumType
 * @subpackage Enumerations
 */
class TzoneConversionType
{
    /**
     * Constant for value 'Merchant'
     * @return string 'Merchant'
     */
    const VALUE_MERCHANT = 'Merchant';
    /**
     * Constant for value 'UTC'
     * @return string 'UTC'
     */
    const VALUE_UTC = 'UTC';
    /**
     * Constant for value 'Datacenter'
     * @return string 'Datacenter'
     */
    const VALUE_DATACENTER = 'Datacenter';
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
     * @uses self::VALUE_MERCHANT
     * @uses self::VALUE_UTC
     * @uses self::VALUE_DATACENTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MERCHANT,
            self::VALUE_UTC,
            self::VALUE_DATACENTER,
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
