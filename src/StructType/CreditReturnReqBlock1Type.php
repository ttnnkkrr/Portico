<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditReturnReqBlock1Type StructType
 * @subpackage Structs
 */
class CreditReturnReqBlock1Type extends AbstractStructBase
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
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardDataType
     */
    public $CardData;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * The DirectMktData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DirectMktDataType
     */
    public $DirectMktData;
    /**
     * The AllowDup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowDup;
    /**
     * The Ecommerce
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ecommerce;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The SurchargeAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $SurchargeAmtInfo;
    /**
     * The EMVData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EMVDataType
     */
    public $EMVData;
    /**
     * The TagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagDataType
     */
    public $TagData;
    /**
     * Constructor method for CreditReturnReqBlock1Type
     * @uses CreditReturnReqBlock1Type::setAmt()
     * @uses CreditReturnReqBlock1Type::setGatewayTxnId()
     * @uses CreditReturnReqBlock1Type::setCardData()
     * @uses CreditReturnReqBlock1Type::setCardHolderData()
     * @uses CreditReturnReqBlock1Type::setDirectMktData()
     * @uses CreditReturnReqBlock1Type::setAllowDup()
     * @uses CreditReturnReqBlock1Type::setEcommerce()
     * @uses CreditReturnReqBlock1Type::setAdditionalTxnFields()
     * @uses CreditReturnReqBlock1Type::setSurchargeAmtInfo()
     * @uses CreditReturnReqBlock1Type::setEMVData()
     * @uses CreditReturnReqBlock1Type::setTagData()
     * @param float $amt
     * @param int $gatewayTxnId
     * @param \StructType\CardDataType $cardData
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param \StructType\DirectMktDataType $directMktData
     * @param string $allowDup
     * @param string $ecommerce
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param float $surchargeAmtInfo
     * @param \StructType\EMVDataType $eMVData
     * @param \StructType\TagDataType $tagData
     */
    public function __construct($amt = null, $gatewayTxnId = null, \StructType\CardDataType $cardData = null, \StructType\CardHolderDataType $cardHolderData = null, \StructType\DirectMktDataType $directMktData = null, $allowDup = null, $ecommerce = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, $surchargeAmtInfo = null, \StructType\EMVDataType $eMVData = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setAmt($amt)
            ->setGatewayTxnId($gatewayTxnId)
            ->setCardData($cardData)
            ->setCardHolderData($cardHolderData)
            ->setDirectMktData($directMktData)
            ->setAllowDup($allowDup)
            ->setEcommerce($ecommerce)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setEMVData($eMVData)
            ->setTagData($tagData);
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
     * @return \StructType\CreditReturnReqBlock1Type
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
     * @return \StructType\CreditReturnReqBlock1Type
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
     * Get CardData value
     * @return \StructType\CardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\CardDataType $cardData
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get CardHolderData value
     * @return \StructType\CardHolderDataType|null
     */
    public function getCardHolderData()
    {
        return $this->CardHolderData;
    }
    /**
     * Set CardHolderData value
     * @param \StructType\CardHolderDataType $cardHolderData
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
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
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setDirectMktData(\StructType\DirectMktDataType $directMktData = null)
    {
        $this->DirectMktData = $directMktData;
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
     * @return \StructType\CreditReturnReqBlock1Type
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
     * Get Ecommerce value
     * @return string|null
     */
    public function getEcommerce()
    {
        return $this->Ecommerce;
    }
    /**
     * Set Ecommerce value
     * @uses \EnumType\ECommerceType::valueIsValid()
     * @uses \EnumType\ECommerceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ecommerce
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setEcommerce($ecommerce = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ECommerceType::valueIsValid($ecommerce)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ecommerce, implode(', ', \EnumType\ECommerceType::getValidValues())), __LINE__);
        }
        $this->Ecommerce = $ecommerce;
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
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
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
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setSurchargeAmtInfo($surchargeAmtInfo = null)
    {
        $this->SurchargeAmtInfo = $surchargeAmtInfo;
        return $this;
    }
    /**
     * Get EMVData value
     * @return \StructType\EMVDataType|null
     */
    public function getEMVData()
    {
        return $this->EMVData;
    }
    /**
     * Set EMVData value
     * @param \StructType\EMVDataType $eMVData
     * @return \StructType\CreditReturnReqBlock1Type
     */
    public function setEMVData(\StructType\EMVDataType $eMVData = null)
    {
        $this->EMVData = $eMVData;
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
     * @return \StructType\CreditReturnReqBlock1Type
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
     * @return \StructType\CreditReturnReqBlock1Type
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
