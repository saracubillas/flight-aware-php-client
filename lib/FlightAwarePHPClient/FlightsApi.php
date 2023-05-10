<?php

/**
 * AeroAPI
 *
 * # Introduction AeroAPI is a simple, query-based API that gives software developers access to a variety of FlightAware's flight data. Users can obtain current or historical data. AeroAPI is a RESTful API delivering accurate and actionable aviation data. With the introduction of Foresight™, customers have access to the data that powers over half of the predictive airline ETAs in the US.  ## Categories AeroAPI is divided into several categories to make things easier to discover. - Flights: Summary information, planned routes, positions and more - Foresight: Flight positions enhanced with FlightAware Foresight™ - Airports: Airport information and FIDS style resources - Operators: Operator information and fleet activity resources - Alerts: Configure flight alerts and delivery destinations - History: Historical flight access for various endpoints - Miscellaneous: Flight disruption, future schedule information, and aircraft owner information  ## Development Tools AeroAPI is defined using the OpenAPI Spec 3.0, which means it can be easily imported into tools like Postman. To get started try importing the API specification using [Postman's instructions](https://learning.postman.com/docs/integrations/available-integrations/working-with-openAPI/). Once imported as a collection only the \"Value\" field under the collection's Authorization tab needs to be populated and saved before making calls.  The AeroAPI OpenAPI specification is located at:\\ https://flightaware.com/commercial/aeroapi/resources/aeroapi-openapi.yml  Our [open source AeroApps project](/aeroapi/portal/resources) provides a small collection of services and sample applications to help you get started.  The Flight Information Display System (FIDS) AeroApp is an example of a multi-tier application using multiple languages and Docker containers. It demonstrates connectivity, data caching, flight presentation, and leveraging flight maps.  The Alerts AeroApp demonstrates the use of AeroAPI to set, edit, and receive alerts in a sample application with a Dockerized Python backend and a React frontend.  Our AeroAPI push notification [testing interface](/commercial/aeroapi/send.rvt) provides a quick and easy way to test the delivery of customized alerts via AeroAPI push.
 *
 * OpenAPI spec version: 4.12
 *
 */



namespace FlightAware\PHPClient\FlightAwarePHPClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FlightAware\PHPClient\ApiException;
use FlightAware\PHPClient\Configuration;
use FlightAware\PHPClient\HeaderSelector;
use FlightAware\PHPClient\ObjectSerializer;

