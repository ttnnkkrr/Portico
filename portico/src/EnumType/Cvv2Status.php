<?php

namespace EnumType;

/**
 * This class stands for cvv2Status EnumType
 * @subpackage Enumerations
 */
class Cvv2Status
{
    /**
     * Constant for value 'ILLEGIBLE'
     * @return string 'ILLEGIBLE'
     */
    const VALUE_ILLEGIBLE = 'ILLEGIBLE';
    /**
     * Constant for value 'NOTPRESENT'
     * @return string 'NOTPRESENT'
     */
    const VALUE_NOTPRESENT = 'NOTPRESENT';
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
     * @uses self::VALUE_ILLEGIBLE
     * @uses self::VALUE_NOTPRESENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ILLEGIBLE,
            self::VALUE_NOTPRESENT,
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
