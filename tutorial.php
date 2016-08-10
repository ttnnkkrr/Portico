<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
/*
$client = new \SoapClient('https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL');

$dom = new DomDocument('1.0', 'UTF-8');
$dom->preserveWhiteSpace = false;
$dom->loadXML($client->__doRequest('
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:hps="http://Hps.Exchange.PosGateway">
   <soapenv:Body>
      <hps:PosRequest>
         <hps:Ver1.0>
            <hps:Header>
               <hps:SecretAPIKey>skapi_cert_MYl2AQAowiQAbLp5JesGKh7QFkcizOP2jcX9BrEMqQ</hps:SecretAPIKey>
            </hps:Header>
            <hps:Transaction>
               <hps:FindTransactions>
                  <hps:Criteria>
                     <hps:StartUtcDT>2016-08-02T00:00:00.000-06:00</hps:StartUtcDT>
                     <hps:EndUtcDT>2016-08-20T00:00:00.000-06:00</hps:EndUtcDT>
                  </hps:Criteria>
               </hps:FindTransactions>
            </hps:Transaction>
         </hps:Ver1.0>
      </hps:PosRequest>
   </soapenv:Body>
</soapenv:Envelope>','https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx','',1));
$dom->formatOutput = true;
$request = $dom->saveXML();




print_r($request);
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);*/


//$PosRequest = new \StructType\PosRequest();


$secretAPIKey = 'skapi_cert_MYl2AQAowiQAbLp5JesGKh7QFkcizOP2jcX9BrEMqQ ';

$PosRequest = Charge(setPosRequestHeader(new \StructType\PosRequest(),$secretAPIKey,'2222')
                        ,manualCharge('4012002000060016','12','2099')
                        ,new \StructType\CreditSaleReqBlock1Type('200'));

print_r(doRequest($PosRequest));

/**
 * @param \StructType\PosRequest $PosRequest
 * @param $secretAPIKey
 * @param string $VersionNbr
 * @param string $DeveloperID
 * @return \StructType\PosRequest
 */
function setPosRequestHeader(\StructType\PosRequest $PosRequest, $secretAPIKey, $VersionNbr = '0000', $DeveloperID = '000000'){
    $PosRequest -> setVer1_0(new \StructType\Ver1_0()) -> getVer1_0()
        -> setHeader(new \StructType\Header()) -> getHeader()
        -> setSecretAPIKey($secretAPIKey)
        -> setVersionNbr($VersionNbr)
        -> setDeveloperID($DeveloperID);
    $PosRequest -> getVer1_0() -> setTransaction(new \StructType\Transaction());
    return $PosRequest;
}

/**
 * @param \StructType\PosRequest $PosRequest
 * @param \StructType\CardDataType $cardData
 * @param \StructType\CreditSaleReqBlock1Type $Amt
 * @return \StructType\PosRequest
 */
function Charge(\StructType\PosRequest $PosRequest, \StructType\CardDataType $cardData, \StructType\CreditSaleReqBlock1Type $Amt){
    $PosRequest -> getVer1_0()
        -> getTransaction()  -> setCreditSale(new \StructType\PosCreditSaleReqType())
        -> getCreditSale()  -> setBlock1( $Amt )
        -> getBlock1()  -> setCardData( $cardData );
    return $PosRequest;
}

/**
 * @param $card
 * @param $month
 * @param $year
 * @return \StructType\CardDataType
 */
function manualCharge($card, $month, $year){
    $cardData = new \StructType\CardDataType();
    $cardData   ->  setManualEntry(new \StructType\ManualEntry())
        -> getManualEntry() -> setCardNbr($card)
        -> setExpMonth($month)
        -> setExpYear($year);
    return $cardData;
}

/**
 * @param $array
 * @return string
 */
function generate_xml_from_array($array) {
    $xml = '';

    if (is_array($array) || is_object($array)) {
        foreach ($array as $key=>$value) {
            if ($key == 'Ver1.0'){
                break;
            }
            if ($key === 'Ver1_0'){
                $key = 'Ver1.0';
            }
            if (!empty($value)) {
                $xml .= '<hps:' . $key . '>' . trim(generate_xml_from_array($value)) . '</hps:' . $key . '>';
            }

        }
    } else {
        $xml = htmlspecialchars($array, ENT_QUOTES);
    }

    return $xml;
}

/**
 * @param $array
 * @return string
 */
function generate_valid_xml_from_array($array) {
    $xml = '<?xml version="1.0" encoding="UTF-8" ?>';


    $xml .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:hps="http://Hps.Exchange.PosGateway">
   <soapenv:Body>
      <hps:PosRequest>';
    $xml .= generate_xml_from_array($array);
    $xml .= '</hps:PosRequest>
   </soapenv:Body>
</soapenv:Envelope>';

    return $xml;
}

/**
 * @param $xml
 * @return string
 */
function domString($xml){
    $dom = new DomDocument('1.0', 'UTF-8');
    $dom->preserveWhiteSpace = false;
    $dom->loadXML($xml);
    $dom->formatOutput = true;
    $data = $dom->saveXML();
    //print_r($data);
    return $data;
    }

/**
 * @param $obj
 * @return string
 */
function doRequest($obj){

    $xml = generate_valid_xml_from_array($obj);
    print_r(domString($xml));
    $client = new \SoapClient('https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL');
    return domString($client->__doRequest(domString($xml),'https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx','',1));
    }

exit;
if ($do->DoTransaction($PosRequest) !== false) {
    print_r($do->getResult());
}
else {
    print_r($do->getResult());
    print_r($do->getLastRequest());
    //print_r($do->getLastError());
}
