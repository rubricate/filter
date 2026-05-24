<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumDashFilter implements IGetFilter
{
    private const PATTERN = '/[^a-zA-Z0-9_-]/';

    public function getFilter(string $value): string
    {
        return preg_replace(self::PATTERN, '', $value) ?? '';
    }
}

