<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditOfflineAuthReqBlock1Type StructType
 * @subpackage Structs
 */
class CreditOfflineAuthReqBlock1Type extends AbstractStructBase
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
     * The OfflineAuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OfflineAuthCode;
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
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The Ecommerce
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ecommerce;
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
     * Constructor method for CreditOfflineAuthReqBlock1Type
     * @uses CreditOfflineAuthReqBlock1Type::setAmt()
     * @uses CreditOfflineAuthReqBlock1Type::setCardData()
     * @uses CreditOfflineAuthReqBlock1Type::setGratuityAmtInfo()
     * @uses CreditOfflineAuthReqBlock1Type::setCPCReq()
     * @uses CreditOfflineAuthReqBlock1Type::setOfflineAuthCode()
     * @uses CreditOfflineAuthReqBlock1Type::setCardHolderData()
     * @uses CreditOfflineAuthReqBlock1Type::setDirectMktData()
     * @uses CreditOfflineAuthReqBlock1Type::setAllowDup()
     * @uses CreditOfflineAuthReqBlock1Type::setLodgingData()
     * @uses CreditOfflineAuthReqBlock1Type::setAutoSubstantiation()
     * @uses CreditOfflineAuthReqBlock1Type::setAdditionalTxnFields()
     * @uses CreditOfflineAuthReqBlock1Type::setEcommerce()
     * @uses CreditOfflineAuthReqBlock1Type::setConvenienceAmtInfo()
     * @uses CreditOfflineAuthReqBlock1Type::setShippingAmtInfo()
     * @uses CreditOfflineAuthReqBlock1Type::setSurchargeAmtInfo()
     * @uses CreditOfflineAuthReqBlock1Type::setEMVTagData()
     * @uses CreditOfflineAuthReqBlock1Type::setTagData()
     * @param float $amt
     * @param \StructType\CardDataType $cardData
     * @param float $gratuityAmtInfo
     * @param string $cPCReq
     * @param string $offlineAuthCode
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param \StructType\DirectMktDataType $directMktData
     * @param string $allowDup
     * @param \StructType\LodgingDataType $lodgingData
     * @param \StructType\AutoSubstantiationType $autoSubstantiation
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param string $ecommerce
     * @param float $convenienceAmtInfo
     * @param float $shippingAmtInfo
     * @param float $surchargeAmtInfo
     * @param string $eMVTagData
     * @param \StructType\TagDataType $tagData
     */
    public function __construct($amt = null, \StructType\CardDataType $cardData = null, $gratuityAmtInfo = null, $cPCReq = null, $offlineAuthCode = null, \StructType\CardHolderDataType $cardHolderData = null, \StructType\DirectMktDataType $directMktData = null, $allowDup = null, \StructType\LodgingDataType $lodgingData = null, \StructType\AutoSubstantiationType $autoSubstantiation = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, $ecommerce = null, $convenienceAmtInfo = null, $shippingAmtInfo = null, $surchargeAmtInfo = null, $eMVTagData = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setCPCReq($cPCReq)
            ->setOfflineAuthCode($offlineAuthCode)
            ->setCardHolderData($cardHolderData)
            ->setDirectMktData($directMktData)
            ->setAllowDup($allowDup)
            ->setLodgingData($lodgingData)
            ->setAutoSubstantiation($autoSubstantiation)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setEcommerce($ecommerce)
            ->setConvenienceAmtInfo($convenienceAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setEMVTagData($eMVTagData)
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * Get OfflineAuthCode value
     * @return string|null
     */
    public function getOfflineAuthCode()
    {
        return $this->OfflineAuthCode;
    }
    /**
     * Set OfflineAuthCode value
     * @param string $offlineAuthCode
     * @return \StructType\CreditOfflineAuthReqBlock1Type
     */
    public function setOfflineAuthCode($offlineAuthCode = null)
    {
        // validation for constraint: string
        if (!is_null($offlineAuthCode) && !is_string($offlineAuthCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offlineAuthCode)), __LINE__);
        }
        $this->OfflineAuthCode = $offlineAuthCode;
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
     */
    public function setAutoSubstantiation(\StructType\AutoSubstantiationType $autoSubstantiation = null)
    {
        $this->AutoSubstantiation = $autoSubstantiation;
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
     */
    public function setShippingAmtInfo($shippingAmtInfo = null)
    {
        $this->ShippingAmtInfo = $shippingAmtInfo;
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
     * @return \StructType\CreditOfflineAuthReqBlock1Type
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
