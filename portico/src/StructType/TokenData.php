<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenData StructType
 * @subpackage Structs
 */
class TokenData extends AbstractStructBase
{
    /**
     * The TokenValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenValue;
    /**
     * The ExpMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpYear;
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
     * Constructor method for TokenData
     * @uses TokenData::setTokenValue()
     * @uses TokenData::setExpMonth()
     * @uses TokenData::setExpYear()
     * @uses TokenData::setCardPresent()
     * @uses TokenData::setReaderPresent()
     * @uses TokenData::setCVV2()
     * @uses TokenData::setCVV2Status()
     * @param string $tokenValue
     * @param int $expMonth
     * @param int $expYear
     * @param string $cardPresent
     * @param string $readerPresent
     * @param string $cVV2
     * @param string $cVV2Status
     */
    public function __construct($tokenValue = null, $expMonth = null, $expYear = null, $cardPresent = null, $readerPresent = null, $cVV2 = null, $cVV2Status = null)
    {
        $this
            ->setTokenValue($tokenValue)
            ->setExpMonth($expMonth)
            ->setExpYear($expYear)
            ->setCardPresent($cardPresent)
            ->setReaderPresent($readerPresent)
            ->setCVV2($cVV2)
            ->setCVV2Status($cVV2Status);
    }
    /**
     * Get TokenValue value
     * @return string|null
     */
    public function getTokenValue()
    {
        return $this->TokenValue;
    }
    /**
     * Set TokenValue value
     * @param string $tokenValue
     * @return \StructType\TokenData
     */
    public function setTokenValue($tokenValue = null)
    {
        // validation for constraint: string
        if (!is_null($tokenValue) && !is_string($tokenValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenValue)), __LINE__);
        }
        $this->TokenValue = $tokenValue;
        return $this;
    }
    /**
     * Get ExpMonth value
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }
    /**
     * Set ExpMonth value
     * @param int $expMonth
     * @return \StructType\TokenData
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
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }
    /**
     * Set ExpYear value
     * @param int $expYear
     * @return \StructType\TokenData
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
     * @return \StructType\TokenData
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
     * @return \StructType\TokenData
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
     * @return \StructType\TokenData
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
     * @return \StructType\TokenData
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
     * @return \StructType\TokenData
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
