<?php 

declare(strict_types=1);

namespace Rubricate\Filter;

interface IGetFilter
{
    public function getFilter(string $value): string;
}

