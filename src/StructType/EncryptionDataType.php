<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptionDataType StructType
 * @subpackage Structs
 */
class EncryptionDataType extends AbstractStructBase
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * The EncryptedTrackNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EncryptedTrackNumber;
    /**
     * The KTB
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $KTB;
    /**
     * The KSN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $KSN;
    /**
     * Constructor method for EncryptionDataType
     * @uses EncryptionDataType::setVersion()
     * @uses EncryptionDataType::setEncryptedTrackNumber()
     * @uses EncryptionDataType::setKTB()
     * @uses EncryptionDataType::setKSN()
     * @param string $version
     * @param string $encryptedTrackNumber
     * @param string $kTB
     * @param string $kSN
     */
    public function __construct($version = null, $encryptedTrackNumber = null, $kTB = null, $kSN = null)
    {
        $this
            ->setVersion($version)
            ->setEncryptedTrackNumber($encryptedTrackNumber)
            ->setKTB($kTB)
            ->setKSN($kSN);
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\EncryptionDataType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get EncryptedTrackNumber value
     * @return string|null
     */
    public function getEncryptedTrackNumber()
    {
        return $this->EncryptedTrackNumber;
    }
    /**
     * Set EncryptedTrackNumber value
     * @param string $encryptedTrackNumber
     * @return \StructType\EncryptionDataType
     */
    public function setEncryptedTrackNumber($encryptedTrackNumber = null)
    {
        // validation for constraint: string
        if (!is_null($encryptedTrackNumber) && !is_string($encryptedTrackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptedTrackNumber)), __LINE__);
        }
        $this->EncryptedTrackNumber = $encryptedTrackNumber;
        return $this;
    }
    /**
     * Get KTB value
     * @return string|null
     */
    public function getKTB()
    {
        return $this->KTB;
    }
    /**
     * Set KTB value
     * @param string $kTB
     * @return \StructType\EncryptionDataType
     */
    public function setKTB($kTB = null)
    {
        // validation for constraint: string
        if (!is_null($kTB) && !is_string($kTB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kTB)), __LINE__);
        }
        $this->KTB = $kTB;
        return $this;
    }
    /**
     * Get KSN value
     * @return string|null
     */
    public function getKSN()
    {
        return $this->KSN;
    }
    /**
     * Set KSN value
     * @param string $kSN
     * @return \StructType\EncryptionDataType
     */
    public function setKSN($kSN = null)
    {
        // validation for constraint: string
        if (!is_null($kSN) && !is_string($kSN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kSN)), __LINE__);
        }
        $this->KSN = $kSN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EncryptionDataType
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
