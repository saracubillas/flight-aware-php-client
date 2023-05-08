# FlightPosition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fa_flight_id** | **string** | Unique identifier assigned by FlightAware to the flight with this position. This field is only populated by the &#x60;/flights/search/positions&#x60; (in other cases, the user will have already specified the fa_flight_id). | 
**altitude** | **int** | Aircraft altitude in hundreds of feet | 
**altitude_change** | **string** | C when the aircraft is climbing, D when descending, and - when the altitude is being maintained. | 
**groundspeed** | **int** | Most recent groundspeed (knots) | 
**heading** | **int** | Aircraft heading in degrees (0-360) | 
**latitude** | **float** | Most recent latitude position | 
**longitude** | **float** | Most recent longitude position | 
**timestamp** | [**\DateTime**](\DateTime.md) | Time that position was received | 
**update_type** | **string** | P&#x3D;projected, O&#x3D;oceanic, Z&#x3D;radar, A&#x3D;ADS-B, M&#x3D;multilateration, D&#x3D;datalink, X&#x3D;surface and near surface (ADS-B and ASDE-X), S&#x3D;space-based | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

