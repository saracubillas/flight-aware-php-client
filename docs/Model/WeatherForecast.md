# WeatherForecast

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport_code** | **string** | The airport code of the report. LID/IATA will be used if airport lacks an ICAO code. | 
**raw_forecast** | **string[]** | Array of raw forecast lines from the TAF | 
**time** | [**\DateTime**](\DateTime.md) | Datetime that the forecast was generated. | 
**decoded_forecast** | [**\FlightAware\PHPClient\Model\WeatherForecastDecodedForecast**](WeatherForecastDecodedForecast.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

