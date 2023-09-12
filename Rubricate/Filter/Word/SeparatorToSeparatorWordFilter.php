<?php

declare(strict_types=1);

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class SeparatorToSeparatorWordFilter extends 
    AbstractSeparatorWordFilter implements  IGetFilter
{
    protected $_replaceSeparator = '';

    public function __construct(
        $searchSeparator = ' ', 
        $replacementSeparator = '-'
    ) { 
        parent::__construct($searchSeparator);
        $this->_replaceSeparator = $replacementSeparator;
    }

    public function getFilter($value): string
    {
        if (!is_string($this->_replaceSeparator)) {
            throw new \Exception('"' 
                . $this->_replaceSeparator 
                . '" is not a valid replaceSeparator.'
            );
        }

        return str_replace(
            parent::getSeparator(), 
            $this->_replaceSeparator, $value
        );

    }
}

