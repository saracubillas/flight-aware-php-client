<?php
/**
 * InlineResponse20038
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
 * InlineResponse20038 Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20038 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_38';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'manufacturer' => 'string',
'type' => 'string',
'description' => 'string',
'engine_count' => 'int',
'engine_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'manufacturer' => null,
'type' => null,
'description' => null,
'engine_count' => null,
'engine_type' => null    ];

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
        'manufacturer' => 'manufacturer',
'type' => 'type',
'description' => 'description',
'engine_count' => 'engine_count',
'engine_type' => 'engine_type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manufacturer' => 'setManufacturer',
'type' => 'setType',
'description' => 'setDescription',
'engine_count' => 'setEngineCount',
'engine_type' => 'setEngineType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manufacturer' => 'getManufacturer',
'type' => 'getType',
'description' => 'getDescription',
'engine_count' => 'getEngineCount',
'engine_type' => 'getEngineType'    ];

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
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engine_count'] = isset($data['engine_count']) ? $data['engine_count'] : null;
        $this->container['engine_type'] = isset($data['engine_type']) ? $data['engine_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer Manufacturer of aircraft
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of aircraft
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A short description of the aircraft
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets engine_count
     *
     * @return int
     */
    public function getEngineCount()
    {
        return $this->container['engine_count'];
    }

    /**
     * Sets engine_count
     *
     * @param int $engine_count Number of engines
     *
     * @return $this
     */
    public function setEngineCount($engine_count)
    {
        $this->container['engine_count'] = $engine_count;

        return $this;
    }

    /**
     * Gets engine_type
     *
     * @return string
     */
    public function getEngineType()
    {
        return $this->container['engine_type'];
    }

    /**
     * Sets engine_type
     *
     * @param string $engine_type Type of engine
     *
     * @return $this
     */
    public function setEngineType($engine_type)
    {
        $this->container['engine_type'] = $engine_type;

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
