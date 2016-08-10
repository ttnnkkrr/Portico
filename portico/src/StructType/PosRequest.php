<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosRequest StructType
 * @subpackage Structs
 */
class PosRequest extends AbstractStructBase
{
    /**
     * The Ver1_0
     */
    public $Ver1_0;
    /**
     * The clientType
     * @var string
     */
    public $clientType;
    /**
     * The clientVer
     * @var string
     */
    public $clientVer;
    /**
     * Constructor method for PosRequest
     * @uses PosRequest::setVer1_0()
     * @uses PosRequest::setClientType()
     * @uses PosRequest::setClientVer()
     * @param \StructType\Ver1_0 $ver1_0
     * @param string $clientType
     * @param string $clientVer
     */
    public function __construct(\StructType\Ver1_0 $ver1_0 = null, $clientType = null, $clientVer = null)
    {
        $this
            ->setVer1_0($ver1_0)
            ->setClientType($clientType)
            ->setClientVer($clientVer);
    }
    /**
     * Get ver1_0 value
     * @return ver1_0
     */
    public function getVer1_0()
    {
        return $this->{'Ver1.0'};
    }
    /**
     * Set ver1_0 value
     * @param ver1_0 $ver1_0
     * @return \StructType\PosRequest
     */
    public function setVer1_0(\StructType\Ver1_0 $ver1_0 = null)
    {
        $this->Ver1_0 = $this->{'Ver1.0'} = $ver1_0;
        return $this;
    }
    /**
     * Get clientType value
     * @return string|null
     */
    public function getClientType()
    {
        return $this->clientType;
    }
    /**
     * Set clientType value
     * @param string $clientType
     * @return \StructType\PosRequest
     */
    public function setClientType($clientType = null)
    {
        // validation for constraint: string
        if (!is_null($clientType) && !is_string($clientType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientType)), __LINE__);
        }
        $this->clientType = $clientType;
        return $this;
    }
    /**
     * Get clientVer value
     * @return string|null
     */
    public function getClientVer()
    {
        return $this->clientVer;
    }
    /**
     * Set clientVer value
     * @param string $clientVer
     * @return \StructType\PosRequest
     */
    public function setClientVer($clientVer = null)
    {
        // validation for constraint: string
        if (!is_null($clientVer) && !is_string($clientVer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientVer)), __LINE__);
        }
        $this->clientVer = $clientVer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosRequest
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
