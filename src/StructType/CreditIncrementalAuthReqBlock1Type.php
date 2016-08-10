<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditIncrementalAuthReqBlock1Type StructType
 * @subpackage Structs
 */
class CreditIncrementalAuthReqBlock1Type extends AbstractStructBase
{
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The LodgingData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtraChargesDataType
     */
    public $LodgingData;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * Constructor method for CreditIncrementalAuthReqBlock1Type
     * @uses CreditIncrementalAuthReqBlock1Type::setGatewayTxnId()
     * @uses CreditIncrementalAuthReqBlock1Type::setAmt()
     * @uses CreditIncrementalAuthReqBlock1Type::setLodgingData()
     * @uses CreditIncrementalAuthReqBlock1Type::setAdditionalTxnFields()
     * @param int $gatewayTxnId
     * @param float $amt
     * @param \StructType\ExtraChargesDataType $lodgingData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     */
    public function __construct($gatewayTxnId = null, $amt = null, \StructType\ExtraChargesDataType $lodgingData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setAmt($amt)
            ->setLodgingData($lodgingData)
            ->setAdditionalTxnFields($additionalTxnFields);
    }
    /**
     * Get GatewayTxnId value
     * @return int
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\CreditIncrementalAuthReqBlock1Type
     */
    public function setGatewayTxnId($gatewayTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayTxnId) && !is_numeric($gatewayTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayTxnId)), __LINE__);
        }
        $this->GatewayTxnId = $gatewayTxnId;
        return $this;
    }
    /**
     * Get Amt value
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\CreditIncrementalAuthReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get LodgingData value
     * @return \StructType\ExtraChargesDataType|null
     */
    public function getLodgingData()
    {
        return $this->LodgingData;
    }
    /**
     * Set LodgingData value
     * @param \StructType\ExtraChargesDataType $lodgingData
     * @return \StructType\CreditIncrementalAuthReqBlock1Type
     */
    public function setLodgingData(\StructType\ExtraChargesDataType $lodgingData = null)
    {
        $this->LodgingData = $lodgingData;
        return $this;
    }
    /**
     * Get AdditionalTxnFields value
     * @return \StructType\AdditionalTxnFieldsType|null
     */
    public function getAdditionalTxnFields()
    {
        return $this->AdditionalTxnFields;
    }
    /**
     * Set AdditionalTxnFields value
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @return \StructType\CreditIncrementalAuthReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreditIncrementalAuthReqBlock1Type
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
