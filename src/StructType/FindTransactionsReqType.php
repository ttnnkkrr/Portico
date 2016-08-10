<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindTransactionsReqType StructType
 * @subpackage Structs
 */
class FindTransactionsReqType extends AbstractStructBase
{
    /**
     * The Criteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SearchCriteriaType
     */
    public $Criteria;
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
     * The TxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TxnId;
    /**
     * Constructor method for FindTransactionsReqType
     * @uses FindTransactionsReqType::setCriteria()
     * @uses FindTransactionsReqType::setTzConversion()
     * @uses FindTransactionsReqType::setTxnId()
     * @param \StructType\SearchCriteriaType $criteria
     * @param string $tzConversion
     * @param int $txnId
     */
    public function __construct(\StructType\SearchCriteriaType $criteria = null, $tzConversion = 'UTC', $txnId = null)
    {
        $this
            ->setCriteria($criteria)
            ->setTzConversion($tzConversion)
            ->setTxnId($txnId);
    }
    /**
     * Get Criteria value
     * @return \StructType\SearchCriteriaType|null
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \StructType\SearchCriteriaType $criteria
     * @return \StructType\FindTransactionsReqType
     */
    public function setCriteria(\StructType\SearchCriteriaType $criteria = null)
    {
        $this->Criteria = $criteria;
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
     * @return \StructType\FindTransactionsReqType
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
     * Get TxnId value
     * @return int|null
     */
    public function getTxnId()
    {
        return $this->TxnId;
    }
    /**
     * Set TxnId value
     * @param int $txnId
     * @return \StructType\FindTransactionsReqType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FindTransactionsReqType
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
