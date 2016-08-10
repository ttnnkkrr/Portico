<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserActions StructType
 * @subpackage Structs
 */
class UserActions extends AbstractStructBase
{
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Query
     */
    public $Query;
    /**
     * Constructor method for UserActions
     * @uses UserActions::setQuery()
     * @param \StructType\Query $query
     */
    public function __construct(\StructType\Query $query = null)
    {
        $this
            ->setQuery($query);
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
     * @return \StructType\UserActions
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
     * @return \StructType\UserActions
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
