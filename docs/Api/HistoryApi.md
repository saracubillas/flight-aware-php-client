# FlightAware\PHPClient\HistoryApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoryAircraftLastFlight**](HistoryApi.md#gethistoryaircraftlastflight) | **GET** /history/aircraft/{registration}/last_flight | Get aircraft&#x27;s last known flight
[**getHistoryFlight**](HistoryApi.md#gethistoryflight) | **GET** /history/flights/{ident} | Get information for a historical flight
[**getHistoryFlightMap**](HistoryApi.md#gethistoryflightmap) | **GET** /history/flights/{id}/map | Get an image of a historical flight&#x27;s track on a map
[**getHistoryFlightRoute**](HistoryApi.md#gethistoryflightroute) | **GET** /history/flights/{id}/route | Get historical flight&#x27;s filed route
[**getHistoryFlightTrack**](HistoryApi.md#gethistoryflighttrack) | **GET** /history/flights/{id}/track | Get historical information for a flight&#x27;s track

# **getHistoryAircraftLastFlight**
> \FlightAware\PHPClient\Model\InlineResponse20036 getHistoryAircraftLastFlight($registration)

Get aircraft's last known flight

Returns flight info status summary for an aircraft's last known flight given its registration. The search is limited to flights flown since January 1, 2011. On a successful response, the body will contain a flights array with only 1 element. If a user queries a registration with it's last known flight before January 1, 2011, an empty flights array will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registration = "registration_example"; // string | The registration number of the aircraft to fetch

try {
    $result = $apiInstance->getHistoryAircraftLastFlight($registration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoryAircraftLastFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration** | **string**| The registration number of the aircraft to fetch |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryFlight**
> \FlightAware\PHPClient\Model\InlineResponse2003 getHistoryFlight($ident, $ident_type, $start, $end, $max_pages, $cursor)

Get information for a historical flight

Returns historical flight info status summary for a registration, ident, or fa_flight_id. If a fa_flight_id is specified then a maximum of 1 flight is returned, unless the flight has been diverted in which case both the original flight and any diversions will be returned with a duplicate fa_flight_id. If a registraion or ident is specified then a start_date and end_date must be specified. The span between start_date and end_date can be up to 7 days. No more than 40 pages may be requested at once. Data is available from now back to 2011-01-01 00:00:00 UTC.  The field `inbound_fa_flight_id` will not be populated by this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ident = "ident_example"; // string | The ident, registration, or fa_flight_id to fetch
$ident_type = "ident_type_example"; // string | Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead.
$start = new \FlightAware\PHPClient\Model\Start12(); // \FlightAware\PHPClient\Model\Start12 | The starting date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must occur on or after 2011-01-01 00:00:00 UTC and cannot be in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End12(); // \FlightAware\PHPClient\Model\End12 | The ending date range for flight results, comparing against flights' `scheduled_out` field (or `scheduled_off` if `scheduled_out` is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must occur after 2011-01-01 00:00:00 UTC and cannot be in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getHistoryFlight($ident, $ident_type, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoryFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ident** | **string**| The ident, registration, or fa_flight_id to fetch |
 **ident_type** | **string**| Type of ident provided in the ident parameter. By default, the passed ident is interpreted as a registration if possible. This parameter can force the ident to be interpreted as a designator instead. | [optional]
 **start** | [**\FlightAware\PHPClient\Model\Start12**](../Model/.md)| The starting date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must occur on or after 2011-01-01 00:00:00 UTC and cannot be in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End12**](../Model/.md)| The ending date range for flight results, comparing against flights&#x27; &#x60;scheduled_out&#x60; field (or &#x60;scheduled_off&#x60; if &#x60;scheduled_out&#x60; is missing). The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must occur after 2011-01-01 00:00:00 UTC and cannot be in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
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

# **getHistoryFlightMap**
> \FlightAware\PHPClient\Model\InlineResponse2008 getHistoryFlightMap($id, $height, $width, $layer_on, $layer_off, $show_data_block, $airports_expand_view, $show_airports, $bounding_box)

Get an image of a historical flight's track on a map

Returns a historical flight's track as a base64-encoded image. Image can contain a variety of additional data layers beyond just the track. Data is available from now back to 2011-01-01T00:00:00Z.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch
$height = 480; // int | Height of requested image (pixels)
$width = 640; // int | Width of requested image (pixels)
$layer_on = array("[\"country boundaries\",\"US state boundaries\",\"water\",\"US major roads\",\"radar\",\"track\",\"flights\",\"airports\"]"); // string[] | List of map layers to enable
$layer_off = array("[\"US Cities\",\"european country boundaries\",\"asia country boundaries\",\"major airports\"]"); // string[] | List of map layers to disable
$show_data_block = false; // bool | Whether a textual caption containing the ident, type, heading, altitude, origin, and destination should be displayed by the flight's position.
$airports_expand_view = false; // bool | Whether to force zoom area to ensure origin/destination airports are visible. Enabling this flag forcefully enables the show_airports flag as well.
$show_airports = false; // bool | Whether to show the origin/destination airports for the flight as labeled points on the map.
$bounding_box = array(3.4); // float[] | Manually specify the zoom area of the map using custom bounds. Should be a list of 4 coordinates representing the top, right, bottom, and left sides of the area (in that order).

try {
    $result = $apiInstance->getHistoryFlightMap($id, $height, $width, $layer_on, $layer_off, $show_data_block, $airports_expand_view, $show_airports, $bounding_box);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoryFlightMap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch |
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

# **getHistoryFlightRoute**
> \FlightAware\PHPClient\Model\InlineResponse2007 getHistoryFlightRoute($id)

Get historical flight's filed route

Returns information about a historical flight's filed route including coordinates, names, and types of fixes along the route.  Not all flight routes can be successfully decoded by this endpoint, particularly if the flight is not entirely within the continental U.S. airspace, since this function only has access to navaids within that area. If data on a waypoint is missing then the type will be listed as \"UNKNOWN\". Data is available from now back to 2011-01-01T00:00:00Z.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch

try {
    $result = $apiInstance->getHistoryFlightRoute($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoryFlightRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryFlightTrack**
> \FlightAware\PHPClient\Model\InlineResponse2006 getHistoryFlightTrack($id, $include_estimated_positions)

Get historical information for a flight's track

Returns the track for a historical flight as an array of positions. Data is available from now back to 2011-01-01T00:00:00Z.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The fa_flight_id to fetch
$include_estimated_positions = true; // bool | Whether to include estimated positions in the flight track

try {
    $result = $apiInstance->getHistoryFlightTrack($id, $include_estimated_positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getHistoryFlightTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The fa_flight_id to fetch |
 **include_estimated_positions** | **bool**| Whether to include estimated positions in the flight track | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

