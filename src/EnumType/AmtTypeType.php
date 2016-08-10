<?php

namespace EnumType;

/**
 * This class stands for amtTypeType EnumType
 * @subpackage Enumerations
 */
class AmtTypeType
{
    /**
     * Constant for value 'TOTAL_HEALTHCARE_AMT'
     * @return string 'TOTAL_HEALTHCARE_AMT'
     */
    const VALUE_TOTAL_HEALTHCARE_AMT = 'TOTAL_HEALTHCARE_AMT';
    /**
     * Constant for value 'SUBTOTAL_PRESCRIPTION_AMT'
     * @return string 'SUBTOTAL_PRESCRIPTION_AMT'
     */
    const VALUE_SUBTOTAL_PRESCRIPTION_AMT = 'SUBTOTAL_PRESCRIPTION_AMT';
    /**
     * Constant for value 'SUBTOTAL_VISION__OPTICAL_AMT'
     * @return string 'SUBTOTAL_VISION__OPTICAL_AMT'
     */
    const VALUE_SUBTOTAL_VISION_OPTICAL_AMT = 'SUBTOTAL_VISION__OPTICAL_AMT';
    /**
     * Constant for value 'SUBTOTAL_CLINIC_OR_OTHER_AMT'
     * @return string 'SUBTOTAL_CLINIC_OR_OTHER_AMT'
     */
    const VALUE_SUBTOTAL_CLINIC_OR_OTHER_AMT = 'SUBTOTAL_CLINIC_OR_OTHER_AMT';
    /**
     * Constant for value 'SUBTOTAL_DENTAL_AMT'
     * @return string 'SUBTOTAL_DENTAL_AMT'
     */
    const VALUE_SUBTOTAL_DENTAL_AMT = 'SUBTOTAL_DENTAL_AMT';
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
     * @uses self::VALUE_TOTAL_HEALTHCARE_AMT
     * @uses self::VALUE_SUBTOTAL_PRESCRIPTION_AMT
     * @uses self::VALUE_SUBTOTAL_VISION_OPTICAL_AMT
     * @uses self::VALUE_SUBTOTAL_CLINIC_OR_OTHER_AMT
     * @uses self::VALUE_SUBTOTAL_DENTAL_AMT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOTAL_HEALTHCARE_AMT,
            self::VALUE_SUBTOTAL_PRESCRIPTION_AMT,
            self::VALUE_SUBTOTAL_VISION_OPTICAL_AMT,
            self::VALUE_SUBTOTAL_CLINIC_OR_OTHER_AMT,
            self::VALUE_SUBTOTAL_DENTAL_AMT,
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
