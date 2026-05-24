<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class ReplaceFilter extends AbstractSeparatorWordFilter implements IGetFilter
{
    public function __construct(
        string $searchSeparator = ' ',
        private readonly string $replacementSeparator = '-'
    ) {
        parent::__construct($searchSeparator);
    }

    public function getFilter(string $value): string
    {
        return str_replace(
            $this->getSeparator(),
            $this->replacementSeparator,
            $value
        );
    }
}
