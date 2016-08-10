<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageTokensReqType StructType
 * @subpackage Structs
 */
class ManageTokensReqType extends AbstractStructBase
{
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * The TokenActions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TokenActions
     */
    public $TokenActions;
    /**
     * Constructor method for ManageTokensReqType
     * @uses ManageTokensReqType::setTokenValue()
     * @uses ManageTokensReqType::setTokenActions()
     * @param string $tokenValue
     * @param \StructType\TokenActions $tokenActions
     */
    public function __construct($tokenValue = null, \StructType\TokenActions $tokenActions = null)
    {
        $this
            ->setTokenValue($tokenValue)
            ->setTokenActions($tokenActions);
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
     * @return \StructType\ManageTokensReqType
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
     * Get TokenActions value
     * @return \StructType\TokenActions|null
     */
    public function getTokenActions()
    {
        return $this->TokenActions;
    }
    /**
     * Set TokenActions value
     * @param \StructType\TokenActions $tokenActions
     * @return \StructType\ManageTokensReqType
     */
    public function setTokenActions(\StructType\TokenActions $tokenActions = null)
    {
        $this->TokenActions = $tokenActions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ManageTokensReqType
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
