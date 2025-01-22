<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class NumPreserveFilter implements IGetFilter
{
    private string $search = '/[^0-9]/' ;

    public function getFilter(string $value): int
    {
        return (int) (preg_replace($this->search, '', $value)?? 0);
    }

}

