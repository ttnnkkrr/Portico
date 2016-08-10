<?php

namespace EnumType;

/**
 * This class stands for dataEntryModeType EnumType
 * @subpackage Enumerations
 */
class DataEntryModeType
{
    /**
     * Constant for value 'MANUAL'
     * @return string 'MANUAL'
     */
    const VALUE_MANUAL = 'MANUAL';
    /**
     * Constant for value 'SWIPE'
     * @return string 'SWIPE'
     */
    const VALUE_SWIPE = 'SWIPE';
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
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_SWIPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL,
            self::VALUE_SWIPE,
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
