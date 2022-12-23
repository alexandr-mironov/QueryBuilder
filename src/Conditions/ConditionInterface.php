<?php

declare(strict_types=1);

namespace QueryBuilder\Conditions;

/**
 * Interface ConditionInterface
 *
 * @package QueryBuilder\Conditions
 */
interface ConditionInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}
