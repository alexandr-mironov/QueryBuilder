<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;

/**
 * Class IsNotNull
 *
 * @package QueryBuilder\Conditions
 */
class IsNotNull extends IsNull
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::IS_NOT_NULL;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid arguments for IS NULL condition';
}
