<?php

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class CamelCaseToSeparatorWordFilter extends 
    AbstractSeparatorWordFilter implements  IGetFilter
{
    public function __construct($separator = ' ')
    {
        parent::__construct($separator);
    }

    public function getFilter($value) 
    {
        $word = array();
        $word = preg_split('/(?<=[a-z])(?=[A-Z])/x', $value);
        $count = count($word);

        for ($i = 0; $i < $count; ++$i) 
        {
            $word[$i];
        }

        return implode(parent::getSeparator(), $word);
    }

}

