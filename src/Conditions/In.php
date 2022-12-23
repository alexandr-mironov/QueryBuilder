<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

use QueryBuilder\ComparisonOperators;
use QueryBuilder\Exceptions\Exception;

/**
 * Class In
 *
 * @package QueryBuilder\Conditions
 */
class In extends AbstractCondition
{
    /** @var string */
    protected const CONDITION_OPERATOR = ComparisonOperators::IN;

    /** @var string */
    protected const EXCEPTION_MESSAGE = 'Invalid right hand of IN condition';

    /**
     * @inheritDoc
     */
    public function __construct(array $conditionParts)
    {
        [$left, $right] = $conditionParts;
        if (!is_array($right)) {
            throw new Exception(static::EXCEPTION_MESSAGE);
        }
        foreach ($right as &$el) {
            $el = $this->quote($el);
        }

        $this->condition = $this->glueParts(
            $this->quote($left),
            static::CONDITION_OPERATOR,
            '(' . implode(',', $right) . ')'
        );
    }
}
