<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosUserDetailRspType StructType
 * @subpackage Structs
 */
class PosUserDetailRspType extends AbstractStructBase
{
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Roles
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RoleRspType[]
     */
    public $Roles;
    /**
     * Constructor method for PosUserDetailRspType
     * @uses PosUserDetailRspType::setUserName()
     * @uses PosUserDetailRspType::setDisplayName()
     * @uses PosUserDetailRspType::setFirstName()
     * @uses PosUserDetailRspType::setLastName()
     * @uses PosUserDetailRspType::setEmailAddress()
     * @uses PosUserDetailRspType::setRoles()
     * @param string $userName
     * @param string $displayName
     * @param string $firstName
     * @param string $lastName
     * @param string $emailAddress
     * @param \StructType\RoleRspType[] $roles
     */
    public function __construct($userName = null, $displayName = null, $firstName = null, $lastName = null, $emailAddress = null, array $roles = array())
    {
        $this
            ->setUserName($userName)
            ->setDisplayName($displayName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmailAddress($emailAddress)
            ->setRoles($roles);
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \StructType\PosUserDetailRspType
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\PosUserDetailRspType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\PosUserDetailRspType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\PosUserDetailRspType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\PosUserDetailRspType
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Roles value
     * @return \StructType\RoleRspType[]|null
     */
    public function getRoles()
    {
        return $this->Roles;
    }
    /**
     * Set Roles value
     * @throws \InvalidArgumentException
     * @param \StructType\RoleRspType[] $roles
     * @return \StructType\PosUserDetailRspType
     */
    public function setRoles(array $roles = array())
    {
        foreach ($roles as $posUserDetailRspTypeRolesItem) {
            // validation for constraint: itemType
            if (!$posUserDetailRspTypeRolesItem instanceof \StructType\RoleRspType) {
                throw new \InvalidArgumentException(sprintf('The Roles property can only contain items of \StructType\RoleRspType, "%s" given', is_object($posUserDetailRspTypeRolesItem) ? get_class($posUserDetailRspTypeRolesItem) : gettype($posUserDetailRspTypeRolesItem)), __LINE__);
            }
        }
        $this->Roles = $roles;
        return $this;
    }
    /**
     * Add item to Roles value
     * @throws \InvalidArgumentException
     * @param \StructType\RoleRspType $item
     * @return \StructType\PosUserDetailRspType
     */
    public function addToRoles(\StructType\RoleRspType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RoleRspType) {
            throw new \InvalidArgumentException(sprintf('The Roles property can only contain items of \StructType\RoleRspType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Roles[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosUserDetailRspType
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
