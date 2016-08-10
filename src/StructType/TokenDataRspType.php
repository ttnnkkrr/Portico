<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenDataRspType StructType
 * @subpackage Structs
 */
class TokenDataRspType extends AbstractStructBase
{
    /**
     * The TokenRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TokenRspCode;
    /**
     * The TokenRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenRspMsg;
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * Constructor method for TokenDataRspType
     * @uses TokenDataRspType::setTokenRspCode()
     * @uses TokenDataRspType::setTokenRspMsg()
     * @uses TokenDataRspType::setTokenValue()
     * @param int $tokenRspCode
     * @param string $tokenRspMsg
     * @param string $tokenValue
     */
    public function __construct($tokenRspCode = null, $tokenRspMsg = null, $tokenValue = null)
    {
        $this
            ->setTokenRspCode($tokenRspCode)
            ->setTokenRspMsg($tokenRspMsg)
            ->setTokenValue($tokenValue);
    }
    /**
     * Get TokenRspCode value
     * @return int|null
     */
    public function getTokenRspCode()
    {
        return $this->TokenRspCode;
    }
    /**
     * Set TokenRspCode value
     * @param int $tokenRspCode
     * @return \StructType\TokenDataRspType
     */
    public function setTokenRspCode($tokenRspCode = null)
    {
        // validation for constraint: int
        if (!is_null($tokenRspCode) && !is_numeric($tokenRspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tokenRspCode)), __LINE__);
        }
        $this->TokenRspCode = $tokenRspCode;
        return $this;
    }
    /**
     * Get TokenRspMsg value
     * @return string|null
     */
    public function getTokenRspMsg()
    {
        return $this->TokenRspMsg;
    }
    /**
     * Set TokenRspMsg value
     * @param string $tokenRspMsg
     * @return \StructType\TokenDataRspType
     */
    public function setTokenRspMsg($tokenRspMsg = null)
    {
        // validation for constraint: string
        if (!is_null($tokenRspMsg) && !is_string($tokenRspMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenRspMsg)), __LINE__);
        }
        $this->TokenRspMsg = $tokenRspMsg;
        return $this;
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\TokenDataRspType
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TokenDataRspType
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
