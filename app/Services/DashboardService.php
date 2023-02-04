<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Vehicle;
use Illuminate\Support\Collection;

class DashboardService
{
    public function getCarList(): Collection
    {
        return Vehicle::query()->get("plate");
    }


}
