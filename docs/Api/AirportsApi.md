# FlightAware\PHPClient\AirportsApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAirport**](AirportsApi.md#getairport) | **GET** /airports/{id} | Get static information about an airport
[**getAirportDelays**](AirportsApi.md#getairportdelays) | **GET** /airports/{id}/delays | Get airport delay information
[**getAirportFlights**](AirportsApi.md#getairportflights) | **GET** /airports/{id}/flights | Get all flights for a given airport
[**getAirportFlightsArrived**](AirportsApi.md#getairportflightsarrived) | **GET** /airports/{id}/flights/arrivals | Get flights that have recently arrived at an airport
[**getAirportFlightsCount**](AirportsApi.md#getairportflightscount) | **GET** /airports/{id}/flights/counts | Get flight counts for an airport
[**getAirportFlightsDeparted**](AirportsApi.md#getairportflightsdeparted) | **GET** /airports/{id}/flights/departures | Get flights that have recently departed from an airport
[**getAirportFlightsScheduledArrivals**](AirportsApi.md#getairportflightsscheduledarrivals) | **GET** /airports/{id}/flights/scheduled_arrivals | Get future flights arriving at an airport
[**getAirportFlightsScheduledDepartures**](AirportsApi.md#getairportflightsscheduleddepartures) | **GET** /airports/{id}/flights/scheduled_departures | Get future flights departing from an airport
[**getAirportWeatherForecast**](AirportsApi.md#getairportweatherforecast) | **GET** /airports/{id}/weather/forecast | Get weather forecast for given airport
[**getAirportWeatherObservations**](AirportsApi.md#getairportweatherobservations) | **GET** /airports/{id}/weather/observations | Get weather conditions for given airport
[**getAirportsCanonical**](AirportsApi.md#getairportscanonical) | **GET** /airports/{id}/canonical | Get the canonical code of an airport
[**getAirportsNearAirport**](AirportsApi.md#getairportsnearairport) | **GET** /airports/{id}/nearby | Get airports near an airport
[**getAllAirports**](AirportsApi.md#getallairports) | **GET** /airports | Get all airports
[**getDelaysForAllAirports**](AirportsApi.md#getdelaysforallairports) | **GET** /airports/delays | Get delay information for all airports with delays
[**getFlightsBetweenAirports**](AirportsApi.md#getflightsbetweenairports) | **GET** /airports/{id}/flights/to/{dest_id} | Get flights with a specific origin and destination
[**getNearbyAirports**](AirportsApi.md#getnearbyairports) | **GET** /airports/nearby | Get airports near a location
[**getRoutesBetweenAirports**](AirportsApi.md#getroutesbetweenairports) | **GET** /airports/{id}/routes/{dest_id} | Get routes between 2 airports

# **getAirport**
> \FlightAware\PHPClient\Model\InlineResponse20015 getAirport($id)

Get static information about an airport

Returns information about an airport given an ICAO or LID airport code such as KLAX, KIAH, O07, etc. Data returned includes airport name, city, state (when known), latitude, longitude, and timezone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.

try {
    $result = $apiInstance->getAirport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportDelays**
> \FlightAware\PHPClient\Model\AirportDelay getAirportDelays($id)

Get airport delay information

Returns a list of reason codes for delays at a specific airport. There may be multiple reasons returned if there are multiple types of delays reported at an airport. Note that individual flights may be delayed without there being an airport delay returned by this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.

try {
    $result = $apiInstance->getAirportDelays($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportDelays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |

### Return type

[**\FlightAware\PHPClient\Model\AirportDelay**](../Model/AirportDelay.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlights**
> \FlightAware\PHPClient\Model\InlineResponse20018 getAirportFlights($id, $airline, $type, $start, $end, $max_pages, $cursor)

Get all flights for a given airport

Returns all recent and upcoming flights departing from or arriving at the specified airport. Filtering/ordering behavior for the optional start and end parameters for each type (`scheduled_departures`, `scheduled_arrivals`, `departures`, `arrivals`) match the behavior in their corresponding endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$airline = "airline_example"; // string | Airline to filter flights by. Do not provide airline if type is provided.
$type = "type_example"; // string | Type of flights to return. Do not provide type if airline is provided.
$start = new \FlightAware\PHPClient\Model\Start2(); // \FlightAware\PHPClient\Model\Start2 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End2(); // \FlightAware\PHPClient\Model\End2 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportFlights($id, $airline, $type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **airline** | **string**| Airline to filter flights by. Do not provide airline if type is provided. | [optional]
 **type** | **string**| Type of flights to return. Do not provide type if airline is provided. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start2**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End2**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlightsArrived**
> \FlightAware\PHPClient\Model\InlineResponse20019 getAirportFlightsArrived($id, $airline, $type, $start, $end, $max_pages, $cursor)

Get flights that have recently arrived at an airport

Returns flights that have arrived at an airport, orderd by `actual_on` descending. The start parameter's default value is 24 hours before the current time. The end parameter's default value is the current time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$airline = "airline_example"; // string | Airline to filter flights by. Do not provide airline if type is provided.
$type = "type_example"; // string | Type of flights to return. Do not provide type if airline is provided.
$start = new \FlightAware\PHPClient\Model\Start3(); // \FlightAware\PHPClient\Model\Start3 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End3(); // \FlightAware\PHPClient\Model\End3 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportFlightsArrived($id, $airline, $type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlightsArrived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **airline** | **string**| Airline to filter flights by. Do not provide airline if type is provided. | [optional]
 **type** | **string**| Type of flights to return. Do not provide type if airline is provided. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start3**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End3**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlightsCount**
> \FlightAware\PHPClient\Model\AirportFlightCounts getAirportFlightsCount($id)

Get flight counts for an airport

Returns counts of flights for an airport broken down by flight status. The returned categories are subtly different from what is returned from the `/airports/{id}/flights` endpoints. Specifically, this operation does not include completed flights in its counts, and it does not count cancelled/diverted flights. It also does not strictly bound the time for which scheduled flights are counted, so all future flights that FlightAware knows about are included in the counts. See the response schema and documentation for the airport flights endpoints for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.

try {
    $result = $apiInstance->getAirportFlightsCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlightsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |

### Return type

[**\FlightAware\PHPClient\Model\AirportFlightCounts**](../Model/AirportFlightCounts.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlightsDeparted**
> \FlightAware\PHPClient\Model\InlineResponse20020 getAirportFlightsDeparted($id, $airline, $type, $start, $end, $max_pages, $cursor)

Get flights that have recently departed from an airport

Returns flights that have departed from an airport and not been diverted, ordered by `actual_off` descending. The optional start and end parameters will be compared against `actual_off` to limit the flights returned. The start parameter's default value is 24 hours before the current time. The end parameter's default value is the current time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$airline = "airline_example"; // string | Airline to filter flights by. Do not provide airline if type is provided.
$type = "type_example"; // string | Type of flights to return. Do not provide type if airline is provided.
$start = new \FlightAware\PHPClient\Model\Start4(); // \FlightAware\PHPClient\Model\Start4 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End4(); // \FlightAware\PHPClient\Model\End4 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportFlightsDeparted($id, $airline, $type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlightsDeparted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **airline** | **string**| Airline to filter flights by. Do not provide airline if type is provided. | [optional]
 **type** | **string**| Type of flights to return. Do not provide type if airline is provided. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start4**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End4**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlightsScheduledArrivals**
> \FlightAware\PHPClient\Model\InlineResponse20022 getAirportFlightsScheduledArrivals($id, $airline, $type, $start, $end, $max_pages, $cursor)

Get future flights arriving at an airport

Returns flights that are expected to arrive at an airport. This can include both undeparted and en route flights. Flights are ordered by `estimated_on` ascending. The optional start and end parameters will be compared against `estimated_on` to limit the flights returned. The start parameter's default value is 48 hours before the current time (this accounts for delayed flights). The end parameter's default value is 24 hours after the current time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$airline = "airline_example"; // string | Airline to filter flights by. Do not provide airline if type is provided.
$type = "type_example"; // string | Type of flights to return. Do not provide type if airline is provided.
$start = new \FlightAware\PHPClient\Model\Start6(); // \FlightAware\PHPClient\Model\Start6 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End6(); // \FlightAware\PHPClient\Model\End6 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportFlightsScheduledArrivals($id, $airline, $type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlightsScheduledArrivals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **airline** | **string**| Airline to filter flights by. Do not provide airline if type is provided. | [optional]
 **type** | **string**| Type of flights to return. Do not provide type if airline is provided. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start6**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End6**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportFlightsScheduledDepartures**
> \FlightAware\PHPClient\Model\InlineResponse20021 getAirportFlightsScheduledDepartures($id, $airline, $type, $start, $end, $max_pages, $cursor)

Get future flights departing from an airport

Returns flights that are scheduled to depart from an airport or have recently been cancelled, ordered by `estimated_off` (or `scheduled_off` if `estimated_off` is missing) ascending. The optional start and end parameters will be compared against `scheduled_off` to limit the flights returned. The start parameter's default value is 2 hours before the current time. The end parameter's default value is 24 hours after the current time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$airline = "airline_example"; // string | Airline to filter flights by. Do not provide airline if type is provided.
$type = "type_example"; // string | Type of flights to return. Do not provide type if airline is provided.
$start = new \FlightAware\PHPClient\Model\Start5(); // \FlightAware\PHPClient\Model\Start5 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End5(); // \FlightAware\PHPClient\Model\End5 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportFlightsScheduledDepartures($id, $airline, $type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportFlightsScheduledDepartures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **airline** | **string**| Airline to filter flights by. Do not provide airline if type is provided. | [optional]
 **type** | **string**| Type of flights to return. Do not provide type if airline is provided. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start5**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End5**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportWeatherForecast**
> \FlightAware\PHPClient\Model\WeatherForecast getAirportWeatherForecast($id, $timestamp, $return_nearby_weather)

Get weather forecast for given airport

Returns the weather forecast for an airport in the form of a decoded TAF (Terminal Area Forecast). Only a single result is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp from which to begin returning weather data in a 1 day range. Because weather data is returned in reverse chronological order, all returned weather reports will be from before this timestamp. If unspecified, weather is returned starting from now up to or less than the user history limit, normally 14 days.
$return_nearby_weather = false; // bool | If the requested airport does not have a weather conditions report then the weather for the nearest airport within 30 miles will be returned instead.

try {
    $result = $apiInstance->getAirportWeatherForecast($id, $timestamp, $return_nearby_weather);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportWeatherForecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **timestamp** | **\DateTime**| Timestamp from which to begin returning weather data in a 1 day range. Because weather data is returned in reverse chronological order, all returned weather reports will be from before this timestamp. If unspecified, weather is returned starting from now up to or less than the user history limit, normally 14 days. | [optional]
 **return_nearby_weather** | **bool**| If the requested airport does not have a weather conditions report then the weather for the nearest airport within 30 miles will be returned instead. | [optional] [default to false]

### Return type

[**\FlightAware\PHPClient\Model\WeatherForecast**](../Model/WeatherForecast.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportWeatherObservations**
> \FlightAware\PHPClient\Model\InlineResponse20024 getAirportWeatherObservations($id, $temperature_units, $return_nearby_weather, $timestamp, $max_pages, $cursor)

Get weather conditions for given airport

Returns weather for an airport in the form of a decoded METAR, starting from the latest report and working backwards in time as more data is requested. Data is provided in parsed, human-readable, and raw formats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$temperature_units = "Celsius"; // string | Units to use for temperature fields.
$return_nearby_weather = false; // bool | If the requested airport does not have a weather conditions report then the weather for the nearest airport within 30 miles will be returned instead.
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp from which to begin returning weather data in a 1 day range. Because weather data is returned in reverse chronological order, all returned weather reports will be from before this timestamp. If unspecified, weather is returned starting from now up to or less than the user history limit, normally 14 days.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportWeatherObservations($id, $temperature_units, $return_nearby_weather, $timestamp, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportWeatherObservations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **temperature_units** | **string**| Units to use for temperature fields. | [optional] [default to Celsius]
 **return_nearby_weather** | **bool**| If the requested airport does not have a weather conditions report then the weather for the nearest airport within 30 miles will be returned instead. | [optional] [default to false]
 **timestamp** | **\DateTime**| Timestamp from which to begin returning weather data in a 1 day range. Because weather data is returned in reverse chronological order, all returned weather reports will be from before this timestamp. If unspecified, weather is returned starting from now up to or less than the user history limit, normally 14 days. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportsCanonical**
> \FlightAware\PHPClient\Model\InlineResponse20016 getAirportsCanonical($id, $id_type)

Get the canonical code of an airport

Returns a list of ICAO airport codes corresponding to the given IATA or LID airport code. IATA codes can be identical to some LID codes, so if id_type is specified, only 1 ICAO code will be returned. If no id_type is specified and there are two possible ICAO codes, both will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$id_type = "id_type_example"; // string | Type of airport code provided in the id parameter

try {
    $result = $apiInstance->getAirportsCanonical($id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportsCanonical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **id_type** | **string**| Type of airport code provided in the id parameter | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAirportsNearAirport**
> \FlightAware\PHPClient\Model\InlineResponse20017 getAirportsNearAirport($id, $radius, $only_iap, $max_pages, $cursor)

Get airports near an airport

Returns a list of airports located within a given distance from the specified airport.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$radius = 56; // int | The search radius to use for finding nearby airports (statue miles)
$only_iap = false; // bool | Return only nearby airports with Instrument Approaches (also limits results to North American airports)
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAirportsNearAirport($id, $radius, $only_iap, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAirportsNearAirport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **radius** | **int**| The search radius to use for finding nearby airports (statue miles) |
 **only_iap** | **bool**| Return only nearby airports with Instrument Approaches (also limits results to North American airports) | [optional] [default to false]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAirports**
> \FlightAware\PHPClient\Model\InlineResponse20012 getAllAirports($max_pages, $cursor)

Get all airports

Returns the ICAO identifiers of all known airports. For airports that do not have an ICAO identifier, the FAA LID identifier will be used. Links for further information about each airport are included.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAllAirports($max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getAllAirports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDelaysForAllAirports**
> \FlightAware\PHPClient\Model\InlineResponse20014 getDelaysForAllAirports($max_pages, $cursor)

Get delay information for all airports with delays

Returns a list of airports with delays. There may be multiple reasons returned per airport if there are multiple types of delays reported at an airport. Note that individual flights can be delayed without there being an airport-wide delay returned by this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getDelaysForAllAirports($max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getDelaysForAllAirports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightsBetweenAirports**
> \FlightAware\PHPClient\Model\InlineResponse20023 getFlightsBetweenAirports($id, $dest_id, $type, $connection, $start, $end, $max_pages, $cursor)

Get flights with a specific origin and destination

This endpoint is quite similar to the `FindFlight` operator in prior versions of AeroAPI. Results may include both non-stop and one-stop flights. Note that because the returned flights can include multiple legs, the response format differs from most other flight-returning endpoints. If the optional start or end query parameters are not provided start will default to 1 day in the future, while end will default to 7 days in the past relative to the time the query is made.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$dest_id = "dest_id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$type = "type_example"; // string | Type of flights to return.
$connection = "connection_example"; // string | Whether flights should be filtered based on their connection status. Leaving this blank will result in a mix of flights being returned, with a preference for nonstop flights. One-stop flights are identified with a custom heuristic.
$start = new \FlightAware\PHPClient\Model\Start7(); // \FlightAware\PHPClient\Model\Start7 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End7(); // \FlightAware\PHPClient\Model\End7 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getFlightsBetweenAirports($id, $dest_id, $type, $connection, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getFlightsBetweenAirports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **dest_id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **type** | **string**| Type of flights to return. | [optional]
 **connection** | **string**| Whether flights should be filtered based on their connection status. Leaving this blank will result in a mix of flights being returned, with a preference for nonstop flights. One-stop flights are identified with a custom heuristic. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start7**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End7**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNearbyAirports**
> \FlightAware\PHPClient\Model\InlineResponse20013 getNearbyAirports($latitude, $longitude, $radius, $only_iap, $max_pages, $cursor)

Get airports near a location

Returns a list of airports located within a given distance from the given location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latitude = 1.2; // float | The latitude of the point used to search for nearby airports
$longitude = 1.2; // float | The longitude of the point used to search for nearby airports
$radius = 56; // int | The search radius to use for finding nearby airports (statue miles)
$only_iap = false; // bool | Return only nearby airports with Instrument Approaches (also limits results to North American airports)
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getNearbyAirports($latitude, $longitude, $radius, $only_iap, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getNearbyAirports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **float**| The latitude of the point used to search for nearby airports |
 **longitude** | **float**| The longitude of the point used to search for nearby airports |
 **radius** | **int**| The search radius to use for finding nearby airports (statue miles) |
 **only_iap** | **bool**| Return only nearby airports with Instrument Approaches (also limits results to North American airports) | [optional] [default to false]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutesBetweenAirports**
> \FlightAware\PHPClient\Model\InlineResponse20025 getRoutesBetweenAirports($id, $dest_id, $sort_by, $max_file_age, $max_pages, $cursor)

Get routes between 2 airports

Returns information about assigned IFR routings between two airports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$dest_id = "dest_id_example"; // string | ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$sort_by = "count"; // string | Field to sort results by. \"count\" will sort results by the route filing count (descending). \"last_departure_time\" will sort results by the latest scheduled departure time for that route (descending).
$max_file_age = "2 weeks"; // string | Maximum filed plan age of flights to consider. Can be a value less than or equal to 14 days (2 weeks) OR 1 month OR 1 year.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getRoutesBetweenAirports($id, $dest_id, $sort_by, $max_file_age, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->getRoutesBetweenAirports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **dest_id** | **string**| ICAO, IATA or LID ID of destination airport to fetch. [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **sort_by** | **string**| Field to sort results by. \&quot;count\&quot; will sort results by the route filing count (descending). \&quot;last_departure_time\&quot; will sort results by the latest scheduled departure time for that route (descending). | [optional] [default to count]
 **max_file_age** | **string**| Maximum filed plan age of flights to consider. Can be a value less than or equal to 14 days (2 weeks) OR 1 month OR 1 year. | [optional] [default to 2 weeks]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

