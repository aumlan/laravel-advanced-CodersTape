<?php

namespace App\Repositories;

interface CustomerInterface
{
    public function all();

    public function showDetails($customerID);

    public function demo();
}
