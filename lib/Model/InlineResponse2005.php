<?php
/**
 * InlineResponse2005
 *
 * PHP version 5
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AeroAPI
 *
 * # Introduction AeroAPI is a simple, query-based API that gives software developers access to a variety of FlightAware's flight data. Users can obtain current or historical data. AeroAPI is a RESTful API delivering accurate and actionable aviation data. With the introduction of Foresight™, customers have access to the data that powers over half of the predictive airline ETAs in the US.  ## Categories AeroAPI is divided into several categories to make things easier to discover. - Flights: Summary information, planned routes, positions and more - Foresight: Flight positions enhanced with FlightAware Foresight™ - Airports: Airport information and FIDS style resources - Operators: Operator information and fleet activity resources - Alerts: Configure flight alerts and delivery destinations - History: Historical flight access for various endpoints - Miscellaneous: Flight disruption, future schedule information, and aircraft owner information  ## Development Tools AeroAPI is defined using the OpenAPI Spec 3.0, which means it can be easily imported into tools like Postman. To get started try importing the API specification using [Postman's instructions](https://learning.postman.com/docs/integrations/available-integrations/working-with-openAPI/). Once imported as a collection only the \"Value\" field under the collection's Authorization tab needs to be populated and saved before making calls.  The AeroAPI OpenAPI specification is located at:\\ https://flightaware.com/commercial/aeroapi/resources/aeroapi-openapi.yml  Our [open source AeroApps project](/aeroapi/portal/resources) provides a small collection of services and sample applications to help you get started.  The Flight Information Display System (FIDS) AeroApp is an example of a multi-tier application using multiple languages and Docker containers. It demonstrates connectivity, data caching, flight presentation, and leveraging flight maps.  The Alerts AeroApp demonstrates the use of AeroAPI to set, edit, and receive alerts in a sample application with a Dockerized Python backend and a React frontend.  Our AeroAPI push notification [testing interface](/commercial/aeroapi/send.rvt) provides a quick and easy way to test the delivery of customized alerts via AeroAPI push.
 *
 * OpenAPI spec version: 4.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.42
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FlightAware\PHPClient\Model;

use \ArrayAccess;
use \FlightAware\PHPClient\ObjectSerializer;

/**
 * InlineResponse2005 Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2005 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'foresight_predictions_available' => 'bool',
'predicted_out' => '\DateTime',
'predicted_off' => '\DateTime',
'predicted_on' => '\DateTime',
'predicted_in' => '\DateTime',
'predicted_out_source' => 'string',
'predicted_off_source' => 'string',
'predicted_on_source' => 'string',
'predicted_in_source' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'foresight_predictions_available' => null,
'predicted_out' => 'date-time',
'predicted_off' => 'date-time',
'predicted_on' => 'date-time',
'predicted_in' => 'date-time',
'predicted_out_source' => null,
'predicted_off_source' => null,
'predicted_on_source' => null,
'predicted_in_source' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'foresight_predictions_available' => 'foresight_predictions_available',
'predicted_out' => 'predicted_out',
'predicted_off' => 'predicted_off',
'predicted_on' => 'predicted_on',
'predicted_in' => 'predicted_in',
'predicted_out_source' => 'predicted_out_source',
'predicted_off_source' => 'predicted_off_source',
'predicted_on_source' => 'predicted_on_source',
'predicted_in_source' => 'predicted_in_source'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'foresight_predictions_available' => 'setForesightPredictionsAvailable',
'predicted_out' => 'setPredictedOut',
'predicted_off' => 'setPredictedOff',
'predicted_on' => 'setPredictedOn',
'predicted_in' => 'setPredictedIn',
'predicted_out_source' => 'setPredictedOutSource',
'predicted_off_source' => 'setPredictedOffSource',
'predicted_on_source' => 'setPredictedOnSource',
'predicted_in_source' => 'setPredictedInSource'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'foresight_predictions_available' => 'getForesightPredictionsAvailable',
'predicted_out' => 'getPredictedOut',
'predicted_off' => 'getPredictedOff',
'predicted_on' => 'getPredictedOn',
'predicted_in' => 'getPredictedIn',
'predicted_out_source' => 'getPredictedOutSource',
'predicted_off_source' => 'getPredictedOffSource',
'predicted_on_source' => 'getPredictedOnSource',
'predicted_in_source' => 'getPredictedInSource'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const PREDICTED_OUT_SOURCE_NULL = 'null';
const PREDICTED_OUT_SOURCE_FORESIGHT = 'Foresight';
const PREDICTED_OUT_SOURCE_HISTORICAL_AVERAGE = 'Historical Average';
const PREDICTED_OFF_SOURCE_NULL = 'null';
const PREDICTED_OFF_SOURCE_FORESIGHT = 'Foresight';
const PREDICTED_OFF_SOURCE_HISTORICAL_AVERAGE = 'Historical Average';
const PREDICTED_ON_SOURCE_NULL = 'null';
const PREDICTED_ON_SOURCE_FORESIGHT = 'Foresight';
const PREDICTED_ON_SOURCE_HISTORICAL_AVERAGE = 'Historical Average';
const PREDICTED_IN_SOURCE_NULL = 'null';
const PREDICTED_IN_SOURCE_FORESIGHT = 'Foresight';
const PREDICTED_IN_SOURCE_HISTORICAL_AVERAGE = 'Historical Average';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPredictedOutSourceAllowableValues()
    {
        return [
            self::PREDICTED_OUT_SOURCE_NULL,
self::PREDICTED_OUT_SOURCE_FORESIGHT,
self::PREDICTED_OUT_SOURCE_HISTORICAL_AVERAGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPredictedOffSourceAllowableValues()
    {
        return [
            self::PREDICTED_OFF_SOURCE_NULL,
self::PREDICTED_OFF_SOURCE_FORESIGHT,
self::PREDICTED_OFF_SOURCE_HISTORICAL_AVERAGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPredictedOnSourceAllowableValues()
    {
        return [
            self::PREDICTED_ON_SOURCE_NULL,
self::PREDICTED_ON_SOURCE_FORESIGHT,
self::PREDICTED_ON_SOURCE_HISTORICAL_AVERAGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPredictedInSourceAllowableValues()
    {
        return [
            self::PREDICTED_IN_SOURCE_NULL,
self::PREDICTED_IN_SOURCE_FORESIGHT,
self::PREDICTED_IN_SOURCE_HISTORICAL_AVERAGE,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['foresight_predictions_available'] = isset($data['foresight_predictions_available']) ? $data['foresight_predictions_available'] : null;
        $this->container['predicted_out'] = isset($data['predicted_out']) ? $data['predicted_out'] : null;
        $this->container['predicted_off'] = isset($data['predicted_off']) ? $data['predicted_off'] : null;
        $this->container['predicted_on'] = isset($data['predicted_on']) ? $data['predicted_on'] : null;
        $this->container['predicted_in'] = isset($data['predicted_in']) ? $data['predicted_in'] : null;
        $this->container['predicted_out_source'] = isset($data['predicted_out_source']) ? $data['predicted_out_source'] : null;
        $this->container['predicted_off_source'] = isset($data['predicted_off_source']) ? $data['predicted_off_source'] : null;
        $this->container['predicted_on_source'] = isset($data['predicted_on_source']) ? $data['predicted_on_source'] : null;
        $this->container['predicted_in_source'] = isset($data['predicted_in_source']) ? $data['predicted_in_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['foresight_predictions_available'] === null) {
            $invalidProperties[] = "'foresight_predictions_available' can't be null";
        }
        if ($this->container['predicted_out'] === null) {
            $invalidProperties[] = "'predicted_out' can't be null";
        }
        if ($this->container['predicted_off'] === null) {
            $invalidProperties[] = "'predicted_off' can't be null";
        }
        if ($this->container['predicted_on'] === null) {
            $invalidProperties[] = "'predicted_on' can't be null";
        }
        if ($this->container['predicted_in'] === null) {
            $invalidProperties[] = "'predicted_in' can't be null";
        }
        if ($this->container['predicted_out_source'] === null) {
            $invalidProperties[] = "'predicted_out_source' can't be null";
        }
        $allowedValues = $this->getPredictedOutSourceAllowableValues();
        if (!is_null($this->container['predicted_out_source']) && !in_array($this->container['predicted_out_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'predicted_out_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['predicted_off_source'] === null) {
            $invalidProperties[] = "'predicted_off_source' can't be null";
        }
        $allowedValues = $this->getPredictedOffSourceAllowableValues();
        if (!is_null($this->container['predicted_off_source']) && !in_array($this->container['predicted_off_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'predicted_off_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['predicted_on_source'] === null) {
            $invalidProperties[] = "'predicted_on_source' can't be null";
        }
        $allowedValues = $this->getPredictedOnSourceAllowableValues();
        if (!is_null($this->container['predicted_on_source']) && !in_array($this->container['predicted_on_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'predicted_on_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['predicted_in_source'] === null) {
            $invalidProperties[] = "'predicted_in_source' can't be null";
        }
        $allowedValues = $this->getPredictedInSourceAllowableValues();
        if (!is_null($this->container['predicted_in_source']) && !in_array($this->container['predicted_in_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'predicted_in_source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets foresight_predictions_available
     *
     * @return bool
     */
    public function getForesightPredictionsAvailable()
    {
        return $this->container['foresight_predictions_available'];
    }

    /**
     * Sets foresight_predictions_available
     *
     * @param bool $foresight_predictions_available Indicates if Foresight predictions are available for AeroAPI /foresight endpoints.
     *
     * @return $this
     */
    public function setForesightPredictionsAvailable($foresight_predictions_available)
    {
        $this->container['foresight_predictions_available'] = $foresight_predictions_available;

        return $this;
    }

    /**
     * Gets predicted_out
     *
     * @return \DateTime
     */
    public function getPredictedOut()
    {
        return $this->container['predicted_out'];
    }

    /**
     * Sets predicted_out
     *
     * @param \DateTime $predicted_out Predicted time of gate departure event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOut($predicted_out)
    {
        $this->container['predicted_out'] = $predicted_out;

        return $this;
    }

    /**
     * Gets predicted_off
     *
     * @return \DateTime
     */
    public function getPredictedOff()
    {
        return $this->container['predicted_off'];
    }

    /**
     * Sets predicted_off
     *
     * @param \DateTime $predicted_off Predicted time of runway departure event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOff($predicted_off)
    {
        $this->container['predicted_off'] = $predicted_off;

        return $this;
    }

    /**
     * Gets predicted_on
     *
     * @return \DateTime
     */
    public function getPredictedOn()
    {
        return $this->container['predicted_on'];
    }

    /**
     * Sets predicted_on
     *
     * @param \DateTime $predicted_on Predicted time of runway arrival event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOn($predicted_on)
    {
        $this->container['predicted_on'] = $predicted_on;

        return $this;
    }

    /**
     * Gets predicted_in
     *
     * @return \DateTime
     */
    public function getPredictedIn()
    {
        return $this->container['predicted_in'];
    }

    /**
     * Sets predicted_in
     *
     * @param \DateTime $predicted_in Predicted time of gate arrival event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedIn($predicted_in)
    {
        $this->container['predicted_in'] = $predicted_in;

        return $this;
    }

    /**
     * Gets predicted_out_source
     *
     * @return string
     */
    public function getPredictedOutSource()
    {
        return $this->container['predicted_out_source'];
    }

    /**
     * Sets predicted_out_source
     *
     * @param string $predicted_out_source Source indicator of the predicted time of the gate departure event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOutSource($predicted_out_source)
    {
        $allowedValues = $this->getPredictedOutSourceAllowableValues();
        if (!in_array($predicted_out_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'predicted_out_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['predicted_out_source'] = $predicted_out_source;

        return $this;
    }

    /**
     * Gets predicted_off_source
     *
     * @return string
     */
    public function getPredictedOffSource()
    {
        return $this->container['predicted_off_source'];
    }

    /**
     * Sets predicted_off_source
     *
     * @param string $predicted_off_source Source indicator of the predicted time of the runway departure event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOffSource($predicted_off_source)
    {
        $allowedValues = $this->getPredictedOffSourceAllowableValues();
        if (!in_array($predicted_off_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'predicted_off_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['predicted_off_source'] = $predicted_off_source;

        return $this;
    }

    /**
     * Gets predicted_on_source
     *
     * @return string
     */
    public function getPredictedOnSource()
    {
        return $this->container['predicted_on_source'];
    }

    /**
     * Sets predicted_on_source
     *
     * @param string $predicted_on_source Source indicator of the predicted time of the runway arrival event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedOnSource($predicted_on_source)
    {
        $allowedValues = $this->getPredictedOnSourceAllowableValues();
        if (!in_array($predicted_on_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'predicted_on_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['predicted_on_source'] = $predicted_on_source;

        return $this;
    }

    /**
     * Gets predicted_in_source
     *
     * @return string
     */
    public function getPredictedInSource()
    {
        return $this->container['predicted_in_source'];
    }

    /**
     * Sets predicted_in_source
     *
     * @param string $predicted_in_source Source indicator of the predicted time of the gate arrival event. Only available from /foresight endpoints.
     *
     * @return $this
     */
    public function setPredictedInSource($predicted_in_source)
    {
        $allowedValues = $this->getPredictedInSourceAllowableValues();
        if (!in_array($predicted_in_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'predicted_in_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['predicted_in_source'] = $predicted_in_source;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}