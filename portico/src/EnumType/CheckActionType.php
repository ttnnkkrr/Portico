<?php

namespace EnumType;

/**
 * This class stands for checkActionType EnumType
 * @subpackage Enumerations
 */
class CheckActionType
{
    /**
     * Constant for value 'SALE'
     * @return string 'SALE'
     */
    const VALUE_SALE = 'SALE';
    /**
     * Constant for value 'OVERRIDE'
     * @return string 'OVERRIDE'
     */
    const VALUE_OVERRIDE = 'OVERRIDE';
    /**
     * Constant for value 'RETURN'
     * @return string 'RETURN'
     */
    const VALUE_RETURN = 'RETURN';
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
     * @uses self::VALUE_SALE
     * @uses self::VALUE_OVERRIDE
     * @uses self::VALUE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SALE,
            self::VALUE_OVERRIDE,
            self::VALUE_RETURN,
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
