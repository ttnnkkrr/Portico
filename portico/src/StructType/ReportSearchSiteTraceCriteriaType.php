<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportSearchSiteTraceCriteriaType StructType
 * @subpackage Structs
 */
class ReportSearchSiteTraceCriteriaType extends AbstractStructBase
{
    /**
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * Constructor method for ReportSearchSiteTraceCriteriaType
     * @uses ReportSearchSiteTraceCriteriaType::setSiteTrace()
     * @param string $siteTrace
     */
    public function __construct($siteTrace = null)
    {
        $this
            ->setSiteTrace($siteTrace);
    }
    /**
     * Get SiteTrace value
     * @return string|null
     */
    public function getSiteTrace()
    {
        return $this->SiteTrace;
    }
    /**
     * Set SiteTrace value
     * @param string $siteTrace
     * @return \StructType\ReportSearchSiteTraceCriteriaType
     */
    public function setSiteTrace($siteTrace = null)
    {
        // validation for constraint: string
        if (!is_null($siteTrace) && !is_string($siteTrace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteTrace)), __LINE__);
        }
        $this->SiteTrace = $siteTrace;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportSearchSiteTraceCriteriaType
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
