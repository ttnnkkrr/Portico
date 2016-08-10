<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitReversalReqBlock1Type StructType
 * @subpackage Structs
 */
class DebitReversalReqBlock1Type extends AbstractStructBase
{
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The TrackData
     * Meta informations extracted from the WSDL
     * - default: 0000000000000000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TrackData;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - default: 0.0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amt;
    /**
     * The AuthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AuthAmt;
    /**
     * The EncryptionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EncryptionDataType
     */
    public $EncryptionData;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * Constructor method for DebitReversalReqBlock1Type
     * @uses DebitReversalReqBlock1Type::setGatewayTxnId()
     * @uses DebitReversalReqBlock1Type::setTrackData()
     * @uses DebitReversalReqBlock1Type::setAmt()
     * @uses DebitReversalReqBlock1Type::setAuthAmt()
     * @uses DebitReversalReqBlock1Type::setEncryptionData()
     * @uses DebitReversalReqBlock1Type::setAdditionalTxnFields()
     * @param int $gatewayTxnId
     * @param string $trackData
     * @param float $amt
     * @param float $authAmt
     * @param \StructType\EncryptionDataType $encryptionData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     */
    public function __construct($gatewayTxnId = null, $trackData = '0000000000000000', $amt = 0, $authAmt = null, \StructType\EncryptionDataType $encryptionData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setTrackData($trackData)
            ->setAmt($amt)
            ->setAuthAmt($authAmt)
            ->setEncryptionData($encryptionData)
            ->setAdditionalTxnFields($additionalTxnFields);
    }
    /**
     * Get GatewayTxnId value
     * @return int|null
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\DebitReversalReqBlock1Type
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
     * Get TrackData value
     * @return string|null
     */
    public function getTrackData()
    {
        return $this->TrackData;
    }
    /**
     * Set TrackData value
     * @param string $trackData
     * @return \StructType\DebitReversalReqBlock1Type
     */
    public function setTrackData($trackData = '0000000000000000')
    {
        // validation for constraint: string
        if (!is_null($trackData) && !is_string($trackData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackData)), __LINE__);
        }
        $this->TrackData = $trackData;
        return $this;
    }
    /**
     * Get Amt value
     * @return float|null
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\DebitReversalReqBlock1Type
     */
    public function setAmt($amt = 0)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get AuthAmt value
     * @return float|null
     */
    public function getAuthAmt()
    {
        return $this->AuthAmt;
    }
    /**
     * Set AuthAmt value
     * @param float $authAmt
     * @return \StructType\DebitReversalReqBlock1Type
     */
    public function setAuthAmt($authAmt = null)
    {
        $this->AuthAmt = $authAmt;
        return $this;
    }
    /**
     * Get EncryptionData value
     * @return \StructType\EncryptionDataType|null
     */
    public function getEncryptionData()
    {
        return $this->EncryptionData;
    }
    /**
     * Set EncryptionData value
     * @param \StructType\EncryptionDataType $encryptionData
     * @return \StructType\DebitReversalReqBlock1Type
     */
    public function setEncryptionData(\StructType\EncryptionDataType $encryptionData = null)
    {
        $this->EncryptionData = $encryptionData;
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
     * @return \StructType\DebitReversalReqBlock1Type
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
     * @return \StructType\DebitReversalReqBlock1Type
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
