<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;
use InvalidArgumentException;

class SeparatorToSeparatorWordFilter extends 
    AbstractSeparatorWordFilter implements IGetFilter
{
    public function __construct(
        string $searchSeparator = ' ',
        private string $replacementSeparator = '-'
    ) {
        parent::__construct($searchSeparator);
    }

    public function getFilter(string $value): string
    {
        if (!is_string($this->replacementSeparator)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid replacementSeparator.',
                    $this->replacementSeparator
                )
            );
        }

        return str_replace(
            parent::getSeparator(),
            $this->replacementSeparator,
            $value
        );
    }
}
