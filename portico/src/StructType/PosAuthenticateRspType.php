<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAuthenticateRspType StructType
 * @subpackage Structs
 */
class PosAuthenticateRspType extends AbstractStructBase
{
    /**
     * The CredentialToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CredentialToken;
    /**
     * Constructor method for PosAuthenticateRspType
     * @uses PosAuthenticateRspType::setCredentialToken()
     * @param string $credentialToken
     */
    public function __construct($credentialToken = null)
    {
        $this
            ->setCredentialToken($credentialToken);
    }
    /**
     * Get CredentialToken value
     * @return string|null
     */
    public function getCredentialToken()
    {
        return $this->CredentialToken;
    }
    /**
     * Set CredentialToken value
     * @param string $credentialToken
     * @return \StructType\PosAuthenticateRspType
     */
    public function setCredentialToken($credentialToken = null)
    {
        // validation for constraint: string
        if (!is_null($credentialToken) && !is_string($credentialToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credentialToken)), __LINE__);
        }
        $this->CredentialToken = $credentialToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAuthenticateRspType
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
