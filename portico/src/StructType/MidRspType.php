<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidRspType StructType
 * @subpackage Structs
 */
class MidRspType extends AbstractStructBase
{
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MerchNbrRspType
     */
    public $MerchNbr;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SiteRspType
     */
    public $Site;
    /**
     * The License
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LicenseRspType
     */
    public $License;
    /**
     * The Devices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DeviceRspType[]
     */
    public $Devices;
    /**
     * Constructor method for MidRspType
     * @uses MidRspType::setMerchNbr()
     * @uses MidRspType::setSite()
     * @uses MidRspType::setLicense()
     * @uses MidRspType::setDevices()
     * @param \StructType\MerchNbrRspType $merchNbr
     * @param \StructType\SiteRspType $site
     * @param \StructType\LicenseRspType $license
     * @param \StructType\DeviceRspType[] $devices
     */
    public function __construct(\StructType\MerchNbrRspType $merchNbr = null, \StructType\SiteRspType $site = null, \StructType\LicenseRspType $license = null, array $devices = array())
    {
        $this
            ->setMerchNbr($merchNbr)
            ->setSite($site)
            ->setLicense($license)
            ->setDevices($devices);
    }
    /**
     * Get MerchNbr value
     * @return \StructType\MerchNbrRspType|null
     */
    public function getMerchNbr()
    {
        return $this->MerchNbr;
    }
    /**
     * Set MerchNbr value
     * @param \StructType\MerchNbrRspType $merchNbr
     * @return \StructType\MidRspType
     */
    public function setMerchNbr(\StructType\MerchNbrRspType $merchNbr = null)
    {
        $this->MerchNbr = $merchNbr;
        return $this;
    }
    /**
     * Get Site value
     * @return \StructType\SiteRspType|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @param \StructType\SiteRspType $site
     * @return \StructType\MidRspType
     */
    public function setSite(\StructType\SiteRspType $site = null)
    {
        $this->Site = $site;
        return $this;
    }
    /**
     * Get License value
     * @return \StructType\LicenseRspType|null
     */
    public function getLicense()
    {
        return $this->License;
    }
    /**
     * Set License value
     * @param \StructType\LicenseRspType $license
     * @return \StructType\MidRspType
     */
    public function setLicense(\StructType\LicenseRspType $license = null)
    {
        $this->License = $license;
        return $this;
    }
    /**
     * Get Devices value
     * @return \StructType\DeviceRspType[]|null
     */
    public function getDevices()
    {
        return $this->Devices;
    }
    /**
     * Set Devices value
     * @throws \InvalidArgumentException
     * @param \StructType\DeviceRspType[] $devices
     * @return \StructType\MidRspType
     */
    public function setDevices(array $devices = array())
    {
        foreach ($devices as $midRspTypeDevicesItem) {
            // validation for constraint: itemType
            if (!$midRspTypeDevicesItem instanceof \StructType\DeviceRspType) {
                throw new \InvalidArgumentException(sprintf('The Devices property can only contain items of \StructType\DeviceRspType, "%s" given', is_object($midRspTypeDevicesItem) ? get_class($midRspTypeDevicesItem) : gettype($midRspTypeDevicesItem)), __LINE__);
            }
        }
        $this->Devices = $devices;
        return $this;
    }
    /**
     * Add item to Devices value
     * @throws \InvalidArgumentException
     * @param \StructType\DeviceRspType $item
     * @return \StructType\MidRspType
     */
    public function addToDevices(\StructType\DeviceRspType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DeviceRspType) {
            throw new \InvalidArgumentException(sprintf('The Devices property can only contain items of \StructType\DeviceRspType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Devices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MidRspType
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
