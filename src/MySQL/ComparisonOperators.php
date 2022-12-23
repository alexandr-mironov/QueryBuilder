<?php

declare(strict_types=1);

namespace QueryBuilder\MySQL;

use QueryBuilder\ComparisonOperators as CommonOperators;

/**
 * Class Operators
 * Operators which implemented in MySQL
 *
 * @package QueryBuilder\MySQL
 */
class ComparisonOperators extends CommonOperators
{
    /** @var string */
    public const RLIKE = 'RLIKE';

    /** @var string */
    public const SOUNDS_LIKE = 'SOUNDS LIKE';
}
