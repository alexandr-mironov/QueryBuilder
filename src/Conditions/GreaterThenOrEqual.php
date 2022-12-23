<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class GreaterThenOrEqual
 *
 * @package QueryBuilder\Conditions
 */
class GreaterThenOrEqual extends Equal
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::GREATER_THEN_OR_EQUAL;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid arguments for Greater Then Or Equal condition';
}
