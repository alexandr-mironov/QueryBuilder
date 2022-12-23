<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class NotLike
 *
 * @package QueryBuilder\Conditions
 */
class NotLike extends Like
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::NOT_LIKE;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid condition parameters';
}
