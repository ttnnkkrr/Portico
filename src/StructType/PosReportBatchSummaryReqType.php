<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportBatchSummaryReqType StructType
 * @subpackage Structs
 */
class PosReportBatchSummaryReqType extends AbstractStructBase
{
    /**
     * The BatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchId;
    /**
     * The RptStartUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RptStartUtcDT;
    /**
     * The RptEndUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RptEndUtcDT;
    /**
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchSeqNbr;
    /**
     * The ClerkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClerkID;
    /**
     * Constructor method for PosReportBatchSummaryReqType
     * @uses PosReportBatchSummaryReqType::setBatchId()
     * @uses PosReportBatchSummaryReqType::setRptStartUtcDT()
     * @uses PosReportBatchSummaryReqType::setRptEndUtcDT()
     * @uses PosReportBatchSummaryReqType::setBatchSeqNbr()
     * @uses PosReportBatchSummaryReqType::setClerkID()
     * @param int $batchId
     * @param string $rptStartUtcDT
     * @param string $rptEndUtcDT
     * @param int $batchSeqNbr
     * @param string $clerkID
     */
    public function __construct($batchId = null, $rptStartUtcDT = null, $rptEndUtcDT = null, $batchSeqNbr = null, $clerkID = null)
    {
        $this
            ->setBatchId($batchId)
            ->setRptStartUtcDT($rptStartUtcDT)
            ->setRptEndUtcDT($rptEndUtcDT)
            ->setBatchSeqNbr($batchSeqNbr)
            ->setClerkID($clerkID);
    }
    /**
     * Get BatchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \StructType\PosReportBatchSummaryReqType
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
     * Get RptStartUtcDT value
     * @return string|null
     */
    public function getRptStartUtcDT()
    {
        return $this->RptStartUtcDT;
    }
    /**
     * Set RptStartUtcDT value
     * @param string $rptStartUtcDT
     * @return \StructType\PosReportBatchSummaryReqType
     */
    public function setRptStartUtcDT($rptStartUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptStartUtcDT) && !is_string($rptStartUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptStartUtcDT)), __LINE__);
        }
        $this->RptStartUtcDT = $rptStartUtcDT;
        return $this;
    }
    /**
     * Get RptEndUtcDT value
     * @return string|null
     */
    public function getRptEndUtcDT()
    {
        return $this->RptEndUtcDT;
    }
    /**
     * Set RptEndUtcDT value
     * @param string $rptEndUtcDT
     * @return \StructType\PosReportBatchSummaryReqType
     */
    public function setRptEndUtcDT($rptEndUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptEndUtcDT) && !is_string($rptEndUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptEndUtcDT)), __LINE__);
        }
        $this->RptEndUtcDT = $rptEndUtcDT;
        return $this;
    }
    /**
     * Get BatchSeqNbr value
     * @return int|null
     */
    public function getBatchSeqNbr()
    {
        return $this->BatchSeqNbr;
    }
    /**
     * Set BatchSeqNbr value
     * @param int $batchSeqNbr
     * @return \StructType\PosReportBatchSummaryReqType
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
     * Get ClerkID value
     * @return string|null
     */
    public function getClerkID()
    {
        return $this->ClerkID;
    }
    /**
     * Set ClerkID value
     * @param string $clerkID
     * @return \StructType\PosReportBatchSummaryReqType
     */
    public function setClerkID($clerkID = null)
    {
        // validation for constraint: string
        if (!is_null($clerkID) && !is_string($clerkID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clerkID)), __LINE__);
        }
        $this->ClerkID = $clerkID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosReportBatchSummaryReqType
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
