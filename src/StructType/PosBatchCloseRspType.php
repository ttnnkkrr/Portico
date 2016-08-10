<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosBatchCloseRspType StructType
 * @subpackage Structs
 */
class PosBatchCloseRspType extends AbstractStructBase
{
    /**
     * The BatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchId;
    /**
     * The TxnCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TxnCnt;
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalAmt;
    /**
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchSeqNbr;
    /**
     * Constructor method for PosBatchCloseRspType
     * @uses PosBatchCloseRspType::setBatchId()
     * @uses PosBatchCloseRspType::setTxnCnt()
     * @uses PosBatchCloseRspType::setTotalAmt()
     * @uses PosBatchCloseRspType::setBatchSeqNbr()
     * @param int $batchId
     * @param int $txnCnt
     * @param float $totalAmt
     * @param int $batchSeqNbr
     */
    public function __construct($batchId = null, $txnCnt = null, $totalAmt = null, $batchSeqNbr = null)
    {
        $this
            ->setBatchId($batchId)
            ->setTxnCnt($txnCnt)
            ->setTotalAmt($totalAmt)
            ->setBatchSeqNbr($batchSeqNbr);
    }
    /**
     * Get BatchId value
     * @return int
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \StructType\PosBatchCloseRspType
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !is_numeric($batchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchId)), __LINE__);
        }
        $this->BatchId = $batchId;
        return $this;
    }
    /**
     * Get TxnCnt value
     * @return int
     */
    public function getTxnCnt()
    {
        return $this->TxnCnt;
    }
    /**
     * Set TxnCnt value
     * @param int $txnCnt
     * @return \StructType\PosBatchCloseRspType
     */
    public function setTxnCnt($txnCnt = null)
    {
        // validation for constraint: int
        if (!is_null($txnCnt) && !is_numeric($txnCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($txnCnt)), __LINE__);
        }
        $this->TxnCnt = $txnCnt;
        return $this;
    }
    /**
     * Get TotalAmt value
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param float $totalAmt
     * @return \StructType\PosBatchCloseRspType
     */
    public function setTotalAmt($totalAmt = null)
    {
        $this->TotalAmt = $totalAmt;
        return $this;
    }
    /**
     * Get BatchSeqNbr value
     * @return int
     */
    public function getBatchSeqNbr()
    {
        return $this->BatchSeqNbr;
    }
    /**
     * Set BatchSeqNbr value
     * @param int $batchSeqNbr
     * @return \StructType\PosBatchCloseRspType
     */
    public function setBatchSeqNbr($batchSeqNbr = null)
    {
        // validation for constraint: int
        if (!is_null($batchSeqNbr) && !is_numeric($batchSeqNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchSeqNbr)), __LINE__);
        }
        $this->BatchSeqNbr = $batchSeqNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosBatchCloseRspType
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
