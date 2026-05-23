<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class NumPreserveFilter implements IGetFilter
{
    private const PATTERN = '/[^0-9]/';

    public function getFilter(string $value): string
    {
        return preg_replace(self::PATTERN, '', $value) ?? '';
    }
}

