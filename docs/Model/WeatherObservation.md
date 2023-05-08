# WeatherObservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport_code** | **string** | The airport code of the report. LID/IATA will be used if airport lacks an ICAO code. | 
**cloud_friendly** | **string** | Human-friendly summary of clouds. | 
**clouds** | [**\FlightAware\PHPClient\Model\InlineResponse20024Clouds[]**](InlineResponse20024Clouds.md) | Array of cloud data | 
**conditions** | **string** | Notable weather | 
**pressure** | **float** | Air pressure (see pressure_units field for units) | 
**pressure_units** | **string** | Units for air pressure | 
**raw_data** | **string** | Raw METAR report string | 
**temp_air** | **int** | Air temperature | 
**temp_dewpoint** | **int** | Dewpoint temperature | 
**temp_perceived** | **int** | Perceived temperature (e.g. wind chill) | 
**relative_humidity** | **int** | Relative humidity (percent) | 
**time** | [**\DateTime**](\DateTime.md) | Timestamp when report was collected | 
**visibility** | **float** | Horizontal visibility distance (see visibility_units for units) | 
**visibility_units** | **string** | Units for visibility | 
**wind_direction** | **int** | Heading direction of wind (degrees) | 
**wind_friendly** | **string** | Human-friendly summary of winds | 
**wind_speed** | **int** | Wind speed | 
**wind_speed_gust** | **int** | Wind gust speed | 
**wind_units** | **string** | Units for the wind speed and wind gusts | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

