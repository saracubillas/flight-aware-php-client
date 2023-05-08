# WeatherForecastDecodedForecastLines

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of forecast line (forecast, from, temporary, becoming) | 
**start** | [**\DateTime**](\DateTime.md) | Start of the effective period for this forecast line | 
**end** | [**\DateTime**](\DateTime.md) | End of the effective period for this forecast line | 
**turbulence_layers** | **string** | Turbulence forecast | 
**icing_layers** | **string** | Icing forecast | 
**barometric_pressure** | **float** | Forecast pressure (percent) | 
**significant_weather** | **string** | Significant weather forecast | 
**winds** | [**\FlightAware\PHPClient\Model\WeatherForecastDecodedForecastWinds**](WeatherForecastDecodedForecastWinds.md) |  | 
**windshear** | [**\FlightAware\PHPClient\Model\WeatherForecastDecodedForecastWindshear**](WeatherForecastDecodedForecastWindshear.md) |  | 
**visibility** | [**\FlightAware\PHPClient\Model\WeatherForecastDecodedForecastVisibility**](WeatherForecastDecodedForecastVisibility.md) |  | 
**clouds** | [**\FlightAware\PHPClient\Model\WeatherForecastDecodedForecastClouds[]**](WeatherForecastDecodedForecastClouds.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

