<?php 

namespace Rubricate\Filter;

interface IGetFilter
{
    public function getFilter(string $value): string;
}

