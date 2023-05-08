# FlightAware\PHPClient\AlertsApi

All URIs are relative to *https://{env}.flightaware.com/aeroapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlert**](AlertsApi.md#createalert) | **POST** /alerts | Create new alert
[**deleteAlert**](AlertsApi.md#deletealert) | **DELETE** /alerts/{id} | Delete specific alert
[**deleteAlertsEndpoint**](AlertsApi.md#deletealertsendpoint) | **DELETE** /alerts/endpoint | Remove and disable default account-wide alert callback URL
[**getAlert**](AlertsApi.md#getalert) | **GET** /alerts/{id} | Get specific alert
[**getAlertsEndpoint**](AlertsApi.md#getalertsendpoint) | **GET** /alerts/endpoint | Get configured alert callback URL
[**getAllAlerts**](AlertsApi.md#getallalerts) | **GET** /alerts | Get all configured alerts
[**setAlertsEndpoint**](AlertsApi.md#setalertsendpoint) | **PUT** /alerts/endpoint | Set alert callback URL
[**updateAlert**](AlertsApi.md#updatealert) | **PUT** /alerts/{id} | Modify specific alert

# **createAlert**
> createAlert($body)

Create new alert

Create a new AeroAPI flight alert. When the alert is triggered, a callback mechanism will be used to notify the address set via the /alerts/endpoint endpoint. Each callback will be charged as a query and count towards usage for the AeroAPI key that created the alert. If this key is disabled or removed, the alert will no longer be available. If a target_url is provided, then this specific alert will be delivered to that address regardless of the adress set via the /alerts/endpoint endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FlightAware\PHPClient\Model\AlertsBody(); // \FlightAware\PHPClient\Model\AlertsBody | Alert configuration structure

try {
    $apiInstance->createAlert($body);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FlightAware\PHPClient\Model\AlertsBody**](../Model/AlertsBody.md)| Alert configuration structure | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlert**
> deleteAlert($id)

Delete specific alert

Deletes specific alert with given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the alert to fetch or update

try {
    $apiInstance->deleteAlert($id);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the alert to fetch or update |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertsEndpoint**
> deleteAlertsEndpoint()

Remove and disable default account-wide alert callback URL

Remove the default account-wide URL that will be POSTed to for alerts that are not configured with a specific URL. This means that any alerts that are not configured with a specific URL will not be delivered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteAlertsEndpoint();
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlertsEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlert**
> \FlightAware\PHPClient\Model\InlineResponse20034 getAlert($id)

Get specific alert

Returns the configuration data for an alert with the specified ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the alert to fetch or update

try {
    $result = $apiInstance->getAlert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the alert to fetch or update |

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertsEndpoint**
> \FlightAware\PHPClient\Model\InlineResponse20035 getAlertsEndpoint()

Get configured alert callback URL

Returns URL that will be POSTed to for alerts that are delivered via AeroAPI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAlertsEndpoint();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertsEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAlerts**
> \FlightAware\PHPClient\Model\InlineResponse20033 getAllAlerts()

Get all configured alerts

Returns all configured alerts for the FlightAware account (this includes alerts configured through other means by the FlightAware user owning the AeroAPI account like FlightAware's website or mobile apps).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAlerts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAllAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\FlightAware\PHPClient\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAlertsEndpoint**
> setAlertsEndpoint($body)

Set alert callback URL

Updates the default URL that will be POSTed to for alerts that are delivered via AeroAPI. This sets the account-wide default URL that all alerts will be delivered to unless the specific alert has a different delivery address configured for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FlightAware\PHPClient\Model\AlertsEndpointBody(); // \FlightAware\PHPClient\Model\AlertsEndpointBody | Endpoint URL configuration structure

try {
    $apiInstance->setAlertsEndpoint($body);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->setAlertsEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FlightAware\PHPClient\Model\AlertsEndpointBody**](../Model/AlertsEndpointBody.md)| Endpoint URL configuration structure | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAlert**
> updateAlert($id, $body)

Modify specific alert

Modifies the configuration for an alert with the specified ID. If a target URL address is provided, then the alert will be delivered to that address even if it is different than the default account-wide address set through the alerts/endpoint endpoint. Updating an alert that was created with a different AeroAPI key is possible, but will not change the AeroAPI key that the alert is associated with for usage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKey('x-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlightAware\PHPClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-apikey', 'Bearer');

$apiInstance = new FlightAware\PHPClient\FlightAwarePHPClient\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the alert to fetch or update
$body = new \FlightAware\PHPClient\Model\AlertsIdBody(); // \FlightAware\PHPClient\Model\AlertsIdBody | Alert configuration structure

try {
    $apiInstance->updateAlert($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->updateAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the alert to fetch or update |
 **body** | [**\FlightAware\PHPClient\Model\AlertsIdBody**](../Model/AlertsIdBody.md)| Alert configuration structure | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

