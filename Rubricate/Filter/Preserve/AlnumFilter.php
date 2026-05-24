<?php

declare(strict_types=1);

namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class AlnumFilter implements IGetFilter
{
    private const PATTERN = '/[^a-zA-Z0-9]/';

    public function getFilter(string $value): string
    {
        return preg_replace(self::PATTERN, '', $value) ?? '';
    }
}
