<?php
namespace {

    if (!function_exists('pq')) {
        function pq()
        {
            call_user_func(['radsectors\urp', 'pq'], func_get_args());
        }
    }

    if (!function_exists('pqd')) {
        function pqd()
        {
            call_user_func(['radsectors\urp', 'pqd'], func_get_args());
            die();
        }
    }
}
