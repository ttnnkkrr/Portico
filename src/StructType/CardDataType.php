<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardDataType StructType
 * @subpackage Structs
 */
class CardDataType extends AbstractStructBase
{
    /**
     * The TrackData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TrackData
     */
    public $TrackData;
    /**
     * The ManualEntry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ManualEntry
     */
    public $ManualEntry;
    /**
     * The TokenData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TokenData
     */
    public $TokenData;
    /**
     * The EncryptionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EncryptionDataType
     */
    public $EncryptionData;
    /**
     * The TokenRequest
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenRequest;
    /**
     * The TokenParameters
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TokenParametersType
     */
    public $TokenParameters;
    /**
     * Constructor method for CardDataType
     * @uses CardDataType::setTrackData()
     * @uses CardDataType::setManualEntry()
     * @uses CardDataType::setTokenData()
     * @uses CardDataType::setEncryptionData()
     * @uses CardDataType::setTokenRequest()
     * @uses CardDataType::setTokenParameters()
     * @param \StructType\TrackData $trackData
     * @param \StructType\ManualEntry $manualEntry
     * @param \StructType\TokenData $tokenData
     * @param \StructType\EncryptionDataType $encryptionData
     * @param string $tokenRequest
     * @param \StructType\TokenParametersType $tokenParameters
     */
    public function __construct(\StructType\TrackData $trackData = null, \StructType\ManualEntry $manualEntry = null, \StructType\TokenData $tokenData = null, \StructType\EncryptionDataType $encryptionData = null, $tokenRequest = 'N', \StructType\TokenParametersType $tokenParameters = null)
    {
        $this
            ->setTrackData($trackData)
            ->setManualEntry($manualEntry)
            ->setTokenData($tokenData)
            ->setEncryptionData($encryptionData)
            ->setTokenRequest($tokenRequest)
            ->setTokenParameters($tokenParameters);
    }
    /**
     * Get TrackData value
     * @return \StructType\TrackData|null
     */
    public function getTrackData()
    {
        return $this->TrackData;
    }
    /**
     * Set TrackData value
     * @param \StructType\TrackData $trackData
     * @return \StructType\CardDataType
     */
    public function setTrackData(\StructType\TrackData $trackData = null)
    {
        $this->TrackData = $trackData;
        return $this;
    }
    /**
     * Get ManualEntry value
     * @return \StructType\ManualEntry|null
     */
    public function getManualEntry()
    {
        return $this->ManualEntry;
    }
    /**
     * Set ManualEntry value
     * @param \StructType\ManualEntry $manualEntry
     * @return \StructType\CardDataType
     */
    public function setManualEntry(\StructType\ManualEntry $manualEntry = null)
    {
        $this->ManualEntry = $manualEntry;
        return $this;
    }
    /**
     * Get TokenData value
     * @return \StructType\TokenData|null
     */
    public function getTokenData()
    {
        return $this->TokenData;
    }
    /**
     * Set TokenData value
     * @param \StructType\TokenData $tokenData
     * @return \StructType\CardDataType
     */
    public function setTokenData(\StructType\TokenData $tokenData = null)
    {
        $this->TokenData = $tokenData;
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
     * @return \StructType\CardDataType
     */
    public function setEncryptionData(\StructType\EncryptionDataType $encryptionData = null)
    {
        $this->EncryptionData = $encryptionData;
        return $this;
    }
    /**
     * Get TokenRequest value
     * @return string|null
     */
    public function getTokenRequest()
    {
        return $this->TokenRequest;
    }
    /**
     * Set TokenRequest value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tokenRequest
     * @return \StructType\CardDataType
     */
    public function setTokenRequest($tokenRequest = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($tokenRequest)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tokenRequest, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->TokenRequest = $tokenRequest;
        return $this;
    }
    /**
     * Get TokenParameters value
     * @return \StructType\TokenParametersType|null
     */
    public function getTokenParameters()
    {
        return $this->TokenParameters;
    }
    /**
     * Set TokenParameters value
     * @param \StructType\TokenParametersType $tokenParameters
     * @return \StructType\CardDataType
     */
    public function setTokenParameters(\StructType\TokenParametersType $tokenParameters = null)
    {
        $this->TokenParameters = $tokenParameters;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CardDataType
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
