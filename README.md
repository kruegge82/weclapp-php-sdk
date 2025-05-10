# OpenAPIClient-php

# Getting Started


API Version:     **[v1](v1.html)**


The weclapp REST API lets you integrate weclapp with other applications or services.

The specification for this version can be downloaded here:

| Format                          | Public                                                                           |
|---------------------------------|----------------------------------------------------------------------------------|
| swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> |
| OpenApi 3 JSON                  | <a href=\"openapi_v1.json\" download=\"weclapp-openapi.json\">Download</a> |
| OpenApi 3 YAML (with user docs) | <a href=\"openapi_v1.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |



## What should I know before starting?

Our API is continuously being developed and improved, but we are still
trying to keep it as stable as possible. We try to only have changes
that are backwards compatible: usually the changes are only additions,
e.g. new resources are implemented or new properties are added to
existing resources. Sometimes breaking changes cannot be avoided, e.g.
when a new feature requires an incompatible change to the underlying
data model, all those changes will be documented in the change log.

## Security and Authentication

You must be a verified user to make API requests. You can authorize
against the API with an API token. The token is configurable in your
weclapp account under **My settings > API**. Authentication is
possible in multiple ways: If the request contains the session cookies
of a logged in weclapp session then the user and permissions of that
session are used. This is useful when testing the API in a web browser,
because then requests are “automatically” authenticated if weclapp is
used in another tab. But generally the API is not used from a browser or
with session cookies, instead there is an API token for each user that
can be used to authenticate requests. Each user can find his/her token
on the \"My Settings page\". The token should be kept secret like a
password. A user can also generate a new token at any time, doing that
invalidates all previous tokens. Authenticating using a token is
possible in two ways:

* the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}`
* the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token

## Using curl

```bash
curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v1\" ...
```

Examples of how to use curl will be shown in each section of this API.

## Headers

This is a JSON-only API. You must supply a `Content-Type: application/json`
header on PUT and POST operations. You must set a
`Accept: application/json` header on all requests. You may get a
`text/plain` response in case of error, e.g. in case of a bad request, you
should treat this as an error you need to take action on.

To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression).
This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will
enforce compression and respond with \"Content-Encoding: gzip\".

Please also make sure to set a `User-Agent` header for all automated requests,
as that makes it much easier to identify misbehaving clients.

## URLs

The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v1/`
where `<TENANT>.weclapp.com` is the domain of the specific
weclapp instance. So each weclapp instance has its own API endpoints
which allow accessing data for that particular instance. The API
provides access to various resources like customers, sales orders,
articles etc.. Each of those resources implements a common set of
operations. The URLs and HTTP methods for the different resource
operations use the same pattern for all resources:

| Operation                     | HTTP Method | URL pattern                                                           |
|-------------------------------|-------------|-----------------------------------------------------------------------|
| Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       |
| total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/count` |
| Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |
| Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       |
| Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |
| Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |

Not all resources support all of those operations. A general description
for each operation can be found in API operations by example, and
details for each resource are described on the page for that resource.

## Additional operations

Some resources allow further operations or actions. Those operations can
be executed with a POST request, for some operations that only read data
it is also possible to use a GET request (this is documented for each
operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/<operation>`.
Some operations are instance specific, those use the following URL
pattern: `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>/<operation>`.





## JSON

| Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         |
|----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       |
| boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                |
| decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). |
| integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   |
| floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    |
| dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  |
| enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |

The deserialization of data sent to the API is relatively lenient, for
example when a string is expected, but a number is given then that
number is used as the string and the other way around (if possible).
Properties with the value null are not serialized by default and when
sending data to the API it is also not necessary to include properties
whose value is null: all properties that are missing from the JSON
object but are expected are assumed to be `null`. To get all properties
including those with the value null the query parameter `serializeNulls`
can be added to the request URL, in that case null values are included
in the response.



## Error Responses

Any request on the weclapp API may return an error response, with a
structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807).
See the [API error reference](#errors) section for details.





## Change Policy

weclapp may modify the attributes and resources available to the API and
our policies related to access and use of the API from time to time
without advance notice. weclapp will use commercially reasonable efforts
to notify you of any modifications to the API or policies through
notifications or posts on the weclapp Developer Website. weclapp also
tracks deprecation of attributes of the API on its Changelog.
Modification of the API may have an adverse effect on weclapp
Applications, including but not limited to changing the manner in which
weclapp Applications communicate with the API and display or transmit
Your Data. weclapp will not be liable to you or any third party for such
modifications or any adverse effects resulting from such modifications



# API newsletter

Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.


# API operations sample

As mentioned previously
all resources implement common operations in the same way. In the
following all the common operations are explained for the `customer`
resource. The operations work in the same way for all other resources
(some resources don’t support all the operations), the differences
between the resources are mostly the data and the properties that are
required and used.

## Querying

The most common operation is querying or listing the existing entity
instances. This is possible with a `GET` request to the base URL of
a resource:



### `GET /customer`


```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\"
```

**Output:**

```json
{
  \"result\": [
    {
      \"id\": \"4342\",
      \"version\": \"1\",
      \"addresses\": [
        {
          \"id\": \"4344\",
          \"version\": \"0\",
          \"city\": \"München\",
          \"countryCode\": \"DE\",
          \"createdDate\": 1496828973904,
          \"deliveryAddress\": false,
          \"invoiceAddress\": false,
          \"lastModifiedDate\": 1496828973903,
          \"primeAddress\": true,
          \"street1\": \"Mustergasse 7\",
          \"zipcode\": \"80331 \"
        }
      ],
      \"blocked\": false,
      \"company\": \"Muster GmbH\",
      \"contacts\": [
        {
          \"id\": \"4332\",
          \"version\": \"1\",
          \"addresses\": [
            {
              \"id\": \"4334\",
              \"version\": \"0\",
              \"city\": \"München\",
              \"countryCode\": \"DE\",
              \"createdDate\": 1496828882836,
              \"deliveryAddress\": false,
              \"invoiceAddress\": false,
              \"lastModifiedDate\": 1496828882836,
              \"primeAddress\": true,
              \"street1\": \"Fasanenweg 15\",
              \"zipcode\": \"80331\"
            }
          ],
          \"createdDate\": 1496828882837,
          \"email\": \"mustermann@beispiel.de\",
          \"firstName\": \"Max\",
          \"lastModifiedDate\": 1496828996245,
          \"lastName\": \"Mustermann\",
          \"partyType\": \"PERSON\",
          \"personCompany\": \"Muster GmbH\",
          \"salutation\": \"MR\"
        }
      ],
      \"createdDate\": 1496828973904,
      \"currencyId\": \"248\",
      \"currencyName\": \"EUR\",
      \"customAttributes\": [
        {
          \"attributeDefinitionId\": \"4048\"
        }
      ],
      \"customerNumber\": \"C1006\",
      \"customerTopics\": [],
      \"deliveryBlock\": false,
      \"insolvent\": false,
      \"insured\": false,
      \"lastModifiedDate\": 1496828996212,
      \"optIn\": false,
      \"partyType\": \"ORGANIZATION\",
      \"responsibleUserFixed\": false,
      \"responsibleUserId\": \"947\",
      \"responsibleUserUsername\": \"sales@weclapp.com\",
      \"salesChannel\": \"NET1\",
      \"useCustomsTariffNumber\": false
    }
  ]
}
```

In this case there is one
sales order with one order item. By default, all null values are
omitted, to include them the query parameter serializeNulls can be
used:



### `GET /customer?serializeNulls`



```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?serializeNulls\"
```

**Output:**

```json
{
  \"result\": [
    {
      \"id\": \"4342\",
      \"version\": \"1\",
      \"addresses\": [
        {
          \"id\": \"4344\",
          \"version\": \"0\",
          \"city\": \"München\",
          \"company\": null,
          \"company2\": null,
          \"countryCode\": \"DE\",
          \"createdDate\": 1496828973904,
          \"deliveryAddress\": false,
          \"globalLocationNumber\": null,
          \"invoiceAddress\": false,
          \"lastModifiedDate\": 1496828973903,
          \"postOfficeBoxCity\": null,
          \"postOfficeBoxNumber\": null,
          \"postOfficeBoxZipCode\": null,
          \"primeAddress\": true,
          \"state\": null,
          \"street1\": \"Mustergasse 7\",
          \"street2\": null,
          \"zipcode\": \"80331 \"
        }
      ],
      \"amountInsured\": null,
      \"annualRevenue\": null,
      \"birthDate\": null,
      \"blockNotice\": null,
      \"blocked\": false,
      \"commercialLanguageId\": null,
      \"company\": \"Muster GmbH\",
      \"company2\": null,
      \"contacts\": [
        {
          \"id\": \"4332\",
          \"version\": \"1\",
          \"addresses\": [
            {
              \"id\": \"4334\",
              \"version\": \"0\",
              \"city\": \"München\",
              \"company\": null,
              \"company2\": null,
              \"countryCode\": \"DE\",
              \"createdDate\": 1496828882836,
              \"deliveryAddress\": false,
              \"globalLocationNumber\": null,
              \"invoiceAddress\": false,
              \"lastModifiedDate\": 1496828882836,
              \"postOfficeBoxCity\": null,
              \"postOfficeBoxNumber\": null,
              \"postOfficeBoxZipCode\": null,
              \"primeAddress\": true,
              \"state\": null,
              \"street1\": \"Fasanenweg 15\",
              \"street2\": null,
              \"zipcode\": \"80331\"
            }
          ],
          \"birthDate\": null,
          \"company\": null,
          \"company2\": null,
          \"createdDate\": 1496828882837,
          \"customAttributes\": null,
          \"description\": null,
          \"email\": \"mustermann@beispiel.de\",
          \"fax\": null,
          \"firstName\": \"Max\",
          \"fixPhone2\": null,
          \"lastModifiedDate\": 1496828996245,
          \"lastName\": \"Mustermann\",
          \"middleName\": null,
          \"mobilePhone1\": null,
          \"mobilePhone2\": null,
          \"partyType\": \"PERSON\",
          \"personCompany\": \"Muster GmbH\",
          \"personDepartment\": null,
          \"personRole\": null,
          \"phone\": null,
          \"phoneHome\": null,
          \"salutation\": \"MR\",
          \"title\": null,
          \"website\": null
        }
      ],
      \"createdDate\": 1496828973904,
      \"creditLimit\": null,
      \"currencyId\": \"248\",
      \"currencyName\": \"EUR\",
      \"customAttributes\": [
        {
          \"attributeDefinitionId\": \"4048\",
          \"booleanValue\": null,
          \"dateValue\": null,
          \"numberValue\": null,
          \"selectedValueId\": null,
          \"selectedValues\": null,
          \"stringValue\": null
        }
      ],
      \"customerCategoryId\": null,
      \"customerCategoryName\": null,
      \"customerNumber\": \"C1006\",
      \"customerRating\": null,
      \"customerTopics\": [],
      \"defaultHeaderDiscount\": null,
      \"defaultHeaderSurcharge\": null,
      \"deliveryBlock\": false,
      \"description\": null,
      \"email\": null,
      \"fax\": null,
      \"firstName\": null,
      \"insolvent\": false,
      \"insured\": false,
      \"invoiceContactId\": null,
      \"lastModifiedDate\": 1496828996212,
      \"lastName\": null,
      \"leadSourceId\": null,
      \"leadSourceName\": null,
      \"middleName\": null,
      \"mobilePhone1\": null,
      \"oldCustomerNumber\": null,
      \"optIn\": false,
      \"parentPartyId\": null,
      \"partyType\": \"ORGANIZATION\",
      \"paymentMethodId\": null,
      \"paymentMethodName\": null,
      \"personCompany\": null,
      \"personDepartment\": null,
      \"personRole\": null,
      \"phone\": null,
      \"primaryContactId\": null,
      \"responsibleUserFixed\": false,
      \"responsibleUserId\": \"947\",
      \"responsibleUserUsername\": \"sales@weclapp.com\",
      \"salesChannel\": \"NET1\",
      \"salutation\": null,
      \"satisfaction\": null,
      \"sectorId\": null,
      \"sectorName\": null,
      \"shipmentMethodId\": null,
      \"shipmentMethodName\": null,
      \"termOfPaymentId\": null,
      \"termOfPaymentName\": null,
      \"title\": null,
      \"useCustomsTariffNumber\": false,
      \"vatRegistrationNumber\": null,
      \"website\": null
    }
  ]
}
```

## Pagination
By default the operation will not return all entity instances but only
the first 100, this can be changed by using the `pageSize` query parameter
with the number of desired results. But `pageSize` cannot be arbitrarily
high it is usually limited 1000 (exceptions to the default limits of 100
and 1000 are noted in the documentation for the specific resources). To
get further results it is necessary to skip entity instances, this is
done using the `page` query parameter. Examples:



### `GET /customer?pageSize=10`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?pageSize=10\"
```

returns at most 10 instances

### `GET /customer?page=2&pageSize=10`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?page=2&pageSize=10\"
```

returns the second page of results (the `page` parameter is one based, so
`page=1` is the first page, which is also the default). Using those two
parameters it is possible to implement pagination.

## Sorting

It is also possible to change the order of the returned results using
the `sort` parameter:

### `GET /customer?sort=lastModifiedDate`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate\"
```

sort by `lastModifiedDate` (ascending).

### `GET /customer?sort=-lastModifiedDate`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=-lastModifiedDate\"
```

sort by `lastModifiedDate` descending.

### `GET /customer?sort=lastModifiedDate,-salesChannel`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate,-salesChannel\"
```

sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.


It is generally possible to sort by most of the simple properties of an
entity. It is possible to combine multiple sort orders by combining the
property names with a comma. To sort in descending order just prepend a
minus to the property name. If an unsupported or unknown property is
specified then an error response is returned.

## Filtering

It is often desired to get just a subset of the data, for example just
the orders of a specific customer or created after a specific date. This
is possible using filtering query parameters:



### `GET /customer?salesChannel-eq=NET1`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1\"
```

customers for `salesChannel` `NET1`.

### `GET /customer?createdDate-gt=1398436281262`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?createdDate-gt=1398436281262\"
```

customers created after the specified timestamp.

### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\"
```

customers for `salesChannel` `NET1` and created after the specified timestamp.

### `GET /customer?customAttribute4587-eq=NEW`

```bash
curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587-eq=NEW\"
```

customers with the value `NEW` for `customAttribute` with id 4587.

### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\"
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587.entityReferences.entityId-eq=1234\"
```

customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.

### `GET /customAttributeDefinitions`

All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.

### `GET /customer?customAttribute3387.value-eq=OPTION1`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute3387.value-eq=OPTION1\"
```

customers with value `OPTION1` for `customAttribute` with id 3387.

A filtering query parameter consists of a property name and a filter
operator joined together with a minus. If multiple filtering query
parameter are specified then they are combined and the returned results
match all of them. Filtering query parameters for unknown properties or
properties that don’t support filtering are silently ignored.

The following filtering operators are supported (not all of them work
for all property types):

| Operator | Meaning                                                                                                                                                                                     |
|----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| eq       | equal                                                                                                                                                                                       |
| ne       | not equal                                                                                                                                                                                   |
| lt       | less than                                                                                                                                                                                   |
| gt       | greater than                                                                                                                                                                                |
| le       | less equal                                                                                                                                                                                  |
| ge       | greater equal                                                                                                                                                                               |
| null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  |
| notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              |
| like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 |
| notlike  | not like expression                                                                                                                                                                         |
| ilike    | like expression, ignoring case                                                                                                                                                              |
| notilike | not like expression, ignoring case                                                                                                                                                          |
| in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` |
| notin    | the property value is not in the specified list of values                                                                                                                                   |

## \"Or\" condition filtering

In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":


### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`


```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?or-name-eq=charlie&or-name-eq=chaplin\"
```

The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`


For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:


### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\"
```

The above example is the equivalent of the expression

```
((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\")
```

Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.

## Filter Expressions

**Warning: This is still a beta feature.**

In addition to individual filter properties it is also possible to specify complex filter expressions that can
combine multiple conditions and express relations between properties. Example:

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  https://<TENANT>.weclapp.com/webapp/api/v1/party \\
  --get \\
  --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")'
```

* \"filter\" parameters are ANDed with other filter parameters
* Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters.
* Multiple \"filter\" parameters may be used if needed.

### Examples

Some more example filter expressions:

```sql
-- enum literals are specified as string literals
(salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")

-- normal arithmetic operations are supported.
(unitPrice + unitPrice * salesTax) <= 49.99

-- elementary functions
length(trim(notes)) <= 140

-- conditions can be combined with logical operators
(not (contacts.firstName null)) or (currencyId = 4711)
```

### Availabe Operations


### arihmetic

| Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 |
|--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------|
|  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings |
|  subtraction | - | integer, float | integer, float |  |
|  multiplication | * | integer, float | integer, float |  |
|  division | / | integer, float | integer, float |  |
|  negation | - | --- | integer, float |  |


### comparison

| Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 |
|--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------|
|  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  |
|  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  |
|  less than | < | integer, float, date | integer, float, date |  |
|  greater than | > | integer, float, date | integer, float, date |  |
|  Less than or equals | <= | integer, float, date | integer, float, date |  |
|  Greater than or equals | >= | integer, float, date | integer, float, date |  |
|  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE |
|  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives |
|  Property is null | null | integer, float, string, boolean, date, enum | --- |  |


### logical

| Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 |
|--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------|
|  and | and | boolean | boolean |  |
|  or | or | boolean | boolean |  |
|  not | not | --- | boolean |  |


### function

| Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 |
|--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------|
|  trim | trim | --- | string | Remove whitespace from both ends of a string |
|  length | length | --- | string | Get the number of characters in a string |
|  lower | lower | --- | string | Convert a string to lower case |


### Type Coercion

Literals in the expression are interpreted as different types depending on their context:

* An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch
* A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:
  * `2024-10-13T10:39:12+02:00`
  * `2024-10-13T10:39:12.443+02:00`
  * `2024-10-13T10:39:12Z`
  * `2024-10-13T10:39:12+02:00`
* A `string` literal being compared to an `enum` property is interpreted as enum constant
* ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals

## Return only specific properties

Sometimes it is desirable to only fetch a subset of all properties, for
example to save bandwidth. This is possible by specifying the desired
properties using the `properties` query parameter:

### `GET /customer?properties=id,customerNumber,salesChannel`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel\"
```

**Output:**

```json
{
  \"result\": [
    {
      \"id\": \"3346\",
      \"customerNumber\": \"C1002\",
      \"salesChannel\": \"NET1\"
    }
  ]
}
```

It is also possible to specify property paths:

### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\"
```

If an unknown property or property path is specified then an error
response is returned.

```json
{
  \"result\": [
    {
      \"id\": \"3346\",
      \"contacts\": [
        {
          \"id\": \"3731\",
          \"lastName\": \"Mustermann\"
        }
      ],
      \"customerNumber\": \"C1002\",
      \"salesChannel\": \"NET1\"
    }
  ]
}
```


## Combinations

The query parameters for pagination, sorting, filtering and returning
only specific properties can be combined to perform queries.


## Counting

To determine the total number of entity instances the count operation
can be used:

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count\"
```

It is possible to use the filtering query parameters from the querying
operation with the count operation:

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count?salesChannel-eq=NET1\"
```

returns the number of customers for `salesChannel` `NET1`.


## Referenced entities

The API offers the possibility to get the referenced entities for a query result in the same request. This way you can
save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply
specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list.
The API response will contain an additional object `referencedEntities`.


### `GET /article?includeReferencedEntities=unitId,articleCategoryId`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\"
```

**Output:**

```json
{
  \"result\": [
    {
      \"id\": \"3235\",
      \"name\": \"Testartikel 1\",
      \"unitId\": \"2770\"
    },
    {
      \"id\": \"3236\",
      \"name\": \"Testartikel 2\",
      \"unitId\": \"2770\"
    },
    {
      \"id\": \"3237\",
      \"articleCategoryId\": \"7035\",
      \"name\": \"Testartikel 3\",
      \"unitId\": \"2770\"
    }
  ],
  \"referencedEntities\": {
    \"unit\": [
      {
        \"id\": \"2770\",
        \"version\": \"0\",
        \"createdDate\": 1597915605986,
        \"description\": \"Stück\",
        \"lastModifiedDate\": 1597915605985,
        \"name\": \"Stk.\"
      }
    ],
    \"articleCategory\": [
      {
        \"id\": \"7035\",
        \"version\": \"0\",
        \"createdDate\": 1619778730348,
        \"lastModifiedDate\": 1619778730348,
        \"name\": \"Demo-Gruppe\"
      }
    ]
  }
}
```

## Additional properties

In addition to the common properties, there are additional properties that can be optionally queried. These are
calculated or complexly determined and must therefore be explicitly queried.

To use this function, only the parameter `additionalProperties` and the names of the additional properties must be
specified as a comma-separated list. The response then contains the additional object `additionalProperties` with
the property and an array of values. The index of the value object in this list also represents the reference to the
respective entity.


### `GET /article?additionalProperties=currentSalesPrice`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  \"https://<TENANT>.weclapp.com/webapp/api/v1/article?additionalProperties=currentSalesPrice\"
```

**Output:**

```json
{
  \"additionalProperties\": {
    \"currentSalesPrice\": [
      {
        \"articleUnitPrice\": \"39.95\",
        \"currencyId\": \"256\",
        \"quantity\": \"1\",
        \"reductionAdditionItems\": []
      },
      {
        \"articleUnitPrice\": \"479.4\",
        \"currencyId\": \"256\",
        \"quantity\": \"1\",
        \"reductionAdditionItems\": []
      }
    ]
  }
}
```


## Dry-Run

Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic
is executed and the data submitted by the requester is validated.
To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The
return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success.
The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".

### `POST /salesOrder?dryRun=true`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  -H Content-Type: application/json \\
  -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/salesOrder?dryRun=true\" \\
  -d   '{ \"customerNumber\": \"4799\" }'
```

**Error Output:**

```json
{
  \"detail\": \"customer not found\",
  \"error\": \"customer not found\",
  \"status\": 400,
  \"title\": \"entity validation failed\",
  \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",
  \"validationErrors\": [
    {
      \"detail\": \"referenced entity not found\",
      \"instance\": \"salesOrder\",
      \"location\": \"customerId\",
      \"title\": \"referenced entity not found\",
      \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"
    }
  ]
}
```

The response status will be 400 (Bad Request).

**Successful Output:**

```json
{
  \"availability\": \"NOT_CHECKED\",
  \"availabilityForAllWarehouses\": \"NOT_CHECKED\",
  \"commissionSalesPartners\": [],
  \"creatorId\": \"4451\",
  \"currencyConversionDate\": 1699375721469,
  \"currencyConversionRate\": \"1\",
  \"customAttributes\": [],
  \"customerId\": \"4799\",
  \"customerNumber\": \"10000\",
  \"deliveryAddress\": {
    \"city\": \"Hithausen\",
    \"company\": \"Beispiel AG\",
    \"countryCode\": \"DE\",
    \"street1\": \"Feldstraße 34\",
    \"zipcode\": \"54321\"
  },
  \"deliveryEmailAddresses\": {
    \"toAddresses\": \"info@beispielag.de\"
  },
  \"disableEmailTemplate\": false,
  \"dispatchCountryCode\": \"DE\",
  \"factoring\": false,
  \"fulfillmentProviderId\": \"3335\",
  \"grossAmount\": \"0\",
  \"grossAmountInCompanyCurrency\": \"0\",
  \"headerDiscount\": \"0\",
  \"headerSurcharge\": \"0\",
  \"invoiceAddress\": {
    \"city\": \"Hithausen\",
    \"company\": \"Beispiel AG\",
    \"countryCode\": \"DE\",
    \"street1\": \"Feldstraße 34\",
    \"zipcode\": \"54321\"
  },
  \"invoiced\": false,
  \"netAmount\": \"0\",
  \"netAmountInCompanyCurrency\": \"0\",
  \"nonStandardTaxId\": \"3492\",
  \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",
  \"onlyServices\": false,
  \"orderDate\": 1699311600000,
  \"orderItems\": [],
  \"paid\": false,
  \"plannedShippingDate\": 1699311600000,
  \"pricingDate\": 1699311600000,
  \"projectMembers\": [],
  \"projectModeActive\": false,
  \"recordAddress\": {
    \"city\": \"Hithausen\",
    \"company\": \"Beispiel AG\",
    \"countryCode\": \"DE\",
    \"street1\": \"Feldstraße 34\",
    \"zipcode\": \"54321\"
  },
  \"recordCurrencyId\": \"256\",
  \"recordCurrencyName\": \"EUR\",
  \"recordEmailAddresses\": {
    \"toAddresses\": \"info@beispielag.de\"
  },
  \"responsibleUserId\": \"4748\",
  \"responsibleUserUsername\": \"karsten.kunde@example.com\",
  \"salesChannel\": \"NET1\",
  \"salesInvoiceEmailAddresses\": {
    \"toAddresses\": \"info@beispielag.de\"
  },
  \"salesOrderPaymentType\": \"STANDARD\",
  \"sentToRecipient\": false,
  \"servicesFinished\": false,
  \"shipped\": false,
  \"shippingCostItems\": [],
  \"shippingLabelsCount\": 1,
  \"status\": \"ORDER_ENTRY_IN_PROGRESS\",
  \"statusHistory\": [
    {
      \"status\": \"ORDER_ENTRY_IN_PROGRESS\",
      \"statusDate\": 1699375721472,
      \"userId\": \"4451\"
    }
  ],
  \"tags\": [],
  \"warehouseId\": \"4191\",
  \"warehouseName\": \"Hauptlager\"
}
```

The response status will be 200 (OK).


## Optimistic locking

For the update operation the resources usually also support optimistic
locking using the `version` property: if the `version`
property is in the request body and it does not match the current `version`,
then the request fails with an optimistic lock error. In that case the
caller should again get the latest `version`, apply the changes and
try the request again.


## Basic Operations

The following entries will show you how to use the different basic
operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they
will give whether the operation was successful or not.


The following table will show you the HTTP status codes of the basic
operations if the operation was successful:

| Operation | HTTP status code |
|-----------|------------------|
| GET       | 200 (OK)         |
| POST      | 201 (Created)    |
| PUT       | 200 (OK)         |
| DELETE    | 204 (No Content) |

If you are not currently logged in to weclapp, you are using another
browser or the AuthenticationToken was wrong you will get a response of
`401 (Unauthorized)`.
It is possible to disable
the optimistic locking check by just omitting the `version` property, but
doing this might accidentally overwrite changes done by another user in the
meantime.

## Get a specific entity instance

Each entity instance has its own URL where it can be retrieved. The URL
is based on the entity id.

Performing a GET request on that URL returns the entity instance:

### `GET /customer/id/3346`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/3346\"
```

**Output:**

```json
{
  \"result\": [
    {
      \"id\": \"3346\",
      \"version\": \"2\",
      \"addresses\": [
        {
          \"id\": \"3348\",
          \"version\": \"0\",
          \"countryCode\": \"DE\",
          \"createdDate\": 1487765943229,
          \"deliveryAddress\": false,
          \"invoiceAddress\": false,
          \"lastModifiedDate\": 1487765943229,
          \"primeAddress\": true
        },
        {
          \"id\": \"3976\",
          \"version\": \"0\",
          \"company\": \"11111\",
          \"company2\": \"22222\",
          \"countryCode\": \"DE\",
          \"createdDate\": 1496040807652,
          \"deliveryAddress\": false,
          \"globalLocationNumber\": \"gln\",
          \"invoiceAddress\": false,
          \"lastModifiedDate\": 1496040807648,
          \"primeAddress\": false
        }
      ],
      \"blocked\": false,
      \"company\": \"Musterdaten GmbH\",
      \"contacts\": [
        {
          \"id\": \"3377\",
          \"version\": \"0\",
          \"addresses\": [
            {
              \"id\": \"3379\",
              \"version\": \"0\",
              \"countryCode\": \"DE\",
              \"createdDate\": 1487767121646,
              \"deliveryAddress\": false,
              \"invoiceAddress\": false,
              \"lastModifiedDate\": 1487767121645,
              \"primeAddress\": true
            }
          ],
          \"createdDate\": 1487767121649,
          \"firstName\": \"Max\",
          \"lastModifiedDate\": 1487767121642,
          \"lastName\": \"Mustermann\",
          \"partyType\": \"PERSON\",
          \"personCompany\": \"Musterdaten GmbH\",
          \"salutation\": \"MR\"
        }
      ],
      \"createdDate\": 1487765943230,
      \"currencyId\": \"248\",
      \"currencyName\": \"EUR\",
      \"customAttributes\": [
        {
          \"attributeDefinitionId\": \"4048\"
        }
      ],
      \"customerNumber\": \"C1002\",
      \"customerTopics\": [],
      \"deliveryBlock\": false,
      \"insolvent\": false,
      \"insured\": false,
      \"lastModifiedDate\": 1496040807672,
      \"optIn\": false,
      \"partyType\": \"ORGANIZATION\",
      \"responsibleUserFixed\": false,
      \"responsibleUserId\": \"947\",
      \"responsibleUserUsername\": \"@weclapp.com\",
      \"salesChannel\": \"NET1\",
      \"useCustomsTariffNumber\": false
    }
  ]
}
```

## Create a new instance

Creating new instances is done by performing a POST request to the base URL of a resource.

The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified
and there are defaults for some properties. Here are some general notes:

* id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified
* references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),
  for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary
  to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they
  must not contradict each other
* usually some required properties have sensible defaults, so if those are not given or null then the default will be used
* boolean properties can be optional (default value would be set) or mandatory


### `POST /customer`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  -H Content-Type: application/json \\
  -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" \\
  -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }'
```

**Output:**

```json
{
  \"id\": \"4391\",
  \"version\": \"0\",
  \"addresses\": [
    {
      \"id\": \"4393\",
      \"version\": \"0\",
      \"countryCode\": \"DE\",
      \"createdDate\": 1496840784272,
      \"deliveryAddress\": false,
      \"invoiceAddress\": false,
      \"lastModifiedDate\": 1496840784272,
      \"primeAddress\": true
    }
  ],
  \"blocked\": false,
  \"company\": \"Firma\",
  \"contacts\": [],
  \"createdDate\": 1496840784273,
  \"currencyId\": \"248\",
  \"currencyName\": \"EUR\",
  \"customAttributes\": [
    {
      \"attributeDefinitionId\": \"4048\"
    }
  ],
  \"customerNumber\": \"C1013\",
  \"customerTopics\": [],
  \"deliveryBlock\": false,
  \"insolvent\": false,
  \"insured\": false,
  \"lastModifiedDate\": 1496840784270,
  \"optIn\": false,
  \"partyType\": \"ORGANIZATION\",
  \"responsibleUserFixed\": false,
  \"responsibleUserId\": \"947\",
  \"responsibleUserUsername\": \"sales@weclapp.com\",
  \"salesChannel\": \"NET1\",
  \"useCustomsTariffNumber\": false
}
```

The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.


## Update a specific instance

Updating an instances is done by performing a `PUT` request to the URL of the instance.

A successful response will have the status 200 (OK) and the response body will contain the updated entity.

Some special aspects must be considered when updating:

* the read-only properties like `createdDate` are ignored anyway, so they do not need to be given
* `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below)
* for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other
* for complete entity updates boolean properties are always mandatory and need to be passed

### Updating the complete entity

When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.

Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the
latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that
new properties that the client does not know about are not accidentally overwritten with `null`.

In this example only the property \"company\" will be updated. All other properties are unchanged.

### `PUT /customer/id/4391`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  -H Content-Type: application/json \\
  -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" \\
  -d  @- <<JSON
{
  \"id\": \"4391\",
  \"version\": \"0\",
  \"addresses\": [
    {
      \"id\": \"4393\",
      \"version\": \"0\",
      \"countryCode\": \"DE\",
      \"createdDate\": 1496840784272,
      \"deliveryAddress\": false,
      \"invoiceAddress\": false,
      \"lastModifiedDate\": 1496840784272,
      \"primeAddress\": true
    }
  ],
  \"blocked\": false,
  \"company\": \"NEUER FIRMENNAME!!!\",
  \"contacts\": [],
  \"createdDate\": 1496840784273,
  \"currencyId\": \"248\",
  \"currencyName\": \"EUR\",
  \"customAttributes\": [
    {
      \"attributeDefinitionId\": \"4048\"
    }
  ],
  \"customerNumber\": \"C1013\",
  \"customerTopics\": [],
  \"deliveryBlock\": false,
  \"insolvent\": false,
  \"insured\": false,
  \"lastModifiedDate\": 1496840784270,
  \"optIn\": false,
  \"partyType\": \"ORGANIZATION\",
  \"responsibleUserFixed\": false,
  \"responsibleUserId\": \"947\",
  \"responsibleUserUsername\": \"sales@weclapp.com\",
  \"salesChannel\": \"NET1\",
  \"useCustomsTariffNumber\": false
}
JSON
```

**Output:**

