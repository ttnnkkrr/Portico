<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeviceType StructType
 * @subpackage Structs
 */
class DeviceType extends AbstractStructBase
{
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeviceId;
    /**
     * The DeviceTypeId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeviceTypeId;
    /**
     * The IndustryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IndustryCode;
    /**
     * The DeviceDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeviceDescription;
    /**
     * The CheckProcessor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckProcessor;
    /**
     * The CheckSEC
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CheckSEC;
    /**
     * The PDLNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PDLNotification;
    /**
     * Constructor method for DeviceType
     * @uses DeviceType::setDeviceId()
     * @uses DeviceType::setDeviceTypeId()
     * @uses DeviceType::setIndustryCode()
     * @uses DeviceType::setDeviceDescription()
     * @uses DeviceType::setCheckProcessor()
     * @uses DeviceType::setCheckSEC()
     * @uses DeviceType::setPDLNotification()
     * @param int $deviceId
     * @param int $deviceTypeId
     * @param string $industryCode
     * @param string $deviceDescription
     * @param string $checkProcessor
     * @param string[] $checkSEC
     * @param string $pDLNotification
     */
    public function __construct($deviceId = null, $deviceTypeId = null, $industryCode = null, $deviceDescription = null, $checkProcessor = null, array $checkSEC = array(), $pDLNotification = null)
    {
        $this
            ->setDeviceId($deviceId)
            ->setDeviceTypeId($deviceTypeId)
            ->setIndustryCode($industryCode)
            ->setDeviceDescription($deviceDescription)
            ->setCheckProcessor($checkProcessor)
            ->setCheckSEC($checkSEC)
            ->setPDLNotification($pDLNotification);
    }
    /**
     * Get DeviceId value
     * @return int
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\DeviceType
     */
    public function setDeviceId($deviceId = null)
    {
        // validation for constraint: int
        if (!is_null($deviceId) && !is_numeric($deviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deviceId)), __LINE__);
        }
        $this->DeviceId = $deviceId;
        return $this;
    }
    /**
     * Get DeviceTypeId value
     * @return int
     */
    public function getDeviceTypeId()
    {
        return $this->DeviceTypeId;
    }
    /**
     * Set DeviceTypeId value
     * @param int $deviceTypeId
     * @return \StructType\DeviceType
     */
    public function setDeviceTypeId($deviceTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($deviceTypeId) && !is_numeric($deviceTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deviceTypeId)), __LINE__);
        }
        $this->DeviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Get IndustryCode value
     * @return string|null
     */
    public function getIndustryCode()
    {
        return $this->IndustryCode;
    }
    /**
     * Set IndustryCode value
     * @param string $industryCode
     * @return \StructType\DeviceType
     */
    public function setIndustryCode($industryCode = null)
    {
        // validation for constraint: string
        if (!is_null($industryCode) && !is_string($industryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($industryCode)), __LINE__);
        }
        $this->IndustryCode = $industryCode;
        return $this;
    }
    /**
     * Get DeviceDescription value
     * @return string|null
     */
    public function getDeviceDescription()
    {
        return $this->DeviceDescription;
    }
    /**
     * Set DeviceDescription value
     * @param string $deviceDescription
     * @return \StructType\DeviceType
     */
    public function setDeviceDescription($deviceDescription = null)
    {
        // validation for constraint: string
        if (!is_null($deviceDescription) && !is_string($deviceDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deviceDescription)), __LINE__);
        }
        $this->DeviceDescription = $deviceDescription;
        return $this;
    }
    /**
     * Get CheckProcessor value
     * @return string|null
     */
    public function getCheckProcessor()
    {
        return $this->CheckProcessor;
    }
    /**
     * Set CheckProcessor value
     * @param string $checkProcessor
     * @return \StructType\DeviceType
     */
    public function setCheckProcessor($checkProcessor = null)
    {
        // validation for constraint: string
        if (!is_null($checkProcessor) && !is_string($checkProcessor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkProcessor)), __LINE__);
        }
        $this->CheckProcessor = $checkProcessor;
        return $this;
    }
    /**
     * Get CheckSEC value
     * @return string[]|null
     */
    public function getCheckSEC()
    {
        return $this->CheckSEC;
    }
    /**
     * Set CheckSEC value
     * @throws \InvalidArgumentException
     * @param string[] $checkSEC
     * @return \StructType\DeviceType
     */
    public function setCheckSEC(array $checkSEC = array())
    {
        foreach ($checkSEC as $deviceTypeCheckSECItem) {
            // validation for constraint: itemType
            if (!is_string($deviceTypeCheckSECItem)) {
                throw new \InvalidArgumentException(sprintf('The CheckSEC property can only contain items of string, "%s" given', is_object($deviceTypeCheckSECItem) ? get_class($deviceTypeCheckSECItem) : gettype($deviceTypeCheckSECItem)), __LINE__);
            }
        }
        $this->CheckSEC = $checkSEC;
        return $this;
    }
    /**
     * Add item to CheckSEC value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\DeviceType
     */
    public function addToCheckSEC($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CheckSEC property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CheckSEC[] = $item;
        return $this;
    }
    /**
     * Get PDLNotification value
     * @return string|null
     */
    public function getPDLNotification()
    {
        return $this->PDLNotification;
    }
    /**
     * Set PDLNotification value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pDLNotification
     * @return \StructType\DeviceType
     */
    public function setPDLNotification($pDLNotification = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($pDLNotification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pDLNotification, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->PDLNotification = $pDLNotification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeviceType
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
