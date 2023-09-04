<?php

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class SeparatorToSeparatorWordFilter extends 
    AbstractSeparatorWordFilter implements  IGetFilter
{
    protected $_replaceSeparator = null;

    public function __construct(
        $searchSeparator = ' ', 
        $replacementSeparator = '-'
    ) { 
        parent::__construct($searchSeparator);
        $this->_replaceSeparator = $replacementSeparator;
    }

    public function getFilter($value) 
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

