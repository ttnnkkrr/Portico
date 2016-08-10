<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditSaleReqBlock1Type StructType
 * @subpackage Structs
 */
class CreditSaleReqBlock1Type extends AbstractStructBase
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
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The CPCReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCReq;
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
     * The LodgingData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LodgingDataType
     */
    public $LodgingData;
    /**
     * The AutoSubstantiation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AutoSubstantiationType
     */
    public $AutoSubstantiation;
    /**
     * The AllowPartialAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowPartialAuth;
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
     * The OrigTxnRefData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OrigTxnRefDataType
     */
    public $OrigTxnRefData;
    /**
     * The ConvenienceAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ConvenienceAmtInfo;
    /**
     * The ShippingAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ShippingAmtInfo;
    /**
     * The TxnDescriptor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnDescriptor;
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
     * The SecureECommerce
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SecureECommerceType
     */
    public $SecureECommerce;
    /**
     * The TagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagDataType
     */
    public $TagData;
    /**
     * Constructor method for CreditSaleReqBlock1Type
     * @uses CreditSaleReqBlock1Type::setAmt()
     * @uses CreditSaleReqBlock1Type::setGatewayTxnId()
     * @uses CreditSaleReqBlock1Type::setCardData()
     * @uses CreditSaleReqBlock1Type::setGratuityAmtInfo()
     * @uses CreditSaleReqBlock1Type::setCPCReq()
     * @uses CreditSaleReqBlock1Type::setCardHolderData()
     * @uses CreditSaleReqBlock1Type::setDirectMktData()
     * @uses CreditSaleReqBlock1Type::setAllowDup()
     * @uses CreditSaleReqBlock1Type::setLodgingData()
     * @uses CreditSaleReqBlock1Type::setAutoSubstantiation()
     * @uses CreditSaleReqBlock1Type::setAllowPartialAuth()
     * @uses CreditSaleReqBlock1Type::setEcommerce()
     * @uses CreditSaleReqBlock1Type::setAdditionalTxnFields()
     * @uses CreditSaleReqBlock1Type::setOrigTxnRefData()
     * @uses CreditSaleReqBlock1Type::setConvenienceAmtInfo()
     * @uses CreditSaleReqBlock1Type::setShippingAmtInfo()
     * @uses CreditSaleReqBlock1Type::setTxnDescriptor()
     * @uses CreditSaleReqBlock1Type::setSurchargeAmtInfo()
     * @uses CreditSaleReqBlock1Type::setEMVData()
     * @uses CreditSaleReqBlock1Type::setSecureECommerce()
     * @uses CreditSaleReqBlock1Type::setTagData()
     * @param float $amt
     * @param int $gatewayTxnId
     * @param \StructType\CardDataType $cardData
     * @param float $gratuityAmtInfo
     * @param string $cPCReq
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param \StructType\DirectMktDataType $directMktData
     * @param string $allowDup
     * @param \StructType\LodgingDataType $lodgingData
     * @param \StructType\AutoSubstantiationType $autoSubstantiation
     * @param string $allowPartialAuth
     * @param string $ecommerce
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param \StructType\OrigTxnRefDataType $origTxnRefData
     * @param float $convenienceAmtInfo
     * @param float $shippingAmtInfo
     * @param string $txnDescriptor
     * @param float $surchargeAmtInfo
     * @param \StructType\EMVDataType $eMVData
     * @param \StructType\SecureECommerceType $secureECommerce
     * @param \StructType\TagDataType $tagData
     */
    public function __construct($amt = null, $gatewayTxnId = null, \StructType\CardDataType $cardData = null, $gratuityAmtInfo = null, $cPCReq = null, \StructType\CardHolderDataType $cardHolderData = null, \StructType\DirectMktDataType $directMktData = null, $allowDup = null, \StructType\LodgingDataType $lodgingData = null, \StructType\AutoSubstantiationType $autoSubstantiation = null, $allowPartialAuth = null, $ecommerce = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, \StructType\OrigTxnRefDataType $origTxnRefData = null, $convenienceAmtInfo = null, $shippingAmtInfo = null, $txnDescriptor = null, $surchargeAmtInfo = null, \StructType\EMVDataType $eMVData = null, \StructType\SecureECommerceType $secureECommerce = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setAmt($amt)
            ->setGatewayTxnId($gatewayTxnId)
            ->setCardData($cardData)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setCPCReq($cPCReq)
            ->setCardHolderData($cardHolderData)
            ->setDirectMktData($directMktData)
            ->setAllowDup($allowDup)
            ->setLodgingData($lodgingData)
            ->setAutoSubstantiation($autoSubstantiation)
            ->setAllowPartialAuth($allowPartialAuth)
            ->setEcommerce($ecommerce)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setOrigTxnRefData($origTxnRefData)
            ->setConvenienceAmtInfo($convenienceAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setTxnDescriptor($txnDescriptor)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setEMVData($eMVData)
            ->setSecureECommerce($secureECommerce)
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
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
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
        return $this;
    }
    /**
     * Get CPCReq value
     * @return string|null
     */
    public function getCPCReq()
    {
        return $this->CPCReq;
    }
    /**
     * Set CPCReq value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cPCReq
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setCPCReq($cPCReq = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($cPCReq)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cPCReq, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->CPCReq = $cPCReq;
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * Get LodgingData value
     * @return \StructType\LodgingDataType|null
     */
    public function getLodgingData()
    {
        return $this->LodgingData;
    }
    /**
     * Set LodgingData value
     * @param \StructType\LodgingDataType $lodgingData
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setLodgingData(\StructType\LodgingDataType $lodgingData = null)
    {
        $this->LodgingData = $lodgingData;
        return $this;
    }
    /**
     * Get AutoSubstantiation value
     * @return \StructType\AutoSubstantiationType|null
     */
    public function getAutoSubstantiation()
    {
        return $this->AutoSubstantiation;
    }
    /**
     * Set AutoSubstantiation value
     * @param \StructType\AutoSubstantiationType $autoSubstantiation
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setAutoSubstantiation(\StructType\AutoSubstantiationType $autoSubstantiation = null)
    {
        $this->AutoSubstantiation = $autoSubstantiation;
        return $this;
    }
    /**
     * Get AllowPartialAuth value
     * @return string|null
     */
    public function getAllowPartialAuth()
    {
        return $this->AllowPartialAuth;
    }
    /**
     * Set AllowPartialAuth value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowPartialAuth
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setAllowPartialAuth($allowPartialAuth = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($allowPartialAuth)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowPartialAuth, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->AllowPartialAuth = $allowPartialAuth;
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get OrigTxnRefData value
     * @return \StructType\OrigTxnRefDataType|null
     */
    public function getOrigTxnRefData()
    {
        return $this->OrigTxnRefData;
    }
    /**
     * Set OrigTxnRefData value
     * @param \StructType\OrigTxnRefDataType $origTxnRefData
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setOrigTxnRefData(\StructType\OrigTxnRefDataType $origTxnRefData = null)
    {
        $this->OrigTxnRefData = $origTxnRefData;
        return $this;
    }
    /**
     * Get ConvenienceAmtInfo value
     * @return float|null
     */
    public function getConvenienceAmtInfo()
    {
        return $this->ConvenienceAmtInfo;
    }
    /**
     * Set ConvenienceAmtInfo value
     * @param float $convenienceAmtInfo
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setConvenienceAmtInfo($convenienceAmtInfo = null)
    {
        $this->ConvenienceAmtInfo = $convenienceAmtInfo;
        return $this;
    }
    /**
     * Get ShippingAmtInfo value
     * @return float|null
     */
    public function getShippingAmtInfo()
    {
        return $this->ShippingAmtInfo;
    }
    /**
     * Set ShippingAmtInfo value
     * @param float $shippingAmtInfo
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setShippingAmtInfo($shippingAmtInfo = null)
    {
        $this->ShippingAmtInfo = $shippingAmtInfo;
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setEMVData(\StructType\EMVDataType $eMVData = null)
    {
        $this->EMVData = $eMVData;
        return $this;
    }
    /**
     * Get SecureECommerce value
     * @return \StructType\SecureECommerceType|null
     */
    public function getSecureECommerce()
    {
        return $this->SecureECommerce;
    }
    /**
     * Set SecureECommerce value
     * @param \StructType\SecureECommerceType $secureECommerce
     * @return \StructType\CreditSaleReqBlock1Type
     */
    public function setSecureECommerce(\StructType\SecureECommerceType $secureECommerce = null)
    {
        $this->SecureECommerce = $secureECommerce;
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
     * @return \StructType\CreditSaleReqBlock1Type
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
     * @return \StructType\CreditSaleReqBlock1Type
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
