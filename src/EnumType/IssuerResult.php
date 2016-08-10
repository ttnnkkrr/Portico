<?php

namespace EnumType;

/**
 * This class stands for IssuerResult EnumType
 * @subpackage Enumerations
 */
class IssuerResult
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'FR'
     * @return string 'FR'
     */
    const VALUE_FR = 'FR';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_D
     * @uses self::VALUE_P
     * @uses self::VALUE_F
     * @uses self::VALUE_FR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_D,
            self::VALUE_P,
            self::VALUE_F,
            self::VALUE_FR,
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
