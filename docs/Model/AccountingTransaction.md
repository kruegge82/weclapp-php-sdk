# # AccountingTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional]
**accounting_import_date** | **int** |  | [optional]
**conversion_rate** | **float** |  | [optional]
**conversion_rate_date** | **int** |  | [optional]
**currency_id** | **string** |  | [optional]
**draft** | **bool** |  | [optional]
**external_record_number** | **string** |  | [optional]
**internal_record_number** | **string** |  | [optional]
**reverse_transaction** | **bool** |  | [optional]
**status** | [**\kruegge82\weclapp\Model\AccountingTransactionStatus**](AccountingTransactionStatus.md) |  | [optional]
**transaction_date** | **int** |  | [optional]
**transaction_details** | [**\kruegge82\weclapp\Model\AccountingTransactionDetail[]**](AccountingTransactionDetail.md) |  | [optional]
**transaction_establish_date** | **int** |  | [optional]
**transaction_number** | **string** |  | [optional]
**type** | [**\kruegge82\weclapp\Model\BookingType**](BookingType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
