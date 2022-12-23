<?php

declare(strict_types=1);

namespace QueryBuilder\Exceptions;

use JsonSerializable;

/**
 * Class Exception
 *
 * @package QueryBuilder\Exceptions
 */
class Exception extends \Exception implements JsonSerializable
{
    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        // to convert private properties too to JSON
        return get_object_vars($this);
    }
}
