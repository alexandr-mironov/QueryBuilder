<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class LessThen
 *
 * @package QueryBuilder\Conditions
 */
class LessThen extends Equal
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::LESS_THEN;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid arguments for Less Then condition';
}
