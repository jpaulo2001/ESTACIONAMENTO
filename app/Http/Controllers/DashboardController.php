<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, DashboardService $service)
    {
        /*
         * top e bottom X de projectos com mais horas
         * top e bottom X de clientes com mais projectos
         * top e bottom X de horas por clientes
         * top e bottom X de horas por utilizador
         * Total Projectos em curso
         * Total Horas por mes
         */

        return view(
            'dashboard',
            [
                'top_projects' => $service->getProjectHours(10),
                'bottom_projects' => $service->getProjectHours(10, true),
                'top_customers' => $service->getCustomerProjects(10),
                'bottom_customers' => $service->getCustomerProjects(10, true),
                'top_customer_hours' => $service->getCustomerHours(10),
                'bottom_customer_hours' => $service->getCustomerHours(10, true),
            ]
        );
    }
}
