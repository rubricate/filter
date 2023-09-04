<?php

namespace Rubricate\Filter\Word;

use Rubricate\Filter\IGetFilter;

class SeparatorToCamelCaseWordFilter extends 
    AbstractSeparatorWordFilter implements  IGetFilter
{
    public function __construct($separator = '-')
    {
        parent::__construct($separator);
    }

    public function getFilter($value) 
    {
        $word = array();
        $word = explode(parent::getSeparator(), $value);
        $count = count($word);

        for ($i = 0; $i < $count; ++$i){
            $word[$i] = ucfirst($word[$i]);
        }

        return implode('', $word);
    }
}

