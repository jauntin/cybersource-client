<?php
/**
 * RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AuthenticationExemptionsPost201ResponseStrongAuthentication implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AuthenticationExemptionsPost201Response_consumerAuthenticationInformation_strongAuthentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acquirerReferenceFraudRateThresholdExceeded' => 'bool',
        'issuerReferenceFraudRateThresholdExceeded' => 'bool',
        'issuerReferenceFraudRateExceeded' => 'bool',
        'totalAmountValueExceeded' => 'bool',
        'eeaDomesticInd' => 'bool',
        'acquirerReferenceFraudRateExceeded' => 'bool',
        'riskAttributesPresent' => 'bool',
        'authenticationExemptionsId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acquirerReferenceFraudRateThresholdExceeded' => null,
        'issuerReferenceFraudRateThresholdExceeded' => null,
        'issuerReferenceFraudRateExceeded' => null,
        'totalAmountValueExceeded' => null,
        'eeaDomesticInd' => null,
        'acquirerReferenceFraudRateExceeded' => null,
        'riskAttributesPresent' => null,
        'authenticationExemptionsId' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'acquirerReferenceFraudRateThresholdExceeded' => 'acquirerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateThresholdExceeded' => 'issuerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateExceeded' => 'issuerReferenceFraudRateExceeded',
        'totalAmountValueExceeded' => 'totalAmountValueExceeded',
        'eeaDomesticInd' => 'eeaDomesticInd',
        'acquirerReferenceFraudRateExceeded' => 'acquirerReferenceFraudRateExceeded',
        'riskAttributesPresent' => 'riskAttributesPresent',
        'authenticationExemptionsId' => 'authenticationExemptionsId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acquirerReferenceFraudRateThresholdExceeded' => 'setAcquirerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateThresholdExceeded' => 'setIssuerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateExceeded' => 'setIssuerReferenceFraudRateExceeded',
        'totalAmountValueExceeded' => 'setTotalAmountValueExceeded',
        'eeaDomesticInd' => 'setEeaDomesticInd',
        'acquirerReferenceFraudRateExceeded' => 'setAcquirerReferenceFraudRateExceeded',
        'riskAttributesPresent' => 'setRiskAttributesPresent',
        'authenticationExemptionsId' => 'setAuthenticationExemptionsId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acquirerReferenceFraudRateThresholdExceeded' => 'getAcquirerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateThresholdExceeded' => 'getIssuerReferenceFraudRateThresholdExceeded',
        'issuerReferenceFraudRateExceeded' => 'getIssuerReferenceFraudRateExceeded',
        'totalAmountValueExceeded' => 'getTotalAmountValueExceeded',
        'eeaDomesticInd' => 'getEeaDomesticInd',
        'acquirerReferenceFraudRateExceeded' => 'getAcquirerReferenceFraudRateExceeded',
        'riskAttributesPresent' => 'getRiskAttributesPresent',
        'authenticationExemptionsId' => 'getAuthenticationExemptionsId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['acquirerReferenceFraudRateThresholdExceeded'] = isset($data['acquirerReferenceFraudRateThresholdExceeded']) ? $data['acquirerReferenceFraudRateThresholdExceeded'] : null;
        $this->container['issuerReferenceFraudRateThresholdExceeded'] = isset($data['issuerReferenceFraudRateThresholdExceeded']) ? $data['issuerReferenceFraudRateThresholdExceeded'] : null;
        $this->container['issuerReferenceFraudRateExceeded'] = isset($data['issuerReferenceFraudRateExceeded']) ? $data['issuerReferenceFraudRateExceeded'] : null;
        $this->container['totalAmountValueExceeded'] = isset($data['totalAmountValueExceeded']) ? $data['totalAmountValueExceeded'] : null;
        $this->container['eeaDomesticInd'] = isset($data['eeaDomesticInd']) ? $data['eeaDomesticInd'] : null;
        $this->container['acquirerReferenceFraudRateExceeded'] = isset($data['acquirerReferenceFraudRateExceeded']) ? $data['acquirerReferenceFraudRateExceeded'] : null;
        $this->container['riskAttributesPresent'] = isset($data['riskAttributesPresent']) ? $data['riskAttributesPresent'] : null;
        $this->container['authenticationExemptionsId'] = isset($data['authenticationExemptionsId']) ? $data['authenticationExemptionsId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['authenticationExemptionsId']) && (strlen($this->container['authenticationExemptionsId']) > 36)) {
            $invalid_properties[] = "invalid value for 'authenticationExemptionsId', the character length must be smaller than or equal to 36.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['authenticationExemptionsId']) > 36) {
            return false;
        }
        return true;
    }


    /**
     * Gets acquirerReferenceFraudRateThresholdExceeded
     * @return bool
     */
    public function getAcquirerReferenceFraudRateThresholdExceeded()
    {
        return $this->container['acquirerReferenceFraudRateThresholdExceeded'];
    }

    /**
     * Sets acquirerReferenceFraudRateThresholdExceeded
     * @param bool $acquirerReferenceFraudRateThresholdExceeded Indicates if the Acquirer has exceeded the RFR for 180 consecutive days. (E.g. ???true??? if has exceeded, ???false??? otherwise).
     * @return $this
     */
    public function setAcquirerReferenceFraudRateThresholdExceeded($acquirerReferenceFraudRateThresholdExceeded)
    {
        $this->container['acquirerReferenceFraudRateThresholdExceeded'] = $acquirerReferenceFraudRateThresholdExceeded;

        return $this;
    }

    /**
     * Gets issuerReferenceFraudRateThresholdExceeded
     * @return bool
     */
    public function getIssuerReferenceFraudRateThresholdExceeded()
    {
        return $this->container['issuerReferenceFraudRateThresholdExceeded'];
    }

    /**
     * Sets issuerReferenceFraudRateThresholdExceeded
     * @param bool $issuerReferenceFraudRateThresholdExceeded Indicates if the Issuer has exceeded the RFR for 180 consecutive days. (E.g. ???True??? if has exceeded, ???False??? otherwise).
     * @return $this
     */
    public function setIssuerReferenceFraudRateThresholdExceeded($issuerReferenceFraudRateThresholdExceeded)
    {
        $this->container['issuerReferenceFraudRateThresholdExceeded'] = $issuerReferenceFraudRateThresholdExceeded;

        return $this;
    }

    /**
     * Gets issuerReferenceFraudRateExceeded
     * @return bool
     */
    public function getIssuerReferenceFraudRateExceeded()
    {
        return $this->container['issuerReferenceFraudRateExceeded'];
    }

    /**
     * Sets issuerReferenceFraudRateExceeded
     * @param bool $issuerReferenceFraudRateExceeded Indicates if the Issuer???s RFR exceeds the allowable level based on the amount in the request (E.g. ???true??? if has exceeded, ???false??? otherwise).
     * @return $this
     */
    public function setIssuerReferenceFraudRateExceeded($issuerReferenceFraudRateExceeded)
    {
        $this->container['issuerReferenceFraudRateExceeded'] = $issuerReferenceFraudRateExceeded;

        return $this;
    }

    /**
     * Gets totalAmountValueExceeded
     * @return bool
     */
    public function getTotalAmountValueExceeded()
    {
        return $this->container['totalAmountValueExceeded'];
    }

    /**
     * Sets totalAmountValueExceeded
     * @param bool $totalAmountValueExceeded Indicates if the request amount has exceeded the maximum ETV rate. (E.g. ???true??? if exceeded, ???false??? otherwise).
     * @return $this
     */
    public function setTotalAmountValueExceeded($totalAmountValueExceeded)
    {
        $this->container['totalAmountValueExceeded'] = $totalAmountValueExceeded;

        return $this;
    }

    /**
     * Gets eeaDomesticInd
     * @return bool
     */
    public function getEeaDomesticInd()
    {
        return $this->container['eeaDomesticInd'];
    }

    /**
     * Sets eeaDomesticInd
     * @param bool $eeaDomesticInd Indicates if the input qualifies as an EEA domestic transaction where both the Acquirer Country and Issuer Country are located in the EEA. (E.g. ???1??? if transaction qualifies, ???0??? otherwise).
     * @return $this
     */
    public function setEeaDomesticInd($eeaDomesticInd)
    {
        $this->container['eeaDomesticInd'] = $eeaDomesticInd;

        return $this;
    }

    /**
     * Gets acquirerReferenceFraudRateExceeded
     * @return bool
     */
    public function getAcquirerReferenceFraudRateExceeded()
    {
        return $this->container['acquirerReferenceFraudRateExceeded'];
    }

    /**
     * Sets acquirerReferenceFraudRateExceeded
     * @param bool $acquirerReferenceFraudRateExceeded Indicates if the Acquirer???s Reference Fraud Rate (RFR) exceeds the allowable level based on the amount in the request (E.g. ???True??? if has exceeded, ???False??? otherwise).
     * @return $this
     */
    public function setAcquirerReferenceFraudRateExceeded($acquirerReferenceFraudRateExceeded)
    {
        $this->container['acquirerReferenceFraudRateExceeded'] = $acquirerReferenceFraudRateExceeded;

        return $this;
    }

    /**
     * Gets riskAttributesPresent
     * @return bool
     */
    public function getRiskAttributesPresent()
    {
        return $this->container['riskAttributesPresent'];
    }

    /**
     * Sets riskAttributesPresent
     * @param bool $riskAttributesPresent Risk Attribute Indicator based on required elements from Articles 2 & 18 of the European Banking Authority (EBA) Guidelines (E.g. ???True??? if risk attributes present, ???False??? otherwise).
     * @return $this
     */
    public function setRiskAttributesPresent($riskAttributesPresent)
    {
        $this->container['riskAttributesPresent'] = $riskAttributesPresent;

        return $this;
    }

    /**
     * Gets authenticationExemptionsId
     * @return string
     */
    public function getAuthenticationExemptionsId()
    {
        return $this->container['authenticationExemptionsId'];
    }

    /**
     * Sets authenticationExemptionsId
     * @param string $authenticationExemptionsId CYBS generated UUID used to identify the transaction. Note: 36 with hashes.
     * @return $this
     */
    public function setAuthenticationExemptionsId($authenticationExemptionsId)
    {
        if (!is_null($authenticationExemptionsId) && (strlen($authenticationExemptionsId) > 36)) {
            throw new \InvalidArgumentException('invalid length for $authenticationExemptionsId when calling RiskV1AuthenticationExemptionsPost201ResponseConsumerAuthenticationInformationStrongAuthentication., must be smaller than or equal to 36.');
        }

        $this->container['authenticationExemptionsId'] = $authenticationExemptionsId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


