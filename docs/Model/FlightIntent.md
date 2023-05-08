# FlightIntent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aircraft_type** | **string** | Aircraft type ICAO code. | 
**origin** | **string** | Origin airport ICAO code or LID. | 
**destination** | **string** | Destination airport ICAO code or LID. | 
**intended_off** | [**\DateTime**](\DateTime.md) | Intended runway departure time of flight. This must be within 2 hours of the actual departure time or the flight intent will be ignored. Time may not be more than 1 hour in the past or 48 hours in the future. | 
**intended_on** | [**\DateTime**](\DateTime.md) | Intended runway arrival time of flight. | 
**altitude** | **int** | Cruising altitude (feet). | [optional] 
**airspeed** | **int** | Cruising airspeed (knots). | [optional] 
**route** | **string** | Flight route as a series of space-separate waypoints. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

