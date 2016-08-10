<?php

namespace EnumType;

/**
 * This class stands for Action EnumType
 * @subpackage Enumerations
 */
class Action
{
    /**
     * Constant for value 'DELETE'
     * @return string 'DELETE'
     */
    const VALUE_DELETE = 'DELETE';
    /**
     * Constant for value 'ADD'
     * @return string 'ADD'
     */
    const VALUE_ADD = 'ADD';
    /**
     * Constant for value 'CREATE'
     * @return string 'CREATE'
     */
    const VALUE_CREATE = 'CREATE';
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
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ADD
     * @uses self::VALUE_CREATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE,
            self::VALUE_ADD,
            self::VALUE_CREATE,
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
