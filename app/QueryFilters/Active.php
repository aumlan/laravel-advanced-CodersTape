<?php

namespace App\QueryFilters;

use Closure;

/**
 * Filter active=0 or 1
 */
class Active extends Filter
{

    /**
     * method of base class
     */
    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->where($this->filterName(),request($this->filterName()));
    }
}
