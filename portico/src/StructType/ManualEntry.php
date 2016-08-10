<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManualEntry StructType
 * @subpackage Structs
 */
class ManualEntry extends AbstractStructBase
{
    /**
     * The ExpMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ExpYear;
    /**
     * The CardNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbr;
    /**
     * The CardPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardPresent;
    /**
     * The ReaderPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReaderPresent;
    /**
     * The CVV2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2;
    /**
     * The CVV2Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2Status;
    /**
     * Constructor method for ManualEntry
     * @uses ManualEntry::setExpMonth()
     * @uses ManualEntry::setExpYear()
     * @uses ManualEntry::setCardNbr()
     * @uses ManualEntry::setCardPresent()
     * @uses ManualEntry::setReaderPresent()
     * @uses ManualEntry::setCVV2()
     * @uses ManualEntry::setCVV2Status()
     * @param int $expMonth
     * @param int $expYear
     * @param string $cardNbr
     * @param string $cardPresent
     * @param string $readerPresent
     * @param string $cVV2
     * @param string $cVV2Status
     */
    public function __construct($expMonth = null, $expYear = null, $cardNbr = null, $cardPresent = null, $readerPresent = null, $cVV2 = null, $cVV2Status = null)
    {
        $this
            ->setExpMonth($expMonth)
            ->setExpYear($expYear)
            ->setCardNbr($cardNbr)
            ->setCardPresent($cardPresent)
            ->setReaderPresent($readerPresent)
            ->setCVV2($cVV2)
            ->setCVV2Status($cVV2Status);
    }
    /**
     * Get ExpMonth value
     * @return int
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }
    /**
     * Set ExpMonth value
     * @param int $expMonth
     * @return \StructType\ManualEntry
     */
    public function setExpMonth($expMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expMonth) && !is_numeric($expMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expMonth)), __LINE__);
        }
        $this->ExpMonth = $expMonth;
        return $this;
    }
    /**
     * Get ExpYear value
     * @return int
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }
    /**
     * Set ExpYear value
     * @param int $expYear
     * @return \StructType\ManualEntry
     */
    public function setExpYear($expYear = null)
    {
        // validation for constraint: int
        if (!is_null($expYear) && !is_numeric($expYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expYear)), __LINE__);
        }
        $this->ExpYear = $expYear;
        return $this;
    }
    /**
     * Get CardNbr value
     * @return string|null
     */
    public function getCardNbr()
    {
        return $this->CardNbr;
    }
    /**
     * Set CardNbr value
     * @param string $cardNbr
     * @return \StructType\ManualEntry
     */
    public function setCardNbr($cardNbr = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbr) && !is_string($cardNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbr)), __LINE__);
        }
        $this->CardNbr = $cardNbr;
        return $this;
    }
    /**
     * Get CardPresent value
     * @return string|null
     */
    public function getCardPresent()
    {
        return $this->CardPresent;
    }
    /**
     * Set CardPresent value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cardPresent
     * @return \StructType\ManualEntry
     */
    public function setCardPresent($cardPresent = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($cardPresent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cardPresent, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->CardPresent = $cardPresent;
        return $this;
    }
    /**
     * Get ReaderPresent value
     * @return string|null
     */
    public function getReaderPresent()
    {
        return $this->ReaderPresent;
    }
    /**
     * Set ReaderPresent value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $readerPresent
     * @return \StructType\ManualEntry
     */
    public function setReaderPresent($readerPresent = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($readerPresent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $readerPresent, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->ReaderPresent = $readerPresent;
        return $this;
    }
    /**
     * Get CVV2 value
     * @return string|null
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }
    /**
     * Set CVV2 value
     * @param string $cVV2
     * @return \StructType\ManualEntry
     */
    public function setCVV2($cVV2 = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2) && !is_string($cVV2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVV2)), __LINE__);
        }
        $this->CVV2 = $cVV2;
        return $this;
    }
    /**
     * Get CVV2Status value
     * @return string|null
     */
    public function getCVV2Status()
    {
        return $this->CVV2Status;
    }
    /**
     * Set CVV2Status value
     * @uses \EnumType\Cvv2Status::valueIsValid()
     * @uses \EnumType\Cvv2Status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cVV2Status
     * @return \StructType\ManualEntry
     */
    public function setCVV2Status($cVV2Status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Cvv2Status::valueIsValid($cVV2Status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cVV2Status, implode(', ', \EnumType\Cvv2Status::getValidValues())), __LINE__);
        }
        $this->CVV2Status = $cVV2Status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ManualEntry
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
