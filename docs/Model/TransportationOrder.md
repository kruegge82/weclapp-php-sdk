# # TransportationOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**assigned_user_id** | **string** |  | [optional]
**destination_storage_place_id** | **string** |  | [optional]
**internal_transport_reference_id** | **string** |  | [optional]
**loading_equipment_article_id** | **string** |  | [optional]
**loading_equipment_identifier_id** | **string** |  | [optional]
**picks** | [**\kruegge82\weclapp\Model\TransportPick[]**](TransportPick.md) |  | [optional]
**production_order_id** | **string** |  | [optional]
**shipment_id** | **string** |  | [optional]
**status** | [**\kruegge82\weclapp\Model\TransportationOrderStatusType**](TransportationOrderStatusType.md) |  | [optional]
**status_history** | [**\kruegge82\weclapp\Model\TransportationOrderStatusHistory[]**](TransportationOrderStatusHistory.md) |  | [optional]
**transportation_order_number** | **string** |  | [optional]
**transportation_order_type** | [**\kruegge82\weclapp\Model\TransportationOrderType**](TransportationOrderType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
