<?php

namespace EnumType;

/**
 * This class stands for advancedDepositTypeType EnumType
 * @subpackage Enumerations
 */
class AdvancedDepositTypeType
{
    /**
     * Constant for value 'ASSURED_RESERVATION'
     * @return string 'ASSURED_RESERVATION'
     */
    const VALUE_ASSURED_RESERVATION = 'ASSURED_RESERVATION';
    /**
     * Constant for value 'CARD_DEPOSIT'
     * @return string 'CARD_DEPOSIT'
     */
    const VALUE_CARD_DEPOSIT = 'CARD_DEPOSIT';
    /**
     * Constant for value 'PURCHASE'
     * @return string 'PURCHASE'
     */
    const VALUE_PURCHASE = 'PURCHASE';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
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
     * @uses self::VALUE_ASSURED_RESERVATION
     * @uses self::VALUE_CARD_DEPOSIT
     * @uses self::VALUE_PURCHASE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASSURED_RESERVATION,
            self::VALUE_CARD_DEPOSIT,
            self::VALUE_PURCHASE,
            self::VALUE_OTHER,
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
