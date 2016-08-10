<?php

namespace EnumType;

/**
 * This class stands for attachmentTypeType EnumType
 * @subpackage Enumerations
 */
class AttachmentTypeType
{
    /**
     * Constant for value 'SIGNATURE_IMAGE'
     * @return string 'SIGNATURE_IMAGE'
     */
    const VALUE_SIGNATURE_IMAGE = 'SIGNATURE_IMAGE';
    /**
     * Constant for value 'RECEIPT_IMAGE'
     * @return string 'RECEIPT_IMAGE'
     */
    const VALUE_RECEIPT_IMAGE = 'RECEIPT_IMAGE';
    /**
     * Constant for value 'CUSTOMER_IMAGE'
     * @return string 'CUSTOMER_IMAGE'
     */
    const VALUE_CUSTOMER_IMAGE = 'CUSTOMER_IMAGE';
    /**
     * Constant for value 'PRODUCT_IMAGE'
     * @return string 'PRODUCT_IMAGE'
     */
    const VALUE_PRODUCT_IMAGE = 'PRODUCT_IMAGE';
    /**
     * Constant for value 'DOCUMENT'
     * @return string 'DOCUMENT'
     */
    const VALUE_DOCUMENT = 'DOCUMENT';
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
     * @uses self::VALUE_SIGNATURE_IMAGE
     * @uses self::VALUE_RECEIPT_IMAGE
     * @uses self::VALUE_CUSTOMER_IMAGE
     * @uses self::VALUE_PRODUCT_IMAGE
     * @uses self::VALUE_DOCUMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIGNATURE_IMAGE,
            self::VALUE_RECEIPT_IMAGE,
            self::VALUE_CUSTOMER_IMAGE,
            self::VALUE_PRODUCT_IMAGE,
            self::VALUE_DOCUMENT,
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
