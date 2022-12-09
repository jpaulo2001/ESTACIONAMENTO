<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Project;
use Illuminate\Support\Collection;

class DashboardService
{
    public function getProjectHours(int $qty, bool $ascending = false): Collection
    {
        return Project::query()
            ->with('customer')  // eager loading
            ->withSum('events', 'duration')
            ->orderBy('events_sum_duration', $ascending ? 'asc' : 'desc')
            ->take($qty)
            ->get();
    }

    public function getCustomerProjects(int $qty, bool $ascending = false): Collection
    {
        return Customer::query()
            ->withCount('projects')
            ->orderBy('projects_count', $ascending ? 'asc' : 'desc')
            ->take($qty)
            ->get();
    }

    public function getCustomerHours(int $qty, bool $ascending = false): Collection
    {
        return Customer::query()
            ->withSum('events', 'duration')
            ->orderBy('events_sum_duration', $ascending ? 'asc' : 'desc')
            ->take($qty)
            ->get();
    }
}
