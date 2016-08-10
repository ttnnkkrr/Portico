<?php

namespace EnumType;

/**
 * This class stands for attachmentFormatType EnumType
 * @subpackage Enumerations
 */
class AttachmentFormatType
{
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
    /**
     * Constant for value 'JPG'
     * @return string 'JPG'
     */
    const VALUE_JPG = 'JPG';
    /**
     * Constant for value 'TIF'
     * @return string 'TIF'
     */
    const VALUE_TIF = 'TIF';
    /**
     * Constant for value 'BMP'
     * @return string 'BMP'
     */
    const VALUE_BMP = 'BMP';
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'DOCX'
     * @return string 'DOCX'
     */
    const VALUE_DOCX = 'DOCX';
    /**
     * Constant for value 'DOC'
     * @return string 'DOC'
     */
    const VALUE_DOC = 'DOC';
    /**
     * Constant for value 'TXT'
     * @return string 'TXT'
     */
    const VALUE_TXT = 'TXT';
    /**
     * Constant for value 'XLS'
     * @return string 'XLS'
     */
    const VALUE_XLS = 'XLS';
    /**
     * Constant for value 'XLSX'
     * @return string 'XLSX'
     */
    const VALUE_XLSX = 'XLSX';
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
     * @uses self::VALUE_PNG
     * @uses self::VALUE_JPG
     * @uses self::VALUE_TIF
     * @uses self::VALUE_BMP
     * @uses self::VALUE_PDF
     * @uses self::VALUE_DOCX
     * @uses self::VALUE_DOC
     * @uses self::VALUE_TXT
     * @uses self::VALUE_XLS
     * @uses self::VALUE_XLSX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PNG,
            self::VALUE_JPG,
            self::VALUE_TIF,
            self::VALUE_BMP,
            self::VALUE_PDF,
            self::VALUE_DOCX,
            self::VALUE_DOC,
            self::VALUE_TXT,
            self::VALUE_XLS,
            self::VALUE_XLSX,
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
