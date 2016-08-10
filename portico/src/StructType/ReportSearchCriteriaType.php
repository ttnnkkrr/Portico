<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportSearchCriteriaType StructType
 * @subpackage Structs
 */
class ReportSearchCriteriaType extends AbstractStructBase
{
    /**
     * The SiteTraceCriteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReportSearchSiteTraceCriteriaType
     */
    public $SiteTraceCriteria;
    /**
     * Constructor method for ReportSearchCriteriaType
     * @uses ReportSearchCriteriaType::setSiteTraceCriteria()
     * @param \StructType\ReportSearchSiteTraceCriteriaType $siteTraceCriteria
     */
    public function __construct(\StructType\ReportSearchSiteTraceCriteriaType $siteTraceCriteria = null)
    {
        $this
            ->setSiteTraceCriteria($siteTraceCriteria);
    }
    /**
     * Get SiteTraceCriteria value
     * @return \StructType\ReportSearchSiteTraceCriteriaType|null
     */
    public function getSiteTraceCriteria()
    {
        return $this->SiteTraceCriteria;
    }
    /**
     * Set SiteTraceCriteria value
     * @param \StructType\ReportSearchSiteTraceCriteriaType $siteTraceCriteria
     * @return \StructType\ReportSearchCriteriaType
     */
    public function setSiteTraceCriteria(\StructType\ReportSearchSiteTraceCriteriaType $siteTraceCriteria = null)
    {
        $this->SiteTraceCriteria = $siteTraceCriteria;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReportSearchCriteriaType
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
