<?php
/**
 * TaxKey
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * weclapp API
 *
 * # Getting Started   API Version:     **[v1](v1.html)**   The weclapp REST API lets you integrate weclapp with other applications or services.  The specification for this version can be downloaded here:  | Format                          | Public                                                                           | |---------------------------------|----------------------------------------------------------------------------------| | swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> | | OpenApi 3 JSON                  | <a href=\"openapi_v1.json\" download=\"weclapp-openapi.json\">Download</a> | | OpenApi 3 YAML (with user docs) | <a href=\"openapi_v1.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |    ## What should I know before starting?  Our API is continuously being developed and improved, but we are still trying to keep it as stable as possible. We try to only have changes that are backwards compatible: usually the changes are only additions, e.g. new resources are implemented or new properties are added to existing resources. Sometimes breaking changes cannot be avoided, e.g. when a new feature requires an incompatible change to the underlying data model, all those changes will be documented in the change log.  ## Security and Authentication  You must be a verified user to make API requests. You can authorize against the API with an API token. The token is configurable in your weclapp account under **My settings > API**. Authentication is possible in multiple ways: If the request contains the session cookies of a logged in weclapp session then the user and permissions of that session are used. This is useful when testing the API in a web browser, because then requests are “automatically” authenticated if weclapp is used in another tab. But generally the API is not used from a browser or with session cookies, instead there is an API token for each user that can be used to authenticate requests. Each user can find his/her token on the \"My Settings page\". The token should be kept secret like a password. A user can also generate a new token at any time, doing that invalidates all previous tokens. Authenticating using a token is possible in two ways:  * the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}` * the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token  ## Using curl  ```bash curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v1\" ... ```  Examples of how to use curl will be shown in each section of this API.  ## Headers  This is a JSON-only API. You must supply a `Content-Type: application/json` header on PUT and POST operations. You must set a `Accept: application/json` header on all requests. You may get a `text/plain` response in case of error, e.g. in case of a bad request, you should treat this as an error you need to take action on.  To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression). This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will enforce compression and respond with \"Content-Encoding: gzip\".  Please also make sure to set a `User-Agent` header for all automated requests, as that makes it much easier to identify misbehaving clients.  ## URLs  The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v1/` where `<TENANT>.weclapp.com` is the domain of the specific weclapp instance. So each weclapp instance has its own API endpoints which allow accessing data for that particular instance. The API provides access to various resources like customers, sales orders, articles etc.. Each of those resources implements a common set of operations. The URLs and HTTP methods for the different resource operations use the same pattern for all resources:  | Operation                     | HTTP Method | URL pattern                                                           | |-------------------------------|-------------|-----------------------------------------------------------------------| | Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/count` | | Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |  Not all resources support all of those operations. A general description for each operation can be found in API operations by example, and details for each resource are described on the page for that resource.  ## Additional operations  Some resources allow further operations or actions. Those operations can be executed with a POST request, for some operations that only read data it is also possible to use a GET request (this is documented for each operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/<operation>`. Some operations are instance specific, those use the following URL pattern: `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>/<operation>`.      ## JSON  | Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         | |----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       | | boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                | | decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). | | integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   | | floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    | | dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  | | enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |  The deserialization of data sent to the API is relatively lenient, for example when a string is expected, but a number is given then that number is used as the string and the other way around (if possible). Properties with the value null are not serialized by default and when sending data to the API it is also not necessary to include properties whose value is null: all properties that are missing from the JSON object but are expected are assumed to be `null`. To get all properties including those with the value null the query parameter `serializeNulls` can be added to the request URL, in that case null values are included in the response.    ## Error Responses  Any request on the weclapp API may return an error response, with a structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807). See the [API error reference](#errors) section for details.      ## Change Policy  weclapp may modify the attributes and resources available to the API and our policies related to access and use of the API from time to time without advance notice. weclapp will use commercially reasonable efforts to notify you of any modifications to the API or policies through notifications or posts on the weclapp Developer Website. weclapp also tracks deprecation of attributes of the API on its Changelog. Modification of the API may have an adverse effect on weclapp Applications, including but not limited to changing the manner in which weclapp Applications communicate with the API and display or transmit Your Data. weclapp will not be liable to you or any third party for such modifications or any adverse effects resulting from such modifications    # API newsletter  Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.   # API operations sample  As mentioned previously all resources implement common operations in the same way. In the following all the common operations are explained for the `customer` resource. The operations work in the same way for all other resources (some resources don’t support all the operations), the differences between the resources are mostly the data and the properties that are required and used.  ## Querying  The most common operation is querying or listing the existing entity instances. This is possible with a `GET` request to the base URL of a resource:    ### `GET /customer`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"primeAddress\": true,           \"street1\": \"Mustergasse 7\",           \"zipcode\": \"80331 \"         }       ],       \"blocked\": false,       \"company\": \"Muster GmbH\",       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"primeAddress\": true,               \"street1\": \"Fasanenweg 15\",               \"zipcode\": \"80331\"             }           ],           \"createdDate\": 1496828882837,           \"email\": \"mustermann@beispiel.de\",           \"firstName\": \"Max\",           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1496828973904,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1006\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496828996212,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  In this case there is one sales order with one order item. By default, all null values are omitted, to include them the query parameter serializeNulls can be used:    ### `GET /customer?serializeNulls`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?serializeNulls\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"company\": null,           \"company2\": null,           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"globalLocationNumber\": null,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"postOfficeBoxCity\": null,           \"postOfficeBoxNumber\": null,           \"postOfficeBoxZipCode\": null,           \"primeAddress\": true,           \"state\": null,           \"street1\": \"Mustergasse 7\",           \"street2\": null,           \"zipcode\": \"80331 \"         }       ],       \"amountInsured\": null,       \"annualRevenue\": null,       \"birthDate\": null,       \"blockNotice\": null,       \"blocked\": false,       \"commercialLanguageId\": null,       \"company\": \"Muster GmbH\",       \"company2\": null,       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"company\": null,               \"company2\": null,               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"globalLocationNumber\": null,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"postOfficeBoxCity\": null,               \"postOfficeBoxNumber\": null,               \"postOfficeBoxZipCode\": null,               \"primeAddress\": true,               \"state\": null,               \"street1\": \"Fasanenweg 15\",               \"street2\": null,               \"zipcode\": \"80331\"             }           ],           \"birthDate\": null,           \"company\": null,           \"company2\": null,           \"createdDate\": 1496828882837,           \"customAttributes\": null,           \"description\": null,           \"email\": \"mustermann@beispiel.de\",           \"fax\": null,           \"firstName\": \"Max\",           \"fixPhone2\": null,           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"middleName\": null,           \"mobilePhone1\": null,           \"mobilePhone2\": null,           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"personDepartment\": null,           \"personRole\": null,           \"phone\": null,           \"phoneHome\": null,           \"salutation\": \"MR\",           \"title\": null,           \"website\": null         }       ],       \"createdDate\": 1496828973904,       \"creditLimit\": null,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\",           \"booleanValue\": null,           \"dateValue\": null,           \"numberValue\": null,           \"selectedValueId\": null,           \"selectedValues\": null,           \"stringValue\": null         }       ],       \"customerCategoryId\": null,       \"customerCategoryName\": null,       \"customerNumber\": \"C1006\",       \"customerRating\": null,       \"customerTopics\": [],       \"defaultHeaderDiscount\": null,       \"defaultHeaderSurcharge\": null,       \"deliveryBlock\": false,       \"description\": null,       \"email\": null,       \"fax\": null,       \"firstName\": null,       \"insolvent\": false,       \"insured\": false,       \"invoiceContactId\": null,       \"lastModifiedDate\": 1496828996212,       \"lastName\": null,       \"leadSourceId\": null,       \"leadSourceName\": null,       \"middleName\": null,       \"mobilePhone1\": null,       \"oldCustomerNumber\": null,       \"optIn\": false,       \"parentPartyId\": null,       \"partyType\": \"ORGANIZATION\",       \"paymentMethodId\": null,       \"paymentMethodName\": null,       \"personCompany\": null,       \"personDepartment\": null,       \"personRole\": null,       \"phone\": null,       \"primaryContactId\": null,       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"salutation\": null,       \"satisfaction\": null,       \"sectorId\": null,       \"sectorName\": null,       \"shipmentMethodId\": null,       \"shipmentMethodName\": null,       \"termOfPaymentId\": null,       \"termOfPaymentName\": null,       \"title\": null,       \"useCustomsTariffNumber\": false,       \"vatRegistrationNumber\": null,       \"website\": null     }   ] } ```  ## Pagination By default the operation will not return all entity instances but only the first 100, this can be changed by using the `pageSize` query parameter with the number of desired results. But `pageSize` cannot be arbitrarily high it is usually limited 1000 (exceptions to the default limits of 100 and 1000 are noted in the documentation for the specific resources). To get further results it is necessary to skip entity instances, this is done using the `page` query parameter. Examples:    ### `GET /customer?pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?pageSize=10\" ```  returns at most 10 instances  ### `GET /customer?page=2&pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?page=2&pageSize=10\" ```  returns the second page of results (the `page` parameter is one based, so `page=1` is the first page, which is also the default). Using those two parameters it is possible to implement pagination.  ## Sorting  It is also possible to change the order of the returned results using the `sort` parameter:  ### `GET /customer?sort=lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate\" ```  sort by `lastModifiedDate` (ascending).  ### `GET /customer?sort=-lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=-lastModifiedDate\" ```  sort by `lastModifiedDate` descending.  ### `GET /customer?sort=lastModifiedDate,-salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate,-salesChannel\" ```  sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.   It is generally possible to sort by most of the simple properties of an entity. It is possible to combine multiple sort orders by combining the property names with a comma. To sort in descending order just prepend a minus to the property name. If an unsupported or unknown property is specified then an error response is returned.  ## Filtering  It is often desired to get just a subset of the data, for example just the orders of a specific customer or created after a specific date. This is possible using filtering query parameters:    ### `GET /customer?salesChannel-eq=NET1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1\" ```  customers for `salesChannel` `NET1`.  ### `GET /customer?createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?createdDate-gt=1398436281262\" ```  customers created after the specified timestamp.  ### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\" ```  customers for `salesChannel` `NET1` and created after the specified timestamp.  ### `GET /customer?customAttribute4587-eq=NEW`  ```bash curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587-eq=NEW\" ```  customers with the value `NEW` for `customAttribute` with id 4587.  ### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\"   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587.entityReferences.entityId-eq=1234\" ```  customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.  ### `GET /customAttributeDefinitions`  All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.  ### `GET /customer?customAttribute3387.value-eq=OPTION1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute3387.value-eq=OPTION1\" ```  customers with value `OPTION1` for `customAttribute` with id 3387.  A filtering query parameter consists of a property name and a filter operator joined together with a minus. If multiple filtering query parameter are specified then they are combined and the returned results match all of them. Filtering query parameters for unknown properties or properties that don’t support filtering are silently ignored.  The following filtering operators are supported (not all of them work for all property types):  | Operator | Meaning                                                                                                                                                                                     | |----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | eq       | equal                                                                                                                                                                                       | | ne       | not equal                                                                                                                                                                                   | | lt       | less than                                                                                                                                                                                   | | gt       | greater than                                                                                                                                                                                | | le       | less equal                                                                                                                                                                                  | | ge       | greater equal                                                                                                                                                                               | | null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  | | notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              | | like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 | | notlike  | not like expression                                                                                                                                                                         | | ilike    | like expression, ignoring case                                                                                                                                                              | | notilike | not like expression, ignoring case                                                                                                                                                          | | in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` | | notin    | the property value is not in the specified list of values                                                                                                                                   |  ## \"Or\" condition filtering  In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":   ### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?or-name-eq=charlie&or-name-eq=chaplin\" ```  The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`   For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:   ### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\" ```  The above example is the equivalent of the expression  ``` ((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\") ```  Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.  ## Filter Expressions  **Warning: This is still a beta feature.**  In addition to individual filter properties it is also possible to specify complex filter expressions that can combine multiple conditions and express relations between properties. Example:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   https://<TENANT>.weclapp.com/webapp/api/v1/party \\   --get \\   --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")' ```  * \"filter\" parameters are ANDed with other filter parameters * Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters. * Multiple \"filter\" parameters may be used if needed.  ### Examples  Some more example filter expressions:  ```sql -- enum literals are specified as string literals (salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")  -- normal arithmetic operations are supported. (unitPrice + unitPrice * salesTax) <= 49.99  -- elementary functions length(trim(notes)) <= 140  -- conditions can be combined with logical operators (not (contacts.firstName null)) or (currencyId = 4711) ```  ### Availabe Operations   ### arihmetic  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings | |  subtraction | - | integer, float | integer, float |  | |  multiplication | * | integer, float | integer, float |  | |  division | / | integer, float | integer, float |  | |  negation | - | --- | integer, float |  |   ### comparison  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  less than | < | integer, float, date | integer, float, date |  | |  greater than | > | integer, float, date | integer, float, date |  | |  Less than or equals | <= | integer, float, date | integer, float, date |  | |  Greater than or equals | >= | integer, float, date | integer, float, date |  | |  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE | |  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives | |  Property is null | null | integer, float, string, boolean, date, enum | --- |  |   ### logical  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  and | and | boolean | boolean |  | |  or | or | boolean | boolean |  | |  not | not | --- | boolean |  |   ### function  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  trim | trim | --- | string | Remove whitespace from both ends of a string | |  length | length | --- | string | Get the number of characters in a string | |  lower | lower | --- | string | Convert a string to lower case |   ### Type Coercion  Literals in the expression are interpreted as different types depending on their context:  * An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch * A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:   * `2024-10-13T10:39:12+02:00`   * `2024-10-13T10:39:12.443+02:00`   * `2024-10-13T10:39:12Z`   * `2024-10-13T10:39:12+02:00` * A `string` literal being compared to an `enum` property is interpreted as enum constant * ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals  ## Return only specific properties  Sometimes it is desirable to only fetch a subset of all properties, for example to save bandwidth. This is possible by specifying the desired properties using the `properties` query parameter:  ### `GET /customer?properties=id,customerNumber,salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```  It is also possible to specify property paths:  ### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\" ```  If an unknown property or property path is specified then an error response is returned.  ```json {   \"result\": [     {       \"id\": \"3346\",       \"contacts\": [         {           \"id\": \"3731\",           \"lastName\": \"Mustermann\"         }       ],       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```   ## Combinations  The query parameters for pagination, sorting, filtering and returning only specific properties can be combined to perform queries.   ## Counting  To determine the total number of entity instances the count operation can be used:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count\" ```  It is possible to use the filtering query parameters from the querying operation with the count operation:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count?salesChannel-eq=NET1\" ```  returns the number of customers for `salesChannel` `NET1`.   ## Referenced entities  The API offers the possibility to get the referenced entities for a query result in the same request. This way you can save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list. The API response will contain an additional object `referencedEntities`.   ### `GET /article?includeReferencedEntities=unitId,articleCategoryId`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3235\",       \"name\": \"Testartikel 1\",       \"unitId\": \"2770\"     },     {       \"id\": \"3236\",       \"name\": \"Testartikel 2\",       \"unitId\": \"2770\"     },     {       \"id\": \"3237\",       \"articleCategoryId\": \"7035\",       \"name\": \"Testartikel 3\",       \"unitId\": \"2770\"     }   ],   \"referencedEntities\": {     \"unit\": [       {         \"id\": \"2770\",         \"version\": \"0\",         \"createdDate\": 1597915605986,         \"description\": \"Stück\",         \"lastModifiedDate\": 1597915605985,         \"name\": \"Stk.\"       }     ],     \"articleCategory\": [       {         \"id\": \"7035\",         \"version\": \"0\",         \"createdDate\": 1619778730348,         \"lastModifiedDate\": 1619778730348,         \"name\": \"Demo-Gruppe\"       }     ]   } } ```  ## Additional properties  In addition to the common properties, there are additional properties that can be optionally queried. These are calculated or complexly determined and must therefore be explicitly queried.  To use this function, only the parameter `additionalProperties` and the names of the additional properties must be specified as a comma-separated list. The response then contains the additional object `additionalProperties` with the property and an array of values. The index of the value object in this list also represents the reference to the respective entity.   ### `GET /article?additionalProperties=currentSalesPrice`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?additionalProperties=currentSalesPrice\" ```  **Output:**  ```json {   \"additionalProperties\": {     \"currentSalesPrice\": [       {         \"articleUnitPrice\": \"39.95\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       },       {         \"articleUnitPrice\": \"479.4\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       }     ]   } } ```   ## Dry-Run  Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic is executed and the data submitted by the requester is validated. To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success. The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".  ### `POST /salesOrder?dryRun=true`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/salesOrder?dryRun=true\" \\   -d   '{ \"customerNumber\": \"4799\" }' ```  **Error Output:**  ```json {   \"detail\": \"customer not found\",   \"error\": \"customer not found\",   \"status\": 400,   \"title\": \"entity validation failed\",   \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",   \"validationErrors\": [     {       \"detail\": \"referenced entity not found\",       \"instance\": \"salesOrder\",       \"location\": \"customerId\",       \"title\": \"referenced entity not found\",       \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"     }   ] } ```  The response status will be 400 (Bad Request).  **Successful Output:**  ```json {   \"availability\": \"NOT_CHECKED\",   \"availabilityForAllWarehouses\": \"NOT_CHECKED\",   \"commissionSalesPartners\": [],   \"creatorId\": \"4451\",   \"currencyConversionDate\": 1699375721469,   \"currencyConversionRate\": \"1\",   \"customAttributes\": [],   \"customerId\": \"4799\",   \"customerNumber\": \"10000\",   \"deliveryAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"deliveryEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"disableEmailTemplate\": false,   \"dispatchCountryCode\": \"DE\",   \"factoring\": false,   \"fulfillmentProviderId\": \"3335\",   \"grossAmount\": \"0\",   \"grossAmountInCompanyCurrency\": \"0\",   \"headerDiscount\": \"0\",   \"headerSurcharge\": \"0\",   \"invoiceAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"invoiced\": false,   \"netAmount\": \"0\",   \"netAmountInCompanyCurrency\": \"0\",   \"nonStandardTaxId\": \"3492\",   \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",   \"onlyServices\": false,   \"orderDate\": 1699311600000,   \"orderItems\": [],   \"paid\": false,   \"plannedShippingDate\": 1699311600000,   \"pricingDate\": 1699311600000,   \"projectMembers\": [],   \"projectModeActive\": false,   \"recordAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"recordCurrencyId\": \"256\",   \"recordCurrencyName\": \"EUR\",   \"recordEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"responsibleUserId\": \"4748\",   \"responsibleUserUsername\": \"karsten.kunde@example.com\",   \"salesChannel\": \"NET1\",   \"salesInvoiceEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"salesOrderPaymentType\": \"STANDARD\",   \"sentToRecipient\": false,   \"servicesFinished\": false,   \"shipped\": false,   \"shippingCostItems\": [],   \"shippingLabelsCount\": 1,   \"status\": \"ORDER_ENTRY_IN_PROGRESS\",   \"statusHistory\": [     {       \"status\": \"ORDER_ENTRY_IN_PROGRESS\",       \"statusDate\": 1699375721472,       \"userId\": \"4451\"     }   ],   \"tags\": [],   \"warehouseId\": \"4191\",   \"warehouseName\": \"Hauptlager\" } ```  The response status will be 200 (OK).   ## Optimistic locking  For the update operation the resources usually also support optimistic locking using the `version` property: if the `version` property is in the request body and it does not match the current `version`, then the request fails with an optimistic lock error. In that case the caller should again get the latest `version`, apply the changes and try the request again.   ## Basic Operations  The following entries will show you how to use the different basic operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they will give whether the operation was successful or not.   The following table will show you the HTTP status codes of the basic operations if the operation was successful:  | Operation | HTTP status code | |-----------|------------------| | GET       | 200 (OK)         | | POST      | 201 (Created)    | | PUT       | 200 (OK)         | | DELETE    | 204 (No Content) |  If you are not currently logged in to weclapp, you are using another browser or the AuthenticationToken was wrong you will get a response of `401 (Unauthorized)`. It is possible to disable the optimistic locking check by just omitting the `version` property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Get a specific entity instance  Each entity instance has its own URL where it can be retrieved. The URL is based on the entity id.  Performing a GET request on that URL returns the entity instance:  ### `GET /customer/id/3346`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/3346\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"version\": \"2\",       \"addresses\": [         {           \"id\": \"3348\",           \"version\": \"0\",           \"countryCode\": \"DE\",           \"createdDate\": 1487765943229,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1487765943229,           \"primeAddress\": true         },         {           \"id\": \"3976\",           \"version\": \"0\",           \"company\": \"11111\",           \"company2\": \"22222\",           \"countryCode\": \"DE\",           \"createdDate\": 1496040807652,           \"deliveryAddress\": false,           \"globalLocationNumber\": \"gln\",           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496040807648,           \"primeAddress\": false         }       ],       \"blocked\": false,       \"company\": \"Musterdaten GmbH\",       \"contacts\": [         {           \"id\": \"3377\",           \"version\": \"0\",           \"addresses\": [             {               \"id\": \"3379\",               \"version\": \"0\",               \"countryCode\": \"DE\",               \"createdDate\": 1487767121646,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1487767121645,               \"primeAddress\": true             }           ],           \"createdDate\": 1487767121649,           \"firstName\": \"Max\",           \"lastModifiedDate\": 1487767121642,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Musterdaten GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1487765943230,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1002\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496040807672,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  ## Create a new instance  Creating new instances is done by performing a POST request to the base URL of a resource.  The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified and there are defaults for some properties. Here are some general notes:  * id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified * references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),   for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary   to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they   must not contradict each other * usually some required properties have sensible defaults, so if those are not given or null then the default will be used * boolean properties can be optional (default value would be set) or mandatory   ### `POST /customer`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" \\   -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"Firma\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.   ## Update a specific instance  Updating an instances is done by performing a `PUT` request to the URL of the instance.  A successful response will have the status 200 (OK) and the response body will contain the updated entity.  Some special aspects must be considered when updating:  * the read-only properties like `createdDate` are ignored anyway, so they do not need to be given * `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below) * for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other * for complete entity updates boolean properties are always mandatory and need to be passed  ### Updating the complete entity  When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.  Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that new properties that the client does not know about are not accidentally overwritten with `null`.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" \\   -d  @- <<JSON {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } JSON ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  ### Updating only specific properties  It is also possible to update only specific properties. For this you only have to set the parameter `ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.  If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391?ignoreMissingProperties=true\" \\   -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```   ### Optimistic locking   For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the latest version, apply the changes and try the request again. It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Delete a specific instance  Deleting an instances is done by performing a `DELETE` request to the URL of the instance.  ### `DELETE /customer/id/{id}`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" ```  If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.  <span id=\"errors\"> </span>  # API error reference  weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with some notable differences:  * The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:   * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"   * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.   * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors. * Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.  ## Error JSON structure  The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:  | Property         | Datatype         | Description                                                                                                                                                                                                                                       | |------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              | | title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      | | status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            | | detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. | | instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      | | validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |  Validation errors have a similar structure:  | Property  | Datatype         | Description                                                                                                                                                                                                                                  | |-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         | | title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). | | detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           | | errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             | | instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     | | location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              | | allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |   ## Error reference   <span id=\"!/errors/context\"></span>  ### \"context\": operation not possible in this context  |            |                                       | |------------|---------------------------------------| | description | The operation is not possible in this context or with the current state of the data                  | | type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        | | status     | 409 (Conflict)|  <span id=\"!/errors/conversation\"></span>  ### \"conversation\": existing conversation (parameter 'cid') is not allowed  |            |                                       | |------------|---------------------------------------| | description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  | | type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        | | status     | 400 (Bad Request)| | detail | human readable information on the conversation |  <span id=\"!/errors/entity_not_found\"></span>  ### \"entity_not_found\": (sub)entity not found  |            |                                       | |------------|---------------------------------------| | description | The specified entity or (more likely) a referenced sub-entity could not be found.                  | | type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/forbidden\"></span>  ### \"forbidden\": insufficient privileges  |            |                                       | |------------|---------------------------------------| | description | The provided credentials are not sufficient to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        | | status     | 403 (Forbidden)|  <span id=\"!/errors/invalid_json\"></span>  ### \"invalid_json\": invalid json  |            |                                       | |------------|---------------------------------------| | description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  | | type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/not_found\"></span>  ### \"not_found\": resource not found  |            |                                       | |------------|---------------------------------------| | description | The API endpoint / method / entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        | | status     | 404 (Not Found)|  <span id=\"!/errors/optimistic_lock\"></span>  ### \"optimistic_lock\": optimistic lock error  |            |                                       | |------------|---------------------------------------| | description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  | | type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        | | status     | 409 (Conflict)| | instance | URI to affected entity if available |  <span id=\"!/errors/persistence\"></span>  ### \"persistence\": persistence error  |            |                                       | |------------|---------------------------------------| | description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  | | type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        | | status     | 409 (Conflict)|  <span id=\"!/errors/unauthorized\"></span>  ### \"unauthorized\": missing permission  |            |                                       | |------------|---------------------------------------| | description | Authorization or authentication problem                  | | type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        | | status     | 401 (Unauthorized)|  <span id=\"!/errors/unexpected\"></span>  ### \"unexpected\": unexpected error  |            |                                       | |------------|---------------------------------------| | description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  | | type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        | | status     | 500 (Internal Server Error)|  <span id=\"!/errors/unsupported_mime_type\"></span>  ### \"unsupported_mime_type\": unsupported mime type  |            |                                       | |------------|---------------------------------------| | description | The provided file type is not supported to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        | | status     | 415 (Unsupported Media Type)|  <span id=\"!/errors/validation\"></span>  ### \"validation\": validation failed  |            |                                       | |------------|---------------------------------------| | description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  | | type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        | | status     | 400 (Bad Request)| | validationErrors | validation errors |  ## Validation error reference   <span id=\"!/validation/authorization\"></span>  ### \"authorization\": no authorization to access property or referenced entity  |            |                                       | |------------|---------------------------------------| | description | The client lacks authorization to access the property or referenced entity                  | | type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |  <span id=\"!/validation/blocked\"></span>  ### \"blocked\": operation was blocked  |            |                                       | |------------|---------------------------------------| | description | The operation was blocked by referenced entities                  | | type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |  <span id=\"!/validation/consistency\"></span>  ### \"consistency\": values are inconsistent  |            |                                       | |------------|---------------------------------------| | description | The given values are inconsistent (general, unspecific error)                  | | type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |  <span id=\"!/validation/digits\"></span>  ### \"digits\": maximum number of digits exceeded  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  | | type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        | | allowed | maximum allowed integer digits, maximum allowed fraction digits |  <span id=\"!/validation/duplicate\"></span>  ### \"duplicate\": entity is a duplicate  |            |                                       | |------------|---------------------------------------| | description | The given (sub-)entity is a duplicate                  | | type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |  <span id=\"!/validation/email\"></span>  ### \"email\": not a well-formed email  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address                  | | type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |  <span id=\"!/validation/email_or_domain\"></span>  ### \"email_or_domain\": not a well-formed email or domain  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address or internet domain name                  | | type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |  <span id=\"!/validation/empty\"></span>  ### \"empty\": value must be empty  |            |                                       | |------------|---------------------------------------| | description | The value given must be left blank in this context, but is present                  | | type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |  <span id=\"!/validation/enum\"></span>  ### \"enum\": unsupported enum value  |            |                                       | |------------|---------------------------------------| | description | The given enum value is unknown or unsupported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        | | allowed | all known / allowed (enum) values |  <span id=\"!/validation/future\"></span>  ### \"future\": timestamp has to be in the future  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the future but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |  <span id=\"!/validation/greater_than\"></span>  ### \"greater_than\": value has to be above allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be larger than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        | | allowed | lower limit (excluded) |  <span id=\"!/validation/less_than\"></span>  ### \"less_than\": value has to be below allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be smaller than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        | | allowed | upper limit (excluded) |  <span id=\"!/validation/max\"></span>  ### \"max\": value is above allowed maximum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is larger than the allowed maximum                  | | type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        | | allowed | maximum allowed value |  <span id=\"!/validation/min\"></span>  ### \"min\": value is below allowed minimum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is smaller than the allowed minimum                  | | type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        | | allowed | minimum allowed value |  <span id=\"!/validation/not_empty\"></span>  ### \"not_empty\": value must not be empty  |            |                                       | |------------|---------------------------------------| | description | The value given is required, but is missing or blank                  | | type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |  <span id=\"!/validation/past\"></span>  ### \"past\": timestamp has to be in the past  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the past but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |  <span id=\"!/validation/pattern\"></span>  ### \"pattern\": value has to conform to a specific pattern  |            |                                       | |------------|---------------------------------------| | description | The text given does not conform to the allowed pattern                  | | type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        | | allowed | the pattern (regular expression) |  <span id=\"!/validation/reference\"></span>  ### \"reference\": referenced entity not found  |            |                                       | |------------|---------------------------------------| | description | The referenced entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |  <span id=\"!/validation/size\"></span>  ### \"size\": size is outside allowed range  |            |                                       | |------------|---------------------------------------| | description | The text or collection given has not enough or too many characters or elements                  | | type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        | | allowed | minimum size, maximum size |  <span id=\"!/validation/syntax\"></span>  ### \"syntax\": expression cannot be interpreted  |            |                                       | |------------|---------------------------------------| | description | The given expression does not conform to the expression syntax                  | | type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |  <span id=\"!/validation/type\"></span>  ### \"type\": unexpected data type  |            |                                       | |------------|---------------------------------------| | description | The given value is of a data type that's not supported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |
 *
 * The version of the OpenAPI document: 1
 * Contact: support@weclapp.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Model;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * TaxKey Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxKey
{
    /**
     * Possible values of this enum
     */
    public const AD_ADD_STANDARD = 'AD_ADD_STANDARD';

    public const AD_ADD_TAX_FREE_THIRD = 'AD_ADD_TAX_FREE_THIRD';

    public const AD_ADD_ZERO = 'AD_ADD_ZERO';

    public const AD_IN_STANDARD = 'AD_IN_STANDARD';

    public const AD_IN_TAX_FREE_THIRD = 'AD_IN_TAX_FREE_THIRD';

    public const AD_IN_ZERO = 'AD_IN_ZERO';

    public const AL_ADD_REDUCED = 'AL_ADD_REDUCED';

    public const AL_ADD_STANDARD = 'AL_ADD_STANDARD';

    public const AL_ADD_TAX_FREE_THIRD = 'AL_ADD_TAX_FREE_THIRD';

    public const AL_ADD_ZERO = 'AL_ADD_ZERO';

    public const AL_IN_REDUCED = 'AL_IN_REDUCED';

    public const AL_IN_STANDARD = 'AL_IN_STANDARD';

    public const AL_IN_TAX_FREE_THIRD = 'AL_IN_TAX_FREE_THIRD';

    public const AL_IN_ZERO = 'AL_IN_ZERO';

    public const AR_ADD_REDUCED = 'AR_ADD_REDUCED';

    public const AR_ADD_STANDARD = 'AR_ADD_STANDARD';

    public const AR_ADD_TAX_FREE_THIRD = 'AR_ADD_TAX_FREE_THIRD';

    public const AR_ADD_ZERO = 'AR_ADD_ZERO';

    public const AR_IN_REDUCED = 'AR_IN_REDUCED';

    public const AR_IN_STANDARD = 'AR_IN_STANDARD';

    public const AR_IN_TAX_FREE_THIRD = 'AR_IN_TAX_FREE_THIRD';

    public const AR_IN_ZERO = 'AR_IN_ZERO';

    public const AT_ADD_REDUCED = 'AT_ADD_REDUCED';

    public const AT_ADD_REDUCED_SLIGHT = 'AT_ADD_REDUCED_SLIGHT';

    public const AT_ADD_STANDARD = 'AT_ADD_STANDARD';

    public const AT_ADD_TAX_FREE_EU = 'AT_ADD_TAX_FREE_EU';

    public const AT_ADD_TAX_FREE_EU_SERVICES = 'AT_ADD_TAX_FREE_EU_SERVICES';

    public const AT_ADD_TAX_FREE_THIRD = 'AT_ADD_TAX_FREE_THIRD';

    public const AT_ADD_ZERO = 'AT_ADD_ZERO';

    public const AT_IN_REDUCED = 'AT_IN_REDUCED';

    public const AT_IN_REDUCED_SLIGHT = 'AT_IN_REDUCED_SLIGHT';

    public const AT_IN_REV_REDUCED_EU = 'AT_IN_REV_REDUCED_EU';

    public const AT_IN_REV_REDUCED_EU_SERVICE = 'AT_IN_REV_REDUCED_EU_SERVICE';

    public const AT_IN_REV_REDUCED_SLIGHT_EU = 'AT_IN_REV_REDUCED_SLIGHT_EU';

    public const AT_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'AT_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const AT_IN_REV_STANDARD_EU = 'AT_IN_REV_STANDARD_EU';

    public const AT_IN_REV_STANDARD_EU_SERVICE = 'AT_IN_REV_STANDARD_EU_SERVICE';

    public const AT_IN_STANDARD = 'AT_IN_STANDARD';

    public const AT_IN_TAX_FREE_THIRD = 'AT_IN_TAX_FREE_THIRD';

    public const AT_IN_ZERO = 'AT_IN_ZERO';

    public const AU_ADD_STANDARD = 'AU_ADD_STANDARD';

    public const AU_ADD_TAX_FREE_THIRD = 'AU_ADD_TAX_FREE_THIRD';

    public const AU_ADD_ZERO = 'AU_ADD_ZERO';

    public const AU_IN_STANDARD = 'AU_IN_STANDARD';

    public const AU_IN_TAX_FREE_THIRD = 'AU_IN_TAX_FREE_THIRD';

    public const AU_IN_ZERO = 'AU_IN_ZERO';

    public const BA_ADD_STANDARD = 'BA_ADD_STANDARD';

    public const BA_ADD_TAX_FREE_THIRD = 'BA_ADD_TAX_FREE_THIRD';

    public const BA_ADD_ZERO = 'BA_ADD_ZERO';

    public const BA_IN_STANDARD = 'BA_IN_STANDARD';

    public const BA_IN_TAX_FREE_THIRD = 'BA_IN_TAX_FREE_THIRD';

    public const BA_IN_ZERO = 'BA_IN_ZERO';

    public const BE_ADD_REDUCED = 'BE_ADD_REDUCED';

    public const BE_ADD_REDUCED_SLIGHT = 'BE_ADD_REDUCED_SLIGHT';

    public const BE_ADD_STANDARD = 'BE_ADD_STANDARD';

    public const BE_ADD_TAX_FREE_EU = 'BE_ADD_TAX_FREE_EU';

    public const BE_ADD_TAX_FREE_EU_SERVICES = 'BE_ADD_TAX_FREE_EU_SERVICES';

    public const BE_ADD_TAX_FREE_THIRD = 'BE_ADD_TAX_FREE_THIRD';

    public const BE_ADD_ZERO = 'BE_ADD_ZERO';

    public const BE_IN_REDUCED = 'BE_IN_REDUCED';

    public const BE_IN_REDUCED_SLIGHT = 'BE_IN_REDUCED_SLIGHT';

    public const BE_IN_REV_REDUCED_EU = 'BE_IN_REV_REDUCED_EU';

    public const BE_IN_REV_REDUCED_EU_SERVICE = 'BE_IN_REV_REDUCED_EU_SERVICE';

    public const BE_IN_REV_REDUCED_SLIGHT_EU = 'BE_IN_REV_REDUCED_SLIGHT_EU';

    public const BE_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'BE_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const BE_IN_REV_STANDARD_EU = 'BE_IN_REV_STANDARD_EU';

    public const BE_IN_REV_STANDARD_EU_SERVICE = 'BE_IN_REV_STANDARD_EU_SERVICE';

    public const BE_IN_STANDARD = 'BE_IN_STANDARD';

    public const BE_IN_TAX_FREE_THIRD = 'BE_IN_TAX_FREE_THIRD';

    public const BE_IN_ZERO = 'BE_IN_ZERO';

    public const BG_ADD_REDUCED = 'BG_ADD_REDUCED';

    public const BG_ADD_STANDARD = 'BG_ADD_STANDARD';

    public const BG_ADD_TAX_FREE_EU = 'BG_ADD_TAX_FREE_EU';

    public const BG_ADD_TAX_FREE_EU_SERVICES = 'BG_ADD_TAX_FREE_EU_SERVICES';

    public const BG_ADD_TAX_FREE_THIRD = 'BG_ADD_TAX_FREE_THIRD';

    public const BG_ADD_ZERO = 'BG_ADD_ZERO';

    public const BG_IN_REDUCED = 'BG_IN_REDUCED';

    public const BG_IN_REV_REDUCED_EU = 'BG_IN_REV_REDUCED_EU';

    public const BG_IN_REV_REDUCED_EU_SERVICE = 'BG_IN_REV_REDUCED_EU_SERVICE';

    public const BG_IN_REV_STANDARD_EU = 'BG_IN_REV_STANDARD_EU';

    public const BG_IN_REV_STANDARD_EU_SERVICE = 'BG_IN_REV_STANDARD_EU_SERVICE';

    public const BG_IN_STANDARD = 'BG_IN_STANDARD';

    public const BG_IN_TAX_FREE_THIRD = 'BG_IN_TAX_FREE_THIRD';

    public const BG_IN_ZERO = 'BG_IN_ZERO';

    public const BO_ADD_REDUCED = 'BO_ADD_REDUCED';

    public const BO_ADD_STANDARD = 'BO_ADD_STANDARD';

    public const BO_ADD_TAX_FREE_THIRD = 'BO_ADD_TAX_FREE_THIRD';

    public const BO_ADD_ZERO = 'BO_ADD_ZERO';

    public const BO_IN_REDUCED = 'BO_IN_REDUCED';

    public const BO_IN_STANDARD = 'BO_IN_STANDARD';

    public const BO_IN_TAX_FREE_THIRD = 'BO_IN_TAX_FREE_THIRD';

    public const BO_IN_ZERO = 'BO_IN_ZERO';

    public const BR_ADD_STANDARD = 'BR_ADD_STANDARD';

    public const BR_ADD_TAX_FREE_THIRD = 'BR_ADD_TAX_FREE_THIRD';

    public const BR_ADD_ZERO = 'BR_ADD_ZERO';

    public const BR_IN_STANDARD = 'BR_IN_STANDARD';

    public const BR_IN_TAX_FREE_THIRD = 'BR_IN_TAX_FREE_THIRD';

    public const BR_IN_ZERO = 'BR_IN_ZERO';

    public const CA_ADD_STANDARD = 'CA_ADD_STANDARD';

    public const CA_ADD_TAX_FREE_THIRD = 'CA_ADD_TAX_FREE_THIRD';

    public const CA_ADD_ZERO = 'CA_ADD_ZERO';

    public const CA_IN_STANDARD = 'CA_IN_STANDARD';

    public const CA_IN_TAX_FREE_THIRD = 'CA_IN_TAX_FREE_THIRD';

    public const CA_IN_ZERO = 'CA_IN_ZERO';

    public const CH_ADD_REDUCED = 'CH_ADD_REDUCED';

    public const CH_ADD_REDUCED_2024 = 'CH_ADD_REDUCED_2024';

    public const CH_ADD_REDUCED_SLIGHT = 'CH_ADD_REDUCED_SLIGHT';

    public const CH_ADD_REDUCED_SLIGHT_2024 = 'CH_ADD_REDUCED_SLIGHT_2024';

    public const CH_ADD_STANDARD = 'CH_ADD_STANDARD';

    public const CH_ADD_STANDARD_2024 = 'CH_ADD_STANDARD_2024';

    public const CH_ADD_TAX_FREE_THIRD = 'CH_ADD_TAX_FREE_THIRD';

    public const CH_ADD_ZERO = 'CH_ADD_ZERO';

    public const CH_IN_REDUCED = 'CH_IN_REDUCED';

    public const CH_IN_REDUCED_2024 = 'CH_IN_REDUCED_2024';

    public const CH_IN_REDUCED_SLIGHT = 'CH_IN_REDUCED_SLIGHT';

    public const CH_IN_REDUCED_SLIGHT_2024 = 'CH_IN_REDUCED_SLIGHT_2024';

    public const CH_IN_STANDARD = 'CH_IN_STANDARD';

    public const CH_IN_STANDARD_2024 = 'CH_IN_STANDARD_2024';

    public const CH_IN_TAX_FREE_THIRD = 'CH_IN_TAX_FREE_THIRD';

    public const CH_IN_ZERO = 'CH_IN_ZERO';

    public const CL_ADD_STANDARD = 'CL_ADD_STANDARD';

    public const CL_ADD_TAX_FREE_THIRD = 'CL_ADD_TAX_FREE_THIRD';

    public const CL_ADD_ZERO = 'CL_ADD_ZERO';

    public const CL_IN_STANDARD = 'CL_IN_STANDARD';

    public const CL_IN_TAX_FREE_THIRD = 'CL_IN_TAX_FREE_THIRD';

    public const CL_IN_ZERO = 'CL_IN_ZERO';

    public const CN_ADD_REDUCED = 'CN_ADD_REDUCED';

    public const CN_ADD_REDUCED_SLIGHT = 'CN_ADD_REDUCED_SLIGHT';

    public const CN_ADD_REDUCED_SUPER = 'CN_ADD_REDUCED_SUPER';

    public const CN_ADD_STANDARD = 'CN_ADD_STANDARD';

    public const CN_ADD_TAX_FREE_THIRD = 'CN_ADD_TAX_FREE_THIRD';

    public const CN_ADD_ZERO = 'CN_ADD_ZERO';

    public const CN_IN_REDUCED = 'CN_IN_REDUCED';

    public const CN_IN_REDUCED_SLIGHT = 'CN_IN_REDUCED_SLIGHT';

    public const CN_IN_REDUCED_SUPER = 'CN_IN_REDUCED_SUPER';

    public const CN_IN_STANDARD = 'CN_IN_STANDARD';

    public const CN_IN_TAX_FREE_THIRD = 'CN_IN_TAX_FREE_THIRD';

    public const CN_IN_ZERO = 'CN_IN_ZERO';

    public const CY_ADD_REDUCED = 'CY_ADD_REDUCED';

    public const CY_ADD_REDUCED_SLIGHT = 'CY_ADD_REDUCED_SLIGHT';

    public const CY_ADD_STANDARD = 'CY_ADD_STANDARD';

    public const CY_ADD_TAX_FREE_EU = 'CY_ADD_TAX_FREE_EU';

    public const CY_ADD_TAX_FREE_EU_SERVICES = 'CY_ADD_TAX_FREE_EU_SERVICES';

    public const CY_ADD_TAX_FREE_THIRD = 'CY_ADD_TAX_FREE_THIRD';

    public const CY_ADD_ZERO = 'CY_ADD_ZERO';

    public const CY_IN_REDUCED = 'CY_IN_REDUCED';

    public const CY_IN_REDUCED_SLIGHT = 'CY_IN_REDUCED_SLIGHT';

    public const CY_IN_REV_REDUCED_EU = 'CY_IN_REV_REDUCED_EU';

    public const CY_IN_REV_REDUCED_EU_SERVICE = 'CY_IN_REV_REDUCED_EU_SERVICE';

    public const CY_IN_REV_REDUCED_SLIGHT_EU = 'CY_IN_REV_REDUCED_SLIGHT_EU';

    public const CY_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'CY_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const CY_IN_REV_STANDARD_EU = 'CY_IN_REV_STANDARD_EU';

    public const CY_IN_REV_STANDARD_EU_SERVICE = 'CY_IN_REV_STANDARD_EU_SERVICE';

    public const CY_IN_STANDARD = 'CY_IN_STANDARD';

    public const CY_IN_TAX_FREE_THIRD = 'CY_IN_TAX_FREE_THIRD';

    public const CY_IN_ZERO = 'CY_IN_ZERO';

    public const CZ_ADD_REDUCED = 'CZ_ADD_REDUCED';

    public const CZ_ADD_REDUCED_2024 = 'CZ_ADD_REDUCED_2024';

    public const CZ_ADD_REDUCED_SLIGHT = 'CZ_ADD_REDUCED_SLIGHT';

    public const CZ_ADD_STANDARD = 'CZ_ADD_STANDARD';

    public const CZ_ADD_TAX_FREE_EU = 'CZ_ADD_TAX_FREE_EU';

    public const CZ_ADD_TAX_FREE_EU_SERVICES = 'CZ_ADD_TAX_FREE_EU_SERVICES';

    public const CZ_ADD_TAX_FREE_THIRD = 'CZ_ADD_TAX_FREE_THIRD';

    public const CZ_ADD_ZERO = 'CZ_ADD_ZERO';

    public const CZ_IN_REDUCED = 'CZ_IN_REDUCED';

    public const CZ_IN_REDUCED_2024 = 'CZ_IN_REDUCED_2024';

    public const CZ_IN_REDUCED_SLIGHT = 'CZ_IN_REDUCED_SLIGHT';

    public const CZ_IN_REV_REDUCED_EU = 'CZ_IN_REV_REDUCED_EU';

    public const CZ_IN_REV_REDUCED_EU_2024 = 'CZ_IN_REV_REDUCED_EU_2024';

    public const CZ_IN_REV_REDUCED_EU_SERVICE = 'CZ_IN_REV_REDUCED_EU_SERVICE';

    public const CZ_IN_REV_REDUCED_EU_SERVICE_2024 = 'CZ_IN_REV_REDUCED_EU_SERVICE_2024';

    public const CZ_IN_REV_REDUCED_SLIGHT_EU = 'CZ_IN_REV_REDUCED_SLIGHT_EU';

    public const CZ_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'CZ_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const CZ_IN_REV_STANDARD_EU = 'CZ_IN_REV_STANDARD_EU';

    public const CZ_IN_REV_STANDARD_EU_SERVICE = 'CZ_IN_REV_STANDARD_EU_SERVICE';

    public const CZ_IN_STANDARD = 'CZ_IN_STANDARD';

    public const CZ_IN_TAX_FREE_THIRD = 'CZ_IN_TAX_FREE_THIRD';

    public const CZ_IN_ZERO = 'CZ_IN_ZERO';

    public const DE_ADD_REDUCED = 'DE_ADD_REDUCED';

    public const DE_ADD_REDUCED_2020 = 'DE_ADD_REDUCED_2020';

    public const DE_ADD_STANDARD = 'DE_ADD_STANDARD';

    public const DE_ADD_STANDARD_2020 = 'DE_ADD_STANDARD_2020';

    public const DE_ADD_TAX_FREE_EU = 'DE_ADD_TAX_FREE_EU';

    public const DE_ADD_TAX_FREE_EU_SERVICES = 'DE_ADD_TAX_FREE_EU_SERVICES';

    public const DE_ADD_TAX_FREE_THIRD = 'DE_ADD_TAX_FREE_THIRD';

    public const DE_ADD_ZERO = 'DE_ADD_ZERO';

    public const DE_IN_IMPORT = 'DE_IN_IMPORT';

    public const DE_IN_REDUCED = 'DE_IN_REDUCED';

    public const DE_IN_REDUCED_2020 = 'DE_IN_REDUCED_2020';

    public const DE_IN_REV_REDUCED_EU = 'DE_IN_REV_REDUCED_EU';

    public const DE_IN_REV_REDUCED_EU_2020 = 'DE_IN_REV_REDUCED_EU_2020';

    public const DE_IN_REV_REDUCED_EU_SERVICE = 'DE_IN_REV_REDUCED_EU_SERVICE';

    public const DE_IN_REV_REDUCED_EU_SERVICE_2020 = 'DE_IN_REV_REDUCED_EU_SERVICE_2020';

    public const DE_IN_REV_STANDARD_EU = 'DE_IN_REV_STANDARD_EU';

    public const DE_IN_REV_STANDARD_EU_2020 = 'DE_IN_REV_STANDARD_EU_2020';

    public const DE_IN_REV_STANDARD_EU_SERVICE = 'DE_IN_REV_STANDARD_EU_SERVICE';

    public const DE_IN_REV_STANDARD_EU_SERVICE_2020 = 'DE_IN_REV_STANDARD_EU_SERVICE_2020';

    public const DE_IN_STANDARD = 'DE_IN_STANDARD';

    public const DE_IN_STANDARD_2020 = 'DE_IN_STANDARD_2020';

    public const DE_IN_TAX_FREE_THIRD = 'DE_IN_TAX_FREE_THIRD';

    public const DE_IN_ZERO = 'DE_IN_ZERO';

    public const DK_ADD_STANDARD = 'DK_ADD_STANDARD';

    public const DK_ADD_TAX_FREE_EU = 'DK_ADD_TAX_FREE_EU';

    public const DK_ADD_TAX_FREE_EU_SERVICES = 'DK_ADD_TAX_FREE_EU_SERVICES';

    public const DK_ADD_TAX_FREE_THIRD = 'DK_ADD_TAX_FREE_THIRD';

    public const DK_ADD_ZERO = 'DK_ADD_ZERO';

    public const DK_IN_REV_STANDARD_EU = 'DK_IN_REV_STANDARD_EU';

    public const DK_IN_REV_STANDARD_EU_SERVICE = 'DK_IN_REV_STANDARD_EU_SERVICE';

    public const DK_IN_STANDARD = 'DK_IN_STANDARD';

    public const DK_IN_TAX_FREE_THIRD = 'DK_IN_TAX_FREE_THIRD';

    public const DK_IN_ZERO = 'DK_IN_ZERO';

    public const EE_ADD_REDUCED = 'EE_ADD_REDUCED';

    public const EE_ADD_REDUCED_SLIGHT_2025 = 'EE_ADD_REDUCED_SLIGHT_2025';

    public const EE_ADD_STANDARD = 'EE_ADD_STANDARD';

    public const EE_ADD_STANDARD_2024 = 'EE_ADD_STANDARD_2024';

    public const EE_ADD_TAX_FREE_EU = 'EE_ADD_TAX_FREE_EU';

    public const EE_ADD_TAX_FREE_EU_SERVICES = 'EE_ADD_TAX_FREE_EU_SERVICES';

    public const EE_ADD_TAX_FREE_THIRD = 'EE_ADD_TAX_FREE_THIRD';

    public const EE_ADD_ZERO = 'EE_ADD_ZERO';

    public const EE_IN_REDUCED = 'EE_IN_REDUCED';

    public const EE_IN_REDUCED_SLIGHT_2025 = 'EE_IN_REDUCED_SLIGHT_2025';

    public const EE_IN_REV_REDUCED_EU = 'EE_IN_REV_REDUCED_EU';

    public const EE_IN_REV_REDUCED_EU_SERVICE = 'EE_IN_REV_REDUCED_EU_SERVICE';

    public const EE_IN_REV_REDUCED_SLIGHT_EU_2025 = 'EE_IN_REV_REDUCED_SLIGHT_EU_2025';

    public const EE_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2025 = 'EE_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2025';

    public const EE_IN_REV_STANDARD_EU = 'EE_IN_REV_STANDARD_EU';

    public const EE_IN_REV_STANDARD_EU_2024 = 'EE_IN_REV_STANDARD_EU_2024';

    public const EE_IN_REV_STANDARD_EU_SERVICE = 'EE_IN_REV_STANDARD_EU_SERVICE';

    public const EE_IN_REV_STANDARD_EU_SERVICE_2024 = 'EE_IN_REV_STANDARD_EU_SERVICE_2024';

    public const EE_IN_STANDARD = 'EE_IN_STANDARD';

    public const EE_IN_STANDARD_2024 = 'EE_IN_STANDARD_2024';

    public const EE_IN_TAX_FREE_THIRD = 'EE_IN_TAX_FREE_THIRD';

    public const EE_IN_ZERO = 'EE_IN_ZERO';

    public const ES_ADD_REDUCED = 'ES_ADD_REDUCED';

    public const ES_ADD_REDUCED_SLIGHT = 'ES_ADD_REDUCED_SLIGHT';

    public const ES_ADD_STANDARD = 'ES_ADD_STANDARD';

    public const ES_ADD_TAX_FREE_EU = 'ES_ADD_TAX_FREE_EU';

    public const ES_ADD_TAX_FREE_EU_SERVICES = 'ES_ADD_TAX_FREE_EU_SERVICES';

    public const ES_ADD_TAX_FREE_THIRD = 'ES_ADD_TAX_FREE_THIRD';

    public const ES_ADD_ZERO = 'ES_ADD_ZERO';

    public const ES_IN_REDUCED = 'ES_IN_REDUCED';

    public const ES_IN_REDUCED_SLIGHT = 'ES_IN_REDUCED_SLIGHT';

    public const ES_IN_REV_REDUCED_EU = 'ES_IN_REV_REDUCED_EU';

    public const ES_IN_REV_REDUCED_EU_SERVICE = 'ES_IN_REV_REDUCED_EU_SERVICE';

    public const ES_IN_REV_REDUCED_SLIGHT_EU = 'ES_IN_REV_REDUCED_SLIGHT_EU';

    public const ES_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'ES_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const ES_IN_REV_STANDARD_EU = 'ES_IN_REV_STANDARD_EU';

    public const ES_IN_REV_STANDARD_EU_SERVICE = 'ES_IN_REV_STANDARD_EU_SERVICE';

    public const ES_IN_STANDARD = 'ES_IN_STANDARD';

    public const ES_IN_TAX_FREE_THIRD = 'ES_IN_TAX_FREE_THIRD';

    public const ES_IN_ZERO = 'ES_IN_ZERO';

    public const FI_ADD_REDUCED = 'FI_ADD_REDUCED';

    public const FI_ADD_REDUCED_SLIGHT = 'FI_ADD_REDUCED_SLIGHT';

    public const FI_ADD_STANDARD = 'FI_ADD_STANDARD';

    public const FI_ADD_STANDARD_09_2024 = 'FI_ADD_STANDARD_09_2024';

    public const FI_ADD_TAX_FREE_EU = 'FI_ADD_TAX_FREE_EU';

    public const FI_ADD_TAX_FREE_EU_SERVICES = 'FI_ADD_TAX_FREE_EU_SERVICES';

    public const FI_ADD_TAX_FREE_THIRD = 'FI_ADD_TAX_FREE_THIRD';

    public const FI_ADD_ZERO = 'FI_ADD_ZERO';

    public const FI_IN_REDUCED = 'FI_IN_REDUCED';

    public const FI_IN_REDUCED_SLIGHT = 'FI_IN_REDUCED_SLIGHT';

    public const FI_IN_REV_REDUCED_EU = 'FI_IN_REV_REDUCED_EU';

    public const FI_IN_REV_REDUCED_EU_SERVICE = 'FI_IN_REV_REDUCED_EU_SERVICE';

    public const FI_IN_REV_REDUCED_SLIGHT_EU = 'FI_IN_REV_REDUCED_SLIGHT_EU';

    public const FI_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'FI_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const FI_IN_REV_STANDARD_EU = 'FI_IN_REV_STANDARD_EU';

    public const FI_IN_REV_STANDARD_EU_09_2024 = 'FI_IN_REV_STANDARD_EU_09_2024';

    public const FI_IN_REV_STANDARD_EU_SERVICE = 'FI_IN_REV_STANDARD_EU_SERVICE';

    public const FI_IN_STANDARD = 'FI_IN_STANDARD';

    public const FI_IN_STANDARD_09_2024 = 'FI_IN_STANDARD_09_2024';

    public const FI_IN_TAX_FREE_THIRD = 'FI_IN_TAX_FREE_THIRD';

    public const FI_IN_ZERO = 'FI_IN_ZERO';

    public const FO_ADD_STANDARD = 'FO_ADD_STANDARD';

    public const FO_ADD_TAX_FREE_THIRD = 'FO_ADD_TAX_FREE_THIRD';

    public const FO_ADD_ZERO = 'FO_ADD_ZERO';

    public const FO_IN_STANDARD = 'FO_IN_STANDARD';

    public const FO_IN_TAX_FREE_THIRD = 'FO_IN_TAX_FREE_THIRD';

    public const FO_IN_ZERO = 'FO_IN_ZERO';

    public const FR_ADD_REDUCED = 'FR_ADD_REDUCED';

    public const FR_ADD_REDUCED_SLIGHT = 'FR_ADD_REDUCED_SLIGHT';

    public const FR_ADD_REDUCED_SUPER = 'FR_ADD_REDUCED_SUPER';

    public const FR_ADD_STANDARD = 'FR_ADD_STANDARD';

    public const FR_ADD_TAX_FREE_EU = 'FR_ADD_TAX_FREE_EU';

    public const FR_ADD_TAX_FREE_EU_SERVICES = 'FR_ADD_TAX_FREE_EU_SERVICES';

    public const FR_ADD_TAX_FREE_THIRD = 'FR_ADD_TAX_FREE_THIRD';

    public const FR_ADD_ZERO = 'FR_ADD_ZERO';

    public const FR_IN_REDUCED = 'FR_IN_REDUCED';

    public const FR_IN_REDUCED_SLIGHT = 'FR_IN_REDUCED_SLIGHT';

    public const FR_IN_REDUCED_SUPER = 'FR_IN_REDUCED_SUPER';

    public const FR_IN_REV_REDUCED_EU = 'FR_IN_REV_REDUCED_EU';

    public const FR_IN_REV_REDUCED_EU_SERVICE = 'FR_IN_REV_REDUCED_EU_SERVICE';

    public const FR_IN_REV_REDUCED_SLIGHT_EU = 'FR_IN_REV_REDUCED_SLIGHT_EU';

    public const FR_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'FR_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const FR_IN_REV_REDUCED_SUPER_EU = 'FR_IN_REV_REDUCED_SUPER_EU';

    public const FR_IN_REV_REDUCED_SUPER_EU_SERVICE = 'FR_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const FR_IN_REV_STANDARD_EU = 'FR_IN_REV_STANDARD_EU';

    public const FR_IN_REV_STANDARD_EU_SERVICE = 'FR_IN_REV_STANDARD_EU_SERVICE';

    public const FR_IN_STANDARD = 'FR_IN_STANDARD';

    public const FR_IN_TAX_FREE_THIRD = 'FR_IN_TAX_FREE_THIRD';

    public const FR_IN_ZERO = 'FR_IN_ZERO';

    public const GB_ADD_REDUCED = 'GB_ADD_REDUCED';

    public const GB_ADD_STANDARD = 'GB_ADD_STANDARD';

    public const GB_ADD_TAX_FREE_THIRD = 'GB_ADD_TAX_FREE_THIRD';

    public const GB_ADD_ZERO = 'GB_ADD_ZERO';

    public const GB_IN_REDUCED = 'GB_IN_REDUCED';

    public const GB_IN_STANDARD = 'GB_IN_STANDARD';

    public const GB_IN_TAX_FREE_THIRD = 'GB_IN_TAX_FREE_THIRD';

    public const GB_IN_ZERO = 'GB_IN_ZERO';

    public const GR_ADD_REDUCED = 'GR_ADD_REDUCED';

    public const GR_ADD_REDUCED_SLIGHT = 'GR_ADD_REDUCED_SLIGHT';

    public const GR_ADD_STANDARD = 'GR_ADD_STANDARD';

    public const GR_ADD_TAX_FREE_EU = 'GR_ADD_TAX_FREE_EU';

    public const GR_ADD_TAX_FREE_EU_SERVICES = 'GR_ADD_TAX_FREE_EU_SERVICES';

    public const GR_ADD_TAX_FREE_THIRD = 'GR_ADD_TAX_FREE_THIRD';

    public const GR_ADD_ZERO = 'GR_ADD_ZERO';

    public const GR_IN_REDUCED = 'GR_IN_REDUCED';

    public const GR_IN_REDUCED_SLIGHT = 'GR_IN_REDUCED_SLIGHT';

    public const GR_IN_REV_REDUCED_EU = 'GR_IN_REV_REDUCED_EU';

    public const GR_IN_REV_REDUCED_EU_SERVICE = 'GR_IN_REV_REDUCED_EU_SERVICE';

    public const GR_IN_REV_REDUCED_SLIGHT_EU = 'GR_IN_REV_REDUCED_SLIGHT_EU';

    public const GR_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'GR_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const GR_IN_REV_STANDARD_EU = 'GR_IN_REV_STANDARD_EU';

    public const GR_IN_REV_STANDARD_EU_SERVICE = 'GR_IN_REV_STANDARD_EU_SERVICE';

    public const GR_IN_STANDARD = 'GR_IN_STANDARD';

    public const GR_IN_TAX_FREE_THIRD = 'GR_IN_TAX_FREE_THIRD';

    public const GR_IN_ZERO = 'GR_IN_ZERO';

    public const HR_ADD_REDUCED = 'HR_ADD_REDUCED';

    public const HR_ADD_REDUCED_SLIGHT = 'HR_ADD_REDUCED_SLIGHT';

    public const HR_ADD_STANDARD = 'HR_ADD_STANDARD';

    public const HR_ADD_TAX_FREE_EU = 'HR_ADD_TAX_FREE_EU';

    public const HR_ADD_TAX_FREE_EU_SERVICES = 'HR_ADD_TAX_FREE_EU_SERVICES';

    public const HR_ADD_TAX_FREE_THIRD = 'HR_ADD_TAX_FREE_THIRD';

    public const HR_ADD_ZERO = 'HR_ADD_ZERO';

    public const HR_IN_REDUCED = 'HR_IN_REDUCED';

    public const HR_IN_REDUCED_SLIGHT = 'HR_IN_REDUCED_SLIGHT';

    public const HR_IN_REV_REDUCED_EU = 'HR_IN_REV_REDUCED_EU';

    public const HR_IN_REV_REDUCED_EU_SERVICE = 'HR_IN_REV_REDUCED_EU_SERVICE';

    public const HR_IN_REV_REDUCED_SLIGHT_EU = 'HR_IN_REV_REDUCED_SLIGHT_EU';

    public const HR_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'HR_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const HR_IN_REV_STANDARD_EU = 'HR_IN_REV_STANDARD_EU';

    public const HR_IN_REV_STANDARD_EU_SERVICE = 'HR_IN_REV_STANDARD_EU_SERVICE';

    public const HR_IN_STANDARD = 'HR_IN_STANDARD';

    public const HR_IN_TAX_FREE_THIRD = 'HR_IN_TAX_FREE_THIRD';

    public const HR_IN_ZERO = 'HR_IN_ZERO';

    public const HU_ADD_REDUCED = 'HU_ADD_REDUCED';

    public const HU_ADD_REDUCED_SLIGHT = 'HU_ADD_REDUCED_SLIGHT';

    public const HU_ADD_STANDARD = 'HU_ADD_STANDARD';

    public const HU_ADD_TAX_FREE_EU = 'HU_ADD_TAX_FREE_EU';

    public const HU_ADD_TAX_FREE_EU_SERVICES = 'HU_ADD_TAX_FREE_EU_SERVICES';

    public const HU_ADD_TAX_FREE_THIRD = 'HU_ADD_TAX_FREE_THIRD';

    public const HU_ADD_ZERO = 'HU_ADD_ZERO';

    public const HU_IN_REDUCED = 'HU_IN_REDUCED';

    public const HU_IN_REDUCED_SLIGHT = 'HU_IN_REDUCED_SLIGHT';

    public const HU_IN_REV_REDUCED_EU = 'HU_IN_REV_REDUCED_EU';

    public const HU_IN_REV_REDUCED_EU_SERVICE = 'HU_IN_REV_REDUCED_EU_SERVICE';

    public const HU_IN_REV_REDUCED_SLIGHT_EU = 'HU_IN_REV_REDUCED_SLIGHT_EU';

    public const HU_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'HU_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const HU_IN_REV_STANDARD_EU = 'HU_IN_REV_STANDARD_EU';

    public const HU_IN_REV_STANDARD_EU_SERVICE = 'HU_IN_REV_STANDARD_EU_SERVICE';

    public const HU_IN_STANDARD = 'HU_IN_STANDARD';

    public const HU_IN_TAX_FREE_THIRD = 'HU_IN_TAX_FREE_THIRD';

    public const HU_IN_ZERO = 'HU_IN_ZERO';

    public const IE_ADD_REDUCED = 'IE_ADD_REDUCED';

    public const IE_ADD_REDUCED_SLIGHT = 'IE_ADD_REDUCED_SLIGHT';

    public const IE_ADD_REDUCED_SUPER = 'IE_ADD_REDUCED_SUPER';

    public const IE_ADD_STANDARD = 'IE_ADD_STANDARD';

    public const IE_ADD_TAX_FREE_EU = 'IE_ADD_TAX_FREE_EU';

    public const IE_ADD_TAX_FREE_EU_SERVICES = 'IE_ADD_TAX_FREE_EU_SERVICES';

    public const IE_ADD_TAX_FREE_THIRD = 'IE_ADD_TAX_FREE_THIRD';

    public const IE_ADD_ZERO = 'IE_ADD_ZERO';

    public const IE_IN_REDUCED = 'IE_IN_REDUCED';

    public const IE_IN_REDUCED_SLIGHT = 'IE_IN_REDUCED_SLIGHT';

    public const IE_IN_REDUCED_SUPER = 'IE_IN_REDUCED_SUPER';

    public const IE_IN_REV_REDUCED_EU = 'IE_IN_REV_REDUCED_EU';

    public const IE_IN_REV_REDUCED_EU_SERVICE = 'IE_IN_REV_REDUCED_EU_SERVICE';

    public const IE_IN_REV_REDUCED_SLIGHT_EU = 'IE_IN_REV_REDUCED_SLIGHT_EU';

    public const IE_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'IE_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const IE_IN_REV_REDUCED_SUPER_EU = 'IE_IN_REV_REDUCED_SUPER_EU';

    public const IE_IN_REV_REDUCED_SUPER_EU_SERVICE = 'IE_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const IE_IN_REV_STANDARD_EU = 'IE_IN_REV_STANDARD_EU';

    public const IE_IN_REV_STANDARD_EU_SERVICE = 'IE_IN_REV_STANDARD_EU_SERVICE';

    public const IE_IN_STANDARD = 'IE_IN_STANDARD';

    public const IE_IN_TAX_FREE_THIRD = 'IE_IN_TAX_FREE_THIRD';

    public const IE_IN_ZERO = 'IE_IN_ZERO';

    public const IL_ADD_REDUCED = 'IL_ADD_REDUCED';

    public const IL_ADD_STANDARD = 'IL_ADD_STANDARD';

    public const IL_ADD_TAX_FREE_THIRD = 'IL_ADD_TAX_FREE_THIRD';

    public const IL_ADD_ZERO = 'IL_ADD_ZERO';

    public const IL_IN_REDUCED = 'IL_IN_REDUCED';

    public const IL_IN_STANDARD = 'IL_IN_STANDARD';

    public const IL_IN_TAX_FREE_THIRD = 'IL_IN_TAX_FREE_THIRD';

    public const IL_IN_ZERO = 'IL_IN_ZERO';

    public const IN_ADD_REDUCED = 'IN_ADD_REDUCED';

    public const IN_ADD_REDUCED_SUPER = 'IN_ADD_REDUCED_SUPER';

    public const IN_ADD_STANDARD = 'IN_ADD_STANDARD';

    public const IN_ADD_TAX_FREE_THIRD = 'IN_ADD_TAX_FREE_THIRD';

    public const IN_ADD_ZERO = 'IN_ADD_ZERO';

    public const IN_IN_REDUCED = 'IN_IN_REDUCED';

    public const IN_IN_REDUCED_SUPER = 'IN_IN_REDUCED_SUPER';

    public const IN_IN_STANDARD = 'IN_IN_STANDARD';

    public const IN_IN_TAX_FREE_THIRD = 'IN_IN_TAX_FREE_THIRD';

    public const IN_IN_ZERO = 'IN_IN_ZERO';

    public const IS_ADD_REDUCED = 'IS_ADD_REDUCED';

    public const IS_ADD_STANDARD = 'IS_ADD_STANDARD';

    public const IS_ADD_TAX_FREE_THIRD = 'IS_ADD_TAX_FREE_THIRD';

    public const IS_ADD_ZERO = 'IS_ADD_ZERO';

    public const IS_IN_REDUCED = 'IS_IN_REDUCED';

    public const IS_IN_STANDARD = 'IS_IN_STANDARD';

    public const IS_IN_TAX_FREE_THIRD = 'IS_IN_TAX_FREE_THIRD';

    public const IS_IN_ZERO = 'IS_IN_ZERO';

    public const IT_ADD_REDUCED = 'IT_ADD_REDUCED';

    public const IT_ADD_REDUCED_SLIGHT = 'IT_ADD_REDUCED_SLIGHT';

    public const IT_ADD_REDUCED_SUPER = 'IT_ADD_REDUCED_SUPER';

    public const IT_ADD_STANDARD = 'IT_ADD_STANDARD';

    public const IT_ADD_TAX_FREE_EU = 'IT_ADD_TAX_FREE_EU';

    public const IT_ADD_TAX_FREE_EU_SERVICES = 'IT_ADD_TAX_FREE_EU_SERVICES';

    public const IT_ADD_TAX_FREE_LETTER_OF_INTENT = 'IT_ADD_TAX_FREE_LETTER_OF_INTENT';

    public const IT_ADD_TAX_FREE_THIRD = 'IT_ADD_TAX_FREE_THIRD';

    public const IT_ADD_TAX_FREE_THIRD_SERVICES = 'IT_ADD_TAX_FREE_THIRD_SERVICES';

    public const IT_ADD_ZERO = 'IT_ADD_ZERO';

    public const IT_IN_REDUCED = 'IT_IN_REDUCED';

    public const IT_IN_REDUCED_SLIGHT = 'IT_IN_REDUCED_SLIGHT';

    public const IT_IN_REDUCED_SUPER = 'IT_IN_REDUCED_SUPER';

    public const IT_IN_REV_REDUCED_EU = 'IT_IN_REV_REDUCED_EU';

    public const IT_IN_REV_REDUCED_EU_SERVICE = 'IT_IN_REV_REDUCED_EU_SERVICE';

    public const IT_IN_REV_REDUCED_SLIGHT_EU = 'IT_IN_REV_REDUCED_SLIGHT_EU';

    public const IT_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'IT_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const IT_IN_REV_REDUCED_SUPER_EU = 'IT_IN_REV_REDUCED_SUPER_EU';

    public const IT_IN_REV_REDUCED_SUPER_EU_SERVICE = 'IT_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const IT_IN_REV_STANDARD_EU = 'IT_IN_REV_STANDARD_EU';

    public const IT_IN_REV_STANDARD_EU_SERVICE = 'IT_IN_REV_STANDARD_EU_SERVICE';

    public const IT_IN_STANDARD = 'IT_IN_STANDARD';

    public const IT_IN_TAX_FREE_LETTER_OF_INTENT = 'IT_IN_TAX_FREE_LETTER_OF_INTENT';

    public const IT_IN_TAX_FREE_THIRD = 'IT_IN_TAX_FREE_THIRD';

    public const IT_IN_ZERO = 'IT_IN_ZERO';

    public const JP_ADD_STANDARD = 'JP_ADD_STANDARD';

    public const JP_ADD_TAX_FREE_THIRD = 'JP_ADD_TAX_FREE_THIRD';

    public const JP_ADD_ZERO = 'JP_ADD_ZERO';

    public const JP_IN_STANDARD = 'JP_IN_STANDARD';

    public const JP_IN_TAX_FREE_THIRD = 'JP_IN_TAX_FREE_THIRD';

    public const JP_IN_ZERO = 'JP_IN_ZERO';

    public const LI_ADD_REDUCED = 'LI_ADD_REDUCED';

    public const LI_ADD_REDUCED_2024 = 'LI_ADD_REDUCED_2024';

    public const LI_ADD_REDUCED_SUPER = 'LI_ADD_REDUCED_SUPER';

    public const LI_ADD_REDUCED_SUPER_2024 = 'LI_ADD_REDUCED_SUPER_2024';

    public const LI_ADD_STANDARD = 'LI_ADD_STANDARD';

    public const LI_ADD_STANDARD_2024 = 'LI_ADD_STANDARD_2024';

    public const LI_ADD_TAX_FREE_THIRD = 'LI_ADD_TAX_FREE_THIRD';

    public const LI_ADD_ZERO = 'LI_ADD_ZERO';

    public const LI_IN_REDUCED = 'LI_IN_REDUCED';

    public const LI_IN_REDUCED_2024 = 'LI_IN_REDUCED_2024';

    public const LI_IN_REDUCED_SUPER = 'LI_IN_REDUCED_SUPER';

    public const LI_IN_REDUCED_SUPER_2024 = 'LI_IN_REDUCED_SUPER_2024';

    public const LI_IN_STANDARD = 'LI_IN_STANDARD';

    public const LI_IN_STANDARD_2024 = 'LI_IN_STANDARD_2024';

    public const LI_IN_TAX_FREE_THIRD = 'LI_IN_TAX_FREE_THIRD';

    public const LI_IN_ZERO = 'LI_IN_ZERO';

    public const LK_ADD_STANDARD = 'LK_ADD_STANDARD';

    public const LK_ADD_TAX_FREE_THIRD = 'LK_ADD_TAX_FREE_THIRD';

    public const LK_ADD_ZERO = 'LK_ADD_ZERO';

    public const LK_IN_STANDARD = 'LK_IN_STANDARD';

    public const LK_IN_TAX_FREE_THIRD = 'LK_IN_TAX_FREE_THIRD';

    public const LK_IN_ZERO = 'LK_IN_ZERO';

    public const LT_ADD_REDUCED = 'LT_ADD_REDUCED';

    public const LT_ADD_REDUCED_SLIGHT = 'LT_ADD_REDUCED_SLIGHT';

    public const LT_ADD_STANDARD = 'LT_ADD_STANDARD';

    public const LT_ADD_TAX_FREE_EU = 'LT_ADD_TAX_FREE_EU';

    public const LT_ADD_TAX_FREE_EU_SERVICES = 'LT_ADD_TAX_FREE_EU_SERVICES';

    public const LT_ADD_TAX_FREE_THIRD = 'LT_ADD_TAX_FREE_THIRD';

    public const LT_ADD_ZERO = 'LT_ADD_ZERO';

    public const LT_IN_REDUCED = 'LT_IN_REDUCED';

    public const LT_IN_REDUCED_SLIGHT = 'LT_IN_REDUCED_SLIGHT';

    public const LT_IN_REV_REDUCED_EU = 'LT_IN_REV_REDUCED_EU';

    public const LT_IN_REV_REDUCED_EU_SERVICE = 'LT_IN_REV_REDUCED_EU_SERVICE';

    public const LT_IN_REV_REDUCED_SLIGHT_EU = 'LT_IN_REV_REDUCED_SLIGHT_EU';

    public const LT_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'LT_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const LT_IN_REV_STANDARD_EU = 'LT_IN_REV_STANDARD_EU';

    public const LT_IN_REV_STANDARD_EU_SERVICE = 'LT_IN_REV_STANDARD_EU_SERVICE';

    public const LT_IN_STANDARD = 'LT_IN_STANDARD';

    public const LT_IN_TAX_FREE_THIRD = 'LT_IN_TAX_FREE_THIRD';

    public const LT_IN_ZERO = 'LT_IN_ZERO';

    public const LU_ADD_REDUCED = 'LU_ADD_REDUCED';

    public const LU_ADD_REDUCED_2023 = 'LU_ADD_REDUCED_2023';

    public const LU_ADD_REDUCED_SLIGHT = 'LU_ADD_REDUCED_SLIGHT';

    public const LU_ADD_REDUCED_SLIGHT_2023 = 'LU_ADD_REDUCED_SLIGHT_2023';

    public const LU_ADD_REDUCED_SUPER = 'LU_ADD_REDUCED_SUPER';

    public const LU_ADD_STANDARD = 'LU_ADD_STANDARD';

    public const LU_ADD_STANDARD_2023 = 'LU_ADD_STANDARD_2023';

    public const LU_ADD_TAX_FREE_EU = 'LU_ADD_TAX_FREE_EU';

    public const LU_ADD_TAX_FREE_EU_SERVICES = 'LU_ADD_TAX_FREE_EU_SERVICES';

    public const LU_ADD_TAX_FREE_THIRD = 'LU_ADD_TAX_FREE_THIRD';

    public const LU_ADD_ZERO = 'LU_ADD_ZERO';

    public const LU_IN_REDUCED = 'LU_IN_REDUCED';

    public const LU_IN_REDUCED_2023 = 'LU_IN_REDUCED_2023';

    public const LU_IN_REDUCED_SLIGHT = 'LU_IN_REDUCED_SLIGHT';

    public const LU_IN_REDUCED_SLIGHT_2023 = 'LU_IN_REDUCED_SLIGHT_2023';

    public const LU_IN_REDUCED_SUPER = 'LU_IN_REDUCED_SUPER';

    public const LU_IN_REV_REDUCED_EU = 'LU_IN_REV_REDUCED_EU';

    public const LU_IN_REV_REDUCED_EU_2023 = 'LU_IN_REV_REDUCED_EU_2023';

    public const LU_IN_REV_REDUCED_EU_SERVICE = 'LU_IN_REV_REDUCED_EU_SERVICE';

    public const LU_IN_REV_REDUCED_EU_SERVICE_2023 = 'LU_IN_REV_REDUCED_EU_SERVICE_2023';

    public const LU_IN_REV_REDUCED_SLIGHT_EU = 'LU_IN_REV_REDUCED_SLIGHT_EU';

    public const LU_IN_REV_REDUCED_SLIGHT_EU_2023 = 'LU_IN_REV_REDUCED_SLIGHT_EU_2023';

    public const LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2023 = 'LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2023';

    public const LU_IN_REV_REDUCED_SUPER_EU = 'LU_IN_REV_REDUCED_SUPER_EU';

    public const LU_IN_REV_REDUCED_SUPER_EU_SERVICE = 'LU_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const LU_IN_REV_STANDARD_EU = 'LU_IN_REV_STANDARD_EU';

    public const LU_IN_REV_STANDARD_EU_2023 = 'LU_IN_REV_STANDARD_EU_2023';

    public const LU_IN_REV_STANDARD_EU_SERVICE = 'LU_IN_REV_STANDARD_EU_SERVICE';

    public const LU_IN_REV_STANDARD_EU_SERVICE_2023 = 'LU_IN_REV_STANDARD_EU_SERVICE_2023';

    public const LU_IN_STANDARD = 'LU_IN_STANDARD';

    public const LU_IN_STANDARD_2023 = 'LU_IN_STANDARD_2023';

    public const LU_IN_TAX_FREE_THIRD = 'LU_IN_TAX_FREE_THIRD';

    public const LU_IN_ZERO = 'LU_IN_ZERO';

    public const LV_ADD_REDUCED = 'LV_ADD_REDUCED';

    public const LV_ADD_REDUCED_SLIGHT = 'LV_ADD_REDUCED_SLIGHT';

    public const LV_ADD_STANDARD = 'LV_ADD_STANDARD';

    public const LV_ADD_TAX_FREE_EU = 'LV_ADD_TAX_FREE_EU';

    public const LV_ADD_TAX_FREE_EU_SERVICES = 'LV_ADD_TAX_FREE_EU_SERVICES';

    public const LV_ADD_TAX_FREE_THIRD = 'LV_ADD_TAX_FREE_THIRD';

    public const LV_ADD_ZERO = 'LV_ADD_ZERO';

    public const LV_IN_REDUCED = 'LV_IN_REDUCED';

    public const LV_IN_REDUCED_SLIGHT = 'LV_IN_REDUCED_SLIGHT';

    public const LV_IN_REV_REDUCED_EU = 'LV_IN_REV_REDUCED_EU';

    public const LV_IN_REV_REDUCED_EU_SERVICE = 'LV_IN_REV_REDUCED_EU_SERVICE';

    public const LV_IN_REV_REDUCED_SLIGHT_EU = 'LV_IN_REV_REDUCED_SLIGHT_EU';

    public const LV_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'LV_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const LV_IN_REV_STANDARD_EU = 'LV_IN_REV_STANDARD_EU';

    public const LV_IN_REV_STANDARD_EU_SERVICE = 'LV_IN_REV_STANDARD_EU_SERVICE';

    public const LV_IN_STANDARD = 'LV_IN_STANDARD';

    public const LV_IN_TAX_FREE_THIRD = 'LV_IN_TAX_FREE_THIRD';

    public const LV_IN_ZERO = 'LV_IN_ZERO';

    public const MA_ADD_STANDARD = 'MA_ADD_STANDARD';

    public const MA_ADD_TAX_FREE_THIRD = 'MA_ADD_TAX_FREE_THIRD';

    public const MA_ADD_ZERO = 'MA_ADD_ZERO';

    public const MA_IN_STANDARD = 'MA_IN_STANDARD';

    public const MA_IN_TAX_FREE_THIRD = 'MA_IN_TAX_FREE_THIRD';

    public const MA_IN_ZERO = 'MA_IN_ZERO';

    public const ME_ADD_REDUCED = 'ME_ADD_REDUCED';

    public const ME_ADD_STANDARD = 'ME_ADD_STANDARD';

    public const ME_ADD_TAX_FREE_THIRD = 'ME_ADD_TAX_FREE_THIRD';

    public const ME_ADD_ZERO = 'ME_ADD_ZERO';

    public const ME_IN_REDUCED = 'ME_IN_REDUCED';

    public const ME_IN_STANDARD = 'ME_IN_STANDARD';

    public const ME_IN_TAX_FREE_THIRD = 'ME_IN_TAX_FREE_THIRD';

    public const ME_IN_ZERO = 'ME_IN_ZERO';

    public const MK_ADD_REDUCED = 'MK_ADD_REDUCED';

    public const MK_ADD_STANDARD = 'MK_ADD_STANDARD';

    public const MK_ADD_TAX_FREE_THIRD = 'MK_ADD_TAX_FREE_THIRD';

    public const MK_ADD_ZERO = 'MK_ADD_ZERO';

    public const MK_IN_REDUCED = 'MK_IN_REDUCED';

    public const MK_IN_STANDARD = 'MK_IN_STANDARD';

    public const MK_IN_TAX_FREE_THIRD = 'MK_IN_TAX_FREE_THIRD';

    public const MK_IN_ZERO = 'MK_IN_ZERO';

    public const MT_ADD_REDUCED = 'MT_ADD_REDUCED';

    public const MT_ADD_REDUCED_2024 = 'MT_ADD_REDUCED_2024';

    public const MT_ADD_REDUCED_SLIGHT = 'MT_ADD_REDUCED_SLIGHT';

    public const MT_ADD_REDUCED_SLIGHT_2024 = 'MT_ADD_REDUCED_SLIGHT_2024';

    public const MT_ADD_REDUCED_SUPER = 'MT_ADD_REDUCED_SUPER';

    public const MT_ADD_STANDARD = 'MT_ADD_STANDARD';

    public const MT_ADD_TAX_FREE_EU = 'MT_ADD_TAX_FREE_EU';

    public const MT_ADD_TAX_FREE_EU_SERVICES = 'MT_ADD_TAX_FREE_EU_SERVICES';

    public const MT_ADD_TAX_FREE_THIRD = 'MT_ADD_TAX_FREE_THIRD';

    public const MT_ADD_ZERO = 'MT_ADD_ZERO';

    public const MT_IN_REDUCED = 'MT_IN_REDUCED';

    public const MT_IN_REDUCED_2024 = 'MT_IN_REDUCED_2024';

    public const MT_IN_REDUCED_SLIGHT = 'MT_IN_REDUCED_SLIGHT';

    public const MT_IN_REDUCED_SLIGHT_2024 = 'MT_IN_REDUCED_SLIGHT_2024';

    public const MT_IN_REDUCED_SUPER = 'MT_IN_REDUCED_SUPER';

    public const MT_IN_REV_REDUCED_EU = 'MT_IN_REV_REDUCED_EU';

    public const MT_IN_REV_REDUCED_EU_2024 = 'MT_IN_REV_REDUCED_EU_2024';

    public const MT_IN_REV_REDUCED_EU_SERVICE = 'MT_IN_REV_REDUCED_EU_SERVICE';

    public const MT_IN_REV_REDUCED_EU_SERVICE_2024 = 'MT_IN_REV_REDUCED_EU_SERVICE_2024';

    public const MT_IN_REV_REDUCED_SLIGHT_EU = 'MT_IN_REV_REDUCED_SLIGHT_EU';

    public const MT_IN_REV_REDUCED_SLIGHT_EU_2024 = 'MT_IN_REV_REDUCED_SLIGHT_EU_2024';

    public const MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2024 = 'MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2024';

    public const MT_IN_REV_REDUCED_SUPER_EU = 'MT_IN_REV_REDUCED_SUPER_EU';

    public const MT_IN_REV_REDUCED_SUPER_EU_SERVICE = 'MT_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const MT_IN_REV_STANDARD_EU = 'MT_IN_REV_STANDARD_EU';

    public const MT_IN_REV_STANDARD_EU_SERVICE = 'MT_IN_REV_STANDARD_EU_SERVICE';

    public const MT_IN_STANDARD = 'MT_IN_STANDARD';

    public const MT_IN_TAX_FREE_THIRD = 'MT_IN_TAX_FREE_THIRD';

    public const MT_IN_ZERO = 'MT_IN_ZERO';

    public const MX_ADD_STANDARD = 'MX_ADD_STANDARD';

    public const MX_ADD_TAX_FREE_THIRD = 'MX_ADD_TAX_FREE_THIRD';

    public const MX_ADD_ZERO = 'MX_ADD_ZERO';

    public const MX_IN_STANDARD = 'MX_IN_STANDARD';

    public const MX_IN_TAX_FREE_THIRD = 'MX_IN_TAX_FREE_THIRD';

    public const MX_IN_ZERO = 'MX_IN_ZERO';

    public const NL_ADD_REDUCED = 'NL_ADD_REDUCED';

    public const NL_ADD_STANDARD = 'NL_ADD_STANDARD';

    public const NL_ADD_TAX_FREE_EU = 'NL_ADD_TAX_FREE_EU';

    public const NL_ADD_TAX_FREE_EU_SERVICES = 'NL_ADD_TAX_FREE_EU_SERVICES';

    public const NL_ADD_TAX_FREE_THIRD = 'NL_ADD_TAX_FREE_THIRD';

    public const NL_ADD_ZERO = 'NL_ADD_ZERO';

    public const NL_IN_REDUCED = 'NL_IN_REDUCED';

    public const NL_IN_REV_REDUCED_EU = 'NL_IN_REV_REDUCED_EU';

    public const NL_IN_REV_REDUCED_EU_SERVICE = 'NL_IN_REV_REDUCED_EU_SERVICE';

    public const NL_IN_REV_STANDARD_EU = 'NL_IN_REV_STANDARD_EU';

    public const NL_IN_REV_STANDARD_EU_SERVICE = 'NL_IN_REV_STANDARD_EU_SERVICE';

    public const NL_IN_STANDARD = 'NL_IN_STANDARD';

    public const NL_IN_TAX_FREE_THIRD = 'NL_IN_TAX_FREE_THIRD';

    public const NL_IN_ZERO = 'NL_IN_ZERO';

    public const NO_ADD_REDUCED = 'NO_ADD_REDUCED';

    public const NO_ADD_REDUCED_SUPER = 'NO_ADD_REDUCED_SUPER';

    public const NO_ADD_STANDARD = 'NO_ADD_STANDARD';

    public const NO_ADD_TAX_FREE_THIRD = 'NO_ADD_TAX_FREE_THIRD';

    public const NO_ADD_ZERO = 'NO_ADD_ZERO';

    public const NO_IN_REDUCED = 'NO_IN_REDUCED';

    public const NO_IN_REDUCED_SUPER = 'NO_IN_REDUCED_SUPER';

    public const NO_IN_STANDARD = 'NO_IN_STANDARD';

    public const NO_IN_TAX_FREE_THIRD = 'NO_IN_TAX_FREE_THIRD';

    public const NO_IN_ZERO = 'NO_IN_ZERO';

    public const NZ_ADD_STANDARD = 'NZ_ADD_STANDARD';

    public const NZ_ADD_TAX_FREE_THIRD = 'NZ_ADD_TAX_FREE_THIRD';

    public const NZ_ADD_ZERO = 'NZ_ADD_ZERO';

    public const NZ_IN_STANDARD = 'NZ_IN_STANDARD';

    public const NZ_IN_TAX_FREE_THIRD = 'NZ_IN_TAX_FREE_THIRD';

    public const NZ_IN_ZERO = 'NZ_IN_ZERO';

    public const PL_ADD_REDUCED = 'PL_ADD_REDUCED';

    public const PL_ADD_REDUCED_SUPER = 'PL_ADD_REDUCED_SUPER';

    public const PL_ADD_STANDARD = 'PL_ADD_STANDARD';

    public const PL_ADD_TAX_FREE_EU = 'PL_ADD_TAX_FREE_EU';

    public const PL_ADD_TAX_FREE_EU_SERVICES = 'PL_ADD_TAX_FREE_EU_SERVICES';

    public const PL_ADD_TAX_FREE_THIRD = 'PL_ADD_TAX_FREE_THIRD';

    public const PL_ADD_ZERO = 'PL_ADD_ZERO';

    public const PL_IN_REDUCED = 'PL_IN_REDUCED';

    public const PL_IN_REDUCED_SUPER = 'PL_IN_REDUCED_SUPER';

    public const PL_IN_REV_REDUCED_EU = 'PL_IN_REV_REDUCED_EU';

    public const PL_IN_REV_REDUCED_EU_SERVICE = 'PL_IN_REV_REDUCED_EU_SERVICE';

    public const PL_IN_REV_REDUCED_SUPER_EU = 'PL_IN_REV_REDUCED_SUPER_EU';

    public const PL_IN_REV_REDUCED_SUPER_EU_SERVICE = 'PL_IN_REV_REDUCED_SUPER_EU_SERVICE';

    public const PL_IN_REV_STANDARD_EU = 'PL_IN_REV_STANDARD_EU';

    public const PL_IN_REV_STANDARD_EU_SERVICE = 'PL_IN_REV_STANDARD_EU_SERVICE';

    public const PL_IN_STANDARD = 'PL_IN_STANDARD';

    public const PL_IN_TAX_FREE_THIRD = 'PL_IN_TAX_FREE_THIRD';

    public const PL_IN_ZERO = 'PL_IN_ZERO';

    public const PT_ADD_REDUCED = 'PT_ADD_REDUCED';

    public const PT_ADD_REDUCED_SLIGHT = 'PT_ADD_REDUCED_SLIGHT';

    public const PT_ADD_STANDARD = 'PT_ADD_STANDARD';

    public const PT_ADD_TAX_FREE_EU = 'PT_ADD_TAX_FREE_EU';

    public const PT_ADD_TAX_FREE_EU_SERVICES = 'PT_ADD_TAX_FREE_EU_SERVICES';

    public const PT_ADD_TAX_FREE_THIRD = 'PT_ADD_TAX_FREE_THIRD';

    public const PT_ADD_ZERO = 'PT_ADD_ZERO';

    public const PT_IN_REDUCED = 'PT_IN_REDUCED';

    public const PT_IN_REDUCED_SLIGHT = 'PT_IN_REDUCED_SLIGHT';

    public const PT_IN_REV_REDUCED_EU = 'PT_IN_REV_REDUCED_EU';

    public const PT_IN_REV_REDUCED_EU_SERVICE = 'PT_IN_REV_REDUCED_EU_SERVICE';

    public const PT_IN_REV_REDUCED_SLIGHT_EU = 'PT_IN_REV_REDUCED_SLIGHT_EU';

    public const PT_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'PT_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const PT_IN_REV_STANDARD_EU = 'PT_IN_REV_STANDARD_EU';

    public const PT_IN_REV_STANDARD_EU_SERVICE = 'PT_IN_REV_STANDARD_EU_SERVICE';

    public const PT_IN_STANDARD = 'PT_IN_STANDARD';

    public const PT_IN_TAX_FREE_THIRD = 'PT_IN_TAX_FREE_THIRD';

    public const PT_IN_ZERO = 'PT_IN_ZERO';

    public const RO_ADD_REDUCED = 'RO_ADD_REDUCED';

    public const RO_ADD_REDUCED_SLIGHT = 'RO_ADD_REDUCED_SLIGHT';

    public const RO_ADD_STANDARD = 'RO_ADD_STANDARD';

    public const RO_ADD_TAX_FREE_EU = 'RO_ADD_TAX_FREE_EU';

    public const RO_ADD_TAX_FREE_EU_SERVICES = 'RO_ADD_TAX_FREE_EU_SERVICES';

    public const RO_ADD_TAX_FREE_THIRD = 'RO_ADD_TAX_FREE_THIRD';

    public const RO_ADD_ZERO = 'RO_ADD_ZERO';

    public const RO_IN_REDUCED = 'RO_IN_REDUCED';

    public const RO_IN_REDUCED_SLIGHT = 'RO_IN_REDUCED_SLIGHT';

    public const RO_IN_REV_REDUCED_EU = 'RO_IN_REV_REDUCED_EU';

    public const RO_IN_REV_REDUCED_EU_SERVICE = 'RO_IN_REV_REDUCED_EU_SERVICE';

    public const RO_IN_REV_REDUCED_SLIGHT_EU = 'RO_IN_REV_REDUCED_SLIGHT_EU';

    public const RO_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'RO_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const RO_IN_REV_STANDARD_EU = 'RO_IN_REV_STANDARD_EU';

    public const RO_IN_REV_STANDARD_EU_SERVICE = 'RO_IN_REV_STANDARD_EU_SERVICE';

    public const RO_IN_STANDARD = 'RO_IN_STANDARD';

    public const RO_IN_TAX_FREE_THIRD = 'RO_IN_TAX_FREE_THIRD';

    public const RO_IN_ZERO = 'RO_IN_ZERO';

    public const RS_ADD_REDUCED = 'RS_ADD_REDUCED';

    public const RS_ADD_STANDARD = 'RS_ADD_STANDARD';

    public const RS_ADD_TAX_FREE_THIRD = 'RS_ADD_TAX_FREE_THIRD';

    public const RS_ADD_ZERO = 'RS_ADD_ZERO';

    public const RS_IN_REDUCED = 'RS_IN_REDUCED';

    public const RS_IN_STANDARD = 'RS_IN_STANDARD';

    public const RS_IN_TAX_FREE_THIRD = 'RS_IN_TAX_FREE_THIRD';

    public const RS_IN_ZERO = 'RS_IN_ZERO';

    public const RU_ADD_REDUCED = 'RU_ADD_REDUCED';

    public const RU_ADD_STANDARD = 'RU_ADD_STANDARD';

    public const RU_ADD_TAX_FREE_THIRD = 'RU_ADD_TAX_FREE_THIRD';

    public const RU_ADD_ZERO = 'RU_ADD_ZERO';

    public const RU_IN_REDUCED = 'RU_IN_REDUCED';

    public const RU_IN_STANDARD = 'RU_IN_STANDARD';

    public const RU_IN_TAX_FREE_THIRD = 'RU_IN_TAX_FREE_THIRD';

    public const RU_IN_ZERO = 'RU_IN_ZERO';

    public const SE_ADD_REDUCED = 'SE_ADD_REDUCED';

    public const SE_ADD_REDUCED_SLIGHT = 'SE_ADD_REDUCED_SLIGHT';

    public const SE_ADD_STANDARD = 'SE_ADD_STANDARD';

    public const SE_ADD_TAX_FREE_EU = 'SE_ADD_TAX_FREE_EU';

    public const SE_ADD_TAX_FREE_EU_SERVICES = 'SE_ADD_TAX_FREE_EU_SERVICES';

    public const SE_ADD_TAX_FREE_THIRD = 'SE_ADD_TAX_FREE_THIRD';

    public const SE_ADD_ZERO = 'SE_ADD_ZERO';

    public const SE_IN_REDUCED = 'SE_IN_REDUCED';

    public const SE_IN_REDUCED_SLIGHT = 'SE_IN_REDUCED_SLIGHT';

    public const SE_IN_REV_REDUCED_EU = 'SE_IN_REV_REDUCED_EU';

    public const SE_IN_REV_REDUCED_EU_SERVICE = 'SE_IN_REV_REDUCED_EU_SERVICE';

    public const SE_IN_REV_REDUCED_SLIGHT_EU = 'SE_IN_REV_REDUCED_SLIGHT_EU';

    public const SE_IN_REV_REDUCED_SLIGHT_EU_SERVICE = 'SE_IN_REV_REDUCED_SLIGHT_EU_SERVICE';

    public const SE_IN_REV_STANDARD_EU = 'SE_IN_REV_STANDARD_EU';

    public const SE_IN_REV_STANDARD_EU_SERVICE = 'SE_IN_REV_STANDARD_EU_SERVICE';

    public const SE_IN_STANDARD = 'SE_IN_STANDARD';

    public const SE_IN_TAX_FREE_THIRD = 'SE_IN_TAX_FREE_THIRD';

    public const SE_IN_ZERO = 'SE_IN_ZERO';

    public const SG_ADD_STANDARD = 'SG_ADD_STANDARD';

    public const SG_ADD_TAX_FREE_THIRD = 'SG_ADD_TAX_FREE_THIRD';

    public const SG_ADD_ZERO = 'SG_ADD_ZERO';

    public const SG_IN_STANDARD = 'SG_IN_STANDARD';

    public const SG_IN_TAX_FREE_THIRD = 'SG_IN_TAX_FREE_THIRD';

    public const SG_IN_ZERO = 'SG_IN_ZERO';

    public const SI_ADD_REDUCED = 'SI_ADD_REDUCED';

    public const SI_ADD_STANDARD = 'SI_ADD_STANDARD';

    public const SI_ADD_TAX_FREE_EU = 'SI_ADD_TAX_FREE_EU';

    public const SI_ADD_TAX_FREE_EU_SERVICES = 'SI_ADD_TAX_FREE_EU_SERVICES';

    public const SI_ADD_TAX_FREE_THIRD = 'SI_ADD_TAX_FREE_THIRD';

    public const SI_ADD_ZERO = 'SI_ADD_ZERO';

    public const SI_IN_REDUCED = 'SI_IN_REDUCED';

    public const SI_IN_REV_REDUCED_EU = 'SI_IN_REV_REDUCED_EU';

    public const SI_IN_REV_REDUCED_EU_SERVICE = 'SI_IN_REV_REDUCED_EU_SERVICE';

    public const SI_IN_REV_STANDARD_EU = 'SI_IN_REV_STANDARD_EU';

    public const SI_IN_REV_STANDARD_EU_SERVICE = 'SI_IN_REV_STANDARD_EU_SERVICE';

    public const SI_IN_STANDARD = 'SI_IN_STANDARD';

    public const SI_IN_TAX_FREE_THIRD = 'SI_IN_TAX_FREE_THIRD';

    public const SI_IN_ZERO = 'SI_IN_ZERO';

    public const SK_ADD_REDUCED = 'SK_ADD_REDUCED';

    public const SK_ADD_REDUCED_2025 = 'SK_ADD_REDUCED_2025';

    public const SK_ADD_STANDARD = 'SK_ADD_STANDARD';

    public const SK_ADD_STANDARD_2025 = 'SK_ADD_STANDARD_2025';

    public const SK_ADD_TAX_FREE_EU = 'SK_ADD_TAX_FREE_EU';

    public const SK_ADD_TAX_FREE_EU_SERVICES = 'SK_ADD_TAX_FREE_EU_SERVICES';

    public const SK_ADD_TAX_FREE_THIRD = 'SK_ADD_TAX_FREE_THIRD';

    public const SK_ADD_ZERO = 'SK_ADD_ZERO';

    public const SK_IN_REDUCED = 'SK_IN_REDUCED';

    public const SK_IN_REDUCED_2025 = 'SK_IN_REDUCED_2025';

    public const SK_IN_REV_REDUCED_EU = 'SK_IN_REV_REDUCED_EU';

    public const SK_IN_REV_REDUCED_EU_2025 = 'SK_IN_REV_REDUCED_EU_2025';

    public const SK_IN_REV_REDUCED_EU_SERVICE = 'SK_IN_REV_REDUCED_EU_SERVICE';

    public const SK_IN_REV_REDUCED_EU_SERVICE_2025 = 'SK_IN_REV_REDUCED_EU_SERVICE_2025';

    public const SK_IN_REV_STANDARD_EU = 'SK_IN_REV_STANDARD_EU';

    public const SK_IN_REV_STANDARD_EU_2025 = 'SK_IN_REV_STANDARD_EU_2025';

    public const SK_IN_REV_STANDARD_EU_SERVICE = 'SK_IN_REV_STANDARD_EU_SERVICE';

    public const SK_IN_REV_STANDARD_EU_SERVICE_2025 = 'SK_IN_REV_STANDARD_EU_SERVICE_2025';

    public const SK_IN_STANDARD = 'SK_IN_STANDARD';

    public const SK_IN_STANDARD_2025 = 'SK_IN_STANDARD_2025';

    public const SK_IN_TAX_FREE_THIRD = 'SK_IN_TAX_FREE_THIRD';

    public const SK_IN_ZERO = 'SK_IN_ZERO';

    public const TH_ADD_STANDARD = 'TH_ADD_STANDARD';

    public const TH_ADD_TAX_FREE_THIRD = 'TH_ADD_TAX_FREE_THIRD';

    public const TH_ADD_ZERO = 'TH_ADD_ZERO';

    public const TH_IN_STANDARD = 'TH_IN_STANDARD';

    public const TH_IN_TAX_FREE_THIRD = 'TH_IN_TAX_FREE_THIRD';

    public const TH_IN_ZERO = 'TH_IN_ZERO';

    public const TR_ADD_REDUCED = 'TR_ADD_REDUCED';

    public const TR_ADD_REDUCED_SUPER = 'TR_ADD_REDUCED_SUPER';

    public const TR_ADD_STANDARD = 'TR_ADD_STANDARD';

    public const TR_ADD_TAX_FREE_THIRD = 'TR_ADD_TAX_FREE_THIRD';

    public const TR_ADD_ZERO = 'TR_ADD_ZERO';

    public const TR_IN_REDUCED = 'TR_IN_REDUCED';

    public const TR_IN_REDUCED_SUPER = 'TR_IN_REDUCED_SUPER';

    public const TR_IN_STANDARD = 'TR_IN_STANDARD';

    public const TR_IN_TAX_FREE_THIRD = 'TR_IN_TAX_FREE_THIRD';

    public const TR_IN_ZERO = 'TR_IN_ZERO';

    public const TW_ADD_STANDARD = 'TW_ADD_STANDARD';

    public const TW_ADD_TAX_FREE_THIRD = 'TW_ADD_TAX_FREE_THIRD';

    public const TW_ADD_ZERO = 'TW_ADD_ZERO';

    public const TW_IN_STANDARD = 'TW_IN_STANDARD';

    public const TW_IN_TAX_FREE_THIRD = 'TW_IN_TAX_FREE_THIRD';

    public const TW_IN_ZERO = 'TW_IN_ZERO';

    public const UA_ADD_REDUCED = 'UA_ADD_REDUCED';

    public const UA_ADD_STANDARD = 'UA_ADD_STANDARD';

    public const UA_ADD_TAX_FREE_THIRD = 'UA_ADD_TAX_FREE_THIRD';

    public const UA_ADD_ZERO = 'UA_ADD_ZERO';

    public const UA_IN_REDUCED = 'UA_IN_REDUCED';

    public const UA_IN_STANDARD = 'UA_IN_STANDARD';

    public const UA_IN_TAX_FREE_THIRD = 'UA_IN_TAX_FREE_THIRD';

    public const UA_IN_ZERO = 'UA_IN_ZERO';

    public const VE_ADD_STANDARD = 'VE_ADD_STANDARD';

    public const VE_ADD_TAX_FREE_THIRD = 'VE_ADD_TAX_FREE_THIRD';

    public const VE_ADD_ZERO = 'VE_ADD_ZERO';

    public const VE_IN_STANDARD = 'VE_IN_STANDARD';

    public const VE_IN_TAX_FREE_THIRD = 'VE_IN_TAX_FREE_THIRD';

    public const VE_IN_ZERO = 'VE_IN_ZERO';

    public const XI_ADD_REDUCED = 'XI_ADD_REDUCED';

    public const XI_ADD_STANDARD = 'XI_ADD_STANDARD';

    public const XI_ADD_TAX_FREE_EU = 'XI_ADD_TAX_FREE_EU';

    public const XI_ADD_TAX_FREE_EU_SERVICES = 'XI_ADD_TAX_FREE_EU_SERVICES';

    public const XI_ADD_TAX_FREE_THIRD = 'XI_ADD_TAX_FREE_THIRD';

    public const XI_ADD_ZERO = 'XI_ADD_ZERO';

    public const XI_IN_REDUCED = 'XI_IN_REDUCED';

    public const XI_IN_REV_REDUCED_EU = 'XI_IN_REV_REDUCED_EU';

    public const XI_IN_REV_REDUCED_EU_SERVICE = 'XI_IN_REV_REDUCED_EU_SERVICE';

    public const XI_IN_REV_STANDARD_EU = 'XI_IN_REV_STANDARD_EU';

    public const XI_IN_REV_STANDARD_EU_SERVICE = 'XI_IN_REV_STANDARD_EU_SERVICE';

    public const XI_IN_STANDARD = 'XI_IN_STANDARD';

    public const XI_IN_TAX_FREE_THIRD = 'XI_IN_TAX_FREE_THIRD';

    public const XI_IN_ZERO = 'XI_IN_ZERO';

    public const XK_ADD_REDUCED = 'XK_ADD_REDUCED';

    public const XK_ADD_STANDARD = 'XK_ADD_STANDARD';

    public const XK_ADD_TAX_FREE_THIRD = 'XK_ADD_TAX_FREE_THIRD';

    public const XK_ADD_ZERO = 'XK_ADD_ZERO';

    public const XK_IN_REDUCED = 'XK_IN_REDUCED';

    public const XK_IN_STANDARD = 'XK_IN_STANDARD';

    public const XK_IN_TAX_FREE_THIRD = 'XK_IN_TAX_FREE_THIRD';

    public const XK_IN_ZERO = 'XK_IN_ZERO';

    public const ZA_ADD_REDUCED = 'ZA_ADD_REDUCED';

    public const ZA_ADD_REDUCED_SUPER = 'ZA_ADD_REDUCED_SUPER';

    public const ZA_ADD_STANDARD = 'ZA_ADD_STANDARD';

    public const ZA_ADD_TAX_FREE_THIRD = 'ZA_ADD_TAX_FREE_THIRD';

    public const ZA_ADD_ZERO = 'ZA_ADD_ZERO';

    public const ZA_IN_REDUCED = 'ZA_IN_REDUCED';

    public const ZA_IN_REDUCED_SUPER = 'ZA_IN_REDUCED_SUPER';

    public const ZA_IN_STANDARD = 'ZA_IN_STANDARD';

    public const ZA_IN_TAX_FREE_THIRD = 'ZA_IN_TAX_FREE_THIRD';

    public const ZA_IN_ZERO = 'ZA_IN_ZERO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD_ADD_STANDARD,
            self::AD_ADD_TAX_FREE_THIRD,
            self::AD_ADD_ZERO,
            self::AD_IN_STANDARD,
            self::AD_IN_TAX_FREE_THIRD,
            self::AD_IN_ZERO,
            self::AL_ADD_REDUCED,
            self::AL_ADD_STANDARD,
            self::AL_ADD_TAX_FREE_THIRD,
            self::AL_ADD_ZERO,
            self::AL_IN_REDUCED,
            self::AL_IN_STANDARD,
            self::AL_IN_TAX_FREE_THIRD,
            self::AL_IN_ZERO,
            self::AR_ADD_REDUCED,
            self::AR_ADD_STANDARD,
            self::AR_ADD_TAX_FREE_THIRD,
            self::AR_ADD_ZERO,
            self::AR_IN_REDUCED,
            self::AR_IN_STANDARD,
            self::AR_IN_TAX_FREE_THIRD,
            self::AR_IN_ZERO,
            self::AT_ADD_REDUCED,
            self::AT_ADD_REDUCED_SLIGHT,
            self::AT_ADD_STANDARD,
            self::AT_ADD_TAX_FREE_EU,
            self::AT_ADD_TAX_FREE_EU_SERVICES,
            self::AT_ADD_TAX_FREE_THIRD,
            self::AT_ADD_ZERO,
            self::AT_IN_REDUCED,
            self::AT_IN_REDUCED_SLIGHT,
            self::AT_IN_REV_REDUCED_EU,
            self::AT_IN_REV_REDUCED_EU_SERVICE,
            self::AT_IN_REV_REDUCED_SLIGHT_EU,
            self::AT_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::AT_IN_REV_STANDARD_EU,
            self::AT_IN_REV_STANDARD_EU_SERVICE,
            self::AT_IN_STANDARD,
            self::AT_IN_TAX_FREE_THIRD,
            self::AT_IN_ZERO,
            self::AU_ADD_STANDARD,
            self::AU_ADD_TAX_FREE_THIRD,
            self::AU_ADD_ZERO,
            self::AU_IN_STANDARD,
            self::AU_IN_TAX_FREE_THIRD,
            self::AU_IN_ZERO,
            self::BA_ADD_STANDARD,
            self::BA_ADD_TAX_FREE_THIRD,
            self::BA_ADD_ZERO,
            self::BA_IN_STANDARD,
            self::BA_IN_TAX_FREE_THIRD,
            self::BA_IN_ZERO,
            self::BE_ADD_REDUCED,
            self::BE_ADD_REDUCED_SLIGHT,
            self::BE_ADD_STANDARD,
            self::BE_ADD_TAX_FREE_EU,
            self::BE_ADD_TAX_FREE_EU_SERVICES,
            self::BE_ADD_TAX_FREE_THIRD,
            self::BE_ADD_ZERO,
            self::BE_IN_REDUCED,
            self::BE_IN_REDUCED_SLIGHT,
            self::BE_IN_REV_REDUCED_EU,
            self::BE_IN_REV_REDUCED_EU_SERVICE,
            self::BE_IN_REV_REDUCED_SLIGHT_EU,
            self::BE_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::BE_IN_REV_STANDARD_EU,
            self::BE_IN_REV_STANDARD_EU_SERVICE,
            self::BE_IN_STANDARD,
            self::BE_IN_TAX_FREE_THIRD,
            self::BE_IN_ZERO,
            self::BG_ADD_REDUCED,
            self::BG_ADD_STANDARD,
            self::BG_ADD_TAX_FREE_EU,
            self::BG_ADD_TAX_FREE_EU_SERVICES,
            self::BG_ADD_TAX_FREE_THIRD,
            self::BG_ADD_ZERO,
            self::BG_IN_REDUCED,
            self::BG_IN_REV_REDUCED_EU,
            self::BG_IN_REV_REDUCED_EU_SERVICE,
            self::BG_IN_REV_STANDARD_EU,
            self::BG_IN_REV_STANDARD_EU_SERVICE,
            self::BG_IN_STANDARD,
            self::BG_IN_TAX_FREE_THIRD,
            self::BG_IN_ZERO,
            self::BO_ADD_REDUCED,
            self::BO_ADD_STANDARD,
            self::BO_ADD_TAX_FREE_THIRD,
            self::BO_ADD_ZERO,
            self::BO_IN_REDUCED,
            self::BO_IN_STANDARD,
            self::BO_IN_TAX_FREE_THIRD,
            self::BO_IN_ZERO,
            self::BR_ADD_STANDARD,
            self::BR_ADD_TAX_FREE_THIRD,
            self::BR_ADD_ZERO,
            self::BR_IN_STANDARD,
            self::BR_IN_TAX_FREE_THIRD,
            self::BR_IN_ZERO,
            self::CA_ADD_STANDARD,
            self::CA_ADD_TAX_FREE_THIRD,
            self::CA_ADD_ZERO,
            self::CA_IN_STANDARD,
            self::CA_IN_TAX_FREE_THIRD,
            self::CA_IN_ZERO,
            self::CH_ADD_REDUCED,
            self::CH_ADD_REDUCED_2024,
            self::CH_ADD_REDUCED_SLIGHT,
            self::CH_ADD_REDUCED_SLIGHT_2024,
            self::CH_ADD_STANDARD,
            self::CH_ADD_STANDARD_2024,
            self::CH_ADD_TAX_FREE_THIRD,
            self::CH_ADD_ZERO,
            self::CH_IN_REDUCED,
            self::CH_IN_REDUCED_2024,
            self::CH_IN_REDUCED_SLIGHT,
            self::CH_IN_REDUCED_SLIGHT_2024,
            self::CH_IN_STANDARD,
            self::CH_IN_STANDARD_2024,
            self::CH_IN_TAX_FREE_THIRD,
            self::CH_IN_ZERO,
            self::CL_ADD_STANDARD,
            self::CL_ADD_TAX_FREE_THIRD,
            self::CL_ADD_ZERO,
            self::CL_IN_STANDARD,
            self::CL_IN_TAX_FREE_THIRD,
            self::CL_IN_ZERO,
            self::CN_ADD_REDUCED,
            self::CN_ADD_REDUCED_SLIGHT,
            self::CN_ADD_REDUCED_SUPER,
            self::CN_ADD_STANDARD,
            self::CN_ADD_TAX_FREE_THIRD,
            self::CN_ADD_ZERO,
            self::CN_IN_REDUCED,
            self::CN_IN_REDUCED_SLIGHT,
            self::CN_IN_REDUCED_SUPER,
            self::CN_IN_STANDARD,
            self::CN_IN_TAX_FREE_THIRD,
            self::CN_IN_ZERO,
            self::CY_ADD_REDUCED,
            self::CY_ADD_REDUCED_SLIGHT,
            self::CY_ADD_STANDARD,
            self::CY_ADD_TAX_FREE_EU,
            self::CY_ADD_TAX_FREE_EU_SERVICES,
            self::CY_ADD_TAX_FREE_THIRD,
            self::CY_ADD_ZERO,
            self::CY_IN_REDUCED,
            self::CY_IN_REDUCED_SLIGHT,
            self::CY_IN_REV_REDUCED_EU,
            self::CY_IN_REV_REDUCED_EU_SERVICE,
            self::CY_IN_REV_REDUCED_SLIGHT_EU,
            self::CY_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::CY_IN_REV_STANDARD_EU,
            self::CY_IN_REV_STANDARD_EU_SERVICE,
            self::CY_IN_STANDARD,
            self::CY_IN_TAX_FREE_THIRD,
            self::CY_IN_ZERO,
            self::CZ_ADD_REDUCED,
            self::CZ_ADD_REDUCED_2024,
            self::CZ_ADD_REDUCED_SLIGHT,
            self::CZ_ADD_STANDARD,
            self::CZ_ADD_TAX_FREE_EU,
            self::CZ_ADD_TAX_FREE_EU_SERVICES,
            self::CZ_ADD_TAX_FREE_THIRD,
            self::CZ_ADD_ZERO,
            self::CZ_IN_REDUCED,
            self::CZ_IN_REDUCED_2024,
            self::CZ_IN_REDUCED_SLIGHT,
            self::CZ_IN_REV_REDUCED_EU,
            self::CZ_IN_REV_REDUCED_EU_2024,
            self::CZ_IN_REV_REDUCED_EU_SERVICE,
            self::CZ_IN_REV_REDUCED_EU_SERVICE_2024,
            self::CZ_IN_REV_REDUCED_SLIGHT_EU,
            self::CZ_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::CZ_IN_REV_STANDARD_EU,
            self::CZ_IN_REV_STANDARD_EU_SERVICE,
            self::CZ_IN_STANDARD,
            self::CZ_IN_TAX_FREE_THIRD,
            self::CZ_IN_ZERO,
            self::DE_ADD_REDUCED,
            self::DE_ADD_REDUCED_2020,
            self::DE_ADD_STANDARD,
            self::DE_ADD_STANDARD_2020,
            self::DE_ADD_TAX_FREE_EU,
            self::DE_ADD_TAX_FREE_EU_SERVICES,
            self::DE_ADD_TAX_FREE_THIRD,
            self::DE_ADD_ZERO,
            self::DE_IN_IMPORT,
            self::DE_IN_REDUCED,
            self::DE_IN_REDUCED_2020,
            self::DE_IN_REV_REDUCED_EU,
            self::DE_IN_REV_REDUCED_EU_2020,
            self::DE_IN_REV_REDUCED_EU_SERVICE,
            self::DE_IN_REV_REDUCED_EU_SERVICE_2020,
            self::DE_IN_REV_STANDARD_EU,
            self::DE_IN_REV_STANDARD_EU_2020,
            self::DE_IN_REV_STANDARD_EU_SERVICE,
            self::DE_IN_REV_STANDARD_EU_SERVICE_2020,
            self::DE_IN_STANDARD,
            self::DE_IN_STANDARD_2020,
            self::DE_IN_TAX_FREE_THIRD,
            self::DE_IN_ZERO,
            self::DK_ADD_STANDARD,
            self::DK_ADD_TAX_FREE_EU,
            self::DK_ADD_TAX_FREE_EU_SERVICES,
            self::DK_ADD_TAX_FREE_THIRD,
            self::DK_ADD_ZERO,
            self::DK_IN_REV_STANDARD_EU,
            self::DK_IN_REV_STANDARD_EU_SERVICE,
            self::DK_IN_STANDARD,
            self::DK_IN_TAX_FREE_THIRD,
            self::DK_IN_ZERO,
            self::EE_ADD_REDUCED,
            self::EE_ADD_REDUCED_SLIGHT_2025,
            self::EE_ADD_STANDARD,
            self::EE_ADD_STANDARD_2024,
            self::EE_ADD_TAX_FREE_EU,
            self::EE_ADD_TAX_FREE_EU_SERVICES,
            self::EE_ADD_TAX_FREE_THIRD,
            self::EE_ADD_ZERO,
            self::EE_IN_REDUCED,
            self::EE_IN_REDUCED_SLIGHT_2025,
            self::EE_IN_REV_REDUCED_EU,
            self::EE_IN_REV_REDUCED_EU_SERVICE,
            self::EE_IN_REV_REDUCED_SLIGHT_EU_2025,
            self::EE_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2025,
            self::EE_IN_REV_STANDARD_EU,
            self::EE_IN_REV_STANDARD_EU_2024,
            self::EE_IN_REV_STANDARD_EU_SERVICE,
            self::EE_IN_REV_STANDARD_EU_SERVICE_2024,
            self::EE_IN_STANDARD,
            self::EE_IN_STANDARD_2024,
            self::EE_IN_TAX_FREE_THIRD,
            self::EE_IN_ZERO,
            self::ES_ADD_REDUCED,
            self::ES_ADD_REDUCED_SLIGHT,
            self::ES_ADD_STANDARD,
            self::ES_ADD_TAX_FREE_EU,
            self::ES_ADD_TAX_FREE_EU_SERVICES,
            self::ES_ADD_TAX_FREE_THIRD,
            self::ES_ADD_ZERO,
            self::ES_IN_REDUCED,
            self::ES_IN_REDUCED_SLIGHT,
            self::ES_IN_REV_REDUCED_EU,
            self::ES_IN_REV_REDUCED_EU_SERVICE,
            self::ES_IN_REV_REDUCED_SLIGHT_EU,
            self::ES_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::ES_IN_REV_STANDARD_EU,
            self::ES_IN_REV_STANDARD_EU_SERVICE,
            self::ES_IN_STANDARD,
            self::ES_IN_TAX_FREE_THIRD,
            self::ES_IN_ZERO,
            self::FI_ADD_REDUCED,
            self::FI_ADD_REDUCED_SLIGHT,
            self::FI_ADD_STANDARD,
            self::FI_ADD_STANDARD_09_2024,
            self::FI_ADD_TAX_FREE_EU,
            self::FI_ADD_TAX_FREE_EU_SERVICES,
            self::FI_ADD_TAX_FREE_THIRD,
            self::FI_ADD_ZERO,
            self::FI_IN_REDUCED,
            self::FI_IN_REDUCED_SLIGHT,
            self::FI_IN_REV_REDUCED_EU,
            self::FI_IN_REV_REDUCED_EU_SERVICE,
            self::FI_IN_REV_REDUCED_SLIGHT_EU,
            self::FI_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::FI_IN_REV_STANDARD_EU,
            self::FI_IN_REV_STANDARD_EU_09_2024,
            self::FI_IN_REV_STANDARD_EU_SERVICE,
            self::FI_IN_STANDARD,
            self::FI_IN_STANDARD_09_2024,
            self::FI_IN_TAX_FREE_THIRD,
            self::FI_IN_ZERO,
            self::FO_ADD_STANDARD,
            self::FO_ADD_TAX_FREE_THIRD,
            self::FO_ADD_ZERO,
            self::FO_IN_STANDARD,
            self::FO_IN_TAX_FREE_THIRD,
            self::FO_IN_ZERO,
            self::FR_ADD_REDUCED,
            self::FR_ADD_REDUCED_SLIGHT,
            self::FR_ADD_REDUCED_SUPER,
            self::FR_ADD_STANDARD,
            self::FR_ADD_TAX_FREE_EU,
            self::FR_ADD_TAX_FREE_EU_SERVICES,
            self::FR_ADD_TAX_FREE_THIRD,
            self::FR_ADD_ZERO,
            self::FR_IN_REDUCED,
            self::FR_IN_REDUCED_SLIGHT,
            self::FR_IN_REDUCED_SUPER,
            self::FR_IN_REV_REDUCED_EU,
            self::FR_IN_REV_REDUCED_EU_SERVICE,
            self::FR_IN_REV_REDUCED_SLIGHT_EU,
            self::FR_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::FR_IN_REV_REDUCED_SUPER_EU,
            self::FR_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::FR_IN_REV_STANDARD_EU,
            self::FR_IN_REV_STANDARD_EU_SERVICE,
            self::FR_IN_STANDARD,
            self::FR_IN_TAX_FREE_THIRD,
            self::FR_IN_ZERO,
            self::GB_ADD_REDUCED,
            self::GB_ADD_STANDARD,
            self::GB_ADD_TAX_FREE_THIRD,
            self::GB_ADD_ZERO,
            self::GB_IN_REDUCED,
            self::GB_IN_STANDARD,
            self::GB_IN_TAX_FREE_THIRD,
            self::GB_IN_ZERO,
            self::GR_ADD_REDUCED,
            self::GR_ADD_REDUCED_SLIGHT,
            self::GR_ADD_STANDARD,
            self::GR_ADD_TAX_FREE_EU,
            self::GR_ADD_TAX_FREE_EU_SERVICES,
            self::GR_ADD_TAX_FREE_THIRD,
            self::GR_ADD_ZERO,
            self::GR_IN_REDUCED,
            self::GR_IN_REDUCED_SLIGHT,
            self::GR_IN_REV_REDUCED_EU,
            self::GR_IN_REV_REDUCED_EU_SERVICE,
            self::GR_IN_REV_REDUCED_SLIGHT_EU,
            self::GR_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::GR_IN_REV_STANDARD_EU,
            self::GR_IN_REV_STANDARD_EU_SERVICE,
            self::GR_IN_STANDARD,
            self::GR_IN_TAX_FREE_THIRD,
            self::GR_IN_ZERO,
            self::HR_ADD_REDUCED,
            self::HR_ADD_REDUCED_SLIGHT,
            self::HR_ADD_STANDARD,
            self::HR_ADD_TAX_FREE_EU,
            self::HR_ADD_TAX_FREE_EU_SERVICES,
            self::HR_ADD_TAX_FREE_THIRD,
            self::HR_ADD_ZERO,
            self::HR_IN_REDUCED,
            self::HR_IN_REDUCED_SLIGHT,
            self::HR_IN_REV_REDUCED_EU,
            self::HR_IN_REV_REDUCED_EU_SERVICE,
            self::HR_IN_REV_REDUCED_SLIGHT_EU,
            self::HR_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::HR_IN_REV_STANDARD_EU,
            self::HR_IN_REV_STANDARD_EU_SERVICE,
            self::HR_IN_STANDARD,
            self::HR_IN_TAX_FREE_THIRD,
            self::HR_IN_ZERO,
            self::HU_ADD_REDUCED,
            self::HU_ADD_REDUCED_SLIGHT,
            self::HU_ADD_STANDARD,
            self::HU_ADD_TAX_FREE_EU,
            self::HU_ADD_TAX_FREE_EU_SERVICES,
            self::HU_ADD_TAX_FREE_THIRD,
            self::HU_ADD_ZERO,
            self::HU_IN_REDUCED,
            self::HU_IN_REDUCED_SLIGHT,
            self::HU_IN_REV_REDUCED_EU,
            self::HU_IN_REV_REDUCED_EU_SERVICE,
            self::HU_IN_REV_REDUCED_SLIGHT_EU,
            self::HU_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::HU_IN_REV_STANDARD_EU,
            self::HU_IN_REV_STANDARD_EU_SERVICE,
            self::HU_IN_STANDARD,
            self::HU_IN_TAX_FREE_THIRD,
            self::HU_IN_ZERO,
            self::IE_ADD_REDUCED,
            self::IE_ADD_REDUCED_SLIGHT,
            self::IE_ADD_REDUCED_SUPER,
            self::IE_ADD_STANDARD,
            self::IE_ADD_TAX_FREE_EU,
            self::IE_ADD_TAX_FREE_EU_SERVICES,
            self::IE_ADD_TAX_FREE_THIRD,
            self::IE_ADD_ZERO,
            self::IE_IN_REDUCED,
            self::IE_IN_REDUCED_SLIGHT,
            self::IE_IN_REDUCED_SUPER,
            self::IE_IN_REV_REDUCED_EU,
            self::IE_IN_REV_REDUCED_EU_SERVICE,
            self::IE_IN_REV_REDUCED_SLIGHT_EU,
            self::IE_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::IE_IN_REV_REDUCED_SUPER_EU,
            self::IE_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::IE_IN_REV_STANDARD_EU,
            self::IE_IN_REV_STANDARD_EU_SERVICE,
            self::IE_IN_STANDARD,
            self::IE_IN_TAX_FREE_THIRD,
            self::IE_IN_ZERO,
            self::IL_ADD_REDUCED,
            self::IL_ADD_STANDARD,
            self::IL_ADD_TAX_FREE_THIRD,
            self::IL_ADD_ZERO,
            self::IL_IN_REDUCED,
            self::IL_IN_STANDARD,
            self::IL_IN_TAX_FREE_THIRD,
            self::IL_IN_ZERO,
            self::IN_ADD_REDUCED,
            self::IN_ADD_REDUCED_SUPER,
            self::IN_ADD_STANDARD,
            self::IN_ADD_TAX_FREE_THIRD,
            self::IN_ADD_ZERO,
            self::IN_IN_REDUCED,
            self::IN_IN_REDUCED_SUPER,
            self::IN_IN_STANDARD,
            self::IN_IN_TAX_FREE_THIRD,
            self::IN_IN_ZERO,
            self::IS_ADD_REDUCED,
            self::IS_ADD_STANDARD,
            self::IS_ADD_TAX_FREE_THIRD,
            self::IS_ADD_ZERO,
            self::IS_IN_REDUCED,
            self::IS_IN_STANDARD,
            self::IS_IN_TAX_FREE_THIRD,
            self::IS_IN_ZERO,
            self::IT_ADD_REDUCED,
            self::IT_ADD_REDUCED_SLIGHT,
            self::IT_ADD_REDUCED_SUPER,
            self::IT_ADD_STANDARD,
            self::IT_ADD_TAX_FREE_EU,
            self::IT_ADD_TAX_FREE_EU_SERVICES,
            self::IT_ADD_TAX_FREE_LETTER_OF_INTENT,
            self::IT_ADD_TAX_FREE_THIRD,
            self::IT_ADD_TAX_FREE_THIRD_SERVICES,
            self::IT_ADD_ZERO,
            self::IT_IN_REDUCED,
            self::IT_IN_REDUCED_SLIGHT,
            self::IT_IN_REDUCED_SUPER,
            self::IT_IN_REV_REDUCED_EU,
            self::IT_IN_REV_REDUCED_EU_SERVICE,
            self::IT_IN_REV_REDUCED_SLIGHT_EU,
            self::IT_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::IT_IN_REV_REDUCED_SUPER_EU,
            self::IT_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::IT_IN_REV_STANDARD_EU,
            self::IT_IN_REV_STANDARD_EU_SERVICE,
            self::IT_IN_STANDARD,
            self::IT_IN_TAX_FREE_LETTER_OF_INTENT,
            self::IT_IN_TAX_FREE_THIRD,
            self::IT_IN_ZERO,
            self::JP_ADD_STANDARD,
            self::JP_ADD_TAX_FREE_THIRD,
            self::JP_ADD_ZERO,
            self::JP_IN_STANDARD,
            self::JP_IN_TAX_FREE_THIRD,
            self::JP_IN_ZERO,
            self::LI_ADD_REDUCED,
            self::LI_ADD_REDUCED_2024,
            self::LI_ADD_REDUCED_SUPER,
            self::LI_ADD_REDUCED_SUPER_2024,
            self::LI_ADD_STANDARD,
            self::LI_ADD_STANDARD_2024,
            self::LI_ADD_TAX_FREE_THIRD,
            self::LI_ADD_ZERO,
            self::LI_IN_REDUCED,
            self::LI_IN_REDUCED_2024,
            self::LI_IN_REDUCED_SUPER,
            self::LI_IN_REDUCED_SUPER_2024,
            self::LI_IN_STANDARD,
            self::LI_IN_STANDARD_2024,
            self::LI_IN_TAX_FREE_THIRD,
            self::LI_IN_ZERO,
            self::LK_ADD_STANDARD,
            self::LK_ADD_TAX_FREE_THIRD,
            self::LK_ADD_ZERO,
            self::LK_IN_STANDARD,
            self::LK_IN_TAX_FREE_THIRD,
            self::LK_IN_ZERO,
            self::LT_ADD_REDUCED,
            self::LT_ADD_REDUCED_SLIGHT,
            self::LT_ADD_STANDARD,
            self::LT_ADD_TAX_FREE_EU,
            self::LT_ADD_TAX_FREE_EU_SERVICES,
            self::LT_ADD_TAX_FREE_THIRD,
            self::LT_ADD_ZERO,
            self::LT_IN_REDUCED,
            self::LT_IN_REDUCED_SLIGHT,
            self::LT_IN_REV_REDUCED_EU,
            self::LT_IN_REV_REDUCED_EU_SERVICE,
            self::LT_IN_REV_REDUCED_SLIGHT_EU,
            self::LT_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::LT_IN_REV_STANDARD_EU,
            self::LT_IN_REV_STANDARD_EU_SERVICE,
            self::LT_IN_STANDARD,
            self::LT_IN_TAX_FREE_THIRD,
            self::LT_IN_ZERO,
            self::LU_ADD_REDUCED,
            self::LU_ADD_REDUCED_2023,
            self::LU_ADD_REDUCED_SLIGHT,
            self::LU_ADD_REDUCED_SLIGHT_2023,
            self::LU_ADD_REDUCED_SUPER,
            self::LU_ADD_STANDARD,
            self::LU_ADD_STANDARD_2023,
            self::LU_ADD_TAX_FREE_EU,
            self::LU_ADD_TAX_FREE_EU_SERVICES,
            self::LU_ADD_TAX_FREE_THIRD,
            self::LU_ADD_ZERO,
            self::LU_IN_REDUCED,
            self::LU_IN_REDUCED_2023,
            self::LU_IN_REDUCED_SLIGHT,
            self::LU_IN_REDUCED_SLIGHT_2023,
            self::LU_IN_REDUCED_SUPER,
            self::LU_IN_REV_REDUCED_EU,
            self::LU_IN_REV_REDUCED_EU_2023,
            self::LU_IN_REV_REDUCED_EU_SERVICE,
            self::LU_IN_REV_REDUCED_EU_SERVICE_2023,
            self::LU_IN_REV_REDUCED_SLIGHT_EU,
            self::LU_IN_REV_REDUCED_SLIGHT_EU_2023,
            self::LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::LU_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2023,
            self::LU_IN_REV_REDUCED_SUPER_EU,
            self::LU_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::LU_IN_REV_STANDARD_EU,
            self::LU_IN_REV_STANDARD_EU_2023,
            self::LU_IN_REV_STANDARD_EU_SERVICE,
            self::LU_IN_REV_STANDARD_EU_SERVICE_2023,
            self::LU_IN_STANDARD,
            self::LU_IN_STANDARD_2023,
            self::LU_IN_TAX_FREE_THIRD,
            self::LU_IN_ZERO,
            self::LV_ADD_REDUCED,
            self::LV_ADD_REDUCED_SLIGHT,
            self::LV_ADD_STANDARD,
            self::LV_ADD_TAX_FREE_EU,
            self::LV_ADD_TAX_FREE_EU_SERVICES,
            self::LV_ADD_TAX_FREE_THIRD,
            self::LV_ADD_ZERO,
            self::LV_IN_REDUCED,
            self::LV_IN_REDUCED_SLIGHT,
            self::LV_IN_REV_REDUCED_EU,
            self::LV_IN_REV_REDUCED_EU_SERVICE,
            self::LV_IN_REV_REDUCED_SLIGHT_EU,
            self::LV_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::LV_IN_REV_STANDARD_EU,
            self::LV_IN_REV_STANDARD_EU_SERVICE,
            self::LV_IN_STANDARD,
            self::LV_IN_TAX_FREE_THIRD,
            self::LV_IN_ZERO,
            self::MA_ADD_STANDARD,
            self::MA_ADD_TAX_FREE_THIRD,
            self::MA_ADD_ZERO,
            self::MA_IN_STANDARD,
            self::MA_IN_TAX_FREE_THIRD,
            self::MA_IN_ZERO,
            self::ME_ADD_REDUCED,
            self::ME_ADD_STANDARD,
            self::ME_ADD_TAX_FREE_THIRD,
            self::ME_ADD_ZERO,
            self::ME_IN_REDUCED,
            self::ME_IN_STANDARD,
            self::ME_IN_TAX_FREE_THIRD,
            self::ME_IN_ZERO,
            self::MK_ADD_REDUCED,
            self::MK_ADD_STANDARD,
            self::MK_ADD_TAX_FREE_THIRD,
            self::MK_ADD_ZERO,
            self::MK_IN_REDUCED,
            self::MK_IN_STANDARD,
            self::MK_IN_TAX_FREE_THIRD,
            self::MK_IN_ZERO,
            self::MT_ADD_REDUCED,
            self::MT_ADD_REDUCED_2024,
            self::MT_ADD_REDUCED_SLIGHT,
            self::MT_ADD_REDUCED_SLIGHT_2024,
            self::MT_ADD_REDUCED_SUPER,
            self::MT_ADD_STANDARD,
            self::MT_ADD_TAX_FREE_EU,
            self::MT_ADD_TAX_FREE_EU_SERVICES,
            self::MT_ADD_TAX_FREE_THIRD,
            self::MT_ADD_ZERO,
            self::MT_IN_REDUCED,
            self::MT_IN_REDUCED_2024,
            self::MT_IN_REDUCED_SLIGHT,
            self::MT_IN_REDUCED_SLIGHT_2024,
            self::MT_IN_REDUCED_SUPER,
            self::MT_IN_REV_REDUCED_EU,
            self::MT_IN_REV_REDUCED_EU_2024,
            self::MT_IN_REV_REDUCED_EU_SERVICE,
            self::MT_IN_REV_REDUCED_EU_SERVICE_2024,
            self::MT_IN_REV_REDUCED_SLIGHT_EU,
            self::MT_IN_REV_REDUCED_SLIGHT_EU_2024,
            self::MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::MT_IN_REV_REDUCED_SLIGHT_EU_SERVICE_2024,
            self::MT_IN_REV_REDUCED_SUPER_EU,
            self::MT_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::MT_IN_REV_STANDARD_EU,
            self::MT_IN_REV_STANDARD_EU_SERVICE,
            self::MT_IN_STANDARD,
            self::MT_IN_TAX_FREE_THIRD,
            self::MT_IN_ZERO,
            self::MX_ADD_STANDARD,
            self::MX_ADD_TAX_FREE_THIRD,
            self::MX_ADD_ZERO,
            self::MX_IN_STANDARD,
            self::MX_IN_TAX_FREE_THIRD,
            self::MX_IN_ZERO,
            self::NL_ADD_REDUCED,
            self::NL_ADD_STANDARD,
            self::NL_ADD_TAX_FREE_EU,
            self::NL_ADD_TAX_FREE_EU_SERVICES,
            self::NL_ADD_TAX_FREE_THIRD,
            self::NL_ADD_ZERO,
            self::NL_IN_REDUCED,
            self::NL_IN_REV_REDUCED_EU,
            self::NL_IN_REV_REDUCED_EU_SERVICE,
            self::NL_IN_REV_STANDARD_EU,
            self::NL_IN_REV_STANDARD_EU_SERVICE,
            self::NL_IN_STANDARD,
            self::NL_IN_TAX_FREE_THIRD,
            self::NL_IN_ZERO,
            self::NO_ADD_REDUCED,
            self::NO_ADD_REDUCED_SUPER,
            self::NO_ADD_STANDARD,
            self::NO_ADD_TAX_FREE_THIRD,
            self::NO_ADD_ZERO,
            self::NO_IN_REDUCED,
            self::NO_IN_REDUCED_SUPER,
            self::NO_IN_STANDARD,
            self::NO_IN_TAX_FREE_THIRD,
            self::NO_IN_ZERO,
            self::NZ_ADD_STANDARD,
            self::NZ_ADD_TAX_FREE_THIRD,
            self::NZ_ADD_ZERO,
            self::NZ_IN_STANDARD,
            self::NZ_IN_TAX_FREE_THIRD,
            self::NZ_IN_ZERO,
            self::PL_ADD_REDUCED,
            self::PL_ADD_REDUCED_SUPER,
            self::PL_ADD_STANDARD,
            self::PL_ADD_TAX_FREE_EU,
            self::PL_ADD_TAX_FREE_EU_SERVICES,
            self::PL_ADD_TAX_FREE_THIRD,
            self::PL_ADD_ZERO,
            self::PL_IN_REDUCED,
            self::PL_IN_REDUCED_SUPER,
            self::PL_IN_REV_REDUCED_EU,
            self::PL_IN_REV_REDUCED_EU_SERVICE,
            self::PL_IN_REV_REDUCED_SUPER_EU,
            self::PL_IN_REV_REDUCED_SUPER_EU_SERVICE,
            self::PL_IN_REV_STANDARD_EU,
            self::PL_IN_REV_STANDARD_EU_SERVICE,
            self::PL_IN_STANDARD,
            self::PL_IN_TAX_FREE_THIRD,
            self::PL_IN_ZERO,
            self::PT_ADD_REDUCED,
            self::PT_ADD_REDUCED_SLIGHT,
            self::PT_ADD_STANDARD,
            self::PT_ADD_TAX_FREE_EU,
            self::PT_ADD_TAX_FREE_EU_SERVICES,
            self::PT_ADD_TAX_FREE_THIRD,
            self::PT_ADD_ZERO,
            self::PT_IN_REDUCED,
            self::PT_IN_REDUCED_SLIGHT,
            self::PT_IN_REV_REDUCED_EU,
            self::PT_IN_REV_REDUCED_EU_SERVICE,
            self::PT_IN_REV_REDUCED_SLIGHT_EU,
            self::PT_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::PT_IN_REV_STANDARD_EU,
            self::PT_IN_REV_STANDARD_EU_SERVICE,
            self::PT_IN_STANDARD,
            self::PT_IN_TAX_FREE_THIRD,
            self::PT_IN_ZERO,
            self::RO_ADD_REDUCED,
            self::RO_ADD_REDUCED_SLIGHT,
            self::RO_ADD_STANDARD,
            self::RO_ADD_TAX_FREE_EU,
            self::RO_ADD_TAX_FREE_EU_SERVICES,
            self::RO_ADD_TAX_FREE_THIRD,
            self::RO_ADD_ZERO,
            self::RO_IN_REDUCED,
            self::RO_IN_REDUCED_SLIGHT,
            self::RO_IN_REV_REDUCED_EU,
            self::RO_IN_REV_REDUCED_EU_SERVICE,
            self::RO_IN_REV_REDUCED_SLIGHT_EU,
            self::RO_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::RO_IN_REV_STANDARD_EU,
            self::RO_IN_REV_STANDARD_EU_SERVICE,
            self::RO_IN_STANDARD,
            self::RO_IN_TAX_FREE_THIRD,
            self::RO_IN_ZERO,
            self::RS_ADD_REDUCED,
            self::RS_ADD_STANDARD,
            self::RS_ADD_TAX_FREE_THIRD,
            self::RS_ADD_ZERO,
            self::RS_IN_REDUCED,
            self::RS_IN_STANDARD,
            self::RS_IN_TAX_FREE_THIRD,
            self::RS_IN_ZERO,
            self::RU_ADD_REDUCED,
            self::RU_ADD_STANDARD,
            self::RU_ADD_TAX_FREE_THIRD,
            self::RU_ADD_ZERO,
            self::RU_IN_REDUCED,
            self::RU_IN_STANDARD,
            self::RU_IN_TAX_FREE_THIRD,
            self::RU_IN_ZERO,
            self::SE_ADD_REDUCED,
            self::SE_ADD_REDUCED_SLIGHT,
            self::SE_ADD_STANDARD,
            self::SE_ADD_TAX_FREE_EU,
            self::SE_ADD_TAX_FREE_EU_SERVICES,
            self::SE_ADD_TAX_FREE_THIRD,
            self::SE_ADD_ZERO,
            self::SE_IN_REDUCED,
            self::SE_IN_REDUCED_SLIGHT,
            self::SE_IN_REV_REDUCED_EU,
            self::SE_IN_REV_REDUCED_EU_SERVICE,
            self::SE_IN_REV_REDUCED_SLIGHT_EU,
            self::SE_IN_REV_REDUCED_SLIGHT_EU_SERVICE,
            self::SE_IN_REV_STANDARD_EU,
            self::SE_IN_REV_STANDARD_EU_SERVICE,
            self::SE_IN_STANDARD,
            self::SE_IN_TAX_FREE_THIRD,
            self::SE_IN_ZERO,
            self::SG_ADD_STANDARD,
            self::SG_ADD_TAX_FREE_THIRD,
            self::SG_ADD_ZERO,
            self::SG_IN_STANDARD,
            self::SG_IN_TAX_FREE_THIRD,
            self::SG_IN_ZERO,
            self::SI_ADD_REDUCED,
            self::SI_ADD_STANDARD,
            self::SI_ADD_TAX_FREE_EU,
            self::SI_ADD_TAX_FREE_EU_SERVICES,
            self::SI_ADD_TAX_FREE_THIRD,
            self::SI_ADD_ZERO,
            self::SI_IN_REDUCED,
            self::SI_IN_REV_REDUCED_EU,
            self::SI_IN_REV_REDUCED_EU_SERVICE,
            self::SI_IN_REV_STANDARD_EU,
            self::SI_IN_REV_STANDARD_EU_SERVICE,
            self::SI_IN_STANDARD,
            self::SI_IN_TAX_FREE_THIRD,
            self::SI_IN_ZERO,
            self::SK_ADD_REDUCED,
            self::SK_ADD_REDUCED_2025,
            self::SK_ADD_STANDARD,
            self::SK_ADD_STANDARD_2025,
            self::SK_ADD_TAX_FREE_EU,
            self::SK_ADD_TAX_FREE_EU_SERVICES,
            self::SK_ADD_TAX_FREE_THIRD,
            self::SK_ADD_ZERO,
            self::SK_IN_REDUCED,
            self::SK_IN_REDUCED_2025,
            self::SK_IN_REV_REDUCED_EU,
            self::SK_IN_REV_REDUCED_EU_2025,
            self::SK_IN_REV_REDUCED_EU_SERVICE,
            self::SK_IN_REV_REDUCED_EU_SERVICE_2025,
            self::SK_IN_REV_STANDARD_EU,
            self::SK_IN_REV_STANDARD_EU_2025,
            self::SK_IN_REV_STANDARD_EU_SERVICE,
            self::SK_IN_REV_STANDARD_EU_SERVICE_2025,
            self::SK_IN_STANDARD,
            self::SK_IN_STANDARD_2025,
            self::SK_IN_TAX_FREE_THIRD,
            self::SK_IN_ZERO,
            self::TH_ADD_STANDARD,
            self::TH_ADD_TAX_FREE_THIRD,
            self::TH_ADD_ZERO,
            self::TH_IN_STANDARD,
            self::TH_IN_TAX_FREE_THIRD,
            self::TH_IN_ZERO,
            self::TR_ADD_REDUCED,
            self::TR_ADD_REDUCED_SUPER,
            self::TR_ADD_STANDARD,
            self::TR_ADD_TAX_FREE_THIRD,
            self::TR_ADD_ZERO,
            self::TR_IN_REDUCED,
            self::TR_IN_REDUCED_SUPER,
            self::TR_IN_STANDARD,
            self::TR_IN_TAX_FREE_THIRD,
            self::TR_IN_ZERO,
            self::TW_ADD_STANDARD,
            self::TW_ADD_TAX_FREE_THIRD,
            self::TW_ADD_ZERO,
            self::TW_IN_STANDARD,
            self::TW_IN_TAX_FREE_THIRD,
            self::TW_IN_ZERO,
            self::UA_ADD_REDUCED,
            self::UA_ADD_STANDARD,
            self::UA_ADD_TAX_FREE_THIRD,
            self::UA_ADD_ZERO,
            self::UA_IN_REDUCED,
            self::UA_IN_STANDARD,
            self::UA_IN_TAX_FREE_THIRD,
            self::UA_IN_ZERO,
            self::VE_ADD_STANDARD,
            self::VE_ADD_TAX_FREE_THIRD,
            self::VE_ADD_ZERO,
            self::VE_IN_STANDARD,
            self::VE_IN_TAX_FREE_THIRD,
            self::VE_IN_ZERO,
            self::XI_ADD_REDUCED,
            self::XI_ADD_STANDARD,
            self::XI_ADD_TAX_FREE_EU,
            self::XI_ADD_TAX_FREE_EU_SERVICES,
            self::XI_ADD_TAX_FREE_THIRD,
            self::XI_ADD_ZERO,
            self::XI_IN_REDUCED,
            self::XI_IN_REV_REDUCED_EU,
            self::XI_IN_REV_REDUCED_EU_SERVICE,
            self::XI_IN_REV_STANDARD_EU,
            self::XI_IN_REV_STANDARD_EU_SERVICE,
            self::XI_IN_STANDARD,
            self::XI_IN_TAX_FREE_THIRD,
            self::XI_IN_ZERO,
            self::XK_ADD_REDUCED,
            self::XK_ADD_STANDARD,
            self::XK_ADD_TAX_FREE_THIRD,
            self::XK_ADD_ZERO,
            self::XK_IN_REDUCED,
            self::XK_IN_STANDARD,
            self::XK_IN_TAX_FREE_THIRD,
            self::XK_IN_ZERO,
            self::ZA_ADD_REDUCED,
            self::ZA_ADD_REDUCED_SUPER,
            self::ZA_ADD_STANDARD,
            self::ZA_ADD_TAX_FREE_THIRD,
            self::ZA_ADD_ZERO,
            self::ZA_IN_REDUCED,
            self::ZA_IN_REDUCED_SUPER,
            self::ZA_IN_STANDARD,
            self::ZA_IN_TAX_FREE_THIRD,
            self::ZA_IN_ZERO
        ];
    }
}


