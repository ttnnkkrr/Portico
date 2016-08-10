<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentData StructType
 * @subpackage Structs
 */
class PaymentData extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The encoding
     * Meta informations extracted from the WSDL
     * - default: base64
     * @var string
     */
    public $encoding;
    /**
     * Constructor method for PaymentData
     * @uses PaymentData::set_()
     * @uses PaymentData::setEncoding()
     * @param string $_
     * @param string $encoding
     */
    public function __construct($_ = null, $encoding = 'base64')
    {
        $this
            ->set_($_)
            ->setEncoding($encoding);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\PaymentData
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }
    /**
     * Set encoding value
     * @uses \EnumType\EncodingType::valueIsValid()
     * @uses \EnumType\EncodingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $encoding
     * @return \StructType\PaymentData
     */
    public function setEncoding($encoding = 'base64')
    {
        // validation for constraint: enumeration
        if (!\EnumType\EncodingType::valueIsValid($encoding)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $encoding, implode(', ', \EnumType\EncodingType::getValidValues())), __LINE__);
        }
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentData
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