```json
{
  \"id\": \"4391\",
  \"version\": \"1\",
  \"addresses\": [
    {
      \"id\": \"4393\",
      \"version\": \"0\",
      \"countryCode\": \"DE\",
      \"createdDate\": 1496840784272,
      \"deliveryAddress\": false,
      \"invoiceAddress\": false,
      \"lastModifiedDate\": 1496840784272,
      \"primeAddress\": true
    }
  ],
  \"blocked\": false,
  \"company\": \"NEUER FIRMENNAME!!!\",
  \"contacts\": [],
  \"createdDate\": 1496840784273,
  \"currencyId\": \"248\",
  \"currencyName\": \"EUR\",
  \"customAttributes\": [
    {
      \"attributeDefinitionId\": \"4048\"
    }
  ],
  \"customerNumber\": \"C1013\",
  \"customerTopics\": [],
  \"deliveryBlock\": false,
  \"insolvent\": false,
  \"insured\": false,
  \"lastModifiedDate\": 1496842955268,
  \"optIn\": false,
  \"partyType\": \"ORGANIZATION\",
  \"responsibleUserFixed\": false,
  \"responsibleUserId\": \"947\",
  \"responsibleUserUsername\": \"sales@weclapp.com\",
  \"salesChannel\": \"NET1\",
  \"useCustomsTariffNumber\": false
}
```

### Updating only specific properties

It is also possible to update only specific properties. For this you only have to set the parameter
`ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.

If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.

In this example only the property \"company\" will be updated. All other properties are unchanged.

### `PUT /customer/id/4391`



```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\
  -H Content-Type: application/json \\
  -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391?ignoreMissingProperties=true\" \\
  -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }'
