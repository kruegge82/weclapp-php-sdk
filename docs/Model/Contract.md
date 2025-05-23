# # Contract

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
**additional_addresses** | [**\kruegge82\weclapp\Model\ContractAdditionalAddress[]**](ContractAdditionalAddress.md) |  | [optional]
**authorization_unit_id** | **string** |  | [optional]
**automatic_extension** | **bool** |  | [optional]
**bill_until** | [**\kruegge82\weclapp\Model\BillUntil**](BillUntil.md) |  | [optional]
**billing_day** | **int** |  | [optional]
**billing_target_invoice_status** | [**\kruegge82\weclapp\Model\DesiredInvoiceStatusType**](DesiredInvoiceStatusType.md) |  | [optional]
**billing_type** | [**\kruegge82\weclapp\Model\ContractBillingType**](ContractBillingType.md) |  | [optional]
**cancellation_date** | **int** |  | [optional]
**cancellation_period_quantity** | **int** |  | [optional]
**cancellation_period_softframe** | [**\kruegge82\weclapp\Model\ContractSoftframe**](ContractSoftframe.md) |  | [optional]
**cancellation_period_unit** | [**\kruegge82\weclapp\Model\ContractUnitType**](ContractUnitType.md) |  | [optional]
**commission** | **string** |  | [optional]
**commission_sales_partners** | [**\kruegge82\weclapp\Model\CommissionSalesPartner[]**](CommissionSalesPartner.md) |  | [optional]
**contract_cost_items** | [**\kruegge82\weclapp\Model\ContractCostItem[]**](ContractCostItem.md) |  | [optional]
**contract_date** | **int** |  | [optional]
**contract_items** | [**\kruegge82\weclapp\Model\ContractItem[]**](ContractItem.md) |  | [optional]
**contract_number** | **string** |  | [optional]
**contract_number_at_party** | **string** |  | [optional]
**contract_status** | [**\kruegge82\weclapp\Model\ContractStatus**](ContractStatus.md) |  | [optional]
**correspondence_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**delivery_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**delivery_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**differing_correspondence_address** | **bool** |  | [optional]
**differing_delivery_address** | **bool** |  | [optional]
**differing_invoice_address** | **bool** |  | [optional]
**end_date** | **int** |  | [optional]
**extension_quantity** | **int** |  | [optional]
**extension_unit** | [**\kruegge82\weclapp\Model\ContractUnitType**](ContractUnitType.md) |  | [optional]
**factoring** | **bool** |  | [optional]
**invoice_address** | [**\kruegge82\weclapp\Model\RecordAddress**](RecordAddress.md) |  | [optional]
**invoice_recipient_id** | **string** |  | [optional]
**latest_cancellation_warning_quantity** | **int** |  | [optional]
**latest_cancellation_warning_unit** | [**\kruegge82\weclapp\Model\ContractUnitType**](ContractUnitType.md) |  | [optional]
**latest_possible_termination_date** | **int** |  | [optional]
**name** | **string** |  | [optional]
**next_contract_billing_date** | **int** |  | [optional]
**non_standard_input_tax_id** | **string** |  | [optional]
**order_number_at_customer** | **string** |  | [optional]
**party_id** | **string** |  | [optional]
**payment_method_id** | **string** |  | [optional]
**pricing_date** | **int** |  | [optional]
**purchase_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**record_currency_id** | **string** |  | [optional]
**record_currency_name** | **string** |  | [optional]
**record_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**reminder_date** | **int** |  | [optional]
**reminder_send_type** | [**\kruegge82\weclapp\Model\ReminderSendType**](ReminderSendType.md) |  | [optional]
**reminder_type** | [**\kruegge82\weclapp\Model\ContractReminderType**](ContractReminderType.md) |  | [optional]
**responsible_user_id** | **string** |  | [optional]
**sales_channel** | [**\kruegge82\weclapp\Model\DistributionChannel**](DistributionChannel.md) |  | [optional]
**sales_invoice_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**sales_order_email_addresses** | [**\kruegge82\weclapp\Model\EmailAddresses**](EmailAddresses.md) |  | [optional]
**start_date** | **int** |  | [optional]
**template** | **bool** |  | [optional]
**term_of_payment_id** | **string** |  | [optional]
**termination_reason_id** | **string** |  | [optional]
**ticket_service_level_agreement_id** | **string** |  | [optional]
**types** | [**\kruegge82\weclapp\Model\OnlyId[]**](OnlyId.md) |  | [optional]
**unlimited** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
