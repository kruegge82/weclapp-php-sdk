# # CalendarEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**all_day_event** | **bool** |  | [optional]
**attendees** | [**\kruegge82\weclapp\Model\CalendarEventAttendee[]**](CalendarEventAttendee.md) |  | [optional]
**calendar_id** | **string** |  | [optional]
**concerning_id** | **string** |  | [optional]
**contact_id** | **string** |  | [optional]
**deleted** | **bool** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**end_date** | **int** |  | [optional]
**location** | **string** |  | [optional]
**private_event** | **bool** |  | [optional]
**recurring_event** | [**\kruegge82\weclapp\Model\RecurringEvent**](RecurringEvent.md) |  | [optional]
**references** | [**\kruegge82\weclapp\Model\EntityReference[]**](EntityReference.md) |  | [optional]
**reminder_send_type** | [**\kruegge82\weclapp\Model\ReminderSendType**](ReminderSendType.md) |  | [optional]
**reminder_time** | **int** |  | [optional]
**show_as** | [**\kruegge82\weclapp\Model\FollowupBusyState**](FollowupBusyState.md) |  | [optional]
**start_date** | **int** |  | [optional]
**subject** | **string** |  | [optional]
**user_id** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
