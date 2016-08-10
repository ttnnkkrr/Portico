<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosImpersonateRspType StructType
 * @subpackage Structs
 */
class PosImpersonateRspType extends AbstractStructBase
{
    /**
     * The MIDS
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MidRspType[]
     */
    public $MIDS;
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * Constructor method for PosImpersonateRspType
     * @uses PosImpersonateRspType::setMIDS()
     * @uses PosImpersonateRspType::setUser()
     * @param \StructType\MidRspType[] $mIDS
     * @param \StructType\User $user
     */
    public function __construct(array $mIDS = array(), \StructType\User $user = null)
    {
        $this
            ->setMIDS($mIDS)
            ->setUser($user);
    }
    /**
     * Get MIDS value
     * @return \StructType\MidRspType[]|null
     */
    public function getMIDS()
    {
        return $this->MIDS;
    }
    /**
     * Set MIDS value
     * @throws \InvalidArgumentException
     * @param \StructType\MidRspType[] $mIDS
     * @return \StructType\PosImpersonateRspType
     */
    public function setMIDS(array $mIDS = array())
    {
        foreach ($mIDS as $posImpersonateRspTypeMIDSItem) {
            // validation for constraint: itemType
            if (!$posImpersonateRspTypeMIDSItem instanceof \StructType\MidRspType) {
                throw new \InvalidArgumentException(sprintf('The MIDS property can only contain items of \StructType\MidRspType, "%s" given', is_object($posImpersonateRspTypeMIDSItem) ? get_class($posImpersonateRspTypeMIDSItem) : gettype($posImpersonateRspTypeMIDSItem)), __LINE__);
            }
        }
        $this->MIDS = $mIDS;
        return $this;
    }
    /**
     * Add item to MIDS value
     * @throws \InvalidArgumentException
     * @param \StructType\MidRspType $item
     * @return \StructType\PosImpersonateRspType
     */
    public function addToMIDS(\StructType\MidRspType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MidRspType) {
            throw new \InvalidArgumentException(sprintf('The MIDS property can only contain items of \StructType\MidRspType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MIDS[] = $item;
        return $this;
    }
    /**
     * Get User value
     * @return \StructType\User|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \StructType\User $user
     * @return \StructType\PosImpersonateRspType
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosImpersonateRspType
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
