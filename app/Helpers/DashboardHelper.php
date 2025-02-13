<?php

namespace App\Helpers;

class DashboardHelper
{
    public static function getDashboardUrl($path = '')
    {
        $dashboardUrl = env('DASHBOARD_URL');

        $dashboardUrl = rtrim($dashboardUrl, '/') . '/';

        return $dashboardUrl . ltrim($path, '/');
    }
}
