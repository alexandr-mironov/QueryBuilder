<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class NotExists
 *
 * @package QueryBuilder\Conditions
 */
class NotExists extends Exists
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::NOT_EXISTS;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid argument for Not Exists condition';
}
