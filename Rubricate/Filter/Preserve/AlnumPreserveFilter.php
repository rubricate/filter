<?php

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumPreserveFilter implements IGetFilter
{
    private $search = '/[^a-zA-Z\]0-9]/' ;

    public function getFilter($value) 
    {
        return (string) preg_replace($this->search, '', $value);
    }

}

