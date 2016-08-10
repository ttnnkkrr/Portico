<?php

namespace EnumType;

/**
 * This class stands for CardTypeType EnumType
 * @subpackage Enumerations
 */
class CardTypeType
{
    /**
     * Constant for value 'VISA'
     * @return string 'VISA'
     */
    const VALUE_VISA = 'VISA';
    /**
     * Constant for value 'MC'
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'DISC'
     * @return string 'DISC'
     */
    const VALUE_DISC = 'DISC';
    /**
     * Constant for value 'AMEX'
     * @return string 'AMEX'
     */
    const VALUE_AMEX = 'AMEX';
    /**
     * Constant for value 'GIFTCARD'
     * @return string 'GIFTCARD'
     */
    const VALUE_GIFTCARD = 'GIFTCARD';
    /**
     * Constant for value 'PAYPALECOMMERCE'
     * @return string 'PAYPALECOMMERCE'
     */
    const VALUE_PAYPALECOMMERCE = 'PAYPALECOMMERCE';
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
     * @uses self::VALUE_VISA
     * @uses self::VALUE_MC
     * @uses self::VALUE_DISC
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_GIFTCARD
     * @uses self::VALUE_PAYPALECOMMERCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VISA,
            self::VALUE_MC,
            self::VALUE_DISC,
            self::VALUE_AMEX,
            self::VALUE_GIFTCARD,
            self::VALUE_PAYPALECOMMERCE,
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
