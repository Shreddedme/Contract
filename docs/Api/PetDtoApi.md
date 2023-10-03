# Bankiru\PetClient\PetDtoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPetIdDelete()**](PetDtoApi.md#apiPetIdDelete) | **DELETE** /api/v2/pet/{id} | Removes the PetDto resource. |
| [**apiPetIdGet()**](PetDtoApi.md#apiPetIdGet) | **GET** /api/v2/pet/{id} | Retrieves a PetDto resource. |
| [**apiPetcreatePost()**](PetDtoApi.md#apiPetcreatePost) | **POST** /api/v2/pet/create | Creates a PetDto resource. |
| [**apiPetsGetCollection()**](PetDtoApi.md#apiPetsGetCollection) | **GET** /api/v2/pets | Retrieves the collection of PetDto resources. |
| [**apiPetupdatePut()**](PetDtoApi.md#apiPetupdatePut) | **PUT** /api/v2/pet/update | Replaces the PetDto resource. |


## `apiPetIdDelete()`

```php
apiPetIdDelete($id)
```

Removes the PetDto resource.

Removes the PetDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\PetDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Pet identifier

try {
    $apiInstance->apiPetIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PetDtoApi->apiPetIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Pet identifier | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPetIdGet()`

```php
apiPetIdGet($id): \Bankiru\PetClient\Model\PetDtoJsonldRead
```

Retrieves a PetDto resource.

Retrieves a PetDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\PetDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | PetDto identifier

try {
    $result = $apiInstance->apiPetIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetDtoApi->apiPetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| PetDto identifier | |

### Return type

[**\Bankiru\PetClient\Model\PetDtoJsonldRead**](../Model/PetDtoJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPetcreatePost()`

```php
apiPetcreatePost($petDtoJsonldWritePatch): \Bankiru\PetClient\Model\PetDtoJsonldRead
```

Creates a PetDto resource.

Creates a PetDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\PetDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$petDtoJsonldWritePatch = new \Bankiru\PetClient\Model\PetDtoJsonldWritePatch(); // \Bankiru\PetClient\Model\PetDtoJsonldWritePatch | The new PetDto resource

try {
    $result = $apiInstance->apiPetcreatePost($petDtoJsonldWritePatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetDtoApi->apiPetcreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **petDtoJsonldWritePatch** | [**\Bankiru\PetClient\Model\PetDtoJsonldWritePatch**](../Model/PetDtoJsonldWritePatch.md)| The new PetDto resource | |

### Return type

[**\Bankiru\PetClient\Model\PetDtoJsonldRead**](../Model/PetDtoJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPetsGetCollection()`

```php
apiPetsGetCollection($page, $itemsPerPage): \Bankiru\PetClient\Model\ApiPetsGetCollection200Response
```

Retrieves the collection of PetDto resources.

Retrieves the collection of PetDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\PetDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$itemsPerPage = 10; // int | The number of items per page

try {
    $result = $apiInstance->apiPetsGetCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetDtoApi->apiPetsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **itemsPerPage** | **int**| The number of items per page | [optional] [default to 10] |

### Return type

[**\Bankiru\PetClient\Model\ApiPetsGetCollection200Response**](../Model/ApiPetsGetCollection200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPetupdatePut()`

```php
apiPetupdatePut($petDtoJsonldPut): \Bankiru\PetClient\Model\PetDtoJsonldRead
```

Replaces the PetDto resource.

Replaces the PetDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\PetDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$petDtoJsonldPut = new \Bankiru\PetClient\Model\PetDtoJsonldPut(); // \Bankiru\PetClient\Model\PetDtoJsonldPut | The updated PetDto resource

try {
    $result = $apiInstance->apiPetupdatePut($petDtoJsonldPut);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetDtoApi->apiPetupdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **petDtoJsonldPut** | [**\Bankiru\PetClient\Model\PetDtoJsonldPut**](../Model/PetDtoJsonldPut.md)| The updated PetDto resource | |

### Return type

[**\Bankiru\PetClient\Model\PetDtoJsonldRead**](../Model/PetDtoJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
