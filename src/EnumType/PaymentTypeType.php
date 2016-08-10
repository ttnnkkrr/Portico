<?php

namespace EnumType;

/**
 * This class stands for paymentTypeType EnumType
 * @subpackage Enumerations
 */
class PaymentTypeType
{
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const VALUE_OTHER = 'OTHER';
    /**
     * Constant for value 'PREPAID'
     * @return string 'PREPAID'
     */
    const VALUE_PREPAID = 'PREPAID';
    /**
     * Constant for value 'GIFTCARD'
     * @return string 'GIFTCARD'
     */
    const VALUE_GIFTCARD = 'GIFTCARD';
    /**
     * Constant for value 'EBT'
     * @return string 'EBT'
     */
    const VALUE_EBT = 'EBT';
    /**
     * Constant for value 'CREDIT'
     * @return string 'CREDIT'
     */
    const VALUE_CREDIT = 'CREDIT';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT = 'DEBIT';
    /**
     * Constant for value 'CHECK'
     * @return string 'CHECK'
     */
    const VALUE_CHECK = 'CHECK';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'ALTPAYMENT'
     * @return string 'ALTPAYMENT'
     */
    const VALUE_ALTPAYMENT = 'ALTPAYMENT';
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
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PREPAID
     * @uses self::VALUE_GIFTCARD
     * @uses self::VALUE_EBT
     * @uses self::VALUE_CREDIT
     * @uses self::VALUE_DEBIT
     * @uses self::VALUE_CHECK
     * @uses self::VALUE_CASH
     * @uses self::VALUE_ALTPAYMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_PREPAID,
            self::VALUE_GIFTCARD,
            self::VALUE_EBT,
            self::VALUE_CREDIT,
            self::VALUE_DEBIT,
            self::VALUE_CHECK,
            self::VALUE_CASH,
            self::VALUE_ALTPAYMENT,
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
