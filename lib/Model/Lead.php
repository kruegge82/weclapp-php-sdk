<?php
/**
 * Lead
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

use \ArrayAccess;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * Lead Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Lead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => 'int',
        'last_modified_date' => 'int',
        'version' => 'string',
        'custom_attributes' => '\kruegge82\weclapp\Model\CustomAttribute[]',
        'addresses' => '\kruegge82\weclapp\Model\Address[]',
        'birth_date' => 'int',
        'company' => 'string',
        'company2' => 'string',
        'delivery_address_id' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'first_name' => 'string',
        'invoice_address_id' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'mobile_phone1' => 'string',
        'online_accounts' => '\kruegge82\weclapp\Model\OnlineAccount[]',
        'party_type' => '\kruegge82\weclapp\Model\PartyType',
        'person_company' => 'string',
        'person_department_id' => 'string',
        'person_role_id' => 'string',
        'phone' => 'string',
        'primary_address_id' => 'string',
        'salutation' => '\kruegge82\weclapp\Model\Salutation',
        'tags' => 'string[]',
        'title' => 'string',
        'title_id' => 'string',
        'website' => 'string',
        'commercial_language_id' => 'string',
        'contacts' => '\kruegge82\weclapp\Model\Contact[]',
        'currency_id' => 'string',
        'currency_name' => 'string',
        'primary_contact_id' => 'string',
        'sector_id' => 'string',
        'sector_name' => 'string',
        'annual_revenue' => 'float',
        'company_size_id' => 'string',
        'company_size_name' => 'string',
        'customer_category_id' => 'string',
        'customer_category_name' => 'string',
        'parent_party_id' => 'string',
        'payment_method_id' => 'string',
        'payment_method_name' => 'string',
        'responsible_user_id' => 'string',
        'responsible_user_username' => 'string',
        'shipment_method_id' => 'string',
        'shipment_method_name' => 'string',
        'term_of_payment_id' => 'string',
        'term_of_payment_name' => 'string',
        'vat_registration_number' => 'string',
        'description' => 'string',
        'lead_number' => 'string',
        'lead_rating_id' => 'string',
        'lead_rating_name' => 'string',
        'lead_source_id' => 'string',
        'lead_source_name' => 'string',
        'lead_status' => '\kruegge82\weclapp\Model\LeadStatus',
        'lead_topics' => '\kruegge82\weclapp\Model\Entity[]',
        'loss_description' => 'string',
        'loss_reason_id' => 'string',
        'loss_reason_name' => 'string',
        'old_lead_number' => 'string',
        'opt_in' => 'bool',
        'opt_in_letter' => 'bool',
        'opt_in_phone' => 'bool',
        'opt_in_sms' => 'bool',
        'responsible_user_fixed' => 'bool',
        'sales_channel' => '\kruegge82\weclapp\Model\DistributionChannel',
        'sales_stage_id' => 'string',
        'sales_stage_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_date' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'version' => null,
        'custom_attributes' => null,
        'addresses' => null,
        'birth_date' => 'timestamp',
        'company' => null,
        'company2' => null,
        'delivery_address_id' => null,
        'email' => 'email',
        'fax' => null,
        'first_name' => null,
        'invoice_address_id' => null,
        'last_name' => null,
        'middle_name' => null,
        'mobile_phone1' => null,
        'online_accounts' => null,
        'party_type' => null,
        'person_company' => null,
        'person_department_id' => null,
        'person_role_id' => null,
        'phone' => null,
        'primary_address_id' => null,
        'salutation' => null,
        'tags' => null,
        'title' => null,
        'title_id' => null,
        'website' => null,
        'commercial_language_id' => null,
        'contacts' => null,
        'currency_id' => null,
        'currency_name' => null,
        'primary_contact_id' => null,
        'sector_id' => null,
        'sector_name' => null,
        'annual_revenue' => 'decimal',
        'company_size_id' => null,
        'company_size_name' => null,
        'customer_category_id' => null,
        'customer_category_name' => null,
        'parent_party_id' => null,
        'payment_method_id' => null,
        'payment_method_name' => null,
        'responsible_user_id' => null,
        'responsible_user_username' => null,
        'shipment_method_id' => null,
        'shipment_method_name' => null,
        'term_of_payment_id' => null,
        'term_of_payment_name' => null,
        'vat_registration_number' => null,
        'description' => 'html',
        'lead_number' => null,
        'lead_rating_id' => null,
        'lead_rating_name' => null,
        'lead_source_id' => null,
        'lead_source_name' => null,
        'lead_status' => null,
        'lead_topics' => null,
        'loss_description' => null,
        'loss_reason_id' => null,
        'loss_reason_name' => null,
        'old_lead_number' => null,
        'opt_in' => null,
        'opt_in_letter' => null,
        'opt_in_phone' => null,
        'opt_in_sms' => null,
        'responsible_user_fixed' => null,
        'sales_channel' => null,
        'sales_stage_id' => null,
        'sales_stage_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_date' => false,
        'last_modified_date' => false,
        'version' => false,
        'custom_attributes' => false,
        'addresses' => false,
        'birth_date' => false,
        'company' => false,
        'company2' => false,
        'delivery_address_id' => false,
        'email' => false,
        'fax' => false,
        'first_name' => false,
        'invoice_address_id' => false,
        'last_name' => false,
        'middle_name' => false,
        'mobile_phone1' => false,
        'online_accounts' => false,
        'party_type' => false,
        'person_company' => false,
        'person_department_id' => false,
        'person_role_id' => false,
        'phone' => false,
        'primary_address_id' => false,
        'salutation' => false,
        'tags' => false,
        'title' => false,
        'title_id' => false,
        'website' => false,
        'commercial_language_id' => false,
        'contacts' => false,
        'currency_id' => false,
        'currency_name' => false,
        'primary_contact_id' => false,
        'sector_id' => false,
        'sector_name' => false,
        'annual_revenue' => false,
        'company_size_id' => false,
        'company_size_name' => false,
        'customer_category_id' => false,
        'customer_category_name' => false,
        'parent_party_id' => false,
        'payment_method_id' => false,
        'payment_method_name' => false,
        'responsible_user_id' => false,
        'responsible_user_username' => false,
        'shipment_method_id' => false,
        'shipment_method_name' => false,
        'term_of_payment_id' => false,
        'term_of_payment_name' => false,
        'vat_registration_number' => false,
        'description' => false,
        'lead_number' => false,
        'lead_rating_id' => false,
        'lead_rating_name' => false,
        'lead_source_id' => false,
        'lead_source_name' => false,
        'lead_status' => false,
        'lead_topics' => false,
        'loss_description' => false,
        'loss_reason_id' => false,
        'loss_reason_name' => false,
        'old_lead_number' => false,
        'opt_in' => false,
        'opt_in_letter' => false,
        'opt_in_phone' => false,
        'opt_in_sms' => false,
        'responsible_user_fixed' => false,
        'sales_channel' => false,
        'sales_stage_id' => false,
        'sales_stage_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_date' => 'createdDate',
        'last_modified_date' => 'lastModifiedDate',
        'version' => 'version',
        'custom_attributes' => 'customAttributes',
        'addresses' => 'addresses',
        'birth_date' => 'birthDate',
        'company' => 'company',
        'company2' => 'company2',
        'delivery_address_id' => 'deliveryAddressId',
        'email' => 'email',
        'fax' => 'fax',
        'first_name' => 'firstName',
        'invoice_address_id' => 'invoiceAddressId',
        'last_name' => 'lastName',
        'middle_name' => 'middleName',
        'mobile_phone1' => 'mobilePhone1',
        'online_accounts' => 'onlineAccounts',
        'party_type' => 'partyType',
        'person_company' => 'personCompany',
        'person_department_id' => 'personDepartmentId',
        'person_role_id' => 'personRoleId',
        'phone' => 'phone',
        'primary_address_id' => 'primaryAddressId',
        'salutation' => 'salutation',
        'tags' => 'tags',
        'title' => 'title',
        'title_id' => 'titleId',
        'website' => 'website',
        'commercial_language_id' => 'commercialLanguageId',
        'contacts' => 'contacts',
        'currency_id' => 'currencyId',
        'currency_name' => 'currencyName',
        'primary_contact_id' => 'primaryContactId',
        'sector_id' => 'sectorId',
        'sector_name' => 'sectorName',
        'annual_revenue' => 'annualRevenue',
        'company_size_id' => 'companySizeId',
        'company_size_name' => 'companySizeName',
        'customer_category_id' => 'customerCategoryId',
        'customer_category_name' => 'customerCategoryName',
        'parent_party_id' => 'parentPartyId',
        'payment_method_id' => 'paymentMethodId',
        'payment_method_name' => 'paymentMethodName',
        'responsible_user_id' => 'responsibleUserId',
        'responsible_user_username' => 'responsibleUserUsername',
        'shipment_method_id' => 'shipmentMethodId',
        'shipment_method_name' => 'shipmentMethodName',
        'term_of_payment_id' => 'termOfPaymentId',
        'term_of_payment_name' => 'termOfPaymentName',
        'vat_registration_number' => 'vatRegistrationNumber',
        'description' => 'description',
        'lead_number' => 'leadNumber',
        'lead_rating_id' => 'leadRatingId',
        'lead_rating_name' => 'leadRatingName',
        'lead_source_id' => 'leadSourceId',
        'lead_source_name' => 'leadSourceName',
        'lead_status' => 'leadStatus',
        'lead_topics' => 'leadTopics',
        'loss_description' => 'lossDescription',
        'loss_reason_id' => 'lossReasonId',
        'loss_reason_name' => 'lossReasonName',
        'old_lead_number' => 'oldLeadNumber',
        'opt_in' => 'optIn',
        'opt_in_letter' => 'optInLetter',
        'opt_in_phone' => 'optInPhone',
        'opt_in_sms' => 'optInSms',
        'responsible_user_fixed' => 'responsibleUserFixed',
        'sales_channel' => 'salesChannel',
        'sales_stage_id' => 'salesStageId',
        'sales_stage_name' => 'salesStageName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'last_modified_date' => 'setLastModifiedDate',
        'version' => 'setVersion',
        'custom_attributes' => 'setCustomAttributes',
        'addresses' => 'setAddresses',
        'birth_date' => 'setBirthDate',
        'company' => 'setCompany',
        'company2' => 'setCompany2',
        'delivery_address_id' => 'setDeliveryAddressId',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'first_name' => 'setFirstName',
        'invoice_address_id' => 'setInvoiceAddressId',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'mobile_phone1' => 'setMobilePhone1',
        'online_accounts' => 'setOnlineAccounts',
        'party_type' => 'setPartyType',
        'person_company' => 'setPersonCompany',
        'person_department_id' => 'setPersonDepartmentId',
        'person_role_id' => 'setPersonRoleId',
        'phone' => 'setPhone',
        'primary_address_id' => 'setPrimaryAddressId',
        'salutation' => 'setSalutation',
        'tags' => 'setTags',
        'title' => 'setTitle',
        'title_id' => 'setTitleId',
        'website' => 'setWebsite',
        'commercial_language_id' => 'setCommercialLanguageId',
        'contacts' => 'setContacts',
        'currency_id' => 'setCurrencyId',
        'currency_name' => 'setCurrencyName',
        'primary_contact_id' => 'setPrimaryContactId',
        'sector_id' => 'setSectorId',
        'sector_name' => 'setSectorName',
        'annual_revenue' => 'setAnnualRevenue',
        'company_size_id' => 'setCompanySizeId',
        'company_size_name' => 'setCompanySizeName',
        'customer_category_id' => 'setCustomerCategoryId',
        'customer_category_name' => 'setCustomerCategoryName',
        'parent_party_id' => 'setParentPartyId',
        'payment_method_id' => 'setPaymentMethodId',
        'payment_method_name' => 'setPaymentMethodName',
        'responsible_user_id' => 'setResponsibleUserId',
        'responsible_user_username' => 'setResponsibleUserUsername',
        'shipment_method_id' => 'setShipmentMethodId',
        'shipment_method_name' => 'setShipmentMethodName',
        'term_of_payment_id' => 'setTermOfPaymentId',
        'term_of_payment_name' => 'setTermOfPaymentName',
        'vat_registration_number' => 'setVatRegistrationNumber',
        'description' => 'setDescription',
        'lead_number' => 'setLeadNumber',
        'lead_rating_id' => 'setLeadRatingId',
        'lead_rating_name' => 'setLeadRatingName',
        'lead_source_id' => 'setLeadSourceId',
        'lead_source_name' => 'setLeadSourceName',
        'lead_status' => 'setLeadStatus',
        'lead_topics' => 'setLeadTopics',
        'loss_description' => 'setLossDescription',
        'loss_reason_id' => 'setLossReasonId',
        'loss_reason_name' => 'setLossReasonName',
        'old_lead_number' => 'setOldLeadNumber',
        'opt_in' => 'setOptIn',
        'opt_in_letter' => 'setOptInLetter',
        'opt_in_phone' => 'setOptInPhone',
        'opt_in_sms' => 'setOptInSms',
        'responsible_user_fixed' => 'setResponsibleUserFixed',
        'sales_channel' => 'setSalesChannel',
        'sales_stage_id' => 'setSalesStageId',
        'sales_stage_name' => 'setSalesStageName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'last_modified_date' => 'getLastModifiedDate',
        'version' => 'getVersion',
        'custom_attributes' => 'getCustomAttributes',
        'addresses' => 'getAddresses',
        'birth_date' => 'getBirthDate',
        'company' => 'getCompany',
        'company2' => 'getCompany2',
        'delivery_address_id' => 'getDeliveryAddressId',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'first_name' => 'getFirstName',
        'invoice_address_id' => 'getInvoiceAddressId',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'mobile_phone1' => 'getMobilePhone1',
        'online_accounts' => 'getOnlineAccounts',
        'party_type' => 'getPartyType',
        'person_company' => 'getPersonCompany',
        'person_department_id' => 'getPersonDepartmentId',
        'person_role_id' => 'getPersonRoleId',
        'phone' => 'getPhone',
        'primary_address_id' => 'getPrimaryAddressId',
        'salutation' => 'getSalutation',
        'tags' => 'getTags',
        'title' => 'getTitle',
        'title_id' => 'getTitleId',
        'website' => 'getWebsite',
        'commercial_language_id' => 'getCommercialLanguageId',
        'contacts' => 'getContacts',
        'currency_id' => 'getCurrencyId',
        'currency_name' => 'getCurrencyName',
        'primary_contact_id' => 'getPrimaryContactId',
        'sector_id' => 'getSectorId',
        'sector_name' => 'getSectorName',
        'annual_revenue' => 'getAnnualRevenue',
        'company_size_id' => 'getCompanySizeId',
        'company_size_name' => 'getCompanySizeName',
        'customer_category_id' => 'getCustomerCategoryId',
        'customer_category_name' => 'getCustomerCategoryName',
        'parent_party_id' => 'getParentPartyId',
        'payment_method_id' => 'getPaymentMethodId',
        'payment_method_name' => 'getPaymentMethodName',
        'responsible_user_id' => 'getResponsibleUserId',
        'responsible_user_username' => 'getResponsibleUserUsername',
        'shipment_method_id' => 'getShipmentMethodId',
        'shipment_method_name' => 'getShipmentMethodName',
        'term_of_payment_id' => 'getTermOfPaymentId',
        'term_of_payment_name' => 'getTermOfPaymentName',
        'vat_registration_number' => 'getVatRegistrationNumber',
        'description' => 'getDescription',
        'lead_number' => 'getLeadNumber',
        'lead_rating_id' => 'getLeadRatingId',
        'lead_rating_name' => 'getLeadRatingName',
        'lead_source_id' => 'getLeadSourceId',
        'lead_source_name' => 'getLeadSourceName',
        'lead_status' => 'getLeadStatus',
        'lead_topics' => 'getLeadTopics',
        'loss_description' => 'getLossDescription',
        'loss_reason_id' => 'getLossReasonId',
        'loss_reason_name' => 'getLossReasonName',
        'old_lead_number' => 'getOldLeadNumber',
        'opt_in' => 'getOptIn',
        'opt_in_letter' => 'getOptInLetter',
        'opt_in_phone' => 'getOptInPhone',
        'opt_in_sms' => 'getOptInSms',
        'responsible_user_fixed' => 'getResponsibleUserFixed',
        'sales_channel' => 'getSalesChannel',
        'sales_stage_id' => 'getSalesStageId',
        'sales_stage_name' => 'getSalesStageName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('custom_attributes', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('company2', $data ?? [], null);
        $this->setIfExists('delivery_address_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('invoice_address_id', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('mobile_phone1', $data ?? [], null);
        $this->setIfExists('online_accounts', $data ?? [], null);
        $this->setIfExists('party_type', $data ?? [], null);
        $this->setIfExists('person_company', $data ?? [], null);
        $this->setIfExists('person_department_id', $data ?? [], null);
        $this->setIfExists('person_role_id', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('primary_address_id', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('title_id', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
        $this->setIfExists('commercial_language_id', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('currency_id', $data ?? [], null);
        $this->setIfExists('currency_name', $data ?? [], null);
        $this->setIfExists('primary_contact_id', $data ?? [], null);
        $this->setIfExists('sector_id', $data ?? [], null);
        $this->setIfExists('sector_name', $data ?? [], null);
        $this->setIfExists('annual_revenue', $data ?? [], null);
        $this->setIfExists('company_size_id', $data ?? [], null);
        $this->setIfExists('company_size_name', $data ?? [], null);
        $this->setIfExists('customer_category_id', $data ?? [], null);
        $this->setIfExists('customer_category_name', $data ?? [], null);
        $this->setIfExists('parent_party_id', $data ?? [], null);
        $this->setIfExists('payment_method_id', $data ?? [], null);
        $this->setIfExists('payment_method_name', $data ?? [], null);
        $this->setIfExists('responsible_user_id', $data ?? [], null);
        $this->setIfExists('responsible_user_username', $data ?? [], null);
        $this->setIfExists('shipment_method_id', $data ?? [], null);
        $this->setIfExists('shipment_method_name', $data ?? [], null);
        $this->setIfExists('term_of_payment_id', $data ?? [], null);
        $this->setIfExists('term_of_payment_name', $data ?? [], null);
        $this->setIfExists('vat_registration_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('lead_number', $data ?? [], null);
        $this->setIfExists('lead_rating_id', $data ?? [], null);
        $this->setIfExists('lead_rating_name', $data ?? [], null);
        $this->setIfExists('lead_source_id', $data ?? [], null);
        $this->setIfExists('lead_source_name', $data ?? [], null);
        $this->setIfExists('lead_status', $data ?? [], null);
        $this->setIfExists('lead_topics', $data ?? [], null);
        $this->setIfExists('loss_description', $data ?? [], null);
        $this->setIfExists('loss_reason_id', $data ?? [], null);
        $this->setIfExists('loss_reason_name', $data ?? [], null);
        $this->setIfExists('old_lead_number', $data ?? [], null);
        $this->setIfExists('opt_in', $data ?? [], null);
        $this->setIfExists('opt_in_letter', $data ?? [], null);
        $this->setIfExists('opt_in_phone', $data ?? [], null);
        $this->setIfExists('opt_in_sms', $data ?? [], null);
        $this->setIfExists('responsible_user_fixed', $data ?? [], null);
        $this->setIfExists('sales_channel', $data ?? [], null);
        $this->setIfExists('sales_stage_id', $data ?? [], null);
        $this->setIfExists('sales_stage_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['annual_revenue']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['annual_revenue'])) {
            $invalidProperties[] = "invalid value for 'annual_revenue', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int|null $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return int|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param int|null $last_modified_date last_modified_date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \kruegge82\weclapp\Model\CustomAttribute[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \kruegge82\weclapp\Model\CustomAttribute[]|null $custom_attributes custom_attributes
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        if (is_null($custom_attributes)) {
            throw new \InvalidArgumentException('non-nullable custom_attributes cannot be null');
        }
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \kruegge82\weclapp\Model\Address[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \kruegge82\weclapp\Model\Address[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return int|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param int|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company2
     *
     * @return string|null
     */
    public function getCompany2()
    {
        return $this->container['company2'];
    }

    /**
     * Sets company2
     *
     * @param string|null $company2 company2
     *
     * @return self
     */
    public function setCompany2($company2)
    {
        if (is_null($company2)) {
            throw new \InvalidArgumentException('non-nullable company2 cannot be null');
        }
        $this->container['company2'] = $company2;

        return $this;
    }

    /**
     * Gets delivery_address_id
     *
     * @return string|null
     */
    public function getDeliveryAddressId()
    {
        return $this->container['delivery_address_id'];
    }

    /**
     * Sets delivery_address_id
     *
     * @param string|null $delivery_address_id delivery_address_id
     *
     * @return self
     */
    public function setDeliveryAddressId($delivery_address_id)
    {
        if (is_null($delivery_address_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_address_id cannot be null');
        }
        $this->container['delivery_address_id'] = $delivery_address_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        if (is_null($fax)) {
            throw new \InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets invoice_address_id
     *
     * @return string|null
     */
    public function getInvoiceAddressId()
    {
        return $this->container['invoice_address_id'];
    }

    /**
     * Sets invoice_address_id
     *
     * @param string|null $invoice_address_id invoice_address_id
     *
     * @return self
     */
    public function setInvoiceAddressId($invoice_address_id)
    {
        if (is_null($invoice_address_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_address_id cannot be null');
        }
        $this->container['invoice_address_id'] = $invoice_address_id;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets mobile_phone1
     *
     * @return string|null
     */
    public function getMobilePhone1()
    {
        return $this->container['mobile_phone1'];
    }

    /**
     * Sets mobile_phone1
     *
     * @param string|null $mobile_phone1 mobile_phone1
     *
     * @return self
     */
    public function setMobilePhone1($mobile_phone1)
    {
        if (is_null($mobile_phone1)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone1 cannot be null');
        }
        $this->container['mobile_phone1'] = $mobile_phone1;

        return $this;
    }

    /**
     * Gets online_accounts
     *
     * @return \kruegge82\weclapp\Model\OnlineAccount[]|null
     */
    public function getOnlineAccounts()
    {
        return $this->container['online_accounts'];
    }

    /**
     * Sets online_accounts
     *
     * @param \kruegge82\weclapp\Model\OnlineAccount[]|null $online_accounts online_accounts
     *
     * @return self
     */
    public function setOnlineAccounts($online_accounts)
    {
        if (is_null($online_accounts)) {
            throw new \InvalidArgumentException('non-nullable online_accounts cannot be null');
        }
        $this->container['online_accounts'] = $online_accounts;

        return $this;
    }

    /**
     * Gets party_type
     *
     * @return \kruegge82\weclapp\Model\PartyType|null
     */
    public function getPartyType()
    {
        return $this->container['party_type'];
    }

    /**
     * Sets party_type
     *
     * @param \kruegge82\weclapp\Model\PartyType|null $party_type party_type
     *
     * @return self
     */
    public function setPartyType($party_type)
    {
        if (is_null($party_type)) {
            throw new \InvalidArgumentException('non-nullable party_type cannot be null');
        }
        $this->container['party_type'] = $party_type;

        return $this;
    }

    /**
     * Gets person_company
     *
     * @return string|null
     */
    public function getPersonCompany()
    {
        return $this->container['person_company'];
    }

    /**
     * Sets person_company
     *
     * @param string|null $person_company person_company
     *
     * @return self
     */
    public function setPersonCompany($person_company)
    {
        if (is_null($person_company)) {
            throw new \InvalidArgumentException('non-nullable person_company cannot be null');
        }
        $this->container['person_company'] = $person_company;

        return $this;
    }

    /**
     * Gets person_department_id
     *
     * @return string|null
     */
    public function getPersonDepartmentId()
    {
        return $this->container['person_department_id'];
    }

    /**
     * Sets person_department_id
     *
     * @param string|null $person_department_id person_department_id
     *
     * @return self
     */
    public function setPersonDepartmentId($person_department_id)
    {
        if (is_null($person_department_id)) {
            throw new \InvalidArgumentException('non-nullable person_department_id cannot be null');
        }
        $this->container['person_department_id'] = $person_department_id;

        return $this;
    }

    /**
     * Gets person_role_id
     *
     * @return string|null
     */
    public function getPersonRoleId()
    {
        return $this->container['person_role_id'];
    }

    /**
     * Sets person_role_id
     *
     * @param string|null $person_role_id person_role_id
     *
     * @return self
     */
    public function setPersonRoleId($person_role_id)
    {
        if (is_null($person_role_id)) {
            throw new \InvalidArgumentException('non-nullable person_role_id cannot be null');
        }
        $this->container['person_role_id'] = $person_role_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets primary_address_id
     *
     * @return string|null
     */
    public function getPrimaryAddressId()
    {
        return $this->container['primary_address_id'];
    }

    /**
     * Sets primary_address_id
     *
     * @param string|null $primary_address_id primary_address_id
     *
     * @return self
     */
    public function setPrimaryAddressId($primary_address_id)
    {
        if (is_null($primary_address_id)) {
            throw new \InvalidArgumentException('non-nullable primary_address_id cannot be null');
        }
        $this->container['primary_address_id'] = $primary_address_id;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \kruegge82\weclapp\Model\Salutation|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \kruegge82\weclapp\Model\Salutation|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     * @deprecated
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     * @deprecated
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_id
     *
     * @return string|null
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param string|null $title_id title_id
     *
     * @return self
     */
    public function setTitleId($title_id)
    {
        if (is_null($title_id)) {
            throw new \InvalidArgumentException('non-nullable title_id cannot be null');
        }
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets commercial_language_id
     *
     * @return string|null
     */
    public function getCommercialLanguageId()
    {
        return $this->container['commercial_language_id'];
    }

    /**
     * Sets commercial_language_id
     *
     * @param string|null $commercial_language_id commercial_language_id
     *
     * @return self
     */
    public function setCommercialLanguageId($commercial_language_id)
    {
        if (is_null($commercial_language_id)) {
            throw new \InvalidArgumentException('non-nullable commercial_language_id cannot be null');
        }
        $this->container['commercial_language_id'] = $commercial_language_id;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \kruegge82\weclapp\Model\Contact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \kruegge82\weclapp\Model\Contact[]|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string|null $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {
        if (is_null($currency_id)) {
            throw new \InvalidArgumentException('non-nullable currency_id cannot be null');
        }
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets currency_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     *
     * @param string|null $currency_name currency_name
     *
     * @return self
     * @deprecated
     */
    public function setCurrencyName($currency_name)
    {
        if (is_null($currency_name)) {
            throw new \InvalidArgumentException('non-nullable currency_name cannot be null');
        }
        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets primary_contact_id
     *
     * @return string|null
     */
    public function getPrimaryContactId()
    {
        return $this->container['primary_contact_id'];
    }

    /**
     * Sets primary_contact_id
     *
     * @param string|null $primary_contact_id primary_contact_id
     *
     * @return self
     */
    public function setPrimaryContactId($primary_contact_id)
    {
        if (is_null($primary_contact_id)) {
            throw new \InvalidArgumentException('non-nullable primary_contact_id cannot be null');
        }
        $this->container['primary_contact_id'] = $primary_contact_id;

        return $this;
    }

    /**
     * Gets sector_id
     *
     * @return string|null
     */
    public function getSectorId()
    {
        return $this->container['sector_id'];
    }

    /**
     * Sets sector_id
     *
     * @param string|null $sector_id sector_id
     *
     * @return self
     */
    public function setSectorId($sector_id)
    {
        if (is_null($sector_id)) {
            throw new \InvalidArgumentException('non-nullable sector_id cannot be null');
        }
        $this->container['sector_id'] = $sector_id;

        return $this;
    }

    /**
     * Gets sector_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSectorName()
    {
        return $this->container['sector_name'];
    }

    /**
     * Sets sector_name
     *
     * @param string|null $sector_name sector_name
     *
     * @return self
     * @deprecated
     */
    public function setSectorName($sector_name)
    {
        if (is_null($sector_name)) {
            throw new \InvalidArgumentException('non-nullable sector_name cannot be null');
        }
        $this->container['sector_name'] = $sector_name;

        return $this;
    }

    /**
     * Gets annual_revenue
     *
     * @return float|null
     */
    public function getAnnualRevenue()
    {
        return $this->container['annual_revenue'];
    }

    /**
     * Sets annual_revenue
     *
     * @param float|null $annual_revenue annual_revenue
     *
     * @return self
     */
    public function setAnnualRevenue($annual_revenue)
    {
        if (is_null($annual_revenue)) {
            throw new \InvalidArgumentException('non-nullable annual_revenue cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($annual_revenue)))) {
            throw new \InvalidArgumentException("invalid value for \$annual_revenue when calling Lead., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['annual_revenue'] = $annual_revenue;

        return $this;
    }

    /**
     * Gets company_size_id
     *
     * @return string|null
     */
    public function getCompanySizeId()
    {
        return $this->container['company_size_id'];
    }

    /**
     * Sets company_size_id
     *
     * @param string|null $company_size_id company_size_id
     *
     * @return self
     */
    public function setCompanySizeId($company_size_id)
    {
        if (is_null($company_size_id)) {
            throw new \InvalidArgumentException('non-nullable company_size_id cannot be null');
        }
        $this->container['company_size_id'] = $company_size_id;

        return $this;
    }

    /**
     * Gets company_size_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanySizeName()
    {
        return $this->container['company_size_name'];
    }

    /**
     * Sets company_size_name
     *
     * @param string|null $company_size_name company_size_name
     *
     * @return self
     * @deprecated
     */
    public function setCompanySizeName($company_size_name)
    {
        if (is_null($company_size_name)) {
            throw new \InvalidArgumentException('non-nullable company_size_name cannot be null');
        }
        $this->container['company_size_name'] = $company_size_name;

        return $this;
    }

    /**
     * Gets customer_category_id
     *
     * @return string|null
     */
    public function getCustomerCategoryId()
    {
        return $this->container['customer_category_id'];
    }

    /**
     * Sets customer_category_id
     *
     * @param string|null $customer_category_id customer_category_id
     *
     * @return self
     */
    public function setCustomerCategoryId($customer_category_id)
    {
        if (is_null($customer_category_id)) {
            throw new \InvalidArgumentException('non-nullable customer_category_id cannot be null');
        }
        $this->container['customer_category_id'] = $customer_category_id;

        return $this;
    }

    /**
     * Gets customer_category_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerCategoryName()
    {
        return $this->container['customer_category_name'];
    }

    /**
     * Sets customer_category_name
     *
     * @param string|null $customer_category_name customer_category_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerCategoryName($customer_category_name)
    {
        if (is_null($customer_category_name)) {
            throw new \InvalidArgumentException('non-nullable customer_category_name cannot be null');
        }
        $this->container['customer_category_name'] = $customer_category_name;

        return $this;
    }

    /**
     * Gets parent_party_id
     *
     * @return string|null
     */
    public function getParentPartyId()
    {
        return $this->container['parent_party_id'];
    }

    /**
     * Sets parent_party_id
     *
     * @param string|null $parent_party_id parent_party_id
     *
     * @return self
     */
    public function setParentPartyId($parent_party_id)
    {
        if (is_null($parent_party_id)) {
            throw new \InvalidArgumentException('non-nullable parent_party_id cannot be null');
        }
        $this->container['parent_party_id'] = $parent_party_id;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string|null $payment_method_id payment_method_id
     *
     * @return self
     */
    public function setPaymentMethodId($payment_method_id)
    {
        if (is_null($payment_method_id)) {
            throw new \InvalidArgumentException('non-nullable payment_method_id cannot be null');
        }
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets payment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getPaymentMethodName()
    {
        return $this->container['payment_method_name'];
    }

    /**
     * Sets payment_method_name
     *
     * @param string|null $payment_method_name payment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setPaymentMethodName($payment_method_name)
    {
        if (is_null($payment_method_name)) {
            throw new \InvalidArgumentException('non-nullable payment_method_name cannot be null');
        }
        $this->container['payment_method_name'] = $payment_method_name;

        return $this;
    }

    /**
     * Gets responsible_user_id
     *
     * @return string|null
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     *
     * @param string|null $responsible_user_id responsible_user_id
     *
     * @return self
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        if (is_null($responsible_user_id)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_id cannot be null');
        }
        $this->container['responsible_user_id'] = $responsible_user_id;

        return $this;
    }

    /**
     * Gets responsible_user_username
     *
     * @return string|null
     * @deprecated
     */
    public function getResponsibleUserUsername()
    {
        return $this->container['responsible_user_username'];
    }

    /**
     * Sets responsible_user_username
     *
     * @param string|null $responsible_user_username responsible_user_username
     *
     * @return self
     * @deprecated
     */
    public function setResponsibleUserUsername($responsible_user_username)
    {
        if (is_null($responsible_user_username)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_username cannot be null');
        }
        $this->container['responsible_user_username'] = $responsible_user_username;

        return $this;
    }

    /**
     * Gets shipment_method_id
     *
     * @return string|null
     */
    public function getShipmentMethodId()
    {
        return $this->container['shipment_method_id'];
    }

    /**
     * Sets shipment_method_id
     *
     * @param string|null $shipment_method_id shipment_method_id
     *
     * @return self
     */
    public function setShipmentMethodId($shipment_method_id)
    {
        if (is_null($shipment_method_id)) {
            throw new \InvalidArgumentException('non-nullable shipment_method_id cannot be null');
        }
        $this->container['shipment_method_id'] = $shipment_method_id;

        return $this;
    }

    /**
     * Gets shipment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getShipmentMethodName()
    {
        return $this->container['shipment_method_name'];
    }

    /**
     * Sets shipment_method_name
     *
     * @param string|null $shipment_method_name shipment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setShipmentMethodName($shipment_method_name)
    {
        if (is_null($shipment_method_name)) {
            throw new \InvalidArgumentException('non-nullable shipment_method_name cannot be null');
        }
        $this->container['shipment_method_name'] = $shipment_method_name;

        return $this;
    }

    /**
     * Gets term_of_payment_id
     *
     * @return string|null
     */
    public function getTermOfPaymentId()
    {
        return $this->container['term_of_payment_id'];
    }

    /**
     * Sets term_of_payment_id
     *
     * @param string|null $term_of_payment_id term_of_payment_id
     *
     * @return self
     */
    public function setTermOfPaymentId($term_of_payment_id)
    {
        if (is_null($term_of_payment_id)) {
            throw new \InvalidArgumentException('non-nullable term_of_payment_id cannot be null');
        }
        $this->container['term_of_payment_id'] = $term_of_payment_id;

        return $this;
    }

    /**
     * Gets term_of_payment_name
     *
     * @return string|null
     * @deprecated
     */
    public function getTermOfPaymentName()
    {
        return $this->container['term_of_payment_name'];
    }

    /**
     * Sets term_of_payment_name
     *
     * @param string|null $term_of_payment_name term_of_payment_name
     *
     * @return self
     * @deprecated
     */
    public function setTermOfPaymentName($term_of_payment_name)
    {
        if (is_null($term_of_payment_name)) {
            throw new \InvalidArgumentException('non-nullable term_of_payment_name cannot be null');
        }
        $this->container['term_of_payment_name'] = $term_of_payment_name;

        return $this;
    }

    /**
     * Gets vat_registration_number
     *
     * @return string|null
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vat_registration_number'];
    }

    /**
     * Sets vat_registration_number
     *
     * @param string|null $vat_registration_number vat_registration_number
     *
     * @return self
     */
    public function setVatRegistrationNumber($vat_registration_number)
    {
        if (is_null($vat_registration_number)) {
            throw new \InvalidArgumentException('non-nullable vat_registration_number cannot be null');
        }
        $this->container['vat_registration_number'] = $vat_registration_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets lead_number
     *
     * @return string|null
     */
    public function getLeadNumber()
    {
        return $this->container['lead_number'];
    }

    /**
     * Sets lead_number
     *
     * @param string|null $lead_number lead_number
     *
     * @return self
     */
    public function setLeadNumber($lead_number)
    {
        if (is_null($lead_number)) {
            throw new \InvalidArgumentException('non-nullable lead_number cannot be null');
        }
        $this->container['lead_number'] = $lead_number;

        return $this;
    }

    /**
     * Gets lead_rating_id
     *
     * @return string|null
     */
    public function getLeadRatingId()
    {
        return $this->container['lead_rating_id'];
    }

    /**
     * Sets lead_rating_id
     *
     * @param string|null $lead_rating_id lead_rating_id
     *
     * @return self
     */
    public function setLeadRatingId($lead_rating_id)
    {
        if (is_null($lead_rating_id)) {
            throw new \InvalidArgumentException('non-nullable lead_rating_id cannot be null');
        }
        $this->container['lead_rating_id'] = $lead_rating_id;

        return $this;
    }

    /**
     * Gets lead_rating_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLeadRatingName()
    {
        return $this->container['lead_rating_name'];
    }

    /**
     * Sets lead_rating_name
     *
     * @param string|null $lead_rating_name lead_rating_name
     *
     * @return self
     * @deprecated
     */
    public function setLeadRatingName($lead_rating_name)
    {
        if (is_null($lead_rating_name)) {
            throw new \InvalidArgumentException('non-nullable lead_rating_name cannot be null');
        }
        $this->container['lead_rating_name'] = $lead_rating_name;

        return $this;
    }

    /**
     * Gets lead_source_id
     *
     * @return string|null
     */
    public function getLeadSourceId()
    {
        return $this->container['lead_source_id'];
    }

    /**
     * Sets lead_source_id
     *
     * @param string|null $lead_source_id lead_source_id
     *
     * @return self
     */
    public function setLeadSourceId($lead_source_id)
    {
        if (is_null($lead_source_id)) {
            throw new \InvalidArgumentException('non-nullable lead_source_id cannot be null');
        }
        $this->container['lead_source_id'] = $lead_source_id;

        return $this;
    }

    /**
     * Gets lead_source_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLeadSourceName()
    {
        return $this->container['lead_source_name'];
    }

    /**
     * Sets lead_source_name
     *
     * @param string|null $lead_source_name lead_source_name
     *
     * @return self
     * @deprecated
     */
    public function setLeadSourceName($lead_source_name)
    {
        if (is_null($lead_source_name)) {
            throw new \InvalidArgumentException('non-nullable lead_source_name cannot be null');
        }
        $this->container['lead_source_name'] = $lead_source_name;

        return $this;
    }

    /**
     * Gets lead_status
     *
     * @return \kruegge82\weclapp\Model\LeadStatus|null
     */
    public function getLeadStatus()
    {
        return $this->container['lead_status'];
    }

    /**
     * Sets lead_status
     *
     * @param \kruegge82\weclapp\Model\LeadStatus|null $lead_status lead_status
     *
     * @return self
     */
    public function setLeadStatus($lead_status)
    {
        if (is_null($lead_status)) {
            throw new \InvalidArgumentException('non-nullable lead_status cannot be null');
        }
        $this->container['lead_status'] = $lead_status;

        return $this;
    }

    /**
     * Gets lead_topics
     *
     * @return \kruegge82\weclapp\Model\Entity[]|null
     * @deprecated
     */
    public function getLeadTopics()
    {
        return $this->container['lead_topics'];
    }

    /**
     * Sets lead_topics
     *
     * @param \kruegge82\weclapp\Model\Entity[]|null $lead_topics lead_topics
     *
     * @return self
     * @deprecated
     */
    public function setLeadTopics($lead_topics)
    {
        if (is_null($lead_topics)) {
            throw new \InvalidArgumentException('non-nullable lead_topics cannot be null');
        }
        $this->container['lead_topics'] = $lead_topics;

        return $this;
    }

    /**
     * Gets loss_description
     *
     * @return string|null
     */
    public function getLossDescription()
    {
        return $this->container['loss_description'];
    }

    /**
     * Sets loss_description
     *
     * @param string|null $loss_description loss_description
     *
     * @return self
     */
    public function setLossDescription($loss_description)
    {
        if (is_null($loss_description)) {
            throw new \InvalidArgumentException('non-nullable loss_description cannot be null');
        }
        $this->container['loss_description'] = $loss_description;

        return $this;
    }

    /**
     * Gets loss_reason_id
     *
     * @return string|null
     */
    public function getLossReasonId()
    {
        return $this->container['loss_reason_id'];
    }

    /**
     * Sets loss_reason_id
     *
     * @param string|null $loss_reason_id loss_reason_id
     *
     * @return self
     */
    public function setLossReasonId($loss_reason_id)
    {
        if (is_null($loss_reason_id)) {
            throw new \InvalidArgumentException('non-nullable loss_reason_id cannot be null');
        }
        $this->container['loss_reason_id'] = $loss_reason_id;

        return $this;
    }

    /**
     * Gets loss_reason_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLossReasonName()
    {
        return $this->container['loss_reason_name'];
    }

    /**
     * Sets loss_reason_name
     *
     * @param string|null $loss_reason_name loss_reason_name
     *
     * @return self
     * @deprecated
     */
    public function setLossReasonName($loss_reason_name)
    {
        if (is_null($loss_reason_name)) {
            throw new \InvalidArgumentException('non-nullable loss_reason_name cannot be null');
        }
        $this->container['loss_reason_name'] = $loss_reason_name;

        return $this;
    }

    /**
     * Gets old_lead_number
     *
     * @return string|null
     */
    public function getOldLeadNumber()
    {
        return $this->container['old_lead_number'];
    }

    /**
     * Sets old_lead_number
     *
     * @param string|null $old_lead_number old_lead_number
     *
     * @return self
     */
    public function setOldLeadNumber($old_lead_number)
    {
        if (is_null($old_lead_number)) {
            throw new \InvalidArgumentException('non-nullable old_lead_number cannot be null');
        }
        $this->container['old_lead_number'] = $old_lead_number;

        return $this;
    }

    /**
     * Gets opt_in
     *
     * @return bool|null
     */
    public function getOptIn()
    {
        return $this->container['opt_in'];
    }

    /**
     * Sets opt_in
     *
     * @param bool|null $opt_in opt_in
     *
     * @return self
     */
    public function setOptIn($opt_in)
    {
        if (is_null($opt_in)) {
            throw new \InvalidArgumentException('non-nullable opt_in cannot be null');
        }
        $this->container['opt_in'] = $opt_in;

        return $this;
    }

    /**
     * Gets opt_in_letter
     *
     * @return bool|null
     */
    public function getOptInLetter()
    {
        return $this->container['opt_in_letter'];
    }

    /**
     * Sets opt_in_letter
     *
     * @param bool|null $opt_in_letter opt_in_letter
     *
     * @return self
     */
    public function setOptInLetter($opt_in_letter)
    {
        if (is_null($opt_in_letter)) {
            throw new \InvalidArgumentException('non-nullable opt_in_letter cannot be null');
        }
        $this->container['opt_in_letter'] = $opt_in_letter;

        return $this;
    }

    /**
     * Gets opt_in_phone
     *
     * @return bool|null
     */
    public function getOptInPhone()
    {
        return $this->container['opt_in_phone'];
    }

    /**
     * Sets opt_in_phone
     *
     * @param bool|null $opt_in_phone opt_in_phone
     *
     * @return self
     */
    public function setOptInPhone($opt_in_phone)
    {
        if (is_null($opt_in_phone)) {
            throw new \InvalidArgumentException('non-nullable opt_in_phone cannot be null');
        }
        $this->container['opt_in_phone'] = $opt_in_phone;

        return $this;
    }

    /**
     * Gets opt_in_sms
     *
     * @return bool|null
     */
    public function getOptInSms()
    {
        return $this->container['opt_in_sms'];
    }

    /**
     * Sets opt_in_sms
     *
     * @param bool|null $opt_in_sms opt_in_sms
     *
     * @return self
     */
    public function setOptInSms($opt_in_sms)
    {
        if (is_null($opt_in_sms)) {
            throw new \InvalidArgumentException('non-nullable opt_in_sms cannot be null');
        }
        $this->container['opt_in_sms'] = $opt_in_sms;

        return $this;
    }

    /**
     * Gets responsible_user_fixed
     *
     * @return bool|null
     */
    public function getResponsibleUserFixed()
    {
        return $this->container['responsible_user_fixed'];
    }

    /**
     * Sets responsible_user_fixed
     *
     * @param bool|null $responsible_user_fixed responsible_user_fixed
     *
     * @return self
     */
    public function setResponsibleUserFixed($responsible_user_fixed)
    {
        if (is_null($responsible_user_fixed)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_fixed cannot be null');
        }
        $this->container['responsible_user_fixed'] = $responsible_user_fixed;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \kruegge82\weclapp\Model\DistributionChannel|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \kruegge82\weclapp\Model\DistributionChannel|null $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        if (is_null($sales_channel)) {
            throw new \InvalidArgumentException('non-nullable sales_channel cannot be null');
        }
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets sales_stage_id
     *
     * @return string|null
     */
    public function getSalesStageId()
    {
        return $this->container['sales_stage_id'];
    }

    /**
     * Sets sales_stage_id
     *
     * @param string|null $sales_stage_id sales_stage_id
     *
     * @return self
     */
    public function setSalesStageId($sales_stage_id)
    {
        if (is_null($sales_stage_id)) {
            throw new \InvalidArgumentException('non-nullable sales_stage_id cannot be null');
        }
        $this->container['sales_stage_id'] = $sales_stage_id;

        return $this;
    }

    /**
     * Gets sales_stage_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSalesStageName()
    {
        return $this->container['sales_stage_name'];
    }

    /**
     * Sets sales_stage_name
     *
     * @param string|null $sales_stage_name sales_stage_name
     *
     * @return self
     * @deprecated
     */
    public function setSalesStageName($sales_stage_name)
    {
        if (is_null($sales_stage_name)) {
            throw new \InvalidArgumentException('non-nullable sales_stage_name cannot be null');
        }
        $this->container['sales_stage_name'] = $sales_stage_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


