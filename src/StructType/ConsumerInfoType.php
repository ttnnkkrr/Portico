<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerInfoType StructType
 * @subpackage Structs
 */
class ConsumerInfoType extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The CheckName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckName;
    /**
     * The Address1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address1;
    /**
     * The Address2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address2;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The Zip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Zip;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The DLState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DLState;
    /**
     * The DLNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DLNumber;
    /**
     * The CourtesyCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CourtesyCard;
    /**
     * The IdentityInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\IdentityInfoType
     */
    public $IdentityInfo;
    /**
     * Constructor method for ConsumerInfoType
     * @uses ConsumerInfoType::setFirstName()
     * @uses ConsumerInfoType::setLastName()
     * @uses ConsumerInfoType::setCheckName()
     * @uses ConsumerInfoType::setAddress1()
     * @uses ConsumerInfoType::setAddress2()
     * @uses ConsumerInfoType::setCity()
     * @uses ConsumerInfoType::setState()
     * @uses ConsumerInfoType::setZip()
     * @uses ConsumerInfoType::setPhoneNumber()
     * @uses ConsumerInfoType::setEmailAddress()
     * @uses ConsumerInfoType::setDLState()
     * @uses ConsumerInfoType::setDLNumber()
     * @uses ConsumerInfoType::setCourtesyCard()
     * @uses ConsumerInfoType::setIdentityInfo()
     * @param string $firstName
     * @param string $lastName
     * @param string $checkName
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $phoneNumber
     * @param string $emailAddress
     * @param string $dLState
     * @param string $dLNumber
     * @param string $courtesyCard
     * @param \StructType\IdentityInfoType $identityInfo
     */
    public function __construct($firstName = null, $lastName = null, $checkName = null, $address1 = null, $address2 = null, $city = null, $state = null, $zip = null, $phoneNumber = null, $emailAddress = null, $dLState = null, $dLNumber = null, $courtesyCard = null, \StructType\IdentityInfoType $identityInfo = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setCheckName($checkName)
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCity($city)
            ->setState($state)
            ->setZip($zip)
            ->setPhoneNumber($phoneNumber)
            ->setEmailAddress($emailAddress)
            ->setDLState($dLState)
            ->setDLNumber($dLNumber)
            ->setCourtesyCard($courtesyCard)
            ->setIdentityInfo($identityInfo);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \StructType\ConsumerInfoType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \StructType\ConsumerInfoType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get CheckName value
     * @return string|null
     */
    public function getCheckName()
    {
        return $this->CheckName;
    }
    /**
     * Set CheckName value
     * @param string $checkName
     * @return \StructType\ConsumerInfoType
     */
    public function setCheckName($checkName = null)
    {
        // validation for constraint: string
        if (!is_null($checkName) && !is_string($checkName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkName)), __LINE__);
        }
        $this->CheckName = $checkName;
        return $this;
    }
    /**
     * Get Address1 value
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->Address1;
    }
    /**
     * Set Address1 value
     * @param string $address1
     * @return \StructType\ConsumerInfoType
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address1)), __LINE__);
        }
        $this->Address1 = $address1;
        return $this;
    }
    /**
     * Get Address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->Address2;
    }
    /**
     * Set Address2 value
     * @param string $address2
     * @return \StructType\ConsumerInfoType
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->Address2 = $address2;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \StructType\ConsumerInfoType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \StructType\ConsumerInfoType
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->Zip;
    }
    /**
     * Set Zip value
     * @param string $zip
     * @return \StructType\ConsumerInfoType
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->Zip = $zip;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \StructType\ConsumerInfoType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\ConsumerInfoType
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get DLState value
     * @return string|null
     */
    public function getDLState()
    {
        return $this->DLState;
    }
    /**
     * Set DLState value
     * @param string $dLState
     * @return \StructType\ConsumerInfoType
     */
    public function setDLState($dLState = null)
    {
        // validation for constraint: string
        if (!is_null($dLState) && !is_string($dLState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dLState)), __LINE__);
        }
        $this->DLState = $dLState;
        return $this;
    }
    /**
     * Get DLNumber value
     * @return string|null
     */
    public function getDLNumber()
    {
        return $this->DLNumber;
    }
    /**
     * Set DLNumber value
     * @param string $dLNumber
     * @return \StructType\ConsumerInfoType
     */
    public function setDLNumber($dLNumber = null)
    {
        // validation for constraint: string
        if (!is_null($dLNumber) && !is_string($dLNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dLNumber)), __LINE__);
        }
        $this->DLNumber = $dLNumber;
        return $this;
    }
    /**
     * Get CourtesyCard value
     * @return string|null
     */
    public function getCourtesyCard()
    {
        return $this->CourtesyCard;
    }
    /**
     * Set CourtesyCard value
     * @param string $courtesyCard
     * @return \StructType\ConsumerInfoType
     */
    public function setCourtesyCard($courtesyCard = null)
    {
        // validation for constraint: string
        if (!is_null($courtesyCard) && !is_string($courtesyCard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courtesyCard)), __LINE__);
        }
        $this->CourtesyCard = $courtesyCard;
        return $this;
    }
    /**
     * Get IdentityInfo value
     * @return \StructType\IdentityInfoType|null
     */
    public function getIdentityInfo()
    {
        return $this->IdentityInfo;
    }
    /**
     * Set IdentityInfo value
     * @param \StructType\IdentityInfoType $identityInfo
     * @return \StructType\ConsumerInfoType
     */
    public function setIdentityInfo(\StructType\IdentityInfoType $identityInfo = null)
    {
        $this->IdentityInfo = $identityInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ConsumerInfoType
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
