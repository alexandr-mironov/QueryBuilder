<?php

declare(strict_types=1);

namespace QueryBuilder;

/**
 * Class Expression
 *
 * @package QueryBuilder
 */
class Expression
{
    /**
     * Expression constructor.
     *
     * @param string $expression
     */
    public function __construct(
        private string $expression
    ) {

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->expression;
    }
}
