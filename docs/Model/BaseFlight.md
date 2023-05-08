# BaseFlight

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ident** | **string** | Either the operator code followed by the flight number for the flight (for commercial flights) or the aircraft&#x27;s registration (for general aviation). | 
**ident_icao** | **string** | The ICAO operator code followed by the flight number for the flight (for commercial flights) | [optional] 
**ident_iata** | **string** | The IATA operator code followed by the flight number for the flight (for commercial flights) | [optional] 
**fa_flight_id** | **string** | Unique identifier assigned by FlightAware for this specific flight. If the flight is diverted, the new leg of the flight will have a duplicate fa_flight_id. | 
**operator** | **string** | ICAO code, if exists, of the operator of the flight, otherwise the IATA code | 
**operator_icao** | **string** | ICAO code of the operator of the flight. | [optional] 
**operator_iata** | **string** | IATA code of the operator of the flight. | 
**flight_number** | **string** | Bare flight number of the flight. | 
**registration** | **string** | Aircraft registration (tail number) of the aircraft, when known. | 
**atc_ident** | **string** | The ident of the flight for Air Traffic Control purposes, when known and different than ident. | 
**inbound_fa_flight_id** | **string** | Unique identifier assigned by FlightAware for the previous flight of the aircraft serving this flight. | 
**codeshares** | **string[]** | List of any ICAO codeshares operating on this flight. | 
**codeshares_iata** | **string[]** | List of any IATA codeshares operating on this flight. | [optional] 
**blocked** | **bool** | Flag indicating whether this flight is blocked from public viewing. | 
**diverted** | **bool** | Flag indicating whether this flight was diverted. | 
**cancelled** | **bool** | Flag indicating that the flight is no longer being tracked by FlightAware. There are a number of reasons this could happen including cancellation by the airline, but that will not always be the case. | 
**position_only** | **bool** | Flag indicating that this flight does not have a flight plan, schedule, or other indication of intent available. | 
**origin** | [**\FlightAware\PHPClient\Model\FlightAirportRef**](FlightAirportRef.md) |  | 
**destination** | [**\FlightAware\PHPClient\Model\FlightAirportRef1**](FlightAirportRef1.md) |  | 
**departure_delay** | **int** | Arrival delay (in seconds) based on either actual or estimated gate arrival time. If gate time is unavailable then based on runway arrival time. A negative value indicates the flight is early. | 
**arrival_delay** | **int** | Departure delay (in seconds) based on either actual or estimated gate departure time. If gate time is unavailable then based on runway departure time. A negative value indicates the flight is early. | 
**filed_ete** | **int** | Runway-to-runway filed duration (seconds). | 
**progress_percent** | **int** | The percent completion of a flight, based on runway departure/arrival. Null for en route position-only flights. | 
**status** | **string** | Human-readable summary of flight status. | 
**aircraft_type** | **string** | Aircraft type will generally be ICAO code, but IATA code will be given when the ICAO code is not known. | 
**route_distance** | **int** | Planned flight distance (statute miles) based on the filed route. May vary from actual flown distance. | 
**filed_airspeed** | **int** | Filed IFR airspeed (knots). | 
**filed_altitude** | **int** | Filed IFR altitude (100s of feet). | 
**route** | **string** | The textual description of the flight&#x27;s route. | 
**baggage_claim** | **string** | Baggage claim location at the destination airport. | 
**seats_cabin_business** | **int** | Number of seats in the business class cabin. | 
**seats_cabin_coach** | **int** | Number of seats in the coach cabin. | 
**seats_cabin_first** | **int** | Number of seats in the first class cabin. | 
**gate_origin** | **string** | Departure gate at the origin airport. | 
**gate_destination** | **string** | Arrival gate at the destination airport. | 
**terminal_origin** | **string** | Departure terminal at the origin airport. | 
**terminal_destination** | **string** | Arrival terminal at the destination airport. | 
**type** | **string** | Whether this is a commercial or general aviation flight. | 
**scheduled_out** | [**\DateTime**](\DateTime.md) | Scheduled gate departure time. | 
**estimated_out** | [**\DateTime**](\DateTime.md) | Estimated gate departure time. | 
**actual_out** | [**\DateTime**](\DateTime.md) | Actual gate departure time. | 
**scheduled_off** | [**\DateTime**](\DateTime.md) | Scheduled runway departure time. | 
**estimated_off** | [**\DateTime**](\DateTime.md) | Estimated runway departure time. | 
**actual_off** | [**\DateTime**](\DateTime.md) | Actual runway departure time. | 
**scheduled_on** | [**\DateTime**](\DateTime.md) | Scheduled runway arrival time. | 
**estimated_on** | [**\DateTime**](\DateTime.md) | Estimated runway arrival time. | 
**actual_on** | [**\DateTime**](\DateTime.md) | Actual runway arrival time. | 
**scheduled_in** | [**\DateTime**](\DateTime.md) | Scheduled gate arrival time. | 
**estimated_in** | [**\DateTime**](\DateTime.md) | Estimated gate arrival time. | 
**actual_in** | [**\DateTime**](\DateTime.md) | Actual gate arrival time. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

