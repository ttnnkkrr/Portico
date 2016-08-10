<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingDataEditType StructType
 * @subpackage Structs
 */
class LodgingDataEditType extends AbstractStructBase
{
    /**
     * The FolioNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FolioNumber;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - default: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Duration;
    /**
     * The CheckInDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckInDate;
    /**
     * The CheckOutDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckOutDate;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Rate;
    /**
     * The ExtraCharges
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtraChargesDataType
     */
    public $ExtraCharges;
    /**
     * The ExtraChargeAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ExtraChargeAmtInfo;
    /**
     * Constructor method for LodgingDataEditType
     * @uses LodgingDataEditType::setFolioNumber()
     * @uses LodgingDataEditType::setDuration()
     * @uses LodgingDataEditType::setCheckInDate()
     * @uses LodgingDataEditType::setCheckOutDate()
     * @uses LodgingDataEditType::setRate()
     * @uses LodgingDataEditType::setExtraCharges()
     * @uses LodgingDataEditType::setExtraChargeAmtInfo()
     * @param string $folioNumber
     * @param int $duration
     * @param string $checkInDate
     * @param string $checkOutDate
     * @param float $rate
     * @param \StructType\ExtraChargesDataType $extraCharges
     * @param float $extraChargeAmtInfo
     */
    public function __construct($folioNumber = null, $duration = 1, $checkInDate = null, $checkOutDate = null, $rate = null, \StructType\ExtraChargesDataType $extraCharges = null, $extraChargeAmtInfo = null)
    {
        $this
            ->setFolioNumber($folioNumber)
            ->setDuration($duration)
            ->setCheckInDate($checkInDate)
            ->setCheckOutDate($checkOutDate)
            ->setRate($rate)
            ->setExtraCharges($extraCharges)
            ->setExtraChargeAmtInfo($extraChargeAmtInfo);
    }
    /**
     * Get FolioNumber value
     * @return string|null
     */
    public function getFolioNumber()
    {
        return $this->FolioNumber;
    }
    /**
     * Set FolioNumber value
     * @param string $folioNumber
     * @return \StructType\LodgingDataEditType
     */
    public function setFolioNumber($folioNumber = null)
    {
        // validation for constraint: string
        if (!is_null($folioNumber) && !is_string($folioNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folioNumber)), __LINE__);
        }
        $this->FolioNumber = $folioNumber;
        return $this;
    }
    /**
     * Get Duration value
     * @return int|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param int $duration
     * @return \StructType\LodgingDataEditType
     */
    public function setDuration($duration = 1)
    {
        // validation for constraint: int
        if (!is_null($duration) && !is_numeric($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get CheckInDate value
     * @return string|null
     */
    public function getCheckInDate()
    {
        return $this->CheckInDate;
    }
    /**
     * Set CheckInDate value
     * @param string $checkInDate
     * @return \StructType\LodgingDataEditType
     */
    public function setCheckInDate($checkInDate = null)
    {
        // validation for constraint: string
        if (!is_null($checkInDate) && !is_string($checkInDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkInDate)), __LINE__);
        }
        $this->CheckInDate = $checkInDate;
        return $this;
    }
    /**
     * Get CheckOutDate value
     * @return string|null
     */
    public function getCheckOutDate()
    {
        return $this->CheckOutDate;
    }
    /**
     * Set CheckOutDate value
     * @param string $checkOutDate
     * @return \StructType\LodgingDataEditType
     */
    public function setCheckOutDate($checkOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutDate) && !is_string($checkOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutDate)), __LINE__);
        }
        $this->CheckOutDate = $checkOutDate;
        return $this;
    }
    /**
     * Get Rate value
     * @return float|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param float $rate
     * @return \StructType\LodgingDataEditType
     */
    public function setRate($rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get ExtraCharges value
     * @return \StructType\ExtraChargesDataType|null
     */
    public function getExtraCharges()
    {
        return $this->ExtraCharges;
    }
    /**
     * Set ExtraCharges value
     * @param \StructType\ExtraChargesDataType $extraCharges
     * @return \StructType\LodgingDataEditType
     */
    public function setExtraCharges(\StructType\ExtraChargesDataType $extraCharges = null)
    {
        $this->ExtraCharges = $extraCharges;
        return $this;
    }
    /**
     * Get ExtraChargeAmtInfo value
     * @return float|null
     */
    public function getExtraChargeAmtInfo()
    {
        return $this->ExtraChargeAmtInfo;
    }
    /**
     * Set ExtraChargeAmtInfo value
     * @param float $extraChargeAmtInfo
     * @return \StructType\LodgingDataEditType
     */
    public function setExtraChargeAmtInfo($extraChargeAmtInfo = null)
    {
        $this->ExtraChargeAmtInfo = $extraChargeAmtInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LodgingDataEditType
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
