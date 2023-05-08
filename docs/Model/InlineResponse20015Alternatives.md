# InlineResponse20015Alternatives

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airport_code** | **string** | Default airport identifier, generally ICAO but may be IATA or LID if the airport lacks an ICAO code | 
**code_icao** | **string** | ICAO identifier for the airport if known | [optional] 
**code_iata** | **string** | IATA identifier for the airport if known | [optional] 
**code_lid** | **string** | LID identifier for the airport if known | [optional] 
**alternate_ident** | **string** | IATA or LID identifier for the airport. (Deprecated, use code_iata for the IATA identifier or code_lid for the LID identifier instead.) | 
**name** | **string** | Common name for the airport | 
**type** | **string** | Type of airport | [optional] 
**elevation** | **float** | Height above Mean Sea Level (MSL) | 
**city** | **string** | Closest city to the airport | 
**state** | **string** | State/province where the airport resides if applicable. For US states this will be their 2-letter code; for provinces or other entities, it will be the full name. | 
**longitude** | **float** | Airport&#x27;s longitude, generally the center point of the airport | 
**latitude** | **float** | Airport&#x27;s latitude, generally the center point of the airport | 
**timezone** | **string** | Applicable timezone for the airport, in the TZ database format | 
**country_code** | **string** | 2-letter code of country where the airport resides (ISO 3166-1 alpha-2) | 
**wiki_url** | **string** | Link to the wikipedia page for the airport | 
**airport_flights_url** | **string** | The URL to flights for this airport | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

