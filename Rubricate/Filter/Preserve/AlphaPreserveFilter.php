<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlphaPreserveFilter implements IGetFilter
{
    private $search = '/[^a-zA-Z]/' ;

    public function getFilter($value): string
    {
        return (string) preg_replace($this->search, '', $value);
    }

}

