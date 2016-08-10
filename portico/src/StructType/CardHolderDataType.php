<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardHolderDataType StructType
 * @subpackage Structs
 */
class CardHolderDataType extends AbstractStructBase
{
    /**
     * The CardHolderFirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderFirstName;
    /**
     * The CardHolderLastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderLastName;
    /**
     * The CardHolderAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderAddr;
    /**
     * The CardHolderCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderCity;
    /**
     * The CardHolderState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderState;
    /**
     * The CardHolderZip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderZip;
    /**
     * The CardHolderPhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderPhone;
    /**
     * The CardHolderEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderEmail;
    /**
     * Constructor method for CardHolderDataType
     * @uses CardHolderDataType::setCardHolderFirstName()
     * @uses CardHolderDataType::setCardHolderLastName()
     * @uses CardHolderDataType::setCardHolderAddr()
     * @uses CardHolderDataType::setCardHolderCity()
     * @uses CardHolderDataType::setCardHolderState()
     * @uses CardHolderDataType::setCardHolderZip()
     * @uses CardHolderDataType::setCardHolderPhone()
     * @uses CardHolderDataType::setCardHolderEmail()
     * @param string $cardHolderFirstName
     * @param string $cardHolderLastName
     * @param string $cardHolderAddr
     * @param string $cardHolderCity
     * @param string $cardHolderState
     * @param string $cardHolderZip
     * @param string $cardHolderPhone
     * @param string $cardHolderEmail
     */
    public function __construct($cardHolderFirstName = null, $cardHolderLastName = null, $cardHolderAddr = null, $cardHolderCity = null, $cardHolderState = null, $cardHolderZip = null, $cardHolderPhone = null, $cardHolderEmail = null)
    {
        $this
            ->setCardHolderFirstName($cardHolderFirstName)
            ->setCardHolderLastName($cardHolderLastName)
            ->setCardHolderAddr($cardHolderAddr)
            ->setCardHolderCity($cardHolderCity)
            ->setCardHolderState($cardHolderState)
            ->setCardHolderZip($cardHolderZip)
            ->setCardHolderPhone($cardHolderPhone)
            ->setCardHolderEmail($cardHolderEmail);
    }
    /**
     * Get CardHolderFirstName value
     * @return string|null
     */
    public function getCardHolderFirstName()
    {
        return $this->CardHolderFirstName;
    }
    /**
     * Set CardHolderFirstName value
     * @param string $cardHolderFirstName
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderFirstName($cardHolderFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderFirstName) && !is_string($cardHolderFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderFirstName)), __LINE__);
        }
        $this->CardHolderFirstName = $cardHolderFirstName;
        return $this;
    }
    /**
     * Get CardHolderLastName value
     * @return string|null
     */
    public function getCardHolderLastName()
    {
        return $this->CardHolderLastName;
    }
    /**
     * Set CardHolderLastName value
     * @param string $cardHolderLastName
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderLastName($cardHolderLastName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderLastName) && !is_string($cardHolderLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderLastName)), __LINE__);
        }
        $this->CardHolderLastName = $cardHolderLastName;
        return $this;
    }
    /**
     * Get CardHolderAddr value
     * @return string|null
     */
    public function getCardHolderAddr()
    {
        return $this->CardHolderAddr;
    }
    /**
     * Set CardHolderAddr value
     * @param string $cardHolderAddr
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderAddr($cardHolderAddr = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderAddr) && !is_string($cardHolderAddr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderAddr)), __LINE__);
        }
        $this->CardHolderAddr = $cardHolderAddr;
        return $this;
    }
    /**
     * Get CardHolderCity value
     * @return string|null
     */
    public function getCardHolderCity()
    {
        return $this->CardHolderCity;
    }
    /**
     * Set CardHolderCity value
     * @param string $cardHolderCity
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderCity($cardHolderCity = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderCity) && !is_string($cardHolderCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderCity)), __LINE__);
        }
        $this->CardHolderCity = $cardHolderCity;
        return $this;
    }
    /**
     * Get CardHolderState value
     * @return string|null
     */
    public function getCardHolderState()
    {
        return $this->CardHolderState;
    }
    /**
     * Set CardHolderState value
     * @param string $cardHolderState
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderState($cardHolderState = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderState) && !is_string($cardHolderState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderState)), __LINE__);
        }
        $this->CardHolderState = $cardHolderState;
        return $this;
    }
    /**
     * Get CardHolderZip value
     * @return string|null
     */
    public function getCardHolderZip()
    {
        return $this->CardHolderZip;
    }
    /**
     * Set CardHolderZip value
     * @param string $cardHolderZip
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderZip($cardHolderZip = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderZip) && !is_string($cardHolderZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderZip)), __LINE__);
        }
        $this->CardHolderZip = $cardHolderZip;
        return $this;
    }
    /**
     * Get CardHolderPhone value
     * @return string|null
     */
    public function getCardHolderPhone()
    {
        return $this->CardHolderPhone;
    }
    /**
     * Set CardHolderPhone value
     * @param string $cardHolderPhone
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderPhone($cardHolderPhone = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderPhone) && !is_string($cardHolderPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderPhone)), __LINE__);
        }
        $this->CardHolderPhone = $cardHolderPhone;
        return $this;
    }
    /**
     * Get CardHolderEmail value
     * @return string|null
     */
    public function getCardHolderEmail()
    {
        return $this->CardHolderEmail;
    }
    /**
     * Set CardHolderEmail value
     * @param string $cardHolderEmail
     * @return \StructType\CardHolderDataType
     */
    public function setCardHolderEmail($cardHolderEmail = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderEmail) && !is_string($cardHolderEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderEmail)), __LINE__);
        }
        $this->CardHolderEmail = $cardHolderEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CardHolderDataType
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
