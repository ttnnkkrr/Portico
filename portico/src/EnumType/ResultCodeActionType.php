<?php

namespace EnumType;

/**
 * This class stands for resultCodeActionType EnumType
 * @subpackage Enumerations
 */
class ResultCodeActionType
{
    /**
     * Constant for value 'PROMPT'
     * @return string 'PROMPT'
     */
    const VALUE_PROMPT = 'PROMPT';
    /**
     * Constant for value 'DECLINE'
     * @return string 'DECLINE'
     */
    const VALUE_DECLINE = 'DECLINE';
    /**
     * Constant for value 'ACCEPT'
     * @return string 'ACCEPT'
     */
    const VALUE_ACCEPT = 'ACCEPT';
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
     * @uses self::VALUE_PROMPT
     * @uses self::VALUE_DECLINE
     * @uses self::VALUE_ACCEPT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PROMPT,
            self::VALUE_DECLINE,
            self::VALUE_ACCEPT,
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