```

**Output:**

```json
{
  \"id\": \"4391\",
  \"version\": \"1\",
  \"addresses\": [
    {
      \"id\": \"4393\",
      \"version\": \"0\",
      \"countryCode\": \"DE\",
      \"createdDate\": 1496840784272,
      \"deliveryAddress\": false,
      \"invoiceAddress\": false,
      \"lastModifiedDate\": 1496840784272,
      \"primeAddress\": true
    }
  ],
  \"blocked\": false,
  \"company\": \"NEUER FIRMENNAME!!!\",
  \"contacts\": [],
  \"createdDate\": 1496840784273,
  \"currencyId\": \"248\",
  \"currencyName\": \"EUR\",
  \"customAttributes\": [
    {
      \"attributeDefinitionId\": \"4048\"
    }
  ],
  \"customerNumber\": \"C1013\",
  \"customerTopics\": [],
  \"deliveryBlock\": false,
  \"insolvent\": false,
  \"insured\": false,
  \"lastModifiedDate\": 1496842955268,
  \"optIn\": false,
  \"partyType\": \"ORGANIZATION\",
  \"responsibleUserFixed\": false,
  \"responsibleUserId\": \"947\",
  \"responsibleUserUsername\": \"sales@weclapp.com\",
  \"salesChannel\": \"NET1\",
  \"useCustomsTariffNumber\": false
}
```


### Optimistic locking


For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request
body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the
latest version, apply the changes and try the request again.
It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes
done by another user in the meantime.

## Delete a specific instance

Deleting an instances is done by performing a `DELETE` request to the URL of the instance.

### `DELETE /customer/id/{id}`

```bash
curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\"
```

If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.

<span id=\"errors\"> </span>

# API error reference

weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807),
with some notable differences:

* The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:
  * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"
  * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.
  * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors.
* Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.

## Error JSON structure

The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:

| Property         | Datatype         | Description                                                                                                                                                                                                                                       |
|------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              |
| title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      |
| status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            |
| detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. |
| instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      |
| validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |

Validation errors have a similar structure:

| Property  | Datatype         | Description                                                                                                                                                                                                                                  |
|-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         |
| title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). |
| detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           |
| errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             |
| instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     |
| location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              |
| allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |


## Error reference


<span id=\"!/errors/context\"></span>

### \"context\": operation not possible in this context

|            |                                       |
|------------|---------------------------------------|
| description | The operation is not possible in this context or with the current state of the data                  |
| type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        |
| status     | 409 (Conflict)|

<span id=\"!/errors/conversation\"></span>

### \"conversation\": existing conversation (parameter 'cid') is not allowed

|            |                                       |
|------------|---------------------------------------|
| description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  |
| type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        |
| status     | 400 (Bad Request)|
| detail | human readable information on the conversation |

<span id=\"!/errors/entity_not_found\"></span>

### \"entity_not_found\": (sub)entity not found

|            |                                       |
|------------|---------------------------------------|
| description | The specified entity or (more likely) a referenced sub-entity could not be found.                  |
| type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        |
| status     | 400 (Bad Request)|

<span id=\"!/errors/forbidden\"></span>

### \"forbidden\": insufficient privileges

|            |                                       |
|------------|---------------------------------------|
| description | The provided credentials are not sufficient to perform the requested operation                  |
| type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        |
| status     | 403 (Forbidden)|

<span id=\"!/errors/invalid_json\"></span>

### \"invalid_json\": invalid json

|            |                                       |
|------------|---------------------------------------|
| description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  |
| type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        |
| status     | 400 (Bad Request)|

<span id=\"!/errors/not_found\"></span>

### \"not_found\": resource not found

|            |                                       |
|------------|---------------------------------------|
| description | The API endpoint / method / entity could not be found                  |
| type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        |
| status     | 404 (Not Found)|

<span id=\"!/errors/optimistic_lock\"></span>

### \"optimistic_lock\": optimistic lock error

|            |                                       |
|------------|---------------------------------------|
| description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  |
| type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        |
| status     | 409 (Conflict)|
| instance | URI to affected entity if available |

<span id=\"!/errors/persistence\"></span>

### \"persistence\": persistence error

|            |                                       |
|------------|---------------------------------------|
| description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  |
| type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        |
| status     | 409 (Conflict)|

<span id=\"!/errors/unauthorized\"></span>

### \"unauthorized\": missing permission

|            |                                       |
|------------|---------------------------------------|
| description | Authorization or authentication problem                  |
| type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        |
| status     | 401 (Unauthorized)|

<span id=\"!/errors/unexpected\"></span>

### \"unexpected\": unexpected error

|            |                                       |
|------------|---------------------------------------|
| description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  |
| type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        |
| status     | 500 (Internal Server Error)|

<span id=\"!/errors/unsupported_mime_type\"></span>

### \"unsupported_mime_type\": unsupported mime type

|            |                                       |
|------------|---------------------------------------|
| description | The provided file type is not supported to perform the requested operation                  |
| type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        |
| status     | 415 (Unsupported Media Type)|

<span id=\"!/errors/validation\"></span>

### \"validation\": validation failed

|            |                                       |
|------------|---------------------------------------|
| description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  |
| type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        |
| status     | 400 (Bad Request)|
| validationErrors | validation errors |

## Validation error reference


<span id=\"!/validation/authorization\"></span>

### \"authorization\": no authorization to access property or referenced entity

|            |                                       |
|------------|---------------------------------------|
| description | The client lacks authorization to access the property or referenced entity                  |
| type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |

<span id=\"!/validation/blocked\"></span>

### \"blocked\": operation was blocked

|            |                                       |
|------------|---------------------------------------|
| description | The operation was blocked by referenced entities                  |
| type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |

<span id=\"!/validation/consistency\"></span>

### \"consistency\": values are inconsistent

|            |                                       |
|------------|---------------------------------------|
| description | The given values are inconsistent (general, unspecific error)                  |
| type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |

<span id=\"!/validation/digits\"></span>

### \"digits\": maximum number of digits exceeded

|            |                                       |
|------------|---------------------------------------|
| description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  |
| type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        |
| allowed | maximum allowed integer digits, maximum allowed fraction digits |

<span id=\"!/validation/duplicate\"></span>

### \"duplicate\": entity is a duplicate

|            |                                       |
|------------|---------------------------------------|
| description | The given (sub-)entity is a duplicate                  |
| type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |

<span id=\"!/validation/email\"></span>

### \"email\": not a well-formed email

|            |                                       |
|------------|---------------------------------------|
| description | The value given is not a well-formed email address                  |
| type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |

<span id=\"!/validation/email_or_domain\"></span>

### \"email_or_domain\": not a well-formed email or domain

|            |                                       |
|------------|---------------------------------------|
| description | The value given is not a well-formed email address or internet domain name                  |
| type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |

<span id=\"!/validation/empty\"></span>

### \"empty\": value must be empty

|            |                                       |
|------------|---------------------------------------|
| description | The value given must be left blank in this context, but is present                  |
| type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |

<span id=\"!/validation/enum\"></span>

### \"enum\": unsupported enum value

|            |                                       |
|------------|---------------------------------------|
| description | The given enum value is unknown or unsupported in this context                  |
| type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        |
| allowed | all known / allowed (enum) values |

<span id=\"!/validation/future\"></span>

### \"future\": timestamp has to be in the future

|            |                                       |
|------------|---------------------------------------|
| description | The given timestamp should be in the future but is not                  |
| type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |

<span id=\"!/validation/greater_than\"></span>

### \"greater_than\": value has to be above allowed limit

|            |                                       |
|------------|---------------------------------------|
| description | The numerical value given has to be larger than the allowed limit                  |
| type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        |
| allowed | lower limit (excluded) |

<span id=\"!/validation/less_than\"></span>

### \"less_than\": value has to be below allowed limit

|            |                                       |
|------------|---------------------------------------|
| description | The numerical value given has to be smaller than the allowed limit                  |
| type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        |
| allowed | upper limit (excluded) |

<span id=\"!/validation/max\"></span>

### \"max\": value is above allowed maximum

|            |                                       |
|------------|---------------------------------------|
| description | The numerical value given is larger than the allowed maximum                  |
| type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        |
| allowed | maximum allowed value |

<span id=\"!/validation/min\"></span>

### \"min\": value is below allowed minimum

|            |                                       |
|------------|---------------------------------------|
| description | The numerical value given is smaller than the allowed minimum                  |
| type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        |
| allowed | minimum allowed value |

<span id=\"!/validation/not_empty\"></span>

### \"not_empty\": value must not be empty

|            |                                       |
|------------|---------------------------------------|
| description | The value given is required, but is missing or blank                  |
| type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |

<span id=\"!/validation/past\"></span>

### \"past\": timestamp has to be in the past

|            |                                       |
|------------|---------------------------------------|
| description | The given timestamp should be in the past but is not                  |
| type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |

<span id=\"!/validation/pattern\"></span>

### \"pattern\": value has to conform to a specific pattern

|            |                                       |
|------------|---------------------------------------|
| description | The text given does not conform to the allowed pattern                  |
| type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        |
| allowed | the pattern (regular expression) |

<span id=\"!/validation/reference\"></span>

### \"reference\": referenced entity not found

|            |                                       |
|------------|---------------------------------------|
| description | The referenced entity could not be found                  |
| type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |

<span id=\"!/validation/size\"></span>

### \"size\": size is outside allowed range

|            |                                       |
|------------|---------------------------------------|
| description | The text or collection given has not enough or too many characters or elements                  |
| type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        |
| allowed | minimum size, maximum size |

<span id=\"!/validation/syntax\"></span>

### \"syntax\": expression cannot be interpreted

|            |                                       |
|------------|---------------------------------------|
| description | The given expression does not conform to the expression syntax                  |
| type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |

<span id=\"!/validation/type\"></span>

### \"type\": unexpected data type

|            |                                       |
|------------|---------------------------------------|
| description | The given value is of a data type that's not supported in this context                  |
| type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |

For more information, please visit [https://www.weclapp.com](https://www.weclapp.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\AccountingTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_transaction_batch_booking_post_request = new \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPostRequest(); // \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPostRequest

try {
    $result = $apiInstance->accountingTransactionBatchBookingPost($accounting_transaction_batch_booking_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTransactionApi->accountingTransactionBatchBookingPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://localhost:80/webapp/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountingTransactionApi* | [**accountingTransactionBatchBookingPost**](docs/Api/AccountingTransactionApi.md#accountingtransactionbatchbookingpost) | **POST** /accountingTransaction/batchBooking | Creates an accounting transaction of type &#39;impersonal&#39;
*AccountingTransactionApi* | [**accountingTransactionCountGet**](docs/Api/AccountingTransactionApi.md#accountingtransactioncountget) | **GET** /accountingTransaction/count | count accountingTransaction
*AccountingTransactionApi* | [**accountingTransactionGet**](docs/Api/AccountingTransactionApi.md#accountingtransactionget) | **GET** /accountingTransaction | query accountingTransaction
*AccountingTransactionApi* | [**accountingTransactionIdIdGet**](docs/Api/AccountingTransactionApi.md#accountingtransactionididget) | **GET** /accountingTransaction/id/{id} | query a specific accountingTransaction
*ArchivedEmailApi* | [**archivedEmailCountGet**](docs/Api/ArchivedEmailApi.md#archivedemailcountget) | **GET** /archivedEmail/count | count archivedEmail
*ArchivedEmailApi* | [**archivedEmailGet**](docs/Api/ArchivedEmailApi.md#archivedemailget) | **GET** /archivedEmail | query archivedEmail
*ArchivedEmailApi* | [**archivedEmailIdIdGet**](docs/Api/ArchivedEmailApi.md#archivedemailididget) | **GET** /archivedEmail/id/{id} | query a specific archivedEmail
*ArchivedEmailApi* | [**archivedEmailIdIdRemoveReferencePost**](docs/Api/ArchivedEmailApi.md#archivedemailididremovereferencepost) | **POST** /archivedEmail/id/{id}/removeReference | 
*ArticleApi* | [**articleCountGet**](docs/Api/ArticleApi.md#articlecountget) | **GET** /article/count | count article
*ArticleApi* | [**articleGet**](docs/Api/ArticleApi.md#articleget) | **GET** /article | query article
*ArticleApi* | [**articleIdIdChangeUnitPost**](docs/Api/ArticleApi.md#articleididchangeunitpost) | **POST** /article/id/{id}/changeUnit | 
*ArticleApi* | [**articleIdIdCreateDatasheetPdfPost**](docs/Api/ArticleApi.md#articleididcreatedatasheetpdfpost) | **POST** /article/id/{id}/createDatasheetPdf | 
*ArticleApi* | [**articleIdIdCreateLabelPdfPost**](docs/Api/ArticleApi.md#articleididcreatelabelpdfpost) | **POST** /article/id/{id}/createLabelPdf | 
*ArticleApi* | [**articleIdIdDelete**](docs/Api/ArticleApi.md#articleididdelete) | **DELETE** /article/id/{id} | delete a article
*ArticleApi* | [**articleIdIdDownloadArticleImageGet**](docs/Api/ArticleApi.md#articleididdownloadarticleimageget) | **GET** /article/id/{id}/downloadArticleImage | 
*ArticleApi* | [**articleIdIdDownloadMainArticleImageGet**](docs/Api/ArticleApi.md#articleididdownloadmainarticleimageget) | **GET** /article/id/{id}/downloadMainArticleImage | 
*ArticleApi* | [**articleIdIdGet**](docs/Api/ArticleApi.md#articleididget) | **GET** /article/id/{id} | query a specific article
*ArticleApi* | [**articleIdIdPackagingUnitStructureGet**](docs/Api/ArticleApi.md#articleididpackagingunitstructureget) | **GET** /article/id/{id}/packagingUnitStructure | 
*ArticleApi* | [**articleIdIdPut**](docs/Api/ArticleApi.md#articleididput) | **PUT** /article/id/{id} | update a article
*ArticleApi* | [**articleIdIdUploadArticleImagePost**](docs/Api/ArticleApi.md#articleididuploadarticleimagepost) | **POST** /article/id/{id}/uploadArticleImage | 
*ArticleApi* | [**articlePost**](docs/Api/ArticleApi.md#articlepost) | **POST** /article | create a article
*ArticleAccountingCodeApi* | [**articleAccountingCodeCountGet**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodecountget) | **GET** /articleAccountingCode/count | count articleAccountingCode
*ArticleAccountingCodeApi* | [**articleAccountingCodeGet**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodeget) | **GET** /articleAccountingCode | query articleAccountingCode
*ArticleAccountingCodeApi* | [**articleAccountingCodeIdIdDelete**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodeididdelete) | **DELETE** /articleAccountingCode/id/{id} | delete a articleAccountingCode
*ArticleAccountingCodeApi* | [**articleAccountingCodeIdIdGet**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodeididget) | **GET** /articleAccountingCode/id/{id} | query a specific articleAccountingCode
*ArticleAccountingCodeApi* | [**articleAccountingCodeIdIdPut**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodeididput) | **PUT** /articleAccountingCode/id/{id} | update a articleAccountingCode
*ArticleAccountingCodeApi* | [**articleAccountingCodePost**](docs/Api/ArticleAccountingCodeApi.md#articleaccountingcodepost) | **POST** /articleAccountingCode | create a articleAccountingCode
*ArticleCategoryApi* | [**articleCategoryCountGet**](docs/Api/ArticleCategoryApi.md#articlecategorycountget) | **GET** /articleCategory/count | count articleCategory
*ArticleCategoryApi* | [**articleCategoryGet**](docs/Api/ArticleCategoryApi.md#articlecategoryget) | **GET** /articleCategory | query articleCategory
*ArticleCategoryApi* | [**articleCategoryIdIdDelete**](docs/Api/ArticleCategoryApi.md#articlecategoryididdelete) | **DELETE** /articleCategory/id/{id} | delete a articleCategory
*ArticleCategoryApi* | [**articleCategoryIdIdDownloadImageGet**](docs/Api/ArticleCategoryApi.md#articlecategoryididdownloadimageget) | **GET** /articleCategory/id/{id}/downloadImage | 
*ArticleCategoryApi* | [**articleCategoryIdIdGet**](docs/Api/ArticleCategoryApi.md#articlecategoryididget) | **GET** /articleCategory/id/{id} | query a specific articleCategory
*ArticleCategoryApi* | [**articleCategoryIdIdPut**](docs/Api/ArticleCategoryApi.md#articlecategoryididput) | **PUT** /articleCategory/id/{id} | update a articleCategory
*ArticleCategoryApi* | [**articleCategoryIdIdUploadImagePost**](docs/Api/ArticleCategoryApi.md#articlecategoryididuploadimagepost) | **POST** /articleCategory/id/{id}/uploadImage | 
*ArticleCategoryApi* | [**articleCategoryPost**](docs/Api/ArticleCategoryApi.md#articlecategorypost) | **POST** /articleCategory | create a articleCategory
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationCountGet**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationcountget) | **GET** /articleCategoryClassification/count | count articleCategoryClassification
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationGet**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationget) | **GET** /articleCategoryClassification | query articleCategoryClassification
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationIdIdDelete**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationididdelete) | **DELETE** /articleCategoryClassification/id/{id} | delete a articleCategoryClassification
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationIdIdGet**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationididget) | **GET** /articleCategoryClassification/id/{id} | query a specific articleCategoryClassification
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationIdIdPut**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationididput) | **PUT** /articleCategoryClassification/id/{id} | update a articleCategoryClassification
*ArticleCategoryClassificationApi* | [**articleCategoryClassificationPost**](docs/Api/ArticleCategoryClassificationApi.md#articlecategoryclassificationpost) | **POST** /articleCategoryClassification | create a articleCategoryClassification
*ArticleItemGroupApi* | [**articleItemGroupCountGet**](docs/Api/ArticleItemGroupApi.md#articleitemgroupcountget) | **GET** /articleItemGroup/count | count articleItemGroup
*ArticleItemGroupApi* | [**articleItemGroupGet**](docs/Api/ArticleItemGroupApi.md#articleitemgroupget) | **GET** /articleItemGroup | query articleItemGroup
*ArticleItemGroupApi* | [**articleItemGroupIdIdDelete**](docs/Api/ArticleItemGroupApi.md#articleitemgroupididdelete) | **DELETE** /articleItemGroup/id/{id} | delete a articleItemGroup
*ArticleItemGroupApi* | [**articleItemGroupIdIdGet**](docs/Api/ArticleItemGroupApi.md#articleitemgroupididget) | **GET** /articleItemGroup/id/{id} | query a specific articleItemGroup
*ArticleItemGroupApi* | [**articleItemGroupIdIdPut**](docs/Api/ArticleItemGroupApi.md#articleitemgroupididput) | **PUT** /articleItemGroup/id/{id} | update a articleItemGroup
*ArticleItemGroupApi* | [**articleItemGroupPost**](docs/Api/ArticleItemGroupApi.md#articleitemgrouppost) | **POST** /articleItemGroup | create a articleItemGroup
*ArticlePriceApi* | [**articlePriceCountGet**](docs/Api/ArticlePriceApi.md#articlepricecountget) | **GET** /articlePrice/count | count articlePrice
*ArticlePriceApi* | [**articlePriceGet**](docs/Api/ArticlePriceApi.md#articlepriceget) | **GET** /articlePrice | query articlePrice
*ArticlePriceApi* | [**articlePriceIdIdGet**](docs/Api/ArticlePriceApi.md#articlepriceididget) | **GET** /articlePrice/id/{id} | query a specific articlePrice
*ArticleRatingApi* | [**articleRatingCountGet**](docs/Api/ArticleRatingApi.md#articleratingcountget) | **GET** /articleRating/count | count articleRating
*ArticleRatingApi* | [**articleRatingGet**](docs/Api/ArticleRatingApi.md#articleratingget) | **GET** /articleRating | query articleRating
*ArticleRatingApi* | [**articleRatingIdIdDelete**](docs/Api/ArticleRatingApi.md#articleratingididdelete) | **DELETE** /articleRating/id/{id} | delete a articleRating
*ArticleRatingApi* | [**articleRatingIdIdGet**](docs/Api/ArticleRatingApi.md#articleratingididget) | **GET** /articleRating/id/{id} | query a specific articleRating
*ArticleRatingApi* | [**articleRatingIdIdPut**](docs/Api/ArticleRatingApi.md#articleratingididput) | **PUT** /articleRating/id/{id} | update a articleRating
*ArticleRatingApi* | [**articleRatingPost**](docs/Api/ArticleRatingApi.md#articleratingpost) | **POST** /articleRating | create a articleRating
*ArticleStatusApi* | [**articleStatusCountGet**](docs/Api/ArticleStatusApi.md#articlestatuscountget) | **GET** /articleStatus/count | count articleStatus
*ArticleStatusApi* | [**articleStatusGet**](docs/Api/ArticleStatusApi.md#articlestatusget) | **GET** /articleStatus | query articleStatus
*ArticleStatusApi* | [**articleStatusIdIdDelete**](docs/Api/ArticleStatusApi.md#articlestatusididdelete) | **DELETE** /articleStatus/id/{id} | delete a articleStatus
*ArticleStatusApi* | [**articleStatusIdIdGet**](docs/Api/ArticleStatusApi.md#articlestatusididget) | **GET** /articleStatus/id/{id} | query a specific articleStatus
*ArticleStatusApi* | [**articleStatusIdIdPut**](docs/Api/ArticleStatusApi.md#articlestatusididput) | **PUT** /articleStatus/id/{id} | update a articleStatus
*ArticleStatusApi* | [**articleStatusPost**](docs/Api/ArticleStatusApi.md#articlestatuspost) | **POST** /articleStatus | create a articleStatus
*ArticleSupplySourceApi* | [**articleSupplySourceCountGet**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourcecountget) | **GET** /articleSupplySource/count | count articleSupplySource
*ArticleSupplySourceApi* | [**articleSupplySourceGet**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourceget) | **GET** /articleSupplySource | query articleSupplySource
*ArticleSupplySourceApi* | [**articleSupplySourceIdIdDelete**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourceididdelete) | **DELETE** /articleSupplySource/id/{id} | delete a articleSupplySource
*ArticleSupplySourceApi* | [**articleSupplySourceIdIdGet**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourceididget) | **GET** /articleSupplySource/id/{id} | query a specific articleSupplySource
*ArticleSupplySourceApi* | [**articleSupplySourceIdIdPut**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourceididput) | **PUT** /articleSupplySource/id/{id} | update a articleSupplySource
*ArticleSupplySourceApi* | [**articleSupplySourcePost**](docs/Api/ArticleSupplySourceApi.md#articlesupplysourcepost) | **POST** /articleSupplySource | create a articleSupplySource
*AttendanceApi* | [**attendanceCountGet**](docs/Api/AttendanceApi.md#attendancecountget) | **GET** /attendance/count | count attendance
*AttendanceApi* | [**attendanceCurrentAttendanceGet**](docs/Api/AttendanceApi.md#attendancecurrentattendanceget) | **GET** /attendance/currentAttendance | 
*AttendanceApi* | [**attendanceGet**](docs/Api/AttendanceApi.md#attendanceget) | **GET** /attendance | query attendance
*AttendanceApi* | [**attendanceIdIdDelete**](docs/Api/AttendanceApi.md#attendanceididdelete) | **DELETE** /attendance/id/{id} | delete a attendance
*AttendanceApi* | [**attendanceIdIdGet**](docs/Api/AttendanceApi.md#attendanceididget) | **GET** /attendance/id/{id} | query a specific attendance
*AttendanceApi* | [**attendanceIdIdPut**](docs/Api/AttendanceApi.md#attendanceididput) | **PUT** /attendance/id/{id} | update a attendance
*AttendanceApi* | [**attendanceLogOffPost**](docs/Api/AttendanceApi.md#attendancelogoffpost) | **POST** /attendance/logOff | 
*AttendanceApi* | [**attendanceLogOnPost**](docs/Api/AttendanceApi.md#attendancelogonpost) | **POST** /attendance/logOn | 
*AttendanceApi* | [**attendancePost**](docs/Api/AttendanceApi.md#attendancepost) | **POST** /attendance | create a attendance
*BankAccountApi* | [**bankAccountCountGet**](docs/Api/BankAccountApi.md#bankaccountcountget) | **GET** /bankAccount/count | count bankAccount
*BankAccountApi* | [**bankAccountGet**](docs/Api/BankAccountApi.md#bankaccountget) | **GET** /bankAccount | query bankAccount
*BankAccountApi* | [**bankAccountIdIdDelete**](docs/Api/BankAccountApi.md#bankaccountididdelete) | **DELETE** /bankAccount/id/{id} | delete a bankAccount
*BankAccountApi* | [**bankAccountIdIdGet**](docs/Api/BankAccountApi.md#bankaccountididget) | **GET** /bankAccount/id/{id} | query a specific bankAccount
*BankAccountApi* | [**bankAccountIdIdPut**](docs/Api/BankAccountApi.md#bankaccountididput) | **PUT** /bankAccount/id/{id} | update a bankAccount
*BankAccountApi* | [**bankAccountPost**](docs/Api/BankAccountApi.md#bankaccountpost) | **POST** /bankAccount | create a bankAccount
*BatchNumberApi* | [**batchNumberCountGet**](docs/Api/BatchNumberApi.md#batchnumbercountget) | **GET** /batchNumber/count | count batchNumber
*BatchNumberApi* | [**batchNumberGet**](docs/Api/BatchNumberApi.md#batchnumberget) | **GET** /batchNumber | query batchNumber
*BatchNumberApi* | [**batchNumberIdIdGet**](docs/Api/BatchNumberApi.md#batchnumberididget) | **GET** /batchNumber/id/{id} | query a specific batchNumber
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderCountGet**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseordercountget) | **GET** /blanketPurchaseOrder/count | count blanketPurchaseOrder
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderGet**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderget) | **GET** /blanketPurchaseOrder | query blanketPurchaseOrder
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderIdIdDelete**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderididdelete) | **DELETE** /blanketPurchaseOrder/id/{id} | delete a blanketPurchaseOrder
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderididdownloadlatestblanketpurchaseorderpdfget) | **GET** /blanketPurchaseOrder/id/{id}/downloadLatestBlanketPurchaseOrderPdf | 
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderIdIdGenerateReleasesPost**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderididgeneratereleasespost) | **POST** /blanketPurchaseOrder/id/{id}/generateReleases | 
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderIdIdGet**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderididget) | **GET** /blanketPurchaseOrder/id/{id} | query a specific blanketPurchaseOrder
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderIdIdPut**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderididput) | **PUT** /blanketPurchaseOrder/id/{id} | update a blanketPurchaseOrder
*BlanketPurchaseOrderApi* | [**blanketPurchaseOrderPost**](docs/Api/BlanketPurchaseOrderApi.md#blanketpurchaseorderpost) | **POST** /blanketPurchaseOrder | create a blanketPurchaseOrder
*CalendarApi* | [**calendarCountGet**](docs/Api/CalendarApi.md#calendarcountget) | **GET** /calendar/count | count calendar
*CalendarApi* | [**calendarGet**](docs/Api/CalendarApi.md#calendarget) | **GET** /calendar | query calendar
*CalendarApi* | [**calendarIdIdDelete**](docs/Api/CalendarApi.md#calendarididdelete) | **DELETE** /calendar/id/{id} | delete a calendar
*CalendarApi* | [**calendarIdIdDeleteCalendarAndMoveEventsPost**](docs/Api/CalendarApi.md#calendarididdeletecalendarandmoveeventspost) | **POST** /calendar/id/{id}/deleteCalendarAndMoveEvents | 
*CalendarApi* | [**calendarIdIdGet**](docs/Api/CalendarApi.md#calendarididget) | **GET** /calendar/id/{id} | query a specific calendar
*CalendarApi* | [**calendarIdIdImportiCalPost**](docs/Api/CalendarApi.md#calendarididimporticalpost) | **POST** /calendar/id/{id}/importiCal | 
*CalendarApi* | [**calendarIdIdPut**](docs/Api/CalendarApi.md#calendarididput) | **PUT** /calendar/id/{id} | update a calendar
*CalendarApi* | [**calendarPost**](docs/Api/CalendarApi.md#calendarpost) | **POST** /calendar | create a calendar
*CalendarEventApi* | [**calendarEventCountGet**](docs/Api/CalendarEventApi.md#calendareventcountget) | **GET** /calendarEvent/count | count calendarEvent
*CalendarEventApi* | [**calendarEventGet**](docs/Api/CalendarEventApi.md#calendareventget) | **GET** /calendarEvent | query calendarEvent
*CalendarEventApi* | [**calendarEventIdIdDelete**](docs/Api/CalendarEventApi.md#calendareventididdelete) | **DELETE** /calendarEvent/id/{id} | delete a calendarEvent
*CalendarEventApi* | [**calendarEventIdIdGet**](docs/Api/CalendarEventApi.md#calendareventididget) | **GET** /calendarEvent/id/{id} | query a specific calendarEvent
*CalendarEventApi* | [**calendarEventIdIdPut**](docs/Api/CalendarEventApi.md#calendareventididput) | **PUT** /calendarEvent/id/{id} | update a calendarEvent
*CalendarEventApi* | [**calendarEventPost**](docs/Api/CalendarEventApi.md#calendareventpost) | **POST** /calendarEvent | create a calendarEvent
*CampaignApi* | [**campaignCountGet**](docs/Api/CampaignApi.md#campaigncountget) | **GET** /campaign/count | count campaign
*CampaignApi* | [**campaignGet**](docs/Api/CampaignApi.md#campaignget) | **GET** /campaign | query campaign
*CampaignApi* | [**campaignIdIdDelete**](docs/Api/CampaignApi.md#campaignididdelete) | **DELETE** /campaign/id/{id} | delete a campaign
*CampaignApi* | [**campaignIdIdGet**](docs/Api/CampaignApi.md#campaignididget) | **GET** /campaign/id/{id} | query a specific campaign
*CampaignApi* | [**campaignIdIdPut**](docs/Api/CampaignApi.md#campaignididput) | **PUT** /campaign/id/{id} | update a campaign
*CampaignApi* | [**campaignPost**](docs/Api/CampaignApi.md#campaignpost) | **POST** /campaign | create a campaign
*CampaignParticipantApi* | [**campaignParticipantCountGet**](docs/Api/CampaignParticipantApi.md#campaignparticipantcountget) | **GET** /campaignParticipant/count | count campaignParticipant
*CampaignParticipantApi* | [**campaignParticipantGet**](docs/Api/CampaignParticipantApi.md#campaignparticipantget) | **GET** /campaignParticipant | query campaignParticipant
*CampaignParticipantApi* | [**campaignParticipantIdIdDelete**](docs/Api/CampaignParticipantApi.md#campaignparticipantididdelete) | **DELETE** /campaignParticipant/id/{id} | delete a campaignParticipant
*CampaignParticipantApi* | [**campaignParticipantIdIdGet**](docs/Api/CampaignParticipantApi.md#campaignparticipantididget) | **GET** /campaignParticipant/id/{id} | query a specific campaignParticipant
*CampaignParticipantApi* | [**campaignParticipantIdIdPut**](docs/Api/CampaignParticipantApi.md#campaignparticipantididput) | **PUT** /campaignParticipant/id/{id} | update a campaignParticipant
*CampaignParticipantApi* | [**campaignParticipantPost**](docs/Api/CampaignParticipantApi.md#campaignparticipantpost) | **POST** /campaignParticipant | create a campaignParticipant
*CashAccountApi* | [**cashAccountCountGet**](docs/Api/CashAccountApi.md#cashaccountcountget) | **GET** /cashAccount/count | count cashAccount
*CashAccountApi* | [**cashAccountGet**](docs/Api/CashAccountApi.md#cashaccountget) | **GET** /cashAccount | query cashAccount
*CashAccountApi* | [**cashAccountIdIdGet**](docs/Api/CashAccountApi.md#cashaccountididget) | **GET** /cashAccount/id/{id} | query a specific cashAccount
*CashAccountApi* | [**cashAccountIdIdPut**](docs/Api/CashAccountApi.md#cashaccountididput) | **PUT** /cashAccount/id/{id} | update a cashAccount
*CashAccountApi* | [**cashAccountPost**](docs/Api/CashAccountApi.md#cashaccountpost) | **POST** /cashAccount | create a cashAccount
*CommentApi* | [**commentCountGet**](docs/Api/CommentApi.md#commentcountget) | **GET** /comment/count | count comment
*CommentApi* | [**commentGet**](docs/Api/CommentApi.md#commentget) | **GET** /comment | query comment
*CommentApi* | [**commentIdIdDelete**](docs/Api/CommentApi.md#commentididdelete) | **DELETE** /comment/id/{id} | delete a comment
*CommentApi* | [**commentIdIdGet**](docs/Api/CommentApi.md#commentididget) | **GET** /comment/id/{id} | query a specific comment
*CommentApi* | [**commentIdIdPut**](docs/Api/CommentApi.md#commentididput) | **PUT** /comment/id/{id} | update a comment
*CommentApi* | [**commentPost**](docs/Api/CommentApi.md#commentpost) | **POST** /comment | create a comment
*CommercialLanguageApi* | [**commercialLanguageCountGet**](docs/Api/CommercialLanguageApi.md#commerciallanguagecountget) | **GET** /commercialLanguage/count | count commercialLanguage
*CommercialLanguageApi* | [**commercialLanguageGet**](docs/Api/CommercialLanguageApi.md#commerciallanguageget) | **GET** /commercialLanguage | query commercialLanguage
*CommercialLanguageApi* | [**commercialLanguageIdIdGet**](docs/Api/CommercialLanguageApi.md#commerciallanguageididget) | **GET** /commercialLanguage/id/{id} | query a specific commercialLanguage
*CompanySizeApi* | [**companySizeCountGet**](docs/Api/CompanySizeApi.md#companysizecountget) | **GET** /companySize/count | count companySize
*CompanySizeApi* | [**companySizeGet**](docs/Api/CompanySizeApi.md#companysizeget) | **GET** /companySize | query companySize
*CompanySizeApi* | [**companySizeIdIdDelete**](docs/Api/CompanySizeApi.md#companysizeididdelete) | **DELETE** /companySize/id/{id} | delete a companySize
*CompanySizeApi* | [**companySizeIdIdGet**](docs/Api/CompanySizeApi.md#companysizeididget) | **GET** /companySize/id/{id} | query a specific companySize
*CompanySizeApi* | [**companySizeIdIdPut**](docs/Api/CompanySizeApi.md#companysizeididput) | **PUT** /companySize/id/{id} | update a companySize
*CompanySizeApi* | [**companySizePost**](docs/Api/CompanySizeApi.md#companysizepost) | **POST** /companySize | create a companySize
*ContactApi* | [**contactCountGet**](docs/Api/ContactApi.md#contactcountget) | **GET** /contact/count | count contact
*ContactApi* | [**contactGet**](docs/Api/ContactApi.md#contactget) | **GET** /contact | query contact
*ContactApi* | [**contactIdIdDelete**](docs/Api/ContactApi.md#contactididdelete) | **DELETE** /contact/id/{id} | delete a contact
*ContactApi* | [**contactIdIdDownloadImageGet**](docs/Api/ContactApi.md#contactididdownloadimageget) | **GET** /contact/id/{id}/downloadImage | 
*ContactApi* | [**contactIdIdGet**](docs/Api/ContactApi.md#contactididget) | **GET** /contact/id/{id} | query a specific contact
*ContactApi* | [**contactIdIdPut**](docs/Api/ContactApi.md#contactididput) | **PUT** /contact/id/{id} | update a contact
*ContactApi* | [**contactIdIdUploadImagePost**](docs/Api/ContactApi.md#contactididuploadimagepost) | **POST** /contact/id/{id}/uploadImage | 
*ContactApi* | [**contactPost**](docs/Api/ContactApi.md#contactpost) | **POST** /contact | create a contact
*ContractApi* | [**contractCountGet**](docs/Api/ContractApi.md#contractcountget) | **GET** /contract/count | count contract
*ContractApi* | [**contractGet**](docs/Api/ContractApi.md#contractget) | **GET** /contract | query contract
*ContractApi* | [**contractIdIdCreateContractDocumentPost**](docs/Api/ContractApi.md#contractididcreatecontractdocumentpost) | **POST** /contract/id/{id}/createContractDocument | 
*ContractApi* | [**contractIdIdDelete**](docs/Api/ContractApi.md#contractididdelete) | **DELETE** /contract/id/{id} | delete a contract
*ContractApi* | [**contractIdIdDownloadLatestContractDocumentPdfGet**](docs/Api/ContractApi.md#contractididdownloadlatestcontractdocumentpdfget) | **GET** /contract/id/{id}/downloadLatestContractDocumentPdf | 
*ContractApi* | [**contractIdIdGet**](docs/Api/ContractApi.md#contractididget) | **GET** /contract/id/{id} | query a specific contract
*ContractApi* | [**contractIdIdPut**](docs/Api/ContractApi.md#contractididput) | **PUT** /contract/id/{id} | update a contract
*ContractApi* | [**contractPost**](docs/Api/ContractApi.md#contractpost) | **POST** /contract | create a contract
*ContractAuthorizationUnitApi* | [**contractAuthorizationUnitCountGet**](docs/Api/ContractAuthorizationUnitApi.md#contractauthorizationunitcountget) | **GET** /contractAuthorizationUnit/count | count contractAuthorizationUnit
*ContractAuthorizationUnitApi* | [**contractAuthorizationUnitGet**](docs/Api/ContractAuthorizationUnitApi.md#contractauthorizationunitget) | **GET** /contractAuthorizationUnit | query contractAuthorizationUnit
*ContractAuthorizationUnitApi* | [**contractAuthorizationUnitIdIdGet**](docs/Api/ContractAuthorizationUnitApi.md#contractauthorizationunitididget) | **GET** /contractAuthorizationUnit/id/{id} | query a specific contractAuthorizationUnit
*ContractBillingGroupApi* | [**contractBillingGroupCountGet**](docs/Api/ContractBillingGroupApi.md#contractbillinggroupcountget) | **GET** /contractBillingGroup/count | count contractBillingGroup
*ContractBillingGroupApi* | [**contractBillingGroupGet**](docs/Api/ContractBillingGroupApi.md#contractbillinggroupget) | **GET** /contractBillingGroup | query contractBillingGroup
*ContractBillingGroupApi* | [**contractBillingGroupIdIdDelete**](docs/Api/ContractBillingGroupApi.md#contractbillinggroupididdelete) | **DELETE** /contractBillingGroup/id/{id} | delete a contractBillingGroup
*ContractBillingGroupApi* | [**contractBillingGroupIdIdGet**](docs/Api/ContractBillingGroupApi.md#contractbillinggroupididget) | **GET** /contractBillingGroup/id/{id} | query a specific contractBillingGroup
*ContractBillingGroupApi* | [**contractBillingGroupIdIdPut**](docs/Api/ContractBillingGroupApi.md#contractbillinggroupididput) | **PUT** /contractBillingGroup/id/{id} | update a contractBillingGroup
*ContractBillingGroupApi* | [**contractBillingGroupPost**](docs/Api/ContractBillingGroupApi.md#contractbillinggrouppost) | **POST** /contractBillingGroup | create a contractBillingGroup
*ContractTerminationReasonApi* | [**contractTerminationReasonCountGet**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasoncountget) | **GET** /contractTerminationReason/count | count contractTerminationReason
*ContractTerminationReasonApi* | [**contractTerminationReasonGet**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasonget) | **GET** /contractTerminationReason | query contractTerminationReason
*ContractTerminationReasonApi* | [**contractTerminationReasonIdIdDelete**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasonididdelete) | **DELETE** /contractTerminationReason/id/{id} | delete a contractTerminationReason
*ContractTerminationReasonApi* | [**contractTerminationReasonIdIdGet**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasonididget) | **GET** /contractTerminationReason/id/{id} | query a specific contractTerminationReason
*ContractTerminationReasonApi* | [**contractTerminationReasonIdIdPut**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasonididput) | **PUT** /contractTerminationReason/id/{id} | update a contractTerminationReason
*ContractTerminationReasonApi* | [**contractTerminationReasonPost**](docs/Api/ContractTerminationReasonApi.md#contractterminationreasonpost) | **POST** /contractTerminationReason | create a contractTerminationReason
*CostCenterApi* | [**costCenterCountGet**](docs/Api/CostCenterApi.md#costcentercountget) | **GET** /costCenter/count | count costCenter
*CostCenterApi* | [**costCenterGet**](docs/Api/CostCenterApi.md#costcenterget) | **GET** /costCenter | query costCenter
*CostCenterApi* | [**costCenterIdIdDelete**](docs/Api/CostCenterApi.md#costcenterididdelete) | **DELETE** /costCenter/id/{id} | delete a costCenter
*CostCenterApi* | [**costCenterIdIdGet**](docs/Api/CostCenterApi.md#costcenterididget) | **GET** /costCenter/id/{id} | query a specific costCenter
*CostCenterApi* | [**costCenterIdIdPut**](docs/Api/CostCenterApi.md#costcenterididput) | **PUT** /costCenter/id/{id} | update a costCenter
*CostCenterApi* | [**costCenterPost**](docs/Api/CostCenterApi.md#costcenterpost) | **POST** /costCenter | create a costCenter
*CostCenterGroupApi* | [**costCenterGroupCountGet**](docs/Api/CostCenterGroupApi.md#costcentergroupcountget) | **GET** /costCenterGroup/count | count costCenterGroup
*CostCenterGroupApi* | [**costCenterGroupGet**](docs/Api/CostCenterGroupApi.md#costcentergroupget) | **GET** /costCenterGroup | query costCenterGroup
*CostCenterGroupApi* | [**costCenterGroupIdIdDelete**](docs/Api/CostCenterGroupApi.md#costcentergroupididdelete) | **DELETE** /costCenterGroup/id/{id} | delete a costCenterGroup
*CostCenterGroupApi* | [**costCenterGroupIdIdGet**](docs/Api/CostCenterGroupApi.md#costcentergroupididget) | **GET** /costCenterGroup/id/{id} | query a specific costCenterGroup
*CostCenterGroupApi* | [**costCenterGroupIdIdPut**](docs/Api/CostCenterGroupApi.md#costcentergroupididput) | **PUT** /costCenterGroup/id/{id} | update a costCenterGroup
*CostCenterGroupApi* | [**costCenterGroupPost**](docs/Api/CostCenterGroupApi.md#costcentergrouppost) | **POST** /costCenterGroup | create a costCenterGroup
*CostTypeApi* | [**costTypeCountGet**](docs/Api/CostTypeApi.md#costtypecountget) | **GET** /costType/count | count costType
*CostTypeApi* | [**costTypeGet**](docs/Api/CostTypeApi.md#costtypeget) | **GET** /costType | query costType
*CostTypeApi* | [**costTypeIdIdDelete**](docs/Api/CostTypeApi.md#costtypeididdelete) | **DELETE** /costType/id/{id} | delete a costType
*CostTypeApi* | [**costTypeIdIdGet**](docs/Api/CostTypeApi.md#costtypeididget) | **GET** /costType/id/{id} | query a specific costType
*CostTypeApi* | [**costTypeIdIdPut**](docs/Api/CostTypeApi.md#costtypeididput) | **PUT** /costType/id/{id} | update a costType
*CostTypeApi* | [**costTypePost**](docs/Api/CostTypeApi.md#costtypepost) | **POST** /costType | create a costType
*CrmCallCategoryApi* | [**crmCallCategoryCountGet**](docs/Api/CrmCallCategoryApi.md#crmcallcategorycountget) | **GET** /crmCallCategory/count | count crmCallCategory
*CrmCallCategoryApi* | [**crmCallCategoryGet**](docs/Api/CrmCallCategoryApi.md#crmcallcategoryget) | **GET** /crmCallCategory | query crmCallCategory
*CrmCallCategoryApi* | [**crmCallCategoryIdIdDelete**](docs/Api/CrmCallCategoryApi.md#crmcallcategoryididdelete) | **DELETE** /crmCallCategory/id/{id} | delete a crmCallCategory
*CrmCallCategoryApi* | [**crmCallCategoryIdIdGet**](docs/Api/CrmCallCategoryApi.md#crmcallcategoryididget) | **GET** /crmCallCategory/id/{id} | query a specific crmCallCategory
*CrmCallCategoryApi* | [**crmCallCategoryIdIdPut**](docs/Api/CrmCallCategoryApi.md#crmcallcategoryididput) | **PUT** /crmCallCategory/id/{id} | update a crmCallCategory
*CrmCallCategoryApi* | [**crmCallCategoryPost**](docs/Api/CrmCallCategoryApi.md#crmcallcategorypost) | **POST** /crmCallCategory | create a crmCallCategory
*CrmEventApi* | [**crmEventCountGet**](docs/Api/CrmEventApi.md#crmeventcountget) | **GET** /crmEvent/count | count crmEvent
*CrmEventApi* | [**crmEventGet**](docs/Api/CrmEventApi.md#crmeventget) | **GET** /crmEvent | query crmEvent
*CrmEventApi* | [**crmEventIdIdDelete**](docs/Api/CrmEventApi.md#crmeventididdelete) | **DELETE** /crmEvent/id/{id} | delete a crmEvent
*CrmEventApi* | [**crmEventIdIdGet**](docs/Api/CrmEventApi.md#crmeventididget) | **GET** /crmEvent/id/{id} | query a specific crmEvent
*CrmEventApi* | [**crmEventIdIdPut**](docs/Api/CrmEventApi.md#crmeventididput) | **PUT** /crmEvent/id/{id} | update a crmEvent
*CrmEventApi* | [**crmEventPost**](docs/Api/CrmEventApi.md#crmeventpost) | **POST** /crmEvent | create a crmEvent
*CrmEventCategoryApi* | [**crmEventCategoryCountGet**](docs/Api/CrmEventCategoryApi.md#crmeventcategorycountget) | **GET** /crmEventCategory/count | count crmEventCategory
*CrmEventCategoryApi* | [**crmEventCategoryGet**](docs/Api/CrmEventCategoryApi.md#crmeventcategoryget) | **GET** /crmEventCategory | query crmEventCategory
*CrmEventCategoryApi* | [**crmEventCategoryIdIdDelete**](docs/Api/CrmEventCategoryApi.md#crmeventcategoryididdelete) | **DELETE** /crmEventCategory/id/{id} | delete a crmEventCategory
*CrmEventCategoryApi* | [**crmEventCategoryIdIdGet**](docs/Api/CrmEventCategoryApi.md#crmeventcategoryididget) | **GET** /crmEventCategory/id/{id} | query a specific crmEventCategory
*CrmEventCategoryApi* | [**crmEventCategoryIdIdPut**](docs/Api/CrmEventCategoryApi.md#crmeventcategoryididput) | **PUT** /crmEventCategory/id/{id} | update a crmEventCategory
*CrmEventCategoryApi* | [**crmEventCategoryPost**](docs/Api/CrmEventCategoryApi.md#crmeventcategorypost) | **POST** /crmEventCategory | create a crmEventCategory
*CurrencyApi* | [**currencyCompanyCurrencyGet**](docs/Api/CurrencyApi.md#currencycompanycurrencyget) | **GET** /currency/companyCurrency | 
*CurrencyApi* | [**currencyCountGet**](docs/Api/CurrencyApi.md#currencycountget) | **GET** /currency/count | count currency
*CurrencyApi* | [**currencyGet**](docs/Api/CurrencyApi.md#currencyget) | **GET** /currency | query currency
*CurrencyApi* | [**currencyIdIdDelete**](docs/Api/CurrencyApi.md#currencyididdelete) | **DELETE** /currency/id/{id} | delete a currency
*CurrencyApi* | [**currencyIdIdGet**](docs/Api/CurrencyApi.md#currencyididget) | **GET** /currency/id/{id} | query a specific currency
*CurrencyApi* | [**currencyIdIdPut**](docs/Api/CurrencyApi.md#currencyididput) | **PUT** /currency/id/{id} | update a currency
*CurrencyApi* | [**currencyPost**](docs/Api/CurrencyApi.md#currencypost) | **POST** /currency | create a currency
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionCountGet**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitioncountget) | **GET** /customAttributeDefinition/count | count customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionGet**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionget) | **GET** /customAttributeDefinition | query customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionIdIdDelete**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionididdelete) | **DELETE** /customAttributeDefinition/id/{id} | delete a customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionIdIdGet**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionididget) | **GET** /customAttributeDefinition/id/{id} | query a specific customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionIdIdPut**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionididput) | **PUT** /customAttributeDefinition/id/{id} | update a customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionPost**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionpost) | **POST** /customAttributeDefinition | create a customAttributeDefinition
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionReadOrderGet**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionreadorderget) | **GET** /customAttributeDefinition/readOrder | 
*CustomAttributeDefinitionApi* | [**customAttributeDefinitionUpdateOrderPost**](docs/Api/CustomAttributeDefinitionApi.md#customattributedefinitionupdateorderpost) | **POST** /customAttributeDefinition/updateOrder | 
*CustomerApi* | [**customerCountGet**](docs/Api/CustomerApi.md#customercountget) | **GET** /customer/count | count customer
*CustomerApi* | [**customerGet**](docs/Api/CustomerApi.md#customerget) | **GET** /customer | query customer
*CustomerApi* | [**customerIdIdDelete**](docs/Api/CustomerApi.md#customerididdelete) | **DELETE** /customer/id/{id} | delete a customer
*CustomerApi* | [**customerIdIdDownloadImageGet**](docs/Api/CustomerApi.md#customerididdownloadimageget) | **GET** /customer/id/{id}/downloadImage | 
*CustomerApi* | [**customerIdIdGet**](docs/Api/CustomerApi.md#customerididget) | **GET** /customer/id/{id} | query a specific customer
*CustomerApi* | [**customerIdIdPut**](docs/Api/CustomerApi.md#customerididput) | **PUT** /customer/id/{id} | update a customer
*CustomerApi* | [**customerIdIdUploadImagePost**](docs/Api/CustomerApi.md#customerididuploadimagepost) | **POST** /customer/id/{id}/uploadImage | 
*CustomerApi* | [**customerPost**](docs/Api/CustomerApi.md#customerpost) | **POST** /customer | create a customer
*CustomerCategoryApi* | [**customerCategoryCountGet**](docs/Api/CustomerCategoryApi.md#customercategorycountget) | **GET** /customerCategory/count | count customerCategory
*CustomerCategoryApi* | [**customerCategoryGet**](docs/Api/CustomerCategoryApi.md#customercategoryget) | **GET** /customerCategory | query customerCategory
*CustomerCategoryApi* | [**customerCategoryIdIdDelete**](docs/Api/CustomerCategoryApi.md#customercategoryididdelete) | **DELETE** /customerCategory/id/{id} | delete a customerCategory
*CustomerCategoryApi* | [**customerCategoryIdIdGet**](docs/Api/CustomerCategoryApi.md#customercategoryididget) | **GET** /customerCategory/id/{id} | query a specific customerCategory
*CustomerCategoryApi* | [**customerCategoryIdIdPut**](docs/Api/CustomerCategoryApi.md#customercategoryididput) | **PUT** /customerCategory/id/{id} | update a customerCategory
*CustomerCategoryApi* | [**customerCategoryPost**](docs/Api/CustomerCategoryApi.md#customercategorypost) | **POST** /customerCategory | create a customerCategory
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonCountGet**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasoncountget) | **GET** /customerLeadLossReason/count | count customerLeadLossReason
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonGet**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasonget) | **GET** /customerLeadLossReason | query customerLeadLossReason
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonIdIdDelete**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasonididdelete) | **DELETE** /customerLeadLossReason/id/{id} | delete a customerLeadLossReason
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonIdIdGet**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasonididget) | **GET** /customerLeadLossReason/id/{id} | query a specific customerLeadLossReason
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonIdIdPut**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasonididput) | **PUT** /customerLeadLossReason/id/{id} | update a customerLeadLossReason
*CustomerLeadLossReasonApi* | [**customerLeadLossReasonPost**](docs/Api/CustomerLeadLossReasonApi.md#customerleadlossreasonpost) | **POST** /customerLeadLossReason | create a customerLeadLossReason
*CustomerTopicApi* | [**customerTopicCountGet**](docs/Api/CustomerTopicApi.md#customertopiccountget) | **GET** /customerTopic/count | count customerTopic
*CustomerTopicApi* | [**customerTopicGet**](docs/Api/CustomerTopicApi.md#customertopicget) | **GET** /customerTopic | query customerTopic
*CustomerTopicApi* | [**customerTopicIdIdDelete**](docs/Api/CustomerTopicApi.md#customertopicididdelete) | **DELETE** /customerTopic/id/{id} | delete a customerTopic
*CustomerTopicApi* | [**customerTopicIdIdGet**](docs/Api/CustomerTopicApi.md#customertopicididget) | **GET** /customerTopic/id/{id} | query a specific customerTopic
*CustomerTopicApi* | [**customerTopicIdIdPut**](docs/Api/CustomerTopicApi.md#customertopicididput) | **PUT** /customerTopic/id/{id} | update a customerTopic
*CustomerTopicApi* | [**customerTopicPost**](docs/Api/CustomerTopicApi.md#customertopicpost) | **POST** /customerTopic | create a customerTopic
*CustomsTariffNumberApi* | [**customsTariffNumberCountGet**](docs/Api/CustomsTariffNumberApi.md#customstariffnumbercountget) | **GET** /customsTariffNumber/count | count customsTariffNumber
*CustomsTariffNumberApi* | [**customsTariffNumberGet**](docs/Api/CustomsTariffNumberApi.md#customstariffnumberget) | **GET** /customsTariffNumber | query customsTariffNumber
*CustomsTariffNumberApi* | [**customsTariffNumberIdIdDelete**](docs/Api/CustomsTariffNumberApi.md#customstariffnumberididdelete) | **DELETE** /customsTariffNumber/id/{id} | delete a customsTariffNumber
*CustomsTariffNumberApi* | [**customsTariffNumberIdIdGet**](docs/Api/CustomsTariffNumberApi.md#customstariffnumberididget) | **GET** /customsTariffNumber/id/{id} | query a specific customsTariffNumber
*CustomsTariffNumberApi* | [**customsTariffNumberIdIdPut**](docs/Api/CustomsTariffNumberApi.md#customstariffnumberididput) | **PUT** /customsTariffNumber/id/{id} | update a customsTariffNumber
*CustomsTariffNumberApi* | [**customsTariffNumberPost**](docs/Api/CustomsTariffNumberApi.md#customstariffnumberpost) | **POST** /customsTariffNumber | create a customsTariffNumber
*DocumentApi* | [**documentCopyPost**](docs/Api/DocumentApi.md#documentcopypost) | **POST** /document/copy | 
*DocumentApi* | [**documentCountGet**](docs/Api/DocumentApi.md#documentcountget) | **GET** /document/count | count document
*DocumentApi* | [**documentGet**](docs/Api/DocumentApi.md#documentget) | **GET** /document | query document
*DocumentApi* | [**documentIdIdCopyPost**](docs/Api/DocumentApi.md#documentididcopypost) | **POST** /document/id/{id}/copy | 
*DocumentApi* | [**documentIdIdDelete**](docs/Api/DocumentApi.md#documentididdelete) | **DELETE** /document/id/{id} | delete a document
*DocumentApi* | [**documentIdIdDownloadDocumentVersionGet**](docs/Api/DocumentApi.md#documentididdownloaddocumentversionget) | **GET** /document/id/{id}/downloadDocumentVersion | 
*DocumentApi* | [**documentIdIdDownloadDocumentVersionsZippedGet**](docs/Api/DocumentApi.md#documentididdownloaddocumentversionszippedget) | **GET** /document/id/{id}/downloadDocumentVersionsZipped | 
*DocumentApi* | [**documentIdIdDownloadGet**](docs/Api/DocumentApi.md#documentididdownloadget) | **GET** /document/id/{id}/download | 
*DocumentApi* | [**documentIdIdGet**](docs/Api/DocumentApi.md#documentididget) | **GET** /document/id/{id} | query a specific document
*DocumentApi* | [**documentIdIdPut**](docs/Api/DocumentApi.md#documentididput) | **PUT** /document/id/{id} | update a document
*DocumentApi* | [**documentIdIdUploadPost**](docs/Api/DocumentApi.md#documentididuploadpost) | **POST** /document/id/{id}/upload | 
*DocumentApi* | [**documentUploadPost**](docs/Api/DocumentApi.md#documentuploadpost) | **POST** /document/upload | 
*ExternalConnectionApi* | [**externalConnectionCountGet**](docs/Api/ExternalConnectionApi.md#externalconnectioncountget) | **GET** /externalConnection/count | count externalConnection
*ExternalConnectionApi* | [**externalConnectionGet**](docs/Api/ExternalConnectionApi.md#externalconnectionget) | **GET** /externalConnection | query externalConnection
*ExternalConnectionApi* | [**externalConnectionIdIdGet**](docs/Api/ExternalConnectionApi.md#externalconnectionididget) | **GET** /externalConnection/id/{id} | query a specific externalConnection
*FinancialYearApi* | [**financialYearCountGet**](docs/Api/FinancialYearApi.md#financialyearcountget) | **GET** /financialYear/count | count financialYear
*FinancialYearApi* | [**financialYearGet**](docs/Api/FinancialYearApi.md#financialyearget) | **GET** /financialYear | query financialYear
*FinancialYearApi* | [**financialYearIdIdDelete**](docs/Api/FinancialYearApi.md#financialyearididdelete) | **DELETE** /financialYear/id/{id} | delete a financialYear
*FinancialYearApi* | [**financialYearIdIdGeneratePeriodsPost**](docs/Api/FinancialYearApi.md#financialyearididgenerateperiodspost) | **POST** /financialYear/id/{id}/generatePeriods | 
*FinancialYearApi* | [**financialYearIdIdGet**](docs/Api/FinancialYearApi.md#financialyearididget) | **GET** /financialYear/id/{id} | query a specific financialYear
*FinancialYearApi* | [**financialYearIdIdPut**](docs/Api/FinancialYearApi.md#financialyearididput) | **PUT** /financialYear/id/{id} | update a financialYear
*FinancialYearApi* | [**financialYearPost**](docs/Api/FinancialYearApi.md#financialyearpost) | **POST** /financialYear | create a financialYear
*FulfillmentProviderApi* | [**fulfillmentProviderCountGet**](docs/Api/FulfillmentProviderApi.md#fulfillmentprovidercountget) | **GET** /fulfillmentProvider/count | count fulfillmentProvider
*FulfillmentProviderApi* | [**fulfillmentProviderGet**](docs/Api/FulfillmentProviderApi.md#fulfillmentproviderget) | **GET** /fulfillmentProvider | query fulfillmentProvider
*FulfillmentProviderApi* | [**fulfillmentProviderIdIdGet**](docs/Api/FulfillmentProviderApi.md#fulfillmentproviderididget) | **GET** /fulfillmentProvider/id/{id} | query a specific fulfillmentProvider
*IncomingGoodsApi* | [**incomingGoodsCountGet**](docs/Api/IncomingGoodsApi.md#incominggoodscountget) | **GET** /incomingGoods/count | count incomingGoods
*IncomingGoodsApi* | [**incomingGoodsGet**](docs/Api/IncomingGoodsApi.md#incominggoodsget) | **GET** /incomingGoods | query incomingGoods
*IncomingGoodsApi* | [**incomingGoodsIdIdAddPurchaseOrdersPost**](docs/Api/IncomingGoodsApi.md#incominggoodsididaddpurchaseorderspost) | **POST** /incomingGoods/id/{id}/addPurchaseOrders | 
*IncomingGoodsApi* | [**incomingGoodsIdIdCreateCompensationShipmentPost**](docs/Api/IncomingGoodsApi.md#incominggoodsididcreatecompensationshipmentpost) | **POST** /incomingGoods/id/{id}/createCompensationShipment | 
*IncomingGoodsApi* | [**incomingGoodsIdIdCreateCreditNotePost**](docs/Api/IncomingGoodsApi.md#incominggoodsididcreatecreditnotepost) | **POST** /incomingGoods/id/{id}/createCreditNote | 
*IncomingGoodsApi* | [**incomingGoodsIdIdCreatePurchaseInvoicePost**](docs/Api/IncomingGoodsApi.md#incominggoodsididcreatepurchaseinvoicepost) | **POST** /incomingGoods/id/{id}/createPurchaseInvoice | 
*IncomingGoodsApi* | [**incomingGoodsIdIdCreateReturnLabelsPost**](docs/Api/IncomingGoodsApi.md#incominggoodsididcreatereturnlabelspost) | **POST** /incomingGoods/id/{id}/createReturnLabels | 
*IncomingGoodsApi* | [**incomingGoodsIdIdCreateSupplierReturnPost**](docs/Api/IncomingGoodsApi.md#incominggoodsididcreatesupplierreturnpost) | **POST** /incomingGoods/id/{id}/createSupplierReturn | 
*IncomingGoodsApi* | [**incomingGoodsIdIdDelete**](docs/Api/IncomingGoodsApi.md#incominggoodsididdelete) | **DELETE** /incomingGoods/id/{id} | delete a incomingGoods
*IncomingGoodsApi* | [**incomingGoodsIdIdGet**](docs/Api/IncomingGoodsApi.md#incominggoodsididget) | **GET** /incomingGoods/id/{id} | query a specific incomingGoods
*IncomingGoodsApi* | [**incomingGoodsIdIdIncomingBookingsGet**](docs/Api/IncomingGoodsApi.md#incominggoodsididincomingbookingsget) | **GET** /incomingGoods/id/{id}/incomingBookings | 
*IncomingGoodsApi* | [**incomingGoodsIdIdPut**](docs/Api/IncomingGoodsApi.md#incominggoodsididput) | **PUT** /incomingGoods/id/{id} | update a incomingGoods
*IncomingGoodsApi* | [**incomingGoodsIdIdUpdateIncomingBookingsPost**](docs/Api/IncomingGoodsApi.md#incominggoodsididupdateincomingbookingspost) | **POST** /incomingGoods/id/{id}/updateIncomingBookings | 
*IncomingGoodsApi* | [**incomingGoodsPost**](docs/Api/IncomingGoodsApi.md#incominggoodspost) | **POST** /incomingGoods | create a incomingGoods
*InternalTransportReferenceApi* | [**internalTransportReferenceCountGet**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferencecountget) | **GET** /internalTransportReference/count | count internalTransportReference
*InternalTransportReferenceApi* | [**internalTransportReferenceGet**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceget) | **GET** /internalTransportReference | query internalTransportReference
*InternalTransportReferenceApi* | [**internalTransportReferenceIdIdCreateLabelPost**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceididcreatelabelpost) | **POST** /internalTransportReference/id/{id}/createLabel | 
*InternalTransportReferenceApi* | [**internalTransportReferenceIdIdDelete**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceididdelete) | **DELETE** /internalTransportReference/id/{id} | delete a internalTransportReference
*InternalTransportReferenceApi* | [**internalTransportReferenceIdIdDownloadLatestLabelGet**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceididdownloadlatestlabelget) | **GET** /internalTransportReference/id/{id}/downloadLatestLabel | 
*InternalTransportReferenceApi* | [**internalTransportReferenceIdIdGet**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceididget) | **GET** /internalTransportReference/id/{id} | query a specific internalTransportReference
*InternalTransportReferenceApi* | [**internalTransportReferenceIdIdPut**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferenceididput) | **PUT** /internalTransportReference/id/{id} | update a internalTransportReference
*InternalTransportReferenceApi* | [**internalTransportReferencePost**](docs/Api/InternalTransportReferenceApi.md#internaltransportreferencepost) | **POST** /internalTransportReference | create a internalTransportReference
*InventoryApi* | [**inventoryCountGet**](docs/Api/InventoryApi.md#inventorycountget) | **GET** /inventory/count | count inventory
*InventoryApi* | [**inventoryCreatePost**](docs/Api/InventoryApi.md#inventorycreatepost) | **POST** /inventory/create | 
*InventoryApi* | [**inventoryGet**](docs/Api/InventoryApi.md#inventoryget) | **GET** /inventory | query inventory
*InventoryApi* | [**inventoryIdIdGet**](docs/Api/InventoryApi.md#inventoryididget) | **GET** /inventory/id/{id} | query a specific inventory
*InventoryApi* | [**inventoryIdIdPut**](docs/Api/InventoryApi.md#inventoryididput) | **PUT** /inventory/id/{id} | update a inventory
*InventoryApi* | [**inventoryPost**](docs/Api/InventoryApi.md#inventorypost) | **POST** /inventory | create a inventory
*InventoryGroupApi* | [**inventoryGroupCountGet**](docs/Api/InventoryGroupApi.md#inventorygroupcountget) | **GET** /inventoryGroup/count | count inventoryGroup
*InventoryGroupApi* | [**inventoryGroupGet**](docs/Api/InventoryGroupApi.md#inventorygroupget) | **GET** /inventoryGroup | query inventoryGroup
*InventoryGroupApi* | [**inventoryGroupIdIdGet**](docs/Api/InventoryGroupApi.md#inventorygroupididget) | **GET** /inventoryGroup/id/{id} | query a specific inventoryGroup
*InventoryItemApi* | [**inventoryItemCountGet**](docs/Api/InventoryItemApi.md#inventoryitemcountget) | **GET** /inventoryItem/count | count inventoryItem
*InventoryItemApi* | [**inventoryItemGet**](docs/Api/InventoryItemApi.md#inventoryitemget) | **GET** /inventoryItem | query inventoryItem
*InventoryItemApi* | [**inventoryItemIdIdDelete**](docs/Api/InventoryItemApi.md#inventoryitemididdelete) | **DELETE** /inventoryItem/id/{id} | delete a inventoryItem
*InventoryItemApi* | [**inventoryItemIdIdGet**](docs/Api/InventoryItemApi.md#inventoryitemididget) | **GET** /inventoryItem/id/{id} | query a specific inventoryItem
*InventoryItemApi* | [**inventoryItemIdIdPut**](docs/Api/InventoryItemApi.md#inventoryitemididput) | **PUT** /inventoryItem/id/{id} | update a inventoryItem
*InventoryItemApi* | [**inventoryItemPost**](docs/Api/InventoryItemApi.md#inventoryitempost) | **POST** /inventoryItem | create a inventoryItem
*InventoryTransportReferenceApi* | [**inventoryTransportReferenceCountGet**](docs/Api/InventoryTransportReferenceApi.md#inventorytransportreferencecountget) | **GET** /inventoryTransportReference/count | count inventoryTransportReference
*InventoryTransportReferenceApi* | [**inventoryTransportReferenceGet**](docs/Api/InventoryTransportReferenceApi.md#inventorytransportreferenceget) | **GET** /inventoryTransportReference | query inventoryTransportReference
*InventoryTransportReferenceApi* | [**inventoryTransportReferenceIdIdGet**](docs/Api/InventoryTransportReferenceApi.md#inventorytransportreferenceididget) | **GET** /inventoryTransportReference/id/{id} | query a specific inventoryTransportReference
*InventoryTransportReferenceApi* | [**inventoryTransportReferenceIdIdPut**](docs/Api/InventoryTransportReferenceApi.md#inventorytransportreferenceididput) | **PUT** /inventoryTransportReference/id/{id} | update a inventoryTransportReference
*InventoryTransportReferenceApi* | [**inventoryTransportReferencePost**](docs/Api/InventoryTransportReferenceApi.md#inventorytransportreferencepost) | **POST** /inventoryTransportReference | create a inventoryTransportReference
*JobApi* | [**jobAbortGet**](docs/Api/JobApi.md#jobabortget) | **GET** /job/abort | 
*JobApi* | [**jobStatusGet**](docs/Api/JobApi.md#jobstatusget) | **GET** /job/status | 
*LeadApi* | [**leadCountGet**](docs/Api/LeadApi.md#leadcountget) | **GET** /lead/count | count lead
*LeadApi* | [**leadGet**](docs/Api/LeadApi.md#leadget) | **GET** /lead | query lead
*LeadApi* | [**leadIdIdConvertLeadToCustomerGet**](docs/Api/LeadApi.md#leadididconvertleadtocustomerget) | **GET** /lead/id/{id}/convertLeadToCustomer | 
*LeadApi* | [**leadIdIdDelete**](docs/Api/LeadApi.md#leadididdelete) | **DELETE** /lead/id/{id} | delete a lead
*LeadApi* | [**leadIdIdDownloadImageGet**](docs/Api/LeadApi.md#leadididdownloadimageget) | **GET** /lead/id/{id}/downloadImage | 
*LeadApi* | [**leadIdIdGet**](docs/Api/LeadApi.md#leadididget) | **GET** /lead/id/{id} | query a specific lead
*LeadApi* | [**leadIdIdPut**](docs/Api/LeadApi.md#leadididput) | **PUT** /lead/id/{id} | update a lead
*LeadApi* | [**leadIdIdUploadImagePost**](docs/Api/LeadApi.md#leadididuploadimagepost) | **POST** /lead/id/{id}/uploadImage | 
*LeadApi* | [**leadPost**](docs/Api/LeadApi.md#leadpost) | **POST** /lead | create a lead
*LeadRatingApi* | [**leadRatingCountGet**](docs/Api/LeadRatingApi.md#leadratingcountget) | **GET** /leadRating/count | count leadRating
*LeadRatingApi* | [**leadRatingGet**](docs/Api/LeadRatingApi.md#leadratingget) | **GET** /leadRating | query leadRating
*LeadRatingApi* | [**leadRatingIdIdDelete**](docs/Api/LeadRatingApi.md#leadratingididdelete) | **DELETE** /leadRating/id/{id} | delete a leadRating
*LeadRatingApi* | [**leadRatingIdIdGet**](docs/Api/LeadRatingApi.md#leadratingididget) | **GET** /leadRating/id/{id} | query a specific leadRating
*LeadRatingApi* | [**leadRatingIdIdPut**](docs/Api/LeadRatingApi.md#leadratingididput) | **PUT** /leadRating/id/{id} | update a leadRating
*LeadRatingApi* | [**leadRatingPost**](docs/Api/LeadRatingApi.md#leadratingpost) | **POST** /leadRating | create a leadRating
*LeadSourceApi* | [**leadSourceCountGet**](docs/Api/LeadSourceApi.md#leadsourcecountget) | **GET** /leadSource/count | count leadSource
*LeadSourceApi* | [**leadSourceGet**](docs/Api/LeadSourceApi.md#leadsourceget) | **GET** /leadSource | query leadSource
*LeadSourceApi* | [**leadSourceIdIdDelete**](docs/Api/LeadSourceApi.md#leadsourceididdelete) | **DELETE** /leadSource/id/{id} | delete a leadSource
*LeadSourceApi* | [**leadSourceIdIdGet**](docs/Api/LeadSourceApi.md#leadsourceididget) | **GET** /leadSource/id/{id} | query a specific leadSource
*LeadSourceApi* | [**leadSourceIdIdPut**](docs/Api/LeadSourceApi.md#leadsourceididput) | **PUT** /leadSource/id/{id} | update a leadSource
*LeadSourceApi* | [**leadSourcePost**](docs/Api/LeadSourceApi.md#leadsourcepost) | **POST** /leadSource | create a leadSource
*LedgerAccountApi* | [**ledgerAccountCountGet**](docs/Api/LedgerAccountApi.md#ledgeraccountcountget) | **GET** /ledgerAccount/count | count ledgerAccount
*LedgerAccountApi* | [**ledgerAccountGet**](docs/Api/LedgerAccountApi.md#ledgeraccountget) | **GET** /ledgerAccount | query ledgerAccount
*LedgerAccountApi* | [**ledgerAccountIdIdDelete**](docs/Api/LedgerAccountApi.md#ledgeraccountididdelete) | **DELETE** /ledgerAccount/id/{id} | delete a ledgerAccount
*LedgerAccountApi* | [**ledgerAccountIdIdGet**](docs/Api/LedgerAccountApi.md#ledgeraccountididget) | **GET** /ledgerAccount/id/{id} | query a specific ledgerAccount
*LedgerAccountApi* | [**ledgerAccountIdIdPut**](docs/Api/LedgerAccountApi.md#ledgeraccountididput) | **PUT** /ledgerAccount/id/{id} | update a ledgerAccount
*LedgerAccountApi* | [**ledgerAccountPost**](docs/Api/LedgerAccountApi.md#ledgeraccountpost) | **POST** /ledgerAccount | create a ledgerAccount
*LegalFormApi* | [**legalFormCountGet**](docs/Api/LegalFormApi.md#legalformcountget) | **GET** /legalForm/count | count legalForm
*LegalFormApi* | [**legalFormGet**](docs/Api/LegalFormApi.md#legalformget) | **GET** /legalForm | query legalForm
*LegalFormApi* | [**legalFormIdIdDelete**](docs/Api/LegalFormApi.md#legalformididdelete) | **DELETE** /legalForm/id/{id} | delete a legalForm
*LegalFormApi* | [**legalFormIdIdGet**](docs/Api/LegalFormApi.md#legalformididget) | **GET** /legalForm/id/{id} | query a specific legalForm
*LegalFormApi* | [**legalFormIdIdPut**](docs/Api/LegalFormApi.md#legalformididput) | **PUT** /legalForm/id/{id} | update a legalForm
*LegalFormApi* | [**legalFormPost**](docs/Api/LegalFormApi.md#legalformpost) | **POST** /legalForm | create a legalForm
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierCountGet**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifiercountget) | **GET** /loadingEquipmentIdentifier/count | count loadingEquipmentIdentifier
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierGet**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifierget) | **GET** /loadingEquipmentIdentifier | query loadingEquipmentIdentifier
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierIdIdDelete**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifierididdelete) | **DELETE** /loadingEquipmentIdentifier/id/{id} | delete a loadingEquipmentIdentifier
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierIdIdGet**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifierididget) | **GET** /loadingEquipmentIdentifier/id/{id} | query a specific loadingEquipmentIdentifier
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierIdIdPut**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifierididput) | **PUT** /loadingEquipmentIdentifier/id/{id} | update a loadingEquipmentIdentifier
*LoadingEquipmentIdentifierApi* | [**loadingEquipmentIdentifierPost**](docs/Api/LoadingEquipmentIdentifierApi.md#loadingequipmentidentifierpost) | **POST** /loadingEquipmentIdentifier | create a loadingEquipmentIdentifier
*MailTemplateApi* | [**mailTemplateCountGet**](docs/Api/MailTemplateApi.md#mailtemplatecountget) | **GET** /mailTemplate/count | count mailTemplate
*MailTemplateApi* | [**mailTemplateGet**](docs/Api/MailTemplateApi.md#mailtemplateget) | **GET** /mailTemplate | query mailTemplate
*MailTemplateApi* | [**mailTemplateIdIdDelete**](docs/Api/MailTemplateApi.md#mailtemplateididdelete) | **DELETE** /mailTemplate/id/{id} | delete a mailTemplate
*MailTemplateApi* | [**mailTemplateIdIdGet**](docs/Api/MailTemplateApi.md#mailtemplateididget) | **GET** /mailTemplate/id/{id} | query a specific mailTemplate
*MailTemplateApi* | [**mailTemplateIdIdPut**](docs/Api/MailTemplateApi.md#mailtemplateididput) | **PUT** /mailTemplate/id/{id} | update a mailTemplate
*MailTemplateApi* | [**mailTemplatePost**](docs/Api/MailTemplateApi.md#mailtemplatepost) | **POST** /mailTemplate | create a mailTemplate
*ManufacturerApi* | [**manufacturerCountGet**](docs/Api/ManufacturerApi.md#manufacturercountget) | **GET** /manufacturer/count | count manufacturer
*ManufacturerApi* | [**manufacturerGet**](docs/Api/ManufacturerApi.md#manufacturerget) | **GET** /manufacturer | query manufacturer
*ManufacturerApi* | [**manufacturerIdIdDelete**](docs/Api/ManufacturerApi.md#manufacturerididdelete) | **DELETE** /manufacturer/id/{id} | delete a manufacturer
*ManufacturerApi* | [**manufacturerIdIdGet**](docs/Api/ManufacturerApi.md#manufacturerididget) | **GET** /manufacturer/id/{id} | query a specific manufacturer
*ManufacturerApi* | [**manufacturerIdIdPut**](docs/Api/ManufacturerApi.md#manufacturerididput) | **PUT** /manufacturer/id/{id} | update a manufacturer
*ManufacturerApi* | [**manufacturerPost**](docs/Api/ManufacturerApi.md#manufacturerpost) | **POST** /manufacturer | create a manufacturer
*MetaApi* | [**metaQueryFilterPropertiesGet**](docs/Api/MetaApi.md#metaqueryfilterpropertiesget) | **GET** /meta/queryFilterProperties | 
*MetaApi* | [**metaQuerySortPropertiesGet**](docs/Api/MetaApi.md#metaquerysortpropertiesget) | **GET** /meta/querySortProperties | 
*MetaApi* | [**metaResourcesGet**](docs/Api/MetaApi.md#metaresourcesget) | **GET** /meta/resources | 
*NotificationApi* | [**notificationCountGet**](docs/Api/NotificationApi.md#notificationcountget) | **GET** /notification/count | count notification
*NotificationApi* | [**notificationGet**](docs/Api/NotificationApi.md#notificationget) | **GET** /notification | query notification
*NotificationApi* | [**notificationIdIdGet**](docs/Api/NotificationApi.md#notificationididget) | **GET** /notification/id/{id} | query a specific notification
*NotificationApi* | [**notificationIdIdMarkReadPost**](docs/Api/NotificationApi.md#notificationididmarkreadpost) | **POST** /notification/id/{id}/markRead | 
*OpportunityApi* | [**opportunityCountGet**](docs/Api/OpportunityApi.md#opportunitycountget) | **GET** /opportunity/count | count opportunity
*OpportunityApi* | [**opportunityGet**](docs/Api/OpportunityApi.md#opportunityget) | **GET** /opportunity | query opportunity
*OpportunityApi* | [**opportunityIdIdDelete**](docs/Api/OpportunityApi.md#opportunityididdelete) | **DELETE** /opportunity/id/{id} | delete a opportunity
*OpportunityApi* | [**opportunityIdIdGet**](docs/Api/OpportunityApi.md#opportunityididget) | **GET** /opportunity/id/{id} | query a specific opportunity
*OpportunityApi* | [**opportunityIdIdLinkQuotationPost**](docs/Api/OpportunityApi.md#opportunityididlinkquotationpost) | **POST** /opportunity/id/{id}/linkQuotation | 
*OpportunityApi* | [**opportunityIdIdPut**](docs/Api/OpportunityApi.md#opportunityididput) | **PUT** /opportunity/id/{id} | update a opportunity
*OpportunityApi* | [**opportunityPost**](docs/Api/OpportunityApi.md#opportunitypost) | **POST** /opportunity | create a opportunity
*OpportunityTopicApi* | [**opportunityTopicCountGet**](docs/Api/OpportunityTopicApi.md#opportunitytopiccountget) | **GET** /opportunityTopic/count | count opportunityTopic
*OpportunityTopicApi* | [**opportunityTopicGet**](docs/Api/OpportunityTopicApi.md#opportunitytopicget) | **GET** /opportunityTopic | query opportunityTopic
*OpportunityTopicApi* | [**opportunityTopicIdIdDelete**](docs/Api/OpportunityTopicApi.md#opportunitytopicididdelete) | **DELETE** /opportunityTopic/id/{id} | delete a opportunityTopic
*OpportunityTopicApi* | [**opportunityTopicIdIdGet**](docs/Api/OpportunityTopicApi.md#opportunitytopicididget) | **GET** /opportunityTopic/id/{id} | query a specific opportunityTopic
*OpportunityTopicApi* | [**opportunityTopicIdIdPut**](docs/Api/OpportunityTopicApi.md#opportunitytopicididput) | **PUT** /opportunityTopic/id/{id} | update a opportunityTopic
*OpportunityTopicApi* | [**opportunityTopicPost**](docs/Api/OpportunityTopicApi.md#opportunitytopicpost) | **POST** /opportunityTopic | create a opportunityTopic
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonCountGet**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasoncountget) | **GET** /opportunityWinLossReason/count | count opportunityWinLossReason
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonGet**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasonget) | **GET** /opportunityWinLossReason | query opportunityWinLossReason
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonIdIdDelete**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasonididdelete) | **DELETE** /opportunityWinLossReason/id/{id} | delete a opportunityWinLossReason
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonIdIdGet**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasonididget) | **GET** /opportunityWinLossReason/id/{id} | query a specific opportunityWinLossReason
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonIdIdPut**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasonididput) | **PUT** /opportunityWinLossReason/id/{id} | update a opportunityWinLossReason
*OpportunityWinLossReasonApi* | [**opportunityWinLossReasonPost**](docs/Api/OpportunityWinLossReasonApi.md#opportunitywinlossreasonpost) | **POST** /opportunityWinLossReason | create a opportunityWinLossReason
*PartyApi* | [**partyCountGet**](docs/Api/PartyApi.md#partycountget) | **GET** /party/count | count party
*PartyApi* | [**partyGet**](docs/Api/PartyApi.md#partyget) | **GET** /party | query party
*PartyApi* | [**partyIdIdCreatePublicPagePost**](docs/Api/PartyApi.md#partyididcreatepublicpagepost) | **POST** /party/id/{id}/createPublicPage | 
*PartyApi* | [**partyIdIdDelete**](docs/Api/PartyApi.md#partyididdelete) | **DELETE** /party/id/{id} | delete a party
*PartyApi* | [**partyIdIdDownloadImageGet**](docs/Api/PartyApi.md#partyididdownloadimageget) | **GET** /party/id/{id}/downloadImage | 
*PartyApi* | [**partyIdIdGet**](docs/Api/PartyApi.md#partyididget) | **GET** /party/id/{id} | query a specific party
*PartyApi* | [**partyIdIdPut**](docs/Api/PartyApi.md#partyididput) | **PUT** /party/id/{id} | update a party
*PartyApi* | [**partyIdIdUploadImagePost**](docs/Api/PartyApi.md#partyididuploadimagepost) | **POST** /party/id/{id}/uploadImage | 
*PartyApi* | [**partyPost**](docs/Api/PartyApi.md#partypost) | **POST** /party | create a party
*PartyRatingApi* | [**partyRatingCountGet**](docs/Api/PartyRatingApi.md#partyratingcountget) | **GET** /partyRating/count | count partyRating
*PartyRatingApi* | [**partyRatingGet**](docs/Api/PartyRatingApi.md#partyratingget) | **GET** /partyRating | query partyRating
*PartyRatingApi* | [**partyRatingIdIdDelete**](docs/Api/PartyRatingApi.md#partyratingididdelete) | **DELETE** /partyRating/id/{id} | delete a partyRating
*PartyRatingApi* | [**partyRatingIdIdGet**](docs/Api/PartyRatingApi.md#partyratingididget) | **GET** /partyRating/id/{id} | query a specific partyRating
*PartyRatingApi* | [**partyRatingIdIdPut**](docs/Api/PartyRatingApi.md#partyratingididput) | **PUT** /partyRating/id/{id} | update a partyRating
*PartyRatingApi* | [**partyRatingPost**](docs/Api/PartyRatingApi.md#partyratingpost) | **POST** /partyRating | create a partyRating
*PaymentMethodApi* | [**paymentMethodCountGet**](docs/Api/PaymentMethodApi.md#paymentmethodcountget) | **GET** /paymentMethod/count | count paymentMethod
*PaymentMethodApi* | [**paymentMethodGet**](docs/Api/PaymentMethodApi.md#paymentmethodget) | **GET** /paymentMethod | query paymentMethod
*PaymentMethodApi* | [**paymentMethodIdIdDelete**](docs/Api/PaymentMethodApi.md#paymentmethodididdelete) | **DELETE** /paymentMethod/id/{id} | delete a paymentMethod
*PaymentMethodApi* | [**paymentMethodIdIdGet**](docs/Api/PaymentMethodApi.md#paymentmethodididget) | **GET** /paymentMethod/id/{id} | query a specific paymentMethod
*PaymentMethodApi* | [**paymentMethodIdIdPut**](docs/Api/PaymentMethodApi.md#paymentmethodididput) | **PUT** /paymentMethod/id/{id} | update a paymentMethod
*PaymentMethodApi* | [**paymentMethodPost**](docs/Api/PaymentMethodApi.md#paymentmethodpost) | **POST** /paymentMethod | create a paymentMethod
*PaymentRunApi* | [**paymentRunCountGet**](docs/Api/PaymentRunApi.md#paymentruncountget) | **GET** /paymentRun/count | count paymentRun
*PaymentRunApi* | [**paymentRunGet**](docs/Api/PaymentRunApi.md#paymentrunget) | **GET** /paymentRun | query paymentRun
*PaymentRunApi* | [**paymentRunIdIdDelete**](docs/Api/PaymentRunApi.md#paymentrunididdelete) | **DELETE** /paymentRun/id/{id} | delete a paymentRun
*PaymentRunApi* | [**paymentRunIdIdGet**](docs/Api/PaymentRunApi.md#paymentrunididget) | **GET** /paymentRun/id/{id} | query a specific paymentRun
*PaymentRunApi* | [**paymentRunIdIdPut**](docs/Api/PaymentRunApi.md#paymentrunididput) | **PUT** /paymentRun/id/{id} | update a paymentRun
*PaymentRunItemApi* | [**paymentRunItemCountGet**](docs/Api/PaymentRunItemApi.md#paymentrunitemcountget) | **GET** /paymentRunItem/count | count paymentRunItem
*PaymentRunItemApi* | [**paymentRunItemGet**](docs/Api/PaymentRunItemApi.md#paymentrunitemget) | **GET** /paymentRunItem | query paymentRunItem
*PaymentRunItemApi* | [**paymentRunItemIdIdGet**](docs/Api/PaymentRunItemApi.md#paymentrunitemididget) | **GET** /paymentRunItem/id/{id} | query a specific paymentRunItem
*PersonDepartmentApi* | [**personDepartmentCountGet**](docs/Api/PersonDepartmentApi.md#persondepartmentcountget) | **GET** /personDepartment/count | count personDepartment
*PersonDepartmentApi* | [**personDepartmentGet**](docs/Api/PersonDepartmentApi.md#persondepartmentget) | **GET** /personDepartment | query personDepartment
*PersonDepartmentApi* | [**personDepartmentIdIdDelete**](docs/Api/PersonDepartmentApi.md#persondepartmentididdelete) | **DELETE** /personDepartment/id/{id} | delete a personDepartment
*PersonDepartmentApi* | [**personDepartmentIdIdGet**](docs/Api/PersonDepartmentApi.md#persondepartmentididget) | **GET** /personDepartment/id/{id} | query a specific personDepartment
*PersonDepartmentApi* | [**personDepartmentIdIdPut**](docs/Api/PersonDepartmentApi.md#persondepartmentididput) | **PUT** /personDepartment/id/{id} | update a personDepartment
*PersonDepartmentApi* | [**personDepartmentPost**](docs/Api/PersonDepartmentApi.md#persondepartmentpost) | **POST** /personDepartment | create a personDepartment
*PersonRoleApi* | [**personRoleCountGet**](docs/Api/PersonRoleApi.md#personrolecountget) | **GET** /personRole/count | count personRole
*PersonRoleApi* | [**personRoleGet**](docs/Api/PersonRoleApi.md#personroleget) | **GET** /personRole | query personRole
*PersonRoleApi* | [**personRoleIdIdDelete**](docs/Api/PersonRoleApi.md#personroleididdelete) | **DELETE** /personRole/id/{id} | delete a personRole
*PersonRoleApi* | [**personRoleIdIdGet**](docs/Api/PersonRoleApi.md#personroleididget) | **GET** /personRole/id/{id} | query a specific personRole
*PersonRoleApi* | [**personRoleIdIdPut**](docs/Api/PersonRoleApi.md#personroleididput) | **PUT** /personRole/id/{id} | update a personRole
*PersonRoleApi* | [**personRolePost**](docs/Api/PersonRoleApi.md#personrolepost) | **POST** /personRole | create a personRole
*PersonalAccountingCodeApi* | [**personalAccountingCodeCountGet**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodecountget) | **GET** /personalAccountingCode/count | count personalAccountingCode
*PersonalAccountingCodeApi* | [**personalAccountingCodeGet**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodeget) | **GET** /personalAccountingCode | query personalAccountingCode
*PersonalAccountingCodeApi* | [**personalAccountingCodeIdIdDelete**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodeididdelete) | **DELETE** /personalAccountingCode/id/{id} | delete a personalAccountingCode
*PersonalAccountingCodeApi* | [**personalAccountingCodeIdIdGet**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodeididget) | **GET** /personalAccountingCode/id/{id} | query a specific personalAccountingCode
*PersonalAccountingCodeApi* | [**personalAccountingCodeIdIdPut**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodeididput) | **PUT** /personalAccountingCode/id/{id} | update a personalAccountingCode
*PersonalAccountingCodeApi* | [**personalAccountingCodePost**](docs/Api/PersonalAccountingCodeApi.md#personalaccountingcodepost) | **POST** /personalAccountingCode | create a personalAccountingCode
*PickApi* | [**pickCountGet**](docs/Api/PickApi.md#pickcountget) | **GET** /pick/count | count pick
*PickApi* | [**pickGet**](docs/Api/PickApi.md#pickget) | **GET** /pick | query pick
*PickApi* | [**pickIdIdGet**](docs/Api/PickApi.md#pickididget) | **GET** /pick/id/{id} | query a specific pick
*PickCheckReasonApi* | [**pickCheckReasonCountGet**](docs/Api/PickCheckReasonApi.md#pickcheckreasoncountget) | **GET** /pickCheckReason/count | count pickCheckReason
*PickCheckReasonApi* | [**pickCheckReasonGet**](docs/Api/PickCheckReasonApi.md#pickcheckreasonget) | **GET** /pickCheckReason | query pickCheckReason
*PickCheckReasonApi* | [**pickCheckReasonIdIdDelete**](docs/Api/PickCheckReasonApi.md#pickcheckreasonididdelete) | **DELETE** /pickCheckReason/id/{id} | delete a pickCheckReason
*PickCheckReasonApi* | [**pickCheckReasonIdIdGet**](docs/Api/PickCheckReasonApi.md#pickcheckreasonididget) | **GET** /pickCheckReason/id/{id} | query a specific pickCheckReason
*PickCheckReasonApi* | [**pickCheckReasonIdIdPut**](docs/Api/PickCheckReasonApi.md#pickcheckreasonididput) | **PUT** /pickCheckReason/id/{id} | update a pickCheckReason
*PickCheckReasonApi* | [**pickCheckReasonPost**](docs/Api/PickCheckReasonApi.md#pickcheckreasonpost) | **POST** /pickCheckReason | create a pickCheckReason
*PlaceOfServiceApi* | [**placeOfServiceCountGet**](docs/Api/PlaceOfServiceApi.md#placeofservicecountget) | **GET** /placeOfService/count | count placeOfService
*PlaceOfServiceApi* | [**placeOfServiceGet**](docs/Api/PlaceOfServiceApi.md#placeofserviceget) | **GET** /placeOfService | query placeOfService
*PlaceOfServiceApi* | [**placeOfServiceIdIdDelete**](docs/Api/PlaceOfServiceApi.md#placeofserviceididdelete) | **DELETE** /placeOfService/id/{id} | delete a placeOfService
*PlaceOfServiceApi* | [**placeOfServiceIdIdGet**](docs/Api/PlaceOfServiceApi.md#placeofserviceididget) | **GET** /placeOfService/id/{id} | query a specific placeOfService
*PlaceOfServiceApi* | [**placeOfServiceIdIdPut**](docs/Api/PlaceOfServiceApi.md#placeofserviceididput) | **PUT** /placeOfService/id/{id} | update a placeOfService
*PlaceOfServiceApi* | [**placeOfServicePost**](docs/Api/PlaceOfServiceApi.md#placeofservicepost) | **POST** /placeOfService | create a placeOfService
*PriceCalculationParameterApi* | [**priceCalculationParameterCountGet**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparametercountget) | **GET** /priceCalculationParameter/count | count priceCalculationParameter
*PriceCalculationParameterApi* | [**priceCalculationParameterGet**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparameterget) | **GET** /priceCalculationParameter | query priceCalculationParameter
*PriceCalculationParameterApi* | [**priceCalculationParameterIdIdDelete**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparameterididdelete) | **DELETE** /priceCalculationParameter/id/{id} | delete a priceCalculationParameter
*PriceCalculationParameterApi* | [**priceCalculationParameterIdIdGet**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparameterididget) | **GET** /priceCalculationParameter/id/{id} | query a specific priceCalculationParameter
*PriceCalculationParameterApi* | [**priceCalculationParameterIdIdPut**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparameterididput) | **PUT** /priceCalculationParameter/id/{id} | update a priceCalculationParameter
*PriceCalculationParameterApi* | [**priceCalculationParameterPost**](docs/Api/PriceCalculationParameterApi.md#pricecalculationparameterpost) | **POST** /priceCalculationParameter | create a priceCalculationParameter
*ProductionOrderApi* | [**productionOrderCountGet**](docs/Api/ProductionOrderApi.md#productionordercountget) | **GET** /productionOrder/count | count productionOrder
*ProductionOrderApi* | [**productionOrderFastProductionBookingPost**](docs/Api/ProductionOrderApi.md#productionorderfastproductionbookingpost) | **POST** /productionOrder/fastProductionBooking | 
*ProductionOrderApi* | [**productionOrderGet**](docs/Api/ProductionOrderApi.md#productionorderget) | **GET** /productionOrder | query productionOrder
*ProductionOrderApi* | [**productionOrderIdIdCreatePickingListPost**](docs/Api/ProductionOrderApi.md#productionorderididcreatepickinglistpost) | **POST** /productionOrder/id/{id}/createPickingList | 
*ProductionOrderApi* | [**productionOrderIdIdDelete**](docs/Api/ProductionOrderApi.md#productionorderididdelete) | **DELETE** /productionOrder/id/{id} | delete a productionOrder
*ProductionOrderApi* | [**productionOrderIdIdDownloadLatestProductionOrderPdfGet**](docs/Api/ProductionOrderApi.md#productionorderididdownloadlatestproductionorderpdfget) | **GET** /productionOrder/id/{id}/downloadLatestProductionOrderPdf | 
*ProductionOrderApi* | [**productionOrderIdIdGet**](docs/Api/ProductionOrderApi.md#productionorderididget) | **GET** /productionOrder/id/{id} | query a specific productionOrder
*ProductionOrderApi* | [**productionOrderIdIdPut**](docs/Api/ProductionOrderApi.md#productionorderididput) | **PUT** /productionOrder/id/{id} | update a productionOrder
*ProductionOrderApi* | [**productionOrderPost**](docs/Api/ProductionOrderApi.md#productionorderpost) | **POST** /productionOrder | create a productionOrder
*ProductionWorkScheduleApi* | [**productionWorkScheduleCountGet**](docs/Api/ProductionWorkScheduleApi.md#productionworkschedulecountget) | **GET** /productionWorkSchedule/count | count productionWorkSchedule
*ProductionWorkScheduleApi* | [**productionWorkScheduleGet**](docs/Api/ProductionWorkScheduleApi.md#productionworkscheduleget) | **GET** /productionWorkSchedule | query productionWorkSchedule
*ProductionWorkScheduleApi* | [**productionWorkScheduleIdIdDelete**](docs/Api/ProductionWorkScheduleApi.md#productionworkscheduleididdelete) | **DELETE** /productionWorkSchedule/id/{id} | delete a productionWorkSchedule
*ProductionWorkScheduleApi* | [**productionWorkScheduleIdIdGet**](docs/Api/ProductionWorkScheduleApi.md#productionworkscheduleididget) | **GET** /productionWorkSchedule/id/{id} | query a specific productionWorkSchedule
*ProductionWorkScheduleApi* | [**productionWorkScheduleIdIdPut**](docs/Api/ProductionWorkScheduleApi.md#productionworkscheduleididput) | **PUT** /productionWorkSchedule/id/{id} | update a productionWorkSchedule
*ProductionWorkScheduleApi* | [**productionWorkSchedulePost**](docs/Api/ProductionWorkScheduleApi.md#productionworkschedulepost) | **POST** /productionWorkSchedule | create a productionWorkSchedule
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentCountGet**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentcountget) | **GET** /productionWorkScheduleAssignment/count | count productionWorkScheduleAssignment
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentGet**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentget) | **GET** /productionWorkScheduleAssignment | query productionWorkScheduleAssignment
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentIdIdDelete**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentididdelete) | **DELETE** /productionWorkScheduleAssignment/id/{id} | delete a productionWorkScheduleAssignment
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentIdIdGet**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentididget) | **GET** /productionWorkScheduleAssignment/id/{id} | query a specific productionWorkScheduleAssignment
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentIdIdPut**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentididput) | **PUT** /productionWorkScheduleAssignment/id/{id} | update a productionWorkScheduleAssignment
*ProductionWorkScheduleAssignmentApi* | [**productionWorkScheduleAssignmentPost**](docs/Api/ProductionWorkScheduleAssignmentApi.md#productionworkscheduleassignmentpost) | **POST** /productionWorkScheduleAssignment | create a productionWorkScheduleAssignment
*PropertyTranslationApi* | [**propertyTranslationReadPropertyTranslationsGet**](docs/Api/PropertyTranslationApi.md#propertytranslationreadpropertytranslationsget) | **GET** /propertyTranslation/readPropertyTranslations | 
*PropertyTranslationApi* | [**propertyTranslationUpdatePropertyTranslationsPost**](docs/Api/PropertyTranslationApi.md#propertytranslationupdatepropertytranslationspost) | **POST** /propertyTranslation/updatePropertyTranslations | 
*PurchaseInvoiceApi* | [**purchaseInvoiceCountGet**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoicecountget) | **GET** /purchaseInvoice/count | count purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceGet**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceget) | **GET** /purchaseInvoice | query purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdCreateContractPost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididcreatecontractpost) | **POST** /purchaseInvoice/id/{id}/createContract | 
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdCreateCreditNotePost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididcreatecreditnotepost) | **POST** /purchaseInvoice/id/{id}/createCreditNote | 
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdDelete**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididdelete) | **DELETE** /purchaseInvoice/id/{id} | delete a purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididdownloadlatestpurchaseinvoicedocumentget) | **GET** /purchaseInvoice/id/{id}/downloadLatestPurchaseInvoiceDocument | 
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdGet**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididget) | **GET** /purchaseInvoice/id/{id} | query a specific purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdPut**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididput) | **PUT** /purchaseInvoice/id/{id} | update a purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdResetTaxesPost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididresettaxespost) | **POST** /purchaseInvoice/id/{id}/resetTaxes | 
*PurchaseInvoiceApi* | [**purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoiceididsaveduplicateinvoiceasoriginalpost) | **POST** /purchaseInvoice/id/{id}/saveDuplicateInvoiceAsOriginal | 
*PurchaseInvoiceApi* | [**purchaseInvoicePost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoicepost) | **POST** /purchaseInvoice | create a purchaseInvoice
*PurchaseInvoiceApi* | [**purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost**](docs/Api/PurchaseInvoiceApi.md#purchaseinvoicestartinvoicedocumentprocessingmultipartuploadpost) | **POST** /purchaseInvoice/startInvoiceDocumentProcessing/multipartUpload | 
*PurchaseOpenItemApi* | [**purchaseOpenItemCountGet**](docs/Api/PurchaseOpenItemApi.md#purchaseopenitemcountget) | **GET** /purchaseOpenItem/count | count purchaseOpenItem
*PurchaseOpenItemApi* | [**purchaseOpenItemGet**](docs/Api/PurchaseOpenItemApi.md#purchaseopenitemget) | **GET** /purchaseOpenItem | query purchaseOpenItem
*PurchaseOpenItemApi* | [**purchaseOpenItemIdIdCreatePaymentApplicationPost**](docs/Api/PurchaseOpenItemApi.md#purchaseopenitemididcreatepaymentapplicationpost) | **POST** /purchaseOpenItem/id/{id}/createPaymentApplication | 
*PurchaseOpenItemApi* | [**purchaseOpenItemIdIdGet**](docs/Api/PurchaseOpenItemApi.md#purchaseopenitemididget) | **GET** /purchaseOpenItem/id/{id} | query a specific purchaseOpenItem
*PurchaseOpenItemApi* | [**purchaseOpenItemIdIdUpdatePaymentStatePost**](docs/Api/PurchaseOpenItemApi.md#purchaseopenitemididupdatepaymentstatepost) | **POST** /purchaseOpenItem/id/{id}/updatePaymentState | 
*PurchaseOrderApi* | [**purchaseOrderCountGet**](docs/Api/PurchaseOrderApi.md#purchaseordercountget) | **GET** /purchaseOrder/count | count purchaseOrder
*PurchaseOrderApi* | [**purchaseOrderGet**](docs/Api/PurchaseOrderApi.md#purchaseorderget) | **GET** /purchaseOrder | query purchaseOrder
*PurchaseOrderApi* | [**purchaseOrderIdIdCancelDropshippingShipmentsPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcanceldropshippingshipmentspost) | **POST** /purchaseOrder/id/{id}/cancelDropshippingShipments | 
*PurchaseOrderApi* | [**purchaseOrderIdIdCreateContractPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcreatecontractpost) | **POST** /purchaseOrder/id/{id}/createContract | 
*PurchaseOrderApi* | [**purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcreatedropshippingdeliverynotepdfpost) | **POST** /purchaseOrder/id/{id}/createDropshippingDeliveryNotePdf | 
*PurchaseOrderApi* | [**purchaseOrderIdIdCreateIncomingGoodsPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcreateincominggoodspost) | **POST** /purchaseOrder/id/{id}/createIncomingGoods | 
*PurchaseOrderApi* | [**purchaseOrderIdIdCreatePurchaseInvoicePost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcreatepurchaseinvoicepost) | **POST** /purchaseOrder/id/{id}/createPurchaseInvoice | 
*PurchaseOrderApi* | [**purchaseOrderIdIdCreateSupplierReturnPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididcreatesupplierreturnpost) | **POST** /purchaseOrder/id/{id}/createSupplierReturn | 
*PurchaseOrderApi* | [**purchaseOrderIdIdDelete**](docs/Api/PurchaseOrderApi.md#purchaseorderididdelete) | **DELETE** /purchaseOrder/id/{id} | delete a purchaseOrder
*PurchaseOrderApi* | [**purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet**](docs/Api/PurchaseOrderApi.md#purchaseorderididdownloadlatestdropshippingdeliverynotepdfget) | **GET** /purchaseOrder/id/{id}/downloadLatestDropshippingDeliveryNotePdf | 
*PurchaseOrderApi* | [**purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet**](docs/Api/PurchaseOrderApi.md#purchaseorderididdownloadlatestpurchaseorderpdfget) | **GET** /purchaseOrder/id/{id}/downloadLatestPurchaseOrderPdf | 
*PurchaseOrderApi* | [**purchaseOrderIdIdGet**](docs/Api/PurchaseOrderApi.md#purchaseorderididget) | **GET** /purchaseOrder/id/{id} | query a specific purchaseOrder
*PurchaseOrderApi* | [**purchaseOrderIdIdProcessDropshippingPost**](docs/Api/PurchaseOrderApi.md#purchaseorderididprocessdropshippingpost) | **POST** /purchaseOrder/id/{id}/processDropshipping | 
*PurchaseOrderApi* | [**purchaseOrderIdIdPut**](docs/Api/PurchaseOrderApi.md#purchaseorderididput) | **PUT** /purchaseOrder/id/{id} | update a purchaseOrder
*PurchaseOrderApi* | [**purchaseOrderPost**](docs/Api/PurchaseOrderApi.md#purchaseorderpost) | **POST** /purchaseOrder | create a purchaseOrder
*PurchaseOrderRequestApi* | [**purchaseOrderRequestCountGet**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestcountget) | **GET** /purchaseOrderRequest/count | count purchaseOrderRequest
*PurchaseOrderRequestApi* | [**purchaseOrderRequestGet**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestget) | **GET** /purchaseOrderRequest | query purchaseOrderRequest
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididcreateblanketpurchaseorderpost) | **POST** /purchaseOrderRequest/id/{id}/createBlanketPurchaseOrder | 
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdCreatePurchaseOrderPost**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididcreatepurchaseorderpost) | **POST** /purchaseOrderRequest/id/{id}/createPurchaseOrder | 
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdDelete**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididdelete) | **DELETE** /purchaseOrderRequest/id/{id} | delete a purchaseOrderRequest
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdExportItemsAsCsvPost**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididexportitemsascsvpost) | **POST** /purchaseOrderRequest/id/{id}/exportItemsAsCsv | 
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdGet**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididget) | **GET** /purchaseOrderRequest/id/{id} | query a specific purchaseOrderRequest
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdPushPurchasePricesPost**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididpushpurchasepricespost) | **POST** /purchaseOrderRequest/id/{id}/pushPurchasePrices | 
*PurchaseOrderRequestApi* | [**purchaseOrderRequestIdIdPut**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestididput) | **PUT** /purchaseOrderRequest/id/{id} | update a purchaseOrderRequest
*PurchaseOrderRequestApi* | [**purchaseOrderRequestPost**](docs/Api/PurchaseOrderRequestApi.md#purchaseorderrequestpost) | **POST** /purchaseOrderRequest | create a purchaseOrderRequest
*PurchaseRequisitionApi* | [**purchaseRequisitionCountGet**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitioncountget) | **GET** /purchaseRequisition/count | count purchaseRequisition
*PurchaseRequisitionApi* | [**purchaseRequisitionDeleteAllRequisitionsPost**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitiondeleteallrequisitionspost) | **POST** /purchaseRequisition/deleteAllRequisitions | 
*PurchaseRequisitionApi* | [**purchaseRequisitionGet**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitionget) | **GET** /purchaseRequisition | query purchaseRequisition
*PurchaseRequisitionApi* | [**purchaseRequisitionIdIdGet**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitionididget) | **GET** /purchaseRequisition/id/{id} | query a specific purchaseRequisition
*PurchaseRequisitionApi* | [**purchaseRequisitionIdIdPut**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitionididput) | **PUT** /purchaseRequisition/id/{id} | update a purchaseRequisition
*PurchaseRequisitionApi* | [**purchaseRequisitionStartMaterialPlanningRunPost**](docs/Api/PurchaseRequisitionApi.md#purchaserequisitionstartmaterialplanningrunpost) | **POST** /purchaseRequisition/startMaterialPlanningRun | 
*QuotationApi* | [**quotationCountGet**](docs/Api/QuotationApi.md#quotationcountget) | **GET** /quotation/count | count quotation
*QuotationApi* | [**quotationGet**](docs/Api/QuotationApi.md#quotationget) | **GET** /quotation | query quotation
*QuotationApi* | [**quotationIdIdAcceptPost**](docs/Api/QuotationApi.md#quotationididacceptpost) | **POST** /quotation/id/{id}/accept | 
*QuotationApi* | [**quotationIdIdAddDefaultScalePricesToItemsPost**](docs/Api/QuotationApi.md#quotationididadddefaultscalepricestoitemspost) | **POST** /quotation/id/{id}/addDefaultScalePricesToItems | 
*QuotationApi* | [**quotationIdIdCalculateSalesPricesPost**](docs/Api/QuotationApi.md#quotationididcalculatesalespricespost) | **POST** /quotation/id/{id}/calculateSalesPrices | 
*QuotationApi* | [**quotationIdIdCreateNewVersionPost**](docs/Api/QuotationApi.md#quotationididcreatenewversionpost) | **POST** /quotation/id/{id}/createNewVersion | 
*QuotationApi* | [**quotationIdIdCreatePublicPageLinkPost**](docs/Api/QuotationApi.md#quotationididcreatepublicpagelinkpost) | **POST** /quotation/id/{id}/createPublicPageLink | 
*QuotationApi* | [**quotationIdIdCreatePurchaseOrderRequestPost**](docs/Api/QuotationApi.md#quotationididcreatepurchaseorderrequestpost) | **POST** /quotation/id/{id}/createPurchaseOrderRequest | 
*QuotationApi* | [**quotationIdIdCreateQuotationPdfPost**](docs/Api/QuotationApi.md#quotationididcreatequotationpdfpost) | **POST** /quotation/id/{id}/createQuotationPdf | 
*QuotationApi* | [**quotationIdIdDelete**](docs/Api/QuotationApi.md#quotationididdelete) | **DELETE** /quotation/id/{id} | delete a quotation
*QuotationApi* | [**quotationIdIdDisablePublicPageLinkPost**](docs/Api/QuotationApi.md#quotationididdisablepublicpagelinkpost) | **POST** /quotation/id/{id}/disablePublicPageLink | 
*QuotationApi* | [**quotationIdIdDownloadLatestQuotationPdfGet**](docs/Api/QuotationApi.md#quotationididdownloadlatestquotationpdfget) | **GET** /quotation/id/{id}/downloadLatestQuotationPdf | 
*QuotationApi* | [**quotationIdIdGet**](docs/Api/QuotationApi.md#quotationididget) | **GET** /quotation/id/{id} | query a specific quotation
*QuotationApi* | [**quotationIdIdInquirePost**](docs/Api/QuotationApi.md#quotationididinquirepost) | **POST** /quotation/id/{id}/inquire | 
*QuotationApi* | [**quotationIdIdPrintQuotationDataGet**](docs/Api/QuotationApi.md#quotationididprintquotationdataget) | **GET** /quotation/id/{id}/printQuotationData | 
*QuotationApi* | [**quotationIdIdPut**](docs/Api/QuotationApi.md#quotationididput) | **PUT** /quotation/id/{id} | update a quotation
*QuotationApi* | [**quotationIdIdRecalculateCostsPost**](docs/Api/QuotationApi.md#quotationididrecalculatecostspost) | **POST** /quotation/id/{id}/recalculateCosts | 
*QuotationApi* | [**quotationIdIdResetTaxesPost**](docs/Api/QuotationApi.md#quotationididresettaxespost) | **POST** /quotation/id/{id}/resetTaxes | 
*QuotationApi* | [**quotationIdIdSetCostsForItemsWithoutCostPost**](docs/Api/QuotationApi.md#quotationididsetcostsforitemswithoutcostpost) | **POST** /quotation/id/{id}/setCostsForItemsWithoutCost | 
*QuotationApi* | [**quotationIdIdUpdatePricesPost**](docs/Api/QuotationApi.md#quotationididupdatepricespost) | **POST** /quotation/id/{id}/updatePrices | 
*QuotationApi* | [**quotationPost**](docs/Api/QuotationApi.md#quotationpost) | **POST** /quotation | create a quotation
*RecordEmailingRuleApi* | [**recordEmailingRuleCountGet**](docs/Api/RecordEmailingRuleApi.md#recordemailingrulecountget) | **GET** /recordEmailingRule/count | count recordEmailingRule
*RecordEmailingRuleApi* | [**recordEmailingRuleGet**](docs/Api/RecordEmailingRuleApi.md#recordemailingruleget) | **GET** /recordEmailingRule | query recordEmailingRule
*RecordEmailingRuleApi* | [**recordEmailingRuleIdIdDelete**](docs/Api/RecordEmailingRuleApi.md#recordemailingruleididdelete) | **DELETE** /recordEmailingRule/id/{id} | delete a recordEmailingRule
*RecordEmailingRuleApi* | [**recordEmailingRuleIdIdGet**](docs/Api/RecordEmailingRuleApi.md#recordemailingruleididget) | **GET** /recordEmailingRule/id/{id} | query a specific recordEmailingRule
*RecordEmailingRuleApi* | [**recordEmailingRuleIdIdPut**](docs/Api/RecordEmailingRuleApi.md#recordemailingruleididput) | **PUT** /recordEmailingRule/id/{id} | update a recordEmailingRule
*RecordEmailingRuleApi* | [**recordEmailingRulePost**](docs/Api/RecordEmailingRuleApi.md#recordemailingrulepost) | **POST** /recordEmailingRule | create a recordEmailingRule
*RegionApi* | [**regionCountGet**](docs/Api/RegionApi.md#regioncountget) | **GET** /region/count | count region
*RegionApi* | [**regionGet**](docs/Api/RegionApi.md#regionget) | **GET** /region | query region
*RegionApi* | [**regionIdIdDelete**](docs/Api/RegionApi.md#regionididdelete) | **DELETE** /region/id/{id} | delete a region
*RegionApi* | [**regionIdIdGet**](docs/Api/RegionApi.md#regionididget) | **GET** /region/id/{id} | query a specific region
*RegionApi* | [**regionIdIdPut**](docs/Api/RegionApi.md#regionididput) | **PUT** /region/id/{id} | update a region
*RegionApi* | [**regionPost**](docs/Api/RegionApi.md#regionpost) | **POST** /region | create a region
*ReminderApi* | [**reminderCountGet**](docs/Api/ReminderApi.md#remindercountget) | **GET** /reminder/count | count reminder
*ReminderApi* | [**reminderGet**](docs/Api/ReminderApi.md#reminderget) | **GET** /reminder | query reminder
*ReminderApi* | [**reminderIdIdDelete**](docs/Api/ReminderApi.md#reminderididdelete) | **DELETE** /reminder/id/{id} | delete a reminder
*ReminderApi* | [**reminderIdIdGet**](docs/Api/ReminderApi.md#reminderididget) | **GET** /reminder/id/{id} | query a specific reminder
*ReminderApi* | [**reminderIdIdPut**](docs/Api/ReminderApi.md#reminderididput) | **PUT** /reminder/id/{id} | update a reminder
*ReminderApi* | [**reminderPost**](docs/Api/ReminderApi.md#reminderpost) | **POST** /reminder | create a reminder
*RemotePrintJobApi* | [**remotePrintJobCountGet**](docs/Api/RemotePrintJobApi.md#remoteprintjobcountget) | **GET** /remotePrintJob/count | count remotePrintJob
*RemotePrintJobApi* | [**remotePrintJobCreatePrintJobWithDocumentPost**](docs/Api/RemotePrintJobApi.md#remoteprintjobcreateprintjobwithdocumentpost) | **POST** /remotePrintJob/createPrintJobWithDocument | 
*RemotePrintJobApi* | [**remotePrintJobGet**](docs/Api/RemotePrintJobApi.md#remoteprintjobget) | **GET** /remotePrintJob | query remotePrintJob
*RemotePrintJobApi* | [**remotePrintJobIdIdDelete**](docs/Api/RemotePrintJobApi.md#remoteprintjobididdelete) | **DELETE** /remotePrintJob/id/{id} | delete a remotePrintJob
*RemotePrintJobApi* | [**remotePrintJobIdIdGet**](docs/Api/RemotePrintJobApi.md#remoteprintjobididget) | **GET** /remotePrintJob/id/{id} | query a specific remotePrintJob
*RemotePrintJobApi* | [**remotePrintJobIdIdPut**](docs/Api/RemotePrintJobApi.md#remoteprintjobididput) | **PUT** /remotePrintJob/id/{id} | update a remotePrintJob
*RemotePrintJobApi* | [**remotePrintJobPost**](docs/Api/RemotePrintJobApi.md#remoteprintjobpost) | **POST** /remotePrintJob | create a remotePrintJob
*SalesChannelApi* | [**salesChannelActiveSalesChannelsGet**](docs/Api/SalesChannelApi.md#saleschannelactivesaleschannelsget) | **GET** /salesChannel/activeSalesChannels | 
*SalesInvoiceApi* | [**salesInvoiceCountGet**](docs/Api/SalesInvoiceApi.md#salesinvoicecountget) | **GET** /salesInvoice/count | count salesInvoice
*SalesInvoiceApi* | [**salesInvoiceGet**](docs/Api/SalesInvoiceApi.md#salesinvoiceget) | **GET** /salesInvoice | query salesInvoice
*SalesInvoiceApi* | [**salesInvoiceIdIdAddSalesOrdersPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididaddsalesorderspost) | **POST** /salesInvoice/id/{id}/addSalesOrders | 
*SalesInvoiceApi* | [**salesInvoiceIdIdCalculateSalesPricesPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididcalculatesalespricespost) | **POST** /salesInvoice/id/{id}/calculateSalesPrices | 
*SalesInvoiceApi* | [**salesInvoiceIdIdCreateContractPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididcreatecontractpost) | **POST** /salesInvoice/id/{id}/createContract | 
*SalesInvoiceApi* | [**salesInvoiceIdIdCreateCreditNotePost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididcreatecreditnotepost) | **POST** /salesInvoice/id/{id}/createCreditNote | 
*SalesInvoiceApi* | [**salesInvoiceIdIdDelete**](docs/Api/SalesInvoiceApi.md#salesinvoiceididdelete) | **DELETE** /salesInvoice/id/{id} | delete a salesInvoice
*SalesInvoiceApi* | [**salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet**](docs/Api/SalesInvoiceApi.md#salesinvoiceididdownloadlatestsalesinvoicepdfget) | **GET** /salesInvoice/id/{id}/downloadLatestSalesInvoicePdf | 
*SalesInvoiceApi* | [**salesInvoiceIdIdGet**](docs/Api/SalesInvoiceApi.md#salesinvoiceididget) | **GET** /salesInvoice/id/{id} | query a specific salesInvoice
*SalesInvoiceApi* | [**salesInvoiceIdIdPut**](docs/Api/SalesInvoiceApi.md#salesinvoiceididput) | **PUT** /salesInvoice/id/{id} | update a salesInvoice
*SalesInvoiceApi* | [**salesInvoiceIdIdRecalculateCostsPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididrecalculatecostspost) | **POST** /salesInvoice/id/{id}/recalculateCosts | 
*SalesInvoiceApi* | [**salesInvoiceIdIdResetTaxesPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididresettaxespost) | **POST** /salesInvoice/id/{id}/resetTaxes | 
*SalesInvoiceApi* | [**salesInvoiceIdIdSetCostsForItemsWithoutCostPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididsetcostsforitemswithoutcostpost) | **POST** /salesInvoice/id/{id}/setCostsForItemsWithoutCost | 
*SalesInvoiceApi* | [**salesInvoiceIdIdUpdatePricesPost**](docs/Api/SalesInvoiceApi.md#salesinvoiceididupdatepricespost) | **POST** /salesInvoice/id/{id}/updatePrices | 
*SalesInvoiceApi* | [**salesInvoicePost**](docs/Api/SalesInvoiceApi.md#salesinvoicepost) | **POST** /salesInvoice | create a salesInvoice
*SalesOpenItemApi* | [**salesOpenItemCountGet**](docs/Api/SalesOpenItemApi.md#salesopenitemcountget) | **GET** /salesOpenItem/count | count salesOpenItem
*SalesOpenItemApi* | [**salesOpenItemGet**](docs/Api/SalesOpenItemApi.md#salesopenitemget) | **GET** /salesOpenItem | query salesOpenItem
*SalesOpenItemApi* | [**salesOpenItemIdIdCreatePaymentApplicationPost**](docs/Api/SalesOpenItemApi.md#salesopenitemididcreatepaymentapplicationpost) | **POST** /salesOpenItem/id/{id}/createPaymentApplication | 
*SalesOpenItemApi* | [**salesOpenItemIdIdGet**](docs/Api/SalesOpenItemApi.md#salesopenitemididget) | **GET** /salesOpenItem/id/{id} | query a specific salesOpenItem
*SalesOpenItemApi* | [**salesOpenItemIdIdUpdatePaymentStatePost**](docs/Api/SalesOpenItemApi.md#salesopenitemididupdatepaymentstatepost) | **POST** /salesOpenItem/id/{id}/updatePaymentState | 
*SalesOrderApi* | [**salesOrderCountGet**](docs/Api/SalesOrderApi.md#salesordercountget) | **GET** /salesOrder/count | count salesOrder
*SalesOrderApi* | [**salesOrderDefaultValuesForCreateGet**](docs/Api/SalesOrderApi.md#salesorderdefaultvaluesforcreateget) | **GET** /salesOrder/defaultValuesForCreate | 
*SalesOrderApi* | [**salesOrderGet**](docs/Api/SalesOrderApi.md#salesorderget) | **GET** /salesOrder | query salesOrder
*SalesOrderApi* | [**salesOrderIdIdActivateProjectViewPost**](docs/Api/SalesOrderApi.md#salesorderididactivateprojectviewpost) | **POST** /salesOrder/id/{id}/activateProjectView | 
*SalesOrderApi* | [**salesOrderIdIdCalculateSalesPricesPost**](docs/Api/SalesOrderApi.md#salesorderididcalculatesalespricespost) | **POST** /salesOrder/id/{id}/calculateSalesPrices | 
*SalesOrderApi* | [**salesOrderIdIdCancelOrManuallyClosePost**](docs/Api/SalesOrderApi.md#salesorderididcancelormanuallyclosepost) | **POST** /salesOrder/id/{id}/cancelOrManuallyClose | 
*SalesOrderApi* | [**salesOrderIdIdCreateAdvancePaymentRequestPost**](docs/Api/SalesOrderApi.md#salesorderididcreateadvancepaymentrequestpost) | **POST** /salesOrder/id/{id}/createAdvancePaymentRequest | 
*SalesOrderApi* | [**salesOrderIdIdCreateContractPost**](docs/Api/SalesOrderApi.md#salesorderididcreatecontractpost) | **POST** /salesOrder/id/{id}/createContract | 
*SalesOrderApi* | [**salesOrderIdIdCreateCustomerReturnPost**](docs/Api/SalesOrderApi.md#salesorderididcreatecustomerreturnpost) | **POST** /salesOrder/id/{id}/createCustomerReturn | 
*SalesOrderApi* | [**salesOrderIdIdCreateDropshippingPost**](docs/Api/SalesOrderApi.md#salesorderididcreatedropshippingpost) | **POST** /salesOrder/id/{id}/createDropshipping | 
*SalesOrderApi* | [**salesOrderIdIdCreatePartPaymentInvoicePost**](docs/Api/SalesOrderApi.md#salesorderididcreatepartpaymentinvoicepost) | **POST** /salesOrder/id/{id}/createPartPaymentInvoice | 
*SalesOrderApi* | [**salesOrderIdIdCreatePrepaymentFinalInvoicePost**](docs/Api/SalesOrderApi.md#salesorderididcreateprepaymentfinalinvoicepost) | **POST** /salesOrder/id/{id}/createPrepaymentFinalInvoice | 
*SalesOrderApi* | [**salesOrderIdIdCreateProductionOrdersPost**](docs/Api/SalesOrderApi.md#salesorderididcreateproductionorderspost) | **POST** /salesOrder/id/{id}/createProductionOrders | 
*SalesOrderApi* | [**salesOrderIdIdCreatePurchaseOrderPost**](docs/Api/SalesOrderApi.md#salesorderididcreatepurchaseorderpost) | **POST** /salesOrder/id/{id}/createPurchaseOrder | 
*SalesOrderApi* | [**salesOrderIdIdCreatePurchaseOrderRequestPost**](docs/Api/SalesOrderApi.md#salesorderididcreatepurchaseorderrequestpost) | **POST** /salesOrder/id/{id}/createPurchaseOrderRequest | 
*SalesOrderApi* | [**salesOrderIdIdCreateReturnLabelsPost**](docs/Api/SalesOrderApi.md#salesorderididcreatereturnlabelspost) | **POST** /salesOrder/id/{id}/createReturnLabels | 
*SalesOrderApi* | [**salesOrderIdIdCreateSalesInvoicePost**](docs/Api/SalesOrderApi.md#salesorderididcreatesalesinvoicepost) | **POST** /salesOrder/id/{id}/createSalesInvoice | 
*SalesOrderApi* | [**salesOrderIdIdCreateShipmentPost**](docs/Api/SalesOrderApi.md#salesorderididcreateshipmentpost) | **POST** /salesOrder/id/{id}/createShipment | 
*SalesOrderApi* | [**salesOrderIdIdCreateShippingLabelsPost**](docs/Api/SalesOrderApi.md#salesorderididcreateshippinglabelspost) | **POST** /salesOrder/id/{id}/createShippingLabels | 
*SalesOrderApi* | [**salesOrderIdIdDelete**](docs/Api/SalesOrderApi.md#salesorderididdelete) | **DELETE** /salesOrder/id/{id} | delete a salesOrder
*SalesOrderApi* | [**salesOrderIdIdDownloadLatestOrderConfirmationPdfGet**](docs/Api/SalesOrderApi.md#salesorderididdownloadlatestorderconfirmationpdfget) | **GET** /salesOrder/id/{id}/downloadLatestOrderConfirmationPdf | 
*SalesOrderApi* | [**salesOrderIdIdGet**](docs/Api/SalesOrderApi.md#salesorderididget) | **GET** /salesOrder/id/{id} | query a specific salesOrder
*SalesOrderApi* | [**salesOrderIdIdManuallyClosePost**](docs/Api/SalesOrderApi.md#salesorderididmanuallyclosepost) | **POST** /salesOrder/id/{id}/manuallyClose | 
*SalesOrderApi* | [**salesOrderIdIdPrintOrderDataGet**](docs/Api/SalesOrderApi.md#salesorderididprintorderdataget) | **GET** /salesOrder/id/{id}/printOrderData | 
*SalesOrderApi* | [**salesOrderIdIdPut**](docs/Api/SalesOrderApi.md#salesorderididput) | **PUT** /salesOrder/id/{id} | update a salesOrder
*SalesOrderApi* | [**salesOrderIdIdRecalculateCostsPost**](docs/Api/SalesOrderApi.md#salesorderididrecalculatecostspost) | **POST** /salesOrder/id/{id}/recalculateCosts | 
*SalesOrderApi* | [**salesOrderIdIdResetTaxesPost**](docs/Api/SalesOrderApi.md#salesorderididresettaxespost) | **POST** /salesOrder/id/{id}/resetTaxes | 
*SalesOrderApi* | [**salesOrderIdIdSetCostsForItemsWithoutCostPost**](docs/Api/SalesOrderApi.md#salesorderididsetcostsforitemswithoutcostpost) | **POST** /salesOrder/id/{id}/setCostsForItemsWithoutCost | 
*SalesOrderApi* | [**salesOrderIdIdShipOrderForExternalFulfillmentPost**](docs/Api/SalesOrderApi.md#salesorderididshiporderforexternalfulfillmentpost) | **POST** /salesOrder/id/{id}/shipOrderForExternalFulfillment | 
*SalesOrderApi* | [**salesOrderIdIdToggleProjectTeamPost**](docs/Api/SalesOrderApi.md#salesorderididtoggleprojectteampost) | **POST** /salesOrder/id/{id}/toggleProjectTeam | 
*SalesOrderApi* | [**salesOrderIdIdToggleServicesFinishedPost**](docs/Api/SalesOrderApi.md#salesorderididtoggleservicesfinishedpost) | **POST** /salesOrder/id/{id}/toggleServicesFinished | 
*SalesOrderApi* | [**salesOrderIdIdUpdatePricesPost**](docs/Api/SalesOrderApi.md#salesorderididupdatepricespost) | **POST** /salesOrder/id/{id}/updatePrices | 
*SalesOrderApi* | [**salesOrderPost**](docs/Api/SalesOrderApi.md#salesorderpost) | **POST** /salesOrder | create a salesOrder
*SalesStageApi* | [**salesStageCountGet**](docs/Api/SalesStageApi.md#salesstagecountget) | **GET** /salesStage/count | count salesStage
*SalesStageApi* | [**salesStageGet**](docs/Api/SalesStageApi.md#salesstageget) | **GET** /salesStage | query salesStage
*SalesStageApi* | [**salesStageIdIdDelete**](docs/Api/SalesStageApi.md#salesstageididdelete) | **DELETE** /salesStage/id/{id} | delete a salesStage
*SalesStageApi* | [**salesStageIdIdGet**](docs/Api/SalesStageApi.md#salesstageididget) | **GET** /salesStage/id/{id} | query a specific salesStage
*SalesStageApi* | [**salesStageIdIdPut**](docs/Api/SalesStageApi.md#salesstageididput) | **PUT** /salesStage/id/{id} | update a salesStage
*SalesStageApi* | [**salesStagePost**](docs/Api/SalesStageApi.md#salesstagepost) | **POST** /salesStage | create a salesStage
*SectorApi* | [**sectorCountGet**](docs/Api/SectorApi.md#sectorcountget) | **GET** /sector/count | count sector
*SectorApi* | [**sectorGet**](docs/Api/SectorApi.md#sectorget) | **GET** /sector | query sector
*SectorApi* | [**sectorIdIdDelete**](docs/Api/SectorApi.md#sectorididdelete) | **DELETE** /sector/id/{id} | delete a sector
*SectorApi* | [**sectorIdIdGet**](docs/Api/SectorApi.md#sectorididget) | **GET** /sector/id/{id} | query a specific sector
*SectorApi* | [**sectorIdIdPut**](docs/Api/SectorApi.md#sectorididput) | **PUT** /sector/id/{id} | update a sector
*SectorApi* | [**sectorPost**](docs/Api/SectorApi.md#sectorpost) | **POST** /sector | create a sector
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandateCountGet**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandatecountget) | **GET** /sepaDirectDebitMandate/count | count sepaDirectDebitMandate
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandateGet**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandateget) | **GET** /sepaDirectDebitMandate | query sepaDirectDebitMandate
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandateIdIdDelete**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandateididdelete) | **DELETE** /sepaDirectDebitMandate/id/{id} | delete a sepaDirectDebitMandate
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandateIdIdGet**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandateididget) | **GET** /sepaDirectDebitMandate/id/{id} | query a specific sepaDirectDebitMandate
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandateIdIdPut**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandateididput) | **PUT** /sepaDirectDebitMandate/id/{id} | update a sepaDirectDebitMandate
*SepaDirectDebitMandateApi* | [**sepaDirectDebitMandatePost**](docs/Api/SepaDirectDebitMandateApi.md#sepadirectdebitmandatepost) | **POST** /sepaDirectDebitMandate | create a sepaDirectDebitMandate
*SerialNumberApi* | [**serialNumberCountGet**](docs/Api/SerialNumberApi.md#serialnumbercountget) | **GET** /serialNumber/count | count serialNumber
*SerialNumberApi* | [**serialNumberGet**](docs/Api/SerialNumberApi.md#serialnumberget) | **GET** /serialNumber | query serialNumber
*SerialNumberApi* | [**serialNumberIdIdGet**](docs/Api/SerialNumberApi.md#serialnumberididget) | **GET** /serialNumber/id/{id} | query a specific serialNumber
*SerialNumberApi* | [**serialNumberIdIdPut**](docs/Api/SerialNumberApi.md#serialnumberididput) | **PUT** /serialNumber/id/{id} | update a serialNumber
*ShelfApi* | [**shelfCountGet**](docs/Api/ShelfApi.md#shelfcountget) | **GET** /shelf/count | count shelf
*ShelfApi* | [**shelfGet**](docs/Api/ShelfApi.md#shelfget) | **GET** /shelf | query shelf
*ShelfApi* | [**shelfIdIdActivatePost**](docs/Api/ShelfApi.md#shelfididactivatepost) | **POST** /shelf/id/{id}/activate | 
*ShelfApi* | [**shelfIdIdDeactivatePost**](docs/Api/ShelfApi.md#shelfididdeactivatepost) | **POST** /shelf/id/{id}/deactivate | 
*ShelfApi* | [**shelfIdIdDelete**](docs/Api/ShelfApi.md#shelfididdelete) | **DELETE** /shelf/id/{id} | delete a shelf
*ShelfApi* | [**shelfIdIdGet**](docs/Api/ShelfApi.md#shelfididget) | **GET** /shelf/id/{id} | query a specific shelf
*ShelfApi* | [**shelfIdIdPut**](docs/Api/ShelfApi.md#shelfididput) | **PUT** /shelf/id/{id} | update a shelf
*ShelfApi* | [**shelfPost**](docs/Api/ShelfApi.md#shelfpost) | **POST** /shelf | create a shelf
*ShipmentApi* | [**shipmentCountGet**](docs/Api/ShipmentApi.md#shipmentcountget) | **GET** /shipment/count | count shipment
*ShipmentApi* | [**shipmentGet**](docs/Api/ShipmentApi.md#shipmentget) | **GET** /shipment | query shipment
*ShipmentApi* | [**shipmentIdIdCreatePickingListPost**](docs/Api/ShipmentApi.md#shipmentididcreatepickinglistpost) | **POST** /shipment/id/{id}/createPickingList | 
*ShipmentApi* | [**shipmentIdIdCreateReturnLabelsPost**](docs/Api/ShipmentApi.md#shipmentididcreatereturnlabelspost) | **POST** /shipment/id/{id}/createReturnLabels | 
*ShipmentApi* | [**shipmentIdIdCreateSalesInvoicePost**](docs/Api/ShipmentApi.md#shipmentididcreatesalesinvoicepost) | **POST** /shipment/id/{id}/createSalesInvoice | 
*ShipmentApi* | [**shipmentIdIdCreateShippingLabelPdfPost**](docs/Api/ShipmentApi.md#shipmentididcreateshippinglabelpdfpost) | **POST** /shipment/id/{id}/createShippingLabelPdf | 
*ShipmentApi* | [**shipmentIdIdCreateShippingLabelsPost**](docs/Api/ShipmentApi.md#shipmentididcreateshippinglabelspost) | **POST** /shipment/id/{id}/createShippingLabels | 
*ShipmentApi* | [**shipmentIdIdDelete**](docs/Api/ShipmentApi.md#shipmentididdelete) | **DELETE** /shipment/id/{id} | delete a shipment
*ShipmentApi* | [**shipmentIdIdDownloadLatestDeliveryNotePdfGet**](docs/Api/ShipmentApi.md#shipmentididdownloadlatestdeliverynotepdfget) | **GET** /shipment/id/{id}/downloadLatestDeliveryNotePdf | 
*ShipmentApi* | [**shipmentIdIdDownloadLatestPickingListPdfGet**](docs/Api/ShipmentApi.md#shipmentididdownloadlatestpickinglistpdfget) | **GET** /shipment/id/{id}/downloadLatestPickingListPdf | 
*ShipmentApi* | [**shipmentIdIdDownloadLatestShippingLabelPdfGet**](docs/Api/ShipmentApi.md#shipmentididdownloadlatestshippinglabelpdfget) | **GET** /shipment/id/{id}/downloadLatestShippingLabelPdf | 
*ShipmentApi* | [**shipmentIdIdGet**](docs/Api/ShipmentApi.md#shipmentididget) | **GET** /shipment/id/{id} | query a specific shipment
*ShipmentApi* | [**shipmentIdIdPut**](docs/Api/ShipmentApi.md#shipmentididput) | **PUT** /shipment/id/{id} | update a shipment
*ShipmentApi* | [**shipmentPost**](docs/Api/ShipmentApi.md#shipmentpost) | **POST** /shipment | create a shipment
*ShipmentMethodApi* | [**shipmentMethodCountGet**](docs/Api/ShipmentMethodApi.md#shipmentmethodcountget) | **GET** /shipmentMethod/count | count shipmentMethod
*ShipmentMethodApi* | [**shipmentMethodGet**](docs/Api/ShipmentMethodApi.md#shipmentmethodget) | **GET** /shipmentMethod | query shipmentMethod
*ShipmentMethodApi* | [**shipmentMethodIdIdDelete**](docs/Api/ShipmentMethodApi.md#shipmentmethodididdelete) | **DELETE** /shipmentMethod/id/{id} | delete a shipmentMethod
*ShipmentMethodApi* | [**shipmentMethodIdIdGet**](docs/Api/ShipmentMethodApi.md#shipmentmethodididget) | **GET** /shipmentMethod/id/{id} | query a specific shipmentMethod
*ShipmentMethodApi* | [**shipmentMethodIdIdPut**](docs/Api/ShipmentMethodApi.md#shipmentmethodididput) | **PUT** /shipmentMethod/id/{id} | update a shipmentMethod
*ShipmentMethodApi* | [**shipmentMethodPost**](docs/Api/ShipmentMethodApi.md#shipmentmethodpost) | **POST** /shipmentMethod | create a shipmentMethod
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentCountGet**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentcountget) | **GET** /shipmentReturnAssessment/count | count shipmentReturnAssessment
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentGet**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentget) | **GET** /shipmentReturnAssessment | query shipmentReturnAssessment
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentIdIdDelete**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentididdelete) | **DELETE** /shipmentReturnAssessment/id/{id} | delete a shipmentReturnAssessment
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentIdIdGet**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentididget) | **GET** /shipmentReturnAssessment/id/{id} | query a specific shipmentReturnAssessment
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentIdIdPut**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentididput) | **PUT** /shipmentReturnAssessment/id/{id} | update a shipmentReturnAssessment
*ShipmentReturnAssessmentApi* | [**shipmentReturnAssessmentPost**](docs/Api/ShipmentReturnAssessmentApi.md#shipmentreturnassessmentpost) | **POST** /shipmentReturnAssessment | create a shipmentReturnAssessment
*ShipmentReturnErrorApi* | [**shipmentReturnErrorCountGet**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorcountget) | **GET** /shipmentReturnError/count | count shipmentReturnError
*ShipmentReturnErrorApi* | [**shipmentReturnErrorGet**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorget) | **GET** /shipmentReturnError | query shipmentReturnError
*ShipmentReturnErrorApi* | [**shipmentReturnErrorIdIdDelete**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorididdelete) | **DELETE** /shipmentReturnError/id/{id} | delete a shipmentReturnError
*ShipmentReturnErrorApi* | [**shipmentReturnErrorIdIdGet**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorididget) | **GET** /shipmentReturnError/id/{id} | query a specific shipmentReturnError
*ShipmentReturnErrorApi* | [**shipmentReturnErrorIdIdPut**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorididput) | **PUT** /shipmentReturnError/id/{id} | update a shipmentReturnError
*ShipmentReturnErrorApi* | [**shipmentReturnErrorPost**](docs/Api/ShipmentReturnErrorApi.md#shipmentreturnerrorpost) | **POST** /shipmentReturnError | create a shipmentReturnError
*ShipmentReturnReasonApi* | [**shipmentReturnReasonCountGet**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasoncountget) | **GET** /shipmentReturnReason/count | count shipmentReturnReason
*ShipmentReturnReasonApi* | [**shipmentReturnReasonGet**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasonget) | **GET** /shipmentReturnReason | query shipmentReturnReason
*ShipmentReturnReasonApi* | [**shipmentReturnReasonIdIdDelete**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasonididdelete) | **DELETE** /shipmentReturnReason/id/{id} | delete a shipmentReturnReason
*ShipmentReturnReasonApi* | [**shipmentReturnReasonIdIdGet**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasonididget) | **GET** /shipmentReturnReason/id/{id} | query a specific shipmentReturnReason
*ShipmentReturnReasonApi* | [**shipmentReturnReasonIdIdPut**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasonididput) | **PUT** /shipmentReturnReason/id/{id} | update a shipmentReturnReason
*ShipmentReturnReasonApi* | [**shipmentReturnReasonPost**](docs/Api/ShipmentReturnReasonApi.md#shipmentreturnreasonpost) | **POST** /shipmentReturnReason | create a shipmentReturnReason
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationCountGet**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationcountget) | **GET** /shipmentReturnRectification/count | count shipmentReturnRectification
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationGet**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationget) | **GET** /shipmentReturnRectification | query shipmentReturnRectification
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationIdIdDelete**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationididdelete) | **DELETE** /shipmentReturnRectification/id/{id} | delete a shipmentReturnRectification
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationIdIdGet**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationididget) | **GET** /shipmentReturnRectification/id/{id} | query a specific shipmentReturnRectification
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationIdIdPut**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationididput) | **PUT** /shipmentReturnRectification/id/{id} | update a shipmentReturnRectification
*ShipmentReturnRectificationApi* | [**shipmentReturnRectificationPost**](docs/Api/ShipmentReturnRectificationApi.md#shipmentreturnrectificationpost) | **POST** /shipmentReturnRectification | create a shipmentReturnRectification
*ShippingCarrierApi* | [**shippingCarrierCountGet**](docs/Api/ShippingCarrierApi.md#shippingcarriercountget) | **GET** /shippingCarrier/count | count shippingCarrier
*ShippingCarrierApi* | [**shippingCarrierGet**](docs/Api/ShippingCarrierApi.md#shippingcarrierget) | **GET** /shippingCarrier | query shippingCarrier
*ShippingCarrierApi* | [**shippingCarrierIdIdDelete**](docs/Api/ShippingCarrierApi.md#shippingcarrierididdelete) | **DELETE** /shippingCarrier/id/{id} | delete a shippingCarrier
*ShippingCarrierApi* | [**shippingCarrierIdIdGet**](docs/Api/ShippingCarrierApi.md#shippingcarrierididget) | **GET** /shippingCarrier/id/{id} | query a specific shippingCarrier
*ShippingCarrierApi* | [**shippingCarrierIdIdPut**](docs/Api/ShippingCarrierApi.md#shippingcarrierididput) | **PUT** /shippingCarrier/id/{id} | update a shippingCarrier
*ShippingCarrierApi* | [**shippingCarrierPost**](docs/Api/ShippingCarrierApi.md#shippingcarrierpost) | **POST** /shippingCarrier | create a shippingCarrier
*StorageLocationApi* | [**storageLocationCountGet**](docs/Api/StorageLocationApi.md#storagelocationcountget) | **GET** /storageLocation/count | count storageLocation
*StorageLocationApi* | [**storageLocationGet**](docs/Api/StorageLocationApi.md#storagelocationget) | **GET** /storageLocation | query storageLocation
*StorageLocationApi* | [**storageLocationIdIdActivatePost**](docs/Api/StorageLocationApi.md#storagelocationididactivatepost) | **POST** /storageLocation/id/{id}/activate | 
*StorageLocationApi* | [**storageLocationIdIdDeactivatePost**](docs/Api/StorageLocationApi.md#storagelocationididdeactivatepost) | **POST** /storageLocation/id/{id}/deactivate | 
*StorageLocationApi* | [**storageLocationIdIdDelete**](docs/Api/StorageLocationApi.md#storagelocationididdelete) | **DELETE** /storageLocation/id/{id} | delete a storageLocation
*StorageLocationApi* | [**storageLocationIdIdGet**](docs/Api/StorageLocationApi.md#storagelocationididget) | **GET** /storageLocation/id/{id} | query a specific storageLocation
*StorageLocationApi* | [**storageLocationIdIdPut**](docs/Api/StorageLocationApi.md#storagelocationididput) | **PUT** /storageLocation/id/{id} | update a storageLocation
*StorageLocationApi* | [**storageLocationPost**](docs/Api/StorageLocationApi.md#storagelocationpost) | **POST** /storageLocation | create a storageLocation
*StoragePlaceApi* | [**storagePlaceCountGet**](docs/Api/StoragePlaceApi.md#storageplacecountget) | **GET** /storagePlace/count | count storagePlace
*StoragePlaceApi* | [**storagePlaceGet**](docs/Api/StoragePlaceApi.md#storageplaceget) | **GET** /storagePlace | query storagePlace
*StoragePlaceApi* | [**storagePlaceIdIdGet**](docs/Api/StoragePlaceApi.md#storageplaceididget) | **GET** /storagePlace/id/{id} | query a specific storagePlace
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonCountGet**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasoncountget) | **GET** /storagePlaceBlockingReason/count | count storagePlaceBlockingReason
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonGet**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasonget) | **GET** /storagePlaceBlockingReason | query storagePlaceBlockingReason
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonIdIdDelete**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasonididdelete) | **DELETE** /storagePlaceBlockingReason/id/{id} | delete a storagePlaceBlockingReason
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonIdIdGet**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasonididget) | **GET** /storagePlaceBlockingReason/id/{id} | query a specific storagePlaceBlockingReason
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonIdIdPut**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasonididput) | **PUT** /storagePlaceBlockingReason/id/{id} | update a storagePlaceBlockingReason
*StoragePlaceBlockingReasonApi* | [**storagePlaceBlockingReasonPost**](docs/Api/StoragePlaceBlockingReasonApi.md#storageplaceblockingreasonpost) | **POST** /storagePlaceBlockingReason | create a storagePlaceBlockingReason
*StoragePlaceSizeApi* | [**storagePlaceSizeCountGet**](docs/Api/StoragePlaceSizeApi.md#storageplacesizecountget) | **GET** /storagePlaceSize/count | count storagePlaceSize
*StoragePlaceSizeApi* | [**storagePlaceSizeGet**](docs/Api/StoragePlaceSizeApi.md#storageplacesizeget) | **GET** /storagePlaceSize | query storagePlaceSize
*StoragePlaceSizeApi* | [**storagePlaceSizeIdIdDelete**](docs/Api/StoragePlaceSizeApi.md#storageplacesizeididdelete) | **DELETE** /storagePlaceSize/id/{id} | delete a storagePlaceSize
*StoragePlaceSizeApi* | [**storagePlaceSizeIdIdGet**](docs/Api/StoragePlaceSizeApi.md#storageplacesizeididget) | **GET** /storagePlaceSize/id/{id} | query a specific storagePlaceSize
*StoragePlaceSizeApi* | [**storagePlaceSizeIdIdPut**](docs/Api/StoragePlaceSizeApi.md#storageplacesizeididput) | **PUT** /storagePlaceSize/id/{id} | update a storagePlaceSize
*StoragePlaceSizeApi* | [**storagePlaceSizePost**](docs/Api/StoragePlaceSizeApi.md#storageplacesizepost) | **POST** /storagePlaceSize | create a storagePlaceSize
*SupplierApi* | [**supplierCountGet**](docs/Api/SupplierApi.md#suppliercountget) | **GET** /supplier/count | count supplier
*SupplierApi* | [**supplierGet**](docs/Api/SupplierApi.md#supplierget) | **GET** /supplier | query supplier
*SupplierApi* | [**supplierIdIdDelete**](docs/Api/SupplierApi.md#supplierididdelete) | **DELETE** /supplier/id/{id} | delete a supplier
*SupplierApi* | [**supplierIdIdDownloadImageGet**](docs/Api/SupplierApi.md#supplierididdownloadimageget) | **GET** /supplier/id/{id}/downloadImage | 
*SupplierApi* | [**supplierIdIdGet**](docs/Api/SupplierApi.md#supplierididget) | **GET** /supplier/id/{id} | query a specific supplier
*SupplierApi* | [**supplierIdIdPut**](docs/Api/SupplierApi.md#supplierididput) | **PUT** /supplier/id/{id} | update a supplier
*SupplierApi* | [**supplierIdIdUploadImagePost**](docs/Api/SupplierApi.md#supplierididuploadimagepost) | **POST** /supplier/id/{id}/uploadImage | 
*SupplierApi* | [**supplierPost**](docs/Api/SupplierApi.md#supplierpost) | **POST** /supplier | create a supplier
*SystemApi* | [**systemCreateDemoTestSystemPost**](docs/Api/SystemApi.md#systemcreatedemotestsystempost) | **POST** /system/createDemoTestSystem | 
*SystemApi* | [**systemDemoTestSystemInfoGet**](docs/Api/SystemApi.md#systemdemotestsysteminfoget) | **GET** /system/demoTestSystemInfo | 
*SystemApi* | [**systemLicensesGet**](docs/Api/SystemApi.md#systemlicensesget) | **GET** /system/licenses | 
*SystemApi* | [**systemPermissionsGet**](docs/Api/SystemApi.md#systempermissionsget) | **GET** /system/permissions | 
*TagApi* | [**tagCountGet**](docs/Api/TagApi.md#tagcountget) | **GET** /tag/count | count tag
*TagApi* | [**tagGet**](docs/Api/TagApi.md#tagget) | **GET** /tag | query tag
*TagApi* | [**tagIdIdDelete**](docs/Api/TagApi.md#tagididdelete) | **DELETE** /tag/id/{id} | delete a tag
*TagApi* | [**tagIdIdGet**](docs/Api/TagApi.md#tagididget) | **GET** /tag/id/{id} | query a specific tag
*TagApi* | [**tagIdIdPut**](docs/Api/TagApi.md#tagididput) | **PUT** /tag/id/{id} | update a tag
*TagApi* | [**tagPost**](docs/Api/TagApi.md#tagpost) | **POST** /tag | create a tag
*TaxApi* | [**taxConfigurePurchaseTaxesPost**](docs/Api/TaxApi.md#taxconfigurepurchasetaxespost) | **POST** /tax/configurePurchaseTaxes | 
*TaxApi* | [**taxConfigureSalesTaxesPost**](docs/Api/TaxApi.md#taxconfiguresalestaxespost) | **POST** /tax/configureSalesTaxes | 
*TaxApi* | [**taxCountGet**](docs/Api/TaxApi.md#taxcountget) | **GET** /tax/count | count tax
*TaxApi* | [**taxFindPurchaseTaxGet**](docs/Api/TaxApi.md#taxfindpurchasetaxget) | **GET** /tax/findPurchaseTax | 
*TaxApi* | [**taxFindSalesTaxGet**](docs/Api/TaxApi.md#taxfindsalestaxget) | **GET** /tax/findSalesTax | 
*TaxApi* | [**taxGet**](docs/Api/TaxApi.md#taxget) | **GET** /tax | query tax
*TaxApi* | [**taxIdIdDelete**](docs/Api/TaxApi.md#taxididdelete) | **DELETE** /tax/id/{id} | delete a tax
*TaxApi* | [**taxIdIdGet**](docs/Api/TaxApi.md#taxididget) | **GET** /tax/id/{id} | query a specific tax
*TaxApi* | [**taxIdIdPut**](docs/Api/TaxApi.md#taxididput) | **PUT** /tax/id/{id} | update a tax
*TaxApi* | [**taxPost**](docs/Api/TaxApi.md#taxpost) | **POST** /tax | create a tax
*TaxApi* | [**taxResetSystemTaxesPost**](docs/Api/TaxApi.md#taxresetsystemtaxespost) | **POST** /tax/resetSystemTaxes | 
*TaxDeterminationRuleApi* | [**taxDeterminationRuleCountGet**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationrulecountget) | **GET** /taxDeterminationRule/count | count taxDeterminationRule
*TaxDeterminationRuleApi* | [**taxDeterminationRuleGet**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationruleget) | **GET** /taxDeterminationRule | query taxDeterminationRule
*TaxDeterminationRuleApi* | [**taxDeterminationRuleIdIdDelete**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationruleididdelete) | **DELETE** /taxDeterminationRule/id/{id} | delete a taxDeterminationRule
*TaxDeterminationRuleApi* | [**taxDeterminationRuleIdIdGet**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationruleididget) | **GET** /taxDeterminationRule/id/{id} | query a specific taxDeterminationRule
*TaxDeterminationRuleApi* | [**taxDeterminationRuleIdIdPut**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationruleididput) | **PUT** /taxDeterminationRule/id/{id} | update a taxDeterminationRule
*TaxDeterminationRuleApi* | [**taxDeterminationRulePost**](docs/Api/TaxDeterminationRuleApi.md#taxdeterminationrulepost) | **POST** /taxDeterminationRule | create a taxDeterminationRule
*TermOfPaymentApi* | [**termOfPaymentCountGet**](docs/Api/TermOfPaymentApi.md#termofpaymentcountget) | **GET** /termOfPayment/count | count termOfPayment
*TermOfPaymentApi* | [**termOfPaymentGet**](docs/Api/TermOfPaymentApi.md#termofpaymentget) | **GET** /termOfPayment | query termOfPayment
*TermOfPaymentApi* | [**termOfPaymentIdIdDelete**](docs/Api/TermOfPaymentApi.md#termofpaymentididdelete) | **DELETE** /termOfPayment/id/{id} | delete a termOfPayment
*TermOfPaymentApi* | [**termOfPaymentIdIdGet**](docs/Api/TermOfPaymentApi.md#termofpaymentididget) | **GET** /termOfPayment/id/{id} | query a specific termOfPayment
*TermOfPaymentApi* | [**termOfPaymentIdIdPut**](docs/Api/TermOfPaymentApi.md#termofpaymentididput) | **PUT** /termOfPayment/id/{id} | update a termOfPayment
*TermOfPaymentApi* | [**termOfPaymentPost**](docs/Api/TermOfPaymentApi.md#termofpaymentpost) | **POST** /termOfPayment | create a termOfPayment
*TicketApi* | [**ticketCountGet**](docs/Api/TicketApi.md#ticketcountget) | **GET** /ticket/count | count ticket
*TicketApi* | [**ticketGet**](docs/Api/TicketApi.md#ticketget) | **GET** /ticket | query ticket
*TicketApi* | [**ticketIdIdCreatePublicPagePost**](docs/Api/TicketApi.md#ticketididcreatepublicpagepost) | **POST** /ticket/id/{id}/createPublicPage | 
*TicketApi* | [**ticketIdIdDelete**](docs/Api/TicketApi.md#ticketididdelete) | **DELETE** /ticket/id/{id} | delete a ticket
*TicketApi* | [**ticketIdIdDisablePublicPagePost**](docs/Api/TicketApi.md#ticketididdisablepublicpagepost) | **POST** /ticket/id/{id}/disablePublicPage | 
*TicketApi* | [**ticketIdIdGet**](docs/Api/TicketApi.md#ticketididget) | **GET** /ticket/id/{id} | query a specific ticket
*TicketApi* | [**ticketIdIdLinkSalesOrderPost**](docs/Api/TicketApi.md#ticketididlinksalesorderpost) | **POST** /ticket/id/{id}/linkSalesOrder | 
*TicketApi* | [**ticketIdIdPut**](docs/Api/TicketApi.md#ticketididput) | **PUT** /ticket/id/{id} | update a ticket
*TicketApi* | [**ticketIdIdUnlinkSalesOrderPost**](docs/Api/TicketApi.md#ticketididunlinksalesorderpost) | **POST** /ticket/id/{id}/unlinkSalesOrder | 
*TicketApi* | [**ticketPost**](docs/Api/TicketApi.md#ticketpost) | **POST** /ticket | create a ticket
*TicketAssignmentRuleApi* | [**ticketAssignmentRuleCountGet**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentrulecountget) | **GET** /ticketAssignmentRule/count | count ticketAssignmentRule
*TicketAssignmentRuleApi* | [**ticketAssignmentRuleGet**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentruleget) | **GET** /ticketAssignmentRule | query ticketAssignmentRule
*TicketAssignmentRuleApi* | [**ticketAssignmentRuleIdIdDelete**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentruleididdelete) | **DELETE** /ticketAssignmentRule/id/{id} | delete a ticketAssignmentRule
*TicketAssignmentRuleApi* | [**ticketAssignmentRuleIdIdGet**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentruleididget) | **GET** /ticketAssignmentRule/id/{id} | query a specific ticketAssignmentRule
*TicketAssignmentRuleApi* | [**ticketAssignmentRuleIdIdPut**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentruleididput) | **PUT** /ticketAssignmentRule/id/{id} | update a ticketAssignmentRule
*TicketAssignmentRuleApi* | [**ticketAssignmentRulePost**](docs/Api/TicketAssignmentRuleApi.md#ticketassignmentrulepost) | **POST** /ticketAssignmentRule | create a ticketAssignmentRule
*TicketCategoryApi* | [**ticketCategoryCountGet**](docs/Api/TicketCategoryApi.md#ticketcategorycountget) | **GET** /ticketCategory/count | count ticketCategory
*TicketCategoryApi* | [**ticketCategoryGet**](docs/Api/TicketCategoryApi.md#ticketcategoryget) | **GET** /ticketCategory | query ticketCategory
*TicketCategoryApi* | [**ticketCategoryIdIdGet**](docs/Api/TicketCategoryApi.md#ticketcategoryididget) | **GET** /ticketCategory/id/{id} | query a specific ticketCategory
*TicketChannelApi* | [**ticketChannelCountGet**](docs/Api/TicketChannelApi.md#ticketchannelcountget) | **GET** /ticketChannel/count | count ticketChannel
*TicketChannelApi* | [**ticketChannelGet**](docs/Api/TicketChannelApi.md#ticketchannelget) | **GET** /ticketChannel | query ticketChannel
*TicketChannelApi* | [**ticketChannelIdIdDelete**](docs/Api/TicketChannelApi.md#ticketchannelididdelete) | **DELETE** /ticketChannel/id/{id} | delete a ticketChannel
*TicketChannelApi* | [**ticketChannelIdIdGet**](docs/Api/TicketChannelApi.md#ticketchannelididget) | **GET** /ticketChannel/id/{id} | query a specific ticketChannel
*TicketChannelApi* | [**ticketChannelIdIdPut**](docs/Api/TicketChannelApi.md#ticketchannelididput) | **PUT** /ticketChannel/id/{id} | update a ticketChannel
*TicketChannelApi* | [**ticketChannelPost**](docs/Api/TicketChannelApi.md#ticketchannelpost) | **POST** /ticketChannel | create a ticketChannel
*TicketFaqApi* | [**ticketFaqCountGet**](docs/Api/TicketFaqApi.md#ticketfaqcountget) | **GET** /ticketFaq/count | count ticketFaq
*TicketFaqApi* | [**ticketFaqGet**](docs/Api/TicketFaqApi.md#ticketfaqget) | **GET** /ticketFaq | query ticketFaq
*TicketFaqApi* | [**ticketFaqIdIdDelete**](docs/Api/TicketFaqApi.md#ticketfaqididdelete) | **DELETE** /ticketFaq/id/{id} | delete a ticketFaq
*TicketFaqApi* | [**ticketFaqIdIdGet**](docs/Api/TicketFaqApi.md#ticketfaqididget) | **GET** /ticketFaq/id/{id} | query a specific ticketFaq
*TicketFaqApi* | [**ticketFaqIdIdPut**](docs/Api/TicketFaqApi.md#ticketfaqididput) | **PUT** /ticketFaq/id/{id} | update a ticketFaq
*TicketFaqApi* | [**ticketFaqPost**](docs/Api/TicketFaqApi.md#ticketfaqpost) | **POST** /ticketFaq | create a ticketFaq
*TicketPoolingGroupApi* | [**ticketPoolingGroupCountGet**](docs/Api/TicketPoolingGroupApi.md#ticketpoolinggroupcountget) | **GET** /ticketPoolingGroup/count | count ticketPoolingGroup
*TicketPoolingGroupApi* | [**ticketPoolingGroupGet**](docs/Api/TicketPoolingGroupApi.md#ticketpoolinggroupget) | **GET** /ticketPoolingGroup | query ticketPoolingGroup
*TicketPoolingGroupApi* | [**ticketPoolingGroupIdIdGet**](docs/Api/TicketPoolingGroupApi.md#ticketpoolinggroupididget) | **GET** /ticketPoolingGroup/id/{id} | query a specific ticketPoolingGroup
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementCountGet**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementcountget) | **GET** /ticketServiceLevelAgreement/count | count ticketServiceLevelAgreement
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementGet**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementget) | **GET** /ticketServiceLevelAgreement | query ticketServiceLevelAgreement
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementIdIdDelete**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementididdelete) | **DELETE** /ticketServiceLevelAgreement/id/{id} | delete a ticketServiceLevelAgreement
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementIdIdGet**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementididget) | **GET** /ticketServiceLevelAgreement/id/{id} | query a specific ticketServiceLevelAgreement
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementIdIdPut**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementididput) | **PUT** /ticketServiceLevelAgreement/id/{id} | update a ticketServiceLevelAgreement
*TicketServiceLevelAgreementApi* | [**ticketServiceLevelAgreementPost**](docs/Api/TicketServiceLevelAgreementApi.md#ticketservicelevelagreementpost) | **POST** /ticketServiceLevelAgreement | create a ticketServiceLevelAgreement
*TicketStatusApi* | [**ticketStatusCountGet**](docs/Api/TicketStatusApi.md#ticketstatuscountget) | **GET** /ticketStatus/count | count ticketStatus
*TicketStatusApi* | [**ticketStatusGet**](docs/Api/TicketStatusApi.md#ticketstatusget) | **GET** /ticketStatus | query ticketStatus
*TicketStatusApi* | [**ticketStatusIdIdDelete**](docs/Api/TicketStatusApi.md#ticketstatusididdelete) | **DELETE** /ticketStatus/id/{id} | delete a ticketStatus
*TicketStatusApi* | [**ticketStatusIdIdGet**](docs/Api/TicketStatusApi.md#ticketstatusididget) | **GET** /ticketStatus/id/{id} | query a specific ticketStatus
*TicketStatusApi* | [**ticketStatusIdIdPut**](docs/Api/TicketStatusApi.md#ticketstatusididput) | **PUT** /ticketStatus/id/{id} | update a ticketStatus
*TicketStatusApi* | [**ticketStatusPost**](docs/Api/TicketStatusApi.md#ticketstatuspost) | **POST** /ticketStatus | create a ticketStatus
*TicketTypeApi* | [**ticketTypeCountGet**](docs/Api/TicketTypeApi.md#tickettypecountget) | **GET** /ticketType/count | count ticketType
*TicketTypeApi* | [**ticketTypeGet**](docs/Api/TicketTypeApi.md#tickettypeget) | **GET** /ticketType | query ticketType
*TicketTypeApi* | [**ticketTypeIdIdDelete**](docs/Api/TicketTypeApi.md#tickettypeididdelete) | **DELETE** /ticketType/id/{id} | delete a ticketType
*TicketTypeApi* | [**ticketTypeIdIdGet**](docs/Api/TicketTypeApi.md#tickettypeididget) | **GET** /ticketType/id/{id} | query a specific ticketType
*TicketTypeApi* | [**ticketTypeIdIdPut**](docs/Api/TicketTypeApi.md#tickettypeididput) | **PUT** /ticketType/id/{id} | update a ticketType
*TicketTypeApi* | [**ticketTypePost**](docs/Api/TicketTypeApi.md#tickettypepost) | **POST** /ticketType | create a ticketType
*TitleApi* | [**titleCountGet**](docs/Api/TitleApi.md#titlecountget) | **GET** /title/count | count title
*TitleApi* | [**titleGet**](docs/Api/TitleApi.md#titleget) | **GET** /title | query title
*TitleApi* | [**titleIdIdDelete**](docs/Api/TitleApi.md#titleididdelete) | **DELETE** /title/id/{id} | delete a title
*TitleApi* | [**titleIdIdGet**](docs/Api/TitleApi.md#titleididget) | **GET** /title/id/{id} | query a specific title
*TitleApi* | [**titleIdIdPut**](docs/Api/TitleApi.md#titleididput) | **PUT** /title/id/{id} | update a title
*TitleApi* | [**titlePost**](docs/Api/TitleApi.md#titlepost) | **POST** /title | create a title
*TranslationApi* | [**translationCountGet**](docs/Api/TranslationApi.md#translationcountget) | **GET** /translation/count | count translation
*TranslationApi* | [**translationGet**](docs/Api/TranslationApi.md#translationget) | **GET** /translation | query translation
*TranslationApi* | [**translationIdIdDelete**](docs/Api/TranslationApi.md#translationididdelete) | **DELETE** /translation/id/{id} | delete a translation
*TranslationApi* | [**translationIdIdGet**](docs/Api/TranslationApi.md#translationididget) | **GET** /translation/id/{id} | query a specific translation
*TranslationApi* | [**translationIdIdPut**](docs/Api/TranslationApi.md#translationididput) | **PUT** /translation/id/{id} | update a translation
*TranslationApi* | [**translationPost**](docs/Api/TranslationApi.md#translationpost) | **POST** /translation | create a translation
*TransportationOrderApi* | [**transportationOrderCountGet**](docs/Api/TransportationOrderApi.md#transportationordercountget) | **GET** /transportationOrder/count | count transportationOrder
*TransportationOrderApi* | [**transportationOrderGet**](docs/Api/TransportationOrderApi.md#transportationorderget) | **GET** /transportationOrder | query transportationOrder
*TransportationOrderApi* | [**transportationOrderIdIdCreatePickPost**](docs/Api/TransportationOrderApi.md#transportationorderididcreatepickpost) | **POST** /transportationOrder/id/{id}/createPick | 
*TransportationOrderApi* | [**transportationOrderIdIdCreatePickingListPost**](docs/Api/TransportationOrderApi.md#transportationorderididcreatepickinglistpost) | **POST** /transportationOrder/id/{id}/createPickingList | 
*TransportationOrderApi* | [**transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost**](docs/Api/TransportationOrderApi.md#transportationorderididcreatetransportationorderfromunpickedrecordspost) | **POST** /transportationOrder/id/{id}/createTransportationOrderFromUnpickedRecords | 
*TransportationOrderApi* | [**transportationOrderIdIdDelete**](docs/Api/TransportationOrderApi.md#transportationorderididdelete) | **DELETE** /transportationOrder/id/{id} | delete a transportationOrder
*TransportationOrderApi* | [**transportationOrderIdIdGet**](docs/Api/TransportationOrderApi.md#transportationorderididget) | **GET** /transportationOrder/id/{id} | query a specific transportationOrder
*TransportationOrderApi* | [**transportationOrderIdIdInternalTransportReferencesForPickUpGet**](docs/Api/TransportationOrderApi.md#transportationorderididinternaltransportreferencesforpickupget) | **GET** /transportationOrder/id/{id}/internalTransportReferencesForPickUp | 
*TransportationOrderApi* | [**transportationOrderIdIdPickPickPost**](docs/Api/TransportationOrderApi.md#transportationorderididpickpickpost) | **POST** /transportationOrder/id/{id}/pickPick | 
*TransportationOrderApi* | [**transportationOrderIdIdPut**](docs/Api/TransportationOrderApi.md#transportationorderididput) | **PUT** /transportationOrder/id/{id} | update a transportationOrder
*TransportationOrderApi* | [**transportationOrderIdIdPutDownInternalTransportReferencePost**](docs/Api/TransportationOrderApi.md#transportationorderididputdowninternaltransportreferencepost) | **POST** /transportationOrder/id/{id}/putDownInternalTransportReference | 
*TransportationOrderApi* | [**transportationOrderPost**](docs/Api/TransportationOrderApi.md#transportationorderpost) | **POST** /transportationOrder | create a transportationOrder
*UnitApi* | [**unitCountGet**](docs/Api/UnitApi.md#unitcountget) | **GET** /unit/count | count unit
*UnitApi* | [**unitGet**](docs/Api/UnitApi.md#unitget) | **GET** /unit | query unit
*UnitApi* | [**unitIdIdDelete**](docs/Api/UnitApi.md#unitididdelete) | **DELETE** /unit/id/{id} | delete a unit
*UnitApi* | [**unitIdIdGet**](docs/Api/UnitApi.md#unitididget) | **GET** /unit/id/{id} | query a specific unit
*UnitApi* | [**unitIdIdPut**](docs/Api/UnitApi.md#unitididput) | **PUT** /unit/id/{id} | update a unit
*UnitApi* | [**unitPost**](docs/Api/UnitApi.md#unitpost) | **POST** /unit | create a unit
*UserApi* | [**userCountGet**](docs/Api/UserApi.md#usercountget) | **GET** /user/count | count user
*UserApi* | [**userCurrentUserGet**](docs/Api/UserApi.md#usercurrentuserget) | **GET** /user/currentUser | 
*UserApi* | [**userGet**](docs/Api/UserApi.md#userget) | **GET** /user | query user
*UserApi* | [**userIdIdDelete**](docs/Api/UserApi.md#userididdelete) | **DELETE** /user/id/{id} | delete a user
*UserApi* | [**userIdIdGet**](docs/Api/UserApi.md#userididget) | **GET** /user/id/{id} | query a specific user
*UserApi* | [**userIdIdInvitePost**](docs/Api/UserApi.md#userididinvitepost) | **POST** /user/id/{id}/invite | 
*UserApi* | [**userIdIdPut**](docs/Api/UserApi.md#userididput) | **PUT** /user/id/{id} | update a user
*UserApi* | [**userIdIdUserImageGet**](docs/Api/UserApi.md#userididuserimageget) | **GET** /user/id/{id}/userImage | 
*UserApi* | [**userIdIdUserImageThumbnailGet**](docs/Api/UserApi.md#userididuserimagethumbnailget) | **GET** /user/id/{id}/userImageThumbnail | 
*UserApi* | [**userPost**](docs/Api/UserApi.md#userpost) | **POST** /user | create a user
*UserRoleApi* | [**userRoleCountGet**](docs/Api/UserRoleApi.md#userrolecountget) | **GET** /userRole/count | count userRole
*UserRoleApi* | [**userRoleDisableUserRolesDuringTrialPost**](docs/Api/UserRoleApi.md#userroledisableuserrolesduringtrialpost) | **POST** /userRole/disableUserRolesDuringTrial | 
*UserRoleApi* | [**userRoleEnableUserRolesDuringTrialPost**](docs/Api/UserRoleApi.md#userroleenableuserrolesduringtrialpost) | **POST** /userRole/enableUserRolesDuringTrial | 
*UserRoleApi* | [**userRoleGet**](docs/Api/UserRoleApi.md#userroleget) | **GET** /userRole | query userRole
*UserRoleApi* | [**userRoleIdIdDelete**](docs/Api/UserRoleApi.md#userroleididdelete) | **DELETE** /userRole/id/{id} | delete a userRole
*UserRoleApi* | [**userRoleIdIdGet**](docs/Api/UserRoleApi.md#userroleididget) | **GET** /userRole/id/{id} | query a specific userRole
*UserRoleApi* | [**userRoleIdIdPut**](docs/Api/UserRoleApi.md#userroleididput) | **PUT** /userRole/id/{id} | update a userRole
*UserRoleApi* | [**userRolePost**](docs/Api/UserRoleApi.md#userrolepost) | **POST** /userRole | create a userRole
*VariantArticleApi* | [**variantArticleCountGet**](docs/Api/VariantArticleApi.md#variantarticlecountget) | **GET** /variantArticle/count | count variantArticle
*VariantArticleApi* | [**variantArticleGet**](docs/Api/VariantArticleApi.md#variantarticleget) | **GET** /variantArticle | query variantArticle
*VariantArticleApi* | [**variantArticleIdIdDelete**](docs/Api/VariantArticleApi.md#variantarticleididdelete) | **DELETE** /variantArticle/id/{id} | delete a variantArticle
*VariantArticleApi* | [**variantArticleIdIdGet**](docs/Api/VariantArticleApi.md#variantarticleididget) | **GET** /variantArticle/id/{id} | query a specific variantArticle
*VariantArticleApi* | [**variantArticleIdIdPut**](docs/Api/VariantArticleApi.md#variantarticleididput) | **PUT** /variantArticle/id/{id} | update a variantArticle
*VariantArticleApi* | [**variantArticlePost**](docs/Api/VariantArticleApi.md#variantarticlepost) | **POST** /variantArticle | create a variantArticle
*VariantArticleAttributeApi* | [**variantArticleAttributeCountGet**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributecountget) | **GET** /variantArticleAttribute/count | count variantArticleAttribute
*VariantArticleAttributeApi* | [**variantArticleAttributeGet**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributeget) | **GET** /variantArticleAttribute | query variantArticleAttribute
*VariantArticleAttributeApi* | [**variantArticleAttributeIdIdDelete**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributeididdelete) | **DELETE** /variantArticleAttribute/id/{id} | delete a variantArticleAttribute
*VariantArticleAttributeApi* | [**variantArticleAttributeIdIdGet**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributeididget) | **GET** /variantArticleAttribute/id/{id} | query a specific variantArticleAttribute
*VariantArticleAttributeApi* | [**variantArticleAttributeIdIdPut**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributeididput) | **PUT** /variantArticleAttribute/id/{id} | update a variantArticleAttribute
*VariantArticleAttributeApi* | [**variantArticleAttributePost**](docs/Api/VariantArticleAttributeApi.md#variantarticleattributepost) | **POST** /variantArticleAttribute | create a variantArticleAttribute
*VariantArticleVariantApi* | [**variantArticleVariantCountGet**](docs/Api/VariantArticleVariantApi.md#variantarticlevariantcountget) | **GET** /variantArticleVariant/count | count variantArticleVariant
*VariantArticleVariantApi* | [**variantArticleVariantGet**](docs/Api/VariantArticleVariantApi.md#variantarticlevariantget) | **GET** /variantArticleVariant | query variantArticleVariant
*VariantArticleVariantApi* | [**variantArticleVariantIdIdGet**](docs/Api/VariantArticleVariantApi.md#variantarticlevariantididget) | **GET** /variantArticleVariant/id/{id} | query a specific variantArticleVariant
*WarehouseApi* | [**warehouseCountGet**](docs/Api/WarehouseApi.md#warehousecountget) | **GET** /warehouse/count | count warehouse
*WarehouseApi* | [**warehouseGet**](docs/Api/WarehouseApi.md#warehouseget) | **GET** /warehouse | query warehouse
*WarehouseApi* | [**warehouseIdIdActivatePost**](docs/Api/WarehouseApi.md#warehouseididactivatepost) | **POST** /warehouse/id/{id}/activate | 
*WarehouseApi* | [**warehouseIdIdDeactivatePost**](docs/Api/WarehouseApi.md#warehouseididdeactivatepost) | **POST** /warehouse/id/{id}/deactivate | 
*WarehouseApi* | [**warehouseIdIdDelete**](docs/Api/WarehouseApi.md#warehouseididdelete) | **DELETE** /warehouse/id/{id} | delete a warehouse
*WarehouseApi* | [**warehouseIdIdGet**](docs/Api/WarehouseApi.md#warehouseididget) | **GET** /warehouse/id/{id} | query a specific warehouse
*WarehouseApi* | [**warehouseIdIdPut**](docs/Api/WarehouseApi.md#warehouseididput) | **PUT** /warehouse/id/{id} | update a warehouse
*WarehouseApi* | [**warehousePost**](docs/Api/WarehouseApi.md#warehousepost) | **POST** /warehouse | create a warehouse
*WarehouseStockApi* | [**warehouseStockCountGet**](docs/Api/WarehouseStockApi.md#warehousestockcountget) | **GET** /warehouseStock/count | count warehouseStock
*WarehouseStockApi* | [**warehouseStockGet**](docs/Api/WarehouseStockApi.md#warehousestockget) | **GET** /warehouseStock | query warehouseStock
*WarehouseStockApi* | [**warehouseStockIdIdGet**](docs/Api/WarehouseStockApi.md#warehousestockididget) | **GET** /warehouseStock/id/{id} | query a specific warehouseStock
*WarehouseStockMovementApi* | [**warehouseStockMovementBookDirectStockTransferPost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbookdirectstocktransferpost) | **POST** /warehouseStockMovement/bookDirectStockTransfer | 
*WarehouseStockMovementApi* | [**warehouseStockMovementBookFromLoadingEquipmentPlacePost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbookfromloadingequipmentplacepost) | **POST** /warehouseStockMovement/bookFromLoadingEquipmentPlace | 
*WarehouseStockMovementApi* | [**warehouseStockMovementBookIncomingMovementPost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbookincomingmovementpost) | **POST** /warehouseStockMovement/bookIncomingMovement | 
*WarehouseStockMovementApi* | [**warehouseStockMovementBookOntoInternalTransportReferencePost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbookontointernaltransportreferencepost) | **POST** /warehouseStockMovement/bookOntoInternalTransportReference | 
*WarehouseStockMovementApi* | [**warehouseStockMovementBookOutgoingMovementPost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbookoutgoingmovementpost) | **POST** /warehouseStockMovement/bookOutgoingMovement | 
*WarehouseStockMovementApi* | [**warehouseStockMovementBookToLoadingEquipmentPlacePost**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementbooktoloadingequipmentplacepost) | **POST** /warehouseStockMovement/bookToLoadingEquipmentPlace | 
*WarehouseStockMovementApi* | [**warehouseStockMovementCountGet**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementcountget) | **GET** /warehouseStockMovement/count | count warehouseStockMovement
*WarehouseStockMovementApi* | [**warehouseStockMovementGet**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementget) | **GET** /warehouseStockMovement | query warehouseStockMovement
*WarehouseStockMovementApi* | [**warehouseStockMovementIdIdGet**](docs/Api/WarehouseStockMovementApi.md#warehousestockmovementididget) | **GET** /warehouseStockMovement/id/{id} | query a specific warehouseStockMovement
*WebhookApi* | [**webhookCountGet**](docs/Api/WebhookApi.md#webhookcountget) | **GET** /webhook/count | count webhook
*WebhookApi* | [**webhookGet**](docs/Api/WebhookApi.md#webhookget) | **GET** /webhook | query webhook
*WebhookApi* | [**webhookIdIdDelete**](docs/Api/WebhookApi.md#webhookididdelete) | **DELETE** /webhook/id/{id} | delete a webhook
*WebhookApi* | [**webhookIdIdGet**](docs/Api/WebhookApi.md#webhookididget) | **GET** /webhook/id/{id} | query a specific webhook
*WebhookApi* | [**webhookIdIdPut**](docs/Api/WebhookApi.md#webhookididput) | **PUT** /webhook/id/{id} | update a webhook
*WebhookApi* | [**webhookPost**](docs/Api/WebhookApi.md#webhookpost) | **POST** /webhook | create a webhook
*WeclappOsApi* | [**weclappOsCountGet**](docs/Api/WeclappOsApi.md#weclapposcountget) | **GET** /weclappOs/count | count weclappOs
*WeclappOsApi* | [**weclappOsGet**](docs/Api/WeclappOsApi.md#weclapposget) | **GET** /weclappOs | query weclappOs
*WeclappOsApi* | [**weclappOsIdIdDelete**](docs/Api/WeclappOsApi.md#weclapposididdelete) | **DELETE** /weclappOs/id/{id} | delete a weclappOs
*WeclappOsApi* | [**weclappOsIdIdGet**](docs/Api/WeclappOsApi.md#weclapposididget) | **GET** /weclappOs/id/{id} | query a specific weclappOs
*WeclappOsApi* | [**weclappOsIdIdPut**](docs/Api/WeclappOsApi.md#weclapposididput) | **PUT** /weclappOs/id/{id} | update a weclappOs
*WeclappOsApi* | [**weclappOsPost**](docs/Api/WeclappOsApi.md#weclappospost) | **POST** /weclappOs | create a weclappOs

## Models

- [AbstractBillOfMaterial](docs/Model/AbstractBillOfMaterial.md)
- [AbstractBookRecord](docs/Model/AbstractBookRecord.md)
- [AbstractEntity](docs/Model/AbstractEntity.md)
- [AbstractEntityWithCustomAttributes](docs/Model/AbstractEntityWithCustomAttributes.md)
- [AbstractParty](docs/Model/AbstractParty.md)
- [AccountingTransaction](docs/Model/AccountingTransaction.md)
- [AccountingTransactionBatchBookingPost200Response](docs/Model/AccountingTransactionBatchBookingPost200Response.md)
- [AccountingTransactionBatchBookingPostRequest](docs/Model/AccountingTransactionBatchBookingPostRequest.md)
- [AccountingTransactionBatchBookingPostRequestBatchBookingDto](docs/Model/AccountingTransactionBatchBookingPostRequestBatchBookingDto.md)
- [AccountingTransactionCountGet200Response](docs/Model/AccountingTransactionCountGet200Response.md)
- [AccountingTransactionDetail](docs/Model/AccountingTransactionDetail.md)
- [AccountingTransactionGet200Response](docs/Model/AccountingTransactionGet200Response.md)
- [AccountingTransactionStatus](docs/Model/AccountingTransactionStatus.md)
- [Address](docs/Model/Address.md)
- [AdvancePaymentStatus](docs/Model/AdvancePaymentStatus.md)
- [AggregatePackagingUnit](docs/Model/AggregatePackagingUnit.md)
- [AggregateStock](docs/Model/AggregateStock.md)
- [Amount](docs/Model/Amount.md)
- [ApiProblem](docs/Model/ApiProblem.md)
- [ApiProblemType](docs/Model/ApiProblemType.md)
- [ArchivedEmail](docs/Model/ArchivedEmail.md)
- [ArchivedEmailGet200Response](docs/Model/ArchivedEmailGet200Response.md)
- [ArchivedEmailIdIdRemoveReferencePostRequest](docs/Model/ArchivedEmailIdIdRemoveReferencePostRequest.md)
- [Article](docs/Model/Article.md)
- [ArticleAccountingCodeGet200Response](docs/Model/ArticleAccountingCodeGet200Response.md)
- [ArticleAlternativeQuantity](docs/Model/ArticleAlternativeQuantity.md)
- [ArticleCalculationPrice](docs/Model/ArticleCalculationPrice.md)
- [ArticleCalculationPriceType](docs/Model/ArticleCalculationPriceType.md)
- [ArticleCategory](docs/Model/ArticleCategory.md)
- [ArticleCategoryGet200Response](docs/Model/ArticleCategoryGet200Response.md)
- [ArticleGet200Response](docs/Model/ArticleGet200Response.md)
- [ArticleGet200ResponseAdditionalProperties](docs/Model/ArticleGet200ResponseAdditionalProperties.md)
- [ArticleIdIdChangeUnitPostRequest](docs/Model/ArticleIdIdChangeUnitPostRequest.md)
- [ArticleIdIdCreateDatasheetPdfPostRequest](docs/Model/ArticleIdIdCreateDatasheetPdfPostRequest.md)
- [ArticleIdIdCreateLabelPdfPostRequest](docs/Model/ArticleIdIdCreateLabelPdfPostRequest.md)
- [ArticleIdIdPackagingUnitStructureGet200Response](docs/Model/ArticleIdIdPackagingUnitStructureGet200Response.md)
- [ArticleImage](docs/Model/ArticleImage.md)
- [ArticleItemGroup](docs/Model/ArticleItemGroup.md)
- [ArticleItemGroupGet200Response](docs/Model/ArticleItemGroupGet200Response.md)
- [ArticleItemGroupItem](docs/Model/ArticleItemGroupItem.md)
- [ArticlePrice](docs/Model/ArticlePrice.md)
- [ArticlePriceGet200Response](docs/Model/ArticlePriceGet200Response.md)
- [ArticlePriceWithoutArticleReference](docs/Model/ArticlePriceWithoutArticleReference.md)
- [ArticlePriceWithoutSalesChannel](docs/Model/ArticlePriceWithoutSalesChannel.md)
- [ArticleSupplySource](docs/Model/ArticleSupplySource.md)
- [ArticleSupplySourceGet200Response](docs/Model/ArticleSupplySourceGet200Response.md)
- [ArticleSupplySourceGet200ResponseAdditionalProperties](docs/Model/ArticleSupplySourceGet200ResponseAdditionalProperties.md)
- [ArticleType](docs/Model/ArticleType.md)
- [Attendance](docs/Model/Attendance.md)
- [AttendanceCurrentAttendanceGet200Response](docs/Model/AttendanceCurrentAttendanceGet200Response.md)
- [AttendanceGet200Response](docs/Model/AttendanceGet200Response.md)
- [BalanceSheetItem](docs/Model/BalanceSheetItem.md)
- [BankAccount](docs/Model/BankAccount.md)
- [BankAccountGet200Response](docs/Model/BankAccountGet200Response.md)
- [BaseArticle](docs/Model/BaseArticle.md)
- [BaseMinimalRecordItem](docs/Model/BaseMinimalRecordItem.md)
- [BasePick](docs/Model/BasePick.md)
- [BasePurchaseRecord](docs/Model/BasePurchaseRecord.md)
- [BaseRecord](docs/Model/BaseRecord.md)
- [BaseRecordItem](docs/Model/BaseRecordItem.md)
- [BaseRecordItemWithMoney](docs/Model/BaseRecordItemWithMoney.md)
- [BaseRecordItemWithPrintSettings](docs/Model/BaseRecordItemWithPrintSettings.md)
- [BaseRecordWithMoney](docs/Model/BaseRecordWithMoney.md)
- [BaseSalesRecord](docs/Model/BaseSalesRecord.md)
- [BaseSalesRecordItemWithCost](docs/Model/BaseSalesRecordItemWithCost.md)
- [BaseSalesRecordItemWithService](docs/Model/BaseSalesRecordItemWithService.md)
- [BaseSalesRecordWithAddresses](docs/Model/BaseSalesRecordWithAddresses.md)
- [BaseShipment](docs/Model/BaseShipment.md)
- [BaseShippingCostItem](docs/Model/BaseShippingCostItem.md)
- [BatchBookingRecord](docs/Model/BatchBookingRecord.md)
- [BatchNumber](docs/Model/BatchNumber.md)
- [BatchNumberGet200Response](docs/Model/BatchNumberGet200Response.md)
- [BatchSerialNumber](docs/Model/BatchSerialNumber.md)
- [BillOfMaterial](docs/Model/BillOfMaterial.md)
- [BillUntil](docs/Model/BillUntil.md)
- [BillableInvoiceStatus](docs/Model/BillableInvoiceStatus.md)
- [BlanketPurchaseOrder](docs/Model/BlanketPurchaseOrder.md)
- [BlanketPurchaseOrderGet200Response](docs/Model/BlanketPurchaseOrderGet200Response.md)
- [BlanketPurchaseOrderIdIdGenerateReleasesPost200Response](docs/Model/BlanketPurchaseOrderIdIdGenerateReleasesPost200Response.md)
- [BlanketPurchaseOrderIdIdGenerateReleasesPostRequest](docs/Model/BlanketPurchaseOrderIdIdGenerateReleasesPostRequest.md)
- [BlanketPurchaseOrderStatusHistory](docs/Model/BlanketPurchaseOrderStatusHistory.md)
- [BlanketPurchaseOrderStatusType](docs/Model/BlanketPurchaseOrderStatusType.md)
- [BookingType](docs/Model/BookingType.md)
- [CalculationType](docs/Model/CalculationType.md)
- [Calendar](docs/Model/Calendar.md)
- [CalendarEvent](docs/Model/CalendarEvent.md)
- [CalendarEventAttendee](docs/Model/CalendarEventAttendee.md)
- [CalendarEventGet200Response](docs/Model/CalendarEventGet200Response.md)
- [CalendarGet200Response](docs/Model/CalendarGet200Response.md)
- [CalendarIdIdDeleteCalendarAndMoveEventsPostRequest](docs/Model/CalendarIdIdDeleteCalendarAndMoveEventsPostRequest.md)
- [CalendarSharingPermissionType](docs/Model/CalendarSharingPermissionType.md)
- [CalendarSharingPermissions](docs/Model/CalendarSharingPermissions.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignGet200Response](docs/Model/CampaignGet200Response.md)
- [CampaignParticipant](docs/Model/CampaignParticipant.md)
- [CampaignParticipantGet200Response](docs/Model/CampaignParticipantGet200Response.md)
- [CampaignType](docs/Model/CampaignType.md)
- [CashAccount](docs/Model/CashAccount.md)
- [CashAccountGet200Response](docs/Model/CashAccountGet200Response.md)
- [CollectiveInvoicePositionPrintType](docs/Model/CollectiveInvoicePositionPrintType.md)
- [Comment](docs/Model/Comment.md)
- [CommentGet200Response](docs/Model/CommentGet200Response.md)
- [CommercialLanguage](docs/Model/CommercialLanguage.md)
- [CommercialLanguageGet200Response](docs/Model/CommercialLanguageGet200Response.md)
- [CommissionSalesPartner](docs/Model/CommissionSalesPartner.md)
- [CommissionType](docs/Model/CommissionType.md)
- [ConditionsForEntityType](docs/Model/ConditionsForEntityType.md)
- [Contact](docs/Model/Contact.md)
- [ContactGet200Response](docs/Model/ContactGet200Response.md)
- [Contract](docs/Model/Contract.md)
- [ContractAdditionalAddress](docs/Model/ContractAdditionalAddress.md)
- [ContractAuthorizationUnit](docs/Model/ContractAuthorizationUnit.md)
- [ContractAuthorizationUnitGet200Response](docs/Model/ContractAuthorizationUnitGet200Response.md)
- [ContractBillingType](docs/Model/ContractBillingType.md)
- [ContractChargeInterval](docs/Model/ContractChargeInterval.md)
- [ContractChargeIntervalType](docs/Model/ContractChargeIntervalType.md)
- [ContractChargeType](docs/Model/ContractChargeType.md)
- [ContractCostItem](docs/Model/ContractCostItem.md)
- [ContractGet200Response](docs/Model/ContractGet200Response.md)
- [ContractItem](docs/Model/ContractItem.md)
- [ContractReminderType](docs/Model/ContractReminderType.md)
- [ContractSoftframe](docs/Model/ContractSoftframe.md)
- [ContractStatus](docs/Model/ContractStatus.md)
- [ContractUnitType](docs/Model/ContractUnitType.md)
- [CostCenter](docs/Model/CostCenter.md)
- [CostCenterGet200Response](docs/Model/CostCenterGet200Response.md)
- [CostCenterWithDistributionPercentage](docs/Model/CostCenterWithDistributionPercentage.md)
- [CostType](docs/Model/CostType.md)
- [CostTypeGet200Response](docs/Model/CostTypeGet200Response.md)
- [CrmEvent](docs/Model/CrmEvent.md)
- [CrmEventGet200Response](docs/Model/CrmEventGet200Response.md)
- [CrmEventType](docs/Model/CrmEventType.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyCompanyCurrencyGet200Response](docs/Model/CurrencyCompanyCurrencyGet200Response.md)
- [CurrencyGet200Response](docs/Model/CurrencyGet200Response.md)
- [CustomAttribute](docs/Model/CustomAttribute.md)
- [CustomAttributeDefinition](docs/Model/CustomAttributeDefinition.md)
- [CustomAttributeDefinitionConditionOperator](docs/Model/CustomAttributeDefinitionConditionOperator.md)
- [CustomAttributeDefinitionConditionType](docs/Model/CustomAttributeDefinitionConditionType.md)
- [CustomAttributeDefinitionConditions](docs/Model/CustomAttributeDefinitionConditions.md)
- [CustomAttributeDefinitionGet200Response](docs/Model/CustomAttributeDefinitionGet200Response.md)
- [CustomAttributeDefinitionListValue](docs/Model/CustomAttributeDefinitionListValue.md)
- [CustomAttributeDefinitionOrder](docs/Model/CustomAttributeDefinitionOrder.md)
- [CustomAttributeDefinitionPermission](docs/Model/CustomAttributeDefinitionPermission.md)
- [CustomAttributeDefinitionPermissionType](docs/Model/CustomAttributeDefinitionPermissionType.md)
- [CustomAttributeDefinitionPropertyCondition](docs/Model/CustomAttributeDefinitionPropertyCondition.md)
- [CustomAttributeDefinitionReadOrderGet200Response](docs/Model/CustomAttributeDefinitionReadOrderGet200Response.md)
- [CustomAttributeDefinitionTranslation](docs/Model/CustomAttributeDefinitionTranslation.md)
- [CustomAttributeDefinitionUpdateOrderPostRequest](docs/Model/CustomAttributeDefinitionUpdateOrderPostRequest.md)
- [CustomAttributeDefinitionUpdateOrderPostRequestOrderInner](docs/Model/CustomAttributeDefinitionUpdateOrderPostRequestOrderInner.md)
- [CustomAttributeEntityType](docs/Model/CustomAttributeEntityType.md)
- [CustomAttributeExtendableEntity](docs/Model/CustomAttributeExtendableEntity.md)
- [CustomAttributePublicPageType](docs/Model/CustomAttributePublicPageType.md)
- [CustomAttributeType](docs/Model/CustomAttributeType.md)
- [CustomValue](docs/Model/CustomValue.md)
- [Customer](docs/Model/Customer.md)
- [CustomerBusinessType](docs/Model/CustomerBusinessType.md)
- [CustomerGet200Response](docs/Model/CustomerGet200Response.md)
- [CustomerOrLead](docs/Model/CustomerOrLead.md)
- [CustomerSatisfaction](docs/Model/CustomerSatisfaction.md)
- [CustomerSpecificArticleAttributes](docs/Model/CustomerSpecificArticleAttributes.md)
- [DebitCreditIndicator](docs/Model/DebitCreditIndicator.md)
- [DemoTestSystemInfo](docs/Model/DemoTestSystemInfo.md)
- [DesiredInvoiceStatusType](docs/Model/DesiredInvoiceStatusType.md)
- [DispositionInfoAvailabilityType](docs/Model/DispositionInfoAvailabilityType.md)
- [DistributionChannel](docs/Model/DistributionChannel.md)
- [Document](docs/Model/Document.md)
- [DocumentCopyPost200Response](docs/Model/DocumentCopyPost200Response.md)
- [DocumentCopyPostRequest](docs/Model/DocumentCopyPostRequest.md)
- [DocumentGet200Response](docs/Model/DocumentGet200Response.md)
- [DocumentIdIdCopyPostRequest](docs/Model/DocumentIdIdCopyPostRequest.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentVersion](docs/Model/DocumentVersion.md)
- [DueDateOption](docs/Model/DueDateOption.md)
- [DunningBlockState](docs/Model/DunningBlockState.md)
- [Duration](docs/Model/Duration.md)
- [EcommerceOrder](docs/Model/EcommerceOrder.md)
- [EcommerceShippingCarrier](docs/Model/EcommerceShippingCarrier.md)
- [EmailAddresses](docs/Model/EmailAddresses.md)
- [Entity](docs/Model/Entity.md)
- [EntityReference](docs/Model/EntityReference.md)
- [EventInvitationStatus](docs/Model/EventInvitationStatus.md)
- [EventRight](docs/Model/EventRight.md)
- [ExternalConnection](docs/Model/ExternalConnection.md)
- [ExternalConnectionGet200Response](docs/Model/ExternalConnectionGet200Response.md)
- [ExternalConnectionType](docs/Model/ExternalConnectionType.md)
- [FastProductionBookingResult](docs/Model/FastProductionBookingResult.md)
- [FastProductionBookingResultMessage](docs/Model/FastProductionBookingResultMessage.md)
- [FinancialYear](docs/Model/FinancialYear.md)
- [FinancialYearGet200Response](docs/Model/FinancialYearGet200Response.md)
- [FinancialYearIdIdGeneratePeriodsPost200Response](docs/Model/FinancialYearIdIdGeneratePeriodsPost200Response.md)
- [FinancialYearStatus](docs/Model/FinancialYearStatus.md)
- [FollowupBusyState](docs/Model/FollowupBusyState.md)
- [FulfillmentProvider](docs/Model/FulfillmentProvider.md)
- [FulfillmentProviderGet200Response](docs/Model/FulfillmentProviderGet200Response.md)
- [FulfillmentProviderType](docs/Model/FulfillmentProviderType.md)
- [IncomingBooking](docs/Model/IncomingBooking.md)
- [IncomingGoods](docs/Model/IncomingGoods.md)
- [IncomingGoodsGet200Response](docs/Model/IncomingGoodsGet200Response.md)
- [IncomingGoodsIdIdAddPurchaseOrdersPost200Response](docs/Model/IncomingGoodsIdIdAddPurchaseOrdersPost200Response.md)
- [IncomingGoodsIdIdAddPurchaseOrdersPostRequest](docs/Model/IncomingGoodsIdIdAddPurchaseOrdersPostRequest.md)
- [IncomingGoodsIdIdCreateCompensationShipmentPost200Response](docs/Model/IncomingGoodsIdIdCreateCompensationShipmentPost200Response.md)
- [IncomingGoodsIdIdCreateCreditNotePost200Response](docs/Model/IncomingGoodsIdIdCreateCreditNotePost200Response.md)
- [IncomingGoodsIdIdCreatePurchaseInvoicePost200Response](docs/Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)
- [IncomingGoodsIdIdCreateSupplierReturnPostRequest](docs/Model/IncomingGoodsIdIdCreateSupplierReturnPostRequest.md)
- [IncomingGoodsIdIdIncomingBookingsGet200Response](docs/Model/IncomingGoodsIdIdIncomingBookingsGet200Response.md)
- [IncomingGoodsIdIdUpdateIncomingBookingsPostRequest](docs/Model/IncomingGoodsIdIdUpdateIncomingBookingsPostRequest.md)
- [IncomingGoodsIdIdUpdateIncomingBookingsPostRequestIncomingBookingsInner](docs/Model/IncomingGoodsIdIdUpdateIncomingBookingsPostRequestIncomingBookingsInner.md)
- [IncomingGoodsItem](docs/Model/IncomingGoodsItem.md)
- [InternalShippingCarrier](docs/Model/InternalShippingCarrier.md)
- [InternalTicketStatus](docs/Model/InternalTicketStatus.md)
- [InternalTransportReference](docs/Model/InternalTransportReference.md)
- [InternalTransportReferenceGet200Response](docs/Model/InternalTransportReferenceGet200Response.md)
- [Inventory](docs/Model/Inventory.md)
- [InventoryCreatePost200Response](docs/Model/InventoryCreatePost200Response.md)
- [InventoryCreatePostRequest](docs/Model/InventoryCreatePostRequest.md)
- [InventoryCreatePostRequestInventory](docs/Model/InventoryCreatePostRequestInventory.md)
- [InventoryGet200Response](docs/Model/InventoryGet200Response.md)
- [InventoryGroup](docs/Model/InventoryGroup.md)
- [InventoryGroupGet200Response](docs/Model/InventoryGroupGet200Response.md)
- [InventoryItem](docs/Model/InventoryItem.md)
- [InventoryItemGet200Response](docs/Model/InventoryItemGet200Response.md)
- [InventorySerialNumber](docs/Model/InventorySerialNumber.md)
- [InventorySerialNumberStatus](docs/Model/InventorySerialNumberStatus.md)
- [InventoryStatusHistory](docs/Model/InventoryStatusHistory.md)
- [InventoryStatusType](docs/Model/InventoryStatusType.md)
- [InventoryTransportReference](docs/Model/InventoryTransportReference.md)
- [InventoryTransportReferenceGet200Response](docs/Model/InventoryTransportReferenceGet200Response.md)
- [InvoicingType](docs/Model/InvoicingType.md)
- [ItemPick](docs/Model/ItemPick.md)
- [ItemType](docs/Model/ItemType.md)
- [JobAbortGet200Response](docs/Model/JobAbortGet200Response.md)
- [JobProgress](docs/Model/JobProgress.md)
- [JobResult](docs/Model/JobResult.md)
- [JobStatus](docs/Model/JobStatus.md)
- [JobType](docs/Model/JobType.md)
- [Lead](docs/Model/Lead.md)
- [LeadGet200Response](docs/Model/LeadGet200Response.md)
- [LeadIdIdConvertLeadToCustomerGet200Response](docs/Model/LeadIdIdConvertLeadToCustomerGet200Response.md)
- [LeadStatus](docs/Model/LeadStatus.md)
- [LedgerAccount](docs/Model/LedgerAccount.md)
- [LedgerAccountGet200Response](docs/Model/LedgerAccountGet200Response.md)
- [LedgerAccountType](docs/Model/LedgerAccountType.md)
- [LevelOfDetail](docs/Model/LevelOfDetail.md)
- [License](docs/Model/License.md)
- [LoadingEquipmentIdentifier](docs/Model/LoadingEquipmentIdentifier.md)
- [LoadingEquipmentIdentifierGet200Response](docs/Model/LoadingEquipmentIdentifierGet200Response.md)
- [MailTemplate](docs/Model/MailTemplate.md)
- [MailTemplateGet200Response](docs/Model/MailTemplateGet200Response.md)
- [Manufacturer](docs/Model/Manufacturer.md)
- [ManufacturerGet200Response](docs/Model/ManufacturerGet200Response.md)
- [MarginCalculationPriceType](docs/Model/MarginCalculationPriceType.md)
- [MetaQueryFilterPropertiesGet200Response](docs/Model/MetaQueryFilterPropertiesGet200Response.md)
- [MetaResourcesGet200Response](docs/Model/MetaResourcesGet200Response.md)
- [MinimalStoragePlace](docs/Model/MinimalStoragePlace.md)
- [MoneyTransaction](docs/Model/MoneyTransaction.md)
- [MoneyTransactionProcessingStrategy](docs/Model/MoneyTransactionProcessingStrategy.md)
- [MoneyTransactionSource](docs/Model/MoneyTransactionSource.md)
- [NestedStoragePlace](docs/Model/NestedStoragePlace.md)
- [Notification](docs/Model/Notification.md)
- [NotificationGet200Response](docs/Model/NotificationGet200Response.md)
- [NotificationIdIdMarkReadPost200Response](docs/Model/NotificationIdIdMarkReadPost200Response.md)
- [NotificationPriority](docs/Model/NotificationPriority.md)
- [OfferOutType](docs/Model/OfferOutType.md)
- [OfferStatusType](docs/Model/OfferStatusType.md)
- [OnlineAccount](docs/Model/OnlineAccount.md)
- [OnlineAccountType](docs/Model/OnlineAccountType.md)
- [OnlyId](docs/Model/OnlyId.md)
- [OpenItem](docs/Model/OpenItem.md)
- [OpenItemType](docs/Model/OpenItemType.md)
- [Opportunity](docs/Model/Opportunity.md)
- [OpportunityGet200Response](docs/Model/OpportunityGet200Response.md)
- [OpportunityIdIdLinkQuotationPost200Response](docs/Model/OpportunityIdIdLinkQuotationPost200Response.md)
- [OpportunityIdIdLinkQuotationPostRequest](docs/Model/OpportunityIdIdLinkQuotationPostRequest.md)
- [OrderStatusType](docs/Model/OrderStatusType.md)
- [PackagingUnit](docs/Model/PackagingUnit.md)
- [Party](docs/Model/Party.md)
- [PartyBankAccount](docs/Model/PartyBankAccount.md)
- [PartyButNotContact](docs/Model/PartyButNotContact.md)
- [PartyEmailAddresses](docs/Model/PartyEmailAddresses.md)
- [PartyGet200Response](docs/Model/PartyGet200Response.md)
- [PartyGet200ResponseAdditionalProperties](docs/Model/PartyGet200ResponseAdditionalProperties.md)
- [PartyHabitualExporterLetterOfIntent](docs/Model/PartyHabitualExporterLetterOfIntent.md)
- [PartyHabitualExporterLetterOfIntentType](docs/Model/PartyHabitualExporterLetterOfIntentType.md)
- [PartyIdIdCreatePublicPagePost200Response](docs/Model/PartyIdIdCreatePublicPagePost200Response.md)
- [PartyType](docs/Model/PartyType.md)
- [PaymentApplication](docs/Model/PaymentApplication.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodGet200Response](docs/Model/PaymentMethodGet200Response.md)
- [PaymentMethodTypeKey](docs/Model/PaymentMethodTypeKey.md)
- [PaymentRun](docs/Model/PaymentRun.md)
- [PaymentRunGet200Response](docs/Model/PaymentRunGet200Response.md)
- [PaymentRunItem](docs/Model/PaymentRunItem.md)
- [PaymentRunItemGet200Response](docs/Model/PaymentRunItemGet200Response.md)
- [PaymentRunPaymentType](docs/Model/PaymentRunPaymentType.md)
- [PaymentStatus](docs/Model/PaymentStatus.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PerformanceRecordedStatus](docs/Model/PerformanceRecordedStatus.md)
- [Period](docs/Model/Period.md)
- [PermissionString](docs/Model/PermissionString.md)
- [Pick](docs/Model/Pick.md)
- [PickGet200Response](docs/Model/PickGet200Response.md)
- [PriceCalculationParameter](docs/Model/PriceCalculationParameter.md)
- [PriceCalculationParameterGet200Response](docs/Model/PriceCalculationParameterGet200Response.md)
- [PriceCalculationParameterV1](docs/Model/PriceCalculationParameterV1.md)
- [PriceConditionType](docs/Model/PriceConditionType.md)
- [PriceData](docs/Model/PriceData.md)
- [PriceDataReductionAdditionItem](docs/Model/PriceDataReductionAdditionItem.md)
- [PriceScaleType](docs/Model/PriceScaleType.md)
- [ProductionArticleConfigurationRule](docs/Model/ProductionArticleConfigurationRule.md)
- [ProductionCostCenterType](docs/Model/ProductionCostCenterType.md)
- [ProductionOrder](docs/Model/ProductionOrder.md)
- [ProductionOrderFastProductionBookingPost200Response](docs/Model/ProductionOrderFastProductionBookingPost200Response.md)
- [ProductionOrderFastProductionBookingPostRequest](docs/Model/ProductionOrderFastProductionBookingPostRequest.md)
- [ProductionOrderGet200Response](docs/Model/ProductionOrderGet200Response.md)
- [ProductionOrderItem](docs/Model/ProductionOrderItem.md)
- [ProductionOrderItemStatus](docs/Model/ProductionOrderItemStatus.md)
- [ProductionOrderStatusHistory](docs/Model/ProductionOrderStatusHistory.md)
- [ProductionOrderStatusType](docs/Model/ProductionOrderStatusType.md)
- [ProductionOrderWorkItem](docs/Model/ProductionOrderWorkItem.md)
- [ProductionWorkSchedule](docs/Model/ProductionWorkSchedule.md)
- [ProductionWorkScheduleAssignment](docs/Model/ProductionWorkScheduleAssignment.md)
- [ProductionWorkScheduleAssignmentGet200Response](docs/Model/ProductionWorkScheduleAssignmentGet200Response.md)
- [ProductionWorkScheduleGet200Response](docs/Model/ProductionWorkScheduleGet200Response.md)
- [ProductionWorkScheduleItem](docs/Model/ProductionWorkScheduleItem.md)
- [ProductionWorkScheduleItemTimeType](docs/Model/ProductionWorkScheduleItemTimeType.md)
- [ProductionWorkScheduleStatus](docs/Model/ProductionWorkScheduleStatus.md)
- [ProjectMembers](docs/Model/ProjectMembers.md)
- [PropertyTranslation](docs/Model/PropertyTranslation.md)
- [PropertyTranslationReadPropertyTranslationsGet200Response](docs/Model/PropertyTranslationReadPropertyTranslationsGet200Response.md)
- [PropertyTranslationUpdatePropertyTranslationsPostRequest](docs/Model/PropertyTranslationUpdatePropertyTranslationsPostRequest.md)
- [PropertyTranslationUpdatePropertyTranslationsPostRequestPropertyTranslationsInner](docs/Model/PropertyTranslationUpdatePropertyTranslationsPostRequestPropertyTranslationsInner.md)
- [PropertyTranslationValue](docs/Model/PropertyTranslationValue.md)
- [PurchaseInvoice](docs/Model/PurchaseInvoice.md)
- [PurchaseInvoiceGet200Response](docs/Model/PurchaseInvoiceGet200Response.md)
- [PurchaseInvoiceIdIdCreateContractPost200Response](docs/Model/PurchaseInvoiceIdIdCreateContractPost200Response.md)
- [PurchaseInvoiceIdIdCreateCreditNotePostRequest](docs/Model/PurchaseInvoiceIdIdCreateCreditNotePostRequest.md)
- [PurchaseInvoiceItem](docs/Model/PurchaseInvoiceItem.md)
- [PurchaseInvoiceItemRelationship](docs/Model/PurchaseInvoiceItemRelationship.md)
- [PurchaseInvoiceShippingCostItem](docs/Model/PurchaseInvoiceShippingCostItem.md)
- [PurchaseInvoiceStatusHistory](docs/Model/PurchaseInvoiceStatusHistory.md)
- [PurchaseInvoiceStatusType](docs/Model/PurchaseInvoiceStatusType.md)
- [PurchaseInvoiceType](docs/Model/PurchaseInvoiceType.md)
- [PurchaseOpenItem](docs/Model/PurchaseOpenItem.md)
- [PurchaseOpenItemGet200Response](docs/Model/PurchaseOpenItemGet200Response.md)
- [PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response](docs/Model/PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response.md)
- [PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest](docs/Model/PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest.md)
- [PurchaseOpenItemIdIdUpdatePaymentStatePostRequest](docs/Model/PurchaseOpenItemIdIdUpdatePaymentStatePostRequest.md)
- [PurchaseOrder](docs/Model/PurchaseOrder.md)
- [PurchaseOrderGet200Response](docs/Model/PurchaseOrderGet200Response.md)
- [PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response](docs/Model/PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response.md)
- [PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest](docs/Model/PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest.md)
- [PurchaseOrderIdIdCreateIncomingGoodsPostRequest](docs/Model/PurchaseOrderIdIdCreateIncomingGoodsPostRequest.md)
- [PurchaseOrderIdIdCreatePurchaseInvoicePostRequest](docs/Model/PurchaseOrderIdIdCreatePurchaseInvoicePostRequest.md)
- [PurchaseOrderIdIdProcessDropshippingPostRequest](docs/Model/PurchaseOrderIdIdProcessDropshippingPostRequest.md)
- [PurchaseOrderIdIdProcessDropshippingPostRequestProcessPurchaseOrderItemsInner](docs/Model/PurchaseOrderIdIdProcessDropshippingPostRequestProcessPurchaseOrderItemsInner.md)
- [PurchaseOrderIdIdProcessDropshippingPostRequestShipmentParameters](docs/Model/PurchaseOrderIdIdProcessDropshippingPostRequestShipmentParameters.md)
- [PurchaseOrderItem](docs/Model/PurchaseOrderItem.md)
- [PurchaseOrderRequest](docs/Model/PurchaseOrderRequest.md)
- [PurchaseOrderRequestGet200Response](docs/Model/PurchaseOrderRequestGet200Response.md)
- [PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest](docs/Model/PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest.md)
- [PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest](docs/Model/PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest.md)
- [PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequestOfferItemToUpdateSupplierInformationInner](docs/Model/PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequestOfferItemToUpdateSupplierInformationInner.md)
- [PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest](docs/Model/PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest.md)
- [PurchaseOrderRequestIdIdPushPurchasePricesPostRequest](docs/Model/PurchaseOrderRequestIdIdPushPurchasePricesPostRequest.md)
- [PurchaseOrderRequestItem](docs/Model/PurchaseOrderRequestItem.md)
- [PurchaseOrderRequestItemScaleValue](docs/Model/PurchaseOrderRequestItemScaleValue.md)
- [PurchaseOrderRequestOffer](docs/Model/PurchaseOrderRequestOffer.md)
- [PurchaseOrderRequestOfferItem](docs/Model/PurchaseOrderRequestOfferItem.md)
- [PurchaseOrderRequestOfferItemScaleValue](docs/Model/PurchaseOrderRequestOfferItemScaleValue.md)
- [PurchaseOrderRequestPurchasePriceUpdateMode](docs/Model/PurchaseOrderRequestPurchasePriceUpdateMode.md)
- [PurchaseOrderRequestStatusHistory](docs/Model/PurchaseOrderRequestStatusHistory.md)
- [PurchaseOrderRequestStatusType](docs/Model/PurchaseOrderRequestStatusType.md)
- [PurchaseOrderRequestSupplierStatusType](docs/Model/PurchaseOrderRequestSupplierStatusType.md)
- [PurchaseOrderRequestType](docs/Model/PurchaseOrderRequestType.md)
- [PurchaseOrderShippingCostItem](docs/Model/PurchaseOrderShippingCostItem.md)
- [PurchaseOrderStatusHistory](docs/Model/PurchaseOrderStatusHistory.md)
- [PurchaseRequisition](docs/Model/PurchaseRequisition.md)
- [PurchaseRequisitionGet200Response](docs/Model/PurchaseRequisitionGet200Response.md)
- [PurchaseRequisitionStartMaterialPlanningRunPostRequest](docs/Model/PurchaseRequisitionStartMaterialPlanningRunPostRequest.md)
- [PurchaseRequisitionStatusHistory](docs/Model/PurchaseRequisitionStatusHistory.md)
- [PurchaseRequisitionStatusType](docs/Model/PurchaseRequisitionStatusType.md)
- [PurchaseShippingCostItem](docs/Model/PurchaseShippingCostItem.md)
- [QuantityConversion](docs/Model/QuantityConversion.md)
- [Quotation](docs/Model/Quotation.md)
- [QuotationGet200Response](docs/Model/QuotationGet200Response.md)
- [QuotationIdIdAcceptPost200Response](docs/Model/QuotationIdIdAcceptPost200Response.md)
- [QuotationIdIdAcceptPostRequest](docs/Model/QuotationIdIdAcceptPostRequest.md)
- [QuotationIdIdAcceptPostRequestAcceptQuotationItemsInner](docs/Model/QuotationIdIdAcceptPostRequestAcceptQuotationItemsInner.md)
- [QuotationIdIdAddDefaultScalePricesToItemsPostRequest](docs/Model/QuotationIdIdAddDefaultScalePricesToItemsPostRequest.md)
- [QuotationIdIdCalculateSalesPricesPostRequest](docs/Model/QuotationIdIdCalculateSalesPricesPostRequest.md)
- [QuotationIdIdCreatePurchaseOrderRequestPost200Response](docs/Model/QuotationIdIdCreatePurchaseOrderRequestPost200Response.md)
- [QuotationIdIdCreatePurchaseOrderRequestPostRequest](docs/Model/QuotationIdIdCreatePurchaseOrderRequestPostRequest.md)
- [QuotationIdIdInquirePostRequest](docs/Model/QuotationIdIdInquirePostRequest.md)
- [QuotationIdIdSetCostsForItemsWithoutCostPostRequest](docs/Model/QuotationIdIdSetCostsForItemsWithoutCostPostRequest.md)
- [QuotationItem](docs/Model/QuotationItem.md)
- [QuotationItemScaleValue](docs/Model/QuotationItemScaleValue.md)
- [QuotationShippingCostItem](docs/Model/QuotationShippingCostItem.md)
- [QuotationStatusHistory](docs/Model/QuotationStatusHistory.md)
- [Rating](docs/Model/Rating.md)
- [RecordAddress](docs/Model/RecordAddress.md)
- [RecordEmailingRule](docs/Model/RecordEmailingRule.md)
- [RecordEmailingRuleEventType](docs/Model/RecordEmailingRuleEventType.md)
- [RecordEmailingRuleGet200Response](docs/Model/RecordEmailingRuleGet200Response.md)
- [RecordEmailingRuleRecipientType](docs/Model/RecordEmailingRuleRecipientType.md)
- [RecordItemReductionAdditionSource](docs/Model/RecordItemReductionAdditionSource.md)
- [RecordItemReductionAdditionType](docs/Model/RecordItemReductionAdditionType.md)
- [RecurringEvent](docs/Model/RecurringEvent.md)
- [RecurringEventType](docs/Model/RecurringEventType.md)
- [ReductionAddition](docs/Model/ReductionAddition.md)
- [ReductionAdditionItem](docs/Model/ReductionAdditionItem.md)
- [Region](docs/Model/Region.md)
- [RegionGet200Response](docs/Model/RegionGet200Response.md)
- [Releases](docs/Model/Releases.md)
- [Reminder](docs/Model/Reminder.md)
- [ReminderGet200Response](docs/Model/ReminderGet200Response.md)
- [ReminderRecurringEvent](docs/Model/ReminderRecurringEvent.md)
- [ReminderSendType](docs/Model/ReminderSendType.md)
- [RemotePrintJob](docs/Model/RemotePrintJob.md)
- [RemotePrintJobCreatePrintJobWithDocumentPost200Response](docs/Model/RemotePrintJobCreatePrintJobWithDocumentPost200Response.md)
- [RemotePrintJobGet200Response](docs/Model/RemotePrintJobGet200Response.md)
- [RemotePrintJobStatus](docs/Model/RemotePrintJobStatus.md)
- [SalesBillOfMaterialArticleItem](docs/Model/SalesBillOfMaterialArticleItem.md)
- [SalesChannel](docs/Model/SalesChannel.md)
- [SalesChannelActiveSalesChannelsGet200Response](docs/Model/SalesChannelActiveSalesChannelsGet200Response.md)
- [SalesInvoice](docs/Model/SalesInvoice.md)
- [SalesInvoiceGet200Response](docs/Model/SalesInvoiceGet200Response.md)
- [SalesInvoiceIdIdAddSalesOrdersPostRequest](docs/Model/SalesInvoiceIdIdAddSalesOrdersPostRequest.md)
- [SalesInvoiceIdIdCalculateSalesPricesPostRequest](docs/Model/SalesInvoiceIdIdCalculateSalesPricesPostRequest.md)
- [SalesInvoiceItem](docs/Model/SalesInvoiceItem.md)
- [SalesInvoiceItemRelationship](docs/Model/SalesInvoiceItemRelationship.md)
- [SalesInvoiceOrigin](docs/Model/SalesInvoiceOrigin.md)
- [SalesInvoiceShippingCostItem](docs/Model/SalesInvoiceShippingCostItem.md)
- [SalesInvoiceStatusHistory](docs/Model/SalesInvoiceStatusHistory.md)
- [SalesInvoiceStatusType](docs/Model/SalesInvoiceStatusType.md)
- [SalesInvoiceType](docs/Model/SalesInvoiceType.md)
- [SalesOpenItem](docs/Model/SalesOpenItem.md)
- [SalesOpenItemGet200Response](docs/Model/SalesOpenItemGet200Response.md)
- [SalesOpenItemIdIdCreatePaymentApplicationPost200Response](docs/Model/SalesOpenItemIdIdCreatePaymentApplicationPost200Response.md)
- [SalesOrder](docs/Model/SalesOrder.md)
- [SalesOrderDefaultValuesForCreateGet200Response](docs/Model/SalesOrderDefaultValuesForCreateGet200Response.md)
- [SalesOrderGet200Response](docs/Model/SalesOrderGet200Response.md)
- [SalesOrderGet200ResponseAdditionalProperties](docs/Model/SalesOrderGet200ResponseAdditionalProperties.md)
- [SalesOrderIdIdCalculateSalesPricesPostRequest](docs/Model/SalesOrderIdIdCalculateSalesPricesPostRequest.md)
- [SalesOrderIdIdCreateDropshippingPostRequest](docs/Model/SalesOrderIdIdCreateDropshippingPostRequest.md)
- [SalesOrderIdIdCreateProductionOrdersPostRequest](docs/Model/SalesOrderIdIdCreateProductionOrdersPostRequest.md)
- [SalesOrderIdIdCreatePurchaseOrderPostRequest](docs/Model/SalesOrderIdIdCreatePurchaseOrderPostRequest.md)
- [SalesOrderIdIdCreatePurchaseOrderRequestPostRequest](docs/Model/SalesOrderIdIdCreatePurchaseOrderRequestPostRequest.md)
- [SalesOrderIdIdCreateSalesInvoicePostRequest](docs/Model/SalesOrderIdIdCreateSalesInvoicePostRequest.md)
- [SalesOrderItem](docs/Model/SalesOrderItem.md)
- [SalesOrderPayment](docs/Model/SalesOrderPayment.md)
- [SalesOrderPaymentType](docs/Model/SalesOrderPaymentType.md)
- [SalesOrderShippingCostItem](docs/Model/SalesOrderShippingCostItem.md)
- [SalesOrderStatusHistory](docs/Model/SalesOrderStatusHistory.md)
- [SalesShippingCostItem](docs/Model/SalesShippingCostItem.md)
- [SalesStage](docs/Model/SalesStage.md)
- [SalesStageGet200Response](docs/Model/SalesStageGet200Response.md)
- [SalesStageHistory](docs/Model/SalesStageHistory.md)
- [Salutation](docs/Model/Salutation.md)
- [SepaDirectDebitMandate](docs/Model/SepaDirectDebitMandate.md)
- [SepaDirectDebitMandateGet200Response](docs/Model/SepaDirectDebitMandateGet200Response.md)
- [SepaDirectDebitRuntime](docs/Model/SepaDirectDebitRuntime.md)
- [SepaDirectDebitType](docs/Model/SepaDirectDebitType.md)
- [SerialNumber](docs/Model/SerialNumber.md)
- [SerialNumberGet200Response](docs/Model/SerialNumberGet200Response.md)
- [Shelf](docs/Model/Shelf.md)
- [ShelfGet200Response](docs/Model/ShelfGet200Response.md)
- [ShelfIdIdActivatePost200Response](docs/Model/ShelfIdIdActivatePost200Response.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentGet200Response](docs/Model/ShipmentGet200Response.md)
- [ShipmentInType](docs/Model/ShipmentInType.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentMethod](docs/Model/ShipmentMethod.md)
- [ShipmentMethodGet200Response](docs/Model/ShipmentMethodGet200Response.md)
- [ShipmentOutType](docs/Model/ShipmentOutType.md)
- [ShipmentReturnAssessmentGet200Response](docs/Model/ShipmentReturnAssessmentGet200Response.md)
- [ShipmentReturnDescription](docs/Model/ShipmentReturnDescription.md)
- [ShipmentStatus](docs/Model/ShipmentStatus.md)
- [ShipmentStatusType](docs/Model/ShipmentStatusType.md)
- [ShippingCarrier](docs/Model/ShippingCarrier.md)
- [ShippingCarrierGet200Response](docs/Model/ShippingCarrierGet200Response.md)
- [ShippingServiceProviderType](docs/Model/ShippingServiceProviderType.md)
- [SpecialCalculationMode](docs/Model/SpecialCalculationMode.md)
- [StockMovementType](docs/Model/StockMovementType.md)
- [StorageLocation](docs/Model/StorageLocation.md)
- [StorageLocationGet200Response](docs/Model/StorageLocationGet200Response.md)
- [StorageLocationIdIdActivatePost200Response](docs/Model/StorageLocationIdIdActivatePost200Response.md)
- [StoragePlace](docs/Model/StoragePlace.md)
- [StoragePlaceGet200Response](docs/Model/StoragePlaceGet200Response.md)
- [StoragePlaceSize](docs/Model/StoragePlaceSize.md)
- [StoragePlaceSizeGet200Response](docs/Model/StoragePlaceSizeGet200Response.md)
- [StoragePlaceType](docs/Model/StoragePlaceType.md)
- [StoragePlaceTypeSettings](docs/Model/StoragePlaceTypeSettings.md)
- [StoreType](docs/Model/StoreType.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [Supplier](docs/Model/Supplier.md)
- [SupplierGet200Response](docs/Model/SupplierGet200Response.md)
- [SupplierOrderStatusType](docs/Model/SupplierOrderStatusType.md)
- [SupplierOrderType](docs/Model/SupplierOrderType.md)
- [SupplySource](docs/Model/SupplySource.md)
- [SystemCreateDemoTestSystemPostRequest](docs/Model/SystemCreateDemoTestSystemPostRequest.md)
- [SystemDemoTestSystemInfoGet200Response](docs/Model/SystemDemoTestSystemInfoGet200Response.md)
- [SystemLicensesGet200Response](docs/Model/SystemLicensesGet200Response.md)
- [SystemPermissionsGet200Response](docs/Model/SystemPermissionsGet200Response.md)
- [Tag](docs/Model/Tag.md)
- [TagGet200Response](docs/Model/TagGet200Response.md)
- [Tax](docs/Model/Tax.md)
- [TaxConfigurePurchaseTaxesPostRequest](docs/Model/TaxConfigurePurchaseTaxesPostRequest.md)
- [TaxConfigureSalesTaxesPostRequest](docs/Model/TaxConfigureSalesTaxesPostRequest.md)
- [TaxDeterminationRule](docs/Model/TaxDeterminationRule.md)
- [TaxDeterminationRuleGet200Response](docs/Model/TaxDeterminationRuleGet200Response.md)
- [TaxFindPurchaseTaxGet200Response](docs/Model/TaxFindPurchaseTaxGet200Response.md)
- [TaxGet200Response](docs/Model/TaxGet200Response.md)
- [TaxKey](docs/Model/TaxKey.md)
- [TaxRateType](docs/Model/TaxRateType.md)
- [TaxResetSystemTaxesPostRequest](docs/Model/TaxResetSystemTaxesPostRequest.md)
- [TaxType](docs/Model/TaxType.md)
- [TeamRole](docs/Model/TeamRole.md)
- [TemplateType](docs/Model/TemplateType.md)
- [TermOfPayment](docs/Model/TermOfPayment.md)
- [TermOfPaymentCondition](docs/Model/TermOfPaymentCondition.md)
- [TermOfPaymentGet200Response](docs/Model/TermOfPaymentGet200Response.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketAssigneeType](docs/Model/TicketAssigneeType.md)
- [TicketAssignmentRule](docs/Model/TicketAssignmentRule.md)
- [TicketAssignmentRuleGet200Response](docs/Model/TicketAssignmentRuleGet200Response.md)
- [TicketCategory](docs/Model/TicketCategory.md)
- [TicketCategoryGet200Response](docs/Model/TicketCategoryGet200Response.md)
- [TicketFaq](docs/Model/TicketFaq.md)
- [TicketFaqGet200Response](docs/Model/TicketFaqGet200Response.md)
- [TicketFaqVisibility](docs/Model/TicketFaqVisibility.md)
- [TicketGet200Response](docs/Model/TicketGet200Response.md)
- [TicketGet200ResponseAdditionalProperties](docs/Model/TicketGet200ResponseAdditionalProperties.md)
- [TicketIdIdCreatePublicPagePost200Response](docs/Model/TicketIdIdCreatePublicPagePost200Response.md)
- [TicketIdIdLinkSalesOrderPostRequest](docs/Model/TicketIdIdLinkSalesOrderPostRequest.md)
- [TicketPoolingGroup](docs/Model/TicketPoolingGroup.md)
- [TicketPoolingGroupGet200Response](docs/Model/TicketPoolingGroupGet200Response.md)
- [TicketPoolingGroupMember](docs/Model/TicketPoolingGroupMember.md)
- [TicketServiceLevelAgreement](docs/Model/TicketServiceLevelAgreement.md)
- [TicketServiceLevelAgreementGet200Response](docs/Model/TicketServiceLevelAgreementGet200Response.md)
- [TicketServiceLevelAgreementTarget](docs/Model/TicketServiceLevelAgreementTarget.md)
- [TicketServiceLevelAgreementUnit](docs/Model/TicketServiceLevelAgreementUnit.md)
- [TicketStatus](docs/Model/TicketStatus.md)
- [TicketStatusColor](docs/Model/TicketStatusColor.md)
- [TicketStatusGet200Response](docs/Model/TicketStatusGet200Response.md)
- [TicketType](docs/Model/TicketType.md)
- [TicketTypeGet200Response](docs/Model/TicketTypeGet200Response.md)
- [TimeUnit](docs/Model/TimeUnit.md)
- [Translation](docs/Model/Translation.md)
- [TranslationGet200Response](docs/Model/TranslationGet200Response.md)
- [TranslationValue](docs/Model/TranslationValue.md)
- [TransportPick](docs/Model/TransportPick.md)
- [TransportationOrder](docs/Model/TransportationOrder.md)
- [TransportationOrderGet200Response](docs/Model/TransportationOrderGet200Response.md)
- [TransportationOrderIdIdCreatePickPost200Response](docs/Model/TransportationOrderIdIdCreatePickPost200Response.md)
- [TransportationOrderIdIdCreatePickPostRequest](docs/Model/TransportationOrderIdIdCreatePickPostRequest.md)
- [TransportationOrderIdIdCreatePickPostRequestExistingReservationsInner](docs/Model/TransportationOrderIdIdCreatePickPostRequestExistingReservationsInner.md)
- [TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest](docs/Model/TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest.md)
- [TransportationOrderIdIdPickPickPostRequest](docs/Model/TransportationOrderIdIdPickPickPostRequest.md)
- [TransportationOrderIdIdPutDownInternalTransportReferencePostRequest](docs/Model/TransportationOrderIdIdPutDownInternalTransportReferencePostRequest.md)
- [TransportationOrderStatusHistory](docs/Model/TransportationOrderStatusHistory.md)
- [TransportationOrderStatusType](docs/Model/TransportationOrderStatusType.md)
- [TransportationOrderType](docs/Model/TransportationOrderType.md)
- [Unit](docs/Model/Unit.md)
- [UnitGet200Response](docs/Model/UnitGet200Response.md)
- [User](docs/Model/User.md)
- [UserCurrentUserGet200Response](docs/Model/UserCurrentUserGet200Response.md)
- [UserGet200Response](docs/Model/UserGet200Response.md)
- [UserRole](docs/Model/UserRole.md)
- [UserRoleGet200Response](docs/Model/UserRoleGet200Response.md)
- [UserStatus](docs/Model/UserStatus.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorType](docs/Model/ValidationErrorType.md)
- [VariantArticle](docs/Model/VariantArticle.md)
- [VariantArticleAttribute](docs/Model/VariantArticleAttribute.md)
- [VariantArticleAttributeGet200Response](docs/Model/VariantArticleAttributeGet200Response.md)
- [VariantArticleAttributeOption](docs/Model/VariantArticleAttributeOption.md)
- [VariantArticleGet200Response](docs/Model/VariantArticleGet200Response.md)
- [VariantArticleVariant](docs/Model/VariantArticleVariant.md)
- [VariantArticleVariantGet200Response](docs/Model/VariantArticleVariantGet200Response.md)
- [VariantArticleVariantWithoutReference](docs/Model/VariantArticleVariantWithoutReference.md)
- [Warehouse](docs/Model/Warehouse.md)
- [WarehouseGet200Response](docs/Model/WarehouseGet200Response.md)
- [WarehouseIdIdActivatePost200Response](docs/Model/WarehouseIdIdActivatePost200Response.md)
- [WarehouseQuantity](docs/Model/WarehouseQuantity.md)
- [WarehouseStock](docs/Model/WarehouseStock.md)
- [WarehouseStockGet200Response](docs/Model/WarehouseStockGet200Response.md)
- [WarehouseStockMovement](docs/Model/WarehouseStockMovement.md)
- [WarehouseStockMovementBookDirectStockTransferPostRequest](docs/Model/WarehouseStockMovementBookDirectStockTransferPostRequest.md)
- [WarehouseStockMovementBookDirectStockTransferPostRequestCustomAttributesInner](docs/Model/WarehouseStockMovementBookDirectStockTransferPostRequestCustomAttributesInner.md)
- [WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest](docs/Model/WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest.md)
- [WarehouseStockMovementBookIncomingMovementPostRequest](docs/Model/WarehouseStockMovementBookIncomingMovementPostRequest.md)
- [WarehouseStockMovementBookOntoInternalTransportReferencePostRequest](docs/Model/WarehouseStockMovementBookOntoInternalTransportReferencePostRequest.md)
- [WarehouseStockMovementBookOutgoingMovementPostRequest](docs/Model/WarehouseStockMovementBookOutgoingMovementPostRequest.md)
- [WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest](docs/Model/WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest.md)
- [WarehouseStockMovementGet200Response](docs/Model/WarehouseStockMovementGet200Response.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookGet200Response](docs/Model/WebhookGet200Response.md)
- [WebhookRequestMethod](docs/Model/WebhookRequestMethod.md)
- [WeclappOs](docs/Model/WeclappOs.md)
- [WeclappOsGet200Response](docs/Model/WeclappOsGet200Response.md)

## Authorization

Authentication schemes defined for the API:
### api-token

- **Type**: API key
- **API key parameter name**: AuthenticationToken
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@weclapp.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
