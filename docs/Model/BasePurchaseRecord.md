# # BasePurchaseRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**commercial_language** | **string** |  | [optional]
**creator_id** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**disable_record_emailing_rule** | **bool** |  | [optional]
**record_comment** | **string** |  | [optional]
**record_free_text** | **string** |  | [optional]
**record_opening** | **string** |  | [optional]
**sent_to_recipient** | **bool** |  | [optional]
**tags** | **string[]** |  | [optional]
**currency_conversion_date** | **int** |  | [optional] [readonly]
**currency_conversion_locked** | **bool** |  | [optional]
**currency_conversion_rate** | **float** |  | [optional]
**gross_amount** | **float** |  | [optional] [readonly]
**gross_amount_in_company_currency** | **float** |  | [optional] [readonly]
**header_discount** | **float** |  | [optional]
**header_surcharge** | **float** |  | [optional]
**net_amount** | **float** |  | [optional] [readonly]
**net_amount_in_company_currency** | **float** |  | [optional] [readonly]
**non_standard_tax_id** | **string** |  | [optional]
**payment_method_id** | **string** |  | [optional]
**record_currency_id** | **string** |  | [optional]
**term_of_payment_id** | **string** |  | [optional]
**record_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**responsible_user_id** | **string** |  | [optional]
**service_period_from** | **int** |  | [optional]
**service_period_to** | **int** |  | [optional]
**supplier_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
