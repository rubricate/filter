<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumUnderscoreHyphenPreserveFilter implements IGetFilter
{
    private string $search = '/[^a-zA-Z\]0-9\]_-]/' ;

    public function getFilter(string $value): string
    {
        return preg_replace($this->search, '', $value) ?? '';
    }

}

