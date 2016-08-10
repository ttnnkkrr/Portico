<?php

namespace EnumType;

/**
 * This class stands for EncodingType EnumType
 * @subpackage Enumerations
 */
class EncodingType
{
    /**
     * Constant for value 'base16'
     * @return string 'base16'
     */
    const VALUE_BASE_16 = 'base16';
    /**
     * Constant for value 'base64'
     * @return string 'base64'
     */
    const VALUE_BASE_64 = 'base64';
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
     * @uses self::VALUE_BASE_16
     * @uses self::VALUE_BASE_64
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BASE_16,
            self::VALUE_BASE_64,
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
