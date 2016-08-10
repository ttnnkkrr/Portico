<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGetTransactionStatusRspType StructType
 * @subpackage Structs
 */
class PosGetTransactionStatusRspType extends AbstractStructBase
{
    /**
     * The TransactionStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TransactionStatus
     */
    public $TransactionStatus;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TzConversion;
    /**
     * Constructor method for PosGetTransactionStatusRspType
     * @uses PosGetTransactionStatusRspType::setTransactionStatus()
     * @uses PosGetTransactionStatusRspType::setTzConversion()
     * @param \StructType\TransactionStatus $transactionStatus
     * @param string $tzConversion
     */
    public function __construct(\StructType\TransactionStatus $transactionStatus = null, $tzConversion = null)
    {
        $this
            ->setTransactionStatus($transactionStatus)
            ->setTzConversion($tzConversion);
    }
    /**
     * Get TransactionStatus value
     * @return \StructType\TransactionStatus|null
     */
    public function getTransactionStatus()
    {
        return $this->TransactionStatus;
    }
    /**
     * Set TransactionStatus value
     * @param \StructType\TransactionStatus $transactionStatus
     * @return \StructType\PosGetTransactionStatusRspType
     */
    public function setTransactionStatus(\StructType\TransactionStatus $transactionStatus = null)
    {
        $this->TransactionStatus = $transactionStatus;
        return $this;
    }
    /**
     * Get TzConversion value
     * @return string|null
     */
    public function getTzConversion()
    {
        return $this->TzConversion;
    }
    /**
     * Set TzConversion value
     * @uses \EnumType\TzoneConversionType::valueIsValid()
     * @uses \EnumType\TzoneConversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tzConversion
     * @return \StructType\PosGetTransactionStatusRspType
     */
    public function setTzConversion($tzConversion = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TzoneConversionType::valueIsValid($tzConversion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tzConversion, implode(', ', \EnumType\TzoneConversionType::getValidValues())), __LINE__);
        }
        $this->TzConversion = $tzConversion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGetTransactionStatusRspType
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
