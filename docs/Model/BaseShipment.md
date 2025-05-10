# # BaseShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**commercial_language** | **string** |  | [optional]
**creator_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**disable_email_template** | **bool** |  | [optional]
**record_comment** | **string** |  | [optional]
**record_free_text** | **string** |  | [optional]
**record_opening** | **string** |  | [optional]
**sent_to_recipient** | **bool** |  | [optional]
**tags** | **string[]** |  | [optional]
**invoice_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**recipient_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**sales_order_id** | **string** |  | [optional]
**sales_order_number** | **string** |  | [optional]
**sales_orders** | [**\kruegge82\weclapp\Model\OnlyId[]**](OnlyId.md) |  | [optional]
**status** | [**\kruegge82\weclapp\Model\ShipmentStatusType**](ShipmentStatusType.md) |  | [optional]
**status_history** | [**\kruegge82\weclapp\Model\ShipmentStatus[]**](ShipmentStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
