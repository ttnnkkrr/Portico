<?php

namespace EnumType;

/**
 * This class stands for taxTypeType EnumType
 * @subpackage Enumerations
 */
class TaxTypeType
{
    /**
     * Constant for value 'NOTUSED'
     * @return string 'NOTUSED'
     */
    const VALUE_NOTUSED = 'NOTUSED';
    /**
     * Constant for value 'SALESTAX'
     * @return string 'SALESTAX'
     */
    const VALUE_SALESTAX = 'SALESTAX';
    /**
     * Constant for value 'TAXEXEMPT'
     * @return string 'TAXEXEMPT'
     */
    const VALUE_TAXEXEMPT = 'TAXEXEMPT';
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
     * @uses self::VALUE_NOTUSED
     * @uses self::VALUE_SALESTAX
     * @uses self::VALUE_TAXEXEMPT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTUSED,
            self::VALUE_SALESTAX,
            self::VALUE_TAXEXEMPT,
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
