<?php

namespace EnumType;

/**
 * This class stands for debtRepaymentType EnumType
 * @subpackage Enumerations
 */
class DebtRepaymentType
{
    /**
     * Constant for value 'NOT_SPECIFIED'
     * @return string 'NOT_SPECIFIED'
     */
    const VALUE_NOT_SPECIFIED = 'NOT_SPECIFIED';
    /**
     * Constant for value 'DEBT_OBLIGATION'
     * @return string 'DEBT_OBLIGATION'
     */
    const VALUE_DEBT_OBLIGATION = 'DEBT_OBLIGATION';
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
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_DEBT_OBLIGATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_DEBT_OBLIGATION,
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
