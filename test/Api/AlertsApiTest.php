<?php
/**
 * AlertsApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace FlightAware\PHPClient;

use FlightAware\PHPClient\Configuration;
use FlightAware\PHPClient\ApiException;
use FlightAware\PHPClient\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * AlertsApiTest Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlertsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for createAlert
     *
     * Create new alert.
     *
     */
    public function testCreateAlert()
    {
    }

    /**
     * Test case for deleteAlert
     *
     * Delete specific alert.
     *
     */
    public function testDeleteAlert()
    {
    }

    /**
     * Test case for deleteAlertsEndpoint
     *
     * Remove and disable default account-wide alert callback URL.
     *
     */
    public function testDeleteAlertsEndpoint()
    {
    }

    /**
     * Test case for getAlert
     *
     * Get specific alert.
     *
     */
    public function testGetAlert()
    {
    }

    /**
     * Test case for getAlertsEndpoint
     *
     * Get configured alert callback URL.
     *
     */
    public function testGetAlertsEndpoint()
    {
    }

    /**
     * Test case for getAllAlerts
     *
     * Get all configured alerts.
     *
     */
    public function testGetAllAlerts()
    {
    }

    /**
     * Test case for setAlertsEndpoint
     *
     * Set alert callback URL.
     *
     */
    public function testSetAlertsEndpoint()
    {
    }

    /**
     * Test case for updateAlert
     *
     * Modify specific alert.
     *
     */
    public function testUpdateAlert()
    {
    }
}
