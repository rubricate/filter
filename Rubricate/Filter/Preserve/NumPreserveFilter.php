<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2016
 * 
 */


namespace Rubricate\Filter\Preserve;

use Rubricate\Filter\IGetFilter;

class NumPreserveFilter implements IGetFilter
{
    private $search = '/[^0-9]/' ;

    public function getFilter($value) 
    {
        return (int) preg_replace($this->search, '', $value);
    }

}

