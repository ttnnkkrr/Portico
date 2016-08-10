<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosCreditCPCEditReqType StructType
 * @subpackage Structs
 */
class PosCreditCPCEditReqType extends AbstractStructBase
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
     * The CPCData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CPCDataType
     */
    public $CPCData;
    /**
     * Constructor method for PosCreditCPCEditReqType
     * @uses PosCreditCPCEditReqType::setGatewayTxnId()
     * @uses PosCreditCPCEditReqType::setCPCData()
     * @param int $gatewayTxnId
     * @param \StructType\CPCDataType $cPCData
     */
    public function __construct($gatewayTxnId = null, \StructType\CPCDataType $cPCData = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setCPCData($cPCData);
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
     * @return \StructType\PosCreditCPCEditReqType
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
     * Get CPCData value
     * @return \StructType\CPCDataType|null
     */
    public function getCPCData()
    {
        return $this->CPCData;
    }
    /**
     * Set CPCData value
     * @param \StructType\CPCDataType $cPCData
     * @return \StructType\PosCreditCPCEditReqType
     */
    public function setCPCData(\StructType\CPCDataType $cPCData = null)
    {
        $this->CPCData = $cPCData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosCreditCPCEditReqType
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
