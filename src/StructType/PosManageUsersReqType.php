<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosManageUsersReqType StructType
 * @subpackage Structs
 */
class PosManageUsersReqType extends AbstractStructBase
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
     * The UserActions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UserActions
     */
    public $UserActions;
    /**
     * Constructor method for PosManageUsersReqType
     * @uses PosManageUsersReqType::setMerchNbr()
     * @uses PosManageUsersReqType::setUserActions()
     * @param string $merchNbr
     * @param \StructType\UserActions $userActions
     */
    public function __construct($merchNbr = null, \StructType\UserActions $userActions = null)
    {
        $this
            ->setMerchNbr($merchNbr)
            ->setUserActions($userActions);
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
     * @return \StructType\PosManageUsersReqType
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
     * Get UserActions value
     * @return \StructType\UserActions|null
     */
    public function getUserActions()
    {
        return $this->UserActions;
    }
    /**
     * Set UserActions value
     * @param \StructType\UserActions $userActions
     * @return \StructType\PosManageUsersReqType
     */
    public function setUserActions(\StructType\UserActions $userActions = null)
    {
        $this->UserActions = $userActions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosManageUsersReqType
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
