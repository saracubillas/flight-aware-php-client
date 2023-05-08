# FlightAware\PHPClient\OperatorsApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOperators**](OperatorsApi.md#getalloperators) | **GET** /operators | Get all operators.
[**getOperator**](OperatorsApi.md#getoperator) | **GET** /operators/{id} | Get static information for an operator.
[**getOperatorFlights**](OperatorsApi.md#getoperatorflights) | **GET** /operators/{id}/flights | Get all of an operator&#x27;s flights
[**getOperatorFlightsArrived**](OperatorsApi.md#getoperatorflightsarrived) | **GET** /operators/{id}/flights/arrivals | Get arrived flights
[**getOperatorFlightsCount**](OperatorsApi.md#getoperatorflightscount) | **GET** /operators/{id}/flights/counts | Get flight counts for operator
[**getOperatorFlightsEnroute**](OperatorsApi.md#getoperatorflightsenroute) | **GET** /operators/{id}/flights/enroute | Get en route flights
[**getOperatorFlightsScheduled**](OperatorsApi.md#getoperatorflightsscheduled) | **GET** /operators/{id}/flights/scheduled | Get scheduled flights
[**getOperatorsCanonical**](OperatorsApi.md#getoperatorscanonical) | **GET** /operators/{id}/canonical | Get the canonical code of an operator for API usage.

# **getAllOperators**
> \FlightAware\PHPClient\Model\InlineResponse20026 getAllOperators($max_pages, $cursor)

Get all operators.

Returns list of operator references (ICAO/IATA codes and URLs to access more information).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getAllOperators($max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getAllOperators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperator**
> \FlightAware\PHPClient\Model\InlineResponse20027 getOperator($id)

Get static information for an operator.

Returns information for an operator such as their name, ICAO/IATA codes, headquarter location, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.

try {
    $result = $apiInstance->getOperator($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorFlights**
> \FlightAware\PHPClient\Model\InlineResponse20029 getOperatorFlights($id, $start, $end, $max_pages, $cursor)

Get all of an operator's flights

Returns all recent and upcoming flights for this operator. Behaviour for optional start and end dates for each type returned (`scheduled`, `arrivals`, `enroute`) match the behaviour in their corresponding endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.
$start = new \FlightAware\PHPClient\Model\Start8(); // \FlightAware\PHPClient\Model\Start8 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End8(); // \FlightAware\PHPClient\Model\End8 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getOperatorFlights($id, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorFlights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |
 **start** | [**\FlightAware\PHPClient\Model\Start8**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End8**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorFlightsArrived**
> \FlightAware\PHPClient\Model\InlineResponse20031 getOperatorFlightsArrived($id, $start, $end, $max_pages, $cursor)

Get arrived flights

Returns flights for this operator that have departed and subsequently arrived, ordered by `actual_on` descending. The optional start and end parameters will be compared against `actual_on` to limit the flights returned. The start parameter's default value is 24 hours before the current time. The end parameter's default value is the current time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.
$start = new \FlightAware\PHPClient\Model\Start10(); // \FlightAware\PHPClient\Model\Start10 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End10(); // \FlightAware\PHPClient\Model\End10 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getOperatorFlightsArrived($id, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorFlightsArrived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |
 **start** | [**\FlightAware\PHPClient\Model\Start10**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End10**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorFlightsCount**
> \FlightAware\PHPClient\Model\OperatorFlightCounts getOperatorFlightsCount($id)

Get flight counts for operator

Returns counts of both airborne and recently operated flights for operator.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.

try {
    $result = $apiInstance->getOperatorFlightsCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorFlightsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |

### Return type

[**\FlightAware\PHPClient\Model\OperatorFlightCounts**](../Model/OperatorFlightCounts.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorFlightsEnroute**
> \FlightAware\PHPClient\Model\InlineResponse20032 getOperatorFlightsEnroute($id, $start, $end, $max_pages, $cursor)

Get en route flights

Returns flights for this operator that have departed and are currently en route, ordered by `estimated_on` ascending. The optional start and end parameters will be compared against `estimated_on` to limit the flights returned. The start parameter's default value is 48 hours before the current time (this accounts for delayed flights). There is no default end bound.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.
$start = new \FlightAware\PHPClient\Model\Start11(); // \FlightAware\PHPClient\Model\Start11 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End11(); // \FlightAware\PHPClient\Model\End11 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getOperatorFlightsEnroute($id, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorFlightsEnroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |
 **start** | [**\FlightAware\PHPClient\Model\Start11**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End11**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorFlightsScheduled**
> \FlightAware\PHPClient\Model\InlineResponse20030 getOperatorFlightsScheduled($id, $start, $end, $max_pages, $cursor)

Get scheduled flights

Returns flights for this operator that are scheduled to depart or have recently been cancelled, ordered by `estimated_off` (or `scheduled_off` if `estimated_off` is missing) ascending. The optional start and end parameters will be compared against `scheduled_off` to limit the flights returned. If start is not specified, flights with a `scheduled_off` or cancellation time no further than two hours into the past will be returned. If end is not specified, there is no guaranteed bound for how far in the future scheduled flights will be returned (it will typically be around 48 hours in the future for commercial flights, though).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.
$start = new \FlightAware\PHPClient\Model\Start9(); // \FlightAware\PHPClient\Model\Start9 | The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$end = new \FlightAware\PHPClient\Model\End9(); // \FlightAware\PHPClient\Model\End9 | The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z.
$max_pages = 1; // int | Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned.
$cursor = "cursor_example"; // string | Opaque value used to get the next batch of data from a paged collection.

try {
    $result = $apiInstance->getOperatorFlightsScheduled($id, $start, $end, $max_pages, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorFlightsScheduled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |
 **start** | [**\FlightAware\PHPClient\Model\Start9**](../Model/.md)| The starting date range for flight results. The format is ISO8601 date or datetime, and the bound is inclusive. Specified start date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **end** | [**\FlightAware\PHPClient\Model\End9**](../Model/.md)| The ending date range for flight results. The format is ISO8601 date or datetime, and the bound is exclusive. Specified end date must be no further than 10 days in the past and 2 days in the future. If using date instead of datetime, the time will default to 00:00:00Z. | [optional]
 **max_pages** | **int**| Maximum number of pages to fetch. This is an upper limit and not a guarantee of how many pages will be returned. | [optional] [default to 1]
 **cursor** | **string**| Opaque value used to get the next batch of data from a paged collection. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperatorsCanonical**
> \FlightAware\PHPClient\Model\InlineResponse20028 getOperatorsCanonical($id, $country_code)

Get the canonical code of an operator for API usage.

Returns all possible matches for a given operator code (ICAO or IATA). An optional country code can be provided to refine ambiguous IATA codes to a single result. The country code should represent a country the operator operates within.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\OperatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned.
$country_code = "country_code_example"; // string | An ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->getOperatorsCanonical($id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorsApi->getOperatorsCanonical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ICAO or IATA identifier for an operator. The use of ICAO code is strongly preferred. In the case of non-unique IATA codes the operator with the lexicographically first ICAO code will be returned. |
 **country_code** | **string**| An ISO 3166-1 alpha-2 country code. | [optional]

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

