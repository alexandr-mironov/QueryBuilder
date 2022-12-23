<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;
use QueryBuilder\Exceptions\Exception;
use QueryBuilder\LogicalOperators;

/**
 * Class Between
 *
 * @package QueryBuilder\Conditions
 */
class Between extends AbstractCondition
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::BETWEEN;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid condition parameters';

    /**
     * @inheritDoc
     */
    public function __construct(array $conditionParts)
    {
        [$value, $from, $to] = $conditionParts;
        if (!isset($value, $from, $to)) {
            throw new Exception(static::EXCEPTION_MESSAGE);
        }
        $this->condition = $this->glueParts(
            $this->quote($value),
            static::CONDITION_OPERATOR,
            $this->quote($from),
            LogicalOperators:: AND,
            $this->quote($to)
        );
    }
}