/**
 * FlightsApi Class Doc Comment
 *
 * @category Class
 * @package  FlightAware\PHPClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function getFlight(
        $ident,
        $ident_type = null,
        $start = null,
        $end = null,
        $max_pages = '1',
        $cursor = null
    ) {
        return $this->getFlightWithHttpInfo($ident, $ident_type, $start,
            $end, $max_pages, $cursor);
    }

    public function getFlightWithHttpInfo(
        $ident,
        $ident_type = null,
        $start = null,
        $end = null,
        $max_pages = '1',
        $cursor = null
    ) {
        $request = $this->getFlightRequest($ident, $ident_type, $start, $end,
            $max_pages, $cursor);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()
                        ->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();

            return  $responseBody->getContents();

        } catch (ApiException $e) {
            throw $e;
        }
    }

    protected function getFlightRequest(
        $ident,
        $ident_type = null,
        $start = null,
        $end = null,
        $max_pages = '1',
        $cursor = null
    ) {
        // verify the required parameter 'ident' is set
        if ($ident === null || (is_array($ident) && count($ident) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ident when calling getFlight'
            );
        }
        $resourcePath = '/flights/{ident}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($ident_type !== null) {
            $queryParams['ident_type']
                = ObjectSerializer::toQueryValue($ident_type, null);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = ObjectSerializer::toQueryValue($start,
                null);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = ObjectSerializer::toQueryValue($end, null);
        }
        // query params
        if ($max_pages !== null) {
            $queryParams['max_pages']
                = ObjectSerializer::toQueryValue($max_pages, null);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor,
                null);
        }
        // path params
        if ($ident !== null) {
            $resourcePath = str_replace(
                '{'.'ident'.'}',
                ObjectSerializer::toPathValue($ident),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass
                && $headers['Content-Type'] === 'application/json'
            ) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-apikey');
        if ($apiKey !== null) {
            $headers['x-apikey'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws \RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG]
                = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '
                    .$this->config->getDebugFile());
            }
        }

        return $options;
    }

    public function getFlightRoute($id)
    {
        [$response] = $this->getFlightRouteWithHttpInfo($id);

        return $response;
    }

    public function getFlightRouteWithHttpInfo($id)
    {
        $request = $this->getFlightRouteRequest($id);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()
                        ->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'getFlightRoute'
     *
     * @param string $id The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    protected function getFlightRouteRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getFlightRoute'
            );
        }
        $resourcePath = '/flights/{id}/route';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{'.'id'.'}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass
                && $headers['Content-Type'] === 'application/json'
            ) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-apikey');
        if ($apiKey !== null) {
            $headers['x-apikey'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }


    public function getFlightsByAdvancedSearch(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        [$response] = $this->getFlightsByAdvancedSearchWithHttpInfo($query,
            $max_pages, $cursor);

        return $response;
    }

    public function getFlightsByAdvancedSearchWithHttpInfo(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        $request = $this->getFlightsByAdvancedSearchRequest($query, $max_pages,
            $cursor);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()
                        ->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'getFlightsByAdvancedSearch'
     *
     * @param string $query     Query to search for airborne or recently arrived flights. It should not exceed 1000 bytes in length. Search criteria is only applied to the most recent position for a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false arrived} * true - results must have the specified boolean key set to a value of true. Example: {true lifeguard} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * &#x3D; - results must have a key that exactly matches the specified value. Example: {&#x3D; aircraftType C172} * !&#x3D; - results must have a key that must not match the specified value. Example: {!&#x3D; prefix H} * &lt; - results must have a key that is lexicographically less-than a specified value. Example: {&lt; arrivalTime 1276811040} * \\&gt; - results must have a key that is lexicographically greater-than a specified value. Example: {&gt; speed 500} * &lt;&#x3D; - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {&lt;&#x3D; alt 8000} * \\&gt;&#x3D; - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}} * orig_or_dest - results must have either the origin or destination key exactly match one of the specified values. Example: {orig_or_dest {KLAX KBUR KSNA KLGB}} * airline - results will only include airline flight if the argument is 1, or will only include GA flights if the argument is 0. Example: {airline 1} * aircraftType - results must have an aircraftType key that matches one of the specified case-insensitive wildcard patterns. Example: {aircraftType {B76* B77*}} * ident - results must have an ident key that matches one of the specified case-insensitive wildcard patterns. Example: {ident {N123* N456* AAL* UAL*}} * ident_or_reg - results must have an ident key or was known to be operated by an aircraft registration that matches one of the specified case-insensitive wildcard patterns. Example: {ident_or_reg {N123* N456* AAL* UAL*}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * actualDepartureTime - Actual time of departure, or null if not departed yet. UNIX epoch timestamp seconds since 1970 * aircraftType - aircraft type ID (for example: B763) * alt - altitude at last reported position (hundreds of feet or Flight Level) * altChange - altitude change indication (for example: \&quot;C\&quot; if climbing, \&quot;D\&quot; if descending, and empty if it is level) * arrivalTime - Actual time of arrival, or null if not arrived yet. UNIX epoch timestamp seconds since 1970 * arrived - true if the flight has arrived at its destination. * cancelled - true if the flight has been cancelled. The meaning of cancellation is that the flight is no longer being tracked by FlightAware. There are a number of reasons a flight may be cancelled including cancellation by the airline, but that will not always be the case. * cdt - Controlled Departure Time, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * clock - Time of last received position. UNIX epoch timestamp seconds since 1970 * cta - Controlled Time of Arrival, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * dest - ICAO airport code of destination (for example: KLAX) * edt - Estimated Departure Time. Epoch timestamp seconds since 1970 * eta - Estimated Time of Arrival. Epoch timestamp seconds since 1970 * fdt - Field Departure Time. UNIX epoch timestamp seconds since 1970 * firstPositionTime - Time when first reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970 * fixes - intersections and/or VORs along the route (for example: SLS AMERO ARTOM VODIR NOTOS ULAPA ACA NUXCO OLULA PERAS ALIPO UPN GDL KEDMA BRISA CUL PERTI CEN PPE ALTAR ASUTA JLI RONLD LAADY WYVIL OLDEE RAL PDZ ARNES BASET WELLZ CIVET) * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed at last reported position, in kts. * heading - direction of travel at last reported position. * hiLat - highest latitude travelled by flight. * hiLon - highest longitude travelled by flight. * ident - flight identifier or registration of aircraft. * lastPositionTime - Time when last reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970. * lat - latitude of last reported position. * lifeguard - true if a \&quot;lifeguard\&quot; rescue flight. * lon - longitude of last reported position. * lowLat - lowest latitude travelled by flight. * lowLon - lowest longitude travelled by flight. * ogta - Original Time of Arrival. UNIX epoch timestamp seconds since 1970 * ogtd - Original Time of Departure. UNIX epoch timestamp seconds since 1970 * orig - ICAO airport code of origin (for example: KIAH) * physClass - physical class (for example: J is jet) * prefix - A one or two character identifier prefix code (common values: G or GG Medevac, L Lifeguard, A Air Taxi, H Heavy, M Medium). * speed - ground speed, in kts. * status - Single letter code for current flight status, can be S Scheduled, F Filed, A Active, Z Completed, or X Cancelled. * updateType - data source of last position (P&#x3D;projected, O&#x3D;oceanic, Z&#x3D;radar, A&#x3D;ADS-B, M&#x3D;multilateration, D&#x3D;datalink, X&#x3D;surface and near surface (ADS-B and ASDE-X), S&#x3D;space-based). * waypoints - all of the intersections and VORs comprising the route (optional)
     * @param int    $max_pages Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. (optional, default to 1)
     * @param string $cursor    Opaque value used to get the next batch of data from a paged collection. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFlightsByAdvancedSearchRequest(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        $resourcePath = '/flights/search/advanced';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query,
                null);
        }
        // query params
        if ($max_pages !== null) {
            $queryParams['max_pages']
                = ObjectSerializer::toQueryValue($max_pages, null);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor,
                null);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass
                && $headers['Content-Type'] === 'application/json'
            ) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-apikey');
        if ($apiKey !== null) {
            $headers['x-apikey'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }



    public function getFlightsBySearch(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        [$response] = $this->getFlightsBySearchWithHttpInfo($query, $max_pages,
            $cursor);

        return $response;
    }

    public function getFlightsBySearchWithHttpInfo(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        $request = $this->getFlightsBySearchRequest($query, $max_pages,
            $cursor);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()
                        ->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'getFlightsBySearch'
     *
     * @param string $query     Query to search for flights with a simplified syntax (compared to /flights/search/advanced). It should not exceed 1000 bytes in length. Query syntax allows filtering by latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising \&quot;-key value\&quot; pairs. Codeshares and alternate idents are NOT searched when using the -idents clause.  Keys include: * &#x60;-prefix STRING&#x60; * &#x60;-type STRING&#x60; * &#x60;-idents STRING&#x60; * &#x60;-identOrReg STRING&#x60; * &#x60;-airline STRING&#x60; * &#x60;-destination STRING&#x60; * &#x60;-origin STRING&#x60; * &#x60;-originOrDestination STRING&#x60; * &#x60;-aboveAltitude INTEGER&#x60; * &#x60;-belowAltitude INTEGER&#x60; * &#x60;-aboveGroundspeed INTEGER&#x60; * &#x60;-belowGroundspeed INTEGER&#x60; * &#x60;-latlong \&quot;MINLAT MINLON MAXLAT MAXLON\&quot;&#x60; * &#x60;-filter {ga|airline}&#x60; (optional)
     * @param int    $max_pages Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. (optional, default to 1)
     * @param string $cursor    Opaque value used to get the next batch of data from a paged collection. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFlightsBySearchRequest(
        $query = null,
        $max_pages = '1',
        $cursor = null
    ) {
        $resourcePath = '/flights/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($query !== null) {
            $queryParams['query'] = ObjectSerializer::toQueryValue($query,
                null);
        }
        // query params
        if ($max_pages !== null) {
            $queryParams['max_pages']
                = ObjectSerializer::toQueryValue($max_pages, null);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor,
                null);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass
                && $headers['Content-Type'] === 'application/json'
            ) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-apikey');
        if ($apiKey !== null) {
            $headers['x-apikey'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }


    public function getFlightsCanonical(
        $ident,
        $ident_type = null,
        $country_code = null
    ) {
        [$response] = $this->getFlightsCanonicalWithHttpInfo($ident,
            $ident_type, $country_code);

        return $response;
    }

    public function getFlightsCanonicalWithHttpInfo(
        $ident,
        $ident_type = null,
        $country_code = null
    ) {
        $request = $this->getFlightsCanonicalRequest($ident, $ident_type,
            $country_code);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()
                        ->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'getFlightsCanonical'
     *
     * @param string $ident        The flight designator or aircraft registration (required)
     * @param string $ident_type   Type of ident provided in the ident parameter (optional)
     * @param string $country_code An ISO 3166-1 alpha-2 country code. (optional)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    protected function getFlightsCanonicalRequest(
        $ident,
        $ident_type = null,
        $country_code = null
    ) {
        // verify the required parameter 'ident' is set
        if ($ident === null || (is_array($ident) && count($ident) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ident when calling getFlightsCanonical'
            );
        }
        $resourcePath = '/flights/{ident}/canonical';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($ident_type !== null) {
            $queryParams['ident_type']
                = ObjectSerializer::toQueryValue($ident_type, null);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['country_code']
                = ObjectSerializer::toQueryValue($country_code, null);
        }
        // path params
        if ($ident !== null) {
            $resourcePath = str_replace(
                '{'.'ident'.'}',
                ObjectSerializer::toPathValue($ident),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json; charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json; charset=UTF-8'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass
                && $headers['Content-Type'] === 'application/json'
            ) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-apikey');
        if ($apiKey !== null) {
            $headers['x-apikey'] = $apiKey;
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

}
