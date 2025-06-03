# # PurchaseOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version** | **string** |  | [optional]
**commercial_language** | **string** |  | [optional]
**confirmation_deadline** | **int** |  | [optional]
**created_date** | **int** |  | [optional]
**creator_id** | **string** |  | [optional]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**delivery_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**description** | **string** |  | [optional]
**disable_record_emailing_rule** | **bool** |  | [optional]
**invoice_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**last_modified_date** | **int** |  | [optional]
**planned_delivery_date** | **int** |  | [optional]
**purchase_order_request_items** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestItem[]**](PurchaseOrderRequestItem.md) |  | [optional]
**purchase_order_request_number** | **string** |  |
**purchase_order_request_offers** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestOffer[]**](PurchaseOrderRequestOffer.md) |  | [optional]
**purchase_order_request_type** | **string** |  |
**quotation_id** | **string** |  | [optional]
**record_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**record_comment** | **string** |  | [optional]
**record_free_text** | **string** |  | [optional]
**record_opening** | **string** |  | [optional]
**responsible_user_id** | **string** |  | [optional]
**sales_order_id** | **string** |  | [optional]
**sent_to_recipient** | **bool** |  | [optional]
**status** | **string** |  |
**status_history** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestStatusHistory[]**](PurchaseOrderRequestStatusHistory.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**warehouse_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
