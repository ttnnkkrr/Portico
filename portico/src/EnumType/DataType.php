<?php

namespace EnumType;

/**
 * This class stands for DataType EnumType
 * @subpackage Enumerations
 */
class DataType
{
    /**
     * Constant for value 'EMAIL_TO'
     * @return string 'EMAIL_TO'
     */
    const VALUE_EMAIL_TO = 'EMAIL_TO';
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
     * @uses self::VALUE_EMAIL_TO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL_TO,
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
