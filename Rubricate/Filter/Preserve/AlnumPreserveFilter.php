<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumPreserveFilter implements IGetFilter
{
    private string $search = '/[^a-zA-Z\]0-9]/' ;

    public function getFilter(string $value): string
    {
        return preg_replace($this->search, '', $value) ?? '';
    }

}

