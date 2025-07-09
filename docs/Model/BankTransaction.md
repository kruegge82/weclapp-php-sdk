# # BankTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**account_for_costs_of_monetary_traffic_id** | **string** |  | [optional]
**account_for_dunning_fee_id** | **string** |  | [optional]
**amount** | **float** |  | [optional]
**amount_costs_of_monetary_traffic** | **float** |  | [optional]
**cleared** | **bool** |  | [optional]
**created_by_id** | **string** |  | [optional]
**currency_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**effective_date** | **int** |  | [optional]
**external_record_number** | **string** |  | [optional]
**origin** | [**\kruegge82\weclapp\Model\MoneyTransactionSource**](MoneyTransactionSource.md) |  | [optional]
**party_id** | **string** |  | [optional] [readonly]
**payment_method_id** | **string** |  | [optional]
**payment_tolerance_account_id** | **string** |  | [optional]
**payment_type** | [**\kruegge82\weclapp\Model\PaymentType**](PaymentType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
