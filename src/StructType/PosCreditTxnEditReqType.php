<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosCreditTxnEditReqType StructType
 * @subpackage Structs
 */
class PosCreditTxnEditReqType extends AbstractStructBase
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
     * - minOccurs: 0
     * @var float
     */
    public $Amt;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The LodgingDataEdit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LodgingDataEditType
     */
    public $LodgingDataEdit;
    /**
     * The DirectMktData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DirectMktDataType
     */
    public $DirectMktData;
    /**
     * The SurchargeAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $SurchargeAmtInfo;
    /**
     * The EMVTagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVTagData;
    /**
     * The TagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagDataType
     */
    public $TagData;
    /**
     * Constructor method for PosCreditTxnEditReqType
     * @uses PosCreditTxnEditReqType::setGatewayTxnId()
     * @uses PosCreditTxnEditReqType::setAmt()
     * @uses PosCreditTxnEditReqType::setGratuityAmtInfo()
     * @uses PosCreditTxnEditReqType::setLodgingDataEdit()
     * @uses PosCreditTxnEditReqType::setDirectMktData()
     * @uses PosCreditTxnEditReqType::setSurchargeAmtInfo()
     * @uses PosCreditTxnEditReqType::setEMVTagData()
     * @uses PosCreditTxnEditReqType::setTagData()
     * @param int $gatewayTxnId
     * @param float $amt
     * @param float $gratuityAmtInfo
     * @param \StructType\LodgingDataEditType $lodgingDataEdit
     * @param \StructType\DirectMktDataType $directMktData
     * @param float $surchargeAmtInfo
     * @param string $eMVTagData
     * @param \StructType\TagDataType $tagData
     */
    public function __construct($gatewayTxnId = null, $amt = null, $gratuityAmtInfo = null, \StructType\LodgingDataEditType $lodgingDataEdit = null, \StructType\DirectMktDataType $directMktData = null, $surchargeAmtInfo = null, $eMVTagData = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setAmt($amt)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setLodgingDataEdit($lodgingDataEdit)
            ->setDirectMktData($directMktData)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setEMVTagData($eMVTagData)
            ->setTagData($tagData);
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
     * @return \StructType\PosCreditTxnEditReqType
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
     * @return float|null
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get GratuityAmtInfo value
     * @return float|null
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
        return $this;
    }
    /**
     * Get LodgingDataEdit value
     * @return \StructType\LodgingDataEditType|null
     */
    public function getLodgingDataEdit()
    {
        return $this->LodgingDataEdit;
    }
    /**
     * Set LodgingDataEdit value
     * @param \StructType\LodgingDataEditType $lodgingDataEdit
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setLodgingDataEdit(\StructType\LodgingDataEditType $lodgingDataEdit = null)
    {
        $this->LodgingDataEdit = $lodgingDataEdit;
        return $this;
    }
    /**
     * Get DirectMktData value
     * @return \StructType\DirectMktDataType|null
     */
    public function getDirectMktData()
    {
        return $this->DirectMktData;
    }
    /**
     * Set DirectMktData value
     * @param \StructType\DirectMktDataType $directMktData
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setDirectMktData(\StructType\DirectMktDataType $directMktData = null)
    {
        $this->DirectMktData = $directMktData;
        return $this;
    }
    /**
     * Get SurchargeAmtInfo value
     * @return float|null
     */
    public function getSurchargeAmtInfo()
    {
        return $this->SurchargeAmtInfo;
    }
    /**
     * Set SurchargeAmtInfo value
     * @param float $surchargeAmtInfo
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setSurchargeAmtInfo($surchargeAmtInfo = null)
    {
        $this->SurchargeAmtInfo = $surchargeAmtInfo;
        return $this;
    }
    /**
     * Get EMVTagData value
     * @return string|null
     */
    public function getEMVTagData()
    {
        return $this->EMVTagData;
    }
    /**
     * Set EMVTagData value
     * @param string $eMVTagData
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setEMVTagData($eMVTagData = null)
    {
        // validation for constraint: string
        if (!is_null($eMVTagData) && !is_string($eMVTagData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMVTagData)), __LINE__);
        }
        $this->EMVTagData = $eMVTagData;
        return $this;
    }
    /**
     * Get TagData value
     * @return \StructType\TagDataType|null
     */
    public function getTagData()
    {
        return $this->TagData;
    }
    /**
     * Set TagData value
     * @param \StructType\TagDataType $tagData
     * @return \StructType\PosCreditTxnEditReqType
     */
    public function setTagData(\StructType\TagDataType $tagData = null)
    {
        $this->TagData = $tagData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosCreditTxnEditReqType
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
