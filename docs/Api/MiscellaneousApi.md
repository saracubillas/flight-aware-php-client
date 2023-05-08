# FlightAware\PHPClient\MiscellaneousApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAircraftOwner**](MiscellaneousApi.md#getaircraftowner) | **GET** /aircraft/{ident}/owner | Get the owner of an aircraft
[**getAllDisruptionCounts**](MiscellaneousApi.md#getalldisruptioncounts) | **GET** /disruption_counts/{entity_type} | Get global flight disruption statistics
[**getDisruptionCounts**](MiscellaneousApi.md#getdisruptioncounts) | **GET** /disruption_counts/{entity_type}/{id} | Get flight disruption statistics for a particular entity
[**getFlightType**](MiscellaneousApi.md#getflighttype) | **GET** /aircraft/types/{type} | Get information about an aircraft type
[**getSchedulesByDate**](MiscellaneousApi.md#getschedulesbydate) | **GET** /schedules/{date_start}/{date_end} | Get scheduled flights

# **getAircraftOwner**
> \FlightAware\PHPClient\Model\InlineResponse20037 getAircraftOwner($ident)

Get the owner of an aircraft

Returns information about the owner of an aircraft, given a flight number or aircraft registration. Data returned includes owner's name, location (typically city and state), and website, if any. Codeshares and alternate idents are automatically searched.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The ident or registration of the aircraft

try {
    $result = $apiInstance->getAircraftOwner($ident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getAircraftOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The ident or registration of the aircraft |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDisruptionCounts**
> \FlightAware\PHPClient\Model\InlineResponse20040 getAllDisruptionCounts($entity_type, $time_period, $max_pages, $cursor)

Get global flight disruption statistics

Returns overall flight cancellation/delay counts in the specified time period for either all airlines or all airports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_type = "entity_type_example"; // string | The type of entity to get disruption statistics for.
$time_period = "today"; // string | 
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAllDisruptionCounts($entity_type, $time_period, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getAllDisruptionCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| The type of entity to get disruption statistics for. |
 **time_period** | **string**|  | [optional] [default to today]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisruptionCounts**
> \FlightAware\PHPClient\Model\InlineResponse20041 getDisruptionCounts($id, $entity_type, $time_period)

Get flight disruption statistics for a particular entity

Returns flight cancellation/delay counts in the specified time period for a particular airline or airport.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO code for the airline or ID for the airport (ICAO, IATA, or LID) for which you are fetching disruption statistics.  For airport ID, [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity.
$entity_type = "entity_type_example"; // string | The type of entity to get disruption statistics for.
$time_period = "today"; // string | 

try {
    $result = $apiInstance->getDisruptionCounts($id, $entity_type, $time_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getDisruptionCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO code for the airline or ID for the airport (ICAO, IATA, or LID) for which you are fetching disruption statistics.  For airport ID, [ICAO is highly preferred](/aeroapi/portal/resources#icaoCode) to prevent ambiguity. |
 **entity_type** | **string**| The type of entity to get disruption statistics for. |
 **time_period** | **string**|  | [optional] [default to today]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlightType**
> \FlightAware\PHPClient\Model\InlineResponse20038 getFlightType($type)

Get information about an aircraft type

Returns information about an aircraft type, given an ICAO aircraft type designator string. Data returned includes the description, type, manufacturer, engine type, and engine count.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | The ICAO aircraft type designator for the aircraft to fetch information for

try {
    $result = $apiInstance->getFlightType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getFlightType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The ICAO aircraft type designator for the aircraft to fetch information for |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedulesByDate**
> \FlightAware\PHPClient\Model\InlineResponse20039 getSchedulesByDate($date_start, $date_end, $origin, $destination, $airline, $flight_number, $include_codeshares, $include_regional, $max_pages, $cursor)

Get scheduled flights

Returns scheduled flights that have been published by airlines. These schedules are available for up to three months in the past as well as one year into the future.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_start = new \FlightAware\PHPClient\Model\DateStart(); // \FlightAware\PHPClient\Model\DateStart | Datetime or date of earliest scheduled flight departure to return. This must be no earlier than 3 months in the past and cannot be more than 3 weeks before date_end. Violating either constraint will result in an error. If using date instead of datetime, then the time will default to 00:00:00Z.
$date_end = new \FlightAware\PHPClient\Model\DateEnd(); // \FlightAware\PHPClient\Model\DateEnd | Datetime or date of latest scheduled flight departure to return. This must be no later than 1 year in the future and cannot be more than 3 weeks after date_start. Violating either constraint will result in an error. If using date instead of datetime, then the time will default to 00:00:00Z. Thus, the next day's date should be specified if one day of data is desired when using date instead of datetime.
$origin = "origin_example"; // string | Only return flights with this origin airport. ICAO or IATA airport codes can be provided.
$destination = "destination_example"; // string | Only return flights with this destination airport. ICAO or IATA airport codes can be provided.
$airline = "airline_example"; // string | Only return flights flown by this carrier. ICAO or IATA carrier codes can be provided.
$flight_number = 56; // int | Only return flights with this flight number.
$include_codeshares = true; // bool | Flag indicating whether ticketing codeshares should be returned as well.
$include_regional = true; // bool | Flag indicating whether regional codeshares should be returned as well.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getSchedulesByDate($date_start, $date_end, $origin, $destination, $airline, $flight_number, $include_codeshares, $include_regional, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->getSchedulesByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_start** | [**\FlightAware\PHPClient\Model\DateStart**](../Model/.md)| Datetime or date of earliest scheduled flight departure to return. This must be no earlier than 3 months in the past and cannot be more than 3 weeks before date_end. Violating either constraint will result in an error. If using date instead of datetime, then the time will default to 00:00:00Z. |
 **date_end** | [**\FlightAware\PHPClient\Model\DateEnd**](../Model/.md)| Datetime or date of latest scheduled flight departure to return. This must be no later than 1 year in the future and cannot be more than 3 weeks after date_start. Violating either constraint will result in an error. If using date instead of datetime, then the time will default to 00:00:00Z. Thus, the next day&#x27;s date should be specified if one day of data is desired when using date instead of datetime. |
 **origin** | **string**| Only return flights with this origin airport. ICAO or IATA airport codes can be provided. | [optional]
 **destination** | **string**| Only return flights with this destination airport. ICAO or IATA airport codes can be provided. | [optional]
 **airline** | **string**| Only return flights flown by this carrier. ICAO or IATA carrier codes can be provided. | [optional]
 **flight_number** | **int**| Only return flights with this flight number. | [optional]
 **include_codeshares** | **bool**| Flag indicating whether ticketing codeshares should be returned as well. | [optional] [default to true]
 **include_regional** | **bool**| Flag indicating whether regional codeshares should be returned as well. | [optional] [default to true]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

