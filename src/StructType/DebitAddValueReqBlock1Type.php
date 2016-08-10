<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitAddValueReqBlock1Type StructType
 * @subpackage Structs
 */
class DebitAddValueReqBlock1Type extends AbstractStructBase
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
     * Constructor method for DebitAddValueReqBlock1Type
     * @uses DebitAddValueReqBlock1Type::setAmt()
     * @uses DebitAddValueReqBlock1Type::setTrackData()
     * @uses DebitAddValueReqBlock1Type::setPinBlock()
     * @uses DebitAddValueReqBlock1Type::setCardHolderData()
     * @uses DebitAddValueReqBlock1Type::setAllowDup()
     * @uses DebitAddValueReqBlock1Type::setEncryptionData()
     * @uses DebitAddValueReqBlock1Type::setAdditionalTxnFields()
     * @param float $amt
     * @param string $trackData
     * @param string $pinBlock
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $allowDup
     * @param \StructType\EncryptionDataType $encryptionData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     */
    public function __construct($amt = null, $trackData = null, $pinBlock = null, \StructType\CardHolderDataType $cardHolderData = null, $allowDup = null, \StructType\EncryptionDataType $encryptionData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this
            ->setAmt($amt)
            ->setTrackData($trackData)
            ->setPinBlock($pinBlock)
            ->setCardHolderData($cardHolderData)
            ->setAllowDup($allowDup)
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
     * @return \StructType\DebitAddValueReqBlock1Type
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
