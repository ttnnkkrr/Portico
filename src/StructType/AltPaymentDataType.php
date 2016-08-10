<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AltPaymentDataType StructType
 * @subpackage Structs
 */
class AltPaymentDataType extends AbstractStructBase
{
    /**
     * The TaxAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmtInfo;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusMsg;
    /**
     * The BuyerEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmailAddress;
    /**
     * The StatusDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusDT;
    /**
     * The ProcessorRspInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProcessorRspInfoType[]
     */
    public $ProcessorRspInfo;
    /**
     * Constructor method for AltPaymentDataType
     * @uses AltPaymentDataType::setTaxAmtInfo()
     * @uses AltPaymentDataType::setStatus()
     * @uses AltPaymentDataType::setStatusMsg()
     * @uses AltPaymentDataType::setBuyerEmailAddress()
     * @uses AltPaymentDataType::setStatusDT()
     * @uses AltPaymentDataType::setProcessorRspInfo()
     * @param float $taxAmtInfo
     * @param string $status
     * @param string $statusMsg
     * @param string $buyerEmailAddress
     * @param string $statusDT
     * @param \StructType\ProcessorRspInfoType[] $processorRspInfo
     */
    public function __construct($taxAmtInfo = null, $status = null, $statusMsg = null, $buyerEmailAddress = null, $statusDT = null, array $processorRspInfo = array())
    {
        $this
            ->setTaxAmtInfo($taxAmtInfo)
            ->setStatus($status)
            ->setStatusMsg($statusMsg)
            ->setBuyerEmailAddress($buyerEmailAddress)
            ->setStatusDT($statusDT)
            ->setProcessorRspInfo($processorRspInfo);
    }
    /**
     * Get TaxAmtInfo value
     * @return float|null
     */
    public function getTaxAmtInfo()
    {
        return $this->TaxAmtInfo;
    }
    /**
     * Set TaxAmtInfo value
     * @param float $taxAmtInfo
     * @return \StructType\AltPaymentDataType
     */
    public function setTaxAmtInfo($taxAmtInfo = null)
    {
        $this->TaxAmtInfo = $taxAmtInfo;
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
     * @return \StructType\AltPaymentDataType
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
     * Get StatusMsg value
     * @return string|null
     */
    public function getStatusMsg()
    {
        return $this->StatusMsg;
    }
    /**
     * Set StatusMsg value
     * @param string $statusMsg
     * @return \StructType\AltPaymentDataType
     */
    public function setStatusMsg($statusMsg = null)
    {
        // validation for constraint: string
        if (!is_null($statusMsg) && !is_string($statusMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusMsg)), __LINE__);
        }
        $this->StatusMsg = $statusMsg;
        return $this;
    }
    /**
     * Get BuyerEmailAddress value
     * @return string|null
     */
    public function getBuyerEmailAddress()
    {
        return $this->BuyerEmailAddress;
    }
    /**
     * Set BuyerEmailAddress value
     * @param string $buyerEmailAddress
     * @return \StructType\AltPaymentDataType
     */
    public function setBuyerEmailAddress($buyerEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmailAddress) && !is_string($buyerEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmailAddress)), __LINE__);
        }
        $this->BuyerEmailAddress = $buyerEmailAddress;
        return $this;
    }
    /**
     * Get StatusDT value
     * @return string|null
     */
    public function getStatusDT()
    {
        return $this->StatusDT;
    }
    /**
     * Set StatusDT value
     * @param string $statusDT
     * @return \StructType\AltPaymentDataType
     */
    public function setStatusDT($statusDT = null)
    {
        // validation for constraint: string
        if (!is_null($statusDT) && !is_string($statusDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDT)), __LINE__);
        }
        $this->StatusDT = $statusDT;
        return $this;
    }
    /**
     * Get ProcessorRspInfo value
     * @return \StructType\ProcessorRspInfoType[]|null
     */
    public function getProcessorRspInfo()
    {
        return $this->ProcessorRspInfo;
    }
    /**
     * Set ProcessorRspInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ProcessorRspInfoType[] $processorRspInfo
     * @return \StructType\AltPaymentDataType
     */
    public function setProcessorRspInfo(array $processorRspInfo = array())
    {
        foreach ($processorRspInfo as $altPaymentDataTypeProcessorRspInfoItem) {
            // validation for constraint: itemType
            if (!$altPaymentDataTypeProcessorRspInfoItem instanceof \StructType\ProcessorRspInfoType) {
                throw new \InvalidArgumentException(sprintf('The ProcessorRspInfo property can only contain items of \StructType\ProcessorRspInfoType, "%s" given', is_object($altPaymentDataTypeProcessorRspInfoItem) ? get_class($altPaymentDataTypeProcessorRspInfoItem) : gettype($altPaymentDataTypeProcessorRspInfoItem)), __LINE__);
            }
        }
        $this->ProcessorRspInfo = $processorRspInfo;
        return $this;
    }
    /**
     * Add item to ProcessorRspInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\ProcessorRspInfoType $item
     * @return \StructType\AltPaymentDataType
     */
    public function addToProcessorRspInfo(\StructType\ProcessorRspInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProcessorRspInfoType) {
            throw new \InvalidArgumentException(sprintf('The ProcessorRspInfo property can only contain items of \StructType\ProcessorRspInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProcessorRspInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AltPaymentDataType
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
