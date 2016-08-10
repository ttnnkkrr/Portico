<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportTxnDetailReqType StructType
 * @subpackage Structs
 */
class PosReportTxnDetailReqType extends AbstractStructBase
{
    /**
     * The TxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TxnId;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - default: UTC
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TzConversion;
    /**
     * Constructor method for PosReportTxnDetailReqType
     * @uses PosReportTxnDetailReqType::setTxnId()
     * @uses PosReportTxnDetailReqType::setTzConversion()
     * @param int $txnId
     * @param string $tzConversion
     */
    public function __construct($txnId = null, $tzConversion = 'UTC')
    {
        $this
            ->setTxnId($txnId)
            ->setTzConversion($tzConversion);
    }
    /**
     * Get TxnId value
     * @return int
     */
    public function getTxnId()
    {
        return $this->TxnId;
    }
    /**
     * Set TxnId value
     * @param int $txnId
     * @return \StructType\PosReportTxnDetailReqType
     */
    public function setTxnId($txnId = null)
    {
        // validation for constraint: int
        if (!is_null($txnId) && !is_numeric($txnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($txnId)), __LINE__);
        }
        $this->TxnId = $txnId;
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
     * @return \StructType\PosReportTxnDetailReqType
     */
    public function setTzConversion($tzConversion = 'UTC')
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
     * @return \StructType\PosReportTxnDetailReqType
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
