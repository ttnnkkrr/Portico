<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchNbrRspType StructType
 * @subpackage Structs
 */
class MerchNbrRspType extends AbstractStructBase
{
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchNbr;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Addr1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Addr1;
    /**
     * The Addr2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Addr2;
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
     * The CustomerSvcPhoneNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerSvcPhoneNbr;
    /**
     * Constructor method for MerchNbrRspType
     * @uses MerchNbrRspType::setMerchNbr()
     * @uses MerchNbrRspType::setName()
     * @uses MerchNbrRspType::setAddr1()
     * @uses MerchNbrRspType::setAddr2()
     * @uses MerchNbrRspType::setCity()
     * @uses MerchNbrRspType::setState()
     * @uses MerchNbrRspType::setZip()
     * @uses MerchNbrRspType::setCustomerSvcPhoneNbr()
     * @param string $merchNbr
     * @param string $name
     * @param string $addr1
     * @param string $addr2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $customerSvcPhoneNbr
     */
    public function __construct($merchNbr = null, $name = null, $addr1 = null, $addr2 = null, $city = null, $state = null, $zip = null, $customerSvcPhoneNbr = null)
    {
        $this
            ->setMerchNbr($merchNbr)
            ->setName($name)
            ->setAddr1($addr1)
            ->setAddr2($addr2)
            ->setCity($city)
            ->setState($state)
            ->setZip($zip)
            ->setCustomerSvcPhoneNbr($customerSvcPhoneNbr);
    }
    /**
     * Get MerchNbr value
     * @return string|null
     */
    public function getMerchNbr()
    {
        return $this->MerchNbr;
    }
    /**
     * Set MerchNbr value
     * @param string $merchNbr
     * @return \StructType\MerchNbrRspType
     */
    public function setMerchNbr($merchNbr = null)
    {
        // validation for constraint: string
        if (!is_null($merchNbr) && !is_string($merchNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchNbr)), __LINE__);
        }
        $this->MerchNbr = $merchNbr;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\MerchNbrRspType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Addr1 value
     * @return string|null
     */
    public function getAddr1()
    {
        return $this->Addr1;
    }
    /**
     * Set Addr1 value
     * @param string $addr1
     * @return \StructType\MerchNbrRspType
     */
    public function setAddr1($addr1 = null)
    {
        // validation for constraint: string
        if (!is_null($addr1) && !is_string($addr1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addr1)), __LINE__);
        }
        $this->Addr1 = $addr1;
        return $this;
    }
    /**
     * Get Addr2 value
     * @return string|null
     */
    public function getAddr2()
    {
        return $this->Addr2;
    }
    /**
     * Set Addr2 value
     * @param string $addr2
     * @return \StructType\MerchNbrRspType
     */
    public function setAddr2($addr2 = null)
    {
        // validation for constraint: string
        if (!is_null($addr2) && !is_string($addr2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addr2)), __LINE__);
        }
        $this->Addr2 = $addr2;
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
     * @return \StructType\MerchNbrRspType
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
     * @return \StructType\MerchNbrRspType
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
     * @return \StructType\MerchNbrRspType
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
     * Get CustomerSvcPhoneNbr value
     * @return string|null
     */
    public function getCustomerSvcPhoneNbr()
    {
        return $this->CustomerSvcPhoneNbr;
    }
    /**
     * Set CustomerSvcPhoneNbr value
     * @param string $customerSvcPhoneNbr
     * @return \StructType\MerchNbrRspType
     */
    public function setCustomerSvcPhoneNbr($customerSvcPhoneNbr = null)
    {
        // validation for constraint: string
        if (!is_null($customerSvcPhoneNbr) && !is_string($customerSvcPhoneNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerSvcPhoneNbr)), __LINE__);
        }
        $this->CustomerSvcPhoneNbr = $customerSvcPhoneNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MerchNbrRspType
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
