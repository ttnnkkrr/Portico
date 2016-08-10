<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGetUserDeviceSettingsRspType StructType
 * @subpackage Structs
 */
class PosGetUserDeviceSettingsRspType extends AbstractStructBase
{
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchNbr;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfNameValuePairType
     */
    public $Site;
    /**
     * The Permissions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PermissionType[]
     */
    public $Permissions;
    /**
     * The Devices
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DeviceRspType[]
     */
    public $Devices;
    /**
     * Constructor method for PosGetUserDeviceSettingsRspType
     * @uses PosGetUserDeviceSettingsRspType::setMerchNbr()
     * @uses PosGetUserDeviceSettingsRspType::setSite()
     * @uses PosGetUserDeviceSettingsRspType::setPermissions()
     * @uses PosGetUserDeviceSettingsRspType::setDevices()
     * @param string $merchNbr
     * @param \ArrayType\ArrayOfNameValuePairType $site
     * @param \StructType\PermissionType[] $permissions
     * @param \StructType\DeviceRspType[] $devices
     */
    public function __construct($merchNbr = null, \ArrayType\ArrayOfNameValuePairType $site = null, array $permissions = array(), array $devices = array())
    {
        $this
            ->setMerchNbr($merchNbr)
            ->setSite($site)
            ->setPermissions($permissions)
            ->setDevices($devices);
    }
    /**
     * Get MerchNbr value
     * @return string|null
     */
    public function getMerchNbr()
    {
        return $this->MerchNbr;
    }
    /**
     * Set MerchNbr value
     * @param string $merchNbr
     * @return \StructType\PosGetUserDeviceSettingsRspType
     */
    public function setMerchNbr($merchNbr = null)
    {
        // validation for constraint: string
        if (!is_null($merchNbr) && !is_string($merchNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchNbr)), __LINE__);
        }
        $this->MerchNbr = $merchNbr;
        return $this;
    }
    /**
     * Get Site value
     * @return \ArrayType\ArrayOfNameValuePairType|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @param \ArrayType\ArrayOfNameValuePairType $site
     * @return \StructType\PosGetUserDeviceSettingsRspType
     */
    public function setSite(\ArrayType\ArrayOfNameValuePairType $site = null)
    {
        $this->Site = $site;
        return $this;
    }
    /**
     * Get Permissions value
     * @return \StructType\PermissionType[]|null
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }
    /**
     * Set Permissions value
     * @throws \InvalidArgumentException
     * @param \StructType\PermissionType[] $permissions
     * @return \StructType\PosGetUserDeviceSettingsRspType
     */
    public function setPermissions(array $permissions = array())
    {
        foreach ($permissions as $posGetUserDeviceSettingsRspTypePermissionsItem) {
            // validation for constraint: itemType
            if (!$posGetUserDeviceSettingsRspTypePermissionsItem instanceof \StructType\PermissionType) {
                throw new \InvalidArgumentException(sprintf('The Permissions property can only contain items of \StructType\PermissionType, "%s" given', is_object($posGetUserDeviceSettingsRspTypePermissionsItem) ? get_class($posGetUserDeviceSettingsRspTypePermissionsItem) : gettype($posGetUserDeviceSettingsRspTypePermissionsItem)), __LINE__);
            }
        }
        $this->Permissions = $permissions;
        return $this;
    }
    /**
     * Add item to Permissions value
     * @throws \InvalidArgumentException
     * @param \StructType\PermissionType $item
     * @return \StructType\PosGetUserDeviceSettingsRspType
     */
    public function addToPermissions(\StructType\PermissionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PermissionType) {
            throw new \InvalidArgumentException(sprintf('The Permissions property can only contain items of \StructType\PermissionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Permissions[] = $item;
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
     * @return \StructType\PosGetUserDeviceSettingsRspType
     */
    public function setDevices(array $devices = array())
    {
        foreach ($devices as $posGetUserDeviceSettingsRspTypeDevicesItem) {
            // validation for constraint: itemType
            if (!$posGetUserDeviceSettingsRspTypeDevicesItem instanceof \StructType\DeviceRspType) {
                throw new \InvalidArgumentException(sprintf('The Devices property can only contain items of \StructType\DeviceRspType, "%s" given', is_object($posGetUserDeviceSettingsRspTypeDevicesItem) ? get_class($posGetUserDeviceSettingsRspTypeDevicesItem) : gettype($posGetUserDeviceSettingsRspTypeDevicesItem)), __LINE__);
            }
        }
        $this->Devices = $devices;
        return $this;
    }
    /**
     * Add item to Devices value
     * @throws \InvalidArgumentException
     * @param \StructType\DeviceRspType $item
     * @return \StructType\PosGetUserDeviceSettingsRspType
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
     * @return \StructType\PosGetUserDeviceSettingsRspType
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
