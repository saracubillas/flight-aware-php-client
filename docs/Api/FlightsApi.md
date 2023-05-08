# FlightAware\PHPClient\FlightsApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFlight**](FlightsApi.md#getflight) | **GET** /flights/{ident} | Get information for a flight
[**getFlightMap**](FlightsApi.md#getflightmap) | **GET** /flights/{id}/map | Get an image of a flight&#x27;s track on a map
[**getFlightPosition**](FlightsApi.md#getflightposition) | **GET** /flights/{id}/position | Get flight&#x27;s current position
[**getFlightRoute**](FlightsApi.md#getflightroute) | **GET** /flights/{id}/route | Get flight&#x27;s filed route
[**getFlightTrack**](FlightsApi.md#getflighttrack) | **GET** /flights/{id}/track | Get flight&#x27;s track
[**getFlightsByAdvancedSearch**](FlightsApi.md#getflightsbyadvancedsearch) | **GET** /flights/search/advanced | Search for flights using advanced syntax
[**getFlightsByPositionSearch**](FlightsApi.md#getflightsbypositionsearch) | **GET** /flights/search/positions | Search for flight positions
[**getFlightsBySearch**](FlightsApi.md#getflightsbysearch) | **GET** /flights/search | Search for flights
[**getFlightsCanonical**](FlightsApi.md#getflightscanonical) | **GET** /flights/{ident}/canonical | Get the canonical ident of a flight
[**getFlightsCountBySearch**](FlightsApi.md#getflightscountbysearch) | **GET** /flights/search/count | Get count of flights matching search parameters
[**postFlightsByIdent**](FlightsApi.md#postflightsbyident) | **POST** /flights/{ident}/intents | Submit a Flight Intent

# **getFlight**
> \FlightAware\PHPClient\Model\InlineResponse2003 getFlight($ident, $ident_type, $start, $end, $max_pages, $cursor)

Get information for a flight

Returns the flight info status summary for a registration, ident, or fa_flight_id.  If a fa_flight_id is specified then a maximum of 1 flight is returned, unless the flight has been diverted in which case both the original flight and any diversions will be returned with a duplicate fa_flight_id. If a registration or ident is specified, approximately 14 days of recent and scheduled flight information is returned, ordered by `scheduled_out` (or `scheduled_off` if `scheduled_out` is missing) descending. Alternately, specify a start and end parameter to find your flight(s) of interest, including up to 10 days of flight history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The ident, registration, or fa_flight_id to fetch
$ident_type = "ident_type_example"; // string | Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead.
$start = new \FlightAware\PHPClient\Model\Start(); // \FlightAware\PHPClient\Model\Start | The starting date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 11 days in the past. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End(); // \FlightAware\PHPClient\Model\End | The ending date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlight($ident, $ident_type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The ident, registration, or fa_flight_id to fetch |
 **ident_type** | **string**| Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start**](../Model/.md)| The starting date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 11 days in the past. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End**](../Model/.md)| The ending date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightMap**
> \FlightAware\PHPClient\Model\InlineResponse2008 getFlightMap($id, $height, $width, $layer_on, $layer_off, $show_data_block, $airports_expand_view, $show_airports, $bounding_box)

Get an image of a flight's track on a map

Returns a flight's track as a base64-encoded image. Image can contain a variety of additional data layers beyond just the track. Data from up to 10 days ago can be obtained. If looking for older data, please use the corresponding historical endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint.
$height = 480; // int | Height of requested image (pixels)
$width = 640; // int | Width of requested image (pixels)
$layer_on = array("[\"country boundaries\",\"US state boundaries\",\"water\",\"US major roads\",\"radar\",\"track\",\"flights\",\"airports\"]"); // string[] | List of map layers to enable
$layer_off = array("[\"US Cities\",\"european country boundaries\",\"asia country boundaries\",\"major airports\"]"); // string[] | List of map layers to disable
$show_data_block = false; // bool | Whether a textual caption containing the ident, type, heading, altitude, origin, and destination should be displayed by the flight's position.
$airports_expand_view = false; // bool | Whether to force zoom area to ensure origin/destination airports are visible. Enabling this flag forcefully enables the show_airports flag as well.
$show_airports = false; // bool | Whether to show the origin/destination airports for the flight as labeled points on the map.
$bounding_box = array(3.4); // float[] | Manually specify the zoom area of the map using custom bounds. Should be a list of 4 coordinates representing the top, right, bottom, and left sides of the area (in that order).

try {
    $result = $apiInstance->getFlightMap($id, $height, $width, $layer_on, $layer_off, $show_data_block, $airports_expand_view, $show_airports, $bounding_box);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. |
 **height** | **int**| Height of requested image (pixels) | [optional] [default to 480]
 **width** | **int**| Width of requested image (pixels) | [optional] [default to 640]
 **layer_on** | [**string[]**](../Model/string.md)| List of map layers to enable | [optional] [default to [&quot;country boundaries&quot;,&quot;US state boundaries&quot;,&quot;water&quot;,&quot;US major roads&quot;,&quot;radar&quot;,&quot;track&quot;,&quot;flights&quot;,&quot;airports&quot;]]
 **layer_off** | [**string[]**](../Model/string.md)| List of map layers to disable | [optional] [default to [&quot;US Cities&quot;,&quot;european country boundaries&quot;,&quot;asia country boundaries&quot;,&quot;major airports&quot;]]
 **show_data_block** | **bool**| Whether a textual caption containing the ident, type, heading, altitude, origin, and destination should be displayed by the flight&#x27;s position. | [optional] [default to false]
 **airports_expand_view** | **bool**| Whether to force zoom area to ensure origin/destination airports are visible. Enabling this flag forcefully enables the show_airports flag as well. | [optional] [default to false]
 **show_airports** | **bool**| Whether to show the origin/destination airports for the flight as labeled points on the map. | [optional] [default to false]
 **bounding_box** | [**float[]**](../Model/float.md)| Manually specify the zoom area of the map using custom bounds. Should be a list of 4 coordinates representing the top, right, bottom, and left sides of the area (in that order). | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightPosition**
> \FlightAware\PHPClient\Model\InlineResponse2005 getFlightPosition($id)

Get flight's current position

Returns the latest position for a flight

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint.

try {
    $result = $apiInstance->getFlightPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightRoute**
> \FlightAware\PHPClient\Model\InlineResponse2007 getFlightRoute($id)

Get flight's filed route

Returns information about a flight's filed route including coordinates, names, and types of fixes along the route.  Not all flight routes can be successfully decoded by this endpoint, particularly if the flight is not entirely within the continental U.S. airspace, since this function only has access to navaids within that area. If data on a waypoint is missing then the type will be listed as \"UNKNOWN\". Data from up to 10 days ago can be obtained. If looking for older data, please use the corresponding historical endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint.

try {
    $result = $apiInstance->getFlightRoute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightTrack**
> \FlightAware\PHPClient\Model\InlineResponse2006 getFlightTrack($id, $include_estimated_positions)

Get flight's track

Returns the track for a flight as an array of positions. Data from up to 10 days ago can be obtained. If looking for older data, please use the corresponding historical endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint.
$include_estimated_positions = true; // bool | Whether to include estimated positions in the flight track

try {
    $result = $apiInstance->getFlightTrack($id, $include_estimated_positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. |
 **include_estimated_positions** | **bool**| Whether to include estimated positions in the flight track | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsByAdvancedSearch**
> \FlightAware\PHPClient\Model\InlineResponse200 getFlightsByAdvancedSearch($query, $max_pages, $cursor)

Search for flights using advanced syntax

Returns currently or recently airborne flights based on geospatial search parameters.  Query parameters include a latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising of {operator key value} elements and returns an array of flight structures. Each search term must be enclosed in curly braces. Multiple search terms can be combined in an implicit boolean \"and\" by separating the terms with at least one space. This function only searches flight data representing approximately the last 24 hours. Codeshares and alternate idents are NOT searched when matching against the ident key.  The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false arrived} * true - results must have the specified boolean key set to a value of true. Example: {true lifeguard} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * = - results must have a key that exactly matches the specified value. Example: {= aircraftType C172} * != - results must have a key that must not match the specified value. Example: {!= prefix H} * < - results must have a key that is lexicographically less-than a specified value. Example: {< arrivalTime 1276811040} * \\> - results must have a key that is lexicographically greater-than a specified value. Example: {> speed 500} * <= - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {<= alt 8000} * \\>= - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}} * orig_or_dest - results must have either the origin or destination key exactly match one of the specified values. Example: {orig_or_dest {KLAX KBUR KSNA KLGB}} * airline - results will only include airline flight if the argument is 1, or will only include GA flights if the argument is 0. Example: {airline 1} * aircraftType - results must have an aircraftType key that matches one of the specified case-insensitive wildcard patterns. Example: {aircraftType {B76* B77*}} * ident - results must have an ident key that matches one of the specified case-insensitive wildcard patterns. Example: {ident {N123* N456* AAL* UAL*}} * ident_or_reg - results must have an ident key or was known to be operated by an aircraft registration that matches one of the specified case-insensitive wildcard patterns. Example: {ident_or_reg {N123* N456* AAL* UAL*}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * actualDepartureTime - Actual time of departure, or null if not departed yet. UNIX epoch timestamp seconds since 1970 * aircraftType - aircraft type ID (for example: B763) * alt - altitude at last reported position (hundreds of feet or Flight Level) * altChange - altitude change indication (for example: \"C\" if climbing, \"D\" if descending, and empty if it is level) * arrivalTime - Actual time of arrival, or null if not arrived yet. UNIX epoch timestamp seconds since 1970 * arrived - true if the flight has arrived at its destination. * cancelled - true if the flight has been cancelled. The meaning of cancellation is that the flight is no longer being tracked by FlightAware. There are a number of reasons a flight may be cancelled including cancellation by the airline, but that will not always be the case. * cdt - Controlled Departure Time, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * clock - Time of last received position. UNIX epoch timestamp seconds since 1970 * cta - Controlled Time of Arrival, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * dest - ICAO airport code of destination (for example: KLAX) * edt - Estimated Departure Time. Epoch timestamp seconds since 1970 * eta - Estimated Time of Arrival. Epoch timestamp seconds since 1970 * fdt - Field Departure Time. UNIX epoch timestamp seconds since 1970 * firstPositionTime - Time when first reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970 * fixes - intersections and/or VORs along the route (for example: SLS AMERO ARTOM VODIR NOTOS ULAPA ACA NUXCO OLULA PERAS ALIPO UPN GDL KEDMA BRISA CUL PERTI CEN PPE ALTAR ASUTA JLI RONLD LAADY WYVIL OLDEE RAL PDZ ARNES BASET WELLZ CIVET) * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed at last reported position, in kts. * heading - direction of travel at last reported position. * hiLat - highest latitude travelled by flight. * hiLon - highest longitude travelled by flight. * ident - flight identifier or registration of aircraft. * lastPositionTime - Time when last reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970. * lat - latitude of last reported position. * lifeguard - true if a \"lifeguard\" rescue flight. * lon - longitude of last reported position. * lowLat - lowest latitude travelled by flight. * lowLon - lowest longitude travelled by flight. * ogta - Original Time of Arrival. UNIX epoch timestamp seconds since 1970 * ogtd - Original Time of Departure. UNIX epoch timestamp seconds since 1970 * orig - ICAO airport code of origin (for example: KIAH) * physClass - physical class (for example: J is jet) * prefix - A one or two character identifier prefix code (common values: G or GG Medevac, L Lifeguard, A Air Taxi, H Heavy, M Medium). * speed - ground speed, in kts. * status - Single letter code for current flight status, can be S Scheduled, F Filed, A Active, Z Completed, or X Cancelled. * updateType - data source of last position (P=projected, O=oceanic, Z=radar, A=ADS-B, M=multilateration, D=datalink, X=surface and near surface (ADS-B and ASDE-X), S=space-based). * waypoints - all of the intersections and VORs comprising the route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Query to search for airborne or recently arrived flights. It should not exceed 1000 bytes in length. Search criteria is only applied to the most recent position for a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false arrived} * true - results must have the specified boolean key set to a value of true. Example: {true lifeguard} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * = - results must have a key that exactly matches the specified value. Example: {= aircraftType C172} * != - results must have a key that must not match the specified value. Example: {!= prefix H} * < - results must have a key that is lexicographically less-than a specified value. Example: {< arrivalTime 1276811040} * \\> - results must have a key that is lexicographically greater-than a specified value. Example: {> speed 500} * <= - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {<= alt 8000} * \\>= - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}} * orig_or_dest - results must have either the origin or destination key exactly match one of the specified values. Example: {orig_or_dest {KLAX KBUR KSNA KLGB}} * airline - results will only include airline flight if the argument is 1, or will only include GA flights if the argument is 0. Example: {airline 1} * aircraftType - results must have an aircraftType key that matches one of the specified case-insensitive wildcard patterns. Example: {aircraftType {B76* B77*}} * ident - results must have an ident key that matches one of the specified case-insensitive wildcard patterns. Example: {ident {N123* N456* AAL* UAL*}} * ident_or_reg - results must have an ident key or was known to be operated by an aircraft registration that matches one of the specified case-insensitive wildcard patterns. Example: {ident_or_reg {N123* N456* AAL* UAL*}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * actualDepartureTime - Actual time of departure, or null if not departed yet. UNIX epoch timestamp seconds since 1970 * aircraftType - aircraft type ID (for example: B763) * alt - altitude at last reported position (hundreds of feet or Flight Level) * altChange - altitude change indication (for example: \"C\" if climbing, \"D\" if descending, and empty if it is level) * arrivalTime - Actual time of arrival, or null if not arrived yet. UNIX epoch timestamp seconds since 1970 * arrived - true if the flight has arrived at its destination. * cancelled - true if the flight has been cancelled. The meaning of cancellation is that the flight is no longer being tracked by FlightAware. There are a number of reasons a flight may be cancelled including cancellation by the airline, but that will not always be the case. * cdt - Controlled Departure Time, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * clock - Time of last received position. UNIX epoch timestamp seconds since 1970 * cta - Controlled Time of Arrival, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * dest - ICAO airport code of destination (for example: KLAX) * edt - Estimated Departure Time. Epoch timestamp seconds since 1970 * eta - Estimated Time of Arrival. Epoch timestamp seconds since 1970 * fdt - Field Departure Time. UNIX epoch timestamp seconds since 1970 * firstPositionTime - Time when first reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970 * fixes - intersections and/or VORs along the route (for example: SLS AMERO ARTOM VODIR NOTOS ULAPA ACA NUXCO OLULA PERAS ALIPO UPN GDL KEDMA BRISA CUL PERTI CEN PPE ALTAR ASUTA JLI RONLD LAADY WYVIL OLDEE RAL PDZ ARNES BASET WELLZ CIVET) * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed at last reported position, in kts. * heading - direction of travel at last reported position. * hiLat - highest latitude travelled by flight. * hiLon - highest longitude travelled by flight. * ident - flight identifier or registration of aircraft. * lastPositionTime - Time when last reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970. * lat - latitude of last reported position. * lifeguard - true if a \"lifeguard\" rescue flight. * lon - longitude of last reported position. * lowLat - lowest latitude travelled by flight. * lowLon - lowest longitude travelled by flight. * ogta - Original Time of Arrival. UNIX epoch timestamp seconds since 1970 * ogtd - Original Time of Departure. UNIX epoch timestamp seconds since 1970 * orig - ICAO airport code of origin (for example: KIAH) * physClass - physical class (for example: J is jet) * prefix - A one or two character identifier prefix code (common values: G or GG Medevac, L Lifeguard, A Air Taxi, H Heavy, M Medium). * speed - ground speed, in kts. * status - Single letter code for current flight status, can be S Scheduled, F Filed, A Active, Z Completed, or X Cancelled. * updateType - data source of last position (P=projected, O=oceanic, Z=radar, A=ADS-B, M=multilateration, D=datalink, X=surface and near surface (ADS-B and ASDE-X), S=space-based). * waypoints - all of the intersections and VORs comprising the route
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightsByAdvancedSearch($query, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightsByAdvancedSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Query to search for airborne or recently arrived flights. It should not exceed 1000 bytes in length. Search criteria is only applied to the most recent position for a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false arrived} * true - results must have the specified boolean key set to a value of true. Example: {true lifeguard} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * &#x3D; - results must have a key that exactly matches the specified value. Example: {&#x3D; aircraftType C172} * !&#x3D; - results must have a key that must not match the specified value. Example: {!&#x3D; prefix H} * &lt; - results must have a key that is lexicographically less-than a specified value. Example: {&lt; arrivalTime 1276811040} * \\&gt; - results must have a key that is lexicographically greater-than a specified value. Example: {&gt; speed 500} * &lt;&#x3D; - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {&lt;&#x3D; alt 8000} * \\&gt;&#x3D; - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}} * orig_or_dest - results must have either the origin or destination key exactly match one of the specified values. Example: {orig_or_dest {KLAX KBUR KSNA KLGB}} * airline - results will only include airline flight if the argument is 1, or will only include GA flights if the argument is 0. Example: {airline 1} * aircraftType - results must have an aircraftType key that matches one of the specified case-insensitive wildcard patterns. Example: {aircraftType {B76* B77*}} * ident - results must have an ident key that matches one of the specified case-insensitive wildcard patterns. Example: {ident {N123* N456* AAL* UAL*}} * ident_or_reg - results must have an ident key or was known to be operated by an aircraft registration that matches one of the specified case-insensitive wildcard patterns. Example: {ident_or_reg {N123* N456* AAL* UAL*}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * actualDepartureTime - Actual time of departure, or null if not departed yet. UNIX epoch timestamp seconds since 1970 * aircraftType - aircraft type ID (for example: B763) * alt - altitude at last reported position (hundreds of feet or Flight Level) * altChange - altitude change indication (for example: \&quot;C\&quot; if climbing, \&quot;D\&quot; if descending, and empty if it is level) * arrivalTime - Actual time of arrival, or null if not arrived yet. UNIX epoch timestamp seconds since 1970 * arrived - true if the flight has arrived at its destination. * cancelled - true if the flight has been cancelled. The meaning of cancellation is that the flight is no longer being tracked by FlightAware. There are a number of reasons a flight may be cancelled including cancellation by the airline, but that will not always be the case. * cdt - Controlled Departure Time, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * clock - Time of last received position. UNIX epoch timestamp seconds since 1970 * cta - Controlled Time of Arrival, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * dest - ICAO airport code of destination (for example: KLAX) * edt - Estimated Departure Time. Epoch timestamp seconds since 1970 * eta - Estimated Time of Arrival. Epoch timestamp seconds since 1970 * fdt - Field Departure Time. UNIX epoch timestamp seconds since 1970 * firstPositionTime - Time when first reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970 * fixes - intersections and/or VORs along the route (for example: SLS AMERO ARTOM VODIR NOTOS ULAPA ACA NUXCO OLULA PERAS ALIPO UPN GDL KEDMA BRISA CUL PERTI CEN PPE ALTAR ASUTA JLI RONLD LAADY WYVIL OLDEE RAL PDZ ARNES BASET WELLZ CIVET) * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed at last reported position, in kts. * heading - direction of travel at last reported position. * hiLat - highest latitude travelled by flight. * hiLon - highest longitude travelled by flight. * ident - flight identifier or registration of aircraft. * lastPositionTime - Time when last reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970. * lat - latitude of last reported position. * lifeguard - true if a \&quot;lifeguard\&quot; rescue flight. * lon - longitude of last reported position. * lowLat - lowest latitude travelled by flight. * lowLon - lowest longitude travelled by flight. * ogta - Original Time of Arrival. UNIX epoch timestamp seconds since 1970 * ogtd - Original Time of Departure. UNIX epoch timestamp seconds since 1970 * orig - ICAO airport code of origin (for example: KIAH) * physClass - physical class (for example: J is jet) * prefix - A one or two character identifier prefix code (common values: G or GG Medevac, L Lifeguard, A Air Taxi, H Heavy, M Medium). * speed - ground speed, in kts. * status - Single letter code for current flight status, can be S Scheduled, F Filed, A Active, Z Completed, or X Cancelled. * updateType - data source of last position (P&#x3D;projected, O&#x3D;oceanic, Z&#x3D;radar, A&#x3D;ADS-B, M&#x3D;multilateration, D&#x3D;datalink, X&#x3D;surface and near surface (ADS-B and ASDE-X), S&#x3D;space-based). * waypoints - all of the intersections and VORs comprising the route | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsByPositionSearch**
> \FlightAware\PHPClient\Model\InlineResponse2001 getFlightsByPositionSearch($query, $unique_flights, $max_pages, $cursor)

Search for flight positions

Returns flight positions based on geospatial search parameters.  This allows you to locate flights that have ever flown within a specific a latitude/longitude box, groundspeed, and altitude. It takes search terms in a single string comprising of {operator key value} elements and returns an array of flight structures. Each search term must be enclosed in curly braces. Multiple search terms can be combined in an implicit boolean \"and\" by separating the terms with at least one space. This function only searches flight data representing approximately the last 24 hours.  The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false preferred} * true - results must have the specified boolean key set to a value of true. Example: {true preferred} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * = - results must have a key that exactly matches the specified value. Example: {= fp C172} * != - results must have a key that must not match the specified value. Example: {!= prefix H} * < - results must have a key that is lexicographically less-than a specified value. Example: {< arrivalTime 1276811040} * \\> - results must have a key that is lexicographically greater-than a specified value. Example: {> speed 500} * <= - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {<= alt 8000} * \\>= - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * alt - Altitude, measured in hundreds of feet or Flight Level. * altChange - a one-character code indicating the change in altitude. * cid - a three-character cid code * clock - UNIX epoch timestamp seconds since 1970 * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed, measured in kts. * lat - latitude of the reported position. * lon - longitude of the reported position * updateType - source of the last reported position (P=projected, O=oceanic, Z=radar, A=ADS-B, M=multilateration, D=datalink, X=surface and near surface (ADS-B and ASDE-X), S=space-based)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Query to search for flight positions. It should not exceed 1000 bytes in length. Search criteria is applied against all positions of a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false preferred} * true - results must have the specified boolean key set to a value of true. Example: {true preferred} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * = - results must have a key that exactly matches the specified value. Example: {= fp C172} * != - results must have a key that must not match the specified value. Example: {!= prefix H} * < - results must have a key that is lexicographically less-than a specified value. Example: {< arrivalTime 1276811040} * \\> - results must have a key that is lexicographically greater-than a specified value. Example: {> speed 500} * <= - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {<= alt 8000} * \\>= - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * alt - Altitude, measured in hundreds of feet or Flight Level. * altChange - a one-character code indicating the change in altitude. * altMax - Altitude, measured in hundreds of feet or Flight Level. * cid - a three-character cid code * cidfac - a four-character cidfac code * clock - UNIX epoch timestamp seconds since 1970 * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed, measured in kts. * lat - latitude of the reported position. * lon - longitude of the reported position * preferred - boolean indicator of position quality * recvd - UNIX epoch timestamp seconds since 1970 * updateType - source of the last reported position (P=projected, O=oceanic, Z=radar, A=ADS-B, M=multilateration, D=datalink, X=surface and near surface (ADS-B and ASDE-X), S=space-based)
$unique_flights = false; // bool | Whether to return only a single position per unique fa_flight_id.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightsByPositionSearch($query, $unique_flights, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightsByPositionSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Query to search for flight positions. It should not exceed 1000 bytes in length. Search criteria is applied against all positions of a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false preferred} * true - results must have the specified boolean key set to a value of true. Example: {true preferred} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * &#x3D; - results must have a key that exactly matches the specified value. Example: {&#x3D; fp C172} * !&#x3D; - results must have a key that must not match the specified value. Example: {!&#x3D; prefix H} * &lt; - results must have a key that is lexicographically less-than a specified value. Example: {&lt; arrivalTime 1276811040} * \\&gt; - results must have a key that is lexicographically greater-than a specified value. Example: {&gt; speed 500} * &lt;&#x3D; - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {&lt;&#x3D; alt 8000} * \\&gt;&#x3D; - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * alt - Altitude, measured in hundreds of feet or Flight Level. * altChange - a one-character code indicating the change in altitude. * altMax - Altitude, measured in hundreds of feet or Flight Level. * cid - a three-character cid code * cidfac - a four-character cidfac code * clock - UNIX epoch timestamp seconds since 1970 * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed, measured in kts. * lat - latitude of the reported position. * lon - longitude of the reported position * preferred - boolean indicator of position quality * recvd - UNIX epoch timestamp seconds since 1970 * updateType - source of the last reported position (P&#x3D;projected, O&#x3D;oceanic, Z&#x3D;radar, A&#x3D;ADS-B, M&#x3D;multilateration, D&#x3D;datalink, X&#x3D;surface and near surface (ADS-B and ASDE-X), S&#x3D;space-based) | [optional]
 **unique_flights** | **bool**| Whether to return only a single position per unique fa_flight_id. | [optional] [default to false]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsBySearch**
> \FlightAware\PHPClient\Model\InlineResponse200 getFlightsBySearch($query, $max_pages, $cursor)

Search for flights

Search for airborne flights by matching against various parameters including geospatial data. Uses a simplified query syntax compared to /flights/search/advanced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Query to search for flights with a simplified syntax (compared to /flights/search/advanced). It should not exceed 1000 bytes in length. Query syntax allows filtering by latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising \"-key value\" pairs. Codeshares and alternate idents are NOT searched when using the -idents clause.  Keys include: * `-prefix STRING` * `-type STRING` * `-idents STRING` * `-identOrReg STRING` * `-airline STRING` * `-destination STRING` * `-origin STRING` * `-originOrDestination STRING` * `-aboveAltitude INTEGER` * `-belowAltitude INTEGER` * `-aboveGroundspeed INTEGER` * `-belowGroundspeed INTEGER` * `-latlong \"MINLAT MINLON MAXLAT MAXLON\"` * `-filter {ga|airline}`
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightsBySearch($query, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Query to search for flights with a simplified syntax (compared to /flights/search/advanced). It should not exceed 1000 bytes in length. Query syntax allows filtering by latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising \&quot;-key value\&quot; pairs. Codeshares and alternate idents are NOT searched when using the -idents clause.  Keys include: * &#x60;-prefix STRING&#x60; * &#x60;-type STRING&#x60; * &#x60;-idents STRING&#x60; * &#x60;-identOrReg STRING&#x60; * &#x60;-airline STRING&#x60; * &#x60;-destination STRING&#x60; * &#x60;-origin STRING&#x60; * &#x60;-originOrDestination STRING&#x60; * &#x60;-aboveAltitude INTEGER&#x60; * &#x60;-belowAltitude INTEGER&#x60; * &#x60;-aboveGroundspeed INTEGER&#x60; * &#x60;-belowGroundspeed INTEGER&#x60; * &#x60;-latlong \&quot;MINLAT MINLON MAXLAT MAXLON\&quot;&#x60; * &#x60;-filter {ga|airline}&#x60; | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsCanonical**
> \FlightAware\PHPClient\Model\InlineResponse2004 getFlightsCanonical($ident, $ident_type, $country_code)

Get the canonical ident of a flight

When the ident parameter is a code that could map to multiple other codes, this endpoint returns an array of information about all the possible codes. An optional ident type and country code can be provided to refine ambiguous idents to a single result. The ident type should either be designator or registration to describe the ident being passed in. The country code should represent a country the operator of the flight operates within.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The flight designator or aircraft registration
$ident_type = "ident_type_example"; // string | Type of ident provided in the ident parameter
$country_code = "country_code_example"; // string | An ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getFlightsCanonical($ident, $ident_type, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightsCanonical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The flight designator or aircraft registration |
 **ident_type** | **string**| Type of ident provided in the ident parameter | [optional]
 **country_code** | **string**| An ISO 3166-1 alpha-2 country code. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsCountBySearch**
> \FlightAware\PHPClient\Model\InlineResponse2002 getFlightsCountBySearch($query)

Get count of flights matching search parameters

Full search query documentation is available at the /flights/search endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Query to search for flights with a simplified syntax (compared to /flights/search/advanced). It should not exceed 1000 bytes in length. Query syntax allows filtering by latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising \"-key value\" pairs. Codeshares and alternate idents are NOT searched when using the -idents clause.  Keys include: * `-prefix STRING` * `-type STRING` * `-idents STRING` * `-identOrReg STRING` * `-airline STRING` * `-destination STRING` * `-origin STRING` * `-originOrDestination STRING` * `-aboveAltitude INTEGER` * `-belowAltitude INTEGER` * `-aboveGroundspeed INTEGER` * `-belowGroundspeed INTEGER` * `-latlong \"MINLAT MINLON MAXLAT MAXLON\"`

try {
    $result = $apiInstance->getFlightsCountBySearch($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->getFlightsCountBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Query to search for flights with a simplified syntax (compared to /flights/search/advanced). It should not exceed 1000 bytes in length. Query syntax allows filtering by latitude/longitude box, aircraft ident with wildcards, type with wildcards, prefix, origin airport, destination airport, origin or destination airport, groundspeed, and altitude. It takes search terms in a single string comprising \&quot;-key value\&quot; pairs. Codeshares and alternate idents are NOT searched when using the -idents clause.  Keys include: * &#x60;-prefix STRING&#x60; * &#x60;-type STRING&#x60; * &#x60;-idents STRING&#x60; * &#x60;-identOrReg STRING&#x60; * &#x60;-airline STRING&#x60; * &#x60;-destination STRING&#x60; * &#x60;-origin STRING&#x60; * &#x60;-originOrDestination STRING&#x60; * &#x60;-aboveAltitude INTEGER&#x60; * &#x60;-belowAltitude INTEGER&#x60; * &#x60;-aboveGroundspeed INTEGER&#x60; * &#x60;-belowGroundspeed INTEGER&#x60; * &#x60;-latlong \&quot;MINLAT MINLON MAXLAT MAXLON\&quot;&#x60; | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlightsByIdent**
> postFlightsByIdent($ident, $body)

Submit a Flight Intent

This operation informs FlightAware of an upcoming (or recently departed) flight. This information is used solely by FlightAware for improving the accuracy of flight tracking. This method does not transmit to any ANSP/ATC facility for flight separation or operational services. Access to this endpoint requires special account authorization. The FlightAware account must also be subscribed to FlightAware Global and the specified registration or ident must be on the Global account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The ident or registration of the Flight Intent
$body = new \FlightAware\PHPClient\Model\FlightIntent(); // \FlightAware\PHPClient\Model\FlightIntent | Flight Intent

try {
    $apiInstance->postFlightsByIdent($ident, $body);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->postFlightsByIdent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The ident or registration of the Flight Intent |
 **body** | [**\FlightAware\PHPClient\Model\FlightIntent**](../Model/FlightIntent.md)| Flight Intent | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

