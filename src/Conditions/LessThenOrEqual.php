<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class LessThenOrEqual
 *
 * @package QueryBuilder\Conditions
 */
class LessThenOrEqual extends Equal
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::LESS_THEN_OR_EQUAL;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid arguments Less Then Or Equal condition';
}
