<?php

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumUnderscoreHyphenPreserveFilter implements IGetFilter
{
    private $search = '/[^a-zA-Z\]0-9\]_-]/' ;

    public function getFilter($value) 
    {
        return (string) preg_replace($this->search, '', $value);
    }

}

