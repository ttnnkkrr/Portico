<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitSaleReqBlock1Type StructType
 * @subpackage Structs
 */
class DebitSaleReqBlock1Type extends AbstractStructBase
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
     * The TrackData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TrackData;
    /**
     * The PinBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PinBlock;
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * The CashbackAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $CashbackAmtInfo;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
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
     * The AllowPartialAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowPartialAuth;
    /**
     * The EncryptionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EncryptionDataType
     */
    public $EncryptionData;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * Constructor method for DebitSaleReqBlock1Type
     * @uses DebitSaleReqBlock1Type::setAmt()
     * @uses DebitSaleReqBlock1Type::setTrackData()
     * @uses DebitSaleReqBlock1Type::setPinBlock()
     * @uses DebitSaleReqBlock1Type::setTokenValue()
     * @uses DebitSaleReqBlock1Type::setCashbackAmtInfo()
     * @uses DebitSaleReqBlock1Type::setCardHolderData()
     * @uses DebitSaleReqBlock1Type::setAllowDup()
     * @uses DebitSaleReqBlock1Type::setLodgingData()
     * @uses DebitSaleReqBlock1Type::setAllowPartialAuth()
     * @uses DebitSaleReqBlock1Type::setEncryptionData()
     * @uses DebitSaleReqBlock1Type::setAdditionalTxnFields()
     * @param float $amt
     * @param string $trackData
     * @param string $pinBlock
     * @param string $tokenValue
     * @param float $cashbackAmtInfo
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $allowDup
     * @param \StructType\LodgingDataType $lodgingData
     * @param string $allowPartialAuth
     * @param \StructType\EncryptionDataType $encryptionData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     */
    public function __construct($amt = null, $trackData = null, $pinBlock = null, $tokenValue = null, $cashbackAmtInfo = null, \StructType\CardHolderDataType $cardHolderData = null, $allowDup = null, \StructType\LodgingDataType $lodgingData = null, $allowPartialAuth = null, \StructType\EncryptionDataType $encryptionData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this
            ->setAmt($amt)
            ->setTrackData($trackData)
            ->setPinBlock($pinBlock)
            ->setTokenValue($tokenValue)
            ->setCashbackAmtInfo($cashbackAmtInfo)
            ->setCardHolderData($cardHolderData)
            ->setAllowDup($allowDup)
            ->setLodgingData($lodgingData)
            ->setAllowPartialAuth($allowPartialAuth)
            ->setEncryptionData($encryptionData)
            ->setAdditionalTxnFields($additionalTxnFields);
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
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get TrackData value
     * @return string|null
     */
    public function getTrackData()
    {
        return $this->TrackData;
    }
    /**
     * Set TrackData value
     * @param string $trackData
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setTrackData($trackData = null)
    {
        // validation for constraint: string
        if (!is_null($trackData) && !is_string($trackData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackData)), __LINE__);
        }
        $this->TrackData = $trackData;
        return $this;
    }
    /**
     * Get PinBlock value
     * @return string|null
     */
    public function getPinBlock()
    {
        return $this->PinBlock;
    }
    /**
     * Set PinBlock value
     * @param string $pinBlock
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setPinBlock($pinBlock = null)
    {
        // validation for constraint: string
        if (!is_null($pinBlock) && !is_string($pinBlock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pinBlock)), __LINE__);
        }
        $this->PinBlock = $pinBlock;
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
     * @return \StructType\DebitSaleReqBlock1Type
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
     * Get CashbackAmtInfo value
     * @return float|null
     */
    public function getCashbackAmtInfo()
    {
        return $this->CashbackAmtInfo;
    }
    /**
     * Set CashbackAmtInfo value
     * @param float $cashbackAmtInfo
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setCashbackAmtInfo($cashbackAmtInfo = null)
    {
        $this->CashbackAmtInfo = $cashbackAmtInfo;
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
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
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
     * @return \StructType\DebitSaleReqBlock1Type
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
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setLodgingData(\StructType\LodgingDataType $lodgingData = null)
    {
        $this->LodgingData = $lodgingData;
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
     * @return \StructType\DebitSaleReqBlock1Type
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
     * Get EncryptionData value
     * @return \StructType\EncryptionDataType|null
     */
    public function getEncryptionData()
    {
        return $this->EncryptionData;
    }
    /**
     * Set EncryptionData value
     * @param \StructType\EncryptionDataType $encryptionData
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setEncryptionData(\StructType\EncryptionDataType $encryptionData = null)
    {
        $this->EncryptionData = $encryptionData;
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
     * @return \StructType\DebitSaleReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DebitSaleReqBlock1Type
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
