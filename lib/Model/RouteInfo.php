<?php
/**
 * RouteInfo
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
 * RouteInfo Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RouteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RouteInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aircraft_types' => 'string[]',
'count' => 'int',
'filed_altitude_max' => 'int',
'filed_altitude_min' => 'int',
'last_departure_time' => '\DateTime',
'route' => 'string',
'route_distance' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aircraft_types' => null,
'count' => null,
'filed_altitude_max' => null,
'filed_altitude_min' => null,
'last_departure_time' => 'date-time',
'route' => null,
'route_distance' => null    ];

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
        'aircraft_types' => 'aircraft_types',
'count' => 'count',
'filed_altitude_max' => 'filed_altitude_max',
'filed_altitude_min' => 'filed_altitude_min',
'last_departure_time' => 'last_departure_time',
'route' => 'route',
'route_distance' => 'route_distance'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aircraft_types' => 'setAircraftTypes',
'count' => 'setCount',
'filed_altitude_max' => 'setFiledAltitudeMax',
'filed_altitude_min' => 'setFiledAltitudeMin',
'last_departure_time' => 'setLastDepartureTime',
'route' => 'setRoute',
'route_distance' => 'setRouteDistance'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aircraft_types' => 'getAircraftTypes',
'count' => 'getCount',
'filed_altitude_max' => 'getFiledAltitudeMax',
'filed_altitude_min' => 'getFiledAltitudeMin',
'last_departure_time' => 'getLastDepartureTime',
'route' => 'getRoute',
'route_distance' => 'getRouteDistance'    ];

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
        $this->container['aircraft_types'] = isset($data['aircraft_types']) ? $data['aircraft_types'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['filed_altitude_max'] = isset($data['filed_altitude_max']) ? $data['filed_altitude_max'] : null;
        $this->container['filed_altitude_min'] = isset($data['filed_altitude_min']) ? $data['filed_altitude_min'] : null;
        $this->container['last_departure_time'] = isset($data['last_departure_time']) ? $data['last_departure_time'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['route_distance'] = isset($data['route_distance']) ? $data['route_distance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['aircraft_types'] === null) {
            $invalidProperties[] = "'aircraft_types' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['filed_altitude_max'] === null) {
            $invalidProperties[] = "'filed_altitude_max' can't be null";
        }
        if ($this->container['filed_altitude_min'] === null) {
            $invalidProperties[] = "'filed_altitude_min' can't be null";
        }
        if ($this->container['last_departure_time'] === null) {
            $invalidProperties[] = "'last_departure_time' can't be null";
        }
        if ($this->container['route'] === null) {
            $invalidProperties[] = "'route' can't be null";
        }
        if ($this->container['route_distance'] === null) {
            $invalidProperties[] = "'route_distance' can't be null";
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
     * Gets aircraft_types
     *
     * @return string[]
     */
    public function getAircraftTypes()
    {
        return $this->container['aircraft_types'];
    }

    /**
     * Sets aircraft_types
     *
     * @param string[] $aircraft_types List of aircraft types that have filed this route
     *
     * @return $this
     */
    public function setAircraftTypes($aircraft_types)
    {
        $this->container['aircraft_types'] = $aircraft_types;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count The number of flights with this filed route
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets filed_altitude_max
     *
     * @return int
     */
    public function getFiledAltitudeMax()
    {
        return $this->container['filed_altitude_max'];
    }

    /**
     * Sets filed_altitude_max
     *
     * @param int $filed_altitude_max The highest altitude filed for the route (hundreds of feet)
     *
     * @return $this
     */
    public function setFiledAltitudeMax($filed_altitude_max)
    {
        $this->container['filed_altitude_max'] = $filed_altitude_max;

        return $this;
    }

    /**
     * Gets filed_altitude_min
     *
     * @return int
     */
    public function getFiledAltitudeMin()
    {
        return $this->container['filed_altitude_min'];
    }

    /**
     * Sets filed_altitude_min
     *
     * @param int $filed_altitude_min The lowest altitude filed for the route (hundreds of feet)
     *
     * @return $this
     */
    public function setFiledAltitudeMin($filed_altitude_min)
    {
        $this->container['filed_altitude_min'] = $filed_altitude_min;

        return $this;
    }

    /**
     * Gets last_departure_time
     *
     * @return \DateTime
     */
    public function getLastDepartureTime()
    {
        return $this->container['last_departure_time'];
    }

    /**
     * Sets last_departure_time
     *
     * @param \DateTime $last_departure_time The latest departure time for a flight operating on this route
     *
     * @return $this
     */
    public function setLastDepartureTime($last_departure_time)
    {
        $this->container['last_departure_time'] = $last_departure_time;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string $route The IFR route assigned
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets route_distance
     *
     * @return string
     */
    public function getRouteDistance()
    {
        return $this->container['route_distance'];
    }

    /**
     * Sets route_distance
     *
     * @param string $route_distance The distance as filed for the route. May vary from the actual distance flown. Includes units in string.
     *
     * @return $this
     */
    public function setRouteDistance($route_distance)
    {
        $this->container['route_distance'] = $route_distance;

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