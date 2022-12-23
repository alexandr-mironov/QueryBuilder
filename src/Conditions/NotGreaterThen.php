<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class NotGreaterThen
 *
 * @package QueryBuilder\Conditions
 */
class NotGreaterThen extends GreaterThen
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::NOT_GREATER_THEN;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid argument for Not Greater Then condition';
}
