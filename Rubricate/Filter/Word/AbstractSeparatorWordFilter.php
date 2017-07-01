<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2013 - 2017
 * 
 */


namespace Rubricate\Filter\Word;


abstract class AbstractSeparatorWordFilter implements IGetSeparatorWordFilter
{

    private $separator = null;


    public function __construct($separator = ' ') 
    {
        self::setSeparator($separator);
    }





    private function setSeparator($separator)
    {
        if (!is_string($separator)) {
            throw new \Exception('"' 
                . $separator 
                . '" is not a valid separator.'
            );
        }

        $this->separator = $separator;
        return $this;
    }





    public function getSeparator()
    {
        return $this->separator;
    }





}
