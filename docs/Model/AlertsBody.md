# AlertsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for alert, can be used to update or delete alert. | 
**description** | **string** | Server-generated textual description of alert. May include carrier, flight number, origin, destination, etc. | 
**ident** | **string** | Ident to alert on. This value may be modified based on codeshare resolution. If that occurs, the originally provided ident will be preserved in the user_ident field. | 
**ident_icao** | **string** | ICAO ident to alert on | [optional] 
**ident_iata** | **string** | IATA ident to alert on | [optional] 
**origin** | **string** | Origin airport ICAO, IATA, or LID code to alert on. | 
**origin_icao** | **string** | Origin airport ICAO code to alert on. | [optional] 
**origin_iata** | **string** | Origin airport IATA code to alert on. | [optional] 
**origin_lid** | **string** | Origin airport LID code to alert on. | [optional] 
**destination** | **string** | Destination airport ICAO, IATA, or LID code to alert on. | 
**destination_icao** | **string** | Destination airport ICAO code to alert on. | [optional] 
**destination_iata** | **string** | Destination airport IATA code to alert on. | [optional] 
**destination_lid** | **string** | Destination airport LID code to alert on. | [optional] 
**aircraft_type** | **string** | Aircraft type ICAO code to alert on. | 
**created** | [**\DateTime**](\DateTime.md) | Time that the alert was created. | 
**changed** | [**\DateTime**](\DateTime.md) | Time that the alert was last modified. | 
**start** | [**\DateTime**](\DateTime.md) | Start date of alert. Should be in departure airport&#x27;s timezone. | 
**end** | [**\DateTime**](\DateTime.md) | End date of alert (inclusive). Should be in departure airport&#x27;s timezone. | 
**max_weekly** | **int** | Reject the new alert if the estimated number of triggered alerts per week based on historical flight trends would exceed this value. Check is only applied at alert creation/modification and does not prevent alerts from being delivered even if they exceed the given amount. | [optional] [default to 1000]
**user_ident** | **string** | Originally specified ident. | 
**eta** | **int** | How many minutes before a flight&#x27;s ETA that an alert should be delivered. Alerts will only be delivered after the flight has been in the air for at least 15 minutes. Set to 0 to disable. | [default to 0]
**events** | [**\FlightAware\PHPClient\Model\AlertsEvents**](AlertsEvents.md) |  | 
**target_url** | **string** | Alert specific URL to deliver to. If null, then the alert will be delivered to the configured account-wide alert URL target. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

