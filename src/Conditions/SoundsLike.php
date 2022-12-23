<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\MySQL\ComparisonOperators;

/**
 * Class SoundsLike
 *
 * @package QueryBuilder\Conditions
 */
class SoundsLike extends Like
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::SOUNDS_LIKE;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid argument for ' . self::CONDITION_OPERATOR . ' condition';
}
