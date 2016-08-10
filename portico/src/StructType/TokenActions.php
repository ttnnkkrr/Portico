<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenActions StructType
 * @subpackage Structs
 */
class TokenActions extends AbstractStructBase
{
    /**
     * The Delete
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Delete
     */
    public $Delete;
    /**
     * The Set
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Set
     */
    public $Set;
    /**
     * Constructor method for TokenActions
     * @uses TokenActions::setDelete()
     * @uses TokenActions::setSet()
     * @param \StructType\Delete $delete
     * @param \StructType\Set $set
     */
    public function __construct(\StructType\Delete $delete = null, \StructType\Set $set = null)
    {
        $this
            ->setDelete($delete)
            ->setSet($set);
    }
    /**
     * Get Delete value
     * @return \StructType\Delete|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param \StructType\Delete $delete
     * @return \StructType\TokenActions
     */
    public function setDelete(\StructType\Delete $delete = null)
    {
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Set value
     * @return \StructType\Set|null
     */
    public function getSet()
    {
        return $this->Set;
    }
    /**
     * Set Set value
     * @param \StructType\Set $set
     * @return \StructType\TokenActions
     */
    public function setSet(\StructType\Set $set = null)
    {
        $this->Set = $set;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TokenActions
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
