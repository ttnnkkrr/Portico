<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosResponse StructType
 * @subpackage Structs
 */
class PosResponse extends AbstractStructBase
{
    /**
     * The Ver1_0
     */
    public $Ver1_0;
    /**
     * The rootUrl
     * @var string
     */
    public $rootUrl;
    /**
     * Constructor method for PosResponse
     * @uses PosResponse::setVer1_0()
     * @uses PosResponse::setRootUrl()
     * @param \StructType\Ver1_0 $ver1_0
     * @param string $rootUrl
     */
    public function __construct(\StructType\Ver1_0 $ver1_0 = null, $rootUrl = null)
    {
        $this
            ->setVer1_0($ver1_0)
            ->setRootUrl($rootUrl);
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
     * @return \StructType\PosResponse
     */
    public function setVer1_0(\StructType\Ver1_0 $ver1_0 = null)
    {
        $this->Ver1_0 = $this->{'Ver1.0'} = $ver1_0;
        return $this;
    }
    /**
     * Get rootUrl value
     * @return string|null
     */
    public function getRootUrl()
    {
        return $this->rootUrl;
    }
    /**
     * Set rootUrl value
     * @param string $rootUrl
     * @return \StructType\PosResponse
     */
    public function setRootUrl($rootUrl = null)
    {
        // validation for constraint: string
        if (!is_null($rootUrl) && !is_string($rootUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rootUrl)), __LINE__);
        }
        $this->rootUrl = $rootUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosResponse
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
