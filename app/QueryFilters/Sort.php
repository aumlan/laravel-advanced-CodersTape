<?php

namespace App\QueryFilters;

use Closure;

/**
 * Filter Ascending or Descending Order
 */
class Sort extends Filter
{

    /**
     * method of base class
     */
    protected function applyFilter($builder)
    {
        // TODO: Implement applyFilter() method.
        return $builder->orderBy('title',request($this->filterName()));
    }
}
