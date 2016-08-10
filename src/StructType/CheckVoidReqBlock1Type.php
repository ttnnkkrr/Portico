<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckVoidReqBlock1Type StructType
 * @subpackage Structs
 */
class CheckVoidReqBlock1Type extends AbstractStructBase
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
     * The ClientTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ClientTxnId;
    /**
     * Constructor method for CheckVoidReqBlock1Type
     * @uses CheckVoidReqBlock1Type::setGatewayTxnId()
     * @uses CheckVoidReqBlock1Type::setClientTxnId()
     * @param int $gatewayTxnId
     * @param int $clientTxnId
     */
    public function __construct($gatewayTxnId = null, $clientTxnId = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setClientTxnId($clientTxnId);
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
     * @return \StructType\CheckVoidReqBlock1Type
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
     * Get ClientTxnId value
     * @return int|null
     */
    public function getClientTxnId()
    {
        return $this->ClientTxnId;
    }
    /**
     * Set ClientTxnId value
     * @param int $clientTxnId
     * @return \StructType\CheckVoidReqBlock1Type
     */
    public function setClientTxnId($clientTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($clientTxnId) && !is_numeric($clientTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clientTxnId)), __LINE__);
        }
        $this->ClientTxnId = $clientTxnId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CheckVoidReqBlock1Type
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
