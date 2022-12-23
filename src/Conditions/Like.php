<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;
use QueryBuilder\Exceptions\Exception;

/**
 * Class Like
 *
 * @package QueryBuilder\Conditions
 */
class Like extends AbstractCondition
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::LIKE;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid condition parameters';

    /**
     * Like constructor.
     *
     * @param array<mixed> $conditionParts
     *
     * @throws Exception
     */
    public function __construct(array $conditionParts)
    {
        [$left, $right] = $conditionParts;
        if (!isset($left, $right)) {
            throw new Exception(static::EXCEPTION_MESSAGE);
        }
        parent::__construct([$left, $right]);
    }
}
