<?php
if (!function_exists('dashboard_url')) {
    function dashboard_url($path = '')
    {
        return \App\Helpers\DashboardHelper::getDashboardUrl($path);
    }
}
