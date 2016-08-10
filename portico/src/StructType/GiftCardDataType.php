<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardDataType StructType
 * @subpackage Structs
 */
class GiftCardDataType extends AbstractStructBase
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
     * The TrackData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TrackData;
    /**
     * The CardNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbr;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The EncryptionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EncryptionDataType
     */
    public $EncryptionData;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for GiftCardDataType
     * @uses GiftCardDataType::setTokenValue()
     * @uses GiftCardDataType::setTrackData()
     * @uses GiftCardDataType::setCardNbr()
     * @uses GiftCardDataType::setAlias()
     * @uses GiftCardDataType::setEncryptionData()
     * @uses GiftCardDataType::setPIN()
     * @param string $tokenValue
     * @param string $trackData
     * @param string $cardNbr
     * @param string $alias
     * @param \StructType\EncryptionDataType $encryptionData
     * @param string $pIN
     */
    public function __construct($tokenValue = null, $trackData = null, $cardNbr = null, $alias = null, \StructType\EncryptionDataType $encryptionData = null, $pIN = null)
    {
        $this
            ->setTokenValue($tokenValue)
            ->setTrackData($trackData)
            ->setCardNbr($cardNbr)
            ->setAlias($alias)
            ->setEncryptionData($encryptionData)
            ->setPIN($pIN);
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
     * @return \StructType\GiftCardDataType
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
     * @return \StructType\GiftCardDataType
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
     * Get CardNbr value
     * @return string|null
     */
    public function getCardNbr()
    {
        return $this->CardNbr;
    }
    /**
     * Set CardNbr value
     * @param string $cardNbr
     * @return \StructType\GiftCardDataType
     */
    public function setCardNbr($cardNbr = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbr) && !is_string($cardNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbr)), __LINE__);
        }
        $this->CardNbr = $cardNbr;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\GiftCardDataType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
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
     * @return \StructType\GiftCardDataType
     */
    public function setEncryptionData(\StructType\EncryptionDataType $encryptionData = null)
    {
        $this->EncryptionData = $encryptionData;
        return $this;
    }
    /**
     * Get PIN value
     * @return string|null
     */
    public function getPIN()
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param string $pIN
     * @return \StructType\GiftCardDataType
     */
    public function setPIN($pIN = null)
    {
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pIN)), __LINE__);
        }
        $this->PIN = $pIN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardDataType
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
