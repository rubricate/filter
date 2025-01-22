<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class CamelCaseToSeparatorWordFilter extends 
    AbstractSeparatorWordFilter implements IGetFilter
{
    public function __construct(string $separator = ' ')
    {
        parent::__construct($separator);
    }

    public function getFilter(string $value): string
    {
        $words = preg_split('/(?<=[a-z])(?=[A-Z])/x', $value) ?: [];

        return implode(parent::getSeparator(), $words);
    }
}
