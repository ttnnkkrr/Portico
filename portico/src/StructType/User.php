<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 */
class User extends AbstractStructBase
{
    /**
     * The DefaultDeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DefaultDeviceId;
    /**
     * The UserInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UserInfoRspType
     */
    public $UserInfo;
    /**
     * The DefaultMerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DefaultMerchNbr;
    /**
     * The DefaultPermissions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PermissionType[]
     */
    public $DefaultPermissions;
    /**
     * Constructor method for User
     * @uses User::setDefaultDeviceId()
     * @uses User::setUserInfo()
     * @uses User::setDefaultMerchNbr()
     * @uses User::setDefaultPermissions()
     * @param int $defaultDeviceId
     * @param \StructType\UserInfoRspType $userInfo
     * @param string $defaultMerchNbr
     * @param \StructType\PermissionType[] $defaultPermissions
     */
    public function __construct($defaultDeviceId = null, \StructType\UserInfoRspType $userInfo = null, $defaultMerchNbr = null, array $defaultPermissions = array())
    {
        $this
            ->setDefaultDeviceId($defaultDeviceId)
            ->setUserInfo($userInfo)
            ->setDefaultMerchNbr($defaultMerchNbr)
            ->setDefaultPermissions($defaultPermissions);
    }
    /**
     * Get DefaultDeviceId value
     * @return int
     */
    public function getDefaultDeviceId()
    {
        return $this->DefaultDeviceId;
    }
    /**
     * Set DefaultDeviceId value
     * @param int $defaultDeviceId
     * @return \StructType\User
     */
    public function setDefaultDeviceId($defaultDeviceId = null)
    {
        // validation for constraint: int
        if (!is_null($defaultDeviceId) && !is_numeric($defaultDeviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultDeviceId)), __LINE__);
        }
        $this->DefaultDeviceId = $defaultDeviceId;
        return $this;
    }
    /**
     * Get UserInfo value
     * @return \StructType\UserInfoRspType|null
     */
    public function getUserInfo()
    {
        return $this->UserInfo;
    }
    /**
     * Set UserInfo value
     * @param \StructType\UserInfoRspType $userInfo
     * @return \StructType\User
     */
    public function setUserInfo(\StructType\UserInfoRspType $userInfo = null)
    {
        $this->UserInfo = $userInfo;
        return $this;
    }
    /**
     * Get DefaultMerchNbr value
     * @return string|null
     */
    public function getDefaultMerchNbr()
    {
        return $this->DefaultMerchNbr;
    }
    /**
     * Set DefaultMerchNbr value
     * @param string $defaultMerchNbr
     * @return \StructType\User
     */
    public function setDefaultMerchNbr($defaultMerchNbr = null)
    {
        // validation for constraint: string
        if (!is_null($defaultMerchNbr) && !is_string($defaultMerchNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultMerchNbr)), __LINE__);
        }
        $this->DefaultMerchNbr = $defaultMerchNbr;
        return $this;
    }
    /**
     * Get DefaultPermissions value
     * @return \StructType\PermissionType[]|null
     */
    public function getDefaultPermissions()
    {
        return $this->DefaultPermissions;
    }
    /**
     * Set DefaultPermissions value
     * @throws \InvalidArgumentException
     * @param \StructType\PermissionType[] $defaultPermissions
     * @return \StructType\User
     */
    public function setDefaultPermissions(array $defaultPermissions = array())
    {
        foreach ($defaultPermissions as $userDefaultPermissionsItem) {
            // validation for constraint: itemType
            if (!$userDefaultPermissionsItem instanceof \StructType\PermissionType) {
                throw new \InvalidArgumentException(sprintf('The DefaultPermissions property can only contain items of \StructType\PermissionType, "%s" given', is_object($userDefaultPermissionsItem) ? get_class($userDefaultPermissionsItem) : gettype($userDefaultPermissionsItem)), __LINE__);
            }
        }
        $this->DefaultPermissions = $defaultPermissions;
        return $this;
    }
    /**
     * Add item to DefaultPermissions value
     * @throws \InvalidArgumentException
     * @param \StructType\PermissionType $item
     * @return \StructType\User
     */
    public function addToDefaultPermissions(\StructType\PermissionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PermissionType) {
            throw new \InvalidArgumentException(sprintf('The DefaultPermissions property can only contain items of \StructType\PermissionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DefaultPermissions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\User
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
