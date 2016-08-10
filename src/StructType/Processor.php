<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Processor StructType
 * @subpackage Structs
 */
class Processor extends AbstractStructBase
{
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValuePairCollectionType[]
     */
    public $Response;
    /**
     * Constructor method for Processor
     * @uses Processor::setResponse()
     * @param \StructType\NameValuePairCollectionType[] $response
     */
    public function __construct(array $response = array())
    {
        $this
            ->setResponse($response);
    }
    /**
     * Get Response value
     * @return \StructType\NameValuePairCollectionType[]|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType[] $response
     * @return \StructType\Processor
     */
    public function setResponse(array $response = array())
    {
        foreach ($response as $processorResponseItem) {
            // validation for constraint: itemType
            if (!$processorResponseItem instanceof \StructType\NameValuePairCollectionType) {
                throw new \InvalidArgumentException(sprintf('The Response property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($processorResponseItem) ? get_class($processorResponseItem) : gettype($processorResponseItem)), __LINE__);
            }
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Add item to Response value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValuePairCollectionType $item
     * @return \StructType\Processor
     */
    public function addToResponse(\StructType\NameValuePairCollectionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValuePairCollectionType) {
            throw new \InvalidArgumentException(sprintf('The Response property can only contain items of \StructType\NameValuePairCollectionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Response[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Processor
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
