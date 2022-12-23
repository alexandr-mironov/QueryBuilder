<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;
use QueryBuilder\Exceptions\Exception;

/**
 * Class Equal
 *
 * @package QueryBuilder\Conditions
 */
class Equal extends AbstractCondition
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::EQUAL;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Equal condition required two elements';

    /**
     * Equal constructor.
     *
     * @param array<mixed> $conditionParts
     *
     * @throws Exception
     */
    public function __construct(array $conditionParts)
    {
        [$left, $right] = $conditionParts;
        if (!isset($left, $right) || !$left) {
            throw new Exception(static::EXCEPTION_MESSAGE);
        }
        parent::__construct([$left, $right]);
    }
}
