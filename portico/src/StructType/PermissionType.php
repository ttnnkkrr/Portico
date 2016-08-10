<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermissionType StructType
 * @subpackage Structs
 */
class PermissionType extends AbstractStructBase
{
    /**
     * The Permission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Permission;
    /**
     * Constructor method for PermissionType
     * @uses PermissionType::setPermission()
     * @param string $permission
     */
    public function __construct($permission = null)
    {
        $this
            ->setPermission($permission);
    }
    /**
     * Get Permission value
     * @return string|null
     */
    public function getPermission()
    {
        return $this->Permission;
    }
    /**
     * Set Permission value
     * @param string $permission
     * @return \StructType\PermissionType
     */
    public function setPermission($permission = null)
    {
        // validation for constraint: string
        if (!is_null($permission) && !is_string($permission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($permission)), __LINE__);
        }
        $this->Permission = $permission;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PermissionType
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
