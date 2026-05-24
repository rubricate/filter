<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

abstract class AbstractSeparatorWordFilter implements IGetSeparatorFilter
{
    public function __construct(
        private readonly string $separator = ' '
    ) {
    }

    public function getSeparator(): string
    {
        return $this->separator;
    }
}

