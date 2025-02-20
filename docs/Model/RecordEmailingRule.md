# # RecordEmailingRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional]
**active** | **bool** |  | [optional]
**attach_purchase_order_request_csv_file** | **bool** |  | [optional]
**attach_record_document** | **bool** |  | [optional]
**attach_return_label** | **bool** |  | [optional]
**attach_shipping_label** | **bool** |  | [optional]
**bcc_recipients** | **string** |  | [optional]
**cc_recipients** | **string** |  | [optional]
**event** | [**\kruegge82\weclapp\Model\RecordEmailingRuleEventType**](RecordEmailingRuleEventType.md) |  | [optional]
**mail_account_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**other_recipients** | **string** |  | [optional]
**payment_method_types** | [**\kruegge82\weclapp\Model\OnlyId[]**](OnlyId.md) |  | [optional]
**recipient_type** | [**\kruegge82\weclapp\Model\RecordEmailingRuleRecipientType**](RecordEmailingRuleRecipientType.md) |  | [optional]
**sales_channels** | [**\kruegge82\weclapp\Model\DistributionChannel[]**](DistributionChannel.md) |  | [optional]
**sales_invoice_origin** | [**\kruegge82\weclapp\Model\SalesInvoiceOrigin**](SalesInvoiceOrigin.md) |  | [optional]
**sales_invoice_types** | [**\kruegge82\weclapp\Model\SalesInvoiceType[]**](SalesInvoiceType.md) |  | [optional]
**template_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
