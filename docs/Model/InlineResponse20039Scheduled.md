# InlineResponse20039Scheduled

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ident** | **string** | Flight ident | 
**ident_icao** | **string** | Flight ident in ICAO format | 
**ident_iata** | **string** | Flight ident in IATA format | 
**actual_ident** | **string** | If ident is a codeshare flight, this is the primary identifier used by the operator | 
**actual_ident_icao** | **string** | If ident is a codeshare flight, this is the primary identifier used by the operator in ICAO format | 
**actual_ident_iata** | **string** | If ident is a codeshare flight, this is the primary identifier used by the operator in IATA format | 
**aircraft_type** | **string** | Aircraft type will generally be ICAO code, but IATA code will be given when the ICAO code is not known | 
**scheduled_in** | [**\DateTime**](\DateTime.md) | Scheduled time of arrival at gate | 
**scheduled_out** | [**\DateTime**](\DateTime.md) | Scheduled time of departure from gate | 
**origin** | **string** | The origin airport&#x27;s identifier code | 
**origin_icao** | **string** | The origin airport&#x27;s ICAO code | 
**origin_iata** | **string** | The origin airport&#x27;s IATA code | 
**origin_lid** | **string** | The origin airport&#x27;s LID | 
**destination** | **string** | The destination airport&#x27;s identifier code | 
**destination_icao** | **string** | The destination airport&#x27;s ICAO code | 
**destination_iata** | **string** | The destination airport&#x27;s IATA code | 
**destination_lid** | **string** | The destination airport&#x27;s LID | 
**fa_flight_id** | **string** | Unique FlightAware ID for flight. Will be null for flights scheduled more than a few days in the future. | 
**meal_service** | **string** | Meal service offered on the flight | 
**seats_cabin_business** | **int** | Number of seats in the business class cabin | 
**seats_cabin_coach** | **int** | Number of seats in the coach class cabin | 
**seats_cabin_first** | **int** | Number of seats in the first class cabin | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

