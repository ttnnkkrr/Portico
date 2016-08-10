<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosSendReceiptReqType StructType
 * @subpackage Structs
 */
class PosSendReceiptReqType extends AbstractStructBase
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
     * The Destinations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Destinations
     */
    public $Destinations;
    /**
     * Constructor method for PosSendReceiptReqType
     * @uses PosSendReceiptReqType::setGatewayTxnId()
     * @uses PosSendReceiptReqType::setDestinations()
     * @param int $gatewayTxnId
     * @param \StructType\Destinations $destinations
     */
    public function __construct($gatewayTxnId = null, \StructType\Destinations $destinations = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setDestinations($destinations);
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
     * @return \StructType\PosSendReceiptReqType
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
     * Get Destinations value
     * @return \StructType\Destinations|null
     */
    public function getDestinations()
    {
        return $this->Destinations;
    }
    /**
     * Set Destinations value
     * @param \StructType\Destinations $destinations
     * @return \StructType\PosSendReceiptReqType
     */
    public function setDestinations(\StructType\Destinations $destinations = null)
    {
        $this->Destinations = $destinations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosSendReceiptReqType
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
