<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * Base Class of Filter
 */
abstract class Filter
{

    public function handle(Builder $builder, Closure $next)
    {
        if (! request()->has($this->filterName())) {
            return $next($builder);
        }

        return $next($this->applyFilter($builder));
    }

    abstract protected function applyFilter($builder);

    /**
     * get the dynamic name/title whatever from search request
     */
    protected function filterName()
    {
        return Str::snake(class_basename($this));
    }
}
