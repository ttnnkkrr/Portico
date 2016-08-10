<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosManageUsersRspType StructType
 * @subpackage Structs
 */
class PosManageUsersRspType extends AbstractStructBase
{
    /**
     * The Users
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PosUserDetailRspType[]
     */
    public $Users;
    /**
     * The Device
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DeviceType[]
     */
    public $Device;
    /**
     * Constructor method for PosManageUsersRspType
     * @uses PosManageUsersRspType::setUsers()
     * @uses PosManageUsersRspType::setDevice()
     * @param \StructType\PosUserDetailRspType[] $users
     * @param \StructType\DeviceType[] $device
     */
    public function __construct(array $users = array(), array $device = array())
    {
        $this
            ->setUsers($users)
            ->setDevice($device);
    }
    /**
     * Get Users value
     * @return \StructType\PosUserDetailRspType[]|null
     */
    public function getUsers()
    {
        return $this->Users;
    }
    /**
     * Set Users value
     * @throws \InvalidArgumentException
     * @param \StructType\PosUserDetailRspType[] $users
     * @return \StructType\PosManageUsersRspType
     */
    public function setUsers(array $users = array())
    {
        foreach ($users as $posManageUsersRspTypeUsersItem) {
            // validation for constraint: itemType
            if (!$posManageUsersRspTypeUsersItem instanceof \StructType\PosUserDetailRspType) {
                throw new \InvalidArgumentException(sprintf('The Users property can only contain items of \StructType\PosUserDetailRspType, "%s" given', is_object($posManageUsersRspTypeUsersItem) ? get_class($posManageUsersRspTypeUsersItem) : gettype($posManageUsersRspTypeUsersItem)), __LINE__);
            }
        }
        $this->Users = $users;
        return $this;
    }
    /**
     * Add item to Users value
     * @throws \InvalidArgumentException
     * @param \StructType\PosUserDetailRspType $item
     * @return \StructType\PosManageUsersRspType
     */
    public function addToUsers(\StructType\PosUserDetailRspType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PosUserDetailRspType) {
            throw new \InvalidArgumentException(sprintf('The Users property can only contain items of \StructType\PosUserDetailRspType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Users[] = $item;
        return $this;
    }
    /**
     * Get Device value
     * @return \StructType\DeviceType[]|null
     */
    public function getDevice()
    {
        return $this->Device;
    }
    /**
     * Set Device value
     * @throws \InvalidArgumentException
     * @param \StructType\DeviceType[] $device
     * @return \StructType\PosManageUsersRspType
     */
    public function setDevice(array $device = array())
    {
        foreach ($device as $posManageUsersRspTypeDeviceItem) {
            // validation for constraint: itemType
            if (!$posManageUsersRspTypeDeviceItem instanceof \StructType\DeviceType) {
                throw new \InvalidArgumentException(sprintf('The Device property can only contain items of \StructType\DeviceType, "%s" given', is_object($posManageUsersRspTypeDeviceItem) ? get_class($posManageUsersRspTypeDeviceItem) : gettype($posManageUsersRspTypeDeviceItem)), __LINE__);
            }
        }
        $this->Device = $device;
        return $this;
    }
    /**
     * Add item to Device value
     * @throws \InvalidArgumentException
     * @param \StructType\DeviceType $item
     * @return \StructType\PosManageUsersRspType
     */
    public function addToDevice(\StructType\DeviceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DeviceType) {
            throw new \InvalidArgumentException(sprintf('The Device property can only contain items of \StructType\DeviceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Device[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosManageUsersRspType
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
