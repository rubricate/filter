<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

abstract class AbstractSeparatorWordFilter implements IGetSeparatorWordFilter
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

