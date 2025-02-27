# # PurchaseOrderRequest

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
**disable_record_emailing_rule** | **bool** |  | [optional]
**record_comment** | **string** |  | [optional]
**record_free_text** | **string** |  | [optional]
**record_opening** | **string** |  | [optional]
**sent_to_recipient** | **bool** |  | [optional]
**tags** | **string[]** |  | [optional]
**confirmation_deadline** | **int** |  | [optional]
**delivery_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**invoice_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**planned_delivery_date** | **int** |  | [optional]
**purchase_order_request_items** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestItem[]**](PurchaseOrderRequestItem.md) |  | [optional]
**purchase_order_request_number** | **string** |  | [optional]
**purchase_order_request_offers** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestOffer[]**](PurchaseOrderRequestOffer.md) |  | [optional]
**purchase_order_request_type** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestType**](PurchaseOrderRequestType.md) |  | [optional]
**quotation_id** | **string** |  | [optional]
**record_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**responsible_user_id** | **string** |  | [optional]
**sales_order_id** | **string** |  | [optional]
**status** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestStatusType**](PurchaseOrderRequestStatusType.md) |  | [optional]
**status_history** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestStatusHistory[]**](PurchaseOrderRequestStatusHistory.md) |  | [optional]
**warehouse_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
