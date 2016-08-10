<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAltPayReturnRspType StructType
 * @subpackage Structs
 */
class PosAltPayReturnRspType extends AbstractStructBase
{
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RspCode;
    /**
     * The RspMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspMessage;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMessage;
    /**
     * The ReturnAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ReturnAmt;
    /**
     * The TotalReturnAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TotalReturnAmt;
    /**
     * The Processor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Processor
     */
    public $Processor;
    /**
     * Constructor method for PosAltPayReturnRspType
     * @uses PosAltPayReturnRspType::setRspCode()
     * @uses PosAltPayReturnRspType::setRspMessage()
     * @uses PosAltPayReturnRspType::setStatus()
     * @uses PosAltPayReturnRspType::setStatusMessage()
     * @uses PosAltPayReturnRspType::setReturnAmt()
     * @uses PosAltPayReturnRspType::setTotalReturnAmt()
     * @uses PosAltPayReturnRspType::setProcessor()
     * @param int $rspCode
     * @param string $rspMessage
     * @param string $status
     * @param string $statusMessage
     * @param float $returnAmt
     * @param float $totalReturnAmt
     * @param \StructType\Processor $processor
     */
    public function __construct($rspCode = null, $rspMessage = null, $status = null, $statusMessage = null, $returnAmt = null, $totalReturnAmt = null, \StructType\Processor $processor = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspMessage($rspMessage)
            ->setStatus($status)
            ->setStatusMessage($statusMessage)
            ->setReturnAmt($returnAmt)
            ->setTotalReturnAmt($totalReturnAmt)
            ->setProcessor($processor);
    }
    /**
     * Get RspCode value
     * @return int
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param int $rspCode
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: int
        if (!is_null($rspCode) && !is_numeric($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rspCode)), __LINE__);
        }
        $this->RspCode = $rspCode;
        return $this;
    }
    /**
     * Get RspMessage value
     * @return string|null
     */
    public function getRspMessage()
    {
        return $this->RspMessage;
    }
    /**
     * Set RspMessage value
     * @param string $rspMessage
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setRspMessage($rspMessage = null)
    {
        // validation for constraint: string
        if (!is_null($rspMessage) && !is_string($rspMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspMessage)), __LINE__);
        }
        $this->RspMessage = $rspMessage;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusMessage value
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }
    /**
     * Set StatusMessage value
     * @param string $statusMessage
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setStatusMessage($statusMessage = null)
    {
        // validation for constraint: string
        if (!is_null($statusMessage) && !is_string($statusMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusMessage)), __LINE__);
        }
        $this->StatusMessage = $statusMessage;
        return $this;
    }
    /**
     * Get ReturnAmt value
     * @return float|null
     */
    public function getReturnAmt()
    {
        return $this->ReturnAmt;
    }
    /**
     * Set ReturnAmt value
     * @param float $returnAmt
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setReturnAmt($returnAmt = null)
    {
        $this->ReturnAmt = $returnAmt;
        return $this;
    }
    /**
     * Get TotalReturnAmt value
     * @return float|null
     */
    public function getTotalReturnAmt()
    {
        return $this->TotalReturnAmt;
    }
    /**
     * Set TotalReturnAmt value
     * @param float $totalReturnAmt
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setTotalReturnAmt($totalReturnAmt = null)
    {
        $this->TotalReturnAmt = $totalReturnAmt;
        return $this;
    }
    /**
     * Get Processor value
     * @return \StructType\Processor|null
     */
    public function getProcessor()
    {
        return $this->Processor;
    }
    /**
     * Set Processor value
     * @param \StructType\Processor $processor
     * @return \StructType\PosAltPayReturnRspType
     */
    public function setProcessor(\StructType\Processor $processor = null)
    {
        $this->Processor = $processor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAltPayReturnRspType
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
