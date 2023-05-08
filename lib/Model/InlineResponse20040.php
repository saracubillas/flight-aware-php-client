<?php
/**
 * InlineResponse20040
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
 * InlineResponse20040 Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20040 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_40';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\FlightAware\PHPClient\Model\InlineResponse20032Links',
'num_pages' => 'int',
'entities' => '\FlightAware\PHPClient\Model\InlineResponse20041[]',
'total_cancellations_national' => 'int',
'total_cancellations_worldwide' => 'int',
'total_delays_worldwide' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
'num_pages' => null,
'entities' => null,
'total_cancellations_national' => null,
'total_cancellations_worldwide' => null,
'total_delays_worldwide' => null    ];

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
        'links' => 'links',
'num_pages' => 'num_pages',
'entities' => 'entities',
'total_cancellations_national' => 'total_cancellations_national',
'total_cancellations_worldwide' => 'total_cancellations_worldwide',
'total_delays_worldwide' => 'total_delays_worldwide'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
'num_pages' => 'setNumPages',
'entities' => 'setEntities',
'total_cancellations_national' => 'setTotalCancellationsNational',
'total_cancellations_worldwide' => 'setTotalCancellationsWorldwide',
'total_delays_worldwide' => 'setTotalDelaysWorldwide'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
'num_pages' => 'getNumPages',
'entities' => 'getEntities',
'total_cancellations_national' => 'getTotalCancellationsNational',
'total_cancellations_worldwide' => 'getTotalCancellationsWorldwide',
'total_delays_worldwide' => 'getTotalDelaysWorldwide'    ];

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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['num_pages'] = isset($data['num_pages']) ? $data['num_pages'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['total_cancellations_national'] = isset($data['total_cancellations_national']) ? $data['total_cancellations_national'] : null;
        $this->container['total_cancellations_worldwide'] = isset($data['total_cancellations_worldwide']) ? $data['total_cancellations_worldwide'] : null;
        $this->container['total_delays_worldwide'] = isset($data['total_delays_worldwide']) ? $data['total_delays_worldwide'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['num_pages'] === null) {
            $invalidProperties[] = "'num_pages' can't be null";
        }
        if ($this->container['entities'] === null) {
            $invalidProperties[] = "'entities' can't be null";
        }
        if ($this->container['total_cancellations_national'] === null) {
            $invalidProperties[] = "'total_cancellations_national' can't be null";
        }
        if ($this->container['total_cancellations_worldwide'] === null) {
            $invalidProperties[] = "'total_cancellations_worldwide' can't be null";
        }
        if ($this->container['total_delays_worldwide'] === null) {
            $invalidProperties[] = "'total_delays_worldwide' can't be null";
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
     * Gets links
     *
     * @return \FlightAware\PHPClient\Model\InlineResponse20032Links
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FlightAware\PHPClient\Model\InlineResponse20032Links $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets num_pages
     *
     * @return int
     */
    public function getNumPages()
    {
        return $this->container['num_pages'];
    }

    /**
     * Sets num_pages
     *
     * @param int $num_pages Number of pages returned
     *
     * @return $this
     */
    public function setNumPages($num_pages)
    {
        $this->container['num_pages'] = $num_pages;

        return $this;
    }

    /**
     * Gets entities
     *
     * @return \FlightAware\PHPClient\Model\InlineResponse20041[]
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \FlightAware\PHPClient\Model\InlineResponse20041[] $entities Per-entity disruption information.
     *
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets total_cancellations_national
     *
     * @return int
     */
    public function getTotalCancellationsNational()
    {
        return $this->container['total_cancellations_national'];
    }

    /**
     * Sets total_cancellations_national
     *
     * @param int $total_cancellations_national Total number of cancelled flights in the US.
     *
     * @return $this
     */
    public function setTotalCancellationsNational($total_cancellations_national)
    {
        $this->container['total_cancellations_national'] = $total_cancellations_national;

        return $this;
    }

    /**
     * Gets total_cancellations_worldwide
     *
     * @return int
     */
    public function getTotalCancellationsWorldwide()
    {
        return $this->container['total_cancellations_worldwide'];
    }

    /**
     * Sets total_cancellations_worldwide
     *
     * @param int $total_cancellations_worldwide Total number of cancelled flights.
     *
     * @return $this
     */
    public function setTotalCancellationsWorldwide($total_cancellations_worldwide)
    {
        $this->container['total_cancellations_worldwide'] = $total_cancellations_worldwide;

        return $this;
    }

    /**
     * Gets total_delays_worldwide
     *
     * @return int
     */
    public function getTotalDelaysWorldwide()
    {
        return $this->container['total_delays_worldwide'];
    }

    /**
     * Sets total_delays_worldwide
     *
     * @param int $total_delays_worldwide Total number of delayed flights.
     *
     * @return $this
     */
    public function setTotalDelaysWorldwide($total_delays_worldwide)
    {
        $this->container['total_delays_worldwide'] = $total_delays_worldwide;

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