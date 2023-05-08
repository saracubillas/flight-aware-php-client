# AirportDelay1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport** | **string** | ICAO/IATA code of airport | 
**category** | **string** | Category of the largest delay. Some possible values are \&quot;weather\&quot;, \&quot;traffic\&quot;, \&quot;equipment\&quot;, etc. | 
**color** | **string** | Color of largest delay | 
**delay_secs** | **int** | Duration of largest delay (seconds). This value is not intended to be presented to users and should only be used for sorting results. | 
**reasons** | [**\FlightAware\PHPClient\Model\AirportDelayReasons[]**](AirportDelayReasons.md) | Reasons for the delay | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

