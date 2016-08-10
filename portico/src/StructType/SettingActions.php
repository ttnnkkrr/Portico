<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SettingActions StructType
 * @subpackage Structs
 */
class SettingActions extends AbstractStructBase
{
    /**
     * The Set
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Set
     */
    public $Set;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Query
     */
    public $Query;
    /**
     * Constructor method for SettingActions
     * @uses SettingActions::setSet()
     * @uses SettingActions::setQuery()
     * @param \StructType\Set $set
     * @param \StructType\Query $query
     */
    public function __construct(\StructType\Set $set = null, \StructType\Query $query = null)
    {
        $this
            ->setSet($set)
            ->setQuery($query);
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
     * @return \StructType\SettingActions
     */
    public function setSet(\StructType\Set $set = null)
    {
        $this->Set = $set;
        return $this;
    }
    /**
     * Get Query value
     * @return \StructType\Query|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param \StructType\Query $query
     * @return \StructType\SettingActions
     */
    public function setQuery(\StructType\Query $query = null)
    {
        $this->Query = $query;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SettingActions
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
