# FlightAware\PHPClient\ForesightApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFlightPositionWithForesight**](ForesightApi.md#getflightpositionwithforesight) | **GET** /foresight/flights/{id}/position | Get flight&#x27;s current position, including Foresight data
[**getFlightWithForesight**](ForesightApi.md#getflightwithforesight) | **GET** /foresight/flights/{ident} | Get information for a flight, including Foresight data
[**getFlightsByAdvancedSearchWithForesight**](ForesightApi.md#getflightsbyadvancedsearchwithforesight) | **GET** /foresight/flights/search/advanced | Search for flights, responses include Foresight data

# **getFlightPositionWithForesight**
> \FlightAware\PHPClient\Model\InlineResponse20011 getFlightPositionWithForesight($id)

Get flight's current position, including Foresight data

Returns the latest position for a flight

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\ForesightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint.

try {
    $result = $apiInstance->getFlightPositionWithForesight($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForesightApi->getFlightPositionWithForesight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch. If looking for data from more than 10 days ago, please use the corresponding historical endpoint. |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightWithForesight**
> \FlightAware\PHPClient\Model\InlineResponse2009 getFlightWithForesight($ident, $ident_type, $start, $end, $max_pages, $cursor)

Get information for a flight, including Foresight data

Returns the flight info status summary for a registration, ident, or fa_flight_id, including all available predicted fields.  If a fa_flight_id is specified then a maximum of 1 flight is returned, unless the flight has been diverted in which case both the original flight and any diversions will be returned with a duplicate fa_flight_id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\ForesightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The ident, registration, or fa_flight_id to fetch
$ident_type = "ident_type_example"; // string | Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead.
$start = new \FlightAware\PHPClient\Model\Start1(); // \FlightAware\PHPClient\Model\Start1 | The starting date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 11 days in the past. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End1(); // \FlightAware\PHPClient\Model\End1 | The ending date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightWithForesight($ident, $ident_type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForesightApi->getFlightWithForesight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The ident, registration, or fa_flight_id to fetch |
 **ident_type** | **string**| Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start1**](../Model/.md)| The starting date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 11 days in the past. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End1**](../Model/.md)| The ending date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If not specified, will default to departures starting approximately 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsByAdvancedSearchWithForesight**
> \FlightAware\PHPClient\Model\InlineResponse20010 getFlightsByAdvancedSearchWithForesight($query, $max_pages, $cursor)

Search for flights, responses include Foresight data

Returns currently or recently airborne flights based on geospatial search parameters. If available, flights' predicted OOOI fields will be set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\ForesightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Query to search for airborne or recently arrived flights. It should not exceed 1000 bytes in length. Search criteria is only applied to the most recent position for a flight. This function only searches flights within approximately the last 24 hours. The supported operators include (note that operators take different numbers of arguments):  * false - results must have the specified boolean key set to a value of false. Example: {false arrived} * true - results must have the specified boolean key set to a value of true. Example: {true lifeguard} * null - results must have the specified key set to a null value. Example: {null waypoints} * notnull - results must have the specified key not set to a null value. Example: {notnull aircraftType} * = - results must have a key that exactly matches the specified value. Example: {= aircraftType C172} * != - results must have a key that must not match the specified value. Example: {!= prefix H} * < - results must have a key that is lexicographically less-than a specified value. Example: {< arrivalTime 1276811040} * \\> - results must have a key that is lexicographically greater-than a specified value. Example: {> speed 500} * <= - results must have a key that is lexicographically less-than-or-equal-to a specified value. Example: {<= alt 8000} * \\>= - results must have a key that is lexicographically greater-than-or-equal-to a specified value. * match - results must have a key that matches against a case-insensitive wildcard pattern. Example: {match ident AAL*} * notmatch - results must have a key that does not match against a case-insensitive wildcard pattern. Example: {notmatch aircraftType B76*} * range - results must have a key that is numerically between the two specified values. Example: {range alt 8000 20000} * in - results must have a key that exactly matches one of the specified values. Example: {in orig {KLAX KBUR KSNA KLGB}} * orig_or_dest - results must have either the origin or destination key exactly match one of the specified values. Example: {orig_or_dest {KLAX KBUR KSNA KLGB}} * airline - results will only include airline flight if the argument is 1, or will only include GA flights if the argument is 0. Example: {airline 1} * aircraftType - results must have an aircraftType key that matches one of the specified case-insensitive wildcard patterns. Example: {aircraftType {B76* B77*}} * ident - results must have an ident key that matches one of the specified case-insensitive wildcard patterns. Example: {ident {N123* N456* AAL* UAL*}} * ident_or_reg - results must have an ident key or was known to be operated by an aircraft registration that matches one of the specified case-insensitive wildcard patterns. Example: {ident_or_reg {N123* N456* AAL* UAL*}}  The supported key names include (note that not all of these key names are returned in the result structure, and some have slightly different names):  * actualDepartureTime - Actual time of departure, or null if not departed yet. UNIX epoch timestamp seconds since 1970 * aircraftType - aircraft type ID (for example: B763) * alt - altitude at last reported position (hundreds of feet or Flight Level) * altChange - altitude change indication (for example: \"C\" if climbing, \"D\" if descending, and empty if it is level) * arrivalTime - Actual time of arrival, or null if not arrived yet. UNIX epoch timestamp seconds since 1970 * arrived - true if the flight has arrived at its destination. * cancelled - true if the flight has been cancelled. The meaning of cancellation is that the flight is no longer being tracked by FlightAware. There are a number of reasons a flight may be cancelled including cancellation by the airline, but that will not always be the case. * cdt - Controlled Departure Time, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * clock - Time of last received position. UNIX epoch timestamp seconds since 1970 * cta - Controlled Time of Arrival, set if there is a ground hold on the flight. UNIX epoch timestamp seconds since 1970 * dest - ICAO airport code of destination (for example: KLAX) * edt - Estimated Departure Time. Epoch timestamp seconds since 1970 * eta - Estimated Time of Arrival. Epoch timestamp seconds since 1970 * fdt - Field Departure Time. UNIX epoch timestamp seconds since 1970 * firstPositionTime - Time when first reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970 * fixes - intersections and/or VORs along the route (for example: SLS AMERO ARTOM VODIR NOTOS ULAPA ACA NUXCO OLULA PERAS ALIPO UPN GDL KEDMA BRISA CUL PERTI CEN PPE ALTAR ASUTA JLI RONLD LAADY WYVIL OLDEE RAL PDZ ARNES BASET WELLZ CIVET) * fp - unique identifier assigned by FlightAware for this flight, aka fa_flight_id. * gs - ground speed at last reported position, in kts. * heading - direction of travel at last reported position. * hiLat - highest latitude travelled by flight. * hiLon - highest longitude travelled by flight. * ident - flight identifier or registration of aircraft. * lastPositionTime - Time when last reported position was received, or 0 if no position has been received yet. Epoch timestamp seconds since 1970. * lat - latitude of last reported position. * lifeguard - true if a \"lifeguard\" rescue flight. * lon - longitude of last reported position. * lowLat - lowest latitude travelled by flight. * lowLon - lowest longitude travelled by flight. * ogta - Original Time of Arrival. UNIX epoch timestamp seconds since 1970 * ogtd - Original Time of Departure. UNIX epoch timestamp seconds since 1970 * orig - ICAO airport code of origin (for example: KIAH) * physClass - physical class (for example: J is jet) * prefix - A one or two character identifier prefix code (common values: G or GG Medevac, L Lifeguard, A Air Taxi, H Heavy, M Medium). * speed - ground speed, in kts. * status - Single letter code for current flight status, can be S Scheduled, F Filed, A Active, Z Completed, or X Cancelled. * updateType - data source of last position (P=projected, O=oceanic, Z=radar, A=ADS-B, M=multilateration, D=datalink, X=surface and near surface (ADS-B and ASDE-X), S=space-based). * waypoints - all of the intersections and VORs comprising the route
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightsByAdvancedSearchWithForesight($query, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForesightApi->getFlightsByAdvancedSearchWithForesight: ', $e->getMessage(), PHP_EOL;
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

[**\FlightAware\PHPClient\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

