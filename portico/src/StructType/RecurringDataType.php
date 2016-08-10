<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDataType StructType
 * @subpackage Structs
 */
class RecurringDataType extends AbstractStructBase
{
    /**
     * The ScheduleID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleID;
    /**
     * The OneTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OneTime;
    /**
     * The RecurringDataCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecurringDataCode;
    /**
     * Constructor method for RecurringDataType
     * @uses RecurringDataType::setScheduleID()
     * @uses RecurringDataType::setOneTime()
     * @uses RecurringDataType::setRecurringDataCode()
     * @param string $scheduleID
     * @param string $oneTime
     * @param string $recurringDataCode
     */
    public function __construct($scheduleID = null, $oneTime = null, $recurringDataCode = null)
    {
        $this
            ->setScheduleID($scheduleID)
            ->setOneTime($oneTime)
            ->setRecurringDataCode($recurringDataCode);
    }
    /**
     * Get ScheduleID value
     * @return string|null
     */
    public function getScheduleID()
    {
        return $this->ScheduleID;
    }
    /**
     * Set ScheduleID value
     * @param string $scheduleID
     * @return \StructType\RecurringDataType
     */
    public function setScheduleID($scheduleID = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleID) && !is_string($scheduleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleID)), __LINE__);
        }
        $this->ScheduleID = $scheduleID;
        return $this;
    }
    /**
     * Get OneTime value
     * @return string|null
     */
    public function getOneTime()
    {
        return $this->OneTime;
    }
    /**
     * Set OneTime value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oneTime
     * @return \StructType\RecurringDataType
     */
    public function setOneTime($oneTime = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($oneTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oneTime, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->OneTime = $oneTime;
        return $this;
    }
    /**
     * Get RecurringDataCode value
     * @return string|null
     */
    public function getRecurringDataCode()
    {
        return $this->RecurringDataCode;
    }
    /**
     * Set RecurringDataCode value
     * @param string $recurringDataCode
     * @return \StructType\RecurringDataType
     */
    public function setRecurringDataCode($recurringDataCode = null)
    {
        // validation for constraint: string
        if (!is_null($recurringDataCode) && !is_string($recurringDataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recurringDataCode)), __LINE__);
        }
        $this->RecurringDataCode = $recurringDataCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RecurringDataType
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
