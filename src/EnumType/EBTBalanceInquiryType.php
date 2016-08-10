<?php

namespace EnumType;

/**
 * This class stands for EBTBalanceInquiryType EnumType
 * @subpackage Enumerations
 */
class EBTBalanceInquiryType
{
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'FOODSTAMP'
     * @return string 'FOODSTAMP'
     */
    const VALUE_FOODSTAMP = 'FOODSTAMP';
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
     * @uses self::VALUE_CASH
     * @uses self::VALUE_FOODSTAMP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CASH,
            self::VALUE_FOODSTAMP,
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
