<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class GreaterThen
 *
 * @package QueryBuilder\Conditions
 */
class GreaterThen extends Equal
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::GREATER_THEN;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid arguments for greater then condition';
}
