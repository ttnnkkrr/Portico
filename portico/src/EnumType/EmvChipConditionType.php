<?php

namespace EnumType;

/**
 * This class stands for emvChipConditionType EnumType
 * @subpackage Enumerations
 */
class EmvChipConditionType
{
    /**
     * Constant for value 'CHIP_FAILED_PREV_SUCCESS'
     * @return string 'CHIP_FAILED_PREV_SUCCESS'
     */
    const VALUE_CHIP_FAILED_PREV_SUCCESS = 'CHIP_FAILED_PREV_SUCCESS';
    /**
     * Constant for value 'CHIP_FAILED_PREV_FAILED'
     * @return string 'CHIP_FAILED_PREV_FAILED'
     */
    const VALUE_CHIP_FAILED_PREV_FAILED = 'CHIP_FAILED_PREV_FAILED';
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
     * @uses self::VALUE_CHIP_FAILED_PREV_SUCCESS
     * @uses self::VALUE_CHIP_FAILED_PREV_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHIP_FAILED_PREV_SUCCESS,
            self::VALUE_CHIP_FAILED_PREV_FAILED,
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
