<?php
/**
 * ApiPetsGetCollection200ResponseHydraView
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bankiru\PetClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Hello API Platform
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bankiru\PetClient\Model;

use \ArrayAccess;
use \Bankiru\PetClient\ObjectSerializer;

/**
 * ApiPetsGetCollection200ResponseHydraView Class Doc Comment
 *
 * @category Class
 * @package  Bankiru\PetClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiPetsGetCollection200ResponseHydraView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api_pets_get_collection_200_response_hydra_view';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'atId' => 'string',
        'atType' => 'string',
        'hydrafirst' => 'string',
        'hydralast' => 'string',
        'hydraprevious' => 'string',
        'hydranext' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'atId' => 'iri-reference',
        'atType' => null,
        'hydrafirst' => 'iri-reference',
        'hydralast' => 'iri-reference',
        'hydraprevious' => 'iri-reference',
        'hydranext' => 'iri-reference'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'atId' => false,
		'atType' => false,
		'hydrafirst' => false,
		'hydralast' => false,
		'hydraprevious' => false,
		'hydranext' => false
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
        'atId' => '@id',
        'atType' => '@type',
        'hydrafirst' => 'hydra:first',
        'hydralast' => 'hydra:last',
        'hydraprevious' => 'hydra:previous',
        'hydranext' => 'hydra:next'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'atId' => 'setAtId',
        'atType' => 'setAtType',
        'hydrafirst' => 'setHydrafirst',
        'hydralast' => 'setHydralast',
        'hydraprevious' => 'setHydraprevious',
        'hydranext' => 'setHydranext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'atId' => 'getAtId',
        'atType' => 'getAtType',
        'hydrafirst' => 'getHydrafirst',
        'hydralast' => 'getHydralast',
        'hydraprevious' => 'getHydraprevious',
        'hydranext' => 'getHydranext'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('atId', $data ?? [], null);
        $this->setIfExists('atType', $data ?? [], null);
        $this->setIfExists('hydrafirst', $data ?? [], null);
        $this->setIfExists('hydralast', $data ?? [], null);
        $this->setIfExists('hydraprevious', $data ?? [], null);
        $this->setIfExists('hydranext', $data ?? [], null);
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
     * Gets atId
     *
     * @return string|null
     */
    public function getAtId()
    {
        return $this->container['atId'];
    }

    /**
     * Sets atId
     *
     * @param string|null $atId atId
     *
     * @return self
     */
    public function setAtId($atId)
    {
        if (is_null($atId)) {
            throw new \InvalidArgumentException('non-nullable atId cannot be null');
        }
        $this->container['atId'] = $atId;

        return $this;
    }

    /**
     * Gets atType
     *
     * @return string|null
     */
    public function getAtType()
    {
        return $this->container['atType'];
    }

    /**
     * Sets atType
     *
     * @param string|null $atType atType
     *
     * @return self
     */
    public function setAtType($atType)
    {
        if (is_null($atType)) {
            throw new \InvalidArgumentException('non-nullable atType cannot be null');
        }
        $this->container['atType'] = $atType;

        return $this;
    }

    /**
     * Gets hydrafirst
     *
     * @return string|null
     */
    public function getHydrafirst()
    {
        return $this->container['hydrafirst'];
    }

    /**
     * Sets hydrafirst
     *
     * @param string|null $hydrafirst hydrafirst
     *
     * @return self
     */
    public function setHydrafirst($hydrafirst)
    {
        if (is_null($hydrafirst)) {
            throw new \InvalidArgumentException('non-nullable hydrafirst cannot be null');
        }
        $this->container['hydrafirst'] = $hydrafirst;

        return $this;
    }

    /**
     * Gets hydralast
     *
     * @return string|null
     */
    public function getHydralast()
    {
        return $this->container['hydralast'];
    }

    /**
     * Sets hydralast
     *
     * @param string|null $hydralast hydralast
     *
     * @return self
     */
    public function setHydralast($hydralast)
    {
        if (is_null($hydralast)) {
            throw new \InvalidArgumentException('non-nullable hydralast cannot be null');
        }
        $this->container['hydralast'] = $hydralast;

        return $this;
    }

    /**
     * Gets hydraprevious
     *
     * @return string|null
     */
    public function getHydraprevious()
    {
        return $this->container['hydraprevious'];
    }

    /**
     * Sets hydraprevious
     *
     * @param string|null $hydraprevious hydraprevious
     *
     * @return self
     */
    public function setHydraprevious($hydraprevious)
    {
        if (is_null($hydraprevious)) {
            throw new \InvalidArgumentException('non-nullable hydraprevious cannot be null');
        }
        $this->container['hydraprevious'] = $hydraprevious;

        return $this;
    }

    /**
     * Gets hydranext
     *
     * @return string|null
     */
    public function getHydranext()
    {
        return $this->container['hydranext'];
    }

    /**
     * Sets hydranext
     *
     * @param string|null $hydranext hydranext
     *
     * @return self
     */
    public function setHydranext($hydranext)
    {
        if (is_null($hydranext)) {
            throw new \InvalidArgumentException('non-nullable hydranext cannot be null');
        }
        $this->container['hydranext'] = $hydranext;

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


