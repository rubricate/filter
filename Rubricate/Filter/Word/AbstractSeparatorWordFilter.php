<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

abstract class AbstractSeparatorWordFilter implements IGetSeparatorWordFilter
{
    private string $separator;

    public function __construct(string $separator = ' ')
    {
        $this->setSeparator($separator);
    }

    private function setSeparator(string $separator): void
    {
        $this->separator = $separator;
    }

    public function getSeparator(): string
    {
        return $this->separator;
    }
}
