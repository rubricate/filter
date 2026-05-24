<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class ToCamelCaseFilter extends AbstractSeparatorWordFilter implements IGetFilter
{
    public function __construct(string $separator = '-')
    {
        parent::__construct($separator);
    }

    public function getFilter(string $value): string
    {
        $words = explode($this->getSeparator(), $value);
        $capitalizedWords = array_map('ucfirst', $words);

        return implode('', $capitalizedWords);
    }
}

