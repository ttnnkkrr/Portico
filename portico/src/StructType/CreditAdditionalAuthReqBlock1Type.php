<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditAdditionalAuthReqBlock1Type StructType
 * @subpackage Structs
 */
class CreditAdditionalAuthReqBlock1Type extends AbstractStructBase
{
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The AllowDup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowDup;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The TxnDescriptor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnDescriptor;
    /**
     * Constructor method for CreditAdditionalAuthReqBlock1Type
     * @uses CreditAdditionalAuthReqBlock1Type::setAmt()
     * @uses CreditAdditionalAuthReqBlock1Type::setGatewayTxnId()
     * @uses CreditAdditionalAuthReqBlock1Type::setAllowDup()
     * @uses CreditAdditionalAuthReqBlock1Type::setAdditionalTxnFields()
     * @uses CreditAdditionalAuthReqBlock1Type::setTxnDescriptor()
     * @param float $amt
     * @param int $gatewayTxnId
     * @param string $allowDup
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param string $txnDescriptor
     */
    public function __construct($amt = null, $gatewayTxnId = null, $allowDup = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, $txnDescriptor = null)
    {
        $this
            ->setAmt($amt)
            ->setGatewayTxnId($gatewayTxnId)
            ->setAllowDup($allowDup)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setTxnDescriptor($txnDescriptor);
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
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
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
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
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
     * Get AllowDup value
     * @return string|null
     */
    public function getAllowDup()
    {
        return $this->AllowDup;
    }
    /**
     * Set AllowDup value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowDup
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
     */
    public function setAllowDup($allowDup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($allowDup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowDup, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->AllowDup = $allowDup;
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
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get TxnDescriptor value
     * @return string|null
     */
    public function getTxnDescriptor()
    {
        return $this->TxnDescriptor;
    }
    /**
     * Set TxnDescriptor value
     * @param string $txnDescriptor
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
     */
    public function setTxnDescriptor($txnDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($txnDescriptor) && !is_string($txnDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnDescriptor)), __LINE__);
        }
        $this->TxnDescriptor = $txnDescriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CreditAdditionalAuthReqBlock1Type
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
